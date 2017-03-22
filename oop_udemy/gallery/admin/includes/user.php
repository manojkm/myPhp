    <?php

/**
 * Created by PhpStorm.
 * User: manoj
 * Date: 12/3/17
 * Time: 11:46 AM
 */
class User
{
    protected static $db_table = "users";
    public static $db_table_fields = array('username', 'password', 'first_name', 'last_name');
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;

    public static function find_all_users()
    {
        return self::find_this_query("SELECT * FROM users ");
    }

    public static function find_user_by_id($id)
    {

        $result_set = self::find_this_query("SELECT * FROM users WHERE id = $id LIMIT 1");
        return !empty($result_set) ? array_shift($result_set) : false;


    }

    public static function verify_user($username, $password)
    {
        global $database;

        $username = $database->escape_string($username);
        $password = $database->escape_string($password);

        $sql = "SELECT * FROM users WHERE ";
        $sql .= "username = '{$username}' ";
        $sql .= "AND password = '{$password}' ";
        $sql .= "LIMIT 1";

        $the_result_array = self::find_this_query($sql);
        return !empty($the_result_array) ? array_shift($the_result_array) : false;

    }


// METHOD 1
    /*    public static function find_user_by_id($id){

            $result_set = self::find_this_query("SELECT * FROM users WHERE id = $id LIMIT 1");
            $fetch_array = mysqli_fetch_array($result_set);
            return $fetch_array;

        }*/


// METHOD 2 with instantation_two method
    public static function find_this_query($sql)
    {

        global $database;
        $result_set = $database->query($sql);
        $the_object_array = array();

        while ($row = mysqli_fetch_array($result_set)) {
            $the_object_array[] = self::instantation_two($row);
        }
        return $the_object_array;

    }

// METHOD 1
    /*     public static function find_this_query($sql){
           global $database;
           $result_set = $database->query($sql);
           return $result_set;

       }*/

    public static function instantation_two($user)
    {

        $the_object = new self();
        foreach ($user as $the_attribute => $value) {

            if ($the_object->has_the_attribute($the_attribute)) {
                $the_object->$the_attribute = $value;
            }
        }
        return $the_object;

    }


    public static function instantation_one($user)
    {

        $the_object = new self();
        $the_object->id = $user['id'];
        $the_object->username = $user['username'];
        $the_object->password = $user['password'];
        $the_object->first_name = $user['first_name'];
        $the_object->last_name = $user['last_name'];

        return $the_object;

    }


    private function has_the_attribute($the_attribute)
    {
        $all_properties = get_object_vars($this);
//      array_key_exists(key, array)
        return array_key_exists($the_attribute, $all_properties);
    }

    protected function properties(){
// OLD WAY
//        global $database;
//        return get_object_vars($this);

        $properties = array();
        foreach (self::$db_table_fields as $db_field){
            if(property_exists($this, $db_field)){
                $properties[$db_field] = $this->$db_field;
            }

        }
            return $properties;
    }

    protected function clean_properties(){
        global $database;
        $clean_properties = array();
        foreach ($this->properties() as $key => $value){
            $clean_properties[$key] = $database->escape_string($value);
        }
        return $clean_properties ;
    }

    public function save()
    {
        return isset($this->id) ? $this->update() : $this->create();
    }

    public function create(){
        global $database;

        $properties = $this->clean_properties();

/*      $sql = "INSERT INTO ".self::$db_table. " (username, password, first_name, last_name)";
        $sql .= "VALUES('";
        $sql .= $database->escape_string($this->username) . "', '";
        $sql .= $database->escape_string($this->password) . "', '";
        $sql .= $database->escape_string($this->first_name) . "', '";
        $sql .= $database->escape_string($this->last_name) . "')";*/

        $sql = "INSERT INTO " .self::$db_table. "(" . implode(",", array_keys($properties)) . ")";
        $sql .= "VALUES('" . implode("','", array_values($properties)) . "')";


// OLD WAY
//        if( $database->query($sql)){
//            $this->id = $database->the_insert_id();
//            return true;
//        }
//
//        else {
//
//            return false;
//        }


// NEW WAY
        $database->query($sql);
        return (mysqli_affected_rows($database->connection) == 1) ? true : false;

    }


    public function update(){

        global $database;
        $properties = $this->clean_properties();
        $property_pairs = array();

        foreach ($properties as $key => $value) {
            $property_pairs[] = "{$key} = '{$value}'";

        }

        $sql = "UPDATE ".self::$db_table. " SET ";
        $sql .= implode(",", $property_pairs );
//        $sql .= "username= '" . $database->escape_string($this->username) . "',";
//        $sql .= "password= '" . $database->escape_string($this->password) . "',";
//        $sql .= "first_name= '" . $database->escape_string($this->first_name) . "',";
//        $sql .= "last_name= '" . $database->escape_string($this->last_name) . "'";
        $sql .= " WHERE id = " . $database->escape_string($this->id);

        $database->query($sql);

        return (mysqli_affected_rows($database->connection) == 1) ? true : false;

    }


    public function delete(){

        global $database;

        $sql = "DELETE FROM ".self::$db_table. "  ";
        $sql .= "WHERE id=" . $database->escape_string($this->id);
        $sql .= " LIMIT 1";

        $database->query($sql);
        return (mysqli_affected_rows($database->connection) == 1) ? true : false;


    }

}
?>
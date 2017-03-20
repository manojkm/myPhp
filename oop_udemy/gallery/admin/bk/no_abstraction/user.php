    <?php

/**
 * Created by PhpStorm.
 * User: manoj
 * Date: 12/3/17
 * Time: 11:46 AM
 */
class User
{

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

//     array_key_exists(key, array)
        return array_key_exists($the_attribute, $all_properties);

    }


    public function create(){
        global $database;
        $sql = "INSERT INTO users (username, password, first_name, last_name)";
        $sql .= "VALUES('";
        $sql .= $database->escape_string($this->username) . "', '";
        $sql .= $database->escape_string($this->password) . "', '";
        $sql .= $database->escape_string($this->first_name) . "', '";
        $sql .= $database->escape_string($this->last_name) . "')";


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

        $sql = "UPDATE users SET ";
        $sql .= "username= '" . $database->escape_string($this->username) . "',";
        $sql .= "password= '" . $database->escape_string($this->password) . "',";
        $sql .= "first_name= '" . $database->escape_string($this->first_name) . "',";
        $sql .= "last_name= '" . $database->escape_string($this->last_name) . "'";
        $sql .= " WHERE id = " . $database->escape_string($this->id);

        $database->query($sql);

        return (mysqli_affected_rows($database->connection) == 1) ? true : false;

    }


    public function delete(){

        global $database;

        $sql = "DELETE FROM users ";
        $sql .= "WHERE id=" . $database->escape_string($this->id);
        $sql .= " LIMIT 1";

        $database->query($sql);
        return (mysqli_affected_rows($database->connection) == 1) ? true : false;


    }

}


?>
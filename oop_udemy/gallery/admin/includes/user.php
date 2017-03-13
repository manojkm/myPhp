<?php
/**
 * Created by PhpStorm.
 * User: manoj
 * Date: 12/3/17
 * Time: 11:46 AM
 */


class User{


    public $id;
    public $username;
    public $first_name;
    public $last_name;

    public static function find_all_users(){

        return self::find_this_query("SELECT * FROM users ");

    }

    public static function find_user_by_id($id){

        $result_set = self::find_this_query("SELECT * FROM users WHERE id = $id LIMIT 1");
        $fetch_array = mysqli_fetch_array($result_set);
        return $fetch_array;

    }

   public static function find_this_query($sql){

       global $database;
       $result_set = $database->query($sql);
       return $result_set;

   }

   public static function instantation_one($user){

        $the_object = new self();
        $the_object->id          = $user['id'];
        $the_object->username    = $user['username'];
        $the_object->password    = $user['password'];
        $the_object->first_name  = $user['first_name'];
        $the_object->last_name   = $user['last_name'];

        return $the_object;

   }

    public static function instantation_two($user){

        $the_object = new self();

        foreach ($user as $the_attribute => $value) {

            if ($the_object->has_the_attribute($the_attribute)){

                $the_object->$the_attribute = $value;
            }
            
        }

        return $the_object;


    }

    private static function has_the_attribute($the_attribute){

       $all_properties = get_object_vars($this);

//     array_key_exists(key, array)
       return array_key_exists($the_attribute, $all_properties);

    }

}


?>
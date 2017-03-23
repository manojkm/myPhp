<?php
/**
 * Created by PhpStorm.
 * User: manoj
 * Date: 23/3/17
 * Time: 10:10 PM
 */


class Db_object{

    protected static $db_table = "users";

    public static function find_all()
    {
//        return self::find_this_query("SELECT * FROM users ");
        return self::find_this_query("SELECT * FROM " .self::$db_table. " ");
    }
    public static function find_by_id($id)
    {

        $result_set = self::find_this_query("SELECT * FROM " .self::$db_table. " WHERE id = $id LIMIT 1");
        return !empty($result_set) ? array_shift($result_set) : false;

    }


    public static function find_all_users()
    {
//        return self::find_this_query("SELECT * FROM users ");
        return self::find_this_query("SELECT * FROM " .self::$db_table. " ");
    }



    public static function find_user_by_id($id)
    {

        $result_set = self::find_this_query("SELECT * FROM " .self::$db_table. " WHERE id = $id LIMIT 1");
        return !empty($result_set) ? array_shift($result_set) : false;


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



}
















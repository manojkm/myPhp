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

}


?>
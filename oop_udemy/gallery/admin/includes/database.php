<?php

require_once ("new_config.php");

class Database{


  public $connection;

// OLD WAY
//    public function open_db_connection()
//    {
//        $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME );
//        if (mysqli_connect_errno())
//        {
//            die("Databse conection went badly" . mysqli_error());
//        }
//    }


    public function open_db_connection(){
        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME );

        if ($this->connection->connect_errno)
        {
            die("Databse conection went badly" . $this->connection->connect_errno);
        }
    }




   public function __construct()
   {

       $this->open_db_connection();

   }

// OLD WAY
//    public function query($sql){
//
//        $result = mysqli_query($this->connection, $sql);
//        return $result;
//    }


    public function query($sql){

        $result = $this->connection->query($sql);
        $this->confrim_query($result);
        return $result;
    }


    private function confrim_query($result){

        if (!$result){
            die("Query failed".$this->connection->error);
        }
    }


    public function escape_string($string){

// OLD WAY
//        $escaped_string = mysqli_real_escape_string($this->connection, $string );

        $escaped_string = $this->connection->real_escape_string($string);
            return $escaped_string;
    }


    public function the_insert_id (){
        return $this->connection->insert_id;

    }


}

$database = new Database();


?>
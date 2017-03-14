<?php
/**
 * Created by PhpStorm.
 * User: manoj
 * Date: 12/3/17
 * Time: 11:45 AM
 */


class Database{

    public $connection;

    public function __construct()
    {
        $this->open_connection();
    }


    public function open_connection(){

//Method2
        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        if ($this->connection->connect_errno){

            printf("Connection failed: %s", $this->connection->connect_errno());
            exit();

        }
        return true;

//Method1
/*        $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        if ( mysqli_connect_errno() ) {
            printf("Connection failed: %s", mysqli_connect_error());
            exit();

        }*/

    }


   public function query($sql)
   {
      // $result = mysqli_query($this->connection, $sql);
       $result = $this->connection->query($sql);

       $this->confirm_query($result);

       return $result;
   }


   public function confirm_query($result){
       if (!$result){
           echo "DB connection failed" . $this->connection->error;
       }
   }

   public function escape_string($string){

//      $escaped_string = mysqli_escape_string($this->connection, $string);
        $escaped_string = $this->connection->real_escape_string($string);
        return $escaped_string;
   }


   public function the_insert_id(){
       return $this->connection->insert_id;
   }

}

$database = new Database();

//$test = new mysqli();
//$test->insert_id


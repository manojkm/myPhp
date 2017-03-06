<?php

function __autoload($class){

        $class = strtolower($class);
        $path = "includes/{$class}.php";

            if(file_exists($path)){

                require_once ($path);
            }

            else {

                die("The file $class.php was not found man..");
            }

}

function redirect($location){
    header("Location:{$location}");
}

?>
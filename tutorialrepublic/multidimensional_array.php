<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18/2/17
 * Time: 3:05 PM
 */


$contracts = array(

    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),

    array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),

);


echo "Peter Parker's Email-id is: " . $contracts[1]["email"];
echo "<hr/>" ;

//Viewing Array Structure and Values
print_r($contracts);
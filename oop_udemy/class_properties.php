<?php

class Car{

    var $wheel_count =4;
    var $door_count = 4;

    function greetings()
    {
        return "This car has " . $this->wheel_count . " Doors";
    }

}

$bmw = new Car();

echo $bmw->greetings();


echo  "<hr/>";

$mercedez = new Car();
$mercedez->wheel_count = 6;

echo $mercedez->greetings();

?>


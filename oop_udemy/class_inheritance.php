<?php

class Cars {

var $wheels =4;


    public function greetings(){
       echo  "This car has " .$this ->wheels . " Wheels";
    }
}


class Truck extends Cars{

    var $wheels =6;

}

$bmw = new Cars();
$bmw->greetings();

echo "<hr/>";

$mer = new Truck();
$mer->greetings();

?>
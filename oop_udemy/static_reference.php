<?php

class Cars{


    static $wheel_count = 40;
    static $door_count = 6;


    static function getvalue () {

        return self::$wheel_count;

    }

}

echo Cars::getvalue();



class Truck extends Cars {

    static function display(){

        echo parent::getvalue();
    }

}

echo "<hr/>";


Truck::display();
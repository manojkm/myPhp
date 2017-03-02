<?php


class Cars
{

    public $wheel_count =4;
    static $door_count = 8;

    function greetings(){

    }

}
//
//$bmw = new Cars();
//echo $bmw->wheel_count;

echo Cars::$door_count;
//echo Cars::$wheel_count;
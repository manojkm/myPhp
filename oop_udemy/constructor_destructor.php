<?php


class Cars{

    public $wheel_count = 4;
    static $door_count = 4;


    public function __construct()
    {
        echo $this->wheel_count;
        echo self::$door_count++;
    }


}


$bmw = new Cars();

echo "<br/>";

$bmw2 = new Cars();

echo "<br/>";

$bmw3 = new Cars();

echo "<br/>";

$bmw4 = new Cars();
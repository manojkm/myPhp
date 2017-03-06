<?php

class Cars {


    public $wheel_count =4;
    private $door_count = 4;
    protected $seat_count = 8;


        function greeting()
        {
            return "This car has " . $this->seat_count . " Wheels" ;
        }


}



$bmw = new Cars();
echo $bmw->wheel_count;
//echo $bmw->door_count;
//echo $bmw->seat_count;

echo $bmw->greeting();
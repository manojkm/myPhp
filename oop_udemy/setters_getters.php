<?php

class Cars {


    private $wheel_count = 4;

    function get_values()
    {

        echo $this->wheel_count;

    }

    function set_values(){

        $this->wheel_count=10;

    }




}

$bmw= new Cars();


$bmw->set_values();
$bmw->get_values();



<?php

class Cars
{

	public $wheel_count = 4;
	public $door_count = 6;

	public function greetings()

	{
		echo "Wheel count is " . $this->wheel_count . "<br/>";
		echo "Door count is " . $this->door_count . "<br/>";
	}
}


 /**
 * 
 */
 class Truck extends Cars
 {
 	public $wheel_count = 10;
 }


$bmw = new Truck();

// $bmw->greetings();

 if (method_exists($bmw, "greetinsgs")) {
 	echo "yes, method exists";
 } else {
 	 echo "no, property not exists";
 }
 



?>
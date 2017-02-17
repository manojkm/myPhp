<?php 

/**
* 
*/

// Declare the class
class Car 
{ 
	 // The properties
	public $comp;
	public $color = 'beige';
	public $hasSunRoof = true;

	public $tank;

 	private $model;

	// Methods
 	// The method can now approach the class propertieswith the $this keyword
	public function hello()
	{
		  return "Beep I am a <i>" . $this -> comp . "</i>, and I am <i>" . $this -> color . "</i>" ;
	}
	 

	public function fill($float)
	{
		  $this-> tank += $float;
		  return $this;
	}

	public function ride($float)
	{
	    $miles = $float;
	    $gallons = $miles/50;
	    $this-> tank -= $gallons;
	     return $this;
	}

	public function setModel($model)
	{
		//$this -> model = $model;

		//validate that only certain car models are assigned to the $carModel property
    	$allowedModels = array("Mercedes benz","BMW");


		if (in_array($model, $allowedModels)) {
			 $this -> model = $model;
		} else {
			  $this -> model = "not in our list of models.";
		}

	}

	public function getModel()
	{
		return "The car model is  " . $this -> model;
	}




}

 ?>
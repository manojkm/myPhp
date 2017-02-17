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


		//A private property or method can be used only by the parent.
		private $model;
		// Public methods and properties can be used by both the parent and the child classes.
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
		return "The " . __CLASS__ ." model is " . $this -> model ;

		// Other magic constants that may be of help are:

		// __LINE__ to get the line number in which the constant is used.
		// __FILE__ to get the full path or the filename in which the constant is used.
		// __METHOD__ to get the name of the method in which the constant is used. 

	}

}

 ?>
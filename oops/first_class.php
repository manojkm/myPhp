 

 <?php 

 /**
 * 
 */
 class Person
 {
 	
  public $firstname;
  public $lastname;
  public $age;

  public function __construct ($firstname, $lastname, $age)
	  {
				$this->firstname = $firstname;
				$this->lastname = $lastname;
				$this->age = $age;

	  }

	  public function meth1 ()
	  {
 			 return " A long sentence containing some properties." ;
	  }

	    public function meth2 ()
	  {
 			 return " some properties.";
	  }

 }

$teacher = new Person("manoj", "km" , 30);
$student = new Person("sangi", "ks" , 24);

// $teacher->firstname = Sangi;
// $teacher->age = 30;

echo $teacher->firstname;
echo "<br/>". $teacher -> meth1();

echo "<br/><br/>" . $student->firstname;
echo "<br/>" .$student -> meth2();


  ?>

 
<!-- 

 class Fruit { // Class
  public $count = 3; // Property
  public $type;  // Property
} 

$obj1 = new ClassName(); // Instance

echo $teacher->firstname; // Accessing a property

-->



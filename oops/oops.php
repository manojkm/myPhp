<?php 
/**
* 
*/
class Classname {
  public $prop1 = true;
  public $prop2;
  public $prop3;
  public $prop4;
  public  function __construct($prop2, $prop3, $prop4) {
    $this->prop2 = $prop2;
    $this->prop3 = $prop3;
    $this->prop4 = $prop4;
  }
  public function meth1() {
  return "A long sentence containing some properties ".  $this->prop2 . ". <br> ";
  }
}
  $obj1 = new Classname("tired", "54321", 54321);
  $obj2 = new Classname("your", "name", 99);

  echo $obj1->meth1();
  echo $obj2->meth1();




 if (method_exists($obj2, "meth1")) {
          echo "<br>Method exists ";
        }
  else { echo "<br>Method not exists";}



 ?>


   <?php
        class Shape {
          public $hasSides = true;
        }
        
        class Square extends Shape {
        
        }
        
        $square = new Square();
        // Add your code below!
        if (property_exists($square, "hasSides")) {
          echo "<br>I have sides!";
        }
      ?>

<!-- Overriding Parent Methods -->


  <?php
    class Vehicle {
      public function honk() {
        return "HONK HONK!";
      }
    }
    // Add your code below!
    
    class Bicycle extends  Vehicle{
        public function honk() {
        	return "Beep beep!";
      }
    }
    
    $bicycle = new Bicycle();
    echo $bicycle -> honk();

  ?>
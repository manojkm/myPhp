<!--http://www.techflirt.com/tutorials/oop-in-php/php-type-hinting.html-->

<?php

//Class where we are going to implement typehinting
class Typehinting_Test
{
//Implementation Type Hinting in PHP
//Forcing to pass argument as object of class Test1

    public function type_hint_method(Test1 $parameter)
    {
        $parameter->test_method();
    }
}

//Below is class
class Test1
{


    public function __construct()
    {
//Do Nothing
    }

//Method to call in the type hinting class
    public function test_method()
    {
        echo 'Type Hinting in PHP works';
    }


}


$th_test = new Typehinting_Test();
//$th_test->type_hint_method(1221) //Will give fatal error: Catchable fatal error: Argument 1 passed to Typehinting_Test::type_hint_method() must be an instance of Test1, integer given
$t1 = new Test1();
$th_test->type_hint_method($t1); // Print Type Hinting in PHP works

echo '<hr/>';
?>

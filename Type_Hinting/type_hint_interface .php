<!--http://www.techflirt.com/tutorials/oop-in-php/php-type-hinting.html-->
<h1>You can also use interface in the type hinting.</h1>
<?php

//Let us create small interface
interface test
{

    public function abc();
}

//Implement the interface in the class
class test1 implements test
{

    public function __construct()
    {

    }

    public function abc()
    {
        echo 123;
    }

}


//do not implement interface
class test2
{

    public function __construct()
    {

    }

    public function abc()
    {
        echo 123;
    }
}

//Method where typehinting is by interface.
function typehinttest(test $t)
{
    $t->abc();
}

//Created object of the class
$objTest1 = new test1();
$objTest2 = new test2();

typehinttest($objTest1);//It will echo 123
echo '<hr/>' . 'Below function throw error';
typehinttest($objTest2); // throw error

?>
<?php
include 'class_member.php';
?>

<?php


$member = new Member();
$member->username = "Fred";
echo $member->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";
$member->login();
echo $member->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";
$member->logout();
echo $member->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";

echo "<hr/>" ;

?>

<?php

class MyClass {
    public function __destruct() {
        echo "I'm about to disappear - bye bye!";
// (Clean things up here)
    }
}

$myObject = new MyClass();
unset( $myObject );       // Displays "I'm about to disappear - bye bye!"
echo "<hr/>" ;
?>


<!--Static Methods and Properties-->

<?php
/*** a simple class ***/

class myClass1{
    /*** a static variable ***/
    static $foo;
}
/** give the static variable a value ***/
myClass1::$foo = 'Bar';
/*** echo the static variable ***/
echo myClass1::$foo;
echo "<hr/>" ;
?>


<?php
class Counter{
    public static $count=1;
    function __construct(){
        echo "  ".self::$count++;
    }
}
$counter1=new Counter;
$counter2= new Counter;
$counter3= new Counter;

?>

<?php
class One{
    function arraytest(array $arr){
        print_r ($arr);
    }
}
$one=new One;
$one->arraytest("a string");
?>



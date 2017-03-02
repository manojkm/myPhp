<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18/2/17
 * Time: 3:37 PM
 */


function whatsToday ()
{
    echo "Today is " . date('l', mktime());
}

whatsToday();

echo  "<hr/>" ;
?>



<?php

class Foo {
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

echo Foo::$my_static . "\n";  //static functions can actually be called without using an object of the same class

$foo = new Foo();
echo $foo->staticValue() . "\n";
?>



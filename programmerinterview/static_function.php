<?php

class Foo {
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

echo Foo::$my_static . "\n";  //static functions can actually be called without using an object of the same class

echo "<hr/>" ;

$foo = new Foo();
echo $foo->staticValue() . "\n";
?>



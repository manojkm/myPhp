<!--http://www.techflirt.com/tutorials/oop-in-php/php-type-hinting.html-->
<h1>Type Hinting also works with normal function outside of the class</h1>
<?php

class Test_new
{
    public $var = 'this is test';
}

function typehint(Test_new $t1)
{
    echo $t1->var;
}

typehint(new Test_new()); // Will print this is test
echo '<hr/>';
?>


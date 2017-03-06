<?php
/**
 * Created by PhpStorm.
 * User: manoj
 * Date: 1/3/17
 * Time: 8:39 PM
 */

class Cars{

    function greetings()
    {

    }
    function greetings2()
    {

    }


}

$the_methods = get_class_methods('Cars');

foreach ($the_methods as $method)
{
     echo $method ."<br>";

}
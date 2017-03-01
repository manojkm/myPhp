<?php
/**
 * Created by PhpStorm.
 * User: manoj
 * Date: 1/3/17
 * Time: 8:39 PM
 */

class cars{


}

$my_classes = get_declared_classes();

foreach ($my_classes as $class)
{
    echo $class . "<br/>";

}
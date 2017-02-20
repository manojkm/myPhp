<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18/2/17
 * Time: 1:36 PM
 */

$color = "blue";
$num = 123;

$floating_point_numbers = 1.223;


echo gettype($color);

echo "<hr/>" ;

echo gettype($num);

echo "<hr/>" ;

var_dump($num);

echo "<hr/>" ;

echo  gettype($floating_point_numbers);

echo "<hr/>" ;

$colors = array("Red", "Green", "Blue");

var_dump($colors);
echo "<hr/>" ;
echo $colors {2};



class greetings {

    //properties

    public  $color = "blue";
    public  $comp;

    //methods

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }


}

$bmw = new greetings();

echo $bmw->getColor();


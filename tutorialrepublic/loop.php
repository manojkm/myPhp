<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18/2/17
 * Time: 3:22 PM
 */


$i=1;

while ($i<=10){

    $i++;

    echo "The number is " . $i . "<br>";
};


echo "<hr/>" ;

for($i=1; $i<=3; $i++){

    echo "The number is :" . $i . "<br>";

}

echo "<hr/>" ;
?>

<?php

    $colors = array("Red", "Green", "Blue");

    // Loop through colors array

   foreach ($colors as $color )
       echo $color . "<br>";


echo "<hr/>" ;



    ?>




<?php

$superhero = array(

    "name" => "Peter Parker",

    "email" => "peterparker@mail.com",

    "age" => 18

);

// Loop through superhero array

foreach($superhero as $key => $value){

    echo $key . " : " . $value . "<br>";

}

?>


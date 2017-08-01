<?php

const BR = "<br/>";
const sad = 22;

$arrayName = array(
    "first"=>"one",
    "two",
    "test"=> array("three", "four", "five"),
    "six",
    "seven",
    "eight");

echo $arrayName["first"] . BR;
echo $arrayName[0] . BR;
echo $arrayName["test"][0] . BR;
echo $arrayName[1] . BR;


$data = array(1, 1., NULL, new stdClass, sad, 'foo', array("three", "four"));

foreach ($data as $value) {
    echo gettype($value), "\n";
}


echo BR;

$cars = array(array("Volvo", 22, 18), array("BMW", 15, 13), array("Saab", 5, 2), array("Land Rover", 17, 15));


echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<hr>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<hr>";


?>


    <!-- http://www.guru99.com/arrays.html -->

<?php
$movies = array(
    "comedy" => array("Pink Panther", "John English", "See no evil hear no evil"),
    "action" => array("Die Hard", "Expendables"),
    "epic" => array("The Lord of the rings"),
    "Romance" => array("Romeo and Juliet")
);
echo $movies['comedy'][1];
echo "<pre>";
print_r($movies);
echo "</pre>";


?>

<?php
$x = array('id' => 1);

$y = array('value' => 10);

$z = $x + $y;
echo "<pre>";
print_r($z);
echo "</pre>" . "<hr>";
?>


<?php
$x = array("id" => 1);

$y = array("id" => 1);

if ($x == $y) {
    echo "true" . "<hr>";
} else {
    echo "false";

}
?>

<?php
$x = array("id" => 1);

$y = array("id" => "1");

if ($x === $y) {
    echo "true" . "<hr>";
} else {
    echo "false" . "<hr>";
}
?>

    <h3>Count function: </h3>

<?php
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");

echo count($persons);
?>

    <h3>is_array function</h3>

<?php
$lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
echo is_array($lecturers);

?>

    <h3>Sort</h3>
<?php
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");

ksort($persons);

print_r($persons);
echo "<hr>"
?>


<?php

$cars = array
(
    array("fid" => "14", "list" => "1", "uid" => "1", "filename" => "trucks.jpg", "filepath" => "sites/default/files/trucks.jpg"),
    array("fid" => "214", "list" => "21", "uid" => "13", "filename" => "car.jpg", "filepath" => "sites/default/files/car.jpg"),
);


foreach ($cars as $item) {
    echo $item['filename'] . "<br/>";
    echo $item['filepath'] . "<br/>";
    echo "<hr>";
    // to know what's in $item
    // echo '<pre>'; var_dump($item);
}


?>
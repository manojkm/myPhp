
<?php 
include 'class.php';
?>


<?php 

// Create an instance, also know as Object

$bmw = new Car();
$mercedes = new Car();

?>


<?php 

// Get the values
echo $bmw -> color; // beige
echo "<br />";
echo $mercedes -> color; // beige
echo "<hr />";
 
// Set the values of the class properties.
$bmw -> comp = "BMW";
$bmw -> color = 'red';
$mercedes -> comp = "Mercedes Benz";
$mercedes -> color = "green";
 
// Get the values again
echo $bmw -> color; // blue
echo "<br />";
echo $mercedes -> color; // beige
echo "<br />";
echo $bmw -> comp; // BMW
echo "<br />";
echo $mercedes -> comp; // Mercedes Benz
echo "<hr />";
 
// Call the hello method 
echo $bmw -> hello();
echo "<br />";
echo $mercedes -> hello(); 


// Add 10 gallons of fuel, then ride 40 miles, 
// and get the number of gallons in the tank. 
$tank = $bmw -> fill(10) -> ride(40) -> tank;
// Print the results to the screen.
echo "<br />";
echo "The number of gallons left in the tank: " . $tank . " gal.";

echo "<hr />";
$mercedes -> setModel("Mercedes benz");
//Gets the car’s model
echo $mercedes -> getModel();

?>
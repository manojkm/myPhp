
<?php

class Cars{


 public $cars_list = array
( 
	array("fid" => "14", "list"=>"1", "uid" =>"1", "filename" =>"trucks.jpg" , "filepath" => "sites/default/files/trucks.jpg" ),  
	array("fid" => "214", "list"=>"21", "uid" =>"13", "filename" =>"car.jpg" , "filepath" => "sites/default/files/car.jpg" ), 
	array("fid" => "12", "list"=>"45435", "uid" =>"3", "filename" =>"bus.jpg" , "filepath" => "sites/default/files/bus.jpg" ), 
);



}

?>


<h3>Using foreach loop without key</h3>
<?php

$car = new Cars();

$car_array =  $car->cars_list;

foreach($car_array as $item) {
   echo $item['filename'] . "<br/>";
   echo $item['filepath']. "<br/>";
   echo "<hr>";
    // to know what's in $item
   // echo '<pre>'; var_dump($item);
}

?>

<h3>Using foreach loop with key</h3>

<?php

$car = new Cars();

$car_array =  $car->cars_list;

 foreach($car_array as $i => $item) {

    echo $car_array[$i]['filename']. "<br/>";
    echo $car_array[$i]['filepath']. "<br/>";
    echo "<hr>";

    // $car_array[$i] is same as $item
}

?>

<h3>Using for loop</h3>

<?php

$car = new Cars();

$car_array =  $car->cars_list;

 for ($i = 0; $i < count($car_array); $i++) {
    echo $car_array[$i]['filename']. "<br/>";
    echo $car_array[$i]['filepath']. "<br/>";
    echo "<hr>";
}


?>



<?php
$arrayToPrint = Array (
    'car' => Array (   
        '72' => 'Camry', 
        '62' => 'Lexus', 
        '55' => 'honda', 
        '44' => 'toyota'
    ),
    'Job' => Array (   
        '70' => 'Bookstore',
        '73' => 'Cafe' 
    ) ,
    'City' => Array (  
        '68' => 'Wisconsin',
        '63' => 'Chicago' ,
        '47' => 'New York City', 
        '46' => 'Los Angeles'
    ) 
) ;

echo "output in print_r( ):<pre>";
print_r($arrayToPrint);
echo "</pre>";
echo "output in echo:<br/>";
foreach($arrayToPrint as $arrayKey=> $arrayValue1) {
    echo '<pre>';
    echo $arrayKey;
        foreach($arrayValue1 as $leafNodeValue) {
            echo '<pre>    '.$leafNodeValue.'</pre>';
        }
    echo '</pre>';
}




?>

 
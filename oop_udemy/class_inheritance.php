<?php

class Cars {

var $wheels =4;


    public function greetings(){
       echo  "This car has " .$this ->wheels . " Wheels";
    }
}


class Truck extends Cars{

    var $wheels =6;

}

$bmw = new Cars();
$bmw->greetings();

echo "<hr/>";

$mer = new Truck();
$mer->greetings();

?>

<?php

echo "<hr/>";

interface test{
    public function A($i);
    public function B($j = 20);
}

class xyz implements test{
    public function A($a){
        echo "CLASS A Value is ".$a;
    }
    public function B($b = 20){
        echo "CLASS B Value is ".$b;
    }
}
$x = new xyz();
echo $x->A(11);
echo "<br/>";
echo $x->B(10);
?>
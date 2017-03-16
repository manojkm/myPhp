<?php
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
echo "<hr/>";
?>


<?php

// http://stackoverflow.com/questions/2803321/and-vs-as-operator


$this1 = true;
$that = false;

$truthiness = $this1 and $that;
$truthiness_2 = ($this1 and $that);
 

echo "truthiness = " . $truthiness;
echo "<br/>";
echo "truthiness_2 = " . $truthiness_2;
 

?>




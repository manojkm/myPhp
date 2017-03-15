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
?>
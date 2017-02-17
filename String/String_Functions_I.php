<?php 

$myname = "David";

// you can manipulate strings easily
// with built-in funtions too
$partial = substr($myname, 0, 3);
echo "<br>$partial";

$upper = strtoupper($myname);
echo "<br>$upper";

$lower = strtolower($myname);

echo "<br>$lower";


// prints "dav"

 ?>

<?php 

$myname = "manoj";
$findletter = "n";

$findpos = strpos("$myname", "$findletter");

if ($findpos == true) {

echo "<br>$findpos";

}
else {
echo "Sorry, no 'h' in 'david'";

}
?>

<!-- String Length  -->

<?php
  $findlength = strlen("YOUR NAME");
  echo "<br>$findlength";
?>
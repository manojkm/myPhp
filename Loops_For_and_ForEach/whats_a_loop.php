<?php
	for ($leap = 2004; $leap < 2010; $leap = $leap + 1) {
	echo $leap;
	}
?>




<?php
  $langs = array("JavaScript",  "HTML/CSS", "PHP",  "Python", "Ruby");

  foreach ($langs as $lang) {
      echo "<li>$lang</li>";
  }

  unset($lang);

?>

<?php
$age =  array("JavaScript",  "HTML/CSS", "PHP",  "Python", "Ruby");

 $properties_pairs = array();

 foreach ($age  as  $value) {

            $properties_pairs[] = "{$value}";

            echo  $properties_pairs;
        }




?>
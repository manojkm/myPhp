<?php

const BR = "<br/>";

	$arrayName = array("one", "two", array("three", "four", "five"), "six","seven","eight");
	
	echo $arrayName[1] . BR;
	



$cars = array( array("Volvo",22,18),  array("BMW",15,13),  array("Saab",5,2),  array("Land Rover",17,15) );


  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";


?>
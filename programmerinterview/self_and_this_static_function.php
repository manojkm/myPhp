<!--http://www.programmerinterview.com/index.php/php-questions/php-self-vs-this/-->

<?php

class Animal {

    public static function whichClass() {
        echo "I am an Animal!";
    }

    public function sayClassName() {
        self::whichClass();
    }
}

$animalObj = new Animal();
$animalObj ->sayClassName();

?>


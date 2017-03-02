
<!--http://www.programmerinterview.com/index.php/php-questions/php-self-vs-this/-->


<?php
class Animal {

    public function whichClass ()
        {
            echo "I am an Animal!";

        }

    public function sayClassName ()

        {
            $this->whichClass();
            echo "<hr/>";
            self::whichClass();

        }

}

class Tiger extends Animal {

    public function whichClass ()
{
      echo "I am an Tiger!";

}

}

?>

<?php

$tigerObj = new Tiger();
$tigerObj->sayClassName();

?>

<!--self:: example-->



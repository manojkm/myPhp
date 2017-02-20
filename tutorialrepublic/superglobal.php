<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18/2/17
 * Time: 4:09 PM
 */

/**
 * PHP $GLOBALS
 */


$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
echo "<hr/>";

?>


<?php

/**
 * PHP $_SERVER
 */

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<hr/>";
?>



    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        First Name: <input type="text" name="fname">
        Last Name: <input type="text" name="lname">
        <input type="submit">
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")  //check whether the form has been submitted using $_SERVER["REQUEST_METHOD"].


{
    // collect value of input field
    $name = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];

    if (empty($name)) {
        echo " First Name is empty";
    } else {
        echo $name;
    }
    echo "<br/>";
    if (empty( $lname)) {
        echo "Last Name is empty";
    } else {
        echo  $lname;
    }
}
?>
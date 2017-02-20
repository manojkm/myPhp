<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18/2/17
 * Time: 3:37 PM
 */


function whatsToday ()
{
    echo "Today is " . date('l', mktime());
}

whatsToday();

?>

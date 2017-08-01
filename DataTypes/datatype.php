<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 01/08/2017
 * Time: 5:08 PM
 */


$data = array(1, 1., NULL, new stdClass, 'foo');

foreach ($data as $value) {
    echo gettype($value), "\n";
}

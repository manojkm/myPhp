<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

define('SITE_ROOT', DS . "C" . DS . "xampp"  . DS . "htdocs" . DS . "myPhp" . DS . "gallery");

defined('INCLUDES_PATH') ? null : defined('INCLUDES_PATH', SITE_ROOT . DS . "admin" .DS. "includes");

require_once('new_config.php');
require_once('database.php');
require_once('functions.php');
require_once('session.php');

//include('user.php');

?>
<?php

define('DS', DIRECTORY_SEPARATOR);

define("APP", dirname(__FILE__));



include 'system/bootstrap.php';

$bootstrap = new system\Bootstrap();
$bootstrap->init();
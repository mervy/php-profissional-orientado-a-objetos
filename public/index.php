<?php

use Mervy\PhpProOOP\core\Router;
use Mervy\PhpProOOP\support\RequestType;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

session_start();

var_dump(RequestType::get());

Router::run();

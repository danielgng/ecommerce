<?php 

session_start();

require_once("vendor/autoload.php");

use \Slim\Slim;


$app = new Slim();

$app->config('debug', true);

require_once("Site.php");
require_once("Admin.php");
require_once("Admin-user.php");
require_once("Admin-forgot.php");
require_once("Admin-categories.php");
require_once("Admin-products.php");


$app->run();

 ?>
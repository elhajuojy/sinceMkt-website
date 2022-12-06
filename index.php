<?php
require './vendor/autoload.php';


use core\Router;


$routes = new Router();


//routing

$routes->get("/", "Controller/homeController.php");
$routes->get("/home","Controller/homeController.php");
$routes->get("/about","Controller/aboutController.php");
$routes->get("/shop","Controller/shopController.php");
$routes->get("/blog","Controller/blogController.php");
$routes->get("/login","Controller/loginController.php");



$routes->run();
<?php
require __DIR__.'./vendor/autoload.php';

use core\Database;
use core\func;
use core\Router;

$config = require("config.php");
$routes = new Router();
$db = new Database($config['database']);







define('db',$db);
session_start();

// 🚀🚀




$routes = new Router();


$routes->get("/", "Controller/homeController.php");




$routes->get("/", "Controller/homeController.php");
$routes->get("/index.php", "Controller/homeController.php");
$routes->get("/home","Controller/homeController.php");
$routes->get("/about","Controller/aboutController.php");
$routes->get("/shop","Controller/shopController.php");
$routes->get("/blog","Controller/blogController.php");
$routes->get("/login","Controller/loginController.php");
$routes->post("/login","Controller/loginController.php");
$routes->get("/admin","Controller/adminDashboardController.php");
$routes->post("/admin","Controller/adminDashboardController.php");
$routes->get("/admin/addproduct","Controller/addProductController.php"); 
$routes->post("/admin/addproduct","Controller/addProductController.php");




$routes->run();


<?php
require __DIR__.'./vendor/autoload.php';

use core\Database;
use core\func;
use core\Router;

<<<<<<< HEAD
//func::dd($_SERVER['REQUEST_URI']);
=======
// func::dd($_SERVER['REQUEST_URI']);
>>>>>>> 96e18e72bc605d4532bf4705b519134284569b21

$config = require("config.php");
$routes = new Router();
$db = new Database($config['database']);

define('db',$db);
session_start();

// 🚀🚀

$router = new Router();

$router->routes([
    "/"=>"Controller/homeController.php",
    "/index.php"=> "Controller/homeController.php",
    "/home"=>"Controller/homeController.php",
    "/about"=>"Controller/aboutController.php",
    "/shop"=>"Controller/shopController.php",
    "/blog"=>"Controller/blogController.php",
    "/login"=>"Controller/loginController.php",
    "/admin"=>"Controller/adminDashboardController.php",
    "/admin/addproduct"=>"Controller/ProductController.php",
    "/admin/listproduct"=>"Controller/ListProductController.php",
    
]);


$router->run();


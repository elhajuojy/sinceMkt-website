<?php

use core\func;
use Model\Products;

$styles = 
    '<link rel="stylesheet" href="../../assets/home.css">'
;
$title = "Home";

$productlist  = (new Products())->findAll();



require "views/home.php";

// func::rander("home");
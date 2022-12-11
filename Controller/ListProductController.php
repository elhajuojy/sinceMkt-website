<?php

use core\func;
use Model\Products;

func::islogedIn("email");

$script = '<script src="../../assets/Product/js/listproduct.js"></script>';

$styles =
    '
    <link
        rel="stylesheet"    
        href="../../assets/Product/assets/bootstrap/css/bootstrap.min.css"
        />
        <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        />

        <link
        rel="stylesheet"
        href="../../assets/Product/assets/ProductList.css"
        />
        
        
    '
    // '<link rel="stylesheet" href="../../assets/home.css">'
;


if (isset($_POST["logout"])) {
    func::logOut();
}

$productList = (new Products())->findAll();


$title = "List Product";







if (isset($_GET["displaySend"])){
    require "views/ProductList.php";
    die();
}

if(isset($_POST) && isset($_POST["DELETE"])){
    $product = new Products();

    $product->removeById($_POST["id"]);
    func::goTo("/admin/listproduct");
}



require "views/ProductList.php";

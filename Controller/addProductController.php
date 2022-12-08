<?php 


// Path: Controller\addProductController.php

use core\func;
use Model\Products;


$styles = '<link
rel="stylesheet"
href="/assets/Product/assets/bootstrap/css/bootstrap.min.css"
/>'// '<link rel="stylesheet" href="../../assets/home.css">'
;
$title = "Admin Dashboard";

if($_SERVER["REQUEST_METHOD"]=="GET"){

}

if($_SERVER["REQUEST_METHOD"]=="POST"){

    
    $product = new Products();
    $product->__set('title', $_POST['title']);
    $product->__set('description', $_POST['description']);
    $product->__set('price', floatval($_POST['price']));
    $product->__set('image', $_POST['image']);
    $product->save([
        'title' => $product->__get('title'),
        'description' => $product->__get('description'),
        'price' => $product->__get('price'),
        'image' => $product->__get('image'),
    ]);
    
    func::dd($product->findAll());

}



require "views/addProduct.php";
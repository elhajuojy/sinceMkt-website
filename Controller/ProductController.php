<?php


// Path: Controller\ProductController.php

use core\func;
use Model\Products;


$styles = '<link
rel="stylesheet"
href="/assets/Product/assets/bootstrap/css/bootstrap.min.css"
/>' // '<link rel="stylesheet" href="../../assets/home.css">'
;

$title = "Admin Dashboard";

$product = new Products();
$product->__set('title', "");
$product->__set('description', "");
$product->__set('price', 0);
$product->__set('image', "");


$msgError = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {
        // echo "id is set";
        $product = (new Products())->findById($_GET["id"]);
        // func::dd($product);  
        require "views/ProductAdd.php";
        die();
    }
    
}





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imagename = "";
    if (isset($_FILES['fileToUpload']) ) {
        $imagename =  func::imageUpload('fileToUpload');
    }
    $product = new Products();
    $product->__set('title', $_POST['title']);
    $product->__set('description', $_POST['description']);
    $product->__set('price', floatval($_POST['price']));
    $product->__set('image', "../assets/images/" . $imagename);
    if(func::emptyInput($_POST['title']) || func::emptyInput($_POST['description']) || func::emptyInput($_POST['price']) || func::emptyInput($imagename)){
        $msgError = "Please fill all the fields";
        require "views/ProductAdd.php";
        die();
    }
    if($_POST["submit"]=="Update"){
        func::dd($_POST["id"]);
        $product->update($_POST["id"],[
            'title' => $product->__get('title'),
            'description' => $product->__get('description'),
            'price' => $product->__get('price'),
            'image' => $product->__get('image'),
        ]);
        func::goTo("/admin/listproduct");
        die();
    }
    // Add 
    $product->save([
        'title' => $product->__get('title'),
        'description' => $product->__get('description'),
        'price' => $product->__get('price'),
        'image' => $product->__get('image'),
    ]);
    func::goTo("/admin/addproduct");
   

}



require "views/ProductAdd.php";

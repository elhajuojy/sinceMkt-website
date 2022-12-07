<?php

use core\func;
use Model\Admin;

$styles = 
   '<link rel="stylesheet" href="../../assets/css/login.css">'
;

$title = "Login";
$emailerror = "";
$passworderror = "";

if($_SERVER["REQUEST_METHOD"]=="GET"){

}



if($_SERVER["REQUEST_METHOD"]=="POST"){
   $password = $_POST['password'];
   $email = $_POST['email'];
   
   $admin = new Admin();

   //todo the validation  for the inputs 
   if(func::emptyInput($password)|| func::emptyInput($email)){
    $emailerror = "email filed is empty";
    $passworderror = "password filed is empty ";
   }
   
   
   $admin = $admin->findWhere($email,$password);

    if(!$admin){
            $emailerror ="email is not correct";
            $passworderror ="password not correct";
    }
    else{
        //todo :go to admin dashborad and create session for this login event 
        // func::dd($admin);
        $_SESSION["email"] = $admin[0]->login;
        $_SESSION["name"]  = $admin[0]->name;
        
        echo $_SESSION["email"];
        echo $_SESSION["name"] ;
        func::goTo("/admin");
    }
    
}
require "views/login.php";



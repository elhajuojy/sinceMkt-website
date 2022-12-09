<?php

use core\func;

func::islogedIn("email");


if(isset($_POST["logout"])){
    func::logOut();
}



$styles = 
    '
          <link
          rel="stylesheet"
          href="assets/Admin/assets/bootstrap/css/bootstrap.min.css?h=025df1ec88740cad5ff14bb3380da6dd"
        />

        <link
          rel="stylesheet"
          href="assets/Admin/assets/css/styles.min.css?h=f3f5e3e0fd9b38313d60c6777e01a15a"
        />
    '
    // '<link rel="stylesheet" href="../../assets/home.css">'
;
$title = "Admin Dashboard";

require "views/admindashboard.php";
// func::rander("admindashboard");



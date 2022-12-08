<?php

namespace core;

class func
{

    public static function dd($data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die();
    }

    public static function urlIs($value)
    {
        return $_SERVER['REQUEST_URI'] === $value;
    }
    
    public static function emptyInput($value){
        if (!empty($value) ) {
            return  $result = false;
        }
        return $result = true;
    }
    
    public static function goTo(string $location, $code = 200){
        header("location: ".$location);
        exit();
    }
    public static function islogedIn($value){
        if(!isset($_SESSION[$value]))
        {   
            self::goTo("/");
        }
    }
    public static function logOut(){
        session_start();
        session_unset();
        session_destroy();
        self::goTo("/");
    }
    public static function rander($path){
        require_once "views/".$path.".php";
    }
    
}

<?php

namespace core;

define("MB", 1048576);

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

    public static function emptyInput($value)
    {
        if (!empty($value)) {
            return  $result = false;
        }
        return $result = true;
    }

    public static function goTo(string $location, $code = 200)
    {
        header("location: " . $location);
        exit();
    }
    public static function islogedIn($value)
    {
        if (!isset($_SESSION[$value])) {
            self::goTo("/");
        }
    }
    public static function logOut()
    {
        session_start();
        session_unset();
        session_destroy();
        self::goTo("/");
    }
    
    public static function rander($path)
    {
        require "./views/" . $path . ".php";
    }

    public static function get($value)
    {
        if (isset($_GET[$value])) {
            return $_GET[$value];
        }
    }
    public static function post($value)
    {
        if (isset($_POST[$value])) {
            return $_POST[$value];
        }
    }
    
    
    public static function hash($value)
    {
        return password_hash($value, PASSWORD_DEFAULT);
    }
    public static function verify($value, $hash)
    {
        return password_verify($value, $hash);
    }

    public static function imageUpload($imageRequest, $imagePath = "assets/images/")
    {
        global $msgError;
        $imagename  = rand(1000, 10000) . $_FILES[$imageRequest]['name'];
        $imagetmp   = $_FILES[$imageRequest]['tmp_name'];
        $imagesize  = $_FILES[$imageRequest]['size'];
        $allowExt   = array("jpg", "png", "gif", "mp3", "pdf");
        $strToArray = explode(".", $imagename);
        $ext        = end($strToArray);
        $ext        = strtolower($ext);
        
        if (!empty($imagename) && !in_array($ext, $allowExt)) {
            $msgError = "EXT";
        }
        if ($imagesize > 2 * MB) {
            $msgError = "size";
        }
        if (empty($msgError)) {
            move_uploaded_file($imagetmp,  $imagePath . $imagename);
            return $imagename;
        } else {
            return "fail";
        }
    }
}

<?php

namespace core;

class func{

    public static function dd($data){
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die();
    }
}
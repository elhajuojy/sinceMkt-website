<?php

namespace core;

class Router{
    private string $uri ;
    private array $routes = [
        "GET" => [
            
        ],
        "POST" => []
    
    ];
    public function get( $uri, $controller){
         $this->routes["GET"][$uri] = $controller;
       

    }
    public function post($uri, $controller){
        $this->routes["POST"][$uri] = $controller;
       
    }
    
    public function run(){
        $uri = parse_url($_SERVER['REQUEST_URI'])['path']; 
        $method = $_SERVER['REQUEST_METHOD'];
        if(array_key_exists($uri, $this->routes[$method])){
            require $this->routes[$method][$uri];
        }else{
            
            $this->abort();
        }
    }
    
    public static function abort($code = 404) {
        http_response_code($code);
        require "views/{$code}.php";
        die();
    }
    
}


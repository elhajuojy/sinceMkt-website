<?php

namespace core;

class Router{
    private string $uri ;
    private array $routes ;
    
    public function routes(array $route){
        $this->routes = $route;
    }

    public function run(){
        $uri = parse_url($_SERVER['REQUEST_URI'])['path']; 
        if(array_key_exists($uri, $this->routes)){
            require $this->routes[$uri];
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


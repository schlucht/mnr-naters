<?php

namespace OTS\App\Core;

defined('ROOTPATH') OR exit('No direct script access allowed');
Class Router
{
    private $routes = [];
    public  Container $container;
    private $controllerAction;
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function add($method, $path, $controller, $action)
    {
        $this->controllerAction = $controller . '@' .$action;        
        $this->routes[$method][$path] = $this->controllerAction;        
    }

    public function dispach() 
    {
        $method = $_SERVER["REQUEST_METHOD"];
        $path = $_SERVER["REQUEST_URI"];
        
        foreach ($this->routes[$method] ?? [] as $route => $controllerAction) {           
  
            if(preg_match($this->formatRoute($route), $path, $matches)){
                array_shift($matches);
                list($class, $action) = explode("@", $controllerAction);   
                // if ($this->container->hasKey($class))
                // {                   
                    
                    $ctrl = $this->container->build(strtolower($class));                    
                    return $ctrl->$action(array_slice($matches,1));
                //}          
            }
        }      
        http_response_code(404);
        echo "404 Not Found";
    }

    private function formatRoute($route)
    {       
        $route = preg_replace("/\{([^\/]+)\}/", '(?P<$1>[^/]+)', $route);        
        return "#^$route$#";
    }
}


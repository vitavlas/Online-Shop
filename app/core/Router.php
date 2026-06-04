<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = require_once BASE_PATH . "/config/routes.php";
    }

    public function resolve($url, $method)
    {
        foreach ($this->routes as $pattern => $route) {

            if (preg_match($pattern, $url, $matches)) {
                // Getting the slug 
                array_shift($matches);
                
                $controllerName = $route['controller'];
                $action = $route['action'];
                
                $controller = new $controllerName();
                return $controller->$action(...$matches);
                }
        }
        
        // TODO: 404 page
        throw new Exception("Requested route not found!");
    }
}
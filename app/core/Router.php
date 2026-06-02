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
        if (!isset($this->routes[$url])) {
            echo "404 - required page does not exist!";
            return;
        }

        $controllerName = $this->routes[$url]['controller'];
        $controllerAction = $this->routes[$url]['action'];

        $controller = new $controllerName();
        $controller->$controllerAction();
    }
}
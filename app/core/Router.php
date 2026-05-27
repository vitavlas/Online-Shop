<?php

class Router
{
    private array $routes = [];

    public function get(string $uri, mixed $action): void
    {
        $this->$routes["GET"][$uri] = $action;
    }

    public function resolve(string $uri, string $method): mixed
    {
        $action = $this->$routes[$method][$uri] ?? null;

        if (!$action) {
            http_response_code(404);
            // TODO: replace with real 404 page
            echo "404 not found";
            exit;
        }

        if (is_callable($action)) {
            return call_user_func($action);
        }

        if (is_array($action)) {
            [$controller, $method] = $action;
            return (new $controller)->$method();
        }
    }
}
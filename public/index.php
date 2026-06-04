<?php

define("BASE_PATH", dirname(__DIR__));

// App parts
require_once BASE_PATH . "/app/core/Router.php";
require_once BASE_PATH . "/app/core/Database.php";
require_once BASE_PATH . "/app/core/Controller.php";
require_once BASE_PATH . "/app/controllers/PageController.php";
// require_once BASE_PATH . "/app/controllers/ProductController.php";
require_once BASE_PATH . "/app/models/Product.php";

// Resolve URL
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Routing
$router = new Router();
$router->resolve($url, $method);
// FIXME: use $method variable in Router + routes.php

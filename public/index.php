<?php

require __DIR__ . "../app/core/Database.php";
require __DIR__ . "../app/core/Router.php";
require __DIR__ . "../app/core/Controller.php";

require __DIR__ . "../app/models/Product.php";
require __DIR__ . "../app/controllers/HomeController.php";

$config = require __DIR__ . "../config/config.php";

$router = new Router();

$router->get("/", [HomeController::class, "index"]);

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$method = $_SERVER["REQUEST_METHOD"];

$router->resolve($uri, $method);
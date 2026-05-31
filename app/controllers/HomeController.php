<?php

class HomeController extends Controller
{
    private Product $productModel;

    public function __construct()
    {
        $config = require __DIR__ . "/../../config/config.php";
        $db = Database::connect($config);

        $this->productModel = new Product($db);
    }

    public function index()
    {
        $products = $this->productModel->getAll();

        $this->view("home/index", ["products" => $products]);
    }
}
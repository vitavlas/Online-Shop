<?php

class HomeController
{
    private $productModel;

    public function __construct()
    {
        $db = Database::connect();

        $this->productModel = new Product($db);
    }

    public function index()
    {
        $products = $this->productModel->getAllProducts();
        $categories = $this->productModel->getAllCategories();

        $view = "home/index";

        $this->render([
            'view' => $view,
            "products" => $products,
            "categories" => $categories,
        ]);
    }

    public function render($data)
    {
        ['view' => $view, 'products' => $products, "categories" => $categories] = $data;

        require_once BASE_PATH . "/app/views/layouts/main.php";
    }
}
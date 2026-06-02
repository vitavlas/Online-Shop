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
        $products = $this->productModel->getAll();
        $view = "home/index";

        $this->render([
            'view' => $view,
            "products" => $products,
        ]);
    }

    public function render($data)
    {
        ['view' => $view, 'products' => $products] = $data;

        require_once BASE_PATH . "/app/views/layouts/main.php";
    }
}
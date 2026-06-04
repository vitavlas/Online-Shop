<?php

class PageController
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

        $this->render($view, [
            "products" => $products,
            "categories" => $categories,
        ]);
    }

    public function about()
    {
        $view = "about/index";

        $this->render($view);
    }

    public function contacts()
    {
        $view = "contacts/index";
        
        $this->render($view);
    }

    public function render($view, $data = [])
    {
        $viewFile = BASE_PATH . "/app/views/$view.php";
        
        if (!file_exists($viewFile)) {
            // TODO: change to 404
            throw new Exception("View file $viewFile not found!");
        }

        require_once BASE_PATH . "/app/views/layouts/main.php";
    }
}
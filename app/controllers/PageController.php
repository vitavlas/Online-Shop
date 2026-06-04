<?php

class PageController extends Controller
{
    private $productModel;

    public function __construct()
    {
        parent::__construct();

        $this->productModel = new Product($this->db);
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
}
<?php

class ProductController extends Controller
{
    private $productModel;

    public function __construct()
    {
        parent::__construct();

        $this->productModel = new Product($this->db);
    }

    public function showAllByCategory($cat)
    {
        $category = strtolower($cat);

        $allCategories = $this->productModel->getAllCategories();
        $products = $this->productModel->getAllByCategory($category);

        $view = "category/index";

        $this->render($view, [
            "categories" => $allCategories,
            "products" => $products,
            "category" => $category,
        ]);
    }
}
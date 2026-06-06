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
        $pageTitle = "Products in category $category";

        $allCategories = $this->productModel->getAllCategories();
        $products = $this->productModel->getAllByCategory($category);

        $view = "home/index";

        $this->render($view, [
            "pageTitle" => $pageTitle,
            "isFull" => false,
            "categories" => $allCategories,
            "products" => $products,
        ]);
    }

    public function showProductDetails($id)
    {
        $allCategories = $this->productModel->getAllCategories();
        $product = $this->productModel->getProductDetails($id);

        $view = "home/index";

        $this->render($view, [
            "pageTitle" => "{$product['title']}",
            "isFull" => true,
            "categories" => $allCategories,
            "products" => [$product],
        ]);
        
    }
}
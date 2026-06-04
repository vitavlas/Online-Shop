<?php

class ProductController extends Controller
{
    // FIXME: change to protected + extends PageController
    private $productModel;

    public function __construct()
    {
        parent::__construct();

        $this->productModel = new Product($this->db);
    }

    public function showAllByCategory($cat_id)
    {
        $products = $this->productModel->getAllByCategory($cat_id);
    }
}
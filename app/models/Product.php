<?php

class Product
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllProducts($limit = 5)
    {
        $stmt = $this->db->query("
            SELECT p.*, c.name AS category
            FROM products p
            JOIN categories c ON p.category = c.id
            ORDER BY RAND()
            LIMIT $limit
        ");
        
        return $stmt->fetchAll();
    }
        
    public function getAllCategories()
    {
        $stmt = $this->db->query("SELECT * FROM categories");

        return $stmt->fetchAll();
    }

    public function getAllByCategory($cat)
    {
        $stmt = $this->db->prepare("
            SELECT p.*, c.name AS category FROM products p
            JOIN categories c ON p.category = c.id
            WHERE c.name = :category
        ");

        $stmt->execute(['category' => $cat]);

        return $stmt->fetchAll();
    }

    public function getProductDetails($id)
    {
        $stmt = $this->db->prepare("
            SELECT p.*, c.name AS category FROM products p
            JOIN categories c ON p.category = c.id
            WHERE p.id = :id
        ");

        $stmt->execute(["id" => $id]);

        return $stmt->fetch();
    }
}
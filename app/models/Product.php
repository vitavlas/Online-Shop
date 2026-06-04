<?php

class Product
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllProducts()
    {
        $stmt = $this->db->query("
            SELECT p.*, c.name AS category
            FROM products p
            JOIN categories c ON p.category = c.id
        ");
        
        return $stmt->fetchAll();
    }
        
    public function getAllCategories()
    {
        $stmt = $this->db->query("SELECT * FROM categories");

        return $stmt->fetchAll();
    }

    public function getAllByCategory($cat_id)
    {
        $stmt = $this->db->prepare("
            SELECT * FROM products p
            JOIN categories c ON p.category = c.id
            WHERE c.id = :id
        ");

        $stmt->execute(['id' => $cat_id]);

        return $stmt->fetchAll();
    }
}
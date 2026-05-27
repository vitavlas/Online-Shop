<?php

class Product
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAll(): array
    {
        $stmt = $this->db->query("SELECT * FROM products");
        return $stmt->fetchAll(); 
    }

    public function getByCategory(string $category): array
    {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE category = ?");
        $stmt->execute([$category]);
        return $stmt->fetchAll();
    }
}
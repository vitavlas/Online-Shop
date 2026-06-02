<?php

class Product
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $dbname = "products";
        $stmt = $this->db->query("SELECT * FROM $dbname");

        return $stmt->fetchAll();
    }
}
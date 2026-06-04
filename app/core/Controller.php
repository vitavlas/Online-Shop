<?php

class Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::connect();
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
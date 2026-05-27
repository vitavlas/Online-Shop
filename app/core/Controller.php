<?php

class Controller
{
    protected function view(string $view, array $data = []): void
    {
        extract($data);

        require __DIR__ . "/../views/layouts/main.php";
    }
}
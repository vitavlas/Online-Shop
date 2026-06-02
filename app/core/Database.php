<?php

class Database
{
    private static $pdo;

    public static function connect()
    {
        if (self::$pdo) {
            return self::$pdo;
        }

        $config = require_once BASE_PATH . "/config/db.php";

        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";

        self::$pdo = new PDO($dsn, $config['user'], $config['password'], [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);

        return self::$pdo;
    }
}
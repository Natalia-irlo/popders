<?php

// Esta sería como una interfaz

abstract class CrudConnection
{
    private $connection;

    public function __construct()
    {
        $this->connection = $this->connectDatabase();
    }

    public function connectDatabase()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=popders", "root", "");

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    abstract function getRows();
    // abstract function addRow();
    // abstract function updateRow();
    // abstract function deleteRow();
}

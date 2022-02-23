<?php

/**
 * CLASE COM MUITAS RESPONSABILIDADES
 */
class Course
{
    private $name;
    private $category;
    private $description;

    public function connection()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8mb4');
        return $pdo;
    }

    public function createCategory()
    {
        $this->connection()->insert($this->category);
    }

    public function createCourse()
    {
        $this->connection()->insert($this->name);
    }

    public function getName()
    {
        return $this->name;
    }
}

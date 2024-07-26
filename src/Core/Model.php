<?php
namespace App\Core;

class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = new \PDO('mysql:host=localhost;dbname=testdb', 'root', '');
    }
}
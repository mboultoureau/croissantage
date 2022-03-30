<?php

namespace App\Repository;

class Repository
{
    protected $connexion;

    public function __construct()
    {
        $servername = "mysql";
        $username = "user";
        $password = "password";

        try {
          $this->connexion = new \PDO("mysql:host=$servername;dbname=app", $username, $password);
          $this->connexion->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
    }

    public function __destruct()
    {
        $this->connexion = null;
    }
}
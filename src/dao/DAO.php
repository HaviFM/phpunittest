<?php
namespace App\Dao;

use Exception;

class DAO {
    private $pdo;

    public function __construct() {
        $this->pdo = new \PDO('mysql:host=localhost;dbname=basededonnesfilm', 'root', '');
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function query($sql, $parameters = []) {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (Exception) {
            return false;
        }
    }

    public function getPdo() {
        return $this->pdo;
    }
}

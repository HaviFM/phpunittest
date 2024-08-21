<?php
namespace App\Model;
use App\Dao\DAO;
use Sys\Conf;


class ModelFilm {
    private $dao;


    public function __construct() {
        $this->dao = new DAO();
    }

    public function getFilms() {
        $sql = "SELECT * FROM ". Conf::$film;
        $result = $this->dao->query($sql);
        return $result;
    }
}

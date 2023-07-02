<?php
require 'DB.php';

class Istorija {
    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }

    public function getResult() {
        $result = $this->_db->query("SELECT * FROM `results` ORDER BY `id`");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getResultLimited($order, $limit) {
        $result = $this->_db->query("SELECT * FROM `results` ORDER BY $order LIMIT $limit");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getOneResult($id) {
        $result = $this->_db->query("SELECT * FROM `results` WHERE `id` = '$id'");
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function getResultCart($items) {
        $result = $this->_db->query("SELECT * FROM `results` WHERE `id` IN ($items)");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

}
<?php
require 'DB.php';

class VideoModel {
    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }

    public function getVideo() {
        $result = $this->_db->query("SELECT * FROM `video` ORDER BY `id`");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getVideoLimited($order, $limit) {
        $result = $this->_db->query("SELECT * FROM `video` ORDER BY $order LIMIT $limit");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getOneVideo($id) {
        $result = $this->_db->query("SELECT * FROM `video` WHERE `id` = '$id'");
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function getResultCart($items) {
        $result = $this->_db->query("SELECT * FROM `video` WHERE `id` IN ($items)");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

}
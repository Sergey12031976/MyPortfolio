<?php
session_start();
require 'DB.php';

class Program {

    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }

    public function getLink($title_id, $email){

        $this->title_id = $title_id;
        $this->email = $email;

        $sql = 'UPDATE `users` SET `link` = :title_id WHERE `email` = :email';
        $query = $this->_db->prepare($sql);

        $query->execute(['title_id'=>$this->title_id, 'email'=>$this->email]);
    }

    public function noneLink($email, $title_id){

        $this->title_id = $title_id;
        $this->email = $email;

        $sql = 'UPDATE `users` SET `link` = :title_id WHERE `email` = :email';
        $query = $this->_db->prepare($sql);

        $query->execute(['title_id'=>$this->title_id, 'email'=>$this->email]);
    }

    public function programNull($dateControl){
        $this -> dateControl = $dateControl;
        $dateControl = getdate();
        foreach ( $dateControl as $key => $val ) echo "$key = $val<br>";
        echo "<hr>Сегодня: $dateControl[mday].$dateControl[mon].$dateControl[year]";
//        $result = $this->_db->query("SELECT * FROM `users` WHERE `date` = '$dateControl'");
//        return $result->fetchAll(PDO::FETCH_ASSOC);

    }


//    public function getTiket($email){
//
//        $this->email = $email;
//        $result = $this->_db->query('SELECT `link` FROM `users` WHERE `email` = :email');
//        return $result->fetchAll(PDO::FETCH_ASSOC);
//        $this->link = $result;
//
//        $sql = 'UPDATE `users` SET `program` = :link WHERE `email` = :email';
//        $query = $this->_db->prepare($sql);
//
//        $query->execute(['link'=>$this->link, 'email'=>$this->email]);
//    }

    public function getProgram() {
        $result = $this->_db->query("SELECT * FROM `programs` ORDER BY `id` DESC");
        return $result->fetchAll(PDO::FETCH_ASSOC);

    }

//    public function getUserProgram() {
//        $result = $this->_db->query("SELECT `link` FROM `programs` ORDER BY `id` DESC");
//        return $result->fetch(PDO::FETCH_ASSOC);
//    }

    public function getProgramLimited($order, $limit) {
        $result = $this->_db->query("SELECT * FROM `programs` ORDER BY $order DESC LIMIT $limit");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneProgram($id) {
        $result = $this->_db->query("SELECT * FROM `programs` WHERE `id` = '$id'");
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function getProgramCart($items) {
        $result = $this->_db->query("SELECT * FROM `programs` WHERE `id` IN ($items)");
        return $result->fetchAll(PDO::FETCH_ASSOC);

    }

    public function dataUser() {
        $email = $_COOKIE['log'];
        $result = $this->_db->query("SELECT * FROM `users` WHERE `email` = '$email'");
        return $result->fetch(PDO::FETCH_ASSOC);
    }

}

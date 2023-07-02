<?php
require 'DB.php';

class ResultModel
{
//    private $email;

    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }

//    public function setData($email)
//    {
//        $this->email = $email;
//
//    }

    public function getResult($email) {
       $email= $_COOKIE['log'];
        $result = $this->_db->query("SELECT * FROM `resultweight` WHERE `email` = '$email' ORDER BY `id`");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

//    public function getResult() {
//        $result = $this->_db->query("SELECT * FROM `resultweight` ORDER BY `email` ");
//        return $result->fetchAll(PDO::FETCH_ASSOC);
//
//    }

//    public function getResult($email) {
//
////            $email = $_COOKIE['log'];
//        $result = $this->_db->query("SELECT * FROM `resultweight` WHERE `email` = '$email'");
//
//        return $result->fetchAll(PDO::FETCH_ASSOC);
//    }

}

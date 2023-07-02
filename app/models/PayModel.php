<?php
require 'DB.php';

class PayModel {
//    private $date;
    private $fone;
    private $addres;
    private $email;

    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }

    public function setData($fone, $addres, $email) {
//        $this->date = $date;
        $this->fone = $fone;
        $this->addres = $addres;
        $this->email = $email;

    }

    public function validForm() {
//        if(strlen($this->date) < 3)
//            return "Укажите дату заказа";
        if(strlen($this->fone) < 10)
            return "Введите номер телефона с кодом оператора";
        else if(strlen($this->addres) < 3)
            return "Укажите адрес доставки";
        else if(strlen($this->email) < 3)
            return "Email слишком короткий";
        else
            return "Верно";
    }

    public function addOrder() {
        $sql = 'INSERT INTO orders(fone, addres, email) 
                VALUES(:fone, :addres, :email)';
        $query = $this->_db->prepare($sql);

        $query->execute(['fone' => $this->fone, 'addres' => $this->addres, 'email' => $this->email]);

        Header('Location: /basket/payment');
    }

    public function getOrder() {
        $addres = $_COOKIE['login'];
        $result = $this->_db->query("SELECT * FROM `orders` WHERE `addres` = $addres");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

}
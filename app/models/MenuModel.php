<?php
require 'DB.php';

class MenuModel
{
    private $date;

    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }


    public function setData($date)
    {
        $this->date = $date;

    }

    public function validForm() {
        if(strlen($this->date) < 1)
            return "Укажите дату меню";

        else
            return "Верно";
    }

    public function getMenu($date) {
        $email = $_COOKIE['log'];
        $this->date = $date;

        $result = $this->_db->query("SELECT `message` FROM `dnevnik` WHERE `email` = '$email'");

        return $result->fetch(PDO::FETCH_ASSOC);
    }

}

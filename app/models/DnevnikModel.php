<?php
require 'DB.php';

class DnevnikModel
{
    private $email;
    private $date;
   private $message;

    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }


    public function setData($email, $date, $message)
    {
        $this->email = $email;
        $this->date = $date;
        $this->message = $message;

    }

    public function validForm() {
        if(strlen($this->date) < 1)
            return "Укажите дату меню";
        else if (strlen($this->message) < 1)
            return "Напишите меню подробнее";
        else
            return "Верно";
    }

    public function addMenu()
    {
        $sql = 'INSERT INTO `dnevnik` (`email`, `date`, `message`)
                    VALUES(:email, :date, :message)';

        $query = $this->_db->prepare($sql);

        $query->execute(['email' => $this->email, 'date' => $this->date, 'message' => $this->message]);

//        Header('Location: /user/dnevnik');
    }

    public function getMenu($email) {
        $email = $_COOKIE['log'];

        $result = $this->_db->query("SELECT * FROM `dnevnik` WHERE `email` = '$email'");

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

}

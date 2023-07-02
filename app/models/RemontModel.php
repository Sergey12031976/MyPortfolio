<?php
require 'DB.php';
class RemontModel
{
    private $name;
    private $email;
    private $fone;
    private $message;

    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }

    public function setData($name, $email, $fone, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->fone = $fone;
        $this->message = $message;
    }

    public function validForm()
    {
        if (strlen($this->name) < 3)
            return "Введите ваше имя";
        else if (strlen($this->email) < 3)
            return "введите корректный адрес Email";
        else if (strlen($this->fone) < 9)
            return "введите номер телефона с кодом мобильного опператора";
        else if (strlen($this->message) < 5)
            return "Сообщение слишком короткое";
        else
            return "Верно";
    }

    public function mail()
    {
        $to = "admin@vodasol.by";
        $message = 'Имя: ' . $this->name . '. Сообщение: ' . $this->message;

        $subject = "=?utf-8?B?" . base64_encode("Сообщение с сайта") . "?=";
        $headers = "From: $this->email\r\nReply-to: $this->email\r\nContent-type: text/html; charset=utf-8\r\n";
        $success = mail($to, $subject, $message, $headers);

        if (!$success)
            return "Сообщение не было отправлено";
        else
            return true;
    }

    public function getFeedback() {


        $result = $this->_db->query("SELECT * FROM `feedback`");

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

}
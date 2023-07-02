<?php
require 'DB.php';
class ConsultModel
{
    private $name;
    private $email;
    private $fone;
    private $message;

    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }

    public function setData($name, $fone, $email,  $message)
    {
        $this->name = $name;
        $this->fone = $fone;
        $this->email = $email;
        $this->message = $message;
    }

    public function validForm()
    {
        $result = $this->_db->query("SELECT * FROM `freeconsult` WHERE `fone` = '$this->fone'");
        $user = $result->fetch(PDO::FETCH_ASSOC);
        if($user['fone'] != '')
            return 'Пользователь с таким номером уже получал бесплатную консультацию';

         if (strlen($this->name) < 3)
            return "Введите ваше имя";
        else if (strlen($this->fone) < 10)
            return "введите номер телефона в международном формате";
        else if (strlen($this->email) < 3)
            return "введите корректный адрес Email";

        else if (strlen($this->message) < 5)
            return "Сообщение слишком короткое";
        else
            return "Верно";
    }

    public function addFreeConsult() {
        $sql = 'INSERT INTO freeconsult(name, fone, email, message) VALUES(:name, :fone, :email, :message)';
        $query = $this->_db->prepare($sql);

        $query->execute(['name' => $this->name, 'fone' => $this->fone, 'email' => $this->email, 'message' => $this->message]);

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


}
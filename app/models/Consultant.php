<?php
require 'DB.php';

class Consultant {
    private $name;
    private $email;
    private $message;

    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }

    public function setData($name, $email, $message) {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function validForm() {
        if(strlen($this->name) < 3)
            return "Имя слишком короткое";

        else if(strlen($this->message) < 3)
            return "Вы не написали сообщение. Вернитесь в кабинет пользователя";

        else
            return "Сообщение отправлено";
    }

    public function addMessage() {
        $sql = 'INSERT INTO consultant(name, email, message) VALUES(:name, :email, :message)';
        $query = $this->_db->prepare($sql);
        $query->execute(['name' => $this->name, 'email' => $this->email, 'message' => $this->message]);

        header('Location: /user/dashboard');
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
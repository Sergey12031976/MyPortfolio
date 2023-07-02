<?php

class ContactModel
{
    private $name;
    private $email;
    private $age;
    private $message;

    public function setData($name, $fone, $email,  $message)
    {
        $this->name = $name;
        $this->fone = $fone;
        $this->email = $email;
        $this->message = $message;
    }

    public function validForm()
    {


        if (strlen($this->name) < 3)
            return "Введите ваше имя";
        else if (strlen($this->email) < 3)
            return "введите корректный адрес Email";
        else if (!is_numeric($this->age) || $this->age <= 0 || $this->age > 90)
            return "Введите ваш возраст";
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

}
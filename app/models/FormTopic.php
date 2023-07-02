<?php
require 'DB.php';

class FormTopic {
    private $name;
    private $topic;
    private $message;

    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }

    public function setData($name, $topic, $message) {
        $this->name = $name;
        $this->topic = $topic;
        $this->message = $message;
    }

    public function validForm() {
        if(strlen($this->name) < 3)
            return "Имя слишком короткое";
        else if(strlen($this->topic) < 3)
            return "Вы не указали тему сообщения";
        else if(strlen($this->message) < 3)
            return "Вы не написали сообщение.";
        else
            return "Сообщение отправлено";
    }

    public function addMessage() {
        $sql = 'INSERT INTO forum(name, topic, message) VALUES(:name, :topic, :message)';
        $query = $this->_db->prepare($sql);
        $query->execute(['name' => $this->name, 'message' => $this->message]);

        header('Location: /forum/index');
    }

}
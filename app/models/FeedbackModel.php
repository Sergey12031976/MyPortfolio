<?php
require 'DB.php';
class FeedbackModel
{
    private $client;
    private $message;

    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }

    public function setData($client, $message)
    {
        $this->client = $client;
        $this->message = $message;
    }

    public function validForm()
    {
        if (strlen($this->client) < 2)
            return "Введите ваше имя";
        else if (strlen($this->message) < 5)
            return "Сообщение слишком короткое";
        else
            return "Верно";
    }

    public function addFeedback()
    {
        $sql = 'INSERT INTO `feedback` (`client`, `message`)
                    VALUES(:client, :message)';

        $query = $this->_db->prepare($sql);

        $query->execute(['client' => $this->client, 'message' => $this->message]);

        Header('Location: /remont/master');
    }



}
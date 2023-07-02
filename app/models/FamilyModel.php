<?php
session_start();
require 'DB.php';

class FamilyModel {
    private $name;
    private $email;
    private $fone;
//    private $link;
//    private $date;
    private $pass;
    private $re_pass;

    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstence();
    }

    public function setData($name, $email, $fone, $pass, $re_pass) {
        $this->name = $name;
        $this->email = $email;
        $this->fone = $fone;
//        $this->link = $link;
//        $this->date = $date;
        $this->pass = $pass;
        $this->re_pass = $re_pass;

    }

    public function validForm() {

        $result = $this->_db->query("SELECT * FROM `family` WHERE `email` = '$this->email'");
        $user = $result->fetch(PDO::FETCH_ASSOC);
        if($user['email'] != '')
            return 'Пользователь с таким email уже зарегистрирован';

        else if(strlen($this->name) < 3)
            return "Имя слишком короткое";

        else if(strlen($this->email) < 3)
            return "Email слишком короткий";
        else if(strlen($this->fone) < 11)
            return "Проверьте номер телефона";
//        else if(strlen($this->link) < 1)
//            return "Проверьте наличие абонемента";
//        else if(strlen($this->date) < 1)
//            return "Проверьте дату";
        else if(strlen($this->pass) < 3)
            return "Пароль не менее 3 символов";
        else if($this->pass != $this->re_pass)
            return "Пароли не совпадают";

//            else {
//                $existence = selectOne('users', ['email' => $this->email]);
//                if ($existence['email'] === $this->email)
//                return "Пользователь с таким адресом уже зарегистрирован";

        else
            return "Верно";

    }

    public function addUser() {
        $sql = 'INSERT INTO family(name, email, fone, pass) VALUES(:name, :email, :fone, :pass)';
        $query = $this->_db->prepare($sql);

        $pass = password_hash($this->pass, PASSWORD_DEFAULT);
        $query->execute(['name' => $this->name, 'email' => $this->email, 'fone' => $this->fone, 'pass' => $pass]);

        $this->setAuth($this->email);
    }

    public function getUser() {
        $email = $_COOKIE['log'];
        $result = $this->_db->query("SELECT * FROM `family` WHERE `email` = '$email'");
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function getLink() {
        $email = $_COOKIE['log'];
        $result = $this->_db->query("SELECT `link` FROM `family` WHERE `email` = '$email'");

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function logOut() {
        setcookie('log', $this->email, time() - 3600, '/');
        unset($_COOKIE['log']);
        header('Location: /family/auth');
    }

    public function auth($email, $pass) {
        $result = $this->_db->query("SELECT * FROM `family` WHERE `email` = '$email'");
        $user = $result->fetch(PDO::FETCH_ASSOC);

        if($user['email'] == '')
            return 'Пользователя с таким email не существует';

        if($user['email'] == 'admin@vodasol.by')
            return 'Если вы администратор, воспользуйтесь другим входом';

        else if(password_verify($pass, $user['pass']))
            $this->setAuth($email);
        else
            return 'Пароли не совпадают';
    }

    public function setTiket($email) {

        $this->email = $email;

    }

    public function getTiket($email){

        $this->email = $email;

        $result = $this->_db->query("SELECT `link` FROM `family` WHERE `email` = `email`");
        return $result->fetch(PDO::FETCH_ASSOC);
        $this->tiket = $result;
        $sql = 'UPDATE `family` SET `program` = :tiket WHERE `email` = :email';
        $query = $this->_db->prepare($sql);

        $query->execute(['tiket'=>$this->tiket, 'email'=>$this->email]);
    }

    public function mail()
    {
        $to = "admin@vodasol.by";
        $message = 'Имя: ' . $this->name . '. Сообщение: Поздравляем! У вас новый член клуба!';

        $subject = "=?utf-8?B?" . base64_encode("Сообщение с сайта") . "?=";
        $headers = "From: $this->email\r\nReply-to: $this->email\r\nContent-type: text/html; charset=utf-8\r\n";
        $success = mail($to, $subject, $message, $headers);

        if (!$success)
            return "Сообщение не было отправлено";
        else
            return true;
    }

    public function setAuth($email) {
        setcookie('log', $email, time() + 360000000, '/');
        header('Location: /family/reeder');
    }

    public function getLinks($title_id, $email){

        $this->title_id = $title_id;
        $this->email = $email;

        $sql = 'UPDATE `family` SET `link` = :title_id WHERE `email` = :email';
        $query = $this->_db->prepare($sql);

        $query->execute(['title_id'=>$this->title_id, 'email'=>$this->email]);
    }

    public function noneLink($email, $title_id){

        $this->title_id = $title_id;
        $this->email = $email;

        $sql = 'UPDATE `family` SET `link` = :title_id WHERE `email` = :email';
        $query = $this->_db->prepare($sql);

        $query->execute(['title_id'=>$this->title_id, 'email'=>$this->email]);
    }

    public function programNull($dateControl){
        $this -> dateControl = $dateControl;
        $dateControl = getdate();
        foreach ( $dateControl as $key => $val ) echo "$key = $val<br>";
        echo "<hr>Сегодня: $dateControl[mday].$dateControl[mon].$dateControl[year]";
//        $result = $this->_db->query("SELECT * FROM `users` WHERE `date` = '$dateControl'");
//        return $result->fetchAll(PDO::FETCH_ASSOC);

    }


//    public function getTiket($email){
//
//        $this->email = $email;
//        $result = $this->_db->query('SELECT `link` FROM `users` WHERE `email` = :email');
//        return $result->fetchAll(PDO::FETCH_ASSOC);
//        $this->link = $result;
//
//        $sql = 'UPDATE `users` SET `program` = :link WHERE `email` = :email';
//        $query = $this->_db->prepare($sql);
//
//        $query->execute(['link'=>$this->link, 'email'=>$this->email]);
//    }

    public function getProgram() {
        $result = $this->_db->query("SELECT * FROM `packages` ORDER BY `id` DESC");
        return $result->fetchAll(PDO::FETCH_ASSOC);

    }

//    public function getUserProgram() {
//        $result = $this->_db->query("SELECT `link` FROM `programs` ORDER BY `id` DESC");
//        return $result->fetch(PDO::FETCH_ASSOC);
//    }

    public function getProgramLimited($order, $limit) {
        $result = $this->_db->query("SELECT * FROM `packages` ORDER BY $order  LIMIT $limit");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneProgram() {
        $result = $this->_db->query("SELECT * FROM `packages` WHERE `id` = '$id'");
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function getProgramCart($items) {
        $result = $this->_db->query("SELECT * FROM `packages` WHERE `id` IN ($items)");
        return $result->fetchAll(PDO::FETCH_ASSOC);

    }

    public function dataUser() {
        $email = $_COOKIE['log'];
        $result = $this->_db->query("SELECT * FROM `family` WHERE `email` = '$email'");
        return $result->fetch(PDO::FETCH_ASSOC);
    }

}
<?php

require 'DB.php';

class AdminModel
{
    private $email;
    private $pass;

    private $_db = null;

    public function __construct()
    {
        $this->_db = DB::getInstence();
    }

    public function setData($email, $pass)
    {
        $this->email = $email;
        $this->pass = $pass;
    }

    public function auth($email, $pass)
    {
        $result = $this->_db->query("SELECT * FROM `users` WHERE `email` = '$email'");
        $user = $result->fetch(PDO::FETCH_ASSOC);

        if ($user['email'] !== 'admin@vodasol.by')
            return 'У вас нет доступа к этому разделу';
        else if (password_verify($pass, $user['pass']))
            $this->setAuth($email);
        else
            return 'Пароли не совпадают';
    }

    public function getUser() {
        $email = $_COOKIE['log'];
        $result = $this->_db->query("SELECT * FROM `users` WHERE `email` = '$email'");
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function logOut() {
        setcookie('log', $this->email, time() - 3600, '/');
        unset($_COOKIE['log']);
        header('Location: /admin/adminauth');
    }

    public function setAuth($email)
    {
        setcookie('log', $email, time() + 3600, '/');
        header('Location: /admin/index');
    }
}
<?php
    require 'DB.php';

    class AuthModel {
        private $email;
        private $pass;

        private $_db = null;

        public function __construct() {
            $this->_db = DB::getInstence();
        }

        public function setData($email, $pass) {
            $this->email = $email;
            $this->pass = $pass;
            }

        public function validForm() {
            if(strlen($this->email) < 3)
                return "Адрес слишком короткий";
            else if(strlen($this->pass) < 3)
                return "Пароль не менее 3 символов";
            else
                return "Верно";
        }

        public function getUser() {
            $email = $_COOKIE['log'];
            $result = $this->_db->query("SELECT * FROM `users` WHERE `email` = '$email'");
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        public function logOut() {
            setcookie('log', $this->email, time() - 3600, '/');
            unset($_COOKIE['log']);
            header('Location: /user/auth');
        }

        public function auth($email, $pass) {
            $result = $this->_db->query("SELECT * FROM `users` WHERE `email` = '$email'");
            $user = $result->fetch(PDO::FETCH_ASSOC);

            if (isset($user['email']))

            if($user['email'] == '')
                return 'Пользователя с таким email не существует';
            else if(password_verify($pass, $user['pass']))
                $this->setAuth($email);
            else
                return 'Пароли не совпадают';
            }

        public function setAuth($email) {
            setcookie('log', $email, time() + 3600, '/');
            header('Location: /user/dashboard');

        }
    }
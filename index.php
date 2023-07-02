<?php
    require_once 'app/init.php';

    $app = new App();

    $page = $_SERVER['REQUEST_URI'];
    $page = rtrim($page, '/');
//    header('Location: $page');

    //dkjk2987e65akkakds - ключ для платежной системы
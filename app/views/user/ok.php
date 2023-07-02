<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Кабинет пользователя</title>
    <meta name="description" content="Кабинет пользователя">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/user.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/hudeem.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
<?if (isset($_COOKIE['log'])): ?>
<div class="container main" style="height: 500px">
    <h1>Поздравляем! Ваш абонемент успешно активирован.</h1><br>
    <p style="color: #fcfcfc; font-size: large; font-weight: bold">Теперь вы можете вернуться в ваш личный кабинет</p><br>

    <form action="ok" method="post" class='btn_program'>
        <input type="hidden" name="exit_btn">

            <input type="text" name="time" value="<?=date('Y-m-d h:m:s', strtotime('+30 Days'))?>">

<!--        --><?//if (isset($data['user'])): ?>
<!--        <input type="text" name="title_id" value="--><?//=$data['link']?><!--">-->
<!--        --><?// endif; ?>
        <input type="text" name="email" value="<?=$_COOKIE['log']?>">

        <input type="submit" value="Перейти в личный кабинет" name="BasketDelete">
    </form>

</div>
<? endif; ?>
<?php require 'public/blocks/footer.php' ?>
</body>
</html>

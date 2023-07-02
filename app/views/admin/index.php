<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Кабинет администратора</title>
    <meta name="description" content="Кабинет администратора">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/user.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
<?php require 'public/blocks/header.php' ?>

<div class="container main">
    <h1>Кабинет администратора</h1>

    <div class="user-info">

        <?if(isset($data['email'])):?>
            <p>Привет, <b><?=$data['name']?></b></p>
        <?endif;?>



        <form action="/user/dashboard" method="post">
            <input type="hidden" name="exit_btn">
            <button type="submit" class="btn">Выйти</button>
        </form>



    </div>
</div>

<?php require 'public/blocks/footer.php' ?>
</body>
</html>
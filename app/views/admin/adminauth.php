<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <meta name="description" content="Авторизация">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/hudeem.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/vodasol.php' ?>

    <div class="container main">
        <h1>Авторизация</h1>
        <p>Здесь вы можете авторизоваться на сайте</p>
        <form action="/admin/adminauth" method="post" class="form-control">
            <?php if(isset($_POST['email'])): ?>
                <input type="email" name="email" placeholder="Введите адрес вашей электронной почты" value="<?=$_POST['email']?>"><br>
            <?php else: ?>
                <input type="email" name="email" placeholder="Введите адрес вашей электронной почты"><br>
            <?php endif; ?>
            <?php if(isset($_POST['pass'])): ?>
                <input type="password" name="pass" placeholder="Введите пароль" value="<?=$_POST['pass']?>"><br>
            <?php else: ?>
                <input type="password" name="pass" placeholder="Введите пароль"><br>
            <?php endif; ?>
            <?php if(isset($data['message'])): ?>
                <div class="error"><?=$data['message']?></div>
            <?php else: ?>
                <div class="error"></div>
            <?php endif; ?>
            <button class="btn" id="send">Готово</button>
        </form>
    </div>

    <?php require 'public/blocks/footer.php' ?>
</body>
</html>
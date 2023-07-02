<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <meta name="description" content="Регистрация">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/hudeem.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/vodasol.php' ?>

    <div class="container main">
        <h1>Регистрация</h1>
        <p style="color: #f9f5ee">Здесь вы можете зарегистрироваться</p>
        <form action="/user/reg" method="post" class="form-control">
            <?php if(isset($_POST['name'])): ?>
                <input type="text" name="name" placeholder="Введите имя" value="<?=$_POST['name']?>">
            <?php else: ?>
                <input type="text" name="name" placeholder="Введите имя">
            <?php endif; ?>
            <?php if(isset($_POST['fone'])): ?>
                <input type="text" name="fone" placeholder="Введите номер вашего телефона" value="<?=$_POST['fone']?>">
            <?php else: ?>
                <input type="text" name="fone" placeholder="Введите номер вашего телефона">
            <?php endif; ?>
            <?php if(isset($_POST['link'])): ?>
                <input type="text" name="link" placeholder="noprogram" value="<?=$_POST['link']?>">
            <?php else: ?>
                <input type="text" name="link" placeholder="noprogram">
            <?php endif; ?>
            <?php if(isset($_POST['date'])): ?>
                <input type="date" name="date" placeholder="дата" value="<?=$_POST['date']?>">
            <?php else: ?>
                <input type="date" name="date" placeholder="дата">
            <?php endif; ?>
            <?php if(isset($_POST['email'])): ?>
                <input type="email" name="email" placeholder="Введите email" value="<?=$_POST['email']?>"><br>
            <?php else: ?>
                <input type="email" name="email" placeholder="Введите email"><br>
            <?php endif; ?>
            <?php if(isset($_POST['pass'])): ?>
                <input type="password" name="pass" placeholder="Введите пароль" value="<?=$_POST['pass']?>"><br>
            <?php else: ?>
                <input type="password" name="pass" placeholder="Введите пароль"><br>
            <?php endif; ?>
            <?php if(isset($_POST['re_pass'])): ?>
                <input type="password" name="re_pass" placeholder="Повторите пароль" value="<?=$_POST['re_pass']?>">
            <?php else: ?>
                <input type="password" name="re_pass" placeholder="Повторите пароль">
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
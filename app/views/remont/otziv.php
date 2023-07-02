<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JavaScript</title>

    <link rel="stylesheet" href="/public/css/remont.css">
    <!--    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/slick.css">
</head>
<body>



<?php //if(isset($_POST['message'])): ?>
<!--    <div class="error" style="color: gold; font-size: larger; font-weight: bolder; background: purple; padding: 1% ">--><?//=$data['message']?><!--</div>-->
<?php //else: ?>
<!--    <div class="error"></div>-->
<?php //endif; ?>

<section class="bg-fixed">
    <a href="/remont/master">
    <button class="btn" id="send">Вернуться</button>
    </a>
    <h3>Вы можете оставить отзыв о нашей работе</h3>
    <form action="/remont/otziv" method="post" class="form-control">

        <?php if(isset($_POST['client'])): ?>
            <input type="text" name="client" placeholder="Введите имя" value="<?=$_POST['client']?>">
        <?php else: ?>
            <input type="text" name="client" placeholder="Введите имя">
        <?php endif; ?>

        <?php if(isset($_POST['message'])): ?>
            <textarea name="message" placeholder="Введите сообщение" ><?=$_POST['message']?></textarea><br>
        <?php else: ?>
            <textarea name="message" placeholder="Введите сообщение"></textarea><br>
        <?php endif; ?>

        <?php if(isset($data['message'])): ?>
            <div class="error" style="color: gold; font-size: larger; font-weight: bolder; background: purple; padding: 1% "><?=$data['message']?></div>
        <?php else: ?>
            <div class="error"></div>
        <?php endif; ?>

        <button class="btn" id="send">Отправить</button>
    </form>
</section>
</body>
</html>

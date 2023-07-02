<!--<!doctype html>-->
<!--<html lang="ru">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Кабинет пользователя</title>-->
<!--    <meta name="description" content="Кабинет пользователя">-->
<!---->
<!--    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">-->
<!--    <link rel="stylesheet" href="/public/css/user.css" charset="utf-8">-->
<!--    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">-->
<!--    <link rel="stylesheet" href="/public/css/hudeem.css" charset="utf-8">-->
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">-->
<!--    <link rel="icon" href="/public/img/logo.svg">-->
<!--</head>-->
<!--<body>-->
<?php //require 'public/blocks/vodasol.php' ?>

<h2>Ваш дневник питания</h2>
<div class="dnevnik">

    <div class="dnevnik_input">
        <form action="/user/dashboard" method="post" class="form-control">
            <?php if(isset($data['email'])): ?>
                <input type="email" name="name" placeholder="Введите адрес вашей электронной почты" value="<?=$data['email']?>">
            <?php else: ?>
                <input type="email" name="name" placeholder="Введите адрес вашей электронной почты">
            <?php endif; ?>
            <?php if(isset($_POST['date'])): ?>
                <input type="date" name="date" placeholder="Введите дату вашего меню" value="<?=$_POST['message']?>">
            <?php else: ?>
                <input type="date" name="date" placeholder="Введите дату"><br>
            <?php endif; ?>
            <?php if(isset($_POST['message'])): ?>
                <textarea name="message" placeholder="Напишите ваше меню на указанную дату" ><?=$_POST['message']?></textarea><br>
            <?php else: ?>
                <textarea name="message" placeholder="Напишите ваше меню на указанную дату"></textarea><br>
            <?php endif; ?>

            <input type="submit" class="btn" id="send" value="Отправить">
        </form>
    </div>
    <div class="dnevnik_out">
        <?php if (isset ($data['outMenu'])): ?>
        <?php for($i = 0; $i < count($data['dnevnik']); $i++): ?>
            <div class="row1" <?=$data['user'][$i]['date']?></div>
        <?php endfor; ?>
    <?php endif; ?>
    </div>

</div>

<?php //require 'public/blocks/footer.php' ?>
<!--</body>-->
<!--</html>-->
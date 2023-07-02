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
    <link rel="icon" href="/public/img/logo.svg">
</head>
<body>
<?php require 'public/blocks/vodasol.php' ?>

<h2>Ваш дневник питания</h2>
<div class="dnevnik">

    <div class="dnevnik_input">
        <form action="/user/dnevnik" method="post" class="form-control">
            <?php if(isset($_COOKIE['log'])): ?>
                <input type="hidden" name="email" placeholder="Введите адрес вашей электронной почты" value="<?=$_COOKIE['log']?>">
            <?php else: ?>
                <input type="email" name="email" placeholder="Введите адрес вашей электронной почты">
            <?php endif; ?>
            <?php if(isset($_POST['date'])): ?>
                <input type="date" name="date" placeholder="Введите дату вашего меню" value="<?=$_POST['date']?>">
            <?php else: ?>
                <input type="date" name="date" placeholder="Введите дату"><br>
            <?php endif; ?>
            <?php if(isset($_POST['message'])): ?>
                <textarea name="message" placeholder="Напишите ваше меню на указанную дату" ><?=$_POST['message']?></textarea><br>
            <?php else: ?>
                <textarea name="message" placeholder="Напишите ваше меню на указанную дату"></textarea><br>
            <?php endif; ?>
            <?php if(isset($data['message'])): ?>
                <div class="error"><?=$data['message']?></div>
            <?php else: ?>
                <div class="error"></div>
            <?php endif; ?>
            <button class="btn" id="send">Отправить</button>
        </form>
    </div>
    <div class="dnevnik_out">
        <?php if (isset ($_COOKIE['log'])): ?>
        <?php for($i = 0; $i < count($data['outMenu']); $i++): ?>
            <form action="/user/menu" method="post">
                <input type="text" name="date" value="<?=$data['outMenu'][$i]['date']?>">
                <button class="btn" id="send"><?=$data['outMenu'][$i]['date']?></button>
            </form>
        <div class="dnevnik_show" id="menu-show"> <?=$data['outMenu'][$i]['message']?></div>
    <?php endfor; ?>
    <?php endif; ?>

</div>

</div>

<?php require 'public/blocks/footer.php' ?>

<!--<script>-->
<!---->
<!--    $("#menu-show").on("click", function() {-->
<!--        $(".dnevnik_show").animate({"height": "500px"}, 200);-->
<!--    });-->
<!---->
<!--</script>-->

</body>
</html>
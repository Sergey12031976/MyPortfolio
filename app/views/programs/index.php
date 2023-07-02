<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Диета для похудения</title>
    <meta name="description" content="Диета для похудения - это еще не все. Если бы ее было достаточно, то проблема
                                       лишнего веса давно была бы решена. Есть еще нюансы в борьбе с лишним весом.">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/hudeem.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <link rel="icon" href="/public/img/logo.svg">
</head>
<body>
<?php require 'public/blocks/vodasol.php' ?><br>

<a href="/hudeem/programs">
    <div class="btn_program">
        <p>Посмотреть другую программу</p>
    </div>
</a><br>
<div class="container main">

    <h1><?=$data['title']?></h1><br>
    <div class="info">
        <a href="/public/img/<?=$data['img']?>" target="page">
        <img src="/public/img/<?=$data['img']?>" alt="<?=$data['title']?>">
        </a>
        <div>
            <p style="color: brown; background: #a3a3a3; padding: 1%"><?=$data['intro']?></p><br>
            <p style="color: brown; background: #a3a3a3; padding: 1%"><?=$data['article']?></p>
        </div>

    </div>

</div> <br>


<?php if(!isset($_COOKIE['log'])): ?>
    <p style="color: #ff5644; font-size: larger; font-weight: bold; margin-left: 1%">Чтобы приобрести данную программу, зарегистрируйтесь или войдите под своим именем.</p>
    <a href="/user/auth">
        <button class="btn auth">Войти</button>
    </a>
    <a href="/user/reg">
        <button class="btn mobile" style="margin-top: 10px">Регистрация</button>
    </a>
<?php else: ?>

    <form action="payment" method="post">
        <input type="hidden" name="item_id" value="<?=$data['id']?>">
        <input type="text" name="title_id" value="<?=$data['link']?>">
        <input type="text" name="email" value="<?=$_COOKIE['log']?>">
        <button class="btn" style="width: auto; padding: 0 1% 0 1%">Оформить абонемент (<?=$data['price']?> рублей)</button>
    </form>
    <?php endif; ?>



<?php require 'public/blocks/footer.php' ?>

</body>
</html>

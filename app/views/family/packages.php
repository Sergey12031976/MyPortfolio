<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Составить диету для похудения. Меню для похудения</title>
    <meta name="description" content="Похудение совсем не обязательно должно быть трудным и изнурительным процессом.
                                        Наши консультанты помогут вам пройти этот путь максимально комфортно.">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/family.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <link rel="icon" href="/public/img/logo.svg">
</head>
<body>
<?php require 'public/blocks/navi.php' ?>
<div class="container main">

    <h1>Читайте книгу "Трещины" и получайте подарки</h1><br>

    <div class="products">

        <?php for($i = 0; $i < count($data); $i++): ?>

            <div class="product">
                <h2><?=$data[$i]['title']?></h2>
                <div class="image">
                    <img src="/public/img/family/<?=$data[$i]['img']?>" alt="<?=$data[$i]['title']?>">
                </div>
                <span><?=$data[$i]['intro']?></span><br>
                <span style="font-size: large; font-weight: bold; color: purple"><?=$data[$i]['price']?> BYN</span><br>
<!--                <div style="margin-top: 10px">-->
<!--                    <a href="/packages/--><?//=$data[$i]['id']?><!--"><button class="btn">Подробнее</button></a>-->
<!--                </div>-->

                <?php if(!isset($_COOKIE['log'])): ?>
                    <span style="color: #ff5644; font-size: small; margin-left: 1%">Чтобы приобрести данный пакет, зарегистрируйтесь или войдите под своим именем.</span><br>
                    <a href="/family/auth">
                        <button class="btn auth">Войти</button>
                    </a>
                    <a href="/family/reg">
                        <button class="btn mobile" style="margin-top: 10px">Регистрация</button>
                    </a>
                <?php else: ?>

                    <form action="payment" method="post">
                        <input type="hidden" name="item_id" value="<?=$data[$i]['id']?>">
                        <input type="hidden" name="title_id" value="<?=$data[$i]['link']?>">
                        <input type="hidden" name="email" value="<?=$_COOKIE['log']?>">
                        <button class="btn" style="width: auto; padding: 0 1% 0 1%">Приобрести пакет (<?=$data[$i]['price']?> BYN)</button>
                    </form>
                <?php endif; ?>

            </div>



        <?php endfor; ?>
    </div>
</div>
<div class="comparison" style="margin-top: 100px">
    <div class="row1">Название пакета</div>
    <div class="row1">Общение с автором в формате переписки</div>
    <div class="row1">5 консультаций по 60 минут онлайн</div>
    <div class="row1">Онлайн курс-тренинг по взаимоотношениям </div>
<!--    <div class="row1"></div>-->
<!--    <div class="row1">Специальное меню и обеспечение продуктами питания</div>-->
    <div class="row2" style="color: gold">Читатель (8 BYN)</div>
    <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
    <div class="row2" style="color: #f16a51"><i class="fas fa-times"></i></div>
    <div class="row2" style="color: #f16a51"><i class="fas fa-times"></i></div>
<!--    <div class="row2" style="color: #f16a51"><i class="fas fa-times"></i></div>-->
<!--    <div class="row2" style="color: #f16a51"><i class="fas fa-times"></i></div>-->
    <div class="row3" style="color: gold">Расширенный (15 BYN)</div>
    <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
    <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
    <div class="row2" style="color: #f16a51"><i class="fas fa-times"></i></div>
<!--    <div class="row2" style="color: #f16a51"><i class="fas fa-times"></i></div>-->
<!--    <div class="row2" style="color: #f16a51"><i class="fas fa-times"></i></div>-->
    <div class="row4" style="color: gold">Полный (50 BYN)</div>
    <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
    <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
    <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>

</div>
</div>

<?php require 'public/blocks/footer.php' ?>

</body>
</html>

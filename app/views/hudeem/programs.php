<!doctype html>
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
    <link rel="stylesheet" href="/public/css/hudeem.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <link rel="icon" href="/public/img/logo.svg">
</head>
<body>
<?php require 'public/blocks/vodasol.php' ?>
<div class="container main">

    <h1>Худейте без изнуряющих диет и выматывающих физических нагрузок.</h1><br>

    <div class="products">

        <?php for($i = 0; $i < count($data); $i++): ?>

            <div class="product">
                <h2><?=$data[$i]['title']?></h2>
                <div class="image">
                    <img src="/public/img/<?=$data[$i]['img']?>" alt="<?=$data[$i]['title']?>">
                </div>
                <span><?=$data[$i]['intro']?></span>
                <!--                <p>--><?//=$data[$i]['article']?><!--</p>-->
                <div style="margin-top: 10px">
                    <a href="/programs/<?=$data[$i]['id']?>"><button class="btn">Подробнее</button></a>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
    <div class="comparison">
        <div class="row1"></div>
        <div class="row1">Консультации в формате переписки</div>
        <div class="row1">Видеокурс по правилам сбалансированного питания</div>
        <div class="row1">Консультации онлайн</div>
        <div class="row1">Онлайн курс по правилам сбалансированного питания</div>
        <div class="row1">Специальное меню и обеспечение продуктами питания</div>
        <div class="row2">Консультант (50 BYN/месяц)</div>
        <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
        <div class="row2" style="color: #f16a51"><i class="fas fa-times"></i></div>
        <div class="row2" style="color: #f16a51"><i class="fas fa-times"></i></div>
        <div class="row2" style="color: #f16a51"><i class="fas fa-times"></i></div>
        <div class="row2" style="color: #f16a51"><i class="fas fa-times"></i></div>
        <div class="row3">Эконом (80 BYN/месяц)</div>
        <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
        <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
        <div class="row2" style="color: #f16a51"><i class="fas fa-times"></i></div>
        <div class="row2" style="color: #f16a51"><i class="fas fa-times"></i></div>
        <div class="row2" style="color: #f16a51"><i class="fas fa-times"></i></div>
        <div class="row4">Стандарт (100 BYN/месяц)</div>
        <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
        <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
        <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
        <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
        <div class="row2" style="color: #f16a51"><i class="fas fa-times"></i></div>
        <div class="row5">СуперЭффект (270 BYN/месяц)</div>
        <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
        <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
        <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
        <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>
        <div class="row2" style="color: #01d084"><i class="fas fa-check"></i></div>

    </div>
</div>

<?php require 'public/blocks/footer.php' ?>

</body>
</html>

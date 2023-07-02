<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина</title>
    <meta name="description" content="Корзина">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/products.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
<?php require 'public/blocks/header.php' ?>

<div class="container main">
    <?if (isset($data['products'])): ?>
    <h1>Корзина товаров</h1>

    <?php
    if(count($data['products']) == 0): ?>
        <p><?=$data['empty']?></p>
    <?php else: ?>
    <div class="products">
        <?php
        $sum = 0;
        for($i = 0; $i < count($data['products']); $i++):
            $sum += $data['products'][$i]['price'];

            ?>

            <div class="row">
                <?php
                require_once 'app/models/BasketModel.php';
                $basketModel = new BasketModel();
                ?>
                <img src="/public/img/<?=$data['products'][$i]['img']?>" alt="<?=$data['products'][$i]['title']?>">
                <h4><?=$data['products'][$i]['title']?></h4>
                <span><?=$data['products'][$i]['price']?> рублей</span>
            </div>
        <?php endfor; ?>
        <? endif; ?>

        <? endif; ?>
    </div>
    <a href="/basket/order">
        <button class="btn_cash" id="send">Оформить заказ (<?=$sum?> руб)</button>
    </a>
<!--    <a href="/basket/erip">-->
<!--        <button class="btn_cash" id="send">Оформить заказ для оплаты в ЕРИП (--><?//=$sum?><!-- руб)</button>-->
<!--    </a>-->
    <form action="/basket/index" method="post">
        <input type="hidden" name="exit_btn">
        <input type="submit" class='btn_clear' value="Очистить корзину" name="BasketDelete">
    </form>

</div>

<?php require 'public/blocks/footer.php' ?>
</body>
</html>
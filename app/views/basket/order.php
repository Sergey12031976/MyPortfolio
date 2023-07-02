<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Оформление заказа</title>
    <meta name="description" content="Корзина товаров">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/products.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>

    <div class="container main">

<!--        <div class="container main">-->
<!--            --><?//if (isset($data['products'])): ?>
<!---->
<!--        --><?php
//        if(count($data['products']) == 0): ?>
<!--            <p>--><?//=$data['empty']?><!--</p>-->
<!--        --><?php //else: ?>
<!--            <div class="products">-->
<!--                --><?php
//                $sum = 0;
//                for($i = 0; $i < count($data['products']); $i++):
//                    $sum += $data['products'][$i]['price'];
//
//                    ?>
<!---->
<!--                    <div class="row">-->
<!--                        <img src="/public/img/--><?//=$data['products'][$i]['img']?><!--" alt="--><?//=$data['products'][$i]['title']?><!--">-->
<!--                        <h4>--><?//=$data['products'][$i]['title']?><!--</h4>-->
<!--                        <span>--><?//=$data['products'][$i]['price']?><!-- рублей</span>-->
<!--                    </div>-->
<!--                --><?php //endfor; ?>
<!--                --><?// endif; ?>
<!--                --><?// endif; ?>
<!--            </div>-->
        </div>
    </div>
    <div class="container main" id="arrange">
        <h1>Оформление заказа</h1>
        <p>Здесь вы можете оформить заказ</p><br>
        <form action="/basket/order" method="post" class="form-control">

<!--                <br><select size="1" name="select">-->
<!--                    <option value="Выберите способ оплаты">-->
<!--                        Выберите способ оплаты-->
<!--                    </option>-->
<!--                    <option value="картой">-->
<!--                        банковской картой онлайн-->
<!--                    </option>-->
<!--                    <option value="Ерип">-->
<!--                        в инфокиоске через систему ЕРИП-->
<!--                    </option>-->
<!--                    <option value="наличными">-->
<!--                        наличными при получении заказа-->
<!--                    </option>-->
<!--                </select>-->
<!--            --><?php //if(isset($_POST['date'])): ?>
<!--            <input type="datetime-local" name="date" placeholder="date" value="--><?//=$_POST['date']?><!--">-->
<!--            --><?php //else: ?>
<!--            <input type="datetime-local" name="date" placeholder="date" value="Укажите дату заказа">-->
<!--            --><?php //endif; ?>
            <?php if(isset($_POST['fone'])): ?>
                <input type="text" name="fone" placeholder="Введите номер вашего телефона" value="<?=$_POST['fone']?>">
            <?php else: ?>
                <input type="text" name="fone" placeholder="Введите номер вашего телефона">
            <?php endif; ?>
            <?php if(isset($_POST['addres'])): ?>
                <input type="text" name="addres" placeholder="Укажите адрес доставки" value="<?=$_POST['addres']?>">
            <?php else: ?>
                <input type="text" name="addres" placeholder="Укажите адрес доставки">
            <?php endif; ?>
            <?php if(isset($_POST['email'])): ?>
                <input type="email" name="email" placeholder="Введите email" value="<?=$_POST['email']?>"><br>
            <?php else: ?>
                <input type="email" name="email" placeholder="Введите email"><br>
            <?php endif; ?>
            <?php if(isset($data['message'])): ?>
                <div class="error"><?=$data['message']?></div>
            <?php else: ?>
                <div class="error"></div>
            <?php endif; ?>

                <button type="submit" class="btn_cash" id="send">Перейти к оплате</button>

        </form>

    </div>

    <?php require 'public/blocks/footer.php' ?>
</body>
</html>
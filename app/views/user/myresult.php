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

<!--<div style="width: 100%; overflow-x: scroll; height: auto; padding-left: 3%">-->
    <div class="result_weight" style="display: grid;
        grid-template-columns: 8% 8% 8% 8% 8% 8% 8% 8% 8% 8% 8% 8% 8%;
        grid-auto-rows: minmax(80px, auto);
        grid-auto-columns: minmax(8%, 7.5%);
        grid-column-gap: 0.1%;
        grid-row-gap: 1%;
        margin: 20px;
        justify-content: center;">

        <div class="row1" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;">Дата</div>

        <div class="row1" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;">Вес</div>

        <div class="row1" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;">Содержание жира</div>

        <div class="row1" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;">Содержание внутреннего (висцерального) жира</div>

        <div class="row1" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;">Костная масса</div>

        <div class="row1" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;">Содержание воды</div>

        <div class="row1" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;">Мышечная масса</div>

        <div class="row2" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold; ">Физический тип</div>

        <div class="row2" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;">Метаболизм</div>

        <div class="row2" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;">Биологич. возраст</div>

        <div class="row2" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;">Объем груди</div>

        <div class="row2" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;">Объем талии</div>

        <div class="row2" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold">Объем бедер</div>


        <?php for($i = 0; $i < count($data['user']); $i++): ?>

            <div class="row1" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;"><?=$data['user'][$i]['date']?></div>



            <div class="row1" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;"><?=$data['user'][$i]['weight']?></div>


        <div class="row1" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;"><?=$data['user'][$i]['fat']?></div>
        <div class="row1" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;"><?=$data['user'][$i]['visceral']?></div>
        <div class="row1" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;"><?=$data['user'][$i]['bone']?></div>
        <div class="row1" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;"><?=$data['user'][$i]['water']?></div>
        <div class="row1" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;"><?=$data['user'][$i]['muscles']?></div>
        <div class="row2" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;"><?=$data['user'][$i]['physical']?></div>
        <div class="row2" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;"><?=$data['user'][$i]['metabolism']?></div>
        <div class="row2" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;"><?=$data['user'][$i]['age']?></div>
        <div class="row2" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;"><?=$data['user'][$i]['breast']?></div>
        <div class="row2" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;"><?=$data['user'][$i]['waist']?></div>
        <div class="row2" style="background: #757575;
        color: #8bddff;
        font-size: 1.2em;
        padding: 10% 2% 10% 2%;
        text-align: center;
        font-weight: bold;"><?=$data['user'][$i]['hips']?></div>

        <?php endfor; ?>
    </div>
<!--</div>-->
<?php require 'public/blocks/footer.php' ?>
</body>
</html>
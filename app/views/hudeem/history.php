<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Диеты для похудения, отзывы</title>
    <meta name="description" content="Познакомьтесь с отзывами людей, которые успешно справились с проблемой лишнего веса
                                        с помощью наших программ. Реальные люди - реальнын истории.">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/hudeem.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <link rel="icon" href="/public/img/logo.svg">
</head>
<body>
<?php require 'public/blocks/vodasol.php' ?><br>
<div class="btn_program">
    <a href="/hudeem/programs">
        <baton >Выбрать свою программу</baton>
    </a>
</div>

<br><h1 style="margin-left: 1%">Снижение веса. Отзывы наших клиентов</h1><br>

<div style="background: #a3a3a3; color: #333333; font-size: 1.1em; font-weight: bolder; width: 90%; padding: 1%; margin-left: 1% ">
    <p>Друзья! За много лет нашей успешной работы у нас накопились тысячи удивительных историй решения проблемы лишнего веса
        по нашим программам. Однако для многих проблема лишнего веса является несколько щепетильной. Поэтому не все готовы откровенно делиться своей историей,
     даже если она столь успешная и удивительная. По этой причине на нашем сайте представлены не все отзывы о нашей работе,
     а только отзывы тех людей, которые согласились поделиться своей удивительной историей. По этой же причине некоторые истории
     представлены без реальных фотографий. Исключительно с точки зрения конфиденциальности. Но это совсем не означает,
     что таких людей мало или они вовсе не существуют.</p>
</div>

<div class="box main full-page">


    <div class="history">
        <?php for($i = 0; $i < count($data); $i++): ?>
            <div class="result">
                <span style="color: #ff5644"><?=$data[$i]['name']?></span>
                <a href="/public/img/<?=$data[$i]['img']?>" target="page">
                    <img src="/public/img/<?=$data[$i]['img']?>" alt="<?=$data[$i]['result']?>">
                </a>
                    <p><?=$data[$i]['story']?></p>

            </div>
        <?php endfor; ?>
    </div>


    <!--    --><?php //require 'programs.php' ?>

</div>

<?php require 'public/blocks/footer.php' ?>

</body>
</html>

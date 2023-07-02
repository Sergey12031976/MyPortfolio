<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Диета для похудения. Диета на неделю. Диета на месяц</title>
    <meta name="description" content="Диета для похудения - это еще не все. Если бы ее было достаточно, то проблема
                                       лишнего веса давно была бы решена. Есть еще нюансы в борьбе с лишним весом.">

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


    <br><h1 style="margin-left: 1%">Диеты для похудения не дают ожидаемого результата?</h1><br>

    <div style="background: #a3a3a3; color: #333333; font-size: 1.1em; font-weight: bolder; width: 90%; padding: 1%; margin-left: 1% ">
        <h2>Снижение веса - это то, что мы умеем делать хорошо.</h2>
        <p>Мы предлагаем собственные эффективные программы снижения веса, основанные на многолетнем опыте,
            проверенные на практике и утвержденные временем.</p>

    </div>
        <div class="table">

        </div>

<div class="box main full-page">
    <h2>Познакомьтесь с результатами наших клиентов</h2>

    <div class="products">
        <?php for($i = 0; $i < count($data); $i++): ?>
            <div class="result">
                <a href="/hudeem/history">
                    <div class="image">
                    <img src="/public/img/<?=$data[$i]['img']?>" alt="<?=$data[$i]['result']?>">

                </div>
                </a>
                <span><?=$data[$i]['result']?></span>

<!--                <p>--><?//=$data[$i]['story']?><!--</p> -->

            </div>

        <?php endfor; ?>


<!--    --><?php //require 'programs.php' ?>

</div>

<?php require 'public/blocks/footer.php' ?>

</body>
</html>

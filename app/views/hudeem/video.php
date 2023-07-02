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

<br><h1 style="margin-left: 1%">Видео курс "Основы сбалансированного питания и здорового образа жизни".</h1><br>

<div class="box main full-page">
    <h2 style="background: antiquewhite; color: #ff5644; padding: 0.5%">Это сайт независимого партнера компании Herbalife. Компания Herbalife является международно признанным экспертом
    в области сбалансированного питания и здорового образа жизни. Более 40 лет компания проводит научно-исследовательские
    работы в области клеточного питания человека. Руководит этими работами крупный научно-консультационный совет
    в составе которого эксперты мирового уровня. Все материалы, представленные здесь являются результатом многолетних исследований
    ВОЗ, всемирных институтов питания человека, а так же научных исследований компании Herbalife. Подробнее о компании и возможностях,
    которые она предлагает, вы сможете узнать на наших курсах. Если вас интересует продукция компании, вы можете заказать ее через
    вашего консультанта, отправив соотвествующую заявку через форму общения с ним.</h2>

<!--    <div class="products">-->
<!---->
<!--            <div class="video">-->
<!---->
<!--                <div class="image">-->
<!---->
<!--                        <iframe source src="https://youtu.be/_pk5bIVSwuQ" controls width="500" height="300" allowfullscreen>-->
<!---->
<!--                        </iframe>-->
<!--                </div>-->
<!---->
<!--                <span>Основы сбалансированного питания и здорового образа жизни</span><br>-->
<!--                <p style="color: gold">Если видео не воспроизводится, нажмите на эту <a href="https://youtu.be/_pk5bIVSwuQ" target="page" style="color: blue">ссылку</a></p>-->
<!--            </div>-->
<!---->
<!--    </div>-->

    <div class="products">

        <?php for($i = 0; $i < count($data); $i++): ?>

            <div class="video">
                <h2><?=$data[$i]['name']?></h2>
                <div class="image">
                    <iframe source src="<?=$data[$i]['surce']?>" controls width="500" height="300" allowfullscreen>
                    </iframe>
<!--                        <img src="/public/img/--><?//=$data[$i]['img']?><!--" alt="--><?//=$data[$i]['title']?><!--">-->
                </div>
                <span><?=$data[$i]['intro']?></span>
                <!--                <p>--><?//=$data[$i]['article']?><!--</p>-->
                <p style="color: orangered">Если видео не воспроизводится, нажмите на эту <a href="<?=$data[$i]['surce']?>" target="page" style="color: blue">ссылку</a></p>
            </div>
        <?php endfor; ?>
    </div>
</div>

</div>

<?php require 'public/blocks/footer.php' ?>

</body>
</html>

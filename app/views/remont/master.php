<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JavaScript</title>

    <link rel="stylesheet" href="/public/css/remont.css">
<!--    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/slick.css">
</head>
<body>
<header>
    <span class="logo">VashMaster</span>
    <div class="nav">
        <a href="/portal/index">ТРЦ Vodasol</a>
        <a href="#">В начало</a>
        <a href="#feedback">Отзывы о нас</a>
        <a href="#">Услуги</a>
 </div>
    <div class="tel"><a href="tel:+375447249639"> <i class="fas fa-phone ico_fone"></i>+375447249639</a></div>
    <span class="menu menu_mobile" id="show-menu">
      <i class="fas fa-bars"></i>
    </span>
</header>

<div id="hidden-menu" class="menu_mobile">
    <span class="close">
      <i class="fas fa-times"></i>
    </span>
    <h2>Меню</h2>
    <ul>
        <li><a href="/portal/index">ТРЦ Vodasol</a></li>
        <li><a href="#index">В начало</a></li>
        <li><a href="#feedback">Отзывы о нас</a></li>
        <li><a href="#">Услуги</a></li>
    </ul>
</div>

<?php if(isset($_POST['message'])): ?>
    <div class="error" style="color: gold; font-size: larger; font-weight: bolder; background: purple; padding: 1% "><?=$data['message']?></div>
<?php else: ?>
    <div class="error"></div>
<?php endif; ?>

<section class="full-page"><a href="index"></a>
    <h1>VashMaster - ремонт без хлопот</h1>
    <h3>Пора делать ремонт? Закажите у нас и забудьте о нем. Мы все сделаем за вас сами.</h3>
    <a href="#know_more"><button>Узнай больше <i class="fas fa-arrow-right"></i></button></a>

    <a href="#measuring">
        <batton class="blick btn_why" >
            Заказать бесплатный замер
        </batton>
    </a>

    <a href="tel:+375447249639">
        <batton class="blick btn_why" >
            Позвоните нам
        </batton>
    </a>
</section>

<section class="features"><a name="know_more"></a>
    <div>
        <img src="../../public/img/remont/cool-icon.png" alt="">
        <h4>Удобно</h4>
        <p>Мы сами бесплатно посчитаем необходимые объемы материалов. Вам не придется переплачивать за лишние материалы или
            искать потом такие же, в случае нехватки. Поможем в поиске и покупке материалов. Проконсультируем по вопросам
            производителей, цен на материалы, сочетания цветов и дизайна</p>
    </div>
    <div>
        <img src="../../public/img/remont/cool-icon.png" alt="">
        <h4>Качественно</h4>
        <p>Высокий уровень профессионализма обеспечен не только знаниями и навыками, но и многолетним практическим опытом</p>
    </div>
    <div>
        <img src="../../public/img/remont/light-icon.png" alt="">
        <h4>Чисто</h4>
        <p>Вам не придется наводить порядок в доме после нашего ремонта. Мы сами обеспечим чистоту и порядок.</p>
    </div>
</section>

<section class="gallery">
    <h2>Результаты нашей работы:</h2>
    <div id="slider">

            <div class="slide_img"><a href="https://bouw.ru/wp-content/uploads/2021/12/40.jpg" target="page"><img src="https://bouw.ru/wp-content/uploads/2021/12/40.jpg" alt=""></a></div>

        <div class="slide_img"><img src="https://st7.stpulscen.ru/images/product/144/707/491_big.jpg" alt=""></div>
        <div class="slide_img"><img src="https://media.3dplitka.ru/CACHE/images/catalog/tubadzin/tubadzin-artemon/tubadzin-artemon.31cb28bdc858.jpg" alt=""></div>
        <div class="slide_img"><img src="https://keramobum.ru/upload/bau/lb-ceramics/parizhanka2/parizhanka22.jpg" alt=""></div>
    </div>
</section>

<section class="fuq"><a name="know_more"></a>
    <div>
        <h2>Выгоды, которые вы получаете, когда доверяете ремонт нам:</h2>
        <ul>
            <li>Мы сами посчитаем необходимое количество всех требующихся материалов для ремонта</li>
            <li>Мы окажем вам помощь в подборке цветовых решений.</li>
            <li>Мы окажем вам максимальную помощь в выборе и приобретении всего необходимого для ремонта или по вашему
                желанию полностью возьмем эти хлопоты на себя. Вам не придется тратить время и силы на поиск и доставку материалов.</li>
            <li>Вам не придется после ремонта тратить время и силы на нудную уборку. Мы все сделаем сами.</li>
            <li>Мы работаем по принципу "закажи ремонт и забудь о нем". Это значит, что вам достаточно поставить перед нами задачу, и получить результат</li>
        </ul><br>
        <p><b>- Я не знаю, как правильно посчитать нужное количество материалов для ремонта.</b></p>
       <p>- Мы сами бесплатно приедем к вам, сделаем необходимые замеры и посчитаем необходимое количество
            всех требуемых материалов для ремонта.</p><br>
       <p><b>- Я слышал истории, когда мастера при расчетах специально завышали объемы
               материалов, чтобы клиенты больше тратили денег на их приобретение.</b></p>
       <p>- Мы не продаем никаких строительных материалов. Мы только производим ремонтные работы. Поэтому для нас
        нет никакого смысла необосновано увеличивать количество материалов для ремонта. Мы так же не сотрудничаем ни с кем
       из производителей или продавцов строительных материалов. Мы исключительно посчитаем требуемые объемы, а вы можете самостоятельно
       выбирать производителей и продавцов этих материалов. Если после окончания ремонта остаток чего-либо из строительных материалов
       значительно привысит нормативы по нашей вине, то мы выкупим их у вас по стоимости, указанной в чеке покупки. </p><br>
        <p><b>- Закупка всего необходимого для ремонта - это так хлопотно! К тому же я не очень-то в этом разбираюсь. Боюсь
            купить что-то плохого качества. Или наоборот переплатить без необходимости.</b></p>
        <p>- Мы окажем вам всю необходимоую помощь в приобретении необходимых материалов. По вашему желанию мы можем приобретать
        все необходимое вместе с вами, консультируя по всем вопросам, или полностью взять приобретение всего на себя.</p><br>
        <p><b>- Больше всего в ремонте меня напрягает грязь и необходимость уборки всего этого.</b></p>
        <a name="feedback"></a><p>- Все эти неприятные заботы мы возьмем на себя.</p><br>
    </div>

</section>

<section class="feed">
    <h2>Отзывы о нашей работе:</h2>
    <div id="slider2">
        <?php if (isset ($data['outFeedback'])): ?>
        <?php for($i = 0; $i < count($data['outFeedback']); $i++): ?>
        <div class="feedback"><p><?=$data['outFeedback'][$i]['message']?></p></div>
            <?php endfor; ?>
        <?php endif; ?>
    </div>
</section>

<section class="bg-fixed"><a name="measuring"></a>
    <h3>Заказать бесплатный замер</h3>
    <form action="/remont/master" method="post" class="form-control">

        <?php if(isset($_POST['name'])): ?>
            <input type="text" name="name" placeholder="Введите имя" value="<?=$_POST['name']?>">
        <?php else: ?>
            <input type="text" name="name" placeholder="Введите имя">
        <?php endif; ?>

        <?php if(isset($_POST['email'])): ?>
            <input type="email" name="email" placeholder="Введите email" value="<?=$_POST['email']?>"><br>
        <?php else: ?>
            <input type="email" name="email" placeholder="Введите email"><br>
        <?php endif; ?><br>

        <?php if(isset($_POST['fone'])): ?>
            <input type="text" name="fone" placeholder="Введите номер вашего телефона с кодом опператора: (29)1234567" value="<?=$_POST['fone']?>">
        <?php else: ?>
            <input type="text" name="fone" placeholder="Введите номер вашего телефона с кодом опператора: (29)1234567">
        <?php endif; ?>

        <?php if(isset($_POST['message'])): ?>
            <textarea name="message" placeholder="Введите сообщение" ><?=$_POST['message']?></textarea><br>
        <?php else: ?>
            <textarea name="message" placeholder="Введите сообщение"></textarea><br>
        <?php endif; ?>

        <?php if(isset($_POST['message'])): ?>
            <div class="error" style="color: gold; font-size: larger; font-weight: bolder; background: purple; padding: 1% "><?=$data['message']?></div>
        <?php else: ?>
            <div class="error"></div>
        <?php endif; ?>

        <button class="btn" id="send">Отправить</button>
    </form>
</section>

<section class="bg-fixed"><a name="measuring"></a>
    <h3>Если вы воспользовались нашими услугами, оставьте, пожалуйста, ваш отзыв о нашей работе.
        Это поможет нам становиться еще лучше. Спасибо, что вы с нами.</h3>

    <a href="/remont/otziv">
        <button class="btn" id="send">Отправить отзыв</button>
    </a>
</section>

<!--<footer>-->
<!--    <div class="up-btn">-->
<!--        <i class="fas fa-arrow-up"></i>-->
<!--    </div>-->
<!--    <p>Все права защищены &copy;</p>-->
<!--    <div class="social">-->
<!--        <div><i class="fab fa-youtube"></i></div>-->
<!--        <div><i class="fab fa-facebook-f"></i></div>-->
<!--        <div><i class="fab fa-twitter"></i></div>-->
<!--    </div>-->
<!--</footer>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/public/js/slick.min.js"></script>
<script src="/public/js/index.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бесплатная консультация по снижению веса</title>
    <meta name="description" content="Закажите бесплатную консультацию, и мы дадим вам персональные рекомендации по снижению веса,
        а так же поможем выбрать оптимальную для вас программу эффективного снижения веса." />

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/family.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <link rel="icon" href="/public/img/logo.svg">
    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
<!--    <link rel="stylesheet" href="/public/css/main.css?url=--><?//=mt_rand(0,100)?><!--" type="text/css" charset="utf-8">-->
<!--    <link rel="stylesheet" href="/public/css/form.css?url=--><?//=mt_rand(0,100000)?><!--" type="text/css" charset="utf-8">-->
</head>
<body>
<?php require_once 'public/blocks/navi.php'; ?>

<div class="container main">
    <h1>Записаться на консультацию</h1>
    <p style="color: #fafafa; background: #757575; padding: 1%">Для записи на консультацию заполните форму ниже. В комментариях опишите коротко ваш вопрос и укажите
        желаемое время для консультации. По указанному вами номеру мы с вами свяжемся и определим конкретное время. Спасибо.</p>

    <form action="freeConsult" method="post" class="form-control">

        <?php if(isset($_POST['message'])): ?>
            <div class="error" style="color: gold; font-size: larger; font-weight: bolder; background: purple; padding: 1% "><?=$data['message']?></div>
        <?php else: ?>
            <div class="error"></div>
        <?php endif; ?>
        <?php if(isset($_POST['name'])): ?>
            <input type="text" name="name" placeholder="Введите имя" value="<?=$_POST['name']?>">
        <?php else: ?>
            <input type="text" name="name" placeholder="Введите имя">
        <?php endif; ?>
        <?php if(isset($_POST['fone'])): ?>
            <input type="text" name="fone" placeholder="Введите номер вашего телефона в международном формате (+123456789123)" value="<?=$_POST['fone']?>">
        <?php else: ?>
            <input type="text" name="fone" placeholder="Введите номер вашего телефона в международном формате (+123456789123)">
        <?php endif; ?>
        <?php if(isset($_POST['email'])): ?>
            <input type="email" name="email" placeholder="Введите email" value="<?=$_POST['email']?>"><br>
        <?php else: ?>
            <input type="email" name="email" placeholder="Введите email"><br>
        <?php endif; ?><br>
        <p style="color: #fafafa; background: #a3a3a3; font-size: medium; padding: 1%">В поле для сообщения укажите предпочтительный для вас способ связи (skype, viber, whatsup),
            а так же ваш логин или номер телефона в данных мессенджерах, по которым наши консультанты смогут связаться с вами.</p>
        <?php if(isset($_POST['message'])): ?>
            <textarea name="message" placeholder="Введите сообщение" ><?=$_POST['message']?></textarea><br>
        <?php else: ?>
            <textarea name="message" placeholder="Введите сообщение"></textarea><br>
        <?php endif; ?>

        <button class="btn" id="send">Отправить</button>
    </form>
</div>

<?php require_once 'public/blocks/footer.php'; ?>
</body>
</html>
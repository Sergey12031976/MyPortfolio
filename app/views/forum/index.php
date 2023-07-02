<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Группа поддержки</title>
    <meta name="description" content="Группа поддержки для тех, борется с лишним весом">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/hudeem.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/forum.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <link rel="icon" href="/public/img/logo.svg">
</head>
<body>
<?php require 'public/blocks/vodasol.php' ?><br>

<div class="box main full-page">

    <br><h1>Клуб здорового образа жизни.</h1><br>
    <p style="font-weight: bolder; font-size: larger">Здесь вы можете общаться на любые темы, связанные со здоровым образом жизни. Обязательно ознакомьтесь с правилами
        общения в клубе.</p><br>

    <section class="forum">
        <div class="topic">
            <p>Здесь будет список тем</p>
<!--        --><?php //for($i = 0; $i < count($data); $i++): ?>
<!---->
<!--                <h2>--><?//=$data[$i]['user_name']?><!--</h2>-->
<!--                <div class="image">-->
<!--                    <img src="/public/img/--><?//=$data[$i]['img']?><!--" alt="--><?//=$data[$i]['user_img']?><!--">-->
<!--                </div>-->
<!--                <div>--><?//=$data[$i]['massage']?><!--</div>-->
<!--                <div style="margin-top: 10px">-->
<!--                    <a href="/programs/--><?//=$data[$i]['id']?><!--"><button class="btn">Подробнее</button></a>-->
<!--                </div>-->
<!---->
<!--        --><?php //endfor; ?>
        </div><br>

    </section><br>

    <div class="user-info">

        <?if(isset($data['email'])):?>
            <p>Привет, <b><?=$data['name']?></b></p>
        <?endif;?>

        <form action="/user/dashboard" method="post">
            <input type="hidden" name="exit_btn">
            <button type="submit" class="btn">Выйти</button>
        </form>

        <button class="btn">Форум</button>

    </div><br>

    <div class="consult" style="color: #eaeaea">

        <p>Отправьте ваше сообщение</p>

        <form action="/forum/index" method="post" class="form-control">
            <?php if(isset($data['email'])): ?>
                <input type="text" name="name" placeholder="<?=$data['name']?>" value="<?=$data['name']?>">
            <?php else: ?>
                <input type="text" name="name" placeholder="Введите ваше имя">
            <?endif;?>
            <?php if(isset($data['topic'])): ?>
                <input type="text" name="topic" placeholder="<?=$data['name']?>" value="<?=$data['name']?>">
            <?php else: ?>
                <input type="text" name="topic" placeholder="Укажите тему сообщения">
            <?php endif; ?>
            <?php if(isset($_POST['message'])): ?>
                <textarea name="message" placeholder="Введите сообщение" ><?=$_POST['message']?></textarea><br>
            <?php else: ?>
                <textarea name="message" placeholder="Введите сообщение"></textarea><br>
            <?php endif; ?>
            <?php if(isset($data['message'])): ?>
                <div class="error"><?=$data['message']?></div>
            <?php else: ?>
                <div class="error"></div>
            <?php endif; ?>
            <button class="btn" id="send">Готово</button>
        </form>

    </div>


</div>

<?php require 'public/blocks/footer.php' ?>

</body>
</html>


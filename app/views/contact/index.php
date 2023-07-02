
    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Свяжитесь с нами</title>
    <meta name="description" content="Свяжитесь с нами" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/main.css?url=<?=mt_rand(0,100)?>" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css?url=<?=mt_rand(0,100000)?>" type="text/css" charset="utf-8">
</head>
<body>
    <?php require_once 'public/blocks/header.php'; ?>

    <div class="container main">
        <h1>Контакты</h1>
        <p>Напишите нам, если у вас есть вопросы</p>
        <form action="/contact" method="post" class="form-control">
            <?php if(isset($_POST['name'])): ?>
                <input type="text" name="name" placeholder="Введите имя" value="<?=$_POST['name']?>">
            <?php else: ?>
                <input type="text" name="name" placeholder="Введите имя">
            <?php endif; ?>
            <?php if(isset($_POST['email'])): ?>
                <input type="email" name="email" placeholder="Введите email" value="<?=$_POST['email']?>"><br>
            <?php else: ?>
                <input type="email" name="email" placeholder="Введите email"><br>
            <?php endif; ?>
            <?php if(isset($_POST['age'])): ?>
                <input type="text" name="age" placeholder="Введите возраст" value="<?=$_POST['age']?>"><br>
            <?php else: ?>
                <input type="text" name="age" placeholder="Введите возраст"><br>
            <?php endif; ?>
            <?php if(isset($_POST['message'])): ?>
                <textarea name="message" placeholder="Введите сообщение" ><?=$_POST['message']?></textarea><br>
            <?php else: ?>
                <textarea name="message" placeholder="Введите сообщение"></textarea><br>
            <?php endif; ?>
            <?php if(isset($_POST['message'])): ?>
                <div class="error"><?=$data['message']?></div>
            <?php else: ?>
                <div class="error"></div>
            <?php endif; ?>
            <button class="btn" id="send">Отправить</button>
        </form>
    </div>

    <?php require_once 'public/blocks/footer.php'; ?>
</body>
</html>
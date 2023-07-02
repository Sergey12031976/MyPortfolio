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

    <div class="container main">

        <h1>Кабинет пользователя</h1><br>

        <?php require 'public/blocks/user.php' ?>
        <?if (isset($data['email'])):
         require 'public/blocks/stroiniashka/'.$data['link'].'.php';
//        require 'public/blocks/stroiniashka/dnevnik.php';
         require 'public/blocks/stroiniashka/myresult.php';
        endif;?>
        <?php if(isset($data['message'])): ?>
        <div class="error" style="color: #ff5644; background: gold; font-weight: bolder"><?=$data['message']?></div>
        <?php else: ?>
        <div class="error"></div>
        <?php endif; ?>



    </div>

    <?php require 'public/blocks/footer.php' ?>
</body>
</html>
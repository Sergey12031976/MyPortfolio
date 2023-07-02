
<!--<a href="/forum/index">-->
<!--    <button class="btn_why mobile" style="float: left; height: auto; margin-bottom: 20px; font-size: medium; font-weight: bold">Группа поддержки</button>-->
<!--</a>-->
<a href="#myresult" style="margin-top: 10px">
    <button class="btn_why mobile" style="float: left; height: auto; margin-bottom: 20px; font-size: medium; font-weight: bold">Отправить результаты взвешивания</button>
</a>
<a href="/user/myresult" style="margin-top: 10px">
    <button class="btn_why mobile" style=" height: auto; margin-bottom: 20px; font-size: medium; font-weight: bold">Мои успехи</button>
</a>

<div class="consult" style="color: #eaeaea">
    <h1>Кабинет консультаций</h1>

    <p>Отправьте ваше сообщение консультанту</p>

    <form action="/stroiniashka/consultant" method="post" class="form-control">
        <?php if(isset($data['email'])): ?>
            <input type="text" name="name" placeholder="<?=$data['name']?>" value="<?=$data['name']?>">
        <?php else: ?>
            <input type="text" name="name" placeholder="Введите ваше имя">
        <?php endif; ?>
        <?php if(isset($data['email'])): ?>
            <input type="hidden" name="email" placeholder="<?=$data['email']?>" value="<?=$data['email']?>">
        <?php else: ?>
            <input type="hidden" name="email">
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

    <a href="/user/dnevnik">Ваш дневник питания</a>

</div>

<?php //require 'public/blocks/stroiniashka/dnevnik.php'?>
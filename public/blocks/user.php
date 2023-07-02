<div class="user-info">

    <?if(isset($data['email'])):?>
        <p>Привет, <b><?=$data['name']?></b></p>
    <?endif;?>

    <form action="/user/dashboard" method="post">
        <input type="hidden" name="exit_btn">
        <button type="submit" class="btn">Выйти</button>
    </form>

<!--    <button class="btn">Форум</button>-->

</div><br>

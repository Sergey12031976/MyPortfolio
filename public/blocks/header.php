<header>
    <div class="container top-menu">

        <span class="menu_mobile" id="show-menu" style="font-size: large">
			  <i class="fas fa-bars"></i>
			  </span>
        <div id="hidden-menu" class="menu_mobile">
            <span class="close"><i class="fas fa-times"></i></span>
            <h2>Меню</h2><br>
            <ul>
                <li><a href="/">Главная</a></li><br>
                <li><a href="/contact">Контакты</a></li><br>
                <li><a href="/contact/about">О нас</a></li><br>
                <li><a href="/admin/adminauth">Вход для администратора</a></li><br>
                <li><a href="/categories">Все товары</a></li><br>
                <li><a href="/categories/kitchen">Для кухни</a></li><br>
                <li><a href="/categories/bath">Для ванны</a></li><br>
                <li><a href="/categories/washbasin">Для умывальника</a></li><br>
                <li><a href="/categories/shower">Для душевых кабин</a></li><br>
                <li><a href="/categories/bonus">Отзывы</a></li>
            </ul>
        </div>

        <div class="nav">
            <a href="/">Главная</a>
            <a href="/contact">Контакты</a>
            <a href="/contact/about">О нас</a>
            <a href="/admin/adminauth">Вход для администратора</a>
        </div>

        <a href="/portal/index">
            <div class="blick btn_why">
                ТРЦ Vodasol
            </div>
        </a>

        <div class="tel"><a href="tel:+375447249639"><i class="fas fa-phone ico_fone"></i> +375 (44) 724 - 96 - 39</a></div>
    </div>

    <div class="container middle">
        <div class="logo">
            <img src="/public/img/logo.svg" alt="Logo">
            <span>Мы подчиняем воду вашим желаниям!</span>
        </div>

        <div class="auth-checkout">
            <a href="/basket/index">

                <?php
                require_once 'app/models/BasketModel.php';
                $basketModel = new BasketModel();
                ?>

                <button class="btn basket">Корзина <b>(<?=$basketModel->countItems()?>)</b></button>
            </a><br>
            <?php if(!isset($_COOKIE['log'])): ?>
                <a href="/user/auth">
                    <button class="btn auth">Войти</button>
                </a>
                <a href="/user/reg">
                    <button class="btn mobile" style="margin-top: 10px">Регистрация</button>
                </a>

            <?php else: ?>
                <a href="/user/dashboard">
                    <button class="btn dashboard">Кабинет пользователя</button>
                </a>
            <?php endif; ?>

        </div>
   </div>

    <div style="width: 90%; margin-left: 10%">
        <h4>Режим работы нашего магазина:</h4>
        <p>Прием и оформление заявок: ежедневно 9.00 - 18.00</p>
        <p>Доставка и установка: пн.-пт 10.00 - 19.00</p>
        <p>Доставка и установка экстренных заказов до 22.00</p>
        <p>Выходной: сб, вск.</p>
        <p>В выходные дни осуществляется доставка только экстренных заказов</p>
    </div> <br>

    <div class="container menu">
        <ul>
            <li><a href="/categories">Все товары</a></li>
            <li><a href="/categories/kitchen">Для кухни</a></li>
            <li><a href="/categories/bath">Для ванны</a></li>
            <li><a href="/categories/washbasin">Для умывальника</a></li>
            <li><a href="/categories/shower">Для душевых кабин</a></li>
            <li><a href="/categories/bonus">Отзывы</a></li>
            <!--            <li><a href="/categories/cooperation">Стать сотрудником</a></li>-->
        </ul>
    </div>

    <a href="/contact/about">
        <div class="blick btn_why" style="width: 15%; margin-top: 20px; margin-left: 40%">
            Почему мы лучше?
        </div>
    </a>

</header>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">

    $("#show-menu").on("click", function() {
        $("#hidden-menu").animate({"left": 0}, 500);
    });

    $("#hidden-menu .close").on("click", function() {
        $("#hidden-menu").animate({"left": "-300px"}, 200);
    });

</script>
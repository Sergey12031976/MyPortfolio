<div id="head">
    <div class="container top-menu">

        <span class="menu_mobile" id="show-menu" style="font-size: large">
			  <i class="fas fa-bars"></i>
			  </span>
        <div id="hidden-menu" class="menu_mobile">
            <span class="close"><i class="fas fa-times"></i></span>
            <h2>Меню</h2><br>
            <ul>
                <li><a href="../../family/index">Главная</a></li><br>
                <li><a href="/contact">Контакты</a></li><br>
<!--                <li><a href="/hudeem/about">О нас</a></li><br>-->
                <li><a href="/portal/index">ТРЦ Vodasol</a></li><br>
                <li><a href="/admin/adminauth">Вход для администратора</a></li><br>
            </ul>
        </div>

        <div class="nav">
            <a href="../../family/index">Главная</a>
            <a href="/contact">Контакты</a>
<!--            <a href="/hudeem/about">О нас</a>-->
            <a href="/admin/adminauth">Вход для администратора</a>
        </div>

        <a href="/portal/index">
            <div class="blick btn_why">
                ТРЦ Vodasol
            </div>
        </a>

        <div class="tel"><a href="tel:+375447249639"><i class="fas fa-phone ico_fone"></i> +375 (44) 724 - 96 - 39</a></div>
    </div><br>

    <?php if(!isset($_COOKIE['log'])): ?>
        <a href="/family/auth">
            <button class="btn auth">Войти</button>
        </a>
        <a href="/family/reg">
            <button class="btn mobile" style="margin-top: 10px">Регистрация</button>
        </a>

        <!--                    <a href="/contact/about">-->
        <!--                        <span class="blick btn_why">-->
        <!--                            Заказать бесплатную консультацию-->
        <!--                        </span>-->
        <!--                    </a>-->
<!--        <a href="/hudeem/freeConsult">-->
<!--            <button class="blick btn_why mobile" style="margin-top: 10px">Заказать бесплатную консультацию</button>-->
<!--        </a>-->

    <?php else: ?>
        <a href="/family/reeder">
            <button class="btn dashboard">Кабинет пользователя</button>
        </a>
    <?php endif; ?>

    <!--        <div class="container menu">-->
    <!--            <ul>-->
    <!--                <li><a href="/categories">Все товары</a></li>-->
    <!--                <li><a href="/categories/kitchen">Для кухни</a></li>-->
    <!--                <li><a href="/categories/bath">Для ванны</a></li>-->
    <!--                <li><a href="/categories/washbasin">Для умывальника</a></li>-->
    <!--                <li><a href="/categories/shower">Для душевых кабин</a></li>-->
    <!--                <li><a href="/categories/bonus">Отзывы</a></li>-->
    <!--                <li><a href="/categories/cooperation">Стать сотрудником</a></li>-->
    <!--            </ul>-->
    <!--        </div>-->

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!--    <script type="text/javascript" src="../js/scripts.js"></script>-->
    <script type="text/javascript">

        // $(document).scroll(function () {if ($(document).width() < 1024) return false;
        //     if ($(document).scrollTop() > $('.full-page').height() / 2.2)
        //         $("#head").addClass ("fixed");
        //     else $("#head").removeClass ("fixed");
        // });

        $("#show-menu").on("click", function() {
            $("#hidden-menu").animate({"left": 0}, 500);
        });

        $("#hidden-menu .close").on("click", function() {
            $("#hidden-menu").animate({"left": "-300px"}, 200);
        });

    </script>

</div>
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
    <link rel="stylesheet" href="/public/css/family.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <link rel="icon" href="/public/img/logo.svg">
</head>
<body>
<?php //require 'public/blocks/vodasol.php' ?><!--<br>-->

<!--если пользователь не нажимает "оплата картой", а нажимает "посмотреть другую программу", то в БД возвращается "noprogram"-->

<form action="payment" method="post" class='btn_program'>
    <?php if(isset($_COOKIE['log'])): ?>
    <input type="hidden" name="email" value="<?=$_COOKIE['log']?>">
    <? endif?>
    <input type="hidden" name="title_id" value="none">
    <input type="hidden" name="exit_btn">
    <input type="submit" value="Посмотреть другой пакет" name="BasketDelete">
</form>

<div class="container main">

    <?if (isset($data['package'])): ?>
    <h1>Приобрести пакет</h1><br>

    <?php
    if(count($data['package']) == 0): ?>
        <p><?=$data['empty']?></p>
    <?php else: ?>
    <div class="products">
        <?php
        $sum = 0;
        for($i = 0; $i < count($data['package']); $i++):
            $sum += $data['package'][$i]['price'];

            ?>

            <div class="row">
                <img src="/public/img/family/<?=$data['package'][$i]['img']?>" alt="<?=$data['package'][$i]['title']?>">
                <h3>Читательский пакет "<?=$data['package'][$i]['title']?>"</h3><br>
                <span>Стоимость пакета <?=$data['package'][$i]['price']?> BYN</span>
            </div>
        <?php endfor; ?>
        <? endif; ?>

</div> <br>


<?php if(!isset($_COOKIE['log'])): ?>

    <p style="color: #fafafa">Чтобы приобрести данную программу, зарегистрируйтесь или войдите под своим именем.</p>
    <a href="auth">
        <button class="btn auth">Войти</button>
    </a>
    <a href="reg">
        <button class="btn mobile" style="margin-top: 10px">Регистрация</button>
    </a>
<?php else: ?>


    <?php

    $secretKey = "dkjk2987e65akkakds50";

    $fields = array();



    // Добавление полей формы в ассоциативный массив

    $fields["*scart"] = "";
    $fields["wsb_version"] = "2";
    $fields["wsb_language_id"] = "russian";
    $fields["wsb_storeid"] = "751200508";
    $fields["wsb_store"] = "Vodasol";
    $fields["wsb_order_num"] = time();
    $fields["wsb_test"] = "1";
    $fields["wsb_currency_id"] = "BYN";
    $fields["wsb_seed"] = date('Y-m-d')."T23:59:59";
    //$fields["wsb_customer_name"] = "Ivanov";
    //$fields["wsb_customer_address"] = "Soligorsk";
    //$fields["wsb_service_date"] = "Доставить до";
    $fields["wsb_return_url"] = "http://myshop/family/ok";
    $fields["wsb_cancel_return_url"] = "http://myshop/family/error";
    $fields["wsb_notify_url"] = "https://vodasol.by/notify.php";

    //$fields["wsb_email"] = "admin@vodasol.by";
    //$fields["wsb_phone"] = "+375447249639";

    if(count($data['package'])){
        $sum = 0;
        for($i = 0; $i < count($data['package']); $i++){

            $sum+= $data['package'][$i]['price'];

            $fields["wsb_invoice_item_name[$i]"] = $data['package'][$i]['title'];
            $fields["wsb_invoice_item_quantity[$i]"] = "1";
            $fields["wsb_invoice_item_price[$i]"] = $data['package'][$i]['price'];

            $fields["wsb_total"] = $sum;

            //Сортировка значений внутри полей
            foreach($fields as $name => $val)
            {
                if(is_array($val))
                {
                    usort($val, "strcasecmp");
                    $fields[$name] = $val;
                }
            }

            // Формирование сообщения, путем объединения значений формы,
            // отсортированных по именам ключей в порядке возрастания.
            uksort($fields, "strcasecmp");
            $fieldValues = "";

            foreach($fields as $value)
            {
                if(is_array($value))
                    foreach($value as $v)
                    {
                        //Конвертация из текущей кодировки (UTF-8)
                        //необходима только если кодировка магазина отлична от Windows-1251
                        $v = iconv("utf-8", "windows-1251", $v);
                        $fieldValues .= $v;
                    }
                else
                {
                    //Конвертация из текущей кодировки (UTF-8)
                    //необходима только если кодировка магазина отлична от Windows-1251
                    $value = iconv("utf-8", "windows-1251", $value);
                    $fieldValues .= $value;
                }
            }


            // Формирование значения параметра wsb_signature, путем
            // вычисления отпечатка, сформированного выше сообщения,
            // по алгоритму SHA1



            $wsb_seed=$fields["wsb_seed"];
            $wsb_storeid=$fields["wsb_storeid"];
            $wsb_order_num=$fields["wsb_order_num"];
            $wsb_test=$fields["wsb_test"];
            $wsb_currency_id=$fields["wsb_currency_id"];
            $wsb_total=$fields["wsb_total"];
            $wsb_signature = SHA1($wsb_seed.$wsb_storeid.$wsb_order_num.$wsb_test.$wsb_currency_id.$wsb_total. $secretKey);

            //Добавление параметра WMI_SIGNATURE в словарь параметров формы

            $fields["wsb_signature"] = $wsb_signature;
        }
    }
    // Формирование HTML-кода платежной формы

    print "<form action='https://securesandbox.webpay.by/' method='POST' class='form-control'>";

    foreach($fields as $key => $val)
    {
        if(is_array($val))
            foreach($val as $value)
            {
                print "<input type='hidden' name='$key' value='$value'/>";

            }
        else
            print "<input type='hidden' name='$key' value='$val'/>";
    }

    ?>

    <input type="submit" value='Оплата картой (<?=$fields["wsb_total"]?> BYN)' class="btn" style="width: auto">
    </form>


<? endif; ?>
    <? endif; ?>

</div>

<?php require 'public/blocks/footer.php' ?>

</body>
</html>

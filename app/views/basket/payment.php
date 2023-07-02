<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Оплата заказа</title>
    <meta name="description" content="Корзина товаров">

    <link rel="stylesheet" href="/public/css/main.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/products.css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
<?php require 'public/blocks/header.php' ?>

<div class="container main">

    <div class="container main">
        <?if (isset($data['products'])): ?>
        <h1>Оплата заказа</h1>

    <?php
    if(count($data['products']) == 0): ?>
        <p><?=$data['empty']?></p>
    <?php else: ?>
        <div class="products">
            <?php
            $sum = 0;
            for($i = 0; $i < count($data['products']); $i++):
                $sum += $data['products'][$i]['price'];

                ?>

                <div class="row">
                    <img src="/public/img/<?=$data['products'][$i]['img']?>" alt="<?=$data['products'][$i]['title']?>">
                    <h4><?=$data['products'][$i]['title']?></h4>
                    <span><?=$data['products'][$i]['price']?> рублей</span>
                </div>
            <?php endfor; ?>
            <? endif; ?>

            <? endif; ?>
        </div>

        <!--    <form action="https://securesandbox.webpay.by/" method="post" class='form-control'>-->
        <?php

        $secretKey = "dkjk2987e65akkakds50";

        $fields = array();



        // Добавление полей формы в ассоциативный массив

        $fields["*scart"] = "";
        $fields["wsb_version"] = "2";
        $fields["wsb_language_id"] = "russian";
        $fields["wsb_storeid"] = "751200508";
        $fields["wsb_store"] = "Vodasol";
        $fields["wsb_order_num"] = "75".date('H.i.s');
        $fields["wsb_test"] = "1";
        $fields["wsb_currency_id"] = "BYN";
        $fields["wsb_seed"] = date('Y-m-d')."T23:59:59";
        //$fields["wsb_customer_name"] = "Ivanov";
        //$fields["wsb_customer_address"] = "Soligorsk";
        //$fields["wsb_service_date"] = "Доставить до";
        $fields["wsb_return_url"] = "http://vodasol.by/";
        $fields["wsb_cancel_return_url"] = "http://vodasol.by/basket";
        $fields["wsb_notify_url"] = "http://vodasol.by/notify.php";

        //$fields["wsb_email"] = "admin@vodasol.by";
        //$fields["wsb_phone"] = "+375447249639";

        if(count($data['products'])){
            $sum = 0;
            for($i = 0; $i < count($data['products']); $i++){

                $sum+= $data['products'][$i]['price'];

                $fields["wsb_invoice_item_name[$i]"] = $data['products'][$i]['title'];
                $fields["wsb_invoice_item_quantity[$i]"] = "1";
                $fields["wsb_invoice_item_price[$i]"] = $data['products'][$i]['price'];

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

        <input type="submit" value='Оплата картой(<?=$fields["wsb_total"]?> рублей)' class="btn">
        </form>




            <?php

            $secretKey = "dkjk2987e65akkakds50";

            $fields = array();



            // Добавление полей формы в ассоциативный массив

            $fields["*scart"] = "";
            $fields["wsb_version"] = "2";
            $fields["wsb_language_id"] = "russian";
            $fields["wsb_storeid"] = "761983593";
            $fields["wsb_store"] = "vodasol";
            $fields["wsb_order_num"] = time();
            $fields["wsb_test"] = "0";
            $fields["wsb_currency_id"] = "BYN";
            $fields["wsb_seed"] = date('Y-m-d')."T23:59:59";
            //$fields["wsb_customer_name"] = "Ivanov";
            //$fields["wsb_customer_address"] = "Soligorsk";
            //$fields["wsb_service_date"] = "Доставить до";
            $fields["wsb_return_url"] = "http://vodasol.by/";
            $fields["wsb_cancel_return_url"] = "http://vodasol.by/basket";
            $fields["wsb_notify_url"] = "http://vodasol.by/notify.php";

            //$fields["wsb_email"] = "admin@vodasol.by";
            //$fields["wsb_phone"] = "+375447249639";

            if(count($data['products'])){
                $sum = 0;
                for($i = 0; $i < count($data['products']); $i++){

                    $sum+= $data['products'][$i]['price'];

                    $fields["wsb_invoice_item_name[$i]"] = $data['products'][$i]['title'];
                    $fields["wsb_invoice_item_quantity[$i]"] = "1";
                    $fields["wsb_invoice_item_price[$i]"] = $data['products'][$i]['price'];

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

            //print "<form action='https://securesandbox.webpay.by/' method='POST' class='form-control'>";
            print "<form action='https://payment.webpay.by' method='POST' class='form-control'>";

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

            <input type="submit" value='Оплата в ЕРИП (<?=$fields["wsb_total"]?> рублей)' class="btn">
            </form>

        </div>

    </div>

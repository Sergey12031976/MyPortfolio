<?php
$key = "dkjk2987e65akkakds50";

$fields = array();

// Добавление полей формы в ассоциативный массив
$fields["*scart"];
$fields["wsb_version"] = "2";
$fields["wsb_language_id"] = "ru";
$fields["wsb_storeid"] = "751200508";
$fields["wsb_store"] = "Vodasol";
$fields["wsb_order_num"] = date('Y-m-d')."T23:59:59";
$fields["wsb_test"] = "1";
$fields["wsb_currency_id"] = "BYN";
$fields["wsb_seed"] = date('Y-m-d')."T23:59:59"; // Дополнительные параметры
//$fields["wsb_customer_name"] = "Ivanov";
//$fields["wsb_customer_address"] = "Soligorsk";
//$fields["wsb_service_date"] = "Доставить до";
$fields["wsb_return_url"] = "vodasol.by";
$fields["wsb_cancel_return_url"] = "http://vodasol.by/basket";
$fields["wsb_notify_url"] = "http://vodasol.by/notify.php";

//$fields["wsb_email"] = "admin@vodasol.by";
//$fields["wsb_phone"] = "+375447249639";
if (isset($data['products']))
    for($i = 0; $i < count($data['products']); $i++)

$fields["wsb_invoice_item_name[0]"] = $data['products'][$i]['title'];
$fields["wsb_invoice_item_quantity[0]"] = "1";
$fields["wsb_invoice_item_price[0]"] = $data['products'][$i]['price'];
$fields["wsb_total"] = "";

//Если требуется задать только определенные способы оплаты, раскоментируйте данную строку и перечислите требуемые способы оплаты.
// $fields["WMI_PTENABLED"]      = array("UnistreamRUB", "SberbankRUB", "RussianPostRUB");

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

// Формирование значения параметра WMI_SIGNATURE, путем
// вычисления отпечатка, сформированного выше сообщения,
// по алгоритму MD5 и представление его в Base64

$signature = base64_encode(pack("H*", SHA1($fieldValues . $key)));

//Добавление параметра WMI_SIGNATURE в словарь параметров формы

$fields["wsb_signature"] = $signature;

// Формирование HTML-кода платежной формы

print "<form action='https://wl.walletone.com/checkout/checkout/Index' method='POST' class='form-control'>";

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


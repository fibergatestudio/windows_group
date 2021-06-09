<?php

//Курс доллара
$kurs = 28;
//Получение курса доллара по АПИ
$json   = file_get_contents("https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5");
$privat = json_decode($json);
if (count($privat) > 0) foreach($privat as $kr => $vr) {
    if ($vr->ccy == 'USD') {
        $kurs = (float)str_replace(',', '.', $vr->sale);
    }
}

$height = !empty($_GET['height']) ? (int)$_GET['height'] : 600; //Высота
$width  = !empty($_GET['width']) ? (int)$_GET['width'] : 600; //Ширина

//Ограничение размеров высоты и ширины
$width_err = $height_err = '';
if ($_GET['furniture_type'] == '1') {
    if ($height < 500) $height = $height_err = 500;
    else if ($height > 1600) $height = $height_err = 1600;
    if ($width < 500) $width = $width_err = 500;
    else if ($width > 1400) $width = $width_err = 1400;
} else if ($_GET['furniture_type'] == '2') {
    if ($height < 500) $height = $height_err = 500;
    else if ($height > 1600) $height = $height_err = 1600;
    if ($width < 500) $width = $width_err = 500;
    else if ($width > 900) $width = $width_err = 900;
    if ($height == 500 && $width > 1000) $width = $width_err = 900;
    if ($height == 600 && $width > 1000) $width = $width_err = 900;
    if ($height == 700 && $width > 1000) $width = $width_err = 900;
    if ($height == 800 && $width > 1000) $width = $width_err = 900;
    if ($height == 900 && $width > 1000) $width = $width_err = 900;
    if ($height == 1100 && $width > 1000) $width = $width_err = 900;
    if ($height == 1200 && $width > 1000) $width = $width_err = 900;
    if ($height == 1300 && $width > 1000) $width = $width_err = 900;
    if ($height == 1400 && $width > 1000) $width = $width_err = 900;
    if ($height == 1600 && $width > 1000) $width = $width_err = 900;
} else if ($_GET['furniture_type'] == '3' || $_GET['furniture_type'] == '4') {
    if ($height < 1000) $height = $height_err = 1000;
    else if ($height > 1600) $height = $height_err = 1600;
    if ($width < 1000) $width = $width_err = 1000;
    else if ($width > 1600) $width = $width_err = 1600;
    if ($height == 1500 && $width > 1500) $width = $width_err = 1500;
    if ($height == 1600 && $width > 1200) $width = $width_err = 1200;
} else if ($_GET['furniture_type'] == '5' || $_GET['furniture_type'] == '6' || $_GET['furniture_type'] == '7') {
    if ($height < 1300) $height = $height_err = 1300;
    else if ($height > 1600) $height = $height_err = 1600;
    if ($width < 1600) $width = $width_err = 1600;
    else if ($width > 2700) $width = $width_err = 2700;
    if ($height == 1600 && $width > 2500) $width = $width_err = 2500;
} else if ($_GET['furniture_type'] == '8') {
    if ($height < 1600) $height = $height_err = 1600;
    else if ($height > 1800) $height = $height_err = 1800;
    if ($width < 1600) $width = $width_err = 1600;
    else if ($width > 3500) $width = $width_err = 3500;
    if ($height == 1700 && $width > 3300) $width = $width_err = 3300;
    if ($height == 1800 && $width > 3100) $width = $width_err = 3100;
} else if ($_GET['furniture_type'] == '22') {
    if ($height < 1900) $height = $height_err = 1900;
    else if ($height > 2300) $height = $height_err = 2300;
    if ($width < 600) $width = $width_err = 600;
    else if ($width > 900) $width = $width_err = 900;
    if ($height == 2200 && $width > 800) $width = $width_err = 800;
    if ($height == 2300 && $width > 700) $width = $width_err = 700;
}

if ($_GET['model'] == '1_1') { //Aluplast Ideal 2000
    $price_rama    = 3.1;
    $price_stvorka = 3.21;
    $price_impost  = 3.42;
    $price_ugol    = 9.96;
} else if ($_GET['model'] == '1_2') { //Aluplast Ideal 4000
    $price_rama    = 3.41;
    $price_stvorka = 3.53;
    $price_impost  = 3.77;
    $price_ugol    = 10.96;
} else if ($_GET['model'] == '1_3') { //Aluplast Ideal 8000
    $price_rama    = 4.88;
    $price_stvorka = 5.05;
    $price_impost  = 5.39;
    $price_ugol    = 15.67;
} else if ($_GET['model'] == '2_1') { //Salamander 2D
    $price_rama    = 5.95;
    $price_stvorka = 6.22;
    $price_impost  = 7.35;
    $price_ugol    = 14.1;
} else if ($_GET['model'] == '2_2') { //Salamander Streamline
    $price_rama    = 7.01;
    $price_stvorka = 7.33;
    $price_impost  = 8.65;
    $price_ugol    = 16.61;
} else if ($_GET['model'] == '2_3') { //Salamander BluEvolution
    $price_rama    = 9.88;
    $price_stvorka = 10.34;
    $price_impost  = 12.2;
    $price_ugol    = 23.43;
} else if ($_GET['model'] == '3_1') { //Rehau Euro-Design 60
    $price_rama    = 5.22;
    $price_stvorka = 5.46;
    $price_impost  = 6.44;
    $price_ugol    = 12.37;
} else if ($_GET['model'] == '3_2') { //Rehau Euro-Design 70
    $price_rama    = 5.85;
    $price_stvorka = 6.12;
    $price_impost  = 7.22;
    $price_ugol    = 13.86;
} else if ($_GET['model'] == '3_3') { //Rehau Synego
    $price_rama    = 8.89;
    $price_stvorka = 9.3;
    $price_impost  = 10.97;
    $price_ugol    = 21.06;
} else if ($_GET['model'] == '4_1') { //WDS 5S
    $price_rama    = 4.48;
    $price_stvorka = 4.69;
    $price_impost  = 5.53;
    $price_ugol    = 10.62;
} else if ($_GET['model'] == '4_2') { //WDS 6S
    $price_rama    = 4.65;
    $price_stvorka = 4.87;
    $price_impost  = 5.75;
    $price_ugol    = 11.03;
} else if ($_GET['model'] == '4_3') { //WDS 7S
    $price_rama    = 4.35;
    $price_stvorka = 4.55;
    $price_impost  = 5.37;
    $price_ugol    = 10.31;
} else if ($_GET['model'] == '5_1') { //Veka Euroline
    $price_rama    = 5.22;
    $price_stvorka = 5.46;
    $price_impost  = 6.44;
    $price_ugol    = 12.37;
} else if ($_GET['model'] == '5_2') { //Veka Softline 70
    $price_rama    = 5.9;
    $price_stvorka = 6.17;
    $price_impost  = 7.28;
    $price_ugol    = 13.98;
} else if ($_GET['model'] == '5_3') { //Veka Softline 82
    $price_rama    = 7.96;
    $price_stvorka = 8.33;
    $price_impost  = 9.83;
    $price_ugol    = 18.87;
} else if ($_GET['model'] == '6_1') { //KBE Ballans3
    $price_rama    = 4.37;
    $price_stvorka = 4.58;
    $price_impost  = 5.39;
    $price_ugol    = 10.33;
} else if ($_GET['model'] == '6_2') { //KBE Optima 5
    $price_rama    = 4.63;
    $price_stvorka = 4.85;
    $price_impost  = 5.71;
    $price_ugol    = 10.95;
} else if ($_GET['model'] == '7_1') { //Viknaland 58
    $price_rama    = 4.2;
    $price_stvorka = 4.46;
    $price_impost  = 5.26;
    $price_ugol    = 10.1;
} else if ($_GET['model'] == '7_2') { //Viknaland 70
    $price_rama    = 5.04;
    $price_stvorka = 5.35;
    $price_impost  = 6.31;
    $price_ugol    = 12.12;
} else if ($_GET['model'] == '7_3') { //Viknaland 85
    $price_rama    = 5.92;
    $price_stvorka = 6.29;
    $price_impost  = 7.42;
    $price_ugol    = 14.24;
} else if ($_GET['model'] == '8_1') { //Windoffs 3
    $price_rama    = 2.9;
    $price_stvorka = 3;
    $price_impost  = 3.2;
    $price_ugol    = 9.31;
} else if ($_GET['model'] == '8_2') { //Windoffs 6
    $price_rama    = 3.6;
    $price_stvorka = 3.8;
    $price_impost  = 4.2;
    $price_ugol    = 10;
} else if ($_GET['model'] == '9_1') { //OpenTeck Delux 60
    $price_rama    = 2.76;
    $price_stvorka = 2.85;
    $price_impost  = 3.04;
    $price_ugol    = 8.84;
} else if ($_GET['model'] == '9_2') { //OpenTeck Elite 70
    $price_rama    = 4.21;
    $price_stvorka = 4.45;
    $price_impost  = 4.91;
    $price_ugol    = 11.7;
} else {
    $price_rama    = 4.35; //Стоимость рамы выбранного профиля
    $price_stvorka = 4.55; //Стоимость створки выбранного профиля
    $price_impost  = 5.37; //Стоимость импоста выбранного профиля
    $price_ugol    = 10.31; //Стоимость угла выбранного профиля
}
//Стоимость стеклопакета выбранного вида
if ($_GET['steklop'] == '2') $price_steklo  = 18; //2 камерный
else if ($_GET['steklop'] == '3') $price_steklo  = 14; //1 камерный энергосберегающий
else if ($_GET['steklop'] == '4') $price_steklo  = 21; //2 камерный энергосберегающий
else $price_steklo  = 13; //1 камерный
//Стоимость фурнитуры выбранного вида
if ($_GET['furnit'] == '2') $price_furn    = 18; //Premium
else $price_furn    = 12; //Standart
$m2            =  ($width * $height / 1000000);
if ($m2 < 0.75) $m2 = 0.75;
//Комплектующие:
//Стоимость подоконника
if ($_GET['podok'] == '2') $price_podok  = 2.6; //OpenTeck
else if ($_GET['podok'] == '3') $price_podok  = 6; //Kraft
else if ($_GET['podok'] == '4') $price_podok  = 11.46; //Danke
else if ($_GET['podok'] == '5') $price_podok  = 9.82; //Plastolit
else if ($_GET['podok'] == '6') $price_podok  = 16; //Werzalit
else if ($_GET['podok'] == '7') $price_podok  = 6; //Crystalit
else if ($_GET['podok'] == '8') $price_podok  = 6; //WDS
else if ($_GET['podok'] == '9') $price_podok  = 5.71; //Sauberg
else $price_podok = 0;
$podok = $price_podok * $kurs;
//Стоимость отлива
if ($_GET['otliv'] == '2') $price_otliv  = 1.6; //Оцинкованый белый
else if ($_GET['otliv'] == '3') $price_otliv  = 1.6; //Оцинкованый цветной
else if ($_GET['otliv'] == '4') $price_otliv  = 1.6; //Алюминиевый
else if ($_GET['otliv'] == '5') $price_otliv  = 5.6; //Пластиковый
else $price_otliv = 0;
$otliv = $price_otliv * $kurs;
//Стоимость москитной сетки
if ($_GET['furniture_type'] == '20' || $_GET['furniture_type'] == '21' || $_GET['furniture_type'] == '22') $price_moskit  = 8.5;
else $price_moskit  = 5.7;
$moskit        = $_GET['moskitka'] == '2' ? $price_moskit * $m2 * $kurs : 0;
//Услуги:
$price_montag  = 9; //Стоимость монтажа
$montag        = $_GET['montaga'] == '2' ? $price_montag * $m2 * $kurs : 0;
$price_otkos   = 10; //Стоимость откосов
$otkos         = ($_GET['otkosa'] == '2' || $_GET['otkosa'] == '3') ? $price_otkos * $m2 * $kurs : 0;
$price_dop     = $moskit + $montag + $otkos + $podok + $otliv;
$rama    = ($height + $width) * 2 / 1000 * $price_rama * $kurs; //Рама: (Высота + Ширина) * 2 / 1000 * стоимость рамы выбранного профиля * курс доллара
$steklo  = ($height * $width / 1000000) * $price_steklo * $kurs; //Стеклопакет: (Высота * Ширина / 1000000) * Стоимость выбранного вида стеклопакета * курс доллара

//Тип открытия
switch ($_GET['furniture_type']) {
    case '1': //1 - створчатое окно -> глухое окно
        /*
        **(Рама + стеклопакет) * Наценка
        **Наценка = 1,25
        */
        $extra = 1.25;
        $price = ($rama + $steklo) * $extra + $price_dop;
        break;
    case '2': //1 - створчатое окно -> окно с отркрыванием
        /*
        **(Рама + створка + фурнитура + стеклопакет) * Наценка
        **Створка: (Высота + Ширина) * 2 / 1000 * стоимость створки выбранного профиля * курс доллара
        **Фурнитура:  1 единица * стоимость выбранного вида фурнитуры * курс доллара
        **Наценка = 1,15
        */
        $stvorka = ($height + $width) * 2 / 1000 * $price_stvorka * $kurs;
        $furn    = $price_furn * $kurs;
        $extra   = 1.15;
        $price   = ($rama + $stvorka + $furn + $steklo) * $extra + $price_dop;
        break;
    case '3': //2 - створчатое окно -> окно с одним отркрыванием
        /*
        **(Рама  + створка + импост + 1 единица фурнитуры + стеклопакет) * Наценка
        **Створка: (Ширина / 2 + Высота) * 2 / 1000 * стоимость створки выбранного профиля * курс доллара
        **Импост:  (Высота / 1000) * стоимость импоста выбранного профиля * курс доллара
        **Наценка = 1,2
        */
        $stvorka = ($width / 2 + $height) * 2 / 1000 * $price_stvorka * $kurs;
        $impost  = ($height / 1000) * $price_impost * $kurs; 
        $furn    = $price_furn * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo) * $extra + $price_dop;
        break;
    case '4': //2 - створчатое окно -> окно с двумя отркрываниями
        /*
        **(Рама + створка + импост + фурнитура + стеклопакет) * Наценка
        **Створка: (Высота / 2 + ширина) * 2 / 1000 * стоимость створки выбранного профиля * курс доллара
        **Импост: Высота / 1000 * стоимость импоста выбранного профиля * курс доллара
        **Фурнитура: 2 единицы * стоимость выбранной фурнитуры 
        **Наценка: 1,2
        */
        $stvorka = ($width / 2 + $height) * 2 / 1000 * $price_stvorka * $kurs * 2;
        $impost  = ($height / 1000) * $price_impost * $kurs;
        $furn    = 2 * $price_furn * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo) * $extra + $price_dop;
        break;
    case '5': //3 - створчатое окно -> окно с одним отркрыванием
        /*
        **3-створчатое окно с 1 (одним) открыванием
        **(Рама + створка + импост + фурнитура + стеклопакет) * Наценка
        **Створка: (Ширина / 3 + высота) * 2 / 1000 * стоимость створки выбранного профиля * курс доллара
        **Импост: Высота / 1000 * 2 * стоимость импоста * курс доллара
        **Фурнитура: 1 единица * стоимость выбранной фурнитуры
        **Наценка: 1,25
        */
        $stvorka = ($width / 3 + $height) * 2 / 1000 * $price_stvorka * $kurs;
        $impost  = ($height / 1000) * 2 * $price_impost * $kurs;
        $furn    = 1 * $price_furn * $kurs;
        $extra   = 1.25;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo) * $extra + $price_dop;
        break;
    case '6': //3 - створчатое окно -> окно с двумя отркрываниями
        /*
        **(Рама + Створка + импост + фурнитура + стеклопакет) * наценка
        **Створка: (Ширина / 3 + Высота) * 2 / 1000 * стоимость створки выбранного профиля * курс доллара
        **Импост: Высота / 1000 * 2 * стоимость импоста выбранного профиля * курс доллара
        **Фурнитура: 2 едиинцы * стоимость выбранной фурнитуры
        **Наценка: 1,2
        */
        $stvorka = ($width / 3 + $height) * 2 / 1000 * $price_stvorka * $kurs * 2;
        $impost  = ($height / 1000) * 2 * $price_impost * $kurs;
        $furn    = 2 * $price_furn * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo) * $extra + $price_dop;
        break;
    case '7': //3 - створчатое окно -> окно с тремя отркрываниями
        /*
        **(Рама + створка + импост + фурнитура +стеклопакет) * наценка
        **Створка: (Ширина / 3 + Высота) * 2 / 1000 * стоимость створки выбранного профиля * курс доллара
        **Импост: Ширина  / 1000 * 2 * стоимость импоста выбранного профиля * курс доллара
        **Фурнитура: 3 единицы * стоимость выбранной фурнитуры * курс доллара
        **Наценка: 1,2
        */
        $stvorka = ($width / 3 + $height) * 2 / 1000 * $price_stvorka * $kurs * 3;
        $impost  = ($height / 1000) * 2 * $price_impost * $kurs;
        $furn    = 3 * $price_furn * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo) * $extra + $price_dop;
        break;
    case '8': //Балкон и лоджия -> Лоджия
        /*
        **(Рама + створка + импост + фурнитура +  стеклопакет) * наценка
        **Рама: (Ширина * 2 + Высота * 4) / 1000 * стоимость рамы выбранного профиля * курс доллара
        **Створка: (Ширина + Высота *4) / 1000 * стоимость створки выбранного профиля * курс доллара
        **Импост: Высота / 1000 * стоимость импоста выбранного профиля * курс доллара * 2
        **Фурнитура: 2 единицы * стоимость выбранной фурнитуры * курс доллара
        **Наценка: 1,2
        */
        $rama    = ($width * 2 + $height * 4) / 1000 * $price_rama * $kurs;
        $stvorka = ($width + $height * 4) / 1000 * $price_stvorka * $kurs;
        $impost  = ($height / 1000) * 2 * $price_impost * $kurs;
        $furn    = 2 * $price_furn * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo) * $extra + $price_dop;
        break;
    case '9': //Балкон и лоджия -> Г-образный балкон с глухой боковой створкой
        /*
        **(Рама + створка + импост + фурнитура +  стеклопакет) * наценка
        **Рама: (Ширина * 2 + Высота * 4) / 1000 * стоимость рамы выбранного профиля * курс доллара
        **Створка: (Ширина + Высота *4) / 1000 * стоимость створки выбранного профиля * курс доллара
        **Импост: Высота / 1000 * стоимость импоста выбранного профиля * курс доллара * 2
        **Фурнитура: 2 единицы * стоимость выбранной фурнитуры * курс доллара
        **Наценка: 1,2
        */
        $rama    = ($width * 2 + $height * 4) / 1000 * $price_rama * $kurs;
        $stvorka = ($width + $height * 4) / 1000 * $price_stvorka * $kurs * 2;
        $impost  = ($height / 1000) * 2 * $price_impost * $kurs;
        $furn    = 2 * $price_furn * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo) * $extra + $price_dop;
        break;
    case '10': //Балкон и лоджия -> Г-образный балкон с открывающейся боковой створкой
        /*
        **(Рама + створка + импост + фурнитура +  стеклопакет) * наценка
        **Рама: (Ширина * 2 + Высота * 4) / 1000 * стоимость рамы выбранного профиля * курс доллара
        **Створка: (Ширина + Высота *4) / 1000 * стоимость створки выбранного профиля * курс доллара
        **Импост: Высота / 1000 * стоимость импоста выбранного профиля * курс доллара * 2
        **Фурнитура: 2 единицы * стоимость выбранной фурнитуры * курс доллара
        **Наценка: 1,2
        */
        $rama    = ($width * 2 + $height * 4) / 1000 * $price_rama * $kurs;
        $stvorka = ($width + $height * 4) / 1000 * $price_stvorka * $kurs * 2;
        $impost  = ($height / 1000) * 2 * $price_impost * $kurs;
        $furn    = 2 * $price_furn * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo) * $extra + $price_dop;
        break;
    case '11': //Балкон и лоджия -> Балкон с двумя глухими боковыми створками
        /*
        **(Рама + створка + импост + фурнитура +  стеклопакет) * наценка
        **Рама: (Ширина * 2 + Высота * 4) / 1000 * стоимость рамы выбранного профиля * курс доллара
        **Створка: (Ширина + Высота *4) / 1000 * стоимость створки выбранного профиля * курс доллара
        **Импост: Высота / 1000 * стоимость импоста выбранного профиля * курс доллара * 2
        **Фурнитура: 2 единицы * стоимость выбранной фурнитуры * курс доллара
        **Наценка: 1,2
        */
        $rama    = ($width * 2 + $height * 4) / 1000 * $price_rama * $kurs;
        $stvorka = ($width + $height * 4) / 1000 * $price_stvorka * $kurs * 2;
        $impost  = ($height / 1000) * 2 * $price_impost * $kurs;
        $furn    = 2 * $price_furn * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo) * $extra + $price_dop;
        break;
    case '12': //Балкон и лоджия -> Балкон с одной открывающейся створкой
        /*
        **(Рама + створка + импост + фурнитура +  стеклопакет) * наценка
        **Рама: (Ширина * 2 + Высота * 4) / 1000 * стоимость рамы выбранного профиля * курс доллара
        **Створка: (Ширина + Высота *4) / 1000 * стоимость створки выбранного профиля * курс доллара
        **Импост: Высота / 1000 * стоимость импоста выбранного профиля * курс доллара * 2
        **Фурнитура: 2 единицы * стоимость выбранной фурнитуры * курс доллара
        **Наценка: 1,2
        */
        $rama    = ($width * 2 + $height * 4) / 1000 * $price_rama * $kurs;
        $stvorka = ($width + $height * 4) / 1000 * $price_stvorka * $kurs * 2;
        $impost  = ($height / 1000) * 2 * $price_impost * $kurs;
        $furn    = 2 * $price_furn * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo) * $extra + $price_dop;
        break;
    case '13': //Балкон и лоджия -> Балкон с двумя открывающимися
        /*
        **(Рама + створка + импост + фурнитура +  стеклопакет) * наценка
        **Рама: (Ширина * 2 + Высота * 4) / 1000 * стоимость рамы выбранного профиля * курс доллара
        **Створка: (Ширина + Высота *4) / 1000 * стоимость створки выбранного профиля * курс доллара
        **Импост: Высота / 1000 * стоимость импоста выбранного профиля * курс доллара * 2
        **Фурнитура: 2 единицы * стоимость выбранной фурнитуры * курс доллара
        **Наценка: 1,2
        */
        $rama    = ($width * 2 + $height * 4) / 1000 * $price_rama * $kurs;
        $stvorka = ($width + $height * 4) / 1000 * $price_stvorka * $kurs * 2;
        $impost  = ($height / 1000) * 2 * $price_impost * $kurs;
        $furn    = 2 * $price_furn * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo) * $extra + $price_dop;
        break;
    case '14': //Французский балкон -> Французское остекление лоджии
        /*
        **(Рама + створка + импост + фурнитура + стеклопакет) * наценка
        **Рама: ( Ширина * 2 + Высота * 4 ) / 1000 * стоимость рамы выбранного профиля * курс доллара
        **Створка: (Ширина + Высота * 4 * 0,6) / 1000 * стоимость створки выбранного профиля * курс доллара
        **Импост: (Ширина / 1000 + Высота / 1000) * стоимость импоста выбранного профиля * курс доллара
        **Фурнитура: 2 единицы * стоимость выбранной фурнитуры * курс доллара
        **Наценка: 1,2
        */
        $rama    = ($width * 2 + $height * 4) / 1000 * $price_rama * $kurs;
        $stvorka = ($width + $height * 4 * 0.6) / 1000 * $price_stvorka * $kurs;
        $impost  = ($height / 1000 + $width / 1000) * $price_impost * $kurs * 2;
        $furn    = 2 * $price_furn * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo) * $extra + $price_dop;
        break;
    case '15': //Французский балкон -> Г-образный французский балкон с глухой створкой
        /*
        **(Рама + Импост  + Стеклопакет + Угол) * Наценка
        **Рама:  (Ширина * 2 + Высота *2) / 1000 * стоимость рамы выбранного профиля * курс доллара
        **Импост: Ширина / 1000 * стоимость импоста выбранного профиля * курс доллара
        **Угол:  Высота / 1000 * стоимость угла выбранного профиля * курс доллара
        **Наценка: 1,2
        */
        $rama    = ($width * 2 + $height * 4) / 1000 * $price_rama * $kurs;
        $impost  = ($width / 1000) * $price_impost * $kurs;
        $ugol    = $height / $price_ugol * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $impost + $steklo + $ugol) * $extra + $price_dop;
        break;
    case '16': //Французский балкон -> Г-образный французский балкон с открывающейся створкой
        /*
        **(Рама + Створка + Импост + Фурнитура + Стеклопакет + Угол) * Наценка
        **Рама:  (Ширина * 2 + Высота * 2) / 1000 * стоимость рамы выбранного профиля * курс доллара
        **Створка: (Ширина + Высота * 4 * 0,6) / 1000 * стоимость створки выбранного профиля * курс доллара
        **Импост: Ширина / 1000 * стоимость импоста выбранного профиля * курс доллара
        **Фурнитура: 1 единица * стоимость выбранной фурнитуры * курс доллара
        **Угол:  Высота / 1000 * стоимость угла выбранного профиля * курс доллара
        **Наценка: 1,2
        */
        $rama    = ($width * 2 + $height * 2) / 1000 * $price_rama * $kurs;
        $stvorka = ($width * 2 + $height * 4 * 0.6) / 1000 * $price_stvorka * $kurs;
        $impost  = ($width / 1000) * $price_impost * $kurs;
        $furn    = 1 * $price_furn * $kurs;
        $ugol    = $height / $price_ugol * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo + $ugol) * $extra + $price_dop;
        break;
    case '17': //Французский балкон -> П-образный французский балкон с двумя глухими боковыми створкам
        /*
        **(Рама + Створка + Импост + Фурнитура + Стеклопакет + Угол) * Наценка
        **Рама:  (Ширина * 2 + Высота * 2) / 1000 * стоимость рамы выбранного профиля * курс доллара
        **Створка: (Ширина + Высота * 4 * 0,6) / 1000 * стоимость створки выбранного профиля * курс доллара
        **Импост: Ширина / 1000 * стоимость импоста выбранного профиля * курс доллара
        **Фурнитура: 1 единица * стоимость выбранной фурнитуры * курс доллара
        **Угол:  Высота / 1000 * стоимость угла выбранного профиля * курс доллара
        **Наценка: 1,2
        */
        $rama    = ($width * 2 + $height * 2) / 1000 * $price_rama * $kurs;
        $stvorka = ($width * 2 + $height * 4 * 0.6) / 1000 * $price_stvorka * $kurs * 2;
        $impost  = ($width / 1000) * $price_impost * $kurs;
        $furn    = 1 * $price_furn * $kurs;
        $ugol    = $height / $price_ugol * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo + $ugol) * $extra + $price_dop;
        break;
    case '18': //Французский балкон -> П-образный французский балкон с одной  открывающейся створкой
        /*
        **(Рама + Створка + Импост + Фурнитура + Стеклопакет + Угол) * Наценка
        **Рама:  (Ширина * 2 + Высота * 2) / 1000 * стоимость рамы выбранного профиля * курс доллара
        **Створка: (Ширина + Высота * 4 * 0,6) / 1000 * стоимость створки выбранного профиля * курс доллара * 2
        **Импост: Ширина / 1000 * стоимость импоста выбранного профиля * курс доллара
        **Фурнитура: 1 единица * стоимость выбранной фурнитуры * курс доллара
        **Угол:  Высота / 1000 * стоимость угла выбранного профиля * курс доллара
        **Наценка: 1,2
        */
        $rama    = ($width * 2 + $height * 2) / 1000 * $price_rama * $kurs;
        $stvorka = ($width * 2 + $height * 4 * 0.6) / 1000 * $price_stvorka * $kurs * 2;
        $impost  = ($width / 1000) * $price_impost * $kurs;
        $furn    = 1 * $price_furn * $kurs;
        $ugol    = $height / $price_ugol * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo + $ugol) * $extra + $price_dop;
        break;
    case '19': //Французский балкон -> П-образный французский балкон с двумя открывающимися створками
        /*
        **(Рама + Створка + Импост + Фурнитура + Стеклопакет + Угол) * Наценка
        **Рама:  (Ширина * 2 + Высота * 2) / 1000 * стоимость рамы выбранного профиля * курс доллара
        **Створка: (Ширина + Высота * 4 * 0,6) / 1000 * стоимость створки выбранного профиля * курс доллара * 2
        **Импост: Ширина / 1000 * стоимость импоста выбранного профиля * курс доллара
        **Фурнитура: 1 единица * стоимость выбранной фурнитуры * курс доллара
        **Угол:  Высота / 1000 * стоимость угла выбранного профиля * курс доллара
        **Наценка: 1,2
        */
        $rama    = ($width * 2 + $height * 2) / 1000 * $price_rama * $kurs;
        $stvorka = ($width * 2 + $height * 4 * 0.6) / 1000 * $price_stvorka * $kurs * 2;
        $impost  = ($width / 1000) * $price_impost * $kurs;
        $furn    = 1 * $price_furn * $kurs;
        $ugol    = $height / $price_ugol * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo + $ugol) * $extra + $price_dop;
        break;
    case '20': //Выход на балкон -> Балконный блок с глухим окном
        /*
        **(Рама + створка + импост + фурнитура + стеклопакет) * наценка
        **Рама: (Ширина * 2 + Высота * 2) / 1000 * стоимость рамы выбранного стеклопакета * курс доллара
        **Створка: (Ширина * 2 + Высота * 2) / 1000 * стоимость створки выбранного стеклопакета * курс доллара * 2
        **Импост: Ширина / 1000 * стоимость импоста выбранного стеклопакета * курс доллара
        **Фурнитура: 1 единица * стоимость выбранной фурнитуры * курс доллара
        **Наценка: 1,2
        */
        $rama    = ($width * 2 + $height * 2) / 1000 * $price_rama * $kurs;
        $stvorka = ($width * 2 + $height * 2) / 1000 * $price_stvorka * $kurs * 2;
        $impost  = ($width / 1000) * $price_impost * $kurs;
        $furn    = 1 * $price_furn * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo) * $extra + $price_dop;
        break;
    case '21': //Выход на балкон -> Балконный блок с 2 окнами
        /*
        **(Рама + створка + импост + фурнитура + стеклопакет) * наценка
        **Рама: (Ширина * 2 + Высота * 2) / 1000 * стоимость рамы выбранного стеклопакета * курс доллара
        **Створка: (Ширина * 2 + Высота * 2) / 1000 * стоимость створки выбранного стеклопакета * курс доллара * 3
        **Импост: Ширина / 1000 * стоимость импоста выбранного стеклопакета * курс доллара
        **Фурнитура: 1 единица * стоимость выбранной фурнитуры * курс доллара
        **Наценка: 1,2
        */
        $rama    = ($width * 2 + $height * 2) / 1000 * $price_rama * $kurs;
        $stvorka = ($width * 2 + $height * 2) / 1000 * $price_stvorka * $kurs * 3;
        $impost  = ($width / 1000) * $price_impost * $kurs;
        $furn    = 1 * $price_furn * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo) * $extra + $price_dop;
        break;
    case '22': //Выход на балкон -> Балконная дверь
        /*
        **(Рама + створка + импост + фурнитура + стеклопакет) * наценка
        **Рама: (Ширина * 2 + Высота * 2) / 1000 * стоимость рамы выбранного стеклопакета * курс доллара
        **Створка: (Ширина * 2 + Высота * 2) / 1000 * стоимость створки выбранного стеклопакета * курс доллара
        **Импост: Ширина / 1000 * стоимость импоста выбранного стеклопакета * курс доллара
        **Фурнитура: 1 единица * стоимость выбранной фурнитуры * курс доллара
        **Наценка: 1,2
        */
        $rama    = ($width * 2 + $height * 2) / 1000 * $price_rama * $kurs;
        $stvorka = ($width * 2 + $height * 2) / 1000 * $price_stvorka * $kurs;
        $impost  = ($width / 1000) * $price_impost * $kurs;
        $furn    = 1 * $price_furn * $kurs;
        $extra   = 1.2;
        $price   = ($rama + $stvorka + $impost + $furn + $steklo) * $extra + $price_dop;
        break;
    case 'moskitka': //Калькулятор Стоимости Классической Рамочной Москитной Сетки
        /*

        */
        if ($_GET['typesetka'] == '1') $price_moskit  = 240;//8.5 * $kurs;
        else $price_moskit  = 160;//5.7 * $kurs;
        $price   = $price_moskit * $m2;
        break;
    default: // цена по умолчанию
        $price = 0;
}

$price = number_format($price, 0, '.', ' ');
$result['price'] = $price . ' <span class="currency">грн</span>';
$result['width'] = $width_err;
$result['height'] = $height_err;
//echo $price . ' <span class="currency">грн</span>';
echo json_encode($result);

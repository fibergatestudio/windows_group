<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package windowsgroup
 */

get_header();
?>

<div class="main page-windows">
    <div class="container">
        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
    </div>   
            
    <section class="section-calculator">
        <div class="container">
            <div class="top-post-page">
                <h1 class="title-post  mb-lg-3">Пластиковые окна в Белой Церкви: цена с установкой</h1>
                <p class="text-custom-page">Наша компания предлагает быструю и установку качественных <span class="strong-text">пластиковых окон
                        в Белой Церкви</span>. Мы более 20 лет профессионально занимаемся монтажом и изготовлением ПВХ-конструкций.
                    При производстве пластиковых окон строго соблюдаются европейские стандарты качества, благодаря чему наши изделия
                    характеризуются прочностью и долговечностью. Замена оконных модулей и установка панорамного остекления –
                    отличный способ преобразить интерьер и сделать пребывание в помещении более комфортным.</p>
                <p class="text-custom-page">
                    Спрос на металлопластиковые изделия ежегодно увеличивается, и уже сегодня вы можете поменять окна в частном доме, офисе или коммерческом здании, сделав один звонок или заполнив заявку, не отрываясь от компьютера/телефона. Установка ПВХ-конструкций – ответственная задача, поскольку от качества профильной системы и конфигурации зависят энергосберегающие качества. Если вы до сих пор не определились, <a target="_blank" href="<?=get_bloginfo('home')?>/balkony-pod-klyuch/">где заказать балкон под ключ</a>, компания «Windows Group» предлагает лояльные цены на пластиковые окна и бесплатную консультацию для всех жителей Украины. 
                </p>
            </div>                       

            <h2 class="title-section">Калькулятор Окон в Белой Церкви</h2>
            <ul class="form-category">
                <li class="form-category-item d-none" data-category="category-window-label"><input type="radio" id="category-window" name="category" checked="checked" class="category" data-default-type="1"> <label id="category-window-label" for="category-window" class="btn btn-category category-window-label" data-toggle="collapse" data-target=".category-window" aria-controls="category-window"><i class="icon icon-category-window"></i> <span>Окна</span> <i class="fa fa-chevron-down"></i></label></li>
                <li class="form-category-item d-none" data-category="category-balcony-label"><input type="radio" id="category-balcony" name="category" class="category" data-default-type="4"> <label id="category-balcony-label" for="category-balcony" class="btn btn-category category-balcony-label collapsed" data-toggle="collapse" data-target=".category-balcony" aria-controls="category-balcony"><i class="icon icon-category-balcony"></i> <span>Балкон и лоджия</span> <i class="fa fa-chevron-down"></i></label></li>
                <li class="form-category-item d-none" data-category="category-french-balcony-label"><input type="radio" id="category-french-balcony" name="category" class="category" data-default-type="7"> <label id="category-french-balcony-label" for="category-french-balcony" class="btn btn-category category-french-balcony-label collapsed" data-toggle="collapse" data-target=".category-french-balcony" aria-controls="category-french-balcony"><i class="icon icon-category-french-balcony"></i> <span>Французский балкон</span> <i class="fa fa-chevron-down"></i></label></li>
                <li class="form-category-item d-none" data-category="category-exit-label"><input type="radio" id="category-exit-balcony" name="category" class="category" data-default-type="10"> <label id="category-exit-balcony-label" for="category-exit-balcony" class="btn btn-category category-exit-balcony-label collapsed" data-toggle="collapse" data-target=".category-exit-balcony" aria-controls="category-exit-balcony"><i class="icon icon-category-exit-balcony"></i> <span>Выход на балкон</span> <i class="fa fa-chevron-down"></i></label></li>
            </ul>
            <div class="row">
                <div class="col-12 col-lg">
                    <div id="preview" class="furniture-type-1"></div>
                </div>
                <div class="col-12 col-lg" id="product-accordion">
                    <h5 class="text-center text-lg-left">Тип окна:</h5>
                    <ul class="tab-type-row">
                        <li class="form-product-type-item collapse category-window show" aria-labelledby="category-window-label" data-parent="#product-accordion"><input type="radio" id="product-type-1" name="product-type" class="product-type" value="1" checked="checked"> <label id="product-type-label-1" for="product-type-1" class="product-type-label img-scheme img-scheme-1" data-toggle="collapse" data-target="#furniture-category-window-1" aria-controls="furniture-category-window-1"><span class="tab-type">1 - створчатое окно</span></label></li>
                        <li class="form-product-type-item collapse category-window show" aria-labelledby="category-window-label" data-parent="#product-accordion"><input type="radio" id="product-type-2" name="product-type" class="product-type" value="2"> <label id="product-type-label-2" for="product-type-2" class="product-type-label collapsed img-scheme img-scheme-2" data-toggle="collapse" data-target="#furniture-category-window-2" aria-controls="furniture-category-window-2"><span class="tab-type">2 - створчатое окно</span></label></li>
                        <li class="form-product-type-item collapse category-window show" aria-labelledby="category-window-label" data-parent="#product-accordion"><input type="radio" id="product-type-3" name="product-type" class="product-type" value="3"> <label id="product-type-label-3" for="product-type-3" class="product-type-label collapsed img-scheme-3 img-scheme" data-toggle="collapse" data-target="#furniture-category-window-3" aria-controls="furniture-category-window-3"><span class="tab-type">3 - створчатое окно</span></label></li>
                        <li class="form-product-type-item collapse category-balcony" aria-labelledby="category-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-4" name="product-type" class="product-type" value="4"> <label id="product-type-label-4" for="product-type-4" class="product-type-label img-scheme loggia" data-toggle="collapse" data-target="#furniture-category-balcony-1" aria-controls="furniture-category-balcony-1"><span class="tab-type">лоджия</span></label></li>
                        <li class="form-product-type-item collapse category-balcony" aria-labelledby="category-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-5" name="product-type" class="product-type" value="5"> <label id="product-type-label-5" for="product-type-5" class="product-type-label collapsed img-scheme loggia-2" data-toggle="collapse" data-target="#furniture-category-balcony-2" aria-controls="furniture-category-balcony-2"><span class="tab-type">Г-образный</span></label></li>
                        <li class="form-product-type-item collapse category-balcony" aria-labelledby="category-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-6" name="product-type" class="product-type" value="6"> <label id="product-type-label-6" for="product-type-6" class="product-type-label collapsed img-scheme loggia-3" data-toggle="collapse" data-target="#furniture-category-balcony-3" aria-controls="furniture-category-balcony-3"><span class="tab-type">П-образный</span></label></li>
                        <li class="form-product-type-item collapse category-french-balcony" aria-labelledby="category-french-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-7" name="product-type" class="product-type" value="7"> <label id="product-type-label-7" for="product-type-7" class="product-type-label img-scheme loggiaFranc-1" data-toggle="collapse" data-target="#furniture-category-french-balcony-1" aria-controls="furniture-category-french-balcony-1"><span class="tab-type">Французское остекление лоджии</span></label></li>
                        <li class="form-product-type-item collapse category-french-balcony" aria-labelledby="category-french-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-8" name="product-type" class="product-type" value="8"> <label id="product-type-label-8" for="product-type-8" class="product-type-label collapsed img-scheme loggiaFranc-2" data-toggle="collapse" data-target="#furniture-category-french-balcony-2" aria-controls="furniture-category-french-balcony-2"><span class="tab-type">Г-образный французский балкон</span></label></li>
                        <li class="form-product-type-item collapse category-french-balcony" aria-labelledby="category-french-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-9" name="product-type" class="product-type" value="9"> <label id="product-type-label-9" for="product-type-9" class="product-type-label collapsed img-scheme loggiaFranc-3" data-toggle="collapse" data-target="#furniture-category-french-balcony-3" aria-controls="furniture-category-french-balcony-3"><span class="tab-type">П-образный французский балкон</span></label></li>
                        <li class="form-product-type-item collapse category-exit-balcony" aria-labelledby="category-exit-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-10" name="product-type" class="product-type" value="10"> <label id="product-type-label-10" for="product-type-10" class="product-type-label img-scheme door-1" data-toggle="collapse" data-target="#furniture-category-exit-balcony-1" aria-controls="furniture-category-exit-balcony-1"><span class="tab-type">Балконный блок с 1 окном</span></label></li>
                        <li class="form-product-type-item collapse category-exit-balcony" aria-labelledby="category-exit-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-11" name="product-type" class="product-type" value="11"> <label id="product-type-label-11" for="product-type-11" class="product-type-label collapsed img-scheme door-2" data-toggle="collapse" data-target="#furniture-category-exit-balcony-2" aria-controls="furniture-category-exit-balcony-2"><span class="tab-type">Балконный блок с 2 окном</span></label></li>
                        <li class="form-product-type-item collapse category-exit-balcony" aria-labelledby="category-exit-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-12" name="product-type" class="product-type" value="12"> <label id="product-type-label-12" for="product-type-12" class="product-type-label collapsed img-scheme door-3" data-toggle="collapse" data-target="#furniture-category-exit-balcony-3" aria-controls="furniture-category-exit-balcony-3"><span class="tab-type">Балконная дверь</span></label></li>
                    </ul>
                    <h5 class="my-4 text-center text-lg-left">Тип открытия*:</h5>
                    <input type="hidden" name="furniture_type" id="furniture_type" value="1">
                    <ul class="form-furniture-type" id="furniture-type-accordion">
                        <li class="form-furniture-type-item collapse show category-window" aria-labelledby="category-window-label" data-parent="#product-accordion">
                            <div id="furniture-category-window-1" class="collapse show" aria-labelledby="product-type-label-1" data-parent="#furniture-type-accordion">
                                <ul class="flex-wrapper">
                                    <li><input type="radio" id="furniture-type-1" name="furniture-type" class="furniture-type" value="1" checked="checked"> <label for="furniture-type-1" class="furniture-type-label img-scheme scheme-1-type-1" onclick="document.getElementById('furniture_type').value = '1'; change_furniture_type();"><span class="tab-type">глухое окно</span></label></li>
                                    <li><input type="radio" id="furniture-type-2" name="furniture-type" class="furniture-type" value="2"> <label for="furniture-type-2" class="furniture-type-label img-scheme scheme-1-type-2" onclick="document.getElementById('furniture_type').value = '2'; change_furniture_type();"><span class="tab-type">окно с открыванием</span></label></li>
                                </ul>
                            </div>
                            <div id="furniture-category-window-2" class="collapse" aria-labelledby="product-type-label-2" data-parent="#furniture-type-accordion">
                                <ul class="flex-wrapper">
                                    <li><input type="radio" id="furniture-type-3" name="furniture-type" class="furniture-type" value="3"> <label for="furniture-type-3" class="furniture-type-label img-scheme scheme-2-type-1" onclick="document.getElementById('furniture_type').value = '3'; change_furniture_type();"><span class="tab-type">окно с одним открыванием</span></label></li>
                                    <li><input type="radio" id="furniture-type-4" name="furniture-type" class="furniture-type" value="4"> <label for="furniture-type-4" class="furniture-type-label img-scheme scheme-2-type-2" onclick="document.getElementById('furniture_type').value = '4'; change_furniture_type();"><span class="tab-type">окно с двумя открываниями</span></label></li>
                                </ul>
                            </div>
                            <div id="furniture-category-window-3" class="collapse" aria-labelledby="product-type-label-3" data-parent="#furniture-type-accordion">
                                <ul class="flex-wrapper">
                                    <li><input type="radio" id="furniture-type-5" name="furniture-type" class="furniture-type" value="5"> <label for="furniture-type-5" class="furniture-type-label img-scheme scheme-3-type-1" onclick="document.getElementById('furniture_type').value = '5'; change_furniture_type();"><span class="tab-type">окно с одним открыванием</span></label></li>
                                    <li><input type="radio" id="furniture-type-6" name="furniture-type" class="furniture-type" value="6"> <label for="furniture-type-6" class="furniture-type-label img-scheme scheme-3-type-2" onclick="document.getElementById('furniture_type').value = '6'; change_furniture_type();"><span class="tab-type">окно с двумя открываниями</span></label></li>
                                    <li><input type="radio" id="furniture-type-7" name="furniture-type" class="furniture-type" value="7"> <label for="furniture-type-7" class="furniture-type-label img-scheme scheme-3-type-3" onclick="document.getElementById('furniture_type').value = '7'; change_furniture_type();"><span class="tab-type">окно с тремя открываниями</span></label></li>
                                </ul>
                            </div>
                        </li>
                        <li class="form-furniture-type-item collapse category-balcony" aria-labelledby="category-balcony-label" data-parent="#product-accordion">
                            <div id="furniture-category-balcony-1" class="collapse show" aria-labelledby="product-type-label-4" data-parent="#furniture-type-accordion">
                                <ul class="flex-wrapper">
                                    <li><input type="radio" id="furniture-type-8" name="furniture-type" class="furniture-type" value="8"> <label for="furniture-type-8" class="furniture-type-label img-scheme loggia-1-type-1" onclick="document.getElementById('furniture_type').value = '8'; change_furniture_type();"><span class="tab-type">лоджия</span></label></li>
                                </ul>
                            </div>
                            <div id="furniture-category-balcony-2" class="collapse" aria-labelledby="product-type-label-5" data-parent="#furniture-type-accordion">
                                <ul class="flex-wrapper">
                                    <li><input type="radio" id="furniture-type-9" name="furniture-type" class="furniture-type" value="9"> <label for="furniture-type-9" class="furniture-type-label img-scheme loggia-2-type-1" onclick="document.getElementById('furniture_type').value = '9'; change_furniture_type();"><span class="tab-type">балкон с глухой боковой створкой</span></label></li>
                                    <li><input type="radio" id="furniture-type-10" name="furniture-type" class="furniture-type" value="10"> <label for="furniture-type-10" class="furniture-type-label img-scheme loggia-2-type-2" onclick="document.getElementById('furniture_type').value = '10'; change_furniture_type();"><span class="tab-type">балкон с открывающейся боковой створкой</span></label></li>
                                </ul>
                            </div>
                            <div id="furniture-category-balcony-3" class="collapse" aria-labelledby="product-type-label-6" data-parent="#furniture-type-accordion">
                                <ul class="flex-wrapper">
                                    <li><input type="radio" id="furniture-type-11" name="furniture-type" class="furniture-type" value="11"> <label for="furniture-type-11" class="furniture-type-label img-scheme loggia-3-type-1" onclick="document.getElementById('furniture_type').value = '11'; change_furniture_type();"><span class="tab-type">Балкон с двумя глухими боковыми створками</span></label></li>
                                    <li><input type="radio" id="furniture-type-12" name="furniture-type" class="furniture-type" value="12"> <label for="furniture-type-12" class="furniture-type-label img-scheme loggia-3-type-2" onclick="document.getElementById('furniture_type').value = '12'; change_furniture_type();"><span class="tab-type">Балкон с одной открывающейся боковой створкой</span></label></li>
                                    <li><input type="radio" id="furniture-type-13" name="furniture-type" class="furniture-type" value="13"> <label for="furniture-type-13" class="furniture-type-label img-scheme loggia-3-type-3" onclick="document.getElementById('furniture_type').value = '13'; change_furniture_type();"><span class="tab-type">Балкон с двумя открывающимися боковыми створками</span></label></li>
                                </ul>
                            </div>
                        </li>
                        <li class="form-furniture-type-item collapse category-french-balcony" aria-labelledby="category-french-balcony-label" data-parent="#product-accordion">
                            <div id="furniture-category-french-balcony-1" class="collapse show" aria-labelledby="product-type-label-7" data-parent="#furniture-type-accordion">
                                <ul class="flex-wrapper">
                                    <li><input type="radio" id="furniture-type-14" name="furniture-type" class="furniture-type" value="14"> <label for="furniture-type-14" class="furniture-type-label img-scheme loggiaFranc-1-type-1" onclick="document.getElementById('furniture_type').value = '14'; change_furniture_type();"><span class="tab-type">Французское остекление лоджии</span></label></li>
                                </ul>
                            </div>
                            <div id="furniture-category-french-balcony-2" class="collapse" aria-labelledby="product-type-label-8" data-parent="#furniture-type-accordion">
                                <ul class="flex-wrapper">
                                    <li><input type="radio" id="furniture-type-15" name="furniture-type" class="furniture-type" value="15"> <label for="furniture-type-15" class="furniture-type-label img-scheme loggiaFranc-2-type-1" onclick="document.getElementById('furniture_type').value = '15'; change_furniture_type();"><span class="tab-type">Балкон с глухой боковой створкой</span></label></li>
                                    <li><input type="radio" id="furniture-type-16" name="furniture-type" class="furniture-type" value="16"> <label for="furniture-type-16" class="furniture-type-label img-scheme loggiaFranc-2-type-2" onclick="document.getElementById('furniture_type').value = '16'; change_furniture_type();"><span class="tab-type">Балкон с открывающейся боковой створкой</span></label></li>
                                </ul>
                            </div>
                            <div id="furniture-category-french-balcony-3" class="collapse" aria-labelledby="product-type-label-9" data-parent="#furniture-type-accordion">
                                <ul class="flex-wrapper">
                                    <li><input type="radio" id="furniture-type-17" name="furniture-type" class="furniture-type" value="17"> <label for="furniture-type-17" class="furniture-type-label img-scheme loggiaFranc-3-type-1" onclick="document.getElementById('furniture_type').value = '17'; change_furniture_type();"><span class="tab-type">Балкон с двумя глухими боковыми створками</span></label></li>
                                    <li><input type="radio" id="furniture-type-18" name="furniture-type" class="furniture-type" value="18"> <label for="furniture-type-18" class="furniture-type-label img-scheme loggiaFranc-3-type-2" onclick="document.getElementById('furniture_type').value = '18'; change_furniture_type();"><span class="tab-type">Балкон с одной открывающейся боковой створкой</span></label></li>
                                    <li><input type="radio" id="furniture-type-19" name="furniture-type" class="furniture-type" value="19"> <label for="furniture-type-19" class="furniture-type-label img-scheme loggiaFranc-3-type-3" onclick="document.getElementById('furniture_type').value = '19'; change_furniture_type();"><span class="tab-type">Балкон с двумя открывающимися боковыми створками</span></label></li>
                                </ul>
                            </div>
                        </li>
                        <li class="form-furniture-type-item collapse category-exit-balcony" aria-labelledby="category-exit-balcony" data-parent="#product-accordion">
                            <div id="furniture-category-exit-balcony-1" class="collapse show" aria-labelledby="product-type-label-10" data-parent="#furniture-type-accordion">
                                <ul class="flex-wrapper">
                                    <li><input type="radio" id="furniture-type-20" name="furniture-type" class="furniture-type" value="20"> <label for="furniture-type-20" class="furniture-type-label img-scheme door-1-type-1" onclick="document.getElementById('furniture_type').value = '20'; change_furniture_type();"><span class="tab-type">Балконный блок с глухим окном</span></label></li>
                                </ul>
                            </div>
                            <div id="furniture-category-exit-balcony-2" class="collapse" aria-labelledby="product-type-label-11" data-parent="#furniture-type-accordion">
                                <ul class="flex-wrapper">
                                    <li><input type="radio" id="furniture-type-21" name="furniture-type" class="furniture-type" value="21"> <label for="furniture-type-21" class="furniture-type-label img-scheme door-2-type-1" onclick="document.getElementById('furniture_type').value = '21'; change_furniture_type();"><span class="tab-type">Балконный блок с двумя окнами</span></label></li>
                                </ul>
                            </div>
                            <div id="furniture-category-exit-balcony-3" class="collapse" aria-labelledby="product-type-label-12" data-parent="#furniture-type-accordion">
                                <ul class="flex-wrapper">
                                    <li><input type="radio" id="furniture-type-22" name="furniture-type" class="furniture-type" value="22"> <label for="furniture-type-22" class="furniture-type-label img-scheme door-3-type-1" onclick="document.getElementById('furniture_type').value = '22'; change_furniture_type();"><span class="tab-type">Балконная дверь</span></label></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="row ml-lg-3">
                        <div class="col-12 col-lg-6">
                            <div class="form-group"><label class="input-label" for="width">Ширина мм*:</label> <input class="form-control" id="width" aria-describedby="width" placeholder="1000" type="number"  min="1" max="999999" step="1" oninput="validity.valid||(value='');"></div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group"><label class="input-label" for="height">Высота мм*:</label> <input class="form-control" id="height" aria-describedby="height" placeholder="1000" type="number"  min="1" max="999999" step="1" oninput="validity.valid||(value='');"></div>
                        </div>
                        <div style="color: red; display: none; padding: 10px 0px 10px 15px;" id="razmer_err1">Ошибка размеров</div>
                    </div>
                </div>
            </div>
            <div class="row block-type-profile" style="padding-top: 25px;">
                <div class="col-12">
                    <h6 class="title-section-profile border-mob collapsed collapse-toggler" data-toggle="collapse" data-target=".profile-drop" aria-expanded="false"><span class="cursor-custom">Профиль</span></h6>
                </div>
            </div>
            <div class="row profile-drop collapse">
                <div class="col-12 d-lg-none">
                    <input type="hidden" name="brand" id="brand" value="1">
                    <div class="select-wrapper">
                        <label class="d-lg-none input-label">Бренд:</label>
                        <ul class="brands mobile-select" id="brands">
                            <li class="form-check d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-1" value="1" checked="checked" onchange="document.getElementById('brand').value = '1';"/> <label class="form-check-label" for="brand-1">Aluplast</label></li>
                            <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-2" value="2" checked="checked" onchange="document.getElementById('brand').value = '2';"/> <label class="form-check-label" for="brand-2">Salamander</label></li>
                            <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-3" value="3" checked="checked" onchange="document.getElementById('brand').value = '3';"/> <label class="form-check-label" for="brand-3">Rehau</label></li>
                            <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-4" value="4" checked="checked" onchange="document.getElementById('brand').value = '4';"/> <label class="form-check-label" for="brand-4">WDS</label></li>
                            <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-5" value="5" checked="checked" onchange="document.getElementById('brand').value = '5';"/> <label class="form-check-label" for="brand-5">Veka</label></li>
                            <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-6" value="6" checked="checked" onchange="document.getElementById('brand').value = '6';"/> <label class="form-check-label" for="brand-6">KBE</label></li>
                            <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-7" value="7" checked="checked" onchange="document.getElementById('brand').value = '7';"/> <label class="form-check-label" for="brand-7">Viknaland</label></li>
                            <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-8" value="8" checked="checked" onchange="document.getElementById('brand').value = '8';"/> <label class="form-check-label" for="brand-8">Windoffs</label></li>
                            <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-9" value="9" checked="checked" onchange="document.getElementById('brand').value = '9';"/> <label class="form-check-label" for="brand-9">Openteck</label></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <input type="hidden" name="model" id="model" value="1_1">
                    <div class="select-wrapper">
                        <label class="d-lg-none input-label">Модель:</label>
                        <ul class="profile-brand mobile-select" id="models">
                            <li>
                                <ul>
                                    <li class="d-none d-lg-block aluplast">
                                        <span class="title-section-profile">Aluplast</span>
                                    </li>
                                    <li class="form-check d-lg-block aluplast"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-1" value="1" data-brand="1" checked="checked" onchange="document.getElementById('model').value = '1_1';"> <label class="form-check-label" for="brand-model-1">Aluplast Ideal 2000</label></li>
                                    <li class="form-check d-none d-lg-block aluplast"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-2" value="2" data-brand="1" onchange="document.getElementById('model').value = '1_2';"> <label class="form-check-label" for="brand-model-2">Aluplast Ideal 4000</label></li>
                                    <li class="form-check d-none d-lg-block aluplast"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-3" value="3" data-brand="1" onchange="document.getElementById('model').value = '1_3';"> <label class="form-check-label" for="brand-model-3">Aluplast Ideal 8000</label></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="d-none d-lg-block salamander">
                                        <span class="title-section-profile">Salamander</span>
                                    </li>
                                    <li class="form-check d-none d-lg-block salamander"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-6" value="6" data-brand="2" onchange="document.getElementById('model').value = '2_1';"> <label class="form-check-label" for="brand-model-6">Salamander 2D</label></li>
                                    <li class="form-check d-none d-lg-block salamander"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-7" value="7" data-brand="2" onchange="document.getElementById('model').value = '2_2';"> <label class="form-check-label" for="brand-model-7">Salamander Streamline</label></li>
                                    <li class="form-check d-none d-lg-block salamander"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-8" value="8" data-brand="2" onchange="document.getElementById('model').value = '2_3';"> <label class="form-check-label" for="brand-model-8">Salamander BluEvolution</label></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="d-none d-lg-block rehau">
                                        <span class="title-section-profile">Rehau</span>
                                    </li>
                                    <li class="form-check d-none d-lg-block rehau"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-9" value="9" data-brand="3" onchange="document.getElementById('model').value = '3_1';"> <label class="form-check-label" for="brand-model-9">Rehau Euro-Design 60</label></li>
                                    <li class="form-check d-none d-lg-block rehau"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-10" value="10" data-brand="3" onchange="document.getElementById('model').value = '3_2';"> <label class="form-check-label" for="brand-model-10">Rehau Euro-Design 70</label></li>
                                    <li class="form-check d-none d-lg-block rehau"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-11" value="11" data-brand="3" onchange="document.getElementById('model').value = '3_3';"> <label class="form-check-label" for="brand-model-11">Rehau Synego</label></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="d-none d-lg-block wds">
                                        <span class="title-section-profile">WDS</span>
                                    </li>
                                    <li class="form-check d-none d-lg-block wds"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-14" value="14" data-brand="4" onchange="document.getElementById('model').value = '4_1';"> <label class="form-check-label" for="brand-model-14">WDS 5S</label></li>
                                    <li class="form-check d-none d-lg-block wds"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-15" value="15" data-brand="4" onchange="document.getElementById('model').value = '4_2';"> <label class="form-check-label" for="brand-model-15">WDS 6S</label></li>
                                    <li class="form-check d-none d-lg-block wds"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-16" value="16" data-brand="4" onchange="document.getElementById('model').value = '4_3';"> <label class="form-check-label" for="brand-model-16">WDS 7S</label></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="d-none d-lg-block veka">
                                        <span class="title-section-profile">Veka</span>
                                    </li>
                                    <li class="form-check d-none d-lg-block veka"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-17" value="17" data-brand="5" onchange="document.getElementById('model').value = '5_1';"> <label class="form-check-label" for="brand-model-17">Veka Euroline</label></li>
                                    <li class="form-check d-none d-lg-block veka"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-19" value="19" data-brand="5" onchange="document.getElementById('model').value = '5_2';"> <label class="form-check-label" for="brand-model-19">Veka Softline 70</label></li>
                                    <li class="form-check d-none d-lg-block veka"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-20" value="20" data-brand="5" onchange="document.getElementById('model').value = '5_3';"> <label class="form-check-label" for="brand-model-20">Veka Softline 82</label></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="d-none d-lg-block kbe">
                                        <span class="title-section-profile">KBE</span>
                                    </li>
                                    <li class="form-check d-none d-lg-block kbe"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-21" value="21" data-brand="6" onchange="document.getElementById('model').value = '6_1';"> <label class="form-check-label" for="brand-model-21">KBE Ballans3</label></li>
                                    <li class="form-check d-none d-lg-block kbe"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-22" value="22" data-brand="6" onchange="document.getElementById('model').value = '6_2';"> <label class="form-check-label" for="brand-model-22">KBE Optima 5</label></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="d-none d-lg-block viknaland">
                                        <span class="title-section-profile">Viknaland</span>
                                    </li>
                                    <li class="form-check d-none d-lg-block viknaland"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-24" value="24" data-brand="7" onchange="document.getElementById('model').value = '7_1';"> <label class="form-check-label" for="brand-model-24">Viknaland 58</label></li>
                                    <li class="form-check d-none d-lg-block viknaland"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-25" value="25" data-brand="7" onchange="document.getElementById('model').value = '7_2';"> <label class="form-check-label" for="brand-model-25">Viknaland 70</label></li>
                                    <li class="form-check d-none d-lg-block viknaland"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-26" value="26" data-brand="7" onchange="document.getElementById('model').value = '7_3';"> <label class="form-check-label" for="brand-model-26">Viknaland 85</label></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="d-none d-lg-block windoffs">
                                        <span class="title-section-profile">Windoffs</span>
                                    </li>
                                    <li class="form-check d-none d-lg-block windoffs"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-28" value="28" data-brand="8" onchange="document.getElementById('model').value = '8_1';"> <label class="form-check-label" for="brand-model-28">Windoffs 3</label></li>
                                    <li class="form-check d-none d-lg-block windoffs"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-29" value="29" data-brand="8" onchange="document.getElementById('model').value = '8_2';"> <label class="form-check-label" for="brand-model-29">Windoffs 6</label></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="d-none d-lg-block openteck">
                                        <span class="title-section-profile">Openteck</span>
                                    </li>
                                    <li class="form-check d-none d-lg-block openteck"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-30" value="30" data-brand="9" onchange="document.getElementById('model').value = '9_1';"> <label class="form-check-label" for="brand-model-30">OpenTeck Delux 60</label></li>
                                    <li class="form-check d-none d-lg-block openteck"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-31" value="31" data-brand="9" onchange="document.getElementById('model').value = '9_2';"> <label class="form-check-label" for="brand-model-31">OpenTeck Elite 70</label></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row profile-drop collapse">
                <div class="col-12 col-lg-8">
                    <input type="hidden" name="steklo" id="steklo" value="1">
                    <div class="select-wrapper">
                        <label class="input-label">Стеклопакет:</label>
                        <ul class="mobile-select" id="chambers">
                            <li class="form-check d-lg-block"><input type="radio" class="form-check-input" id="chamber-1" name="chamber" value="1" checked="checked" onchange="document.getElementById('steklo').value = '1';"> <label class="form-check-label" for="chamber-1">1 камерный</label></li>
                            <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="chamber-3" name="chamber" value="3" onchange="document.getElementById('steklo').value = '2';"> <label class="form-check-label" for="chamber-3">2 камерный</label></li>
                            <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="chamber-2" name="chamber" value="2" onchange="document.getElementById('steklo').value = '3';"> <label class="form-check-label" for="chamber-2">1 камерный энергосберегающий</label></li>
                            <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="chamber-4" name="chamber" value="4" onchange="document.getElementById('steklo').value = '4';"> <label class="form-check-label" for="chamber-4">2 камерный энергосберегающий</label></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <input type="hidden" name="furn" id="furn" value="1">
                    <div class="select-wrapper">
                        <label class="input-label">Фурнитура:</label>
                        <ul class="mobile-select" id="furniture-brands">
                            <li class="form-check d-lg-block"><input type="radio" class="form-check-input" id="furniture-brand-1" name="furniture-brand" value="1" checked="checked" onchange="document.getElementById('furn').value = '1';"> <label class="form-check-label" for="furniture-brand-1">Standart</label></li>
                            <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="furniture-brand-2" name="furniture-brand" value="2" onchange="document.getElementById('furn').value = '2';"> <label class="form-check-label" for="furniture-brand-2">Premium</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <span class="title-section-profile collapsed collapse-toggler" data-toggle="collapse" data-target=".additional-drop" aria-expanded="false" role="list"><span class="cursor-custom">Дополнительная комплектация</span></span>
                </div>
            </div>
            <div class="row collapse additional-drop">
                <div class="col-12 col-lg-9">
                    <h6 class="title-section-sec">Комплектующие:</h6>
                    <input type="hidden" name="podok" id="podok" value="1">
                    <input type="hidden" name="otliv" id="otliv" value="1">
                    <input type="hidden" name="moskit" id="moskit" value="1">
                    <input type="hidden" name="montag" id="montag" value="1">
                    <input type="hidden" name="otkos" id="otkos" value="1">
                    <ul id="equipments">
                        <li class="select-wrapper">
                            <label class="input-label">Подоконник:</label>
                            <ul class="mobile-select" id="windowsills">
                                <li class="form-check d-lg-block"><input type="radio" class="form-check-input" id="windowsill-1" name="windowsill" value="1" checked="checked" onchange="document.getElementById('podok').value = '1';"> <label class="form-check-label" for="windowsill-1">Без подоконника</label></li>
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-2" name="windowsill" value="2" onchange="document.getElementById('podok').value = '2';"> <label class="form-check-label" for="windowsill-2">OpenTeck</label></li>
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-3" name="windowsill" value="3" onchange="document.getElementById('podok').value = '3';"> <label class="form-check-label" for="windowsill-3">Kraft</label></li>
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-4" name="windowsill" value="4" onchange="document.getElementById('podok').value = '4';"> <label class="form-check-label" for="windowsill-4">Danke</label></li>
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-5" name="windowsill" value="5" onchange="document.getElementById('podok').value = '5';"> <label class="form-check-label" for="windowsill-5">Plastolit</label></li>
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-6" name="windowsill" value="6" onchange="document.getElementById('podok').value = '6';"> <label class="form-check-label" for="windowsill-6">Werzalit</label></li>
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-7" name="windowsill" value="7" onchange="document.getElementById('podok').value = '7';"> <label class="form-check-label" for="windowsill-7">Crystalit</label></li>
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-8" name="windowsill" value="8" onchange="document.getElementById('podok').value = '8';"> <label class="form-check-label" for="windowsill-8">WDS</label></li>
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-9" name="windowsill" value="9" onchange="document.getElementById('podok').value = '9';"> <label class="form-check-label" for="windowsill-9">Sauberg</label></li>
                            </ul>
                        </li>
                        <li class="select-wrapper">
                            <label class="input-label">Отлив:</label>
                            <ul class="mobile-select" id="low-tides">
                                <li class="form-check d-lg-block"><input type="radio" class="form-check-input" id="low-tide-1" name="low-tide" value="1" checked="checked" onchange="document.getElementById('otliv').value = '1';"> <label class="form-check-label" for="low-tide-1">Без отлива</label></li>
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="low-tide-2" name="low-tide" value="2" onchange="document.getElementById('otliv').value = '2';"> <label class="form-check-label" for="low-tide-2">Оцинкованый белый</label></li>
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="low-tide-3" name="low-tide" value="3" onchange="document.getElementById('otliv').value = '3';"> <label class="form-check-label" for="low-tide-3">Оцинкованый цветной</label></li>
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="low-tide-4" name="low-tide" value="4" onchange="document.getElementById('otliv').value = '4';"> <label class="form-check-label" for="low-tide-4">Алюминиевый</label></li>
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="low-tide-5" name="low-tide" value="5" onchange="document.getElementById('otliv').value = '5';"> <label class="form-check-label" for="low-tide-5">Пластиковый</label></li>
                            </ul>
                        </li>
                        <li class="select-wrapper">
                            <label class="input-label">Москитная сетка:</label>
                            <ul id="nets" class="mobile-select">
                                <li class="form-check d-lg-block"><input type="radio" class="form-check-input" id="net-1" name="net" value="1" checked="checked" onchange="document.getElementById('moskit').value = '1';"> <label class="form-check-label" for="net-1">Без москитной сетки</label></li>
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="net-2" name="net" value="2" onchange="document.getElementById('moskit').value = '2';"> <label class="form-check-label" for="net-2">Москитная сетка</label></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3">
                    <span class="title-section-sec">Услуги:</span>
                    <ul id="services">
                        <li class="select-wrapper">
                            <label class="input-label">Монтаж</label>
                            <ul id="develops" class="mobile-select">
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="develop-2" name="develop" value="2" checked="checked" onchange="document.getElementById('montag').value = '1';"> <label class="form-check-label" for="develop-2">Без установки</label></li>
                                <li class="form-check d-lg-block"><input type="radio" class="form-check-input" id="develop-1" name="develop" value="1" onchange="document.getElementById('montag').value = '2';"> <label class="form-check-label" for="develop-1">С установкой</label></li>
                            </ul>
                        </li>
                        <li class="select-wrapper">
                            <label class="input-label">Откосы</label>
                            <ul class="mobile-select" id="slopes">
                                <li class="form-check d-lg-block"><input type="radio" class="foslopesrm-check-input" id="slope-1" name="slope" value="1"  checked="checked" onchange="document.getElementById('otkos').value = '1';"> <label class="form-check-label" for="slope-1">Без откосов</label></li>
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="slope-2" name="slope" value="2" onchange="document.getElementById('otkos').value = '2';"> <label class="form-check-label" for="slope-2">Гипсокартонные</label></li>
                                <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="slope-3" name="slope" value="3" onchange="document.getElementById('otkos').value = '3';"> <label class="form-check-label" for="slope-3">Пластиковые</label></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bottom-section-form">
                <div class="row block-bottom-section-form">
                    <div class="col-lg-4">
                        <div style="color: red; display: none; padding: 0px 0px 10px 0px;" id="razmer_err">Заполните, пожалуйста, обязательные поля</div>
                        <button class="btn-calculate-section-bottom" onclick="calculator();">Рассчитать стоимость</button>
                        <div class="block-sum-calculate">
                            <div><span class="price">Цена:</span><span>от*</span></div>
                            <div><span class="sum-calculate" id="sum-calculate">0 <span class="currency">грн</span></span></div>
                        </div>
                        <p>Цена является ориентировочной. Окончательную стоимость уточнять у менеджера.</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="block-right border-left-form">
                            <div class="form-group"><label for="exampleInputName5"><input name="your-name" class="form-control" id="exampleInputName5" placeholder="Ваше имя*"></label></div>
                            <div class="form-group"><label for="exampleInputPhone5"><input name="tel-460" class="form-control" id="exampleInputPhone5" placeholder="Телефон*"></label></div>
                            <div class="form-group"><label for="exampleInputEmail"><input name="your-message" type="email" class="form-control" id="exampleInputEmail" placeholder="Е-mail"></label></div>
                            <div class="form-group"><button class="send-request">Отправить заявку</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Калькулятор -->   
    
    <section class="section-slider-type-profil">
        <div class="container">
            <h2 class="title-section">Выбираем Профиль</h2>
            <ul class="list-slider-type-profil">
                <li class="item">
                    <div class="block-item"><span class="label label-rehau"></span> <a href="<?=get_bloginfo('home')?>/okna/rehau/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-rehau.0a5e523b.png" class="img-fluid" alt="photo"><span class="btn btn-profil">Rehau <span class="icon-back"></span></span></a></div>
                </li>
                <li class="item">
                    <div class="block-item"><span class="label label-wds"></span> <a href="<?=get_bloginfo('home')?>/okna/wds/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-wds.a9ed9d0d.png" class="img-fluid" alt="photo"><span class="btn btn-profil">WDS<span class="icon-back"></span></span></a></div>
                </li>
                <li class="item">
                    <div class="block-item"><span class="label label-veka"></span> <a href="<?=get_bloginfo('home')?>/okna/veka/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-veka.5b4ef49b.png" class="img-fluid" alt="photo"><span class="btn btn-profil">Veka <span class="icon-back"></span></span></a></div>
                </li>
                <li class="item">
                    <div class="block-item"><span class="label label-salamander"></span> <a href="<?=get_bloginfo('home')?>/okna/salamander/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-salamander.c016904e.png" class="img-fluid" alt="photo"><span class="btn btn-profil">Salamander<span class="icon-back"></span></span></a></div>
                </li>
                <li class="item">
                    <div class="block-item"><span class="label label-Openteck"></span> <a href="<?=get_bloginfo('home')?>/okna/openteck/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-opentech.083a55cc.png" class="img-fluid" alt="photo"><span class="btn btn-profil">Open Teck<span class="icon-back"></span></span></a></div>
                </li>
                <li class="item">
                    <div class="block-item"><span class="label label-kbe"></span> <a href="<?=get_bloginfo('home')?>/okna/kbe/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-kbe.14ce48af.png" class="img-fluid" alt="photo"><span class="btn btn-profil">KBE<span class="icon-back"></span></span></a></div>
                </li>
                <li class="item">
                    <div class="block-item"><span class="label label-viknaland"></span> <a href="<?=get_bloginfo('home')?>/okna/viknaland/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-aluplast.94016a54.png" class="img-fluid" alt="photo"><span class="btn btn-profil">Viknaland<span class="icon-back"></span></span></a></div>
                </li>
                <li class="item">
                    <div class="block-item"><span class="label label-aluplast"></span> <a href="<?=get_bloginfo('home')?>/okna/aluplast/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-viknaland.4525feba.png" class="img-fluid" alt="photo"><span class="btn btn-profil">Aluplast<span class="icon-back"></span></span></a></div>
                </li>
                <li class="item">
                    <div class="block-item"><span class="label label-windoffs"></span> <a href="<?=get_bloginfo('home')?>/okna/windoffs/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-windoffs.f4accd4c.png" class="img-fluid" alt="photo"><span class="btn btn-profil">Windoff's<span class="icon-back"></span></span></a></div>
                </li>
            </ul>
        </div>
    </section> <!-- section-slider-type-profil -->
            
        <?php 
            
            global $wpdb;
            $result_params = $wpdb->get_results("SELECT * FROM `{$wpdb -> prefix}window_prices` WHERE `page_name` = 'okna_v_beloy_tserkvi' ");
            $price_obj = json_decode($result_params[0]->data);
         
        ?>
         
    <section class="section-table-price">
        <div class="container">            
            <div class="block-deadlight">
            <h2 class="title-block-type-windows">Окно Глухое</h2>
            <span class="small-title">Размер 750 х 1350 мм, Цена от <span class="min-price"><?=$price_obj->okno_gluhoe->min?></span> грн до <span class="max-price"><?=$price_obj->okno_gluhoe->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-tab" data-toggle="tab" href="#wds" role="tab" aria-controls="wds" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="WDS-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-tab" data-toggle="tab" href="#windoffs" role="tab" aria-controls="windoffs" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="windoffs-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-tab" data-toggle="tab" href="#viknaland" role="tab" aria-controls="viknaland" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-tab" data-toggle="tab" href="#rehau" role="tab" aria-controls="rehau" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-tab" data-toggle="tab" href="#salamander" role="tab" aria-controls="salamander" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item">
                  <a class="nav-link" id="kbe-tab" data-toggle="tab" href="#kbe" role="tab" aria-controls="kbe" aria-selected="false">
                     <img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="kbe-logo img-fluid" alt="photo">
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="opentek-tab" data-toggle="tab" href="#opentek" role="tab" aria-controls="opentek" aria-selected="false">
                     <img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo">
                  </a>
               </li>
               <li class="nav-item"><a class="nav-link" id="veka-tab" data-toggle="tab" href="#veka" role="tab" aria-controls="veka" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-tab" data-toggle="tab" href="#aluplast" role="tab" aria-controls="aluplast" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent">

               <?php 
               $k = 0;
               foreach ($price_obj->okno_gluhoe as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>

                     <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>" role="tabpanel" aria-labelledby="<?=$key_w?>">
                        <div class="table-tab">
                           <img src="<?php bloginfo('template_url') ?>/images/title-img-table-windows-12.b937e597.png" class="img-type-windows img-fluid" alt="photo">
                           <table class="table-windows table-price-windows">
                              <thead>
                                 <tr>
                                    <td>Профиль</td>
                                    <td>Ширина профиля</td>
                                    <td>1-камерный стеклопакет</td>
                                    <td>1-камерный энергозберигающий стеклопакет</td>
                                    <td>2-камерный стеклопакет</td>
                                    <td>2-камерный энергозберигающий стеклопакет</td>
                                 </tr>
                              </thead>
                              <tbody>

                                 <tr>
                                    <?php
                                    $this_obj = $price_obj->okno_gluhoe->$key_w;
                                    $j = 0;
                                    foreach ($this_obj as $value) {
                                       $j++;
                                    }                             
                                    $i = 1;
                                    foreach ($this_obj as $key => $value) { ?>
                                       <?php
                                       if ($i%6 === 1) {?>
                                          <td class="name"><?=$value?></td>
                                       <?php } else{ ?>
                                          <td><?=$value?></td>
                                       <?php } 
                                       if ($i%6 === 0 && $i < $j) {?>
                                       </tr><tr>
                                       <?php } 
                                       $i++ ; 
                                    }?>                           
                                 </tr>
                                 
                              </tbody>
                           </table>
                        </div>
                        <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
                     </div>

                  <?php } 
                  $k++;                
               } ?>
               
            </div>
         </div>
         <div class="block-open">
            <h2 class="title-block-type-windows">Окно Открывающиеся</h2>
            <span class="small-title">Размер 750 х 1350 мм, Цена от <span class="min-price"><?=$price_obj->okno_otkrivayusheesya->min?></span> грн до <span class="max-price"><?=$price_obj->okno_otkrivayusheesya->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-open" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-open-tab" data-toggle="tab" href="#wds-open" role="tab" aria-controls="wds-open" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-open-tab" data-toggle="tab" href="#windoffs-open" role="tab" aria-controls="windoffs-open" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-open-tab" data-toggle="tab" href="#viknaland-open" role="tab" aria-controls="viknaland-open" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-open-tab" data-toggle="tab" href="#rehau-open" role="tab" aria-controls="rehau-open" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-open-tab" data-toggle="tab" href="#salamander-open" role="tab" aria-controls="salamander-open" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-open-tab" data-toggle="tab" href="#kbe-open" role="tab" aria-controls="kbe" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-open-tab" data-toggle="tab" href="#opentek-open" role="tab" aria-controls="opentek" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-open-tab" data-toggle="tab" href="#veka-open" role="tab" aria-controls="veka-open" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-open-tab" data-toggle="tab" href="#aluplast-open" role="tab" aria-controls="aluplast-open" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-open">

               <?php 
               $k = 0;
               foreach ($price_obj->okno_otkrivayusheesya as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-open" role="tabpanel" aria-labelledby="<?=$key_w?>-open">
                  <div class="table-tab">
                     <img src="<?php bloginfo('template_url') ?>/images/title-img-table-windows-22.554bb6f3.png" class="img-type-windows img-fluid" alt="photo">
                     <table class="table-windows table-price-windows">
                        <thead>
                           <tr>
                              <td>Профиль</td>
                              <td>Ширина профиля</td>
                              <td>1-камерный стеклопакет</td>
                              <td>1-камерный энергозберигающий стеклопакет</td>
                              <td>2-камерный стеклопакет</td>
                              <td>2-камерный энергозберигающий стеклопакет</td>
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                              <?php
                              $this_obj = $price_obj->okno_otkrivayusheesya->$key_w;
                              $j = 0;
                              foreach ($this_obj as $value) {
                                 $j++;
                              }                             
                              $i = 1;
                              foreach ($this_obj as $key => $value) { ?>
                                 <?php
                                 if ($i%6 === 1) {?>
                                    <td class="name"><?=$value?></td>
                                 <?php } else{ ?>
                                    <td><?=$value?></td>
                                 <?php } 
                                 if ($i%6 === 0 && $i < $j) {?>
                                 </tr><tr>
                                 <?php } 
                                 $i++ ; 
                              }?>                           
                           </tr>
                        
                        </tbody>
                     </table>
                  </div>
                  <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
               </div>

               <?php } 
                  $k++;                
               } ?>

            </div>
         </div>
         <div class="block-DoubleOneOpening">
            <h2 class="title-block-type-windows">Двухстворчатое с Одним Открыванием</h2>
            <span class="small-title">Размер 1100 х 1350 мм, Цена от <span class="min-price"><?=$price_obj->okno_2_1->min?></span> грн до <span class="max-price"><?=$price_obj->okno_2_1->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-DoubleOneOpening" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-DoubleOneOpening-tab" data-toggle="tab" href="#wds-DoubleOneOpening" role="tab" aria-controls="wds-DoubleOneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-DoubleOneOpening-tab" data-toggle="tab" href="#windoffs-DoubleOneOpening" role="tab" aria-controls="windoffs-DoubleOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-DoubleOneOpening-tab" data-toggle="tab" href="#viknaland-DoubleOneOpening" role="tab" aria-controls="viknaland-DoubleOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-DoubleOneOpening-tab" data-toggle="tab" href="#rehau-DoubleOneOpening" role="tab" aria-controls="rehau-DoubleOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-DoubleOneOpening-tab" data-toggle="tab" href="#salamander-DoubleOneOpening" role="tab" aria-controls="salamander-DoubleOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-DoubleOneOpening-tab" data-toggle="tab" href="#kbe-DoubleOneOpening" role="tab" aria-controls="kbe" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-DoubleOneOpening-tab" data-toggle="tab" href="#opentek-DoubleOneOpening" role="tab" aria-controls="opentek-DoubleOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-DoubleOneOpening-tab" data-toggle="tab" href="#veka-DoubleOneOpening" role="tab" aria-controls="veka-DoubleOneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-DoubleOneOpening-tab" data-toggle="tab" href="#aluplast-DoubleOneOpening" role="tab" aria-controls="aluplast-DoubleOneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-DoubleOneOpening">

               <?php 
               $k = 0;
               foreach ($price_obj->okno_2_1 as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-DoubleOneOpening" role="tabpanel" aria-labelledby="<?=$key_w?>-DoubleOneOpening">
                  <div class="table-tab">
                     <img src="<?php bloginfo('template_url') ?>/images/title-img-table-windows-32.088e623b.png" class="img-type-windows-2 img-fluid" alt="photo">
                     <table class="table-windows table-price-windows">
                        <thead>
                           <tr>
                              <td>Профиль</td>
                              <td>Ширина профиля</td>
                              <td>1-камерный стеклопакет</td>
                              <td>1-камерный энергозберигающий стеклопакет</td>
                              <td>2-камерный стеклопакет</td>
                              <td>2-камерный энергозберигающий стеклопакет</td>
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                              <?php
                              $this_obj = $price_obj->okno_2_1->$key_w;
                              $j = 0;
                              foreach ($this_obj as $value) {
                                 $j++;
                              }                             
                              $i = 1;
                              foreach ($this_obj as $key => $value) { ?>
                                 <?php
                                 if ($i%6 === 1) {?>
                                    <td class="name"><?=$value?></td>
                                 <?php } else{ ?>
                                    <td><?=$value?></td>
                                 <?php } 
                                 if ($i%6 === 0 && $i < $j) {?>
                                 </tr><tr>
                                 <?php } 
                                 $i++ ; 
                              }?>                           
                           </tr>
                           
                        </tbody>
                     </table>
                  </div>
                  <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
               </div>

               <?php } 
                  $k++;                
               } ?>

            </div>
         </div>
         <div class="block-DoubleDoubleOpening">
            <h2 class="title-block-type-windows">Двухстворчатое с Двумя Открываниями</h2>
            <span class="small-title">Размер 1100 х 1350 мм, Цена от <span class="min-price"><?=$price_obj->okno_2_2->min?></span> грн до <span class="max-price"><?=$price_obj->okno_2_2->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-DoubleDoubleOpening" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-DoubleDoubleOpening-tab" data-toggle="tab" href="#wds-DoubleDoubleOpening" role="tab" aria-controls="wds-DoubleDoubleOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-DoubleDoubleOpening-tab" data-toggle="tab" href="#windoffs-DoubleDoubleOpening" role="tab" aria-controls="windoffs-DoubleDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-DoubleDoubleOpening-tab" data-toggle="tab" href="#viknaland-DoubleDoubleOpening" role="tab" aria-controls="viknaland-DoubleDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-DoubleDoubleOpening-tab" data-toggle="tab" href="#rehau-DoubleDoubleOpening" role="tab" aria-controls="rehau-DoubleDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-DoubleDoubleOpening-tab" data-toggle="tab" href="#salamander-DoubleDoubleOpening" role="tab" aria-controls="salamander-DoubleDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-DoubleDoubleOpening-tab" data-toggle="tab" href="#kbe-DoubleDoubleOpening" role="tab" aria-controls="kbe" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-DoubleDoubleOpening-tab" data-toggle="tab" href="#opentek-DoubleDoubleOpening" role="tab" aria-controls="opentek" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-DoubleDoubleOpening-tab" data-toggle="tab" href="#veka-DoubleDoubleOpening" role="tab" aria-controls="veka-DoubleDoubleOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-DoubleDoubleOpening-tab" data-toggle="tab" href="#aluplast-DoubleDoubleOpening" role="tab" aria-controls="aluplast-DoubleDoubleOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-DoubleDoubleOpening">

               <?php 
               $k = 0;
               foreach ($price_obj->okno_2_2 as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-DoubleDoubleOpening" role="tabpanel" aria-labelledby="<?=$key_w?>-DoubleDoubleOpening">
                  <div class="table-tab">
                     <img src="<?php bloginfo('template_url') ?>/images/title-img-table-windows-42.3f7425db.png" class="openteck-logo img-type-windows-2 img-fluid" alt="photo">
                     <table class="table-windows table-price-windows">
                        <thead>
                           <tr>
                              <td>Профиль</td>
                              <td>Ширина профиля</td>
                              <td>1-камерный стеклопакет</td>
                              <td>1-камерный энергозберигающий стеклопакет</td>
                              <td>2-камерный стеклопакет</td>
                              <td>2-камерный энергозберигающий стеклопакет</td>
                           </tr>
                        </thead>
                        <tbody>
                           
                           <tr>
                              <?php
                              $this_obj = $price_obj->okno_2_2->$key_w;
                              $j = 0;
                              foreach ($this_obj as $value) {
                                 $j++;
                              }                             
                              $i = 1;
                              foreach ($this_obj as $key => $value) { ?>
                                 <?php
                                 if ($i%6 === 1) {?>
                                    <td class="name"><?=$value?></td>
                                 <?php } else{ ?>
                                    <td><?=$value?></td>
                                 <?php } 
                                 if ($i%6 === 0 && $i < $j) {?>
                                 </tr><tr>
                                 <?php } 
                                 $i++ ; 
                              }?>                           
                           </tr>
                        
                        </tbody>
                     </table>
                  </div>
                  <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
               </div>

               <?php } 
                  $k++;                
               } ?>
            
            </div>
         </div>
         <div class="block-DoubleT-OneOpening">
            <h2 class="title-block-type-windows">Двухстворчатое Т-образное с Одним Открыванием</h2>
            <span class="small-title">Размер 1150 х 1750 мм, Цена от <span class="min-price"><?=$price_obj->okno_2_t_1->min?></span> грн до <span class="max-price"><?=$price_obj->okno_2_t_1->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-DoubleT-OneOpening" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-DoubleT-OneOpening-tab" data-toggle="tab" href="#wds-DoubleT-OneOpening" role="tab" aria-controls="wds" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-DoubleT-OneOpening-tab" data-toggle="tab" href="#windoffs-DoubleT-OneOpening" role="tab" aria-controls="windoffs" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-DoubleT-OneOpening-tab" data-toggle="tab" href="#viknaland-DoubleT-OneOpening" role="tab" aria-controls="viknaland" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-DoubleT-OneOpening-tab" data-toggle="tab" href="#rehau-DoubleT-OneOpening" role="tab" aria-controls="rehau" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-DoubleT-OneOpening-tab" data-toggle="tab" href="#salamander-DoubleT-OneOpening" role="tab" aria-controls="salamander" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-DoubleT-OneOpening-tab" data-toggle="tab" href="#kbe-DoubleT-OneOpening" role="tab" aria-controls="kbe" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-DoubleT-OneOpening-tab" data-toggle="tab" href="#opentek-DoubleT-OneOpening" role="tab" aria-controls="opentek" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-DoubleT-OneOpening-tab" data-toggle="tab" href="#veka-DoubleT-OneOpening" role="tab" aria-controls="veka-DoubleT-OneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-DoubleT-OneOpening-tab" data-toggle="tab" href="#aluplast-DoubleT-OneOpening" role="tab" aria-controls="aluplast-DoubleT-OneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-DoubleT-OneOpening">
               
               <?php 
               $k = 0;
               foreach ($price_obj->okno_2_t_1 as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-DoubleT-OneOpening" role="tabpanel" aria-labelledby="<?=$key_w?>-DoubleT-OneOpening">
                  <div class="table-tab">
                     <img src="<?php bloginfo('template_url') ?>/images/title-img-table-windows-52.6288161e.png" class="img-type-windows-2T img-fluid" alt="photo">
                     <table class="table-windows table-price-windows">
                        <thead>
                           <tr>
                              <td>Профиль</td>
                              <td>Ширина профиля</td>
                              <td>1-камерный стеклопакет</td>
                              <td>1-камерный энергозберигающий стеклопакет</td>
                              <td>2-камерный стеклопакет</td>
                              <td>2-камерный энергозберигающий стеклопакет</td>
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                              <?php
                              $this_obj = $price_obj->okno_2_t_1->$key_w;
                              $j = 0;
                              foreach ($this_obj as $value) {
                                 $j++;
                              }                             
                              $i = 1;
                              foreach ($this_obj as $key => $value) { ?>
                                 <?php
                                 if ($i%6 === 1) {?>
                                    <td class="name"><?=$value?></td>
                                 <?php } else{ ?>
                                    <td><?=$value?></td>
                                 <?php } 
                                 if ($i%6 === 0 && $i < $j) {?>
                                 </tr><tr>
                                 <?php } 
                                 $i++ ; 
                              }?>                           
                           </tr>
                        
                        </tbody>
                     </table>
                  </div>
                  <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
               </div>

               <?php } 
                  $k++;                
               } ?>

            </div>
         </div>
         <div class="block-DoubleT-DoubleOpening">
            <h2 class="title-block-type-windows">Двухстворчатое Т-образное с Двумя Открываниями</h2>
            <span class="small-title">Размер 1150 х 1750 мм, Цена от <span class="min-price"><?=$price_obj->okno_2_t_2->min?></span> грн до <span class="max-price"><?=$price_obj->okno_2_t_2->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-DoubleT-DoubleOpening" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-DoubleT-DoubleOpening-tab" data-toggle="tab" href="#wds-DoubleT-DoubleOpening" role="tab" aria-controls="wds" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-DoubleT-DoubleOpening-tab" data-toggle="tab" href="#windoffs-DoubleT-DoubleOpening" role="tab" aria-controls="windoffs" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-DoubleT-DoubleOpening-tab" data-toggle="tab" href="#viknaland-DoubleT-DoubleOpening" role="tab" aria-controls="viknaland" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-DoubleT-DoubleOpening-tab" data-toggle="tab" href="#rehau-DoubleT-DoubleOpening" role="tab" aria-controls="rehau" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-DoubleT-DoubleOpening-tab" data-toggle="tab" href="#salamander-DoubleT-DoubleOpening" role="tab" aria-controls="salamander" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-open-DoubleT-DoubleOpening" data-toggle="tab" href="#kbe-DoubleT-DoubleOpening" role="tab" aria-controls="kbe" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-DoubleT-DoubleOpening-tab" data-toggle="tab" href="#opentek-DoubleT-DoubleOpening" role="tab" aria-controls="opentek" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-DoubleT-DoubleOpening-tab" data-toggle="tab" href="#veka-DoubleT-DoubleOpening" role="tab" aria-controls="veka-DoubleT-DoubleOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-DoubleT-DoubleOpening-tab" data-toggle="tab" href="#aluplast-DoubleT-DoubleOpening" role="tab" aria-controls="aluplast-DoubleT-DoubleOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-DoubleT-DoubleOpening">
               
               <?php 
               $k = 0;
               foreach ($price_obj->okno_2_t_2 as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-DoubleT-DoubleOpening" role="tabpanel" aria-labelledby="<?=$key_w?>-DoubleT-DoubleOpening">
                  <div class="table-tab">
                     <img src="<?php bloginfo('template_url') ?>/images/title-img-table-windows-62.ca975965.png" class="img-type-windows-2T img-fluid" alt="photo">
                     <table class="table-windows table-price-windows">
                        <thead>
                           <tr>
                              <td>Профиль</td>
                              <td>Ширина профиля</td>
                              <td>1-камерный стеклопакет</td>
                              <td>1-камерный энергозберигающий стеклопакет</td>
                              <td>2-камерный стеклопакет</td>
                              <td>2-камерный энергозберигающий стеклопакет</td>
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                              <?php
                              $this_obj = $price_obj->okno_2_t_2->$key_w;
                              $j = 0;
                              foreach ($this_obj as $value) {
                                 $j++;
                              }                             
                              $i = 1;
                              foreach ($this_obj as $key => $value) { ?>
                                 <?php
                                 if ($i%6 === 1) {?>
                                    <td class="name"><?=$value?></td>
                                 <?php } else{ ?>
                                    <td><?=$value?></td>
                                 <?php } 
                                 if ($i%6 === 0 && $i < $j) {?>
                                 </tr><tr>
                                 <?php } 
                                 $i++ ; 
                              }?>                           
                           </tr>
                        
                        </tbody>
                     </table>
                  </div>
                  <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
               </div>
               
               <?php } 
                  $k++;                
               } ?>
           
            </div>
         </div>
         <div class="block-ThreeOneOpening">
            <h2 class="title-block-type-windows">Трехстворчатое с Одним Открыванием</h2>
            <span class="small-title">Размер 1720 х 1350 мм, Цена от <span class="min-price"><?=$price_obj->okno_3_1->min?></span> грн до <span class="max-price"><?=$price_obj->okno_3_1->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-ThreeOneOpening" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-ThreeOneOpening-tab" data-toggle="tab" href="#wds-ThreeOneOpening" role="tab" aria-controls="wds-ThreeOneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-ThreeOneOpening-tab" data-toggle="tab" href="#windoffs-ThreeOneOpening" role="tab" aria-controls="windoffs-ThreeOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-ThreeOneOpening-tab" data-toggle="tab" href="#viknaland-ThreeOneOpening" role="tab" aria-controls="viknaland-ThreeOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-ThreeOneOpening-tab" data-toggle="tab" href="#rehau-ThreeOneOpening" role="tab" aria-controls="rehau-ThreeOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-ThreeOneOpening-tab" data-toggle="tab" href="#salamander-ThreeOneOpening" role="tab" aria-controls="salamander-ThreeOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-ThreeOneOpening-tab" data-toggle="tab" href="#kbe-ThreeOneOpening" role="tab" aria-controls="kbe-ThreeOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-ThreeOneOpening-tab" data-toggle="tab" href="#opentek-ThreeOneOpening" role="tab" aria-controls="opentek-ThreeOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-ThreeOneOpening-tab" data-toggle="tab" href="#veka-ThreeOneOpening" role="tab" aria-controls="veka-ThreeOneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-ThreeOneOpening-tab" data-toggle="tab" href="#aluplast-ThreeOneOpening" role="tab" aria-controls="aluplast-ThreeOneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-ThreeOneOpening">
               
               <?php 
               $k = 0;
               foreach ($price_obj->okno_3_1 as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-ThreeOneOpening" role="tabpanel" aria-labelledby="<?=$key_w?>-ThreeOneOpening">
                  <div class="table-tab">
                     <img src="<?php bloginfo('template_url') ?>/images/title-img-table-windows-72.90f20249.png" class="mt-lg-5 img-type-windows-3 img-fluid" alt="photo">
                     <table class="table-windows table-price-windows">
                        <thead>
                           <tr>
                              <td>Профиль</td>
                              <td>Ширина профиля</td>
                              <td>1-камерный стеклопакет</td>
                              <td>1-камерный энергозберигающий стеклопакет</td>
                              <td>2-камерный стеклопакет</td>
                              <td>2-камерный энергозберигающий стеклопакет</td>
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                              <?php
                              $this_obj = $price_obj->okno_3_1->$key_w;
                              $j = 0;
                              foreach ($this_obj as $value) {
                                 $j++;
                              }                             
                              $i = 1;
                              foreach ($this_obj as $key => $value) { ?>
                                 <?php
                                 if ($i%6 === 1) {?>
                                    <td class="name"><?=$value?></td>
                                 <?php } else{ ?>
                                    <td><?=$value?></td>
                                 <?php } 
                                 if ($i%6 === 0 && $i < $j) {?>
                                 </tr><tr>
                                 <?php } 
                                 $i++ ; 
                              }?>                           
                           </tr>
                        
                        </tbody>
                     </table>
                  </div>
                  <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
               </div>
               
               <?php } 
                  $k++;                
               } ?>
            
            </div>
         </div>
         <div class="block-ThreeDoubleOpening">
            <h2 class="title-block-type-windows">Трехстворчатое с Двумя Открываниями</h2>
            <span class="small-title">Размер 1720 х 1350 мм, Цена от <span class="min-price"><?=$price_obj->okno_3_2->min?></span> грн до <span class="max-price"><?=$price_obj->okno_3_2->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-ThreeDoubleOpening" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-ThreeDoubleOpening-tab" data-toggle="tab" href="#wds-ThreeDoubleOpening" role="tab" aria-controls="wds-ThreeDoubleOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-ThreeDoubleOpening-tab" data-toggle="tab" href="#windoffs-ThreeDoubleOpening" role="tab" aria-controls="windoffs-ThreeDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-ThreeDoubleOpening-tab" data-toggle="tab" href="#viknaland-ThreeDoubleOpening" role="tab" aria-controls="viknaland-ThreeDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-ThreeDoubleOpening-tab" data-toggle="tab" href="#rehau-ThreeDoubleOpening" role="tab" aria-controls="rehau-ThreeDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-ThreeDoubleOpening-tab" data-toggle="tab" href="#salamander-ThreeDoubleOpening" role="tab" aria-controls="salamander-ThreeDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-ThreeDoubleOpening-tab" data-toggle="tab" href="#kbe-ThreeDoubleOpening" role="tab" aria-controls="kbe-ThreeDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-ThreeDoubleOpening-tab" data-toggle="tab" href="#opentek-ThreeDoubleOpening" role="tab" aria-controls="opentek-ThreeDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-ThreeDoubleOpening-tab" data-toggle="tab" href="#veka-ThreeDoubleOpening" role="tab" aria-controls="veka-ThreeDoubleOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-ThreeDoubleOpening-tab" data-toggle="tab" href="#aluplast-ThreeDoubleOpening" role="tab" aria-controls="aluplast-ThreeDoubleOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-ThreeDoubleOpening">
               
               <?php 
               $k = 0;
               foreach ($price_obj->okno_3_2 as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-ThreeDoubleOpening" role="tabpanel" aria-labelledby="<?=$key_w?>-ThreeDoubleOpening">
                  <div class="table-tab">
                     <img src="<?php bloginfo('template_url') ?>/images/title-img-table-windows-82.4d9fd6e8.png" class="mt-lg-5 img-type-windows-3 img-fluid" alt="photo">
                     <table class="table-windows table-price-windows">
                        <thead>
                           <tr>
                              <td>Профиль</td>
                              <td>Ширина профиля</td>
                              <td>1-камерный стеклопакет</td>
                              <td>1-камерный энергозберигающий стеклопакет</td>
                              <td>2-камерный стеклопакет</td>
                              <td>2-камерный энергозберигающий стеклопакет</td>
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                              <?php
                              $this_obj = $price_obj->okno_3_2->$key_w;
                              $j = 0;
                              foreach ($this_obj as $value) {
                                 $j++;
                              }                             
                              $i = 1;
                              foreach ($this_obj as $key => $value) { ?>
                                 <?php
                                 if ($i%6 === 1) {?>
                                    <td class="name"><?=$value?></td>
                                 <?php } else{ ?>
                                    <td><?=$value?></td>
                                 <?php } 
                                 if ($i%6 === 0 && $i < $j) {?>
                                 </tr><tr>
                                 <?php } 
                                 $i++ ; 
                              }?>                           
                           </tr>
                        
                        </tbody>
                     </table>
                  </div>
                  <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
               </div>
               
               <?php } 
                  $k++;                
               } ?>
            
            </div>
         </div>
         <div class="block-ThreeT-OneOpening">
            <h2 class="title-block-type-windows">Трехстворчатое Т-образное с Одним Открыванием</h2>
            <span class="small-title">Размер 1720 х 1750 мм, Цена от <span class="min-price"><?=$price_obj->okno_3_t_1->min?></span> грн до <span class="max-price"><?=$price_obj->okno_3_t_1->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-ThreeT-OneOpening" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-ThreeT-OneOpening-tab" data-toggle="tab" href="#wds-ThreeT-OneOpening" role="tab" aria-controls="wds-ThreeT-OneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-ThreeT-OneOpening-tab" data-toggle="tab" href="#windoffs-ThreeT-OneOpening" role="tab" aria-controls="windoffs-ThreeT-OneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-ThreeT-OneOpening-tab" data-toggle="tab" href="#viknaland-ThreeT-OneOpening" role="tab" aria-controls="viknaland-ThreeT-OneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-ThreeT-OneOpening-tab" data-toggle="tab" href="#rehau-ThreeT-OneOpening" role="tab" aria-controls="rehau-ThreeT-OneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-ThreeT-OneOpening-tab" data-toggle="tab" href="#salamander-ThreeT-OneOpening" role="tab" aria-controls="salamander-ThreeT-OneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-ThreeT-OneOpening-tab" data-toggle="tab" href="#kbe-ThreeT-OneOpening" role="tab" aria-controls="kbe-ThreeT-OneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-ThreeT-OneOpening-tab" data-toggle="tab" href="#opentek-ThreeT-OneOpening" role="tab" aria-controls="opentek-ThreeT-OneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-ThreeT-OneOpening-tab" data-toggle="tab" href="#veka-ThreeT-OneOpening" role="tab" aria-controls="veka-ThreeT-OneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-ThreeT-OneOpening-tab" data-toggle="tab" href="#aluplast-ThreeT-OneOpening" role="tab" aria-controls="aluplast-ThreeT-OneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-ThreeT-OneOpening">
               
               <?php 
               $k = 0;
               foreach ($price_obj->okno_3_t_1 as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-ThreeT-OneOpening" role="tabpanel" aria-labelledby="<?=$key_w?>-ThreeT-OneOpening">
                  <div class="table-tab">
                     <img src="<?php bloginfo('template_url') ?>/images/title-img-table-windows-92.767b3f74.png" class="img-type-windows-3T img-fluid" alt="photo">
                     <table class="table-windows table-price-windows">
                        <thead>
                           <tr>
                              <td>Профиль</td>
                              <td>Ширина профиля</td>
                              <td>1-камерный стеклопакет</td>
                              <td>1-камерный энергозберигающий стеклопакет</td>
                              <td>2-камерный стеклопакет</td>
                              <td>2-камерный энергозберигающий стеклопакет</td>
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                              <?php
                              $this_obj = $price_obj->okno_3_t_1->$key_w;
                              $j = 0;
                              foreach ($this_obj as $value) {
                                 $j++;
                              }                             
                              $i = 1;
                              foreach ($this_obj as $key => $value) { ?>
                                 <?php
                                 if ($i%6 === 1) {?>
                                    <td class="name"><?=$value?></td>
                                 <?php } else{ ?>
                                    <td><?=$value?></td>
                                 <?php } 
                                 if ($i%6 === 0 && $i < $j) {?>
                                 </tr><tr>
                                 <?php } 
                                 $i++ ; 
                              }?>                           
                           </tr>
                        
                        </tbody>
                     </table>
                  </div>
                  <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
               </div>
               
               <?php } 
                  $k++;                
               } ?>
            
            </div>
         </div>
            
            <div class="block-FanlightWindow">
                <h2 class="title-block-type-windows">Фрамужное Окно</h2>
                <span class="small-title">Размер 750 х 500 мм, Цена от <span class="min-price"><?=$price_obj->framuznoe_okno->min?></span> грн до <span class="max-price"><?=$price_obj->framuznoe_okno->max?></span> грн</span>
                <ul class="nav nav-tabs" id="myTab-FanlightWindow" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="wdc-FanlightWindow-tab" data-toggle="tab" href="#wds-FanlightWindow" role="tab" aria-controls="wdc-FanlightWindow-tab" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
                    <li class="nav-item"><a class="nav-link" id="windoffs-FanlightWindow-tab" data-toggle="tab" href="#windoffs-FanlightWindow" role="tab" aria-controls="windoffs-FanlightWindow-tab" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
                    <li class="nav-item"><a class="nav-link" id="viknaland-FanlightWindow-tab" data-toggle="tab" href="#viknaland-FanlightWindow" role="tab" aria-controls="viknaland-FanlightWindow-tab" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.ff99421d.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
                    <li class="nav-item"><a class="nav-link" id="rehau-FanlightWindow-tab" data-toggle="tab" href="#rehau-FanlightWindow" role="tab" aria-controls="rehau-FanlightWindow-tab" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
                    <li class="nav-item"><a class="nav-link" id="salamander-FanlightWindow-tab" data-toggle="tab" href="#salamander-FanlightWindow" role="tab" aria-controls="salamander-FanlightWindow-tab" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
                    <li class="nav-item"><a class="nav-link" id="kbe-FanlightWindow-tab" data-toggle="tab" href="#kbe-FanlightWindow" role="tab" aria-controls="kbe-FanlightWindow-tab" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
                    <li class="nav-item"><a class="nav-link" id="opentek-FanlightWindow-tab" data-toggle="tab" href="#opentek-FanlightWindow" role="tab" aria-controls="opentek-FanlightWindow-tab" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
                    <li class="nav-item"><a class="nav-link" id="veka-FanlightWindow-tab" data-toggle="tab" href="#veka-FanlightWindow" role="tab" aria-controls="veka-FanlightWindow-tab" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
                    <li class="nav-item"><a class="nav-link" id="aluplast-FanlightWindow-tab" data-toggle="tab" href="#aluplast-FanlightWindow" role="tab" aria-controls="aluplast-FanlightWindow-tab" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
                </ul>
                <div class="tab-content" id="myTabContent-FanlightWindow">
                    
                    <?php 
                    $k = 0;
                    foreach ($price_obj->framuznoe_okno as $key_w => $value_w) {
                      if (is_object($value_w)) { ?>
                    
                    <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-FanlightWindow" role="tabpanel" aria-labelledby="<?=$key_w?>-FanlightWindow">
                        <div class="table-tab">
                            <img src="<?php bloginfo('template_url') ?>/images/FanlightWindow-2.317689e0.png" class="img-type-windows-fanlightwindow Fanlight img-fluid" alt="photo">
                            <table class="table-windows table-price-windows">
                                <thead>
                                    <tr>
                                        <td>Профиль</td>
                                        <td>Ширина профиля</td>
                                        <td>1-камерный стеклопакет</td>
                                        <td>1-камерный энергозберигающий стеклопакет</td>
                                        <td>2-камерный стеклопакет</td>
                                        <td>2-камерный энергозберигающий стеклопакет</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <?php
                                        $this_obj = $price_obj->framuznoe_okno->$key_w;
                                        $j = 0;
                                        foreach ($this_obj as $value) {
                                           $j++;
                                        }                             
                                        $i = 1;
                                        foreach ($this_obj as $key => $value) { ?>
                                           <?php
                                           if ($i%6 === 1) {?>
                                              <td class="name"><?=$value?></td>
                                           <?php } else{ ?>
                                              <td><?=$value?></td>
                                           <?php } 
                                           if ($i%6 === 0 && $i < $j) {?>
                                           </tr><tr>
                                           <?php } 
                                           $i++ ; 
                                        }?>                           
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
                    </div>
                    
                    <?php } 
                  $k++;                
               } ?>
                
                </div>
            </div>
        </div>
    </section><!-- section-table-price -->

    <section class="section-post section-post-windows post-page-agency">
        <div class="container">
            <h2 class="title-section">Стоимость пластиковых окон</h2>
            <p class="text-custom-page">Чтобы рассчитать стоимость окна на заказ, необходимо определиться со следующими моментами:</p>
            <ol class="text-custom-page" style="margin-left: 50px">
                <li> Тип конфигурации. Это может быть французское остекление, раздвижной или распашной оконный модуль, балконный блок и т. д. Конфигурация подбирается в зависимости от назначения – для квартиры, частного дома, коттеджа, коммерческого помещения и т. д.<br></li>
                <li> Форму конструкции. Это может быть классическое прямоугольное или квадратное окно, арочное, трапециевидное или другое исполнение. Наш менеджер уточнит наличие доступных на складе конструкций по запросу клиента.<br></li>
                <li>Тип профиля. Цена оконной рамы определяется из расчета стоимости одного квадратного метра конструкции. Мы предлагаем профили Rehau, WDS, Veka, Aluplast и т. д.<br></li>
                <li>Тип стеклопакета. Стекло является одним из основных конструктивных элементов пластикового окна. Стеклопакеты различаются по количеству камер (от одной до трех, двухкамерные – наиболее распространенные и востребованные), наличию дополнительных функций (энергосберегающие, с подогревом). Если вы хотите защитить помещение от взглядов посторонних людей, выбирайте тонированные стекла. При замене оконных систем на первых этажах рекомендуются конструкции с бронированными стеклопакетами.<br></li>
                <li>Качество фурнитуры. В базовую комплектацию обычно входят стандартные оконные ручки, петли, цапфы и т. д. При необходимости вы всегда можете заказать усиленную фурнитуру. Дополнительно комплектовать окна можно подоконниками, антивандальной фурнитурой, москитными сектами, отливами и т. д.</li>
            </ol>
            <p class="text-custom-page">
                Чтобы просчитать, сколько стоит замена окон в Белой Церкви, вы можете воспользоваться нашим онлайн-калькулятором. Введите размеры оконного модуля или балкона, укажите тип конфигурации и конструкции. Для получения бесплатной консультации свяжитесь с менеджером компании, который просчитает <a target="_blank" href="<?=get_bloginfo('home')?>/plastikovye-okna/triugolnye/">стоимость пластиковых треугольных окон</a> (или других конфигураций) и ответит на все вопросы, связанные с выбором. Цены на металлопластиковые окна и двери зависят от сложности проекта, необходимости демонтажа старых конструкций, расходов монтажной пены, типа и особенностей здания (кирпичное, панельное). 
            </p>
            
            <h2 class="title-post">Как заменить металлопластиковые окна</h2>
            <p class="text-custom-page">Установка пластиковых окон в Белой Церкви производится в следующем порядке:
            </p>
            <ol style="margin-left: 50px">
                <li>                Заказ. Заказчик оставляет заявку на сайте или менеджеру компании. Представитель «Windows Group» уточняет все нюансы и связывается с клиентом, чтобы помочь в подборе и ответить на все интересующие вопросы.<br></li>
                <li>                Замеры. Наш замерщик выезжает на объект, чтобы измерить проемы. Зная размеры и количество оконных/дверных блоков, можно рассчитать предварительную стоимость металлопластиковых окон.<br></li>
                <li>                Выбор цвета и оформление проекта. Дизайнер «Windows Group» поможет определиться с расцветкой окон и дверей, если ПВХ-конструкция должна вписаться в интерьер помещения. Благодаря ламинации пластиковые системы могут быть не только классической расцветки (белые, коричневые), но и более оригинальных цветов. Все зависит от вашей фантазии.<br></li>
                <li>                Выполнение заказа. Чтобы услуга обошлась клиенту недорого, но при этом заказчик получил качественное и надежное пластиковое окно, мы используем производственные мощности собственного завода для изготовления ПВХ-конструкций. В среднем на реализацию одного проекта уходит не более 2-3 дней. Также мы предлагаем металлопластиковые окна от ведущих производителей Германии, Швейцарии и других стран Европы. «Windows Group» является одним из крупнейших в Украине изготовителей оконных и дверных блоков.<br></li>
                <li>               Доставка и установка окон ПВХ. День и время монтажа обязательно согласовывается с клиентом. При необходимости наши специалисты сделают откосы.</li>
            </ol>
            <p class="text-custom-page">При установке ПВХ конструкций под ключ «Windows Group» предоставляет гарантию не менее 10 лет на все изделия и 5 лет – на работы.</p>

            <h2 class="title-post">Виды окон ПВХ на балкон или в комнату</h2>
            <p class="text-custom-page">Чтобы купить пластиковые окна на балкон или в комнату, которые будут соответствовать вашим ожиданиям и требованиям, определитесь со следующими параметрами:
            </p>
            <ol style="margin-left: 50px">
                <li>                Механизм открытия. Может быть традиционным поворотным, откидным или поворотно-откидным.<br></li>
                <li>                Тип оконного профиля. Класс А, В или С – от этого зависит прочность. Если нужно заменить окна в жилом помещении, выбирайте изделия категории А.<br></li>
                <li>                Количество створок. Одна, две или три.</li>
            </ol>
            <p class="text-custom-page">
                Мы поможем не только установить окна, но и выполнить остекление коттеджей, фасадов, террас. 
            </p>

            <h2 class="title-post">Причины заказать остекление в Белой Церкви в «Windows Group»</h2>
            <p class="text-custom-page">
                Почему стоит <a target="_blank" href="<?=get_bloginfo('home')?>">заказать металлопластиковые окна в Киеве</a> или другом близлежащем городе, воспользовавшись услугами «Windows Group»: 
            </p>
            <ol style="margin-left: 50px">
                <li>                Надежность. Наши ПВХ-конструкции характеризуются устойчивостью к сильному ветру и другим внешним нагрузкам. При этом они значительно дешевле, чем у конкурентов.<br></li>
                <li>                Стоимость. Мы занимаемся не только продажами, но и изготовлением ПВХ-конструкции, поэтому у нас можно недорого купить металлопластиковые окна, не переплачивая посредникам. «Windows Group» работает напрямую с немецкими и другими европейскими брендами, поэтому мы предлагаем профили Rehau по ценам производителей.<br></li>
                <li>                Большой выбор. В продаже представлены разные виды ПВХ-конструкций для решения любых задач. У нас можно приобрести глухие, раздвижные и распашные изделия, теплые стеклопакеты, заполненные аргоном, криптоном, сушеным воздухом. Мы предлагаем заказать металлопластиковые окна с разными уровнями звукоизоляции – для окраин города, для домов, расположенных рядом с городскими, шоссейными дорогами или автомагистралями.<br></li>
                <li>                Выгодные условия сотрудничества. Сотрудничая с нами, вы получаете бесплатный расчет стоимости проекта, возможность покупки окон в рассрочку под 0%, а для постоянных клиентов предусматриваются скидки.</li>
            </ol>
            <p class="text-custom-page">
                Срок эксплуатации ПВХ-конструкций зависит от ряда факторов, среди которых интенсивность использования, качество фурнитуры, своевременность обслуживания. При должном уходе изделия прослужат не менее 20 лет. Чтобы уточнить цены на пластиковые окна с завода, определитесь с типом профиля и свяжитесь с оператором.  
            </p>       
        </div>
    </section> <!-- section-post-windows -->

    <section class="block-portfolio m-0">
        <div class="container">
            <h2 class="title-section my-3 my-lg-4">Наши Работы</h2>
            <ul class="slider-portfolio-present">
                <li>
                    <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/pvh-okna-project-1.jpg" class="img-fluid" alt="photo-product1"></a>
                    <div class="footer-item-catalog">
                        <div class="price"><span class="text">Стоимость от</span> <span>35 870</span> <span class="text">грн</span></div>
                    </div>
                    <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
                </li>
                <li>
                    <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/pvh-okna-project-2.jpg" class="img-fluid" alt="photo-product1"></a>
                    <div class="footer-item-catalog">
                        <div class="price"><span class="text">Стоимость от</span> <span>12 765</span> <span class="text">грн</span></div>
                    </div>
                    <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
                </li>
                <li>
                    <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/pvh-okna-project-3.jpg" class="img-fluid" alt="photo-product1"></a>
                    <div class="footer-item-catalog">
                        <div class="price"><span class="text">Стоимость от</span> <span>34 520</span> <span class="text">грн</span></div>
                    </div>
                    <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
                </li>
                <li>
                    <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/pvh-okna-project-4.jpg" class="img-fluid" alt="photo-product1"></a>
                    <div class="footer-item-catalog">
                        <div class="price"><span class="text">Стоимость от</span> <span>22 660</span> <span class="text">грн</span></div>
                    </div>
                    <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
                </li>
                <li>
                    <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/pvh-okna-project-5.jpg" class="img-fluid" alt="photo-product1"></a>
                    <div class="footer-item-catalog">
                        <div class="price"><span class="text">Стоимость от</span> <span>12 890</span> <span class="text">грн</span></div>
                    </div>
                    <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
                </li>
                <li>
                    <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/pvh-okna-project-6.jpg" class="img-fluid" alt="photo-product1"></a>
                    <div class="footer-item-catalog">
                        <div class="price"><span class="text">Стоимость от</span> <span>19 870</span> <span class="text">грн</span></div>
                    </div>
                    <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
                </li>
            </ul>
            <button class="btn btn-portfolio">Показать Все Работы</button>
        </div>
    </section>
    <!-- block-portfolio -->
    
    <section class="section-other-type-windows">
        <div class="container">
            <h2 class="title-section">Ищите Другие Окна?</h2>
            <ul class="list-other-type-windows">
                <li class="item-other-type-windows"><img src="<?php bloginfo('template_url') ?>/images/metalloplastikovye-okna-na-balkon.7e6bd63c.jpg" class="img-fluid" alt="photo"> <a href="<?=get_bloginfo('home')?>/plastikovye-okna/na-balkon/" class="title-footer">На Балкон</a></li>
                <li class="item-other-type-windows"><img src="<?php bloginfo('template_url') ?>/images/panoramnye-okna.afd86d19.jpg" class="img-fluid" alt="photo"> <a href="<?=get_bloginfo('home')?>/plastikovye-okna/panoramnye/" class="title-footer">Панорамные</a></li>
                <li class="item-other-type-windows"><img src="<?php bloginfo('template_url') ?>/images/razdvizhnye-okna.34136da0.jpg" class="img-fluid" alt="photo"> <a href="<?=get_bloginfo('home')?>/plastikovye-okna/razdvizhnye/" class="title-footer">Раздвижные</a></li>
                <!-- <li class="item-other-type-windows"><img src="<?php bloginfo('template_url') ?>/images/francuzskie-okna.4a110c15.jpg" class="img-fluid" alt="photo"> <a href="<?=get_bloginfo('home')?>/plastikovye-okna/francuzkie" class="title-footer">Французские</a></li>
                <li class="item-other-type-windows"><img src="<?php bloginfo('template_url') ?>/images/energosberegayushchie-okna.a738415d.jpg" class="img-fluid" alt="photo"> <a href="<?=get_bloginfo('home')?>/plastikovye-okna/energosberegayushchie" class="title-footer">Энергосберегающие</a></li>
                <li class="item-other-type-windows"><a href="<?=get_bloginfo('home')?>/okna/plastikovye-okna/vse-okna" class="icon-button"></a> <a href="<?=get_bloginfo('home')?>/okna/plastikovye-okna/vse-okna" class="title-button">Показать всё</a></li> -->
            </ul>
        </div>
    </section> <!-- section-other-type-windows -->

    <a id="button"></a>
</div>

<?php
get_footer();
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package windowsgroup
 */

get_header();
?>

<div class="main">
    <section class="section-welcome">
        <div class="text-welcome">
            <div class="container">
                <div class="block-text">
                    <h1>Окна пластиковые от производителя Windows Group</h1>
                    <span>Производство, продажа, монтаж и обслуживание с гарантией от производителя</span>
                </div>
            </div>
        </div>
    </section>
    <section class="section-catalog">
        <div class="container">
            <span class="title-section">Наш Аcсортимент</span>
            <ul class="list-item-catalog">
                <li class="item-catalog">
                    <div class="block-item-catalog">
                        <div class="header-item-catalog">Окна</div>
                        <a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-catalog-1.40158fb8.png" class="img-fluid" alt="photo-product1"></a>
                        <div class="footer-item-catalog">
                            <div class="price"><span class="text">от</span> <span>887</span> <span class="text">грн</span></div>
                            <a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="btn btn-success btn-href">Подробнее</a>
                        </div>
                    </div>
                </li>
                <li class="item-catalog">
                    <div class="block-item-catalog">
                        <div class="header-item-catalog">Двери</div>
                        <a href="<?=get_bloginfo('home')?>/plastikovye-dveri/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-catalog-2.bf66a674.png" class="img-fluid" alt="photo-product1"></a>
                        <div class="footer-item-catalog">
                            <div class="price"><span class="text">от</span> <span>2838</span> <span class="text">грн</span></div>
                            <a href="<?=get_bloginfo('home')?>/plastikovye-dveri/" class="btn btn-success btn-href">Подробнее</a>
                        </div>
                    </div>
                </li>
                <li class="item-catalog">
                    <div class="block-item-catalog">
                        <div class="header-item-catalog">Балконы</div>
                        <a href="<?=get_bloginfo('home')?>/balkony-pod-klyuch/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-catalog-3.aa18a276.png" class="img-fluid" alt="photo-product1"></a>
                        <div class="footer-item-catalog">
                            <div class="price"><span class="text">от</span> <span>6308</span> <span class="text">грн</span></div>
                            <a href="<?=get_bloginfo('home')?>/balkony-pod-klyuch/" class="btn btn-success btn-href">Подробнее</a>
                        </div>
                    </div>
                </li>
                <li class="item-catalog">
                    <div class="block-item-catalog">
                        <div class="header-item-catalog">Перегородки</div>
                        <a href="<?=get_bloginfo('home')?>/peregorodki/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-catalog-4.8582bcb1.png" class="img-fluid" alt="photo-product1"></a>
                        <div class="footer-item-catalog">
                            <div class="price"><span class="text">от</span> <span>1600</span> <span class="text">грн</span></div>
                            <a href="<?=get_bloginfo('home')?>/peregorodki/" class="btn btn-success btn-href">Подробнее</a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="list-item-brand slider-brand">
                <div class="item-brand"><a href="<?=get_bloginfo('home')?>/okna/windoffs/"><img src="<?php bloginfo('template_url') ?>/images/windoffs.41de5fc4.svg" class="img-fluid" alt="photo-product1"></a></div>
                <div class="item-brand"><a href="<?=get_bloginfo('home')?>/okna/wds/"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo.3e9b6e17.svg" class="img-fluid" alt="photo-product1"></a></div>
                <div class="item-brand"><a href="<?=get_bloginfo('home')?>/okna/rehau/"><img src="<?php bloginfo('template_url') ?>/images/rehau.8abc1511.png" class="img-fluid" alt="photo-product1"></a></div>
                <div class="item-brand"><a href="<?=get_bloginfo('home')?>/okna/veka/"><img src="<?php bloginfo('template_url') ?>/images/veka.26ae57c6.svg" class="img-fluid" alt="photo-product1"></a></div>
                <div class="item-brand"><a href="<?=get_bloginfo('home')?>/okna/viknaland/"><img src="<?php bloginfo('template_url') ?>/images/viknaland.ac93056f.png" class="img-fluid" alt="photo-product1"></a></div>
                <div class="item-brand"><a href="<?=get_bloginfo('home')?>/okna/openteck/"><img src="<?php bloginfo('template_url') ?>/images/openteck.f73090ab.png" class="img-fluid" alt="photo-product1"></a></div>
                <div class="item-brand"><a href="<?=get_bloginfo('home')?>/okna/aluplast/"><img src="<?php bloginfo('template_url') ?>/images/aluplast.1af5a588.png" class="img-fluid" alt="photo-product1"></a></div>
                <div class="item-brand"><a href="<?=get_bloginfo('home')?>/okna/salamander/"><img src="<?php bloginfo('template_url') ?>/images/salamander.106f6dce.png" class="img-fluid" alt="photo-product1"></a></div>
                <div class="item-brand"><a href="<?=get_bloginfo('home')?>/okna/kbe/"><img src="<?php bloginfo('template_url') ?>/images/KBE.1cfb4e0f.png" class="img-fluid" alt="photo-product1"></a></div>
            </div>
        </div>
    </section>
    <section class="section-preference">
        <div class="container">
            <span class="title-section">Наши Преимущества</span>
            <ul class="list-preference">
                <li>
                    <div class="block">
                        <i class="icon icon-block icon-factory"></i> <span class="title">Без посредника</span>
                        <p>Мы один из крупнейших заводов производителей металлопластиковых окон и дверей в Украине</p>
                    </div>
                </li>
                <li class="li-preference-small">
                    <div class="block">
                        <i class="icon icon-block icon-graphic"></i> <span class="title">Опыт</span>
                        <p class="px-2">Работаем на рынке уже более 20 лет</p>
                    </div>
                </li>
                <li class="li-preference-small">
                    <div class="block">
                        <i class="icon icon-block icon-shield"></i> <span class="title">Гарантия</span>
                        <p>Даем гарантию более 10 лет на изделия и 5 лет на работы</p>
                    </div>
                </li>
                <li class="li-preference-small">
                    <div class="block">
                        <i class="icon icon-block icon-like"></i> <span class="title">Доверие</span>
                        <p>102788 довольных<br/>клиентов</p>
                    </div>
                </li>
                <li class="li-preference-small">
                    <div class="block">
                        <i class="icon icon-block icon-rocket-write"></i> <span class="title">Скорость</span>
                        <p>Среднее время выполнения заказа 2-3 рабочих дня</p>
                    </div>
                </li>
                <li>
                    <div class="block">
                        <i class="icon icon-block icon-payment-2"></i> <span class="title">Гибкая система оплат</span>
                        <p>Платите как вам удобно! Оплачивайте сразу или в рассрочку под 0%</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="section-about-us">
        <div class="container">
            <div class="info-about-us">
                <span class="title-section">О Нашей Компании</span>
                <p class="mb-0">
                    Компания «Windows Group» занимает лидирующую позицию на украинском рынке по производству металлопластиковых дверей и окон. Мы изготавливаем продукцию на инновационном и мощном оборудовании «ELUMATEC», «SHIRMER», «STURTZ», «URBAN».
                </p>
                <p>
                    Оборудование и производительные мощности компании, позволяют изготавливать оконные и дверные конструкции в объеме 100 изделий за смену. Мы выполняем архитектурные задачи, учитывая особенности климатических зон.
                </p>
                <p>Наши приоритеты – изготовление окон ПВХ по европейским стандартам
                    Продукция компании «Windows Group» полностью соответствует нормам и требованиям современного сегмента по изготовлению дверей и окон.</p>
            </div>
            <div class="form">
                <span class="title-form">Оставьте заявку на консультацию менеджера</span>
                <form class="call-back-form">
                    <div class="form-group"><label for="exampleInputName"><input class="form-control" name="your-name" id="exampleInputName" placeholder="Ваше имя*"></label></div>
                    <div class="form-group"><label for="exampleInputPhone"><input class="form-control" name="tel-460" id="exampleInputPhone" placeholder="Телефон*"></label></div>
                    <div class="form-group"><label for="exampleFormControlTextarea1"><textarea class="form-control" name="your-message" id="exampleFormControlTextarea1" rows="3" placeholder="Комментарий"></textarea></label></div>
                    <button type="submit" class="btn btn-success">Получить консультацию</button>
                </form>
                <p class="mt-2 text-form">Экономьте время, звоните прямо сейчас!</p>
                <a href="tel:0800211052" class="phone">0 800 211 052 </a><span class="text-bottom">Бесплатные звонки по всей территории Украины</span>
            </div>
        </div>
    </section>
    <section class="section-scheme-works">
        <div class="container">
            <span class="title-section">Схема Работы</span>
            <ul class="list-scheme-works d-md-none">
                <li class="">
                    <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
                    <span class="title">Заявка</span>
                    <p>Позвоните нам или оставьте заявку на сайте</p>
                </li>
                <li class="">
                    <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
                    <span class="title">Замер</span>
                    <p>Договоримся о замере на удобную для вас дату и время</p>
                </li>
                <li class="">
                    <div class="block-scheme-works"><i class="icon-scheme-works calculation"></i> <span class="number-scheme-works">3</span></div>
                    <span class="title">Просчёт Стоимости</span>
                    <p>Наш специалист просчитает стоимость заказа с учётом всех ваших индивидуальных пожеланий</p>
                </li>
                <li class="">
                    <div class="block-scheme-works"><i class="icon-scheme-works payment"></i> <span class="number-scheme-works">4</span></div>
                    <span class="title">Договор и Предоплата</span>
                    <p>Заключим с вами договор</p>
                </li>
                <li class="">
                    <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">5</span></div>
                    <span class="title">Выполнение Заказа</span>
                    <p>Обычно выполнение заказа занимает 2-3 рабочих дня</p>
                </li>
                <li class="">
                    <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">6</span></div>
                    <span class="title">Доставка И Установка</span>
                    <p>Заранее сообщим о готовности заказа и согласуем удобное для вас время доставки и монтажа</p>
                </li>
                <li class="">
                    <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">6</span></div>
                    <span class="title">Гарантия</span>
                    <p>Дадим гарантию более 10 лет на изделия и 5 лет на работы</p>
                </li>
            </ul>
            <ul class="list-scheme-works-lg d-none d-md-flex">
                <li class="">
                    <span class="title">Заявка</span>
                    <p>Позвоните нам или оставьте заявку на сайте</p>
                    <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
                </li>
                <li class="">
                    <span class="title">Просчёт Стоимости</span>
                    <p>Наш специалист просчитает стоимость заказа с учётом всех ваших индивидуальных пожеланий</p>
                    <div class="block-scheme-works"><i class="icon-scheme-works calculation"></i> <span class="number-scheme-works">3</span></div>
                </li>
                <li class="">
                    <span class="title">Выполнение Заказа</span>
                    <p>Обычно выполнение заказа занимает 2-3 рабочих дня</p>
                    <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">5</span></div>
                </li>
                <li class="">
                    <span class="title">Гарантия</span>
                    <p>Дадим гарантию более 10 лет на изделия и 5 лет на работы</p>
                    <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">7</span></div>
                </li>
                <li class="">
                    <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
                    <span class="title">Замер</span>
                    <p>Договоримся о замере на удобную для вас дату и время</p>
                </li>
                <li class="">
                    <div class="block-scheme-works"><i class="icon-scheme-works payment"></i> <span class="number-scheme-works">4</span></div>
                    <span class="title">Договор и Предоплата</span>
                    <p class="px-5">Заключим с вами договор</p>
                </li>
                <li class="">
                    <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">6</span></div>
                    <span class="title">Доставка и Установка</span>
                    <p>Заранее сообщим о готовности заказа и согласуем удобное для вас время доставки и монтажа</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="section-calculator">
        <div class="container">
            <h2 class="title-section">Оконный Калькулятор</h2>
            <!--<form class="form-calculator">-->
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
            <!--</form>-->
        </div>
    </section>
    <section class="section-sample">
        <div class="container">
            <div class="form">
                <span class="title-form">ОСТАВЬТЕ ЗАЯВКУ НА БЕСПЛАТНЫЙ ЗАМЕР</span>
                <form class="free-measurement-form">
                    <div class="form-group"><label for="exampleInputName4"><input class="form-control" id="exampleInputName4" name="your-name" placeholder="Ваше имя*"></label></div>
                    <div class="form-group"><label for="exampleInputPhone4"><input class="form-control" id="exampleInputPhone4" name="tel-460" placeholder="Телефон*"></label></div>
                    <div class="form-group"><label for="exampleFormControlTextarea2"><textarea class="form-control" id="exampleFormControlTextarea2" name="your-message" rows="3" placeholder="Комментарий"></textarea></label></div>
                    <button type="submit" class="btn btn-success">Отправить</button>
                </form>
            </div>
        </div>
        <div class="border-footer"></div>
    </section>
    <section class="section-post">
        <div class="container">
            <span class="title-section">Наши Преимущества</span>
            <p>Наша компания для клиентов предоставляет следующие преимущества:</p>
            <ol>
                <li>Производство профильной системы осуществляется по усовершенствованным европейским стандартам и сертифицированным нормам качества.</li>
                <li>Предлагаются окна ПВХ от производителя с соблюдением всех требований ДСТУ.</li>
                <li>Контроль качества оконных конструкций проводится непрерывно на всех производственных этапах.</li>
                <li>В качестве крепежа используется оригинальная фурнитура.</li>
                <li>Покупатель может самостоятельно выбирать различные варианты для отделки и дизайна оконной конструкции.</li>
            </ol>
            <p>Мы выполняем свои обязанности по замеру, заказу и установке окон в срок. На все металлопластиковые изделия предоставляется обязательная гарантия.</p>
        </div>
    </section>
    <section class="section-img">
        <div class="container">
            <div class="block-imgs">
                <div class="block-1">
                    <span class="title-img">Окна сейчас,<br/>деньги - <span class="green-color px-2">потом</span></span>
                    <p class="mt-2">Удивительно <span class="green-color px-2">выгодная</span> рассрочка</p>
                    <ul class="list-percent">
                        <li class="percent-1">Первый взнос</li>
                        <li class="percent-1">Переплат</li>
                        <li class="percent-10">Месяцев</li>
                    </ul>
                </div>
                <div class="block-2 d-none d-md-block"><img src="<?php bloginfo('template_url') ?>/images/house.f3d12710.png" class="img-fluid" alt="photo"></div>
                <div class="block-3">
                    <div class="block-pref">
                        <span class="header-pref">Экономьте до -35%</span>
                        <div class="body-pref">
                            <ul>
                                <li class="icon decor-li-pref">"Тепла Оселя"</li>
                                <li class="icon decor-li-pref">"Теплі Кредити"</li>
                            </ul>
                            <div class="ml-3 block-bank">
                                <span class="icon ukrgaz-pref"></span> <span class="py-2 icon privat-pref"></span>
                                <div class="d-flex"><span class="w-50 icon pref-exim"></span> <span class="w-50 icon pref-ochad"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center"><a href="<?=get_bloginfo('home')?>/okna-v-rassrochku-i-kredit/" class="btn btn-success mt-0 btn-href-2">Подробнее</a></div>
        </div>
    </section>
    <section class="section-post section-post-credit">
        <div class="container">
            <span class="title-section">Окна Сейчас – Деньги Потом!</span>
            <p class="mb-1">
                Распространенная проблема – ремонт начат, а денег не хватает. Теперь это не проблема. Приобрести оконные конструкции можно рассрочку без хождения
                по банкам. </p>
            <p class="mb-1">Наша компания «Виндовс Груп» предлагает купить окна в кредит и или рассрочку в Киеве и области.
                В ассортименте фирмы представлены популярные современные модели евроокон от ведущих производителей по доступным ценам.</p>
        </div>
    </section>
    <section class="section-post bg-last-post">
        <div class="container">
            <h2 class="title-section">Лучшие Цены у Нас</h2>
            <p>На рынке представлены множество предложений по приобретению окон. Стоимость на изделия у поставщиков существенно зависит от многих сопутствующих факторов. Среди них одним из важных критериев является цена на расходы по изготовлению, комплектации и транспортировке.</p>
            <p>Наша компания предлагает купить пластиковые окна с завода по привлекательной цене. Покупка металлопрофильных конструкций напрямую от производителя менее затратна за счет объема выпускаемой продукции.</p>
            <p>Приобрести пластиковые окна от производителя по недорогим ценам– это лучший способ для ремонта в вашей квартире. Наша цель – продать клиенту качественные стеклопакеты из безопасного материала. Мы предлагаем исключительно проверенные решения с учетом пожеланий и предпочтений клиента.</p>
            <h2 class="title-post">Окна ПВХ лучший выбор для остекления</h2>
            <p>Новые оконные конструкции с ПВХ профилем – это неотъемлемая часть любого жилого помещения. Полимерные изделия с антикоррозийным покрытием являются лучшим выбором для остекления зданий. В производстве оконных конструкций используются только экологические компоненты, обеспечивающие важные свойства: светоустойчивость, стойкость к атмосферному воздействию (ветровой защите).</p>
            <p>Стеклопакеты бывают следующих разновидностей: простые, энергосберегающие, противоударные.</p>
            <p>Мы производим одно- двухкамерные конструкции. Комплектация зависит от предпочтений клиента.</p>
            <span>В стеклопакет можно вставить различные типы стекол:</span>
            <ul class="list-decor">
                <li>стандартные;</li>
                <li>энергоэффективные;</li>
                <li>декоративные,</li>
                <li>мультифункциональные;</li>
                <li>бронированные и противоударные;</li>
                <li>рефлекторные с защитой от ультрафиолетовых лучей.</li>
            </ul>
            <p>Воздушные камеры могут заполняться воздухом или инертным газом. Дополнительно стеклопакеты комбинируются специальными элементами для защиты от запотевания, холода и шума.</p>
            <p>Купить окна от производителя Windows Group – значит обезопасить себя и своих близких. ПВХ конструкции являются трудновоспламеняемым и самогасящимся полотном. Использование специальных модификаторов обеспечивает прочность и устойчивость окон при обработке.</p>
            <p>Пластиковые оконные конструкции применяются в абсолютно различных помещениях производственного и общественного типа. Никаких гигиенических требований и ограничений по их применению не имеется.</p>
            <p></p>
            <h2 class="title-post">Как выбрать пластиковые окна</h2>
            <p>Перед тем, как купить пластиковое окно от производителя, необходимо придерживаться следующих рекомендаций:</p>
            <ol>
                <li>Использование энергосберегающих стекол усиливает теплоизоляцию.</li>
                <li>Установка стекол с увеличенной толщиной, разное межстекольное расстояние повышает звукоизоляцию.</li>
                <li>Закаленные стекла и многослойные конструкции (триплекс) обеспечивают противовзломные свойства.</li>
                <li>Солнцезащитные стекла надежно сохранят помещение от солнца.</li>
                <li>Для крепежа обязательно использовать оригинальную сертифицированную фурнитуру.</li>
            </ol>
            <p>Стеклопакеты ПВХ должны соответствовать целому ряду технических требований: обеспечение нормируемого воздухообмена, теплопроводности, звуковой изоляции, защиты от шума и пыли.</p>
            <p>Отзывы довольных клиентов только подтверждают нашу аккуратность и быстроту работы. Мы предлагаем купить окна ПВХ от производителя напрямую без посредников.</p>
            <div class="section-text-img">
                <div class="section-left-img">
                    <span class="title-post">Где заказать пластиковые окна от производителя</span>
                    <p>Только у нас вы можете заказать пластиковые окна от производителя с европейским знаком качества. Купить долговечные изделия от Windows Group легко и просто.</p>
                    <p>Как же происходит процесс покупки:</p>
                    <ol>
                        <li>Сделать звонок или оставить заявку прямо на сайте.</li>
                        <li>Менеджер обязательно свяжется с Вами, чтобы договориться о замере.</li>
                        <li>Обсуждение заказа по предпочтениям клиента.</li>
                        <li>Подсчет цены.</li>
                        <li>Заключение официального договора, возможны различные способы оплаты.</li>
                        <li>Уведомление клиента о готовности заказа.</li>
                        <li>Демонтаж старой оконной конструкции.</li>
                        <li>Установка нового стеклопакета.</li>
                    </ol>
                    <p>Чтобы заказать окна от производителя в Украине, достаточно позвонить по номерам, указанным на нашем сайте. Второй вариант – связаться с нашим консультантом через онлайн чат. Специалисты помогут подобрать оптимальный для Вас вариант.</p>
                    <p>Купить металлопластиковые окна от производителя просто. Достаточно довериться нам и мы воплотим ваши мечты в реальность!</p>
                </div>
                <img src="<?php bloginfo('template_url') ?>/images/img-mens-windows.52eeec11.png" class="img-fluid d-none d-lg-block" alt="photo">
            </div>
        </div>
    </section>
    <a id="button"></a>
</div>

<?php

get_footer();

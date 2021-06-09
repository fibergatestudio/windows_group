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

<div class="main page-partitions-plastic">
   <section class="section-welcome-page bg-partitions-plastic">
      <div class="container">
         <div class="text-welcome">
            <h1>Пластиковые перегородки Киев</h1>
            <span class="text-custom-page"></span>
         </div>
      </div>
   </section>
   <section class="section-top-page">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
         <h2 class="title-post title-post-top">Пластиковые перегородки Киев</h2>
         <p class="text-custom-page">Перегородки из пластика универсальны и устанавливаются для разделения пространства, как в доме, так и в офисе.
             Данные модели популярны при зонировании площади в офисных помещениях.
             Компания «Windows Group» предлагает купить пластиковые перегородки в Киеве и
             Киевской области по лучшим ценам от производителя.</p>

         <?php 
            
            global $wpdb;
            $result_params = $wpdb->get_results("SELECT * FROM `{$wpdb -> prefix}window_prices` WHERE `page_name` = 'peregorodki_plastikovye' ");
            $price_obj = json_decode($result_params[0]->data);
         
         ?>
         
         <div class="">
            <h2 class="title-block">Пластиковые Перегородки</h2>
            <span class="small-text">Цена от <span class="strong-text"><?=$price_obj->plastikovye->min?></span> грн до <span class="strong-text"><?=$price_obj->plastikovye->max?></span> грн за м<sup>2</sup></span>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-tab" data-toggle="tab" href="#wds" role="tab" aria-controls="wds" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="WDS-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-tab" data-toggle="tab" href="#windoffs" role="tab" aria-controls="windoffs" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="windoffs-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-tab" data-toggle="tab" href="#viknaland" role="tab" aria-controls="viknaland" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-tab" data-toggle="tab" href="#rehau" role="tab" aria-controls="rehau" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-tab" data-toggle="tab" href="#salamander" role="tab" aria-controls="salamander" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-tab" data-toggle="tab" href="#kbe" role="tab" aria-controls="kbe" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="kbe-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-tab" data-toggle="tab" href="#opentek" role="tab" aria-controls="opentek" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-tab" data-toggle="tab" href="#veka" role="tab" aria-controls="veka" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-tab" data-toggle="tab" href="#aluplast" role="tab" aria-controls="aluplast" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent">

               <?php 
               $k = 0;
               foreach ($price_obj->plastikovye as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>

               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>" role="tabpanel" aria-labelledby="<?=$key_w?>">
                  <div class="table-tab">
                     <img src="<?php bloginfo('template_url') ?>/images/img-plastic-partitions.e14e556b.jpg" class="img-table-prev img-fluid" alt="photo">
                     <table class="table-windows table-price-windows">
                        <thead>
                           <tr>
                              <td>Профиль</td>
                              <td>Ширина профиля</td>
                              <td>1-камерный стеклопакет</td>
                              <td>2-камерный стеклопакет</td>
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                              <?php
                              $this_obj = $price_obj->plastikovye->$key_w;
                              $j = 0;
                              foreach ($this_obj as $value) {
                                 $j++;
                              }                             
                              $i = 1;
                              foreach ($this_obj as $key => $value) { ?>
                                 <?php
                                 if ($i%4 === 1) {?>
                                    <td class="name"><?=$value?></td>
                                 <?php } else{ ?>
                                    <td><?=$value?></td>
                                 <?php } 
                                 if ($i%4 === 0 && $i < $j) {?>
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
   </section>
   <section class="section-all-plastic-partitions">
      <div class="container">
         <h2 class="title-section">Предлагаем Любые Пластиковые Перегородки</h2>
         <ul class="list-all-plastic-partitions">
            <li class="item-plastic-partitions">
               <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-plastic-partitions-1.b7b2f411.jpg" class="img-fluid" alt="photo"></div>
               <div class="bottom-item"><span>Стеклянные</span></div>
               <p class="text-bottom">Современная и многофункциональная конструкция, улучшающая планировку помещения, сохраняет естественное освещение и подчеркивает дизайн.</p>
            </li>
            <li class="item-plastic-partitions">
               <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-plastic-partitions-2.1c277a9e.jpg" class="img-fluid" alt="photo"></div>
               <div class="bottom-item"><span>Межкомнатные</span></div>
               <p class="text-bottom">Могут быть неподвижными или раздвижными. Легкость и малые габариты позволяют отказаться от дверей.</p>
            </li>
            <li class="item-plastic-partitions">
               <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-plastic-partitions-3.5181288a.jpeg" class="img-fluid" alt="photo"></div>
               <div class="bottom-item"><span>В ванную</span></div>
               <p class="text-bottom">Современный элемент ванной комнаты. Душевые перегородки незаменимы для малых помещений, герметичность и габариты позволяют экономить много места.</p>
            </li>
            <li class="item-plastic-partitions">
               <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-plastic-partitions-4.0a88a079.jpg" class="img-fluid" alt="photo"></div>
               <div class="bottom-item"><span>Раздвижные</span></div>
               <p class="text-bottom">Отличное решение вопроса с зонирование в помещении. Малые вес и габариты позволяют легко заменить двери.</p>
            </li>
            <li class="item-plastic-partitions">
               <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-plastic-partitions-5.b05fe1b6.jpg" class="img-fluid" alt="photo"></div>
               <div class="bottom-item"><span>Мобильные</span></div>
               <p class="text-bottom">Предназначены для оптимизации рабочего пространства. Можно легко передвинуть, разобрать, дополнить новыми модулями.</p>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-group-button">
      <div class="container">
         <ul class="list-button">
            <li><button class="btn btn-call-measurer icon icon-measuring-tape"><span>Вызвать замерщика</span></button></li>
            <li><button class="btn btn-call-me icon icon-mobile-phone"><span>Перезвоните мне</span></button></li>
            <li><button class="btn btn-get-discount icon icon-percentage-discount"><span>Получить скидку</span></button></li>
         </ul>
      </div>
   </section>
   <section class="section-lamination">
      <div class="container">
         <h2 class="title-section">Ламинация</h2>
         <div class="block-info-lamination">
            <img src="<?php bloginfo('template_url') ?>/images/laminatsiya-okon_partitions.cb5ec94a.webp" class="img-title img-fluid" alt="photo">
            <div class="block-slider-lamination text-center text-lg-left">
               <p>Ламинация позволяет изготавливать окна любого цвета и разной фактуры. Покрыт ламинированной пленкой пластик может имитировать такие природные материалы, как дерево и камень. Срок службы такого профиля увеличивается по сравнению с традиционным белым профилем.</p>
               <ul class="slider-color-lamination">
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination.5afeabac.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-2.a6836dae.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-3.dc56a163.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-4.9be54ad0.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-5.a5490eef.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination6.0243023e.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination.5afeabac.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-2.a6836dae.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-3.dc56a163.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-4.9be54ad0.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-5.a5490eef.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination6.0243023e.png" class="img-fluid" alt="photo"></li>
               </ul>
               <button class="btn btn-more">Подробнее</button>
            </div>
         </div>
      </div>
   </section>
   <section class="section-like-type">
      <div class="container">
         <h2 class="title-section">Преимущества Металопластиковых Перегородок</h2>
         <div class="block-like-type">
            <ul class="list-scheme-works">
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works colors"></i></div>
                  <div>
                     <span class="title">Стиль</span>
                     <p>Возможность заказать перегородку в любом цвете и формы</p>
                  </div>
               </li>
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works sign"></i></div>
                  <div>
                     <span class="title">Надежность и долговечность</span>
                     <p>Пластиковые перегородки отслужат более 20 лет без потери физических и визуальных характеристик</p>
                  </div>
               </li>
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works bigS"></i></div>
                  <div>
                     <span class="title">Удобство и комфорт</span>
                     <p>Самый простой и удобный способ разделить пространство внутри помещения</p>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </section>
   <section class="section-form-page-windows">
      <div class="container d-md-flex">
         <div class="block-form-page-windows">
            <span class="title-section">ОСТАВЬТЕ ЗАЯВКУ НА БЕСПЛАТНЫЙ ЗАМЕР</span>
            <form class="form-page-windows free-measurement-form">
               <div class="form-group"><label for="exampleInputName"><input name="your-name" class="form-control" id="exampleInputName" placeholder="Ваше имя*"></label></div>
               <div class="form-group"><label for="exampleInputPhone"><input name="tel-460" class="form-control" id="exampleInputPhone" placeholder="Телефон*"></label></div>
               <button type="submit" class="mt-2 btn btn-more">Отправить</button>
            </form>
         </div>
         <img src="<?php bloginfo('template_url') ?>/images/img-form-windows.73b593aa.jpg" class="img-form img-fluid" alt="photo">
      </div>
   </section>
   <section class="section-scheme-works windowsill page-partitions-plastic">
      <div class="container">
         <h2 class="title-section">Схема Работы</h2>
         <ul class="list-scheme-works partitions d-lg-none">
            <li class="mb-2">
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
               <span class="title">Заявка</span>
               <p class="pb-2">Позвоните нам или оставьте заявку на сайте</p>
            </li>
            <li class="mb-2">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title">Замер</span>
               <p>Согласуем удобную для вас дату и время для замера</p>
            </li>
            <li class="mb-4">
               <div class="block-scheme-works"><i class="icon-scheme-works icon-monitor"></i> <span class="number-scheme-works">3</span></div>
               <span class="title">Моделирование и визуализация</span>
               <p>Наш дизайнер смоделирует и визуализирует перегородку в вашем помещении</p>
            </li>
            <li class="mb-4">
               <div class="block-scheme-works"><i class="icon-scheme-works calculation"></i> <span class="number-scheme-works">4</span></div>
               <span class="title">Просчет стоимости и заключение договора</span>
               <p>Просчитаем стоимость и заключим с вами договор</p>
            </li>
            <li class="mb-2">
               <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">5</span></div>
               <span class="title">Выполнение заказа</span>
               <p>Обычно для выполнения заказа требуется 3-5 рабочих дней</p>
            </li>
            <li class="mb-2">
               <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">6</span></div>
               <span class="title">Доставка и установка</span>
               <p>Мы заранее сообщим о готовности вашей перегородки и согласуем удобную для вас дату доставки и монтажа</p>
            </li>
         </ul>
         <ul class="list-scheme-works-lg windowsill d-none d-lg-flex">
            <li class="">
               <span class="title">Заявка</span>
               <p class="pb-2">Позвоните нам или оставьте заявку на сайте</p>
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title mt-3">Замер</span>
               <p>Согласуем удобную для вас дату и время для замера</p>
            </li>
            <li class="">
               <span class="title">Моделирование и визуализация</span>
               <p>Наш дизайнер смоделирует и визуализирует перегородку в вашем помещении</p>
               <div class="block-scheme-works"><i class="icon-scheme-works icon-monitor"></i> <span class="number-scheme-works">3</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works calculation"></i> <span class="number-scheme-works">4</span></div>
               <span class="title mt-3">Просчет стоимости и заключение договора</span>
               <p>Просчитаем стоимость и заключим с вами договор</p>
            </li>
            <li class="">
               <span class="title">Выполнение заказа</span>
               <p>Обычно для выполнения заказа требуется 3-5 рабочих дней</p>
               <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">5</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">6</span></div>
               <span class="title mt-3">Доставка и установка</span>
               <p>Мы заранее сообщим о готовности вашей перегородки и согласуем удобную для вас дату доставки и монтажа</p>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-preference">
      <div class="container">
         <h2 class="title-section">Наши Преимущества</h2>
         <ul class="list-preference">
            <li class="">
               <div class="block">
                  <i class="icon icon-block icon-factory"></i> <span class="title">Без посредника</span>
                  <p>Мы один из крупнейших заводов производителей металлопластиковых конструкций в Украине</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-graphic"></i> <span class="title">Опыт</span>
                  <p>Работаем на рынке уже более 20 лет</p>
               </div>
            </li>
            <li class="">
               <div class="block">
                  <i class="icon icon-block icon-shield"></i> <span class="title">Гарантия</span>
                  <p class="mx-3">Даем гарантию более 10 лет на изделия и 5 лет на работы</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-like"></i> <span class="title">Доверие</span>
                  <p>18177 Довольных<br/>клиентов</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-rocket-write"></i> <span class="title">Скорость</span>
                  <p>Среднее время выполнения заказа 3-5 рабочих дней</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-payment-2"></i> <span class="title">Гибкая система оплат</span>
                  <p>Платите как вам удобно! Оплачивайте сразу или в рассрочку под 0%</p>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <section class="block-portfolio mb-0">
      <div class="container">
         <h2 class="title-section mb-3 mb-lg-4">Наши Работы</h2>
         <ul class="slider-portfolio-present">
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-glass-partitions.1a194017.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>41 600</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-glass-partitions-2.d6bbbd33.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>32 900</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-glass-partitions-3.40c216c7.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>29 890</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-page-partitions-plastic-2.4f811209.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>99 300</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-page-partitions-plastic-3.d269badd.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>24 900</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-page-partitions-plastic.6897dc2f.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>98 600</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
         </ul>
         <button class="btn btn-portfolio">Показать Все Работы</button>
      </div>
   </section>
   <section class="section-post section-post-windows section-other-type-windows">
      <div class="container">
         <h2 class="title-section pt-4">Купить пластиковые перегородки в Киеве</h2>
         <div class="text-custom-page">
            <p>Пластиковые перегородки представляют собой приспособления из профиля ПВХ. Конструкции представлены в виде глухой сэндвич панели, с частичным остеклением полотна.</p>
            <p>Перегородки из пластика по типу конструкции бывают:</p>
            <ol>
               <li>Складные – модели с верхней направляющей для открывания-закрывания. Конструкции состоят из трех и более элементов с шириной 60-150 см, функционируют по принципу «книжки» или «гармошки».</li>
               <li>Трансформеры – тип изделий, перемещающихся по верхней направляющей планке вдоль стены или ниши. Установка створок осуществляется перпендикулярно планке.</li>
               <li>Подвесные – модели оснащаются только верхней направляющей без нижних механизмов. Варианты крепления следующие: прикрепление к потолку, врезание в потолок или монтаж в стене над проемом.</li>
               <li>Настольные – легкие и низкие разделители, применяющиеся в офисах на больших столах.</li>
            </ol>
            <p>Дополнительно пластиковые перекрытия оснащаются металлическим каркасом. Армированная технология делает конструкцию жесткой и прочной, увеличивая звукоизоляцию приспособления.</p>
            <h2 class="title-post">Как правильно выбрать</h2>
            <p>При выборе пластиковых перегородок для дома или офиса следует учитывать рекомендации:</p>
            <ol>
               <li>По функциональному назначению перекрытия из пластика бывают прозрачными, матовыми или цветными.</li>
               <li>Для улучшенной шумо- и звукозащиты используются изделия, изготовленные из 3-5 камерного профиля.</li>
               <li>Перекрытия из пластика идеально подходят в качестве создания отдельного помещения для снижения теплопотери между входом и помещением.</li>
            </ol>
            <p>Перед заказом изделия нужно правильно замерить проем. Самостоятельные замеры не всегда точные, поэтому мы рекомендуем для измерений вызвать наших специалистов.</p>
            <h2 class="title-post">Преимущества</h2>
            <p>Металлопластиковые перегородки обладают несколькими преимуществами:</p>
            <ul>
               <li>· сохранением освещения;</li>
               <li>· отличной звукоизоляцией;</li>
               <li>· высокой прочностью;</li>
               <li>· доступной стоимостью.</li>
            </ul>
            <p>Пластиковые стенки изготавливаются не только в традиционном белом цвете, но и в других палитрах с рисунками и узорами.</p>
            <h2 class="title-post">Стоимость</h2>
            <p>Цена металлопластиковых перегородок зависит от ряда факторов:</p>
            <ul>
               <li>· количества и размера секций;</li>
               <li>· вида профиля;</li>
               <li>· фурнитуры;</li>
               <li>· декора.</li>
            </ul>
            <p>Наша компания «Виндовс Груп» предлагает заказать перегородки из пластика в Украине по выгодной стоимости. Узнать цены на изделия можно на сайте в прайсе или, позвонив по телефону.</p>
         </div>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();
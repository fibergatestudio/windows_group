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

<div class="main page-windowsill brand kraft">
   <section class="section-welcome-page bg-welcome-page-windowsill">
      <div class="container">
         <div class="text-welcome">
            <img src="<?php bloginfo('template_url') ?>/images/logo-craft.7ce7e858.svg" class="img-brand img-fluid" alt="brand">
            <h1>Подоконники Kraft</h1>
         </div>
      </div>
   </section>
   <section class="section-top-page-windowsill">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
         <h2 class="title-post-top title-post-top text-center">Купить подоконники Крафт в Киеве</h2>
         <p class="text-custom-page">Пластиковые подоконные плиты Крафт являются оптимальным выбором для тех, кто предпочитает недорогие и качественные изделия.
             Наша компания «Виндовс Груп» предлагает купить подоконники Крафт в Киеве и Киевской области по лучшим ценам.</p>
      </div>
   </section>
   <section class="section-type-windowsill">
      <div class="container">
         <h2 class="title-section">Ассортимент Подоконников Kraft</h2>
         <ul class="list-type-windowsill">
            <li class="item-type-windowsill">
               <div class="block">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/kraft-type-1.12e738b8.jpg" class="img-brand img-fluid" alt="product"></div>
                  <h5 class="title-type-windowsill">Антрацит</h5>
                  <span class="article">Код: 034931</span>
                  <p>Глубокий цвет антрацит поможет создать неповторимый утонченный стиль. Текстура поверхности подоконника имитирует древесину.</p>
               </div>
            </li>
            <li class="item-type-windowsill">
               <div class="block">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/kraft-type-2.f0e43568.jpg" class="img-brand img-fluid" alt="product"></div>
                  <h5 class="title-type-windowsill">Белый Матовый</h5>
                  <span class="article">Код: 034931</span>
                  <p>Белый цвет у Крафт отличается матовой, шелковистой, но прочной структурой. Эта модель универсальна для любого помещения и дизайна.</p>
               </div>
            </li>
            <li class="item-type-windowsill">
               <div class="block">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/kraft-type-3.f52f3969.jpg" class="img-brand img-fluid" alt="product"></div>
                  <h5 class="title-type-windowsill">Золотой Дуб</h5>
                  <span class="article">Код: 034931</span>
                  <p>Kraft золотой дуб – это цвет, который будет идеально гармонировать с ламинированными окнами такого же оттенка или ламинатом. </p>
               </div>
            </li>
            <li class="item-type-windowsill">
               <div class="block">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/kraft-type-4.ae9eecdc.jpg" class="img-brand img-fluid" alt="product"></div>
                  <h5 class="title-type-windowsill">Орех</h5>
                  <span class="article">Код: 034931</span>
                  <p>Цвет подоконника орех будет роскошно, но ненавязчиво смотреться в любом помещении. Особенно стильно комбинируется с плиткой такого же оттенка.</p>
               </div>
            </li>
            <li class="item-type-windowsill">
               <div class="block">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/kraft-type-5.3f090b74.jpg" class="img-brand img-fluid" alt="product"></div>
                  <h5 class="title-type-windowsill">Полярный Дуб</h5>
                  <span class="article">Код: 034931</span>
                  <p>Полярный дуб - самый экстравагантный цвет в линейке подоконников Крафт. Выглядит богато, дорого и довольно требователен к подбору интерьера. </p>
               </div>
            </li>
            <li class="item-type-windowsill">
               <div class="block">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/kraft-type-6.d0fa9b3d.jpg" class="img-brand img-fluid" alt="product"></div>
                  <h5 class="title-type-windowsill">Серый</h5>
                  <span class="article">Код: 034931</span>
                  <p>Серый дуб имеет красивую пепельную поверхность, имитирующую структуру дерева. На таком декоре совершенно не видно пыли и загрязнений.</p>
               </div>
            </li>
            <li class="item-type-windowsill">
               <div class="block">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/kraft-type-7.f902c15c.jpg" class="img-brand img-fluid" alt="product"></div>
                  <h5 class="title-type-windowsill">Темный Дуб</h5>
                  <span class="article">Код: 034931</span>
                  <p>Подоконник темный дуб имеет глубокий коричневый цвет с черными прожилками. Отлично впишется в любой дизайн и подчеркнет зону окна.</p>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-price-windowsill">
      <div class="container">
         <h2 class="title-section mb-lg-4">Цены на Подоконники Kraft</h2>
         <table class="table-windows table-price-windowsill colum-2">
            <thead>
               <tr>
                  <td>Ширина</td>
                  <td class="text-center px-2">Цена грн. м.п</td>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>100 мм</td>
                  <td>123</td>
               </tr>
               <tr>
                  <td>150 мм</td>
                  <td>123</td>
               </tr>
               <tr>
                  <td>200 мм</td>
                  <td>123</td>
               </tr>
               <tr>
                  <td>250 мм</td>
                  <td>123</td>
               </tr>
               <tr>
                  <td>300 мм</td>
                  <td>123</td>
               </tr>
               <tr>
                  <td>350 мм</td>
                  <td>123</td>
               </tr>
               <tr>
                  <td>400 мм</td>
                  <td>123</td>
               </tr>
               <tr>
                  <td>450 мм</td>
                  <td>123</td>
               </tr>
               <tr>
                  <td>500 мм</td>
                  <td>123</td>
               </tr>
               <tr>
                  <td>550 мм</td>
                  <td>123</td>
               </tr>
               <tr>
                  <td>600 мм</td>
                  <td>123</td>
               </tr>
               <tr>
                  <td>650 мм</td>
                  <td>123</td>
               </tr>
               <tr>
                  <td>700 мм</td>
                  <td>123</td>
               </tr>
               <tr>
                  <td>Торцевая заглушка 300 мм</td>
                  <td>5</td>
               </tr>
               <tr>
                  <td>Торцевая заглушка 600 мм</td>
                  <td>7</td>
               </tr>
               <tr>
                  <td>Соединитель</td>
                  <td>25</td>
               </tr>
            </tbody>
         </table>
      </div>
   </section>
   <section class="section-form-page-windowsill">
      <div class="container">
         <h2 class="title-section">Заказать Подоконник Kraft</h2>
         <form class="form-windowsill sending-sill">
            <ul class="form-windowsill-wrapper">
               <li class="top-row-wrapper">
                  <div class="form-group"><label for="form-windowsill-1">Укажите ширину подоконника мм</label> <input id="form-windowsill-1" name="width" class="form-control" placeholder="600"></div>
                  <div class="form-group"><label for="form-windowsill-2">Укажите длину подоконника мм</label> <input id="form-windowsill-2" name="length" class="form-control" placeholder="1200"></div>
                  <div class="form-group"><label for="form-windowsill-3">Укажите необходимое количество</label> <input id="form-windowsill-3" name="quantity" class="form-control" placeholder="1"></div>
                  <div class="form-group"><label for="form-windowsill-4">Укажите название модели</label> <input id="form-windowsill-4" name="modelName" class="form-control" placeholder=""></div>
                  <div class="form-collapse-control">
                     <div class="btn-add-type" onclick="addSillForm(this)" data-clone-btn>+</div>
                  </div>
               </li>
               <li class="bottom-row-wrapper">
                  <div class="form-windowsill-description">
                     <div class="form-group"><label for="exampleInputName"></label> <input name="your-name" class="form-control" id="exampleInputName" placeholder="Ваше имя*"></div>
                     <div class="form-group"><label for="exampleInputPhone"></label> <input name="tel-460" class="form-control" id="exampleInputPhone" placeholder="Телефон*"></div>
                     <div class="form-group comment"><label for="exampleFormControlTextarea1"></label> <textarea class="form-control" name="your-message" id="exampleFormControlTextarea1" rows="3" placeholder="Комментарий к заказу"></textarea></div>
                  </div>
               </li>
               <li class="button-wrapper">
                  <div class="form-group"><button type="submit" class="btn btn-custom-project big-form">ОФОРМИТЬ ЗАКАЗ</button></div>
               </li>
            </ul>
         </form>
      </div>
   </section>
   <section class="section-like-type">
      <div class="container">
         <h2 class="title-section mb-4 mb-lg-5">Преимущества Подоконников Kraft</h2>
         <div class="block-like-type">
            <ul class="list-scheme-works">
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works sratch-resistant"></i></div>
                  <div><span class="title px-lg-5">Стойкость к Износу и Царапинам</span></div>
               </li>
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works likes"></i></div>
                  <div><span class="title px-lg-2">Сохранение Первозданного Цвета на Десятилетия</span></div>
               </li>
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works not-fire"></i></div>
                  <div><span class="title px-lg-2">Сильная Устойчивость к Высоким Температурам и Влаге</span></div>
               </li>
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works ecology"></i></div>
                  <div><span class="title">Экологическая Чистота</span></div>
               </li>
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works bucket"></i></div>
                  <div><span class="title">Простота в Уходе</span></div>
               </li>
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works colors"></i></div>
                  <div><span class="title px-lg-3">Широкий Выбор Цветов</span></div>
               </li>
            </ul>
         </div>
      </div>
   </section>
   <section class="section-installation-kiev">
      <div class="block-installation-kiev">
         <div class="container">
            <div class="info-installation-kiev">
               <h2 class="title-section">Замер и Монтаж Подоконников в Киеве и Области</h2>
               <ul>
                  <li class="icon-checkmark-2">Профессиональная установка</li>
                  <li class="icon-checkmark-2">Лучшие специалисты</li>
                  <li class="icon-checkmark-2">Гарантия</li>
               </ul>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">от</span> <span>200</span> <span class="text">грн / м. п.</span></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section-scheme-works roller">
      <div class="container">
         <h2 class="title-section">Как Заказать Подоконник Kraft у Компании WindowsGroup</h2>
         <ul class="list-scheme-works balcone d-md-none">
            <li class="mb-3">
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
               <span class="title">Заявка</span>
               <p>Позвоните нам или оставьте заявку на сайте</p>
            </li>
            <li class="mb-3">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title">Выезд Замерщика</span>
               <p>Договоримся о замере на удобную для вас дату и время или сделайте замер самостоятельно</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works icon-colors"></i> <span class="number-scheme-works">3</span></div>
               <span class="title">Выбор цвета и материала</span>
               <p>Подберем желаемый цвет и тип покрытия</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">4</span></div>
               <span class="title">Выполнение заказа</span>
               <p>Обычно выполнение заказа занимает 1-2 рабочих дня</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">5</span></div>
               <span class="title">Доставка и установка</span>
               <p>Заранее сообщим о готовности вашего заказа. Доставим и установим подоконник или отправим по почте</p>
            </li>
         </ul>
         <ul class="list-scheme-works-lg d-none d-md-flex">
            <li class="">
               <span class="title">Заявка</span>
               <p class="px-5 mx-lg-3">Позвоните нам или оставьте заявку на сайте</p>
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
            </li>
            <li class="">
               <span class="title px-4">Выбор цвета и материала</span>
               <p class="px-2 px-lg-5">Подберем желаемый цвет и тип покрытия</p>
               <div class="block-scheme-works"><i class="icon-scheme-works icon-colors"></i> <span class="number-scheme-works">3</span></div>
            </li>
            <li class="">
               <span class="title">Доставка и установка</span>
               <p class="px-2">Заранее сообщим о готовности вашего заказа. Доставим и установим подоконник или отправим по почте</p>
               <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">5</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title mt-3">Замер</span>
               <p class="px-5">Договоримся о замере на удобную для вас дату и время или сделайте замер самостоятельно</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">4</span></div>
               <span class="title mt-3">Выполнение заказа</span>
               <p class="px-5">Обычно выполнение заказа занимает 1-2 рабочих дня</p>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-all-ukraine">
      <div class="container">
         <h2 class="title-section">Работаем по Всей Территории Украины</h2>
         <div class="block-all-ukraine">
            <img src="<?php bloginfo('template_url') ?>/images/map-ukraine-new.7f39b14f.png" class="d-none d-md-block img-fluid" alt="map">
            <ul>
               <li>
                  <i class="icon-map icon icon-nova_poshta"></i>
                  <p>Нова пошта. Адресная или<br/>в отделение - от 70 грн.</p>
               </li>
               <li>
                  <i class="icon-map icon icon-shipping"></i>
                  <p>Курьерская доставка. Доставка по Киеву курьером - 200 грн.</p>
               </li>
               <li>
                  <i class="icon-map icon icon-delivery"></i>
                  <p>Самовывоз со склада.<br>Бесплатно в любое время</p>
               </li>
            </ul>
         </div>
      </div>
   </section>
   <section class="section-perfect-windowsill">
      <div class="container">
         <div class="">
            <h2 class="title-section">Сделаем для Вас Идеальный Подоконник Kraft</h2>
            <ul class="list-perfect-windowsill">
               <li>
                  <img src="<?php bloginfo('template_url') ?>/images/perfect-windowsill.f354b797.png" class="img-fluid" alt="map">
                  <h6 class="title">Вырез П-образный</h6>
                  <span>150 грн / штука</span>
               </li>
               <li>
                  <img src="<?php bloginfo('template_url') ?>/images/perfect-windowsill-2.8d62d682.png" class="img-fluid" alt="map">
                  <h6 class="title">Вырез под откос</h6>
                  <span>50 грн / сторона</span>
               </li>
               <li>
                  <img src="<?php bloginfo('template_url') ?>/images/perfect-windowsill-3.b43eed3c.png" class="img-fluid" alt="map">
                  <h6 class="title">Подрез капиноса</h6>
                  <span>150 грн / м.п.</span>
               </li>
               <li>
                  <img src="<?php bloginfo('template_url') ?>/images/perfect-windowsill-4.36e335dd.png" class="img-fluid" alt="map">
                  <h6 class="title">Вырез по лекалу</h6>
                  <span>100 грн / сторона</span>
               </li>
               <li>
                  <img src="<?php bloginfo('template_url') ?>/images/perfect-windowsill-5.e724c6fa.png" class="img-fluid" alt="map">
                  <h6 class="title">Вырез под решетку</h6>
                  <span>90 грн / штука</span>
               </li>
               <li>
                  <img src="<?php bloginfo('template_url') ?>/images/perfect-windowsill-6.30ae2e50.png" class="img-fluid" alt="map">
                  <h6 class="title">Косой срез</h6>
                  <span>30 грн / сторона</span>
               </li>
            </ul>
             <p>Линейка подоконников Крафт представлена бюджетными моделями с ПВХ покрытием.
                 Плита имеет матовую гладкую поверхность с богатой цветовой палитрой.
                 Ширина подоконной доски составляет 15-60 см, длинна – 60 см.
                 Дополнительно подоконники комплектуются угловыми и торцевыми заглушками.
                 Изделия отличаются увеличенной толщиной стенок и усиленными ребрами жесткости.
                 Благодаря данным конструкционным особенностям, подоконники отлично выдерживают нагрузки и не деформируются.</p>
         </div>
      </div>
   </section>
   <section class="section-buy-our-company">
      <div class="container">
         <div class="block-buy-our-company">
            <div class="info-buy-our-company">
               <h2 class="title-section">Почему стоит заказать подоконник Kraft у Windows Group</h2>
               <ul class="list-buy-our-company">
                  <li>Полный ассортимент всех подоконников производителя</li>
                  <li>Самые низкие цены</li>
                  <li>Гарантия 10+ лет</li>
                  <li>Заводская кастомизация подоконников любого уровня сложности под ваши индивидуальные нужды (вырезы под откос, по лекалу, под решетку и прочее…)</li>
                  <li>Профессиональный монтаж по Киеву и области</li>
                  <li>Доставка по всей территории Украины точно в срок</li>
                  <li>Действует программа скидок</li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <section class="block-portfolio m-0">
      <div class="container">
         <h2 class="title-section my-3 my-lg-4">Как Смотрятся Подоконники Kraft в Интерьере</h2>
         <ul class="slider-portfolio-present">
            <li><a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-portfolio-brand-windsill-1.2ed7e5f5.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>900</span> <span class="text">грн</span></div>
               </div>
            </li>
            <li><a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-portfolio-brand-windsill-2.3a8d1f8a.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>450</span> <span class="text">грн</span></div>
               </div>
            </li>
            <li><a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-portfolio-brand-windsill-3.984f5fb8.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>1 500</span> <span class="text">грн</span></div>
               </div>
            </li>
            <li><a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-portfolio-brand-windsill-1.2ed7e5f5.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>900</span> <span class="text">грн</span></div>
               </div>
            </li>
            <li><a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-portfolio-brand-windsill-2.3a8d1f8a.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>450</span> <span class="text">грн</span></div>
               </div>
            </li>
            <li><a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-portfolio-brand-windsill-3.984f5fb8.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>1 500</span> <span class="text">грн</span></div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-post section-post-windows">
      <div class="container">
         <h2 class="title-section">Виды подоконников Крафт</h2>
         <div class="text-custom-page">
            <p>Производитель предлагает несколько вариантов цветовых решений:</p>
            <ul>
               <li>· традиционный белый;</li>
               <li>· полярный дуб;</li>
               <li>· темный дуб;</li>
               <li>· золотой дуб;</li>
               <li>· серый дуб;</li>
               <li>· орех;</li>
               <li>· антрацит (темно-серый).</li>
            </ul>
            <p>Изделия прекрасно будут смотреться в любом интерьере, как в классическом, так и нестандартном стиле. Идеально подходят для наружной установки.</p>
            <h2 class="title-post">Преимущества</h2>
            <p>Подоконник Крафт характеризуется следующими преимуществами:</p>
            <ul>
               <li>· безопасностью;</li>
               <li>· оригинальным декором;</li>
               <li>· классической формой;</li>
               <li>· высокой прочностью конструкции;</li>
               <li>· устойчивостью к выгоранию и механическим повреждениям;</li>
               <li>· влагостойкостью.</li>
            </ul>
            <p>Пластиковые подоконные плиты Крафт отличаются длительным сроком эксплуатации. Идеально подходят для установки на кухне или в комнатах.</p>
            <h2 class="title-post">Как выбрать</h2>
            <p>Дополнительно при покупке следует учесть следующие нюансы:</p>
            <ol>
               <li>Проверить наличие защитной пленки на изделии.</li>
               <li>Получить информацию о гарантийном обслуживании производителя.</li>
               <li>Проверить количество ребер жесткости. Расстояние не должно превышать 35 мм.</li>
               <li>Знать максимальную нагрузку, которую выдерживает подоконная доска.</li>
            </ol>
            <p>Размер подоконника подбирается с учетом осуществленных замеров и особенностей помещения. При отсутствии опыта измерений следует вызвать мастера на дом. Наши специалисты готовы выехать на объект и осуществить необходимые замеры.</p>
            <h2 class="title-post">Как проверить оригинальность</h2>
            <p>Для проверки оригинальности товара существует несколько рекомендаций:</p>
            <img src="<?php bloginfo('template_url') ?>/images/block-img-post-4.e8ca2499.jpg" class="block-img-post-right d-none d-md-block img-fluid" alt="img">
            <ol>
               <li>Оригинальный товар имеет обязательную маркировку и сертификаты качества.</li>
               <li>Изделие Крафт имеет гладкую матовую поверхность с шероховатостью.</li>
               <li>Отличительная характеристика подоконника – классическая форма прямого капиноса.</li>
            </ol>
            <p>Изделия отличаются толстым слоем пластика и усиленными ребрами жесткости, расположенными в ромбовидной последовательности.</p>
            <h2 class="title-post">Стоимость</h2>
            <p>Стоимость подоконных плит зависит от длины, ширины и цветового исполнения изделия. Компания «Windows Group» предлагает заказать подоконники Крафт в Киеве по выгодным ценам от производителя. Мы гарантируем широкий выбор продукции, качество и лучшее обслуживание клиентов. Узнать цены можно на сайте или, позвонив по телефону.</p>
         </div>
      </div>
   </section>
   <section class="section-other-section brand-link">
      <div class="container">
         <h2 class="title-section">Другие Подоконники</h2>
         <ul class="list-item-catalog colum-4">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/podokonniki/crystalit/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/logo-cristalit.86d992f1.svg" class="img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Crystallit</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/podokonniki/wds/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-brand-wds.5f37c8d5.svg" class="img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">WDS</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/podokonniki/sauberg/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/logo-sauberg.b5c75944.svg" class="img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Sauberg</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/podokonniki/danke/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/logo-danke.94b99b8a.svg" class="img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Danke</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/podokonniki/plastolit/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/logo-plastolit.874989bf.svg" class="img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Plastolit</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/podokonniki/werzalit/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/logo-verzalit.2530f4a6.svg" class="img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Werzalit</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/podokonniki/openteck/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-brand-opentech.c0ec51c2.svg" class="img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Open Teck</span></div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();

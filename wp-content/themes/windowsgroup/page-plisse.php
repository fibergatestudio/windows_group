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

<div class="main page-mosquito type-mosquito">
   <section class="section-top-post">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
         <div class="top-post-page">
            <h1 class="title-post">Москитные Сетка Плиссе</h1>
            <p class="text-custom-page">
                При монтаже окна не стоит забывать о выборе антимоскитного полотна. Сетчатая конструкция служит защитным барьером от осадков, насекомых и уличной пыли. Компания «Windows Group» предлагает купить москитную сетку плиссе с гарантией качества от производителя, по лучшей цене в Киеве и Киевской области.</p>
         </div>
         <div class="section-type-mosquito">
            <div class="list">
               <div>
                  <h2 class="title-block">Сетка Плиссе</h2>
                  <div class="block-type-mosquito">
                     <div class="img-block d-flex">
                        <div class="img-mosquito"><img src="<?php bloginfo('template_url') ?>/images/type-windows-7-new.5f0074b4.webp" class="img-fluid" alt="product"></div>
                        <div class="block-info">
                           <div>
                              <h5>Характеристики</h5>
                              <dl>
                                 <dt>Min. высота:</dt>
                                 <dd>100</dd>
                              </dl>
                              <dl>
                                 <dt>Min. ширина:</dt>
                                 <dd>100</dd>
                              </dl>
                              <dl>
                                 <dt>Max. высота:</dt>
                                 <dd>3000</dd>
                              </dl>
                              <dl>
                                 <dt>Max. ширина:</dt>
                                 <dd>3000</dd>
                              </dl>
                           </div>
                           <span>Цена: <span class="price">2699 </span>грн. / м<sup>2</sup></span>
                        </div>
                     </div>
                     <div class="text">
                         <p>
                             Плиссированное полотно может устанавливаться в вертикальном или горизонтальном направлении.
                             По внешнему виду конструкция напоминает жалюзи. Каркас москитной сетки монтируется в оконный проем с помощью плунжерных приспособлений.
                             Складывание и раскладывание плиссированной сетки осуществляется по принципу гармошки.
                             Защитное плиссированное полотно – оптимальный выбор для обустройства веранд, беседок, крытых бассейнов, террас, балконов и лоджий.
                         </p>
                        <button class="btn btn-custom-project"><span class="icon icon-phone-table"></span> Перезвоните мне</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section-scheme-works mosquito">
      <div class="container">
         <h2 class="title-section">Как Заказать Антимоскитную Сетку</h2>
         <ul class="list-scheme-works balcone d-md-none">
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
               <span class="title">Заявка</span>
               <p>Позвоните нам или оставьте заявку на сайте</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title">Замер</span>
               <p>Договоримся о замере на удобное для вас время или выполните замер самостоятельно согласно простой инструкции на сайте</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">3</span></div>
               <span class="title">Выполнение заказа</span>
               <p>Выполнение заказа обычно занимает 1-2 рабочих дня</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">4</span></div>
               <span class="title">Доставка и установка</span>
               <p>Заранее сообщим и согласуем удобное для вас время доставки и установки</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">5</span></div>
               <span class="title">Гарантия</span>
               <p>Дадим гарантию на каждое изделие до 3-х лет</p>
            </li>
         </ul>
         <ul class="list-scheme-works-lg d-none d-md-flex">
            <li class="">
               <span class="title">Заявка</span>
               <p class="px-5 mx-lg-4">Позвоните нам или оставьте заявку на сайте</p>
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
            </li>
            <li class="">
               <span class="title px-4">Выполнение заказа</span>
               <p class="px-5 mx-lg-4">Выполнение заказа обычно занимает 1-2 рабочих дня</p>
               <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">3</span></div>
            </li>
            <li class="">
               <span class="title">Гарантия</span>
               <p class="px-5 mx-lg-4">Дадим гарантию на каждое изделие до 3-х лет</p>
               <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">5</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title mt-3">Замер</span>
               <p class="mx-lg-4">Договоримся о замере на удобное для вас время или выполните замер самостоятельно согласно простой инструкции на сайте</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">4</span></div>
               <span class="title mt-3">Доставка и установка</span>
               <p class="mx-lg-4">Заранее сообщим и согласуем удобное для вас время доставки и установки</p>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-all-ukraine">
      <div class="container">
         <h2 class="title-section">Работаем по Всей Территории Украины</h2>
         <div class="block-all-ukraine">
            <img src="<?php bloginfo('template_url') ?>/images/map-ukraine-new.7f39b14f.png" class="map d-none d-md-block img-fluid" alt="map">
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
   <section class="section-form-page-windowsill">
      <div class="container">
         <h2 class="title-section">Форма для заказа Антимоскитных Сеток</h2>
         <form class="form-windowsill sending-mosquito-net only-one">
            <ul class="form-windowsill-wrapper">
               <li class="top-row-wrapper">
                  <div class="form-group"><input type="hidden" name="type" value="Сетка Плиссе"></div>
                  <div class="form-group"><input type="hidden" name="quantity" value="1"></div>
                  <div class="form-group"><label for="form-windowsill-3">Укажите высоту сетки (мм)</label> <input name="hight" id="form-windowsill-3" class="form-control" placeholder="1200"></div>
                  <div class="form-group"><label for="form-windowsill-4">Укажите ширину сетки (мм)</label> <input name="width" id="form-windowsill-4" class="form-control" placeholder="600"></div>
                  <div class="form-collapse-control">
                     <div class="btn-add-type" onclick="addMosquitoForm(this)" data-clone-btn>+</div>
                  </div>
               </li>
               <li class="bottom-row-wrapper">
                  <div class="form-windowsill-description mosquito-description">
                     <div class="form-group"><label></label> <input name="city" class="form-control" placeholder="Введите ваш город*"></div>
                     <div class="form-group"><label></label> <input name="your-name" class="form-control" placeholder="Имя*"></div>
                     <div class="form-group comment"><label></label> <textarea name="your-message" class="form-control" rows="3" placeholder="Комментарий к заказу"></textarea></div>
                     <div class="form-group"><label></label> <input name="tel-460" class="form-control" placeholder="Телефон*"></div>
                     <div class="form-group mosquito-btn"><button type="submit" class="btn btn-custom-project w-100 big-form">ОФОРМИТЬ ЗАКАЗ</button></div>
                  </div>
               </li>
               <li class="button-wrapper mosquito"></li>
            </ul>
         </form>
      </div>
   </section>
   <section class="section-measurement-rules">
      <div class="container">
         <h2 class="title-section">Как Правильно Замерять Москитную Сетку</h2>
         <div class="video-info">
            <div class="block-video"><iframe src="https://www.youtube.com/embed/kWJPtODD9Oo"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
             <p class="my-3 my-lg-0">Чтобы заказать москитную сетку, нам необходимы точные размеры
                 светового приёма. Есть два способа их получить: вызов замерщика и самостоятельный замер.
                 Для экономии времени и денег, вы можете самостоятельно произвести замеры для дальнейшей
                 передачи размеров нашим менеджерам. Для этого вам необходимы: ручка, бумага, рулетка.
                 Следуя инструкциям в видео, вы сможете сделать максимально точные замеры и приступить
                 к заказу москитной сетки.</p>
         </div>
         <div class="block-fix"></div>
      </div>
   </section>
   <section class="section-buy-our-company mosquito">
      <div class="container">
         <div class="block-buy-our-company">
            <div class="info-buy-our-company">
               <h2 class="title-section">Почему стоит заказать антимоскитную сетку именно у нас ?</h2>
               <ul class="list-buy-our-company">
                  <li>Собственное производство</li>
                  <li>Современное оборудование</li>
                  <li>Производим 800 сеток в сутки</li>
                  <li>Работаем по всей территории Украины</li>
                  <li>20+ лет опыта</li>
                  <li>118387 успешно выполненных заказов</li>
                  <li>Выполняем заказы точно в срок</li>
                  <li>Самые низкие цены</li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <section class="block-portfolio m-0">
      <div class="container">
         <h2 class="title-section my-3 my-lg-4">Наши Работы</h2>
         <ul class="slider-portfolio-present">
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-mosquito.593e1089.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>980</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-mosquito-2.bec7e70a.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>5 400</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-mosquito-3.c138d53e.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>4 900</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-mosquito.593e1089.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>980</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-mosquito-2.bec7e70a.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>5 400</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-mosquito-3.c138d53e.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>4 900</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
         </ul>
         <button class="btn btn-portfolio">Показать Все Работы</button>
      </div>
   </section>
   <section class="section-post section-post-windows bg-mosquito">
      <div class="container">
         <h2 class="title-section">Купить москитную сетку плиссе в Киеве</h2>
         <div class="text-custom-page">
            <p>Сетка плиссе – удобная сдвижная конструкция, позволяющая защитить помещение от негативных внешних факторов. Москитная конструкция состоит из нескольких элементов:</p>
            <ul>
               <li>мелкой ячеистой сетки, изготовленной из полиамида, полиэстера или фибергласса;</li>
               <li>алюминиевых направляющих, расположенных по бокам и вверху конструкции;</li>
               <li>алюминиевого порога;</li>
               <li>изогнутого профиля с эмалированным покрытием;</li>
               <li>вспомогательных пластиковых деталей.</li>
            </ul>

            <h2 class="title-post">Как выбрать</h2>
            <p>При выборе плиссированного полотна нужно учитывать несколько рекомендаций:</p>
            <ol>
               <li>Антимоскитная конструкция изготавливается индивидуально с учетом параметров оконного проема.</li>
               <li>Плиссе является универсальным приспособлением и в сложенном виде занимает малое пространство.</li>
               <li>Конструкция может сдвигаться строго в одну сторону. Вертикальное открытие применяется в мансардных окнах.</li>
               <li>В солнечные дни полотно послужит защитой от ультрафиолетовых лучей.</li>
               <li>Причиной поломки является не повреждение сетчатой поверхности, а износ несущей конструкции.</li>
            </ol>
            <p>Способ установки плиссированного полотна выбирается в зависимости от площади оконного проема. Наши специалисты подскажут оптимальный вид монтажа для разных типов помещений.</p>
            <h2 class="title-post">Преимущества</h2>
            <p>Москитная сетка плиссе на дверь обладает рядом преимуществ:</p>
            <ul>
               <li>стойкостью к внешним влияниям;</li>
               <li>устойчивостью к деформации и коррозии;</li>
               <li>простотой монтажа;</li>
               <li>широкой цветовой гаммой;</li>
               <li>уникальностью конструкции;</li>
               <li>доступной стоимостью.</li>
            </ul>
            <p>Плиссированная москитная система идеально подходит для монтажа в большие оконные проемы. Крепкая фурнитура обеспечивает удобство и надежность эксплуатации защитного приспособления.</p>
            <h2 class="title-post">Стоимость</h2>
            <p>Цена москитной сетки плиссе зависит от размера проема окна, цветового исполнения и способа монтажа изделия.</p>
            <p>Наша компания «Виндовс Груп» предлагает заказать москитные сетки плиссе в Украине по выгодной стоимости. Узнать цены на изделия можно на сайте или позвонить по указанному телефону.</p>
         </div>
      </div>
   </section>
   <section class="section-other-section section-other-type-windows">
      <div class="container">
         <ul class="list-item-catalog colum-3">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/cvetnye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/mosquito-grid.ec54c1f2.webp" class="img-all img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Москитные сетки под цвет окна</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/na-okna/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows.f9ac7d72.webp" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Москитные сетки на окна</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/na-dveri/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-2.c9a2d7a3.jpg" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Москитные сетки на двери</span></div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();

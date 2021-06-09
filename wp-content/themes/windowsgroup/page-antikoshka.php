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
            <h1 class="title-post">Москитные Сетки Антикошка</h1>
            <p class="text-custom-page">Москитная сетка антикошка служит максимальной защитой от острых когтей животного.
                Сверхпрочное полотно предотвращает случайное выпадение животных из окна, их застревание между
                профилем или активной оконной створкой. Компания «Windows Group» предлагает купить защитную
                москитную сетку для животных в Киеве и Киевской области с гарантией по лучшей цене.</p>
         </div>
         <div class="section-type-mosquito">
            <div class="list">
               <div>
                  <h2 class="title-block">Сетка «Антикошка»</h2>
                  <div class="block-type-mosquito">
                     <div class="img-block d-flex">
                        <div class="img-mosquito"><img src="<?php bloginfo('template_url') ?>/images/type-windows-3.9b0b1c96.webp" class="img-fluid" alt="product"></div>
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
                           <span>Цена: <span class="price">480 </span>грн. / м<sup>2</sup></span>
                        </div>
                     </div>
                     <div class="text">
                        <p>Сетка антикошка изготовлена из сверхпрочных нитей с армированной сердцевиной.
                             Конструкция сетки представлена алюминиевой рамкой, вставленной в оконный проем.
                             Благодаря армированию металла полотно не рвется и предупреждает падение животного из окна.Сетчатое полотно прикрепляется на усиленный профиль с дополнительным использованием
                             металлических боковых закрепляющих элементов.
                             Конструкция антикошка является универсальной: сочетает в себе не только защиту от
                             когтей кошек и птиц, но и антимоскитное полотно.</p>
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
                  <div class="form-group"><input type="hidden" name="type" value="«Антикошка»"></div>
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
         <h2 class="title-section">Купить москитную сетку антикошка в Киеве</h2>
         <div class="text-custom-page">
            <p>При выборе «антикошки» следует учитывать некоторые моменты:</p>
            <ol>
               <li>Правильно выполненный замер является гарантией того, что конструкция плотно войдет в оконный проем. Самостоятельные замеры не всегда точные, поэтому мы предлагаем вызвать на дом нашего замерщика. Специалист не только измерит проем, но и проконсультирует вас в выборе полотна.</li>
               <li>Конструкция может быть съемной, при условии монтажа на металлические зацепы. Оснастка сетки металлическими уголками обеспечивает надежное крепление без возможности снятия.</li>
               <li>Качественная система «антикот» способна выдерживать вес до 20 кг.</li>
               <li>Изделие, выполненное из темных толстых нитей, пропускает меньшее количество света.</li>
               <li>При установке «антикошки» нужно помнить, что конструкция не является защитой для маленьких детей. Поэтому дополнительно рекомендуется монтаж специальных защитных замков от выпадения из окна.</li>
            </ol>
            <p>В нашей компании вы можете заказать сетчатое полотно «антикошка» под окно ПВХ или раздвижную раму.</p>
            <h2 class="title-post">Преимущества</h2>
            <p>Сетки на окна для кошек характеризуются несколькими преимуществами:</p>
            <ul>
               <li>· эстетичностью;</li>
               <li>· надежностью;</li>
               <li>· защитой от мусора, мошек, пыли и пыльцы;</li>
               <li>· пожароустойчивостью;</li>
               <li>· отличной вентиляцией;</li>
               <li>· выдерживанием больших нагрузок;</li>
               <li>· безопасностью эксплуатации;</li>
               <li>· доступной стоимостью.</li>
            </ul>
            <p>В каталоге представлены изделия с качеством, подтвержденным сертификатами.</p>
            <h2 class="title-post">Стоимость</h2>
            <p>На стоимость конструкции «антикот» влияют параметры и особенности оконного проема.</p>
            <p>Наша компания «Виндовс Груп» предлагает заказать сетки антикошка в Украине напрямую от производителя по выгодной стоимости. Узнать ориентировочные цены можно на сайте или, позвонив по указанному телефону.</p>
         </div>
      </div>
   </section>
   <section class="section-other-section section-other-type-windows">
      <div class="container">
         <ul class="list-item-catalog colum-3">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/antipyl/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-4.4bf91518.webp" class="img-all img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Москитные сетки антипыль</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/rolletnye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-5.995dbc5f.webp" class="img-all img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Ролетные сетки</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/razdvizhnye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-6.9df81dce.jpg" class="img-all img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Раздвижные сетки</span></div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();
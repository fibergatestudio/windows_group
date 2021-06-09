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
            <h1 class="title-post">Москитные Сетки Антипыль</h1>
            <p class="text-custom-page">Сетка антипыль является оптимальным решением для людей, страдающих аллергией.
                 Полотно обеспечивает уютную обстановку в доме, квартире или офисе.
                 Наша компания «Виндовс Груп» предлагает купить москитные сетки антипыль в Киеве и Киевской области по выгодным ценам.
                 Мы гарантируем широкий ассортимент изделий с европейским качеством.</p>
         </div>
         <div class="section-type-mosquito">
            <div class="list">
               <div>
                  <h2 class="title-block">Сетка «Антипыль»</h2>
                  <div class="block-type-mosquito">
                     <div class="img-block d-flex">
                        <div class="img-mosquito"><img src="<?php bloginfo('template_url') ?>/images/type-windows-4.4bf91518.webp" class="img-fluid" alt="product"></div>
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
                         <p>Сетка москитная антипыль – защитное полотно от проникновения насекомых и аллергенов в помещение.
                             Изделие представляет собой конструкцию, изготовленную из алюминиевого профиля и сетки.
                             Решетка закрепляется в наружном световом проеме, идеально повторяя форму створок. «Москитки» могут быть распашными или раздвижными.
                             Выбор разновидности зависит от типа дверной или оконной конструкции.
                             При необходимости защитное полотно окрашивается в любой цвет, подходящий под интерьер.</p>
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
                  <div class="form-group"><input type="hidden" name="type" value="«Антипыль»"></div>
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
         <h2 class="title-section">Купить москитную сетку антипыль в Киеве</h2>
         <div class="text-custom-page">
            <p>Перед тем, как выбрать систему антипыль на окна, необходимо учитывать ряд рекомендаций:</p>
            <ol>
               <li>Первоначально нужно измерить самостоятельно параметры проема или заказать на дом замерщика. Наш специалист готов по предварительной заявке выехать на объект для осуществления необходимых замеров.</li>
               <li>На террасу и веранду отлично подойдут раздвижные конструкции с сетчатым полотном. При необходимости сетка сдвигается или раздвигается.</li>
               <li>Для загородного дома идеально использовать решетки, закрепленные в отдельном массивном профиле.</li>
               <li>На деревянные оконные конструкции лучше устанавливать сетки-жалюзи в вертикальном или горизонтальном положении.</li>
               <li>Темные сетчатые конструкции значительно снижают пропуск света в помещение.</li>
               <li>При случайном разрыве или повреждении полотно легко отремонтировать или заменить на новое. Эксплуатационные характеристики сохраняются даже после ремонта.</li>
               <li>В случае загрязнения ячеек полотна потребуется промывка щеткой, смоченной в воде с добавлением хозяйственного мыла.</li>
            </ol>
            <p>Москитное полотно является незаменимой конструкцией для жителей мегаполисов, в домах вблизи оживленной магистрали. Покупать «антипыльцу» рекомендуется в проверенных компаниях, предпочтительно вместе с оконной конструкцией.</p>
            <h2 class="title-post">Преимущества</h2>
            <p>Антипыль сетка обладает рядом преимуществ:</p>
            <ul>
               <li>· сохранением первоначальной формы;</li>
               <li>· задерживанием пыльцы и спор растений;</li>
               <li>· защитой от мелкого мусора и насекомых;</li>
               <li>· препятствием для пыли и выхлопных газов;</li>
               <li>· удобством использования;</li>
               <li>· прочностью и устойчивостью конструкции к ветровым нагрузкам;</li>
               <li>· стойкостью к выцветанию, коррозийным процессам;</li>
               <li>· компактностью;</li>
               <li>· безвредностью и безопасностью.</li>
            </ul>
            <p>Москитная сетка антипыльца не препятствует вентиляции, не уменьшает светопропускную способность окна. При регулярном уходе изделия имеют продолжительный срок эксплуатации.</p>
            <h2 class="title-post">Стоимость</h2>
            <p>Стоимость сетки антипыль зависит от нескольких факторов:</p>
            <ul>
               <li>· вида;</li>
               <li>· цвета;</li>
               <li>· параметров;</li>
               <li>· формы;</li>
               <li>· комплектующих элементов.</li>
            </ul>
            <p>Компания «Windows Group» предлагает заказать москитную сетку антипыль в Украине по лучшей стоимости. Узнать цены на изделия можно на сайте или, позвонив по телефону.</p>
         </div>
      </div>
   </section>
   <section class="section-other-section section-other-type-windows">
      <div class="container">
         <ul class="list-item-catalog colum-3">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/rolletnye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-5.995dbc5f.webp" class="img-all img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Ролетные антимоскитные сетки</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/razdvizhnye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-6.9df81dce.jpg" class="img-all img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Нестандартные антимоскитные сетки</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/plisse/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-7-new.5f0074b4.webp" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Антимоскитные сетки плиссе</span></div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();

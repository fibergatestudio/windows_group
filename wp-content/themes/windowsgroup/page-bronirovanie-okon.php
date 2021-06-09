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

<div class="main page-servises-glass">
   <section class="section-welcome-page bg-servises-glass bg-armored-windows">
      <div class="container">
         <div class="text-welcome">
            <h1>Бронирование окон</h1>
         </div>
      </div>
   </section>
   <section class="section-top-page">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
          <span class="text-custom-page">Нанесение специальной пленки на оконные конструкции – современный способ защитить дом от хулиганов и грабителей.
                Наша компания «Виндовс Груп» предлагает заказать бронирование окон в Киеве и Киевской области по лучшей стоимости.
                Мы гарантируем широкий выбор качественного товара и лучшее обслуживание клиентов.</span>
         <ul class="list-item-catalog list-type-glass-fasad colum-4">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/armored-windows-type.bd86c4cf.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/armored-windows-type-2.f219ab45.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/armored-windows-type-3.c2c4f6ec.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/armored-windows-type-4.0721fc48.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
         </ul>
          <p class="text-custom-page mt-lg-4">Пленка для бронирования стеклопакетов подбирается с учетом необходимой степени защиты.
              При изготовлении пленка проходит специальные испытания на ударопрочность.
              Лента имеет три варианта раскроя для остекления любых оконных конструкций: 1220 мм, 1524 мм, 1830 мм.</p>
      </div>
   </section>
   <section class="section-preference">
      <div class="container">
         <h2 class="title-section">Наши Прeимущества</h2>
         <ul class="list-preference">
            <li>
               <div class="block">
                  <i class="icon icon-block icon-project"></i> <span class="title">Сертифицированные материалы</span>
                  <p>Все материалы, которые мы используем для обеспечения дополнительной безопасности ваших окон и дверей прошли тесты и получили сертификаты</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-quality"></i> <span class="title">Плёнки всех классов защиты</span>
                  <p>Мы предлагаем бронированные пленки класса А1, А2, А3</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-graphic"></i> <span class="title">Забронировали 15983</span>
                  <p>За 15+ лет работы надежно забронировали 15983 окна в государственных и частных учреждениях</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-shield"></i> <span class="title">Гарантия 10 лет</span>
                  <p>Мы на 100% уверены в качестве своих услуг и материалов и поэтому готовы дать гарантию 10+ лет</p>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-about-us">
      <div class="container">
         <div class="info-about-us">
            <h2 class="title-section">О Нашей Компании</h2>
            <p class="mb-0">Если у вас в доме или квартире установлены старые деревянные окна, то рекомендуется заменить их на пластиковые, которые обладают многочисленными достоинствами.</p>
            <p>У нас заказать металлопластиковые окна можно по выгодной цене и с официальной гарантией от производителя.</p>
            <p>Пластиковые окна в Киеве да и по всей Украине производятся из ПВХ или же поливинилхлорида.</p>
            <p>По своей конструкции они очень напоминают деревянные окна, но отличаются более продуманной конструкцией.</p>
            <p>Они состоят из нескольких слоев, каждый из которых отделен друг от друга и располагается в герметичной раме, сконструированной особыми образом.</p>
         </div>
         <div class="form">
            <h2 class="title-form">Оставьте заявку на консультацию менеджера</h2>
            <form class="call-back-form">
               <div class="form-group"><label for="exampleInputName"><input class="form-control" name="your-name" id="exampleInputName" placeholder="Ваше имя*"></label></div>
               <div class="form-group"><label for="exampleInputPhone"><input class="form-control" name="tel-460" id="exampleInputPhone" placeholder="Телефон*"></label></div>
               <div class="form-group"><label for="exampleFormControlTextarea1"><textarea class="form-control" name="your-message" id="exampleFormControlTextarea1" rows="3" placeholder="Комментарий"></textarea></label></div>
               <button type="submit" class="btn btn-success">Получить консультацию</button>
            </form>
            <p class="mt-2 text-form">Экономьте время, звоните прямо сейчас!</p>
            <a href="#" class="phone">0 800 211 052 </a><span class="text-bottom">Бесплатные звонки по всей территории Украины</span>
         </div>
      </div>
   </section>
   <section class="section-scheme-works roller">
      <div class="container">
         <h2 class="title-section">Схема Работы с Нами</h2>
         <ul class="list-scheme-works balcone d-md-none">
            <li class="mb-3">
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
               <span class="title">Заявка</span>
               <p>Позвоните нам или оставьте заявку на сайте</p>
            </li>
            <li class="mb-3">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title">Выезд Замерщика</span>
               <p>Договоримся о замере на удобную для вас дату и время</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works icon-colors"></i> <span class="number-scheme-works">3</span></div>
               <span class="title">Выбор материала</span>
               <p>Грамотно подберём необходимые материалы для качественного бронирования</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works work"></i> <span class="number-scheme-works">4</span></div>
               <span class="title">Выполнение работ</span>
               <p>Забронируем ваши окна, строго придерживаясь технологии, которая обеспечит надежность и качество на долгие годы</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">5</span></div>
               <span class="title">Гарантия</span>
               <p>Мы уверены в качестве своих услуг и поэтому готовы дать гарантию 10+ лет на материалы и 5 лет на работы</p>
            </li>
         </ul>
         <ul class="list-scheme-works-lg d-none d-md-flex">
            <li class="">
               <span class="title">Заявка</span>
               <p class="px-5 mx-lg-3">Позвоните нам или оставьте заявку на сайте</p>
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
            </li>
            <li class="">
               <span class="title px-4">Выбор материала</span>
               <p class="px-2">Грамотно подберём необходимые материалы для качественного бронирования</p>
               <div class="block-scheme-works"><i class="icon-scheme-works icon-colors"></i> <span class="number-scheme-works">3</span></div>
            </li>
            <li class="">
               <span class="title">Гарантия</span>
               <p class="px-2">Мы уверены в качестве своих услуг и поэтому готовы дать гарантию 10+ лет</p>
               <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">5</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title mt-3">Выезд Замерщика</span>
               <p class="px-5">Договоримся о замере на удобную для вас дату и время</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works work"></i> <span class="number-scheme-works">4</span></div>
               <span class="title mt-3">Выполнение работ</span>
               <p class="px-5">Забронируем ваши окна, строго придерживаясь технологии, которая обеспечит надежность и качество на долгие годы</p>
            </li>
         </ul>
      </div>
   </section>
    <section class="block-portfolio m-0">
        <div class="container">
            <h2 class="title-section my-3 my-lg-4">Наши Работы</h2>
            <ul class="slider-portfolio-present">
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/osteklenie-project-1.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>93 560</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/osteklenie-project-2.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>19 800</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/osteklenie-project-3.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>65 000</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/osteklenie-project-4.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>98 000</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/osteklenie-project-5.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>99 800</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/osteklenie-project-6.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>97 890</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
             <li>
                 <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/osteklenie-project-7.jpg" class="img-fluid" alt="photo-product1"></a>
                 <div class="footer-item-catalog">
                     <div class="price"><span class="text">Стоимость от</span> <span>46 500</span> <span class="text">грн</span></div>
                 </div>
                 <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
             </li>
             <li>
                 <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/osteklenie-project-8.jpg" class="img-fluid" alt="photo-product1"></a>
                 <div class="footer-item-catalog">
                     <div class="price"><span class="text">Стоимость от</span> <span>200 600</span> <span class="text">грн</span></div>
                 </div>
                 <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
             </li>
             <li>
                 <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/osteklenie-project-9.jpg" class="img-fluid" alt="photo-product1"></a>
                 <div class="footer-item-catalog">
                     <div class="price"><span class="text">Стоимость от</span> <span>32 999</span> <span class="text">грн</span></div>
                 </div>
                 <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
             </li>
             <li>
                 <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/osteklenie-project-10.jpg" class="img-fluid" alt="photo-product1"></a>
                 <div class="footer-item-catalog">
                     <div class="price"><span class="text">Стоимость от</span> <span>450 670</span> <span class="text">грн</span></div>
                 </div>
                 <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
             </li>
             <li>
                 <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/osteklenie-project-11.jpg" class="img-fluid" alt="photo-product1"></a>
                 <div class="footer-item-catalog">
                     <div class="price"><span class="text">Стоимость от</span> <span>68 000</span> <span class="text">грн</span></div>
                 </div>
                 <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
             </li>
         </ul>
            <button class="btn btn-portfolio">Показать Все Работы</button>
        </div>
    </section>
   <section class="section-post section-post-windows bg-post-glass-balcony">
      <div class="container">
         <h2 class="title-section">Заказать бронирование окон и стеклопакетов в Киеве</h2>
         <div class="text-custom-page">
            <p>В зависимости от прочности бронированное покрытие делится на классы: А1, А2, А3. Чем выше класс, тем прочнее изделие.</p>
            <p>Сверхпрочная лента для окон представлена в нескольких вариантах:</p>
            <ul>
               <li>· комбинированная – имеет толщину в 115 мкм, оснащена зеркальным светоотражающим слоем;</li>
               <li>· прозрачная – покрытие максимально пропускает солнечный свет, обеспечивая защиту от выгорания обоев и предметов интерьера.</li>
            </ul>
            <p>Бронированная лента фиксируется на стекло особым методом. Процесс нанесения требует аккуратности, потому что любое неправильное движение приводит к нарушению целостности и функциональности изделия.</p>
            <p>Установка бронепленки осуществляется с выездом специалистов на объект. Наши работники готовы выехать по предварительной заявке и произвести монтаж пленочного покрытия.</p>
            <h2 class="title-post">Преимущества и недостатки</h2>
            <p>Бронирование стекол дома имеет ряд преимуществ:</p>
            <ul>
               <li>· незаметность нанесения;</li>
               <li>· огнеупорность;</li>
               <li>· шумоизоляция;</li>
               <li>· возможность установки различных пленок (тонированных, матовых, декоративных).</li>
            </ul>
            <p>Защитная пленка также пригодится при ремонте поврежденного стекла. Клейкая лента идеально скроет трещины на стеклопакете.</p>
            <p>Единственным недостатком пленочного покрытия является необходимость замены в случае разбития. При сильном ударе защитная лента разбивается, а неострые осколки остаются на пленке.</p>
            <h2 class="title-post">Кому подойдет</h2>
            <p>Комбинированная лента подходит для помещений в качестве защиты от перегрева. Толщина пленки бывает разной. Покрытие стекла тонким прозрачным материалом способно защитить окно от удара камнями. Использование более толстой бронепленки обеспечивает защиту оконной конструкции от ударов молотком, арматурой, ломом, кирпичом, топором. Часто сверхпрочное покрытие применяется в банковских, охранных, частных и государственных помещениях.</p>
            <p>После бронирования стекол дома специалистами клиентам предоставляется сертификат качества на наклеенную ленту. Продукция соответствует стандартам безопасности и указанным характеристикам.</p>
            <h2 class="title-post">Стоимость</h2>
            <p>Стоимость бронированного пленочного покрытия зависит от разновидности, уровня защиты и размещения конструкции. Мы предлагаем пленку в оптимальном соотношении цены и качества.</p>
            <p>Компания «Windows Group» предлагает купить бронепленку на окна по доступной стоимости в Украине. Узнать цены можно на сайте или, позвонив по телефону.</p>
         </div>
      </div>
   </section>
   <section class="section-other-section section-other-type-windows">
      <div class="container">
         <h2 class="title-section">Другие Виды Наших Работ</h2>
         <ul class="list-item-catalog colum-3">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/uslugi/zashchita-okon-ot-vzloma/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/zashchita-okon-ot-vzloma-header.d806ecd8.jpg" class="img-all img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Защита <span class="name-block">от взлома</span></span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/uslugi/zashchita-okon-ot-detej/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/zashchita-okon-ot-detej-header.9488c403.jpg" class="img-all img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Защита окон <span class="name-block">от детей</span></span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/uslugi/bezramnoe-osteklenie/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/bezramnoe-osteklenie-header.f3a3edc6.jpg" class="img-all img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Безрамное остекление</span></div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();

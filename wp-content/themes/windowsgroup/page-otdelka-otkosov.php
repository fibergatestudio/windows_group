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
   <section class="section-welcome-page bg-servises-glass bg-finishing-slopes">
      <div class="container">
         <div class="text-welcome">
            <h1>Отделка откосов</h1>
         </div>
      </div>
   </section>
   <section class="section-top-page">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
          <p class="text-custom-page">Откос является завершающим этапом установки оконной конструкции. Качественно изготовленный элемент усилит тепловую эффективность окна,
              обеспечив надежную шумо- и звукоизоляцию. Компания «Виндовс Груп» предлагает заказать откосы на окна по лучшей цене в Киеве и
              Киевской области.</p>
         <ul class="list-item-catalog list-type-glass-fasad colum-4">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-finishing-slopes.9577cf56.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-finishing-slopes-2.b81ee84a.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-finishing-slopes-3.55b9fc5e.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-finishing-slopes-4.8bf28eed.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
         </ul>
          <p class="text-custom-page mt-lg-4">Не рекомендуется затягивать с отделкой после монтажа откоса так-как это может повлиять на появление сквозняков и попадания холодного воздуха. Лучшим вариантом будет, заказать отделку у специалиста, так-как при ручной отделке можно повредить монтажную пену либо целостность всей конструкции.</p>
      </div>
   </section>
   <section class="section-preference">
      <div class="container">
         <h2 class="title-section">Наши Прeимущества</h2>
         <ul class="list-preference">
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-graphic"></i> <span class="title">Опыт 20+ лет</span>
                  <p>Удачно выполнили 73833 заказа по отделке откосов</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-team"></i> <span class="title">Профессиональная команда</span>
                  <p>У нас работают высококвалифицированные мастера, которые на 100% знают свое дело</p>
               </div>
            </li>
            <li>
               <div class="block">
                  <i class="icon icon-block icon-worker"></i> <span class="title">Любой уровень сложности</span>
                  <p>Выполняем работы по откосам любого уровня сложности</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-shield"></i> <span class="title">Гарантия</span>
                  <p>Мы уверены в качестве своих услуг и поэтому готовы дать гарантию на работы 5 лет</p>
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
   <section class="section-scheme-works windowsill">
      <div class="container">
         <h2 class="title-section">Схема Работы с Нами</h2>
         <ul class="list-scheme-works windowsill d-md-none">
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
               <span class="title">Заявка</span>
               <p>Позвоните нам или оставьте заявку на сайте</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title">Выезд замерщика</span>
               <p>Договоримся о замере на удобную для вас дату и время</p>
            </li>
            <li class="mb-2">
               <div class="block-scheme-works"><i class="icon-scheme-works work"></i> <span class="number-scheme-works">3</span></div>
               <span class="title">Выполнение работ</span>
               <p>Наши опытные мастера сделают откосы согласно всем строгим требованиям и стандартам ГОСТ, что обеспечит качество на долгие годы</p>
            </li>
            <li class="mb-2">
               <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">4</span></div>
               <span class="title">Гарантия</span>
               <p>Мы уверены в качестве своих услуг и поэтому готовы дать гарантию 3 года</p>
            </li>
         </ul>
         <ul class="list-scheme-works-lg windowsill d-none d-md-flex">
            <li class="">
               <span class="title pb-1">Заявка</span>
               <p>Позвоните нам или оставьте заявку на сайте</p>
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title mt-3">Выезд замерщика</span>
               <p>Договоримся о замере на удобную для вас дату и время</p>
            </li>
            <li class="">
               <span class="title px-lg-4 pb-1">Выполнение работ</span>
               <p class="big-container">Наши опытные мастера сделают откосы согласно всем строгим требованиям и стандартам ГОСТ, что обеспечит качество на долгие годы</p>
               <div class="block-scheme-works"><i class="icon-scheme-works work"></i> <span class="number-scheme-works">3</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">4</span></div>
               <span class="title mt-3">Гарантия</span>
               <p>Мы уверены в качестве своих услуг и поэтому готовы дать гарантию 3 года</p>
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
         <h2 class="title-section">Заказать откосы на окна в Киеве</h2>
         <div class="text-custom-page">
            <p>Оконный откос – конструкция, скрывающая монтажную пену, используемую при отделке внутренней части проема. Существует несколько способов оформления проема:</p>
            <ul>
               <li>· из пластика;</li>
               <li>· из гипсового картона;</li>
               <li>· с применением штукатурного раствора.</li>
            </ul>
            <p>Откосы на окнах из пластика отличаются использованием новой технологии, обеспечивающей надежное крепление пластика с помощью профиля. При данном способе внутренняя пустота проема заполняется утеплителем или пенопластом.</p>
            <p>К достоинствам данного типа отделки относятся:</p>
            <ul>
               <li>· быстрая и качественная установка;</li>
               <li>· высокий уровень теплосбережения и влагоизоляции;</li>
               <li>· простота ухода и эксплуатации;</li>
               <li>· прочность и долговечность;</li>
               <li>· отделка возможна с внутренней и наружной стороны окна.</li>
            </ul>
            <p>Из недостатков выделяется высокая стоимость в сравнении с изделиями из других материалов.</p>
            <p>Отделка откосов гипсокартоном – одна из распространенных техник внутреннего оформления. Гипсокартон прикрепляется к проему по аналогии пластика. Внутреннее пространство между гипсокартоном и окном заполняется теплоизолятором. После монтажа часть проема грунтуется и покрывается специальными смесями.</p>
            <p>Преимуществами гипсокартонной технологии являются:</p>
            <ul>
               <li>· устойчивость к температурным перепадам;</li>
               <li>· высокая теплоизоляция;</li>
               <li>· длительная эксплуатация.</li>
            </ul>
            <p>К недостаткам относятся долгая установка, при длительном намокании гипсокартон вздувается. Гипсокартонная отделка участка оконного проема производится только с внутренней стороны.</p>
            <p>Штукатурка откосов – старый способ отделки оконного проема. Суть метода заключается в нанесении на стену несколько слоев штукатурного раствора. После накладывания штукатурки проем шлифуется и окрашивается. Оштукатуривание отличается простотой, экономией, универсальностью применения для любых конструкций.</p>
            <p>К недостаткам штукатурки откосов окон относятся:</p>
            <ul>
               <li>· низкий уровень теплоизоляции;</li>
               <li>· появление конденсата и плесени на конструкциях;</li>
               <li>· вероятность появления трещин на внутренней части проема.</li>
            </ul>
            <p>Пластиковые и гипсокартонные откосы отличаются свойствами, позволяющими сгибать панели для оконных конструкций нестандартной формы (треугольных, арочных, круглых, овальных).</p>
            <h2 class="title-post">Этапы отделки откосов</h2>
            <p>Оконная отделка состоит из нескольких этапов:</p>
            <ol>
               <li>Очищение проема от скопившейся пыли и мусора.</li>
               <li>Монтаж изделия.</li>
               <li>Оштукатуривание монтажной пены.</li>
               <li>Покраска сделанного или установленного откоса.</li>
            </ol>
            <p>Основной залог долговечного использования изделия – грамотно осуществленный монтаж. Наши специалисты готовы установить изделия с соблюдением технических требования для тепло- и шумоизоляции.</p>
            <h2 class="title-post">Как выбрать</h2>
            <p>При выборе оконной отделки следует учитывать некоторые рекомендации:</p>
            <ul>
               <li>Отделка внутренней части евроокна гипсокартоном помогает скрыть сильные повреждения стены в результате монтажа.</li>
               <li>Пластиковая отделка позволяет восстанавливать различные дефекты без замены откоса.</li>
               <li>Гипсокартонное оформление проема боится влажности, поэтому данную технику лучше использовать в отапливаемых помещениях.</li>
            </ul>
            <p>Мы предлагаем сделать откосы на окна по цене доступной в Киеве для владельцев квартир, частных домов, государственных и коммерческих организаций.</p>
            <h2 class="title-post">Стоимость и как заказать</h2>
            <p>Для заказа отделки пластиковых окон внутри необходимо осуществить ряд действий:</p>
            <ol>
               <li>Сделать заявку по телефону или оставить в режиме онлайн.</li>
               <li>Дождаться обратного звонка менеджера и обсудить детали заказа.</li>
               <li>По предварительной договоренности на объект выезжает мастер и производит внутреннюю отделку окна.</li>
               <li>По окончании работы обработанная часть внутреннего проема окна окрашивается в любой цвет. При выборе расцветки важно учитывать дизайн и особенности помещения.</li>
            </ol>
            <p>Цена работы на откосы зависит от параметров оконной конструкции, уровня сложности выполнения работы.</p>
            <p>Наша компания «Windows Group» предлагает заказать отделку окон снаружи по выгодным ценам в Украине. Мы гарантируем быстрое и качественное выполнение услуги из сертифицированного материала от известных производителей.</p>
            <p>Узнать цены откосов можно на сайте в прайсе или, позвонив по указанному телефону.</p>
         </div>
      </div>
   </section>
   <section class="section-other-section section-other-type-windows">
      <div class="container">
         <h2 class="title-section">Другие Виды Наших Работ</h2>
         <ul class="list-item-catalog colum-3">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/uslugi/tonirovanie-okon/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/toning-windows.feb7c0e1.webp" class="img-all img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue"><span>Тонирование</span> <span class="name-block">окон</span></span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/uslugi/laminaciya-okon/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/bg-laminaciya-okon-header.aa2fb8d0.jpg" class="img-all img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue"><span>Ламинация </span><span class="name-block">окон</span></span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/uslugi/bronirovanie-okon/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/bronir-link.2c991c8a.jpg" class="img-all img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue"><span>Бронирование </span><span class="name-block">окон</span></span></div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();
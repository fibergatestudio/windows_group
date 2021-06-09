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
   <section class="section-welcome-page bg-servises-glass bg-installation-window-sills">
      <div class="container">
         <div class="text-welcome">
            <h1>Установка подоконников</h1>
         </div>
      </div>
   </section>
   <section class="section-top-page">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
         <p class="text-custom-page">Подоконник является незаменимым атрибутом, дополняющим оконную конструкцию.
             Правильно установленная подоконная плита обеспечивает надежную эксплуатацию и герметичность евроокна.
             Компания «Windows Group» предлагает заказать установку подоконника по лучшим ценам в Киеве и Киевской области.</p>
         <ul class="list-item-catalog list-type-glass-fasad colum-4">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-window-sills.e8c633fe.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-window-sills-2.49230e32.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-window-sills-3.6b3b5581.png" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-window-sills-4.b027d839.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
         </ul>
          <p class="text-custom-page mt-lg-4">Подоконная доска выступает не только элементом для завершения окна, но и в качестве теплоизолятора.
              Простое приспособление решает сразу несколько проблем с сохранением тепла, запотеванием стекол, закрытием пространства между
              стенами и оконной конструкцией.</p>
      </div>
   </section>
   <section class="section-preference sills">
      <div class="container">
         <h2 class="title-section">Наши Прeимущества</h2>
         <ul class="list-preference">
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-stars"></i> <span class="title">Подоконники от лучших европейских брендов</span>
                  <p>Мы предлагаем подоконники от самых известных брендов проверенных временем</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-color-palette"></i> <span class="title">Широкая палитра цветов и материалов</span>
                  <p>У нас есть подоконники любого цвета и материала, которые идеально подойдут под интерьер вашего помещения</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-worker"></i> <span class="title">Выполняем доработки</span>
                  <p>Доработаем подоконник так, чтобы он вам идеально подошел (сверление вентиляционных отверствий, вырезы, скосы и другие виды работ)</p>
               </div>
            </li>
            <li>
               <div class="block">
                  <i class="icon icon-block icon-like"></i> <span class="title">Доверие</span>
                  <p>Успешно установили 122877 подоконников</p>
               </div>
            </li>
            <li>
               <div class="block">
                  <i class="icon icon-block icon-shield"></i> <span class="title">Гарантия</span>
                  <p>Мы уверены в качестве своих услуг и поэтому готовы дать гарантию 10+ лет</p>
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
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
               <span class="title">Заявка</span>
               <p>Позвоните нам или оставьте заявку на сайте</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title">Выезд Замерщика</span>
               <p>Мы договоримся о замере на удобное для вас время</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works icon-colors"></i> <span class="number-scheme-works">3</span></div>
               <span class="title">Выбор цвета и материала</span>
               <p>Наши специалисты помогут вам грамотно подобрать материал и цвет подоконника согласно вашим требованиям и пожеланиям</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works work"></i> <span class="number-scheme-works">4</span></div>
               <span class="title">Выполнение работ</span>
               <p>Привезем и установим подоконники в удобное для вас время</p>
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
               <span class="title px-4">Выбор цвета и материала</span>
               <p class="px-2">Наши специалисты помогут вам грамотно подобрать материал и цвет подоконника согласно вашим требованиям и пожеланиям</p>
               <div class="block-scheme-works"><i class="icon-scheme-works icon-colors"></i> <span class="number-scheme-works">3</span></div>
            </li>
            <li class="">
               <span class="title">Гарантия</span>
               <p class="px-2">Мы уверены в качестве своих услуг и поэтому готовы дать гарантию 10+ лет на материалы и 5 лет на работы</p>
               <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">5</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title mt-3">Выезд Замерщика</span>
               <p class="px-5">Мы договоримся о замере на удобное для вас время</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works work"></i> <span class="number-scheme-works">4</span></div>
               <span class="title mt-3">Выполнение работ</span>
               <p class="px-5">Привезем и установим подоконники в удобное для вас время</p>
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
         <h2 class="title-section">Установка пластикового подоконника в Киеве по лучшим ценам</h2>
         <div class="text-custom-page">
            <p>Подоконные доски из ПВХ материала обладают рядом преимуществ:</p>
            <ul>
               <li>· высоким уровнем прочности и надежности;</li>
               <li>· стойкостью к изгибам при установке на нестандартные формы евроокна;</li>
               <li>· защитой от ультрафиолетовых лучей;</li>
               <li>· пожароустойчивостью;</li>
               <li>· теплоизоляцией;</li>
               <li>· легкостью монтажа и ухода;</li>
               <li>· безопасностью эксплуатации.</li>
            </ul>
            <p>В наших каталогах представлены подоконные плиты в различных расцветках и дизайнерских идеях. Широкий ассортимент позволяет воплотить даже самые смелые решения и задумки, вплоть до размещения в одном помещении подоконников различных расцветок.</p>
            <p></p>
            <h2 class="title-post">Описание услуги</h2>
            <p>Установка подоконника характеризуется несколькими преимуществами:</p>
            <ul>
               <li>· профессиональным монтажом с отсутствием швов;</li>
               <li>· износостойкостью и устойчивостью к различным повреждениям;</li>
               <li>· защитой от ветровых нагрузок, попадания влаги и уличной пыли;</li>
               <li>· длительным сроком эксплуатации.</li>
            </ul>
            <p>Установка подоконника осуществляется с учетом подгона боковых зазоров между стенами и доской до 3-4 мм. Торцевые части подоконной плиты располагаются в боковых откосах внутренних стен в пределах 15-20 мм.</p>
            <h2 class="title-post">Процесс установки</h2>
            <p>Технология монтажа пластикового подоконника включает в себя следующие этапы:</p>
            <ol>
               <li>Зачистку рабочей зоны от мусора и скопившейся пыли.</li>
               <li>При использовании горизонтального уровня, под наклоном на 5 мм вниз, выставляется подоконная доска. Пластиковые подоконники выравниваются и устанавливаются в плотном примыкании к оконным блокам. Данная процедура необходима для стекания образующегося конденсата вниз.</li>
               <li>После установки плиты применяется монтажная пена для заполнения свободного пространства и обеспечения герметичности конструкции.</li>
               <li>На завершающем этапе производится защита торцевой части подоконной доски заглушками и удаление пленки с поверхности плиты. Важно не снимать защитное покрытие преждевременно из-за риска повреждения изделия.</li>
            </ol>
            <p>При самостоятельной установке часто допускаются ошибки, что нарушает целостность всей оконной системы. Поэтому монтаж подоконных досок лучше доверить специалистам.</p>
            <h2 class="title-post">Стоимость и как заказать</h2>
            <p>Для заказа установки пластикового подоконника потребуется осуществить несколько действий:</p>
            <ol>
               <li>Сделать заявку по телефону или онлайн.</li>
               <li>Заказать замерщика для измерений и предварительного расчета стоимости услуги. При необходимости по индивидуальным замерам изготавливается новое изделие.</li>
            </ol>
            <p>По завершению изготовления осуществляется доставка и профессиональный монтаж конструкции.</p>
            <p>Цена установки подоконника зависит от особенности установленных окон, формы и проема помещения, затратности материалов и работы. У нас вы сможете подобрать подоконные плиты любой модели, или заказать изготовление подоконника с установкой. Узнать стоимость на услуги можно на сайте или по телефону.</p>
         </div>
      </div>
   </section>
   <section class="section-other-section section-other-type-windows">
      <div class="container">
         <h2 class="title-section">Другие Виды Наших Работ</h2>
         <ul class="list-item-catalog colum-3">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/uslugi/otdelka-otkosov/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/otdelka-otkosov-header.58cb9a55.jpg" class="img-all img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue"><span>Отделка </span><span class="name-block">откосов</span></span></div>
               </div>
            </li>
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
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();

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

<div class="main page-servises-glass servises">
   <!-- <section class="section-welcome-page bg-servises-glass bg-replacement-windows-glass">
      <div class="container">
         <div class="text-welcome">
            <h1>Замена стеклопакетов</h1>
         </div>
      </div>
   </section> -->
   <section class="section-top-page">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
         <h2 class="title-post title-post-top">Замена стеклопакетов</h2>
         <p class="text-custom-page"><strong>Замена стеклопакета</strong> – это установка новой светопрозрачной конструкции, изготовленной по индивидуальным параметрам. Ремонтировать и заменять стекло самостоятельно не рекомендуется, потому, как стеклопакет является единой и сложной конструкцией. При неправильной установке могут быть нарушены основные характеристики стеклопакета: теплоизоляция и звукоизоляция.</p>
         <p class="text-custom-page">
            Компания «Windows Group» предлагает недорогую замену стеклопакетов в Киеве с гарантией качества проделанных работ. Также наши специалисты могут провести диагностику окон ПВХ, оперативно выявить и устранить имеющиеся недостатки.
         </p>
         <ul class="list-item-catalog list-type-glass-fasad colum-4">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/replacement-windows-glass-1.b7c5a3d8.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/replacement-windows-glass-2.e672696f.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/replacement-windows-glass-3.baba3b6f.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/replacement-windows-glass-4.98f17757.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
         </ul>
         <div class="text-custom-page pt-lg-3">
            <h2 class="title-post">В каких случаях стоит поменять стеклопакет</h2>
            <span>Основные причины поменять стеклопакет:</span>
            <ul class="ml-3">
               <li>● когда разбит стеклопакет, то это нарушает целость и герметичность оконной конструкции; из-за маленького скола стекло может запотевать и пропускать холодный воздух в помещение;</li>
               <li>● когда произошла разгерметизация стеклопакета, тогда требуется срочный ремонт стеклопакета, из-за риска сильного образования конденсата, что является причиной нарушения защитных функций окна;</li>
               <li>● для улучшения безопасности в квартирах и домах, где находятся маленькие дети и пожилые люди; установка закаленного стекла или триплекса увеличивают прочность надежность оконной конструкции, что поможет уберечь ваших близких от случайного выпадения из окна;</li>
               <li>● при естественном износе окон, которые стали пропускать воздух, плохо сохраняют тепло зимой и комфортную температуру летом; в данном случае понадобится замена старого стеклопакета на новый;</li>
               <li>● при необходимости замены стеклопакета на более функциональный стеклопакет (увеличить количество камер, улучшить шумоизоляцию и энергоэффективность).</li>
            </ul>
            <p>Мы предлагаем <a href="<?=get_bloginfo('home')?>/plastikovye-okna/">недорогие пластиковые окна в Киеве</a> стандартной и нестандартной формы в различных расцветках. Узнать цены на замену однокамерного стеклопакета на двухкамерный можно на сайте или по телефону.</p>
         </div>
      </div>
   </section>
   
   <section class="section-banner">
      <div class="text-banner">
         <h5 class="title">Разбился или запотевает стеклопакет?</h5>
         <span class="title-2">Проведем замену или ремонт</span> <span class="text">Изготовим и установим новый стеклопакет на окно любого типа и размера</span> <span class="phone">0 800 111 222</span> <a href="<?=get_bloginfo('home')?>/vyzov-zamershchika/" class="btn btn-custom-project btn-more-details">Подробнее</a>
      </div>
      <img src="<?php bloginfo('template_url') ?>/images/bg-img-page-glass.8c01f47e.jpg" class="img-fluid" alt="photo-product1">
   </section>

   <div class="block-form-inline">
      <div class="container">
         <form class="call-back-form">
               <div class="form-group"><label><input class="form-control" name="your-name" placeholder="Ваше имя*"></label></div>
               <div class="form-group"><label><input class="form-control" name="tel-460" placeholder="Телефон*"></label></div>
               <div class="form-group"><label><input type="email" class="form-control" name="your-message" placeholder="E-mail"></label></div>
               <button type="submit" class="btn btn-success">Перезвоните Мне</button>
            </form>
      </div>
   </div>

   <section class="section-post section-post-windows">
      <div class="container">
         <h2 class="title-section">Полная замена стеклопакета или отдельных стекол</h2>
         <p class="text-custom-page">Оконные профильные системы изначально укомплектованы съемными штапиками, позволяющими при необходимости снять и заменить стеклопакет или отдельное стекло.
         Замена отдельного стекла осуществляется при его повреждении или для усовершенствования функциональных характеристик. Такой вид ремонта обходится значительно дешевле, чем полная замена стеклопакета. Замене подлежит только светопрозрачная часть окна, при этом не требуется демонтаж и повторный монтаж.
         Полная замена стеклопакета необходима при нарушении целостности герметика (разгерметизации), возможной усадке здания или сильном механическом повреждении окна. Кроме того, часто <strong>установка</strong> нового стеклопакета осуществляется для улучшенной защиты помещения от проникновения холода и влаги.
         Установка новых качественных оконных конструкций помогает сохранить тепло, что позволяет значительно сэкономить на оплате коммунальных услуг.
         </p>
      </div>
   </section>

   <section class="section-table-price section-post section-post-windows">
      <div class="container">
         <h2 class="title-section">Цены на Стеклопакеты</h2>
         <div class="wrapper-table">
            <table class="table-page-glass table-windows">
               <thead>
                  <tr>
                     <td>Тип стеклопакета</td>
                     <td>Формула стеклопакета</td>
                     <td>Светопропускание</td>
                     <td class="td-100">Сопротивление теплопередачи</td>
                     <td>Цена за м<sup>2</sup></td>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>Однокамерный</td>
                     <td>4-10-4-10-4i</td>
                     <td>73</td>
                     <td>73</td>
                     <td>1095 грн</td>
                  </tr>
                  <tr>
                     <td>Двухкамерный</td>
                     <td>4-10ar-4-10ar-4i</td>
                     <td>62</td>
                     <td>62</td>
                     <td>1213 грн</td>
                  </tr>
                  <tr>
                     <td>Трехкамерный</td>
                     <td>4-16Ar-4zero</td>
                     <td>71</td>
                     <td>71</td>
                     <td>837 грн</td>
                  </tr>
                  <tr>
                     <td>Однокамерный энергосберегающий</td>
                     <td>4Sol-10-4-10-4i</td>
                     <td>73</td>
                     <td>73</td>
                     <td>1355 грн</td>
                  </tr>
                  <tr>
                     <td>Двухкамерный энергосберегающий</td>
                     <td>4i-14ar ACS-4-16ar ACS-4i</td>
                     <td>73</td>
                     <td>73</td>
                     <td>2338 грн</td>
                  </tr>
                  <tr>
                     <td>Двухкамерный мультифункциональный</td>
                     <td>4Sol-14ar-4-16ar-4i</td>
                     <td>67</td>
                     <td>67</td>
                     <td>1557 грн</td>
                  </tr>
                  <tr>
                     <td>Трехкамерный энергосберегающий</td>
                     <td>4Sel-10ar-4-10ar-4</td>
                     <td>55</td>
                     <td>55</td>
                     <td>1410 грн</td>
                  </tr>
                  <tr>
                     <td>Трехкамерный мультифункциональный</td>
                     <td>4-14Ar-4-14Ar-4i</td>
                     <td>70</td>
                     <td>70</td>
                     <td>1251 грн</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </section>
   
   <section class="section-preference">
      <div class="container">
         <h3 class="title-section">Наши Прeимущества</h3>
         <ul class="list-preference">
            <li>
               <div class="block">
                  <i class="icon icon-block icon-worker"></i> <span class="title">Мы Все Сделаем за Вас</span>
                  <p>Вам ненужно никуда ехать, мерить, подбирать. Просто оставьте заявку, а все остальное сделают наши специалисты (замер, подбор нужного типа стеклопакета, демонтаж, установка)</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-save-money"></i> <span class="title mx-xl-3">Лучшие Цены</span>
                  <p>Мы являемся изготовителем стеклопакетов с собственным производством и современным немецким оборудованием. Поэтому цена у нас всегда будет дешевле, а качество по-прежнему на высоте</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-rocket-write"></i> <span class="title">Высокая Скорость</span>
                  <p>В нашей команде работают исключительно квалифицированные и сертифицированные мастера</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-shield"></i> <span class="title">Гарантия</span>
                  <p>Мы ценим и уважаем наших клиентов, поэтому если у вас возникнут какие-то проблемы после замены – все устраним за наш счёт без лишних вопросов, копий договоров, чеков и прочих элементов бюрократии</p>
               </div>
            </li>
         </ul>
      </div>
   </section>

   <section class="section-post section-post-windows">
      <div class="container">
         <h2 class="title-section">Выбор стеклопакета для замены: топ-5 рекомендаций</h2>
         <span class="text-custom-page">При выборе стеклопакета следует учитывать следующие рекомендации:</span>
         <ol class="text-custom-page">
            <li>Высокий уровень звукоизоляции позволяет наслаждаться комфортной тишиной в квартире, избавив Вас от шума с улицы.
            </li>
            <li>
               Повышенная взломостойкость оконных конструкций помогает защитить вас и ваших близких от несанкционированного проникновения.
            </li>
            <li>
               Энергосберегающие стеклопакеты обеспечивают большую экономию потребления энергии, что значительно снижает ваши затраты на отопление. Каждое стекло задерживает часть солнечного света. Поэтому важно помнить, что чем больше стекол, тем темнее будет в помещении.
            </li>
            <li>
               Срок эксплуатации окон ПВХ зависит от качества установленной фурнитуры. При правильном, своевременном обслуживании и эксплуатации пластиковые окна прослужат в течение 40-50 лет.
            </li>
            <li>
               Остекление балконов пластиковыми окнами из алюминиевого профиля защитит лоджию от атмосферного воздействия – получится аналог летней веранды. Однокамерные стеклопакеты обеспечивают отличную звукоизоляцию, но не защищают балкон от потерь тепла. Для лоджии, которая присоединяется к жилой комнате, лучше приобрести теплые окна из трехкамерного профиля с монтажной шириной 70 мм, с двойным энергосберегающим стеклопакетом.
            </li>
         </ol>
      </div>
   </section>

   <section class="section-post section-post-windows">
      <div class="price-type-glass">
         <div class="container">
            <h2 class="title-section">Виды Стеклопакетов</h2>
            <ul class="list-type-glass-page-glass">
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>Однокамерные</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/odnokamernye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass.65a02df2.jpg" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>599</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>Двухкамерные</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/dvuhkamernye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-2.6f5a0aaf.jpg" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>799</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>Трехкамерные</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/trekhkamernye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-3.d1dd173f.jpg" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>999</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>С подогревом</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/s-podogrevom/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-4.52ed71df.png" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>2999</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>Энергосберегающие</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/energosberegayushchie/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-5.ee7d81e0.jpg" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>830</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>Мультифункциональные</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/multifunkcionalnye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-6.d362525d.png" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>899</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>Тонированные</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/tonirovannye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-7.cd42b4f1.jpg" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>862</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>Ударопрочные</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/udaroprochnye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-8.8e64276e.jpg" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>980</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </section>

   <section class="section-buy-from-us">
      <div class="container">
         <h2 class="title-section">Почему Стоит Заказать Замену Стеклопакета Именно у Нас</h2>
         <ul class="list-item-catalog list-buy-from-us">
            <li class="item-catalog">
               <div class="block-item-catalog box-shadow">
                  <div class="header-item-catalog max">Новое Современное Оборудование</div>
                  <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-buy-from-us.020ff813.jpg" class="img-fluid" alt="photo-product1"></a>
               </div>
               <p class="mt-2">Оконные и дверные конструкции производятся на инновационном оборудовании по современным уникальным технологиям. При изготовлении используются исключительно качественные материалы и фурнитура. </p>
            </li>
            <li class="item-catalog">
               <div class="block-item-catalog box-shadow">
                  <div class="header-item-catalog max">Собственное Производство</div>
                  <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-buy-from-us-2.700470b9.jpg" class="img-fluid" alt="photo-product1"></a>
               </div>
               <p class="mt-2">Собственное производство по новым европейским стандартам позволяет выпускать металлопластиковые окна и двери самого высокого качества. </p>
            </li>
            <li class="item-catalog">
               <div class="block-item-catalog box-shadow">
                  <div class="header-item-catalog max">Выполняем Частные и Крупные Заказы</div>
                  <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-buy-from-us-3.85047ddd.jpg" class="img-fluid" alt="photo-product1"></a>
               </div>
               <p class="mt-2">Мы качественно и оперативно выполняется частные и крупные заказы – начиная от изготовления металлопластиковых окон и дверей любых конфигураций и размеров, заканчивая демонтажем старых и установкой новых конструкций. </p>
            </li>
            <li class="item-catalog">
               <div class="block-item-catalog box-shadow">
                  <div class="header-item-catalog max">Собственная Логистика</div>
                  <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-buy-from-us-4.d77ce03a.jpg" class="img-fluid" alt="photo-product1"></a>
               </div>
               <p class="mt-2">Доступные цены, быстрая доставка окон и дверей, изготовленных из высококачественного ПВХ-профиля, по Киеву и области. </p>
            </li>
         </ul>
      </div>
   </section>
   
   <section class="section-about-us">
      <div class="container">
         <div class="info-about-us">
            <h3 class="title-section">О Нашей Компании</h3>
            <p class="mb-0">Если у вас в доме или квартире установлены старые деревянные окна, то рекомендуется заменить их на пластиковые, которые обладают многочисленными достоинствами.</p>
            <p>У нас заказать металлопластиковые окна можно по выгодной цене и с официальной гарантией от производителя.</p>
            <p>Пластиковые окна в Киеве да и по всей Украине производятся из ПВХ или же поливинилхлорида.</p>
            <p>По своей конструкции они очень напоминают деревянные окна, но отличаются более продуманной конструкцией.</p>
            <p>Они состоят из нескольких слоев, каждый из которых отделен друг от друга и располагается в герметичной раме, сконструированной особыми образом.</p>
         </div>
         <div class="form">
            <h3 class="title-form">Оставьте заявку на консультацию менеджера</h3>
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
         <h3 class="title-section">Схема Работы с Нами</h3>
         <ul class="list-scheme-works windowsill d-md-none">
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
               <span class="title">Заявка</span>
               <p>Позвоните нам или оставьте заявку на сайте</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">2</span></div>
               <span class="title">Выезд замерщика</span>
               <p>Договоримся на удобное для вас время для замера и определения нужного типа стеклопакета</p>
            </li>
            <li class="mb-2">
               <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">3</span></div>
               <span class="title">Изготовление</span>
               <p>Быстро изготовим ваш стеклопакет(ы). Если у вас стандартное окно, то с высокой долей вероятности такой пакет уже будет в наличии, что ещё более ускорит решение вашего вопроса</p>
            </li>
            <li class="mb-2">
               <div class="block-scheme-works"><i class="icon-scheme-works work"></i> <span class="number-scheme-works">4</span></div>
               <span class="title">Установка</span>
               <p>Наши специалисты демонтируют старый стеклопакет и установят новый согласно всем строгим нормам и требованиям производителя</p>
            </li>
         </ul>
         <ul class="list-scheme-works-lg windowsill d-none d-md-flex">
            <li class="">
               <span class="title pb-1">Заявка</span>
               <p>Позвоните нам или оставьте заявку на сайте</p>
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">2</span></div>
               <span class="title mt-3">Выезд замерщика</span>
               <p class="big-container">Договоримся на удобное для вас время для замера и определения нужного типа стеклопакета</p>
            </li>
            <li class="">
               <span class="title px-lg-4 pb-1">Изготовление</span>
               <p class="big-container">Быстро изготовим ваш стеклопакет(ы). Если у вас стандартное окно, то с высокой долей вероятности такой пакет уже будет в наличии, что ещё более ускорит решение вашего вопроса</p>
               <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">3</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works work"></i> <span class="number-scheme-works">4</span></div>
               <span class="title mt-3">Установка</span>
               <p class="big-container">Наши специалисты демонтируют старый стеклопакет и установят новый согласно всем строгим нормам и требованиям производителя</p>
            </li>
         </ul>
      </div>
   </section>
    <section class="block-portfolio m-0">
        <div class="container">
            <h3 class="title-section my-3 my-lg-4">Наши Работы</h3>
            <ul class="slider-portfolio-present">
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/remont-okon-project-1.jpeg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>1 190</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/remont-okon-project-2.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>560</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/remont-okon-project-3.png" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>560</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
             <li>
                 <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/remont-okon-project-1.jpeg" class="img-fluid" alt="photo-product1"></a>
                 <div class="footer-item-catalog">
                     <div class="price"><span class="text">Стоимость от</span> <span>1 190</span> <span class="text">грн</span></div>
                 </div>
                 <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
             </li>
             <li>
                 <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/remont-okon-project-2.jpg" class="img-fluid" alt="photo-product1"></a>
                 <div class="footer-item-catalog">
                     <div class="price"><span class="text">Стоимость от</span> <span>560</span> <span class="text">грн</span></div>
                 </div>
                 <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
             </li>
             <li>
                 <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/remont-okon-project-3.png" class="img-fluid" alt="photo-product1"></a>
                 <div class="footer-item-catalog">
                     <div class="price"><span class="text">Стоимость от</span> <span>560</span> <span class="text">грн</span></div>
                 </div>
                 <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
             </li>
         </ul>
            <button class="btn btn-portfolio">Показать Все Работы</button>
        </div>
    </section>
   <section class="section-post section-post-windows bg-post-servises">
      <div class="container">
         <h2 class="title-section">Как осуществляется замена стеклопакета</h2>
         <div class="text-custom-page">
            <p>Замена разбитого стеклопакета в металлопластиковом окне осуществляется в несколько этапов:</p>
            <ul class="ml-3">
               <li>● вызов мастера для замера габаритов и толщины стеклопакета;</li>
               <li>● заключение договора на работы;</li>
               <li>● внесение предоплаты;</li>
               <li>● <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/">изготовление стеклопакетов под заказ;</a></li>
               <li>● доставка и осуществление монтажа.</li>
            </ul>
            <p>При необходимости осуществляется демонтаж и вывоз старого стеклопакета.</p>
            <h2 class="title-post">Преимущества заказа в нашей компании</h2>
            <p>Хотите заменить стеклопакет в балконной двери на качественную и теплоизоляционную светопрозрачную конструкцию? Пришло время обратиться в компанию «Виндовс Груп». Мы поможем Вам выбрать <strong>стеклопакеты</strong>, с учетом функциональных характеристик и назначения.</p>
            <p>В наших каталогах также представлены металлопластиковые <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/energosberegayushchie/">окна с энергосберегающим стеклопакетом</a>, изготовленные из высококачественных и надежных материалов.</p>
            <p>Наши преимущества:</p>
            <ol>
               <li>Изготовление однокамерных, двухкамерных и трехкамерных стеклопакетов по современным технологиям производства.</li>
               <li>Доступные цены в Киеве и Киевской области.</li>
               <li>Оперативное выполнение заказа.</li>
               <li>Осуществление демонтажа и грамотная установка стеклопакетов, с последующим предоставлением гарантии.</li>
               <li>Бесплатная консультация по вопросу ремонта и замены стеклопакетов.</li>
            </ol>
            <p>Рассчитать ориентировочную стоимость замены стекол в стеклопакетах можно на нашем сайте через <a href="<?=get_bloginfo('home')?>/okna/wds/">онлайн-калькулятор окон WDS</a>, или узнать у менеджера-консультанта, позвонив по телефону.</p>
         </div>
      </div>
   </section>
   <section class="section-other-section section-other-type-windows furniture">
      <div class="container">
         <h3 class="title-section">Другие Виды Наших Работ</h3>
         <ul class="list-item-catalog colum-3">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/remont/plastikovyh-okon-i-dverej/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-unlinking-repair.77cb5631.jpg" class="img-all img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Ремонт ПВХ окон и дверей</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/remont/regulirovka-plastikovyh-okon-i-dverej/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-unlinking-repair-2.cbe4aee1.webp" class="img-all img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Регулировка</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/remont/zamena-furnitury/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/furniture.30974f97.jpg" class="img-all img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue"><span>Замена фурнитуры</span></span></div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();


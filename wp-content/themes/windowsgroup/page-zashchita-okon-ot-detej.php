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
   <section class="section-welcome-page bg-servises-glass bg-protection-kids">
      <div class="container">
         <div class="text-welcome">
            <h1>Защита окон от детей</h1>
         </div>
      </div>
   </section>
   <section class="section-top-page">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
         <p class="text-custom-page">Установка защитных элементов является залогом безопасной эксплуатации оконной конструкции.
             Маленькие дети очень любят становиться на подоконник и смотреть в окно.
             Часто шалости заканчиваются печальным результатом и ребенок случайно выпадает из окна.
             Компания «Виндовс Груп» предлагает заказать защиту на окна от детей в Киеве и Киевской области
             по лучшим ценам от известных производителей.</p>
         <ul class="list-item-catalog list-type-glass-fasad colum-4">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/protection-type-kids.0a18f98e.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/protection-type-kids-2.7ca896ae.jpeg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/protection-type-kids-3.821a0d09.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/protection-type-kids-4.e5d9689d.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
         </ul>
         <p class="text-custom-page mt-lg-4">Защитные замки обеспечивают безопасность ребенка при проветривании оконной конструкции.
             Универсальные компактные приспособления препятствует полному раскрытию окна, наглухо закрывая конструкцию или
             блокируя полный разворот створки.
             Установка защиты от выпадения детей не портит внешний вид оконной конструкции. Данный аксессуар подбирается и изготавливается с
             учетом общего дизайна комнаты. Установленный элемент гарантирует не только защиту для детей, пожилых людей и животных,
             но и увеличивает сохранность окна от взлома.</p>
      </div>
   </section>
   <section class="section-preference">
      <div class="container">
         <h2 class="title-section">Наши Прeимущества</h2>
         <ul class="list-preference kids">
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-project"></i> <span class="title">Сертифицированные замки</span>
                  <p>Все замки, которые мы используем для повышения безопасности окон для детей прошли испытания и имеют соответствующие сертификаты качества и безопасности</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-quality"></i> <span class="title">7938 замков установили</span>
                  <p>Успешно установили 7855 замков</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-shield"></i> <span class="title">Гарантия</span>
                  <p>Мы уверены в качестве своих услуг и материалов и готовы дать гарантию 10+ лет</p>
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
         <h2 class="title-section">Заказать защиту на окна от детей в Киеве</h2>
         <div class="text-custom-page">
            <p>Существует несколько типов защиты от детей на окна:</p>
            <ul>
               <li>· детский замок (позволяет раскрывать створку полностью или в режиме микропроветривания);</li>
               <li>· ручка с замком (устанавливается посредством врезания в створку, закрывается специальным ключиком, разновидностью такого типа является рукоятка с кнопкой);</li>
               <li>· съемная ручка (распространенный вариант, при котором снимается рукоятка, а на ее место монтируется заглушка);</li>
               <li>· детский замок с блокиратором и пультом управления (самый надежный способ обезопасить детей от выпадения, устанавливается посредством нажатия на специальный пульт).</li>
            </ul>
            <p>В наших каталогах представлены различные модели защитных элементов для любых типов оконных конструкций.</p>
            <h2 class="title-post">Как выбрать</h2>
            <p>При выборе защиты для детей на окна следует учесть некоторые рекомендации:</p>
            <ol>
               <li>Защитные приспособления удобны в использовании. Один специальный ключ позволяет снять блокировку сразу с нескольких окон.</li>
               <li>Блокираторы могут устанавливаться в независимости от поставленной фурнитуры.</li>
               <li>Установленная ручка с кнопкой открывается тяжело, и с ней не справится ребенку. Для механизма не требуется ключ или специальное устройство, достаточно нажатия кнопки взрослым человеком.</li>
               <li>Практически все блокирующие устройства позволяют свободно проветривать комнату, за исключением рукоятки со встроенным замком. Чтобы проветрить помещение, потребуется снять блокировку ключом.</li>
               <li>При установке рукоятки со встроенным замком не требуется сверление пластикового профиля. Ручка с приспособлением монтируется на место старой снятой рукоятки.</li>
               <li>Отдельно существуют накладные замки, которые устанавливаются на стеклопакет. Данный тип приспособлений защищают евроокно от полного открытия. Однако для монтажа накладной системы потребуется крепление блока в просверленные отверстия.</li>
            </ol>
            <p>Монтаж врезного оконного замка отличается сложностью, требует подготовку и наличие специальных инструментов. Самостоятельная установка способна испортить внешний вид конструкции и нарушить функциональность окна. Поэтому лучше доверить монтажные работы профессионалам. Наши специалисты готовы выехать и профессионально осуществить установку блокирующего приспособления.</p>
            <h2 class="title-post">Стоимость и как заказать</h2>
            <p>Чтобы купить защиту от детей на пластиковые окна, потребуются следующие действия:</p>
            <ol>
               <li>Выбрать понравившийся тип замка и заказать на сайте.</li>
               <li>Сделать заявку на выезд мастера по телефону или онлайн.</li>
               <li>По прибытии на объект специалист осуществит необходимые замеры или установит готовое изделие.</li>
            </ol>
            <p>Стоимость защитных замков на окна от детей зависит от типа блокирующего приспособления и способа монтажа.</p>
            <p>Узнать цены на изделия можно на сайте компании «Windows Group» или, позвонив по указанному телефону.</p>
         </div>
      </div>
   </section>
   <section class="section-other-section section-other-type-windows">
      <div class="container">
         <h2 class="title-section">Другие Виды Наших Работ</h2>
         <ul class="list-item-catalog colum-3">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/uslugi/bezramnoe-osteklenie/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/bezramnoe-osteklenie-header.f3a3edc6.jpg" class="img-all img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Безрамное остекление</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/uslugi/osteklenie-balkonov-i-lodzhij/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/glass-balcony-fasady.022ba88c.jpg" class="img-all img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Остекление балконов и лоджий</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/uslugi/osteklenie-fasadov/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-glass-fasad.dc8c1f37.jpg" class="img-all img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue"><span>Остекление </span><span class="name-block">фасадов</span></span></div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();

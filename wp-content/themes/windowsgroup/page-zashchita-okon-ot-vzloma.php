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
   <section class="section-welcome-page bg-servises-glass bg-protection">
      <div class="container">
         <div class="text-welcome">
            <h1>Защита окон от взлома</h1>
         </div>
      </div>
   </section>
   <section class="section-top-page">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
          <p class="text-custom-page">Если раньше защитным приспособлением от несанкционированного доступа были решетки, то теперь на окна устанавливается специальная фурнитура.
              Уникальная технология позволяет не только защитить здание от взлома, но и предотвратить случайное выпадение из окна детей,
              пожилых людей и животных. Компания «Виндовс Груп» предлагает купить защиту окон от взлома в Киеве и Киевской области по выгодным ценам.</p>
         <ul class="list-item-catalog list-type-glass-fasad colum-4">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-protection.540642bf.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-protection-2.dd2fe928.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-protection-3.f8b263aa.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-protection-4.fbef9771.jpg" class="img-fluid" alt="photo-product1"></div>
               </div>
            </li>
         </ul>
          <p class="text-custom-page mt-lg-4">При взломе помещения злоумышленник выбивает стекло или снимает створку.
              Противовзломные элементы относятся к категории вспомогательной фурнитуры и устанавливаются по просьбе покупателя.
              Главным предназначением защитных приспособлений являются предупреждение демонтажа створки снаружи.
              Применение антивандальной фурнитуры в комбинировании с бронированным закаленным стеклом поможет максимально защитить дом от взлома.
              С использованием перечисленных приспособлений увеличивается время несанкционированного проникновения.</p>
      </div>
   </section>
   <section class="section-preference">
      <div class="container">
         <h2 class="title-section">Наши Прeимущества</h2>
         <ul class="list-preference kids">
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-project"></i> <span class="title px-md-3">Сертифицированные устройства</span>
                  <p>Все устройства, которые мы используем для обеспечения дополнительной безопасности окон и дверей прошли тесты и получили соответствующие сертификаты качества и безопасности</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-quality"></i> <span class="title px-md-5">Поставили защиту на 8733 окна</span>
                  <p>Установили дополнительную защиту на 8733 окна в государственных и частных учреждениях</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-graphic"></i> <span class="title">Опыт 15+ лет</span>
                  <p>Имеем собственные наработки и точно знаем, чем и как грамотно защитить ваши металлопластиковые окна и двери</p>
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
         <h2 class="title-section">Купить защиту окон от взлома в Киеве по лучшим ценам</h2>
         <div class="text-custom-page">
            <p>Существует несколько вариантов защиты окон ПВХ от взлома:</p>
            <ol>
               <li>Противовзломная или антивандальная фурнитура – элементы, которые устанавливаются по всем участкам конструкции. Защита оконной створки от внешнего отжимания обеспечивается посредством вхождения элемента в специально отведенное место.</li>
               <li>Ручка с запиранием на ключ – данное приспособление блокирует открытие окна даже при разбитом стеклопакете.</li>
               <li>Антивандальная рукоятка – поворот рукоятки автоматически блокирует функционирование оконной фурнитуры, поэтому ручка защищена от умышленной попытки проворачивания снаружи.</li>
               <li>Бронированный стеклопакет – изделие, которое при повреждении не разбивается на осколки, а остается на пленке. Замена поверхности осуществляется посредством снятия старой и установки новой противоударной пленки.</li>
               <li>Установка специального фиксатора – бюджетный вариант защиты окна с монтажом четырех угловых фиксаторов. Данный способ универсален, и может применяться на любых оконных конструкциях. Фиксатор управляется с помощью кнопки или замка.</li>
               <li>Монтаж стальных защитных механизмов на точки крепления – установка осуществляется уже на готовые евроокна, блокирующие устройства совместимы со всеми типами фурнитуры для окна. Механизм состоит из стальных крючков и креплений, фиксирующих на двух или четырех опорных точках.</li>
            </ol>
            <p>Антивандальные приспособления применяются для защиты от грабителей в городских квартирах на нижних этажах, торговых центрах, офисных помещениях, частных домах, в банковских и охранных учреждениях.</p>
            <h2 class="title-post">Преимущества и особенности</h2>
            <p>Защита пластикового окна от взлома характеризуется несколькими преимуществами:</p>
            <ul>
               <li>· высоким уровнем износостойкости;</li>
               <li>· предотвращением деформации и коррозии;</li>
               <li>· простой и длительной эксплуатацией;</li>
               <li>· максимальным уровнем безопасности.</li>
            </ul>
            <p>Наилучшим качеством обладают фурнитурные элементы, изготовленные из закаленной твердой стали и обработанные смесями от коррозии. Главным условием для длительного и эффективного использования оконной конструкции является качественная сборка фурнитуры, а также грамотно произведенный монтаж изделий.</p>
            <h2 class="title-post">Как выбрать</h2>
            <p>При выборе защиты окна от взлома и проникновения нужно учитывать несколько рекомендаций:</p>
            <ol>
               <li>Количество вспомогательной противовзломной фурнитуры зависит от требуемого уровня защиты оконных створок.</li>
               <li>Для усиления антивандальных функций устанавливаются защитные замки и противоударные стеклопакеты.</li>
               <li>Эффективность защиты от взлома увеличивается за счет одновременного применения нескольких способ охраны окна. Например, устанавливается многофункциональная электронная защита с сигнализацией, или ночью используются металлические роллеты.</li>
            </ol>
            <p>Специалисты в области монтажа рекомендуют выбирать надежную, многофункциональную антивандальную фурнитуру сертифицированного качества. Именно такая продукция представлена в ассортименте компании «Windows Group».</p>
            <h2 class="title-post">Стоимость и как заказать</h2>
            <p>Чтобы заказать защиту на окна от взлома, потребуется осуществить ряд действий:</p>
            <ol>
               <li>Определиться с понравившимся типом защиты.</li>
               <li>Оставить заявку на выезд мастера по телефону или в режиме онлайн.</li>
            </ol>
            <p>По прибытии на объект специалисты осуществят необходимые замеры или установят готовое изделие.</p>
            <p>Стоимость защиты металлопластиковых окон от взлома зависит от разновидности антивандального приспособления и способа установки. Узнать цены на изделия можно на сайте компании или, позвонив по указанному телефону.</p>
         </div>
      </div>
   </section>
   <section class="section-other-section section-other-type-windows">
      <div class="container">
         <h2 class="title-section">Другие Виды Наших Работ</h2>
         <ul class="list-item-catalog colum-3">
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
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/uslugi/osteklenie-balkonov-i-lodzhij/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/glass-balcony-fasady.022ba88c.jpg" class="img-all img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Остекление балконов и лоджий</span></div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();

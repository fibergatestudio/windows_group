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
            <h1 class="title-post">Москитные Сетки на Окна</h1>
            <p class="text-custom-page">Москитное полотно – важное дополнение окна.
                Сетка препятствует не только попаданию в насекомых, но и уличной пыли.
                Компания «Виндовс Груп» предлагает купить москитную сетку на окно в Киеве и области по лучшей
                цене от производителя. </p>
         </div>
      </div>
   </section>
   <section class="section-calculator-page">
      <div class="container">
         <!--<form class="form-calculator">-->
            <input type="hidden" name="furniture_type" id="furniture_type" value="moskitka">
            <h2 class="title-section d-lg-none">Калькулятор стоимости классической рамочной москитной сетки</h2>
            <div class="top-block-form-mosquito">
               <img src="<?php bloginfo('template_url') ?>/images/img-calcul.c3197096.jpg" class="img-calc img-fluid" alt="photo-product">
               <div class="ml-xl-4">
                  <h2 class="title-section d-none d-lg-block">Калькулятор стоимости классической рамочной москитной сетки</h2>
                  <div class="row flex-lg-column">
                     <div class="col-12 col-lg-4">
                        <div class="form-group"><label class="input-label" for="width">Ширина (мм):</label> <input class="form-control" id="width" aria-describedby="width" placeholder="Ширина" type="number"  min="1" max="999999" step="1" oninput="validity.valid||(value='');"></div>
                     </div>
                     <div class="col-12 col-lg-4 mt-lg-3">
                        <div class="form-group"><label class="input-label" for="height">Высота (мм):</label> <input class="form-control" id="height" aria-describedby="height" placeholder="Высота" type="number"  min="1" max="999999" step="1" oninput="validity.valid||(value='');"></div>
                     </div>
                     <div style="color: red; display: none; padding: 10px 0px 10px 15px;" id="razmer_err1">Ошибка размеров</div>
                  </div>
                  <div class="d-lg-flex block-choose">
                    <input type="hidden" name="chooseСolor" id="chooseСolor" value="0">
                     <div class="chooseСolor">
                        <h5 class="input-label">Выбор цвета рамки</h5>
                        <div>
                           <div class="form-check"><input class="form-check-input" type="radio" name="chooseСolor1" id="white" value="0" checked="checked" onchange="document.getElementById('chooseСolor').value = '0';"> <label class="form-check-label" for="white">Белый стандартный</label></div>
                           <div class="form-check"><input class="form-check-input" type="radio" name="chooseСolor1" id="chooseСolor1" value="1" onchange="document.getElementById('chooseСolor').value = '1';"> <label class="form-check-label" for="chooseСolor1">Цвет на выбор</label></div>
                        </div>
                     </div>
                     <div class="type">
                    <input type="hidden" name="typesetka" id="typesetka" value="0">
                        <div>
                           <h5 class="input-label">Тип сетки</h5>
                        </div>
                        <div>
                           <div class="form-check"><input class="form-check-input" type="radio" name="exampleType1" id="type-windows" value="0" checked="checked" onchange="document.getElementById('typesetka').value = '0';"> <label class="form-check-label" for="type-windows">На окно</label></div>
                           <div class="form-check"><input class="form-check-input" type="radio" name="exampleType1" id="type-door" value="1" onchange="document.getElementById('typesetka').value = '1';"> <label class="form-check-label" for="type-door">На дверь</label></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bottom-section-form">
               <div class="row block-bottom-section-form">
                  <div class="col-lg-4">
                     <div style="color: red; display: none; padding: 0px 0px 10px 0px; line-height: 20px;" id="razmer_err">Заполните, пожалуйста, обязательные поля</div>
                     <button class="btn-calculate-section-bottom" onclick="calculator_moskitka();">Рассчитать стоимость</button>
                     <div class="block-sum-calculate">
                        <div><span class="price">Цена:</span><span>от*</span></div>
                        <div><span class="sum-calculate" id="sum-calculate">0 <span class="currency">грн</span></span></div>
                     </div>
                     <p>Цена является ориентировочной. Окончательную стоимость уточнять у менеджера.</p>
                  </div>
                  <div class="col-lg-8">
                     <div class="block-right border-left-form">
                        <div class="form-group"><label for="exampleInputName"><input name="your-name" class="form-control" id="exampleInputName" placeholder="Ваше имя*"></label></div>
                        <div class="form-group"><label for="exampleInputPhone"><input name="tel-460" class="form-control" id="exampleInputPhone" placeholder="Телефон*"></label></div>
                        <div class="form-group"><label for="exampleInputEmail"><input name="your-message" type="email" class="form-control" id="exampleInputEmail" placeholder="Е-mail"></label></div>
                        <div class="form-group"><button class="send-request">Отправить заявку</button></div>
                     </div>
                  </div>
               </div>
            </div>
         <!--</form>-->
      </div>
   </section>
   <section class="section-type-mosquito">
      <div class="container">
         <div class="list">
            <div>
               <h2 class="title-block">Сетка на Окна</h2>
               <div class="block-type-mosquito">
                  <div class="img-block d-flex">
                     <div class="img-mosquito"><img src="<?php bloginfo('template_url') ?>/images/type-windows.f9ac7d72.webp" class="img-fluid" alt="product"></div>
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
                        <span>Цена: <span class="price">220 </span>грн. / м<sup>2</sup></span>
                     </div>
                  </div>
                  <div class="text">
                     <p>Москитные сетки на окна — это необходимо дополнение для окон.
                         Сетчатая конструкция позволяет защитить дом не только от насекомых в летний период,
                         но и от попадания пыли для жителей крупных городов либо у дороги.
                         Сетки производятся из нескольких видов материалов и может иметь любой цвет,
                         что отлично впишется  в любой дизайн.</p>
                     <button class="btn btn-custom-project"><span class="icon icon-phone-table"></span> Перезвоните мне</button>
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
                  <div class="form-group"><input type="hidden" name="type" value="Сетки На Окна"></div>
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
         <h2 class="title-section">Купить москитную сетку на окна в Киеве</h2>
         <div class="text-custom-page">
            <h2 class="title-post">Виды москитных сеток</h2>
            <p>Сетки на окна бывают следующих разновидностей:</p>
            <ul>
               <li>· на липучках;</li>
               <li>· рамочные;</li>
               <li>· раздвижные;</li>
               <li>· рулонные (роллетные);</li>
               <li>· сетки-плиссе.</li>
            </ul>
            <p>Сетчатое полотно на липучке – конструкция, закрепленная липучками по всей площади оконной конструкции. Модель отличается низкой ценой, простым уходом и монтажом. Отсутствие жесткой рамки позволяет устанавливать конструкцию любого размера и формы внутри рамы.</p>
            <p>Рамочная – бывает внешней и наружной, устанавливается внутри проема. Внешняя сетка монтируется уголками, позволяющими снимать конструкцию. Москитное полотно внутри окна, устанавливается вне зависимости от монтажа. Защитная система фиксируется внутри светового проема посредством крепления металлическими крючками на оконном профиле.</p>
            <p>Раздвижная – принцип работы основывается на функционировании дверей-купе. По периметру конструкция оснащается уплотнительным ворсом, служащим преградой для проникновения насекомых внутрь помещения. Алюминиевые раздвижные сетки повторяют все положения створок окна, передвигаясь по роликовому механизму. Данная модель устанавливается только для раздвижных оконных конструкций на балконах, лоджиях, террасах и верандах.</p>
            <p>Рулонная – тип сетчатой конструкции, устанавливаемый внутри или снаружи окна. При необходимости защитного барьера полотно выдергивается с помощью шнура. Главным преимуществом является отсутствие необходимости снятия с окон на время холодов. Рулонная модель применяется на мансардных этажах.</p>
            <p>Сетка-плиссе – конструкция, наподобие гармошки, со складками шириной в 10 мм, перекрывающую оконные проемы любой формы и высоты. Для установки и складывания плиссированного полотна в проем, необходимо ослабить или натянуть шнур.</p>
            <h2 class="title-post">Особенности</h2>
            <p>Антимоскитная сетка на окно изготавливается из следующих материалов:</p>
            <ol>
               <li>Обычное полотно – ячеистый полимерный материал серого цвета. Отлично задерживает насекомых, но система малоэффективна от уличной пыли.</li>
               <li>Антипыль – защитная конструкция от пыли, изготовленная из полиамида. Применяется в местах, где через ячейки в помещение проникает мелкий гнус.</li>
               <li>Антипыльца – специальное полотно для людей, страдающих сезонной аллергией. Отличается меньшим размером ячеек для задерживания уличной пыли.</li>
               <li>Антикошка – сетка улучшенной прочности, выдерживающая когти кошек и птиц. Увеличенная толщина нити со специальной пропиткой защищена от повреждений и разрывов. Прочная конструкция способна выдерживать вес карабкающейся кошки.</li>
               <li>Ультравью – прозрачное полотно из негорючего материала. Данная модель отличается уменьшенной толщиной нити, что улучшает пропуск света через ячейки.</li>
               <li>Солнцезащитная сетка – конструкция с нанесенной алюминиевой пленкой для отражения 90% естественного света. Главным преимуществом сетчатого полотна является скрытие происходящего в комнате от посторонних.</li>
               <li>Файбергласс – стеклопластиковая сетка повышенной прочности. Изделие не подвергается влиянию внешних негативных факторов (солнца, ветра, перепадов температуры).</li>
            </ol>
            <p>В наших каталогах представлены различные модели защитных полотен для окна. На изделия, представленные в ассортименте, распространяется гарантия.</p>
            <h2 class="title-post">Как выбрать</h2>
            <p>При выборе москитных сеток на окна в Киеве следует учитывать несколько моментов:</p>
            <ol>
               <li>Для изготовления рамной конструкции предпочтительно выбирать алюминий, который в отличие от пластика прочный и маловесный.</li>
               <li>Раздвижные оконные системы, имеющие более двух активных створок, подразумевают установку сетчатой защиты на внутренних створках. При закрытии внешнего проема избежать зазоров не получится, даже при одинаковом размере створок.</li>
               <li>При эксплуатации рулонное полотно придерживается до полного скручивания, во избежание повреждения конструкции. При необходимости механизм «москитки» чистится не реже 1-2 раза в год.</li>
            </ol>
            <p>У нас вы сможете купить сетку, изготовленную с учетом параметров проема и особенностей помещения.</p>
            <h2 class="title-post">Преимущества</h2>
            <p>Сетка на окна характеризуется несколькими достоинствами:</p>
            <ul>
               <li>· эстетичностью;</li>
               <li>· свободным проветриванием комнаты;</li>
               <li>· защитой;</li>
               <li>· простотой ухода.</li>
            </ul>
            <p>По предпочтениям клиента антимоскитное полотно красится в любой цвет, или декорируется рисунками и узорами.</p>
            <h2 class="title-post">Стоимость</h2>
            <p>Стоимость москитной сетки на окна зависит от вида, типа конструкции, размера, формы и цвета.</p>
            <p>Наша компания «Windows Group» предлагает заказать москитные сетки на окно в Киеве по выгодной стоимости. Узнать цены можно на сайте или, позвонив по телефону.</p>
         </div>
      </div>
   </section>
   <section class="section-other-section section-other-type-windows">
      <div class="container">
         <ul class="list-item-catalog colum-3">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/na-dveri/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-2.c9a2d7a3.jpg" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Москитные сетки на двери</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/antikoshka/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-3.9b0b1c96.webp" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Москитные сетки + Антикошка</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/antipyl/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-4.4bf91518.webp" class="img-all img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Москитные сетки Антипыль</span></div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();
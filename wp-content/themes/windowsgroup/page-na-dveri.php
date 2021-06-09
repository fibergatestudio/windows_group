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
            <h1 class="title-post">Москитные Сетки На двери</h1>
            <p class="text-custom-page">
             Назойливые насекомые проникают в дом не только через окна, но и через двери.
                 Компания «Windows Group» предлагает купить москитные сетки на двери в Киеве и
                 Киевской области по лучшим ценам.
            </p>
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
               <h2 class="title-block">Сетка на Двери</h2>
               <div class="block-type-mosquito">
                  <div class="img-block d-flex">
                     <div class="img-mosquito"><img src="<?php bloginfo('template_url') ?>/images/type-windows-2.c9a2d7a3.jpg" class="img-fluid" alt="product"></div>
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
                        <span>Цена: <span class="price">360 </span>грн. / м<sup>2</sup></span>
                     </div>
                  </div>
                  <div class="text">
                     <p>С наступлением тепла, приходят и назойливые насекомые от которых поможет москитная сетка на двери.
                         Мелкоячеистое полотно, обеспечивающее защиту помещения от пыли, мелких насекомых и мусора.
                         Производится сетка из таких материалов как: нейлон, полиэстер, фибергласс, хлопок.</p>
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
                  <div class="form-group"><input type="hidden" name="type" value="Сетка на Двери"></div>
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
         <h2 class="title-section">Купить москитную сетку на двери в Киеве</h2>
         <div class="text-custom-page">
            <p>Москитная сетка на балконную дверь бывает следующих разновидностей:</p>
            <ul>
               <li>· рулонная;</li>
               <li>· раздвижная;</li>
               <li>· магнитная;</li>
               <li>· сетка-плиссе.</li>
            </ul>
            <p>Рулонная модель - алюминиевая коробка со смотанным полотном. Рулон фиксируется снаружи дверного проема, если створка открывается внутрь помещения. При необходимости сетчатая конструкция достается путем вытягивания шнура. На зимний сезон рулон не снимается.</p>
            <p>Раздвижное антимоскитное полотно - функционирует по принципу купе. Каркас рамки бывает алюминиевым или пластиковым. Сетчатая конструкция состоит из направляющих и роликов. Передвижение обеспечивается при помощи специальных ползунков.</p>
            <p>Магнитная сетка – шторка с магнитами, расположенными по всей длине. Легкие створки сцепляются сразу после прохождения через дверной проем, не пропуская песок и насекомых. Кроме полотна на магнитах также существует распашная москитная дверь. Одна створка подвешивается на петли, а другая – оснащается магнитом с автоматическим доводчиком.</p>
            <p>Плиссированное антимоскитное полотно – изготовлено из плотного полимерного материала. Гофрированная сетка складывается по принципу гармошки посредством горизонтальных или вертикальных направляющих. Сложенная конструкция внешне напоминает жалюзи.</p>
            <h2 class="title-post">Особенности</h2>
            <p>Москитная сетка на двери – мелкоячеистое полотно, обеспечивающее защиту помещения от пыли, мелких насекомых и мусора. Сетчатая конструкция производится из нескольких типов материалов:</p>
            <ol>
               <li>Нейлон – материал, характеризующийся эластичностью, легкостью и сверхпрочностью.</li>
               <li>Полиэстер – легкое и плотное синтетическое полотно, отличающееся сходством с изделием из натурального материала.</li>
               <li>Фибергласс – композитный полимер с содержанием стекловолокна, обладающий стойкостью, прочностью и надежностью.</li>
               <li>Хлопок – натуральное полотно повышенной экологичности и воздухонепронцаемости.</li>
            </ol>
            <p>Также в ассортименте москитных сеток имеется отдельная система – антикошка. Сетчатая конструкция отличается высокой устойчивостью к зубам и когтям домашних кошек и птиц. Данное изделие характеризуется сверхпрочностью, производится из виниловых нитей с полиэстеровым напылением. Конструкция размещается на усиленном профиле. Для большей стойкости и жесткости в моделе «антикот» применяется технология армирования.</p>
            <h2 class="title-post">Как выбрать</h2>
            <p>При покупке антимоскитной сетки следует обратить внимание на следующие детали:</p>
            <ol>
               <li>Стандартные полотна с параметрами 1х1 мм подходят для монтажа в домах и квартирах.</li>
               <li>Система «антипыль» с параметрами 0,25х0,25 мм служит не только защитой от пыли, но и от мелких насекомых.</li>
               <li>Для двери меньших размеров рекомендуется монтаж компактного полотна и, наоборот.</li>
               <li>Цвет сетки должен совпадать с общим стилем помещения.</li>
            </ol>
            <p>Мы предлагаем вызвать на дом замерщика для составления эскиза будущего изделия. Наш специалист подскажет оптимальный вариант защитного полотна для вашего дома.</p>
            <h2 class="title-post">Преимущества</h2>
            <p>Москитные сетки на двери обладают несколькими достоинствами:</p>
            <ul>
               <li>· компактной и устойчивой формой;</li>
               <li>· легкостью в эксплуатации;</li>
               <li>· простым монтажом и демонтажем;</li>
               <li>· доступной ценой.</li>
            </ul>
            <p>Сетка на двери характеризуется устойчивостью и надежностью конструкции. По желанию клиента полотно окрашивается в любые цвета и декорируется.</p>
            <h2 class="title-post">Стоимость</h2>
            <p>Стоимость защитной москитной конструкции зависит от ряда факторов:</p>
            <ul>
               <li>· вида;</li>
               <li>· размеров;</li>
               <li>· элементов крепления;</li>
               <li>· комплектации и дополнительных опций;</li>
               <li>· цвета.</li>
            </ul>
            <p>Наша компания «Виндовс Груп» предлагает заказать антимоскитные сетки на двери от производителя, по выгодным ценам в Украине. Узнать стоимость изделий можно на сайте или, позвонив по указанному телефону.</p>
         </div>
      </div>
   </section>
   <section class="section-other-section section-other-type-windows">
      <div class="container">
         <ul class="list-item-catalog colum-3">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/antikoshka/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-3.9b0b1c96.webp" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Москитные сетки Антикошка</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/antipyl/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-4.4bf91518.webp" class="img-all img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Москитные сетки антипыль</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/rolletnye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-5.995dbc5f.webp" class="img-all img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Ролетные антимоскитные сетки</span></div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();
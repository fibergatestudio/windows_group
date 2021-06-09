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

<div class="main page-mosquito">
   <section class="section-top-post">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
         <div class="top-post-page">
            <h1 class="title-post">Анти-москитные сетки</h1>
            <p class="text-custom-page">Сложно представить оконную конструкцию без москитной сетки.
                Современные «москитки» легко устанавливаются и снимаются без нарушения функционирования окна.
                Наша компания «Виндовс Груп» предлагает купить москитную сетку в Киеве и Киевской области по
                выгодным ценам.</p>
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
         <ul class="list">
            <li>
               <h2 class="title-block">Сетка на Окна</h2>
               <div class="block-type-mosquito">
                  <div class="img-block d-flex">
                     <div class="img-mosquito"><img src="<?php bloginfo('template_url') ?>/images/type-windows.52fd1937.jpg" class="img-fluid" alt="product"></div>
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
                      <p>
                          Москитные сетки на окна — это необходимо дополнение для окон.
                          Сетчатая конструкция позволяет защитить дом не только от насекомых в летний период,
                          но и от попадания пыли для жителей крупных городов либо у дороги.
                          Сетки производятся из нескольких видов материалов и может иметь любой цвет,
                          что отлично впишется  в любой дизайн.
                      </p>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/na-okna/" class="btn btn-custom-project">Подробнее</a>
                  </div>
               </div>
            </li>
            <li>
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
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/na-dveri/" class="btn btn-custom-project">Подробнее</a>
                  </div>
               </div>
            </li>
            <li>
               <h2 class="title-block">Сетка «Антикошка»</h2>
               <div class="block-type-mosquito">
                  <div class="img-block d-flex">
                     <div class="img-mosquito"><img src="<?php bloginfo('template_url') ?>/images/type-windows-3.103f37fc.jpg" class="img-fluid" alt="product"></div>
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
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/antikoshka/" class="btn btn-custom-project">Подробнее</a>
                  </div>
               </div>
            </li>
            <li>
               <h2 class="title-block">Сетка «Антипыль»</h2>
               <div class="block-type-mosquito">
                  <div class="img-block d-flex">
                     <div class="img-mosquito"><img src="<?php bloginfo('template_url') ?>/images/type-windows-4.7a03583e.jpg" class="img-fluid" alt="product"></div>
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
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/antipyl/" class="btn btn-custom-project">Подробнее</a>
                  </div>
               </div>
            </li>
            <li>
               <h2 class="title-block">Ролетные Сетки</h2>
               <div class="block-type-mosquito">
                  <div class="img-block d-flex">
                     <div class="img-mosquito"><img src="<?php bloginfo('template_url') ?>/images/type-windows-5.b319b992.jpg" class="img-fluid" alt="product"></div>
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
                        <span>Цена: <span class="price">1499 </span>грн. / м<sup>2</sup></span>
                     </div>
                  </div>
                  <div class="text">
                      <p>Ролетные или рулонные сетки изготавливаются из прочных высококачественных материалов, устойчивых к внешним воздействиям. Приспособление представляет собой конструкцию, состоящую из алюминиевого короба со скрученным полотном и регулирующим шнуром. Алюминий – металл устойчивый к деформации и коррозии, поэтому система может устанавливаться в оконные и дверные проемы любых помещений.</p>
                      <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/rolletnye/" class="btn btn-custom-project">Подробнее</a>
                  </div>
               </div>
            </li>
            <li>
               <h2 class="title-block">Раздвижные Сетки</h2>
               <div class="block-type-mosquito">
                  <div class="img-block d-flex">
                     <div class="img-mosquito"><img src="<?php bloginfo('template_url') ?>/images/type-windows-6.6e4ea40b.jpg" class="img-fluid" alt="product"></div>
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
                        <span>Цена: <span class="price">1599 </span>грн. / м<sup>2</sup></span>
                     </div>
                  </div>
                  <div class="text">
                     <p>Принцип работы раздвижной антимоскитной конструкции схож с функционированием купейных дверей.
                         Перемещение сетки осуществляется посредством специальных направляющих элементов.
                         Ползунки гарантируют легкое передвижение полотна, повторяя полностью положения створок.
                         Конструкция оснащается щеточным уплотнителем, обеспечивающим герметичность защитной системы.</p>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/razdvizhnye/" class="btn btn-custom-project">Подробнее</a>
                  </div>
               </div>
            </li>
            <li>
               <h2 class="title-block">Сетка Плиссе</h2>
               <div class="block-type-mosquito">
                  <div class="img-block d-flex">
                     <div class="img-mosquito"><img src="<?php bloginfo('template_url') ?>/images/type-windows-7.a9f7ad29.jpg" class="img-fluid" alt="product"></div>
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
                        <span>Цена: <span class="price">2699 </span>грн. / м<sup>2</sup></span>
                     </div>
                  </div>
                  <div class="text">
                      <p>
                          Плиссированное полотно может устанавливаться в вертикальном или горизонтальном направлении.
                          По внешнему виду конструкция напоминает жалюзи. Каркас москитной сетки монтируется в оконный проем с помощью плунжерных приспособлений.
                          Складывание и раскладывание плиссированной сетки осуществляется по принципу гармошки.
                          Защитное плиссированное полотно – оптимальный выбор для обустройства веранд, беседок, крытых бассейнов, террас, балконов и лоджий.
                      </p>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/plisse/" class="btn btn-custom-project">Подробнее</a>
                  </div>
               </div>
            </li>
            <li>
               <h2 class="title-block">Сетка под Цвет Окна</h2>
               <div class="block-type-mosquito">
                  <div class="img-block d-flex">
                     <div class="img-mosquito"><img src="<?php bloginfo('template_url') ?>/images/type-windows-8.23f51dd1.jpg" class="img-fluid" alt="product"></div>
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
                      <p>Москитные сетки выполняют не только защитную функцию, но и служат декоративным дополнением окна.
                          Существуют не только традиционные белые или синие сетки, но и изделия в разном цветовом исполнении.</p>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/cvetnye/" class="btn btn-custom-project">Подробнее</a>
                  </div>
               </div>
            </li>
         </ul>
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
            <img src="<?php bloginfo('template_url') ?>/images/map-ukraine-new.7f39b14f.png" class="d-none d-md-block img-fluid" alt="map">
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
         <h2 class="title-section">Закажите Антимоскитную Сетку Онлайн</h2>
         <form class="form-windowsill sending-mosquito-net">
            <ul class="form-windowsill-wrapper">
               <li class="top-row-wrapper">
                  <div class="form-group"><label for="form-windowsill-1">Укажите тип сетки</label> <input id="form-windowsill-1" name="type" class="form-control" placeholder=""></div>
                  <div class="form-group"><label for="form-windowsill-2">Укажите ширину сетки мм</label> <input id="form-windowsill-2" name="width" class="form-control" placeholder="600"></div>
                  <div class="form-group"><label for="form-windowsill-3">Укажите необходимое количество</label> <input id="form-windowsill-3" name="quantity" class="form-control" placeholder="1"></div>
                  <div class="form-group"><label for="form-windowsill-4">Укажите высоту сетки мм</label> <input id="form-windowsill-4" name="hight" class="form-control" placeholder="1200"></div>
                  <div class="form-collapse-control">
                     <div class="btn-add-type" onclick="addMosquitoForm(this)" data-clone-btn>+</div>
                  </div>
               </li>
               <li class="bottom-row-wrapper">
                  <div class="form-windowsill-description mosquito-description">
                     <div class="form-group"><label></label> <input name="city" class="form-control" placeholder="Ваш город"></div>
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
            <div class="block-video"><iframe src="https://www.youtube.com/embed/kWJPtODD9Oo" loading="lazy"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
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
   <section class="block-portfolio">
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
    <section class="section-post section-post-windows">
        <div class="container">
            <h2 class="title-section">Купить москитную сетку в Киеве</h2>
            <div class="text-custom-page">

                <h2 class="title-post">Виды москитных сеток</h2>
                <p>Москитная сетка бывает следующих разновидностей:</p>
                <ol>
                    <li>Рамочная - представляет собой рамку в виде прямоугольника без перекладин.
                        Для придания жесткости конструкции, на высоте проема больше 1 м, поперек прикрепляется планка.
                        К полотну прилагаются специальные ручки, позволяющие легко вставлять и вынимать рамку.</li>
                    <li>Рулонная – данный вид подразумевает контейнер с сеткой, прикрепленный вверху проема.
                        Растягивание полотна осуществляется вытягиванием шнура. Подходит для постоянно открытого проема.
                    </li>
                    <li>Распашная - изготавливается на профиле с дополнительными прикрепленными уголками.
                        Посередине фиксируется поперечный импост для жесткости и защиты полотна от деформации.
                        Для исключения самопроизвольного распахивания устанавливается автоматический доводчик.
                        Применяется на открытой террасе, веранде, балконе, лоджии.</li>
                    <li>Раздвижная - отличается легкостью перемещения полотна по рельсовому механизму.
                        Конструкция прикрепляется с внутренней стороны рамы.
                        Основным достоинством раздвижного москитного полотна является предотвращение промерзания в холодную пору года.
                        Используется в качестве дополнительного элемента раздвижных окон на балконе и лоджии.</li>
                    <li>Сетка-плиссе – по внешнему виду напоминает горизонтальные или вертикальные жалюзи.
                        Является единственным типом для перекрытия проема шириной не больше 5 м, высотой не более 3,2 м.
                        Применяется в бассейне крытого типа, зимнем саду, на террасе. Модель не требует демонтажа на зиму.</li>
                    <li>Плунжерная - представляет собой полотно, прикрепленное к проему при помощи пружинных цилиндров.
                        Для одного проема требуется по 2 плунжера на каждую сторону. Устанавливается снаружи и внутри проема, даже при перекрывании рамы откосом.</li>
                    <li>Магнитная - монтируется в проеме при помощи липучек.
                        Конструкция позволяет свободно проходить через дверь или окно, автоматически соединяя полотно магнитами,
                        имеет универсальное применение в любом типе помещений. При загрязнении легко снимается и стирается.</li>
                    <li> Сетка от комаров на липучке – разновидность не имеет ограничений по установке.
                        Липучки прикрепляются по всем сторонам полотна. Данная модель отличается низкой стоимостью и ограниченным сроком эксплуатации.</li>
                </ol>
                <h2 class="title-post">Особенности (характеристики, материалы и т.п.)</h2>
                <p>Производители предлагают следующие разновидности противомоскитных сеток:</p>
                <ol>
                    <li>Полотно-стандарт.</li>
                    <li>«Антипыльца».</li>
                    <li>«Антикошка».</li>
                    <li>«Антипыль».</li>
                    <li>Ультравью.</li>
                    <li>Солнцезащитная светоотражающая.</li>
                    <li>Файбергласс.</li>
                </ol>
                <p> В наших каталогах представлены популярные модели качественных сертифицированных изделий.</p>
                <h2 class="title-post">Как выбрать</h2>
                <p>Перед тем, как купить москитные сетки в Киеве, нужно определиться с несколькими моментами:</p>
                <ul>
                    <li>·         местом установки полотна;</li>
                    <li>·         точными параметрами проема;</li>
                    <li>·         прочностью конструкции;</li>
                    <li>·         возможностью снятия сетки;</li>
                    <li>·         декором полотна;</li>
                    <li>·         вспомогательным функционалом («антипыльцой», светоотражением и т.д.).</li>
                </ul>
                <p>Определившись с моделью полотна, можно позвонить в «Виндовс Груп», вызвать на дом замерщика, или заказать интересующий товар на сайте.</p>
                <h2 class="title-post">Преимущества</h2>
                <p>Антимоскитная сетка характеризуется рядом преимуществ:</p>
                <ul>
                    <li>·         легким креплением;</li>
                    <li>·         свободным проветриванием комнаты;</li>
                    <li>·         простотой ухода;</li>
                    <li>·         безвредностью;</li>
                    <li>·         безопасностью.</li>
                </ul>
                <p>Под разные модели пластиковых окон в каталоге вы можете выбрать изделие под любой дизайн помещения.</p>
                <h2 class="title-post">Стоимость</h2>
                <p>
                    Цена изделия зависит от вида, типа конструкции, формы, размера и цвета. Наша компания предлагает заказать антимоскитные сетки в Киеве по выгодной цене от производителя. Узнать предварительную стоимость можно на сайте или позвонить по телефону.
                </p>
            </div>
        </div>
    </section>
   <section class="section-other-section mosquito">
      <div class="container">
         <h2 class="title-section">Вместе с Москитными Сетками Выбирайте так же</h2>
         <ul class="list">
            <li>
               <a href="<?=get_bloginfo('home')?>/uslugi/tonirovanie-okon/">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/toning-windows.567f9d54.jpg" class="img-fluid" alt="product"></div>
                  <span class="block-title">Тонирование окон</span>
               </a>
            </li>
            <li>
               <a href="<?=get_bloginfo('home')?>/uslugi/laminaciya-okon/">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/window-lamination.4aa1fd0a.jpg" class="img-fluid" alt="product"></div>
                  <span class="block-title">Ламинация окон</span>
               </a>
            </li>
            <li>
               <a href="<?=get_bloginfo('home')?>/komplektuyushchie/podokonniki/">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/windowsills.3f58dd60.jpg" class="img-fluid" alt="product"></div>
                  <span class="block-title">Подоконники</span>
               </a>
            </li>
            <li>
               <a href="<?=get_bloginfo('home')?>/komplektuyushchie/zashchitnye-rolety/">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/roller.9a19120a.jpg" class="img-fluid" alt="product"></div>
                  <span class="block-title">Защитные ролеты</span>
               </a>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();
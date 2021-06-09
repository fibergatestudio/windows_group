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

<div class="main page-one-glass">
   <section class="section-welcome-page bg-one-glass">
      <div class="container">
         <div class="text-welcome">
            <h1>Энергосберегающие стеклопакеты</h1>
         </div>
      </div>
   </section>
   <section class="section-top-page">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
         <h2 class="title-post title-post-top">Стеклопакеты</h2>
         <p class="text-custom-page">Энергосберегающий стеклопакет отличается наличием в своей конструкции специального
             низкоэмиссионного стекла. Благодаря высокому коэффициенту теплоизоляционной способности
             пакеты могут использоваться в любых климатических регионах.
             Компания “Виндовс Груп” предлагает купить энергосберегающие стеклопакеты по лучшей цене в Украине.</p>
         <div class="block-systems">
            <div class="container">
               <h2 class="title-section pt-lg-2">Энергосберегающие стеклопакеты</h2>
               <div class="item-type-glass-partitions systems">
                  <div class="img-block img-toning-glass"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-5-2.ee7d81e0.jpg" class="img-fluid" alt="photo-product"></div>
                  <div>
                     <div class="block-right">
                        <div class="block-right-specif">
                           <h2 class="title-block">Характеристики</h2>
                           <dl class="specifications">
                              <dt>Системная глубина:</dt>
                              <dd>60 мм</dd>
                           </dl>
                           <dl class="specifications">
                              <dt>Воздушные камеры:</dt>
                              <dd>3</dd>
                           </dl>
                           <dl class="specifications">
                              <dt>Толщина стеклопакета:</dt>
                              <dd>32 мм</dd>
                           </dl>
                           <ul class="profile-type-list">
                              <li class="profile-type-item">
                                 <ul class="profile-type-preferences">
                                    <li>
                                       <div class="block-right-specif">
                                          <dl class="specifications">
                                             <dt>Теплоизоляция:</dt>
                                             <dd>0,63 м2 °С/Вт</dd>
                                          </dl>
                                       </div>
                                       <div class="progress">
                                          <div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"><span>78%</span></div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="block-right-specif">
                                          <dl class="specifications">
                                             <dt>Звукоизоляция</dt>
                                             <dd>25 Дб</dd>
                                          </dl>
                                       </div>
                                       <div class="progress">
                                          <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span>65%</span></div>
                                       </div>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                           <h2 class="title-block">Гарантия</h2>
                           <dl class="specifications">
                              <dt>Профиль:</dt>
                              <dd>от 10 лет</dd>
                           </dl>
                           <dl class="specifications">
                              <dt>Стеклопакет:</dt>
                              <dd>от 5 лет</dd>
                           </dl>
                           <dl class="specifications">
                              <dt>Фурнитура:</dt>
                              <dd>от 3 лет</dd>
                           </dl>
                           <dl class="specifications">
                              <dt>Монтаж:</dt>
                              <dd>от 3 лет</dd>
                           </dl>
                        </div>
                        <div class="text">
                            <p>Энергосберегающий стеклопакет состоит из низкоэмиссионного стекла, функционирующего по принципу зеркала.
                                Благодаря специальной энергоэффективной обработке с нанесением напыления, стеклянная поверхность отражает
                                тепловое излучение внутри помещения.Энергоэффективные пакеты отличаются легким весом, что снижает нагрузку на несущую раму, петли и фурнитуру.
                                Это значительно увеличивает период эксплуатации конструкции.</p>
                        </div>
                     </div>
                     <div class="footer-item-type-glass-partitions"><span class="item-price-custom"><span>Цена от<span class="sum mx-0"> 830 </span>грн. м<sup>2</sup> </span></span><button class="btn btn-custom-project">Оформить Заказ</button></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="block-form-inline">
      <div class="container">
         <form class="call-back-form">
            <div class="form-group"><label><input name="your-name" class="form-control" placeholder="Ваше имя*"></label></div>
            <div class="form-group"><label><input name="tel-460" class="form-control" placeholder="Телефон*"></label></div>
            <div class="form-group"><label><input name="your-message" type="email" class="form-control" placeholder="E-mail"></label></div>
            <button type="submit" class="btn btn-success">Перезвоните Мне</button>
         </form>
      </div>
   </div>
   <section class="section-like-type">
      <div class="container">
         <h2 class="title-section">Наши Преимущества</h2>
         <div class="block-like-type">
            <ul class="list-scheme-works">
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works production-plant"></i></div>
                  <div>
                     <span class="title">Мы производитель</span>
                     <p>Мы производим стеклопакеты на собственных современных мощностях и это позволяет предложить вам действительно качественное изделие по конкурентной цене без ущерба качеству</p>
                  </div>
               </li>
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works surface1"></i></div>
                  <div>
                     <span class="title">Гарантия</span>
                     <p>Мы уверены в своих стеклопакетах и поэтому готовы дать гарантию более 5 лет</p>
                  </div>
               </li>
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works quality-like"></i></div>
                  <div>
                     <span class="title">Качество</span>
                     <p>23378 довольных клиентов</p>
                  </div>
               </li>
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works sport"></i></div>
                  <div>
                     <span class="title">Профессионализм</span>
                     <p>Уже более 20 лет одним из наших главных направлений является производство стеклопакетов</p>
                  </div>
               </li>
            </ul>
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
    <section class="section-buy-from-us">
        <div class="container">
            <h2 class="title-section">Почему Стоит Заказать Стеклопакет Именно у Нас</h2>
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
    <section class="block-portfolio my-0">
        <div class="container">
            <h2 class="title-section mb-3 mb-lg-4">Наши Работы</h2>
            <ul class="slider-portfolio-present">
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/peregorodki-project-1.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>32 000</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/peregorodki-project-2.png" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>99 200</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/peregorodki-project-3.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>98 000</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
             <li>
                 <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/peregorodki-project-1.jpg" class="img-fluid" alt="photo-product1"></a>
                 <div class="footer-item-catalog">
                     <div class="price"><span class="text">Стоимость от</span> <span>32 000</span> <span class="text">грн</span></div>
                 </div>
                 <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
             </li>
             <li>
                 <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/peregorodki-project-2.png" class="img-fluid" alt="photo-product1"></a>
                 <div class="footer-item-catalog">
                     <div class="price"><span class="text">Стоимость от</span> <span>99 200</span> <span class="text">грн</span></div>
                 </div>
                 <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
             </li>
             <li>
                 <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/peregorodki-project-3.jpg" class="img-fluid" alt="photo-product1"></a>
                 <div class="footer-item-catalog">
                     <div class="price"><span class="text">Стоимость от</span> <span>98 000</span> <span class="text">грн</span></div>
                 </div>
                 <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
             </li>
         </ul>
            <button class="btn btn-portfolio">Показать Все Работы</button>
        </div>
    </section>
   <section class="section-post section-post-windows bg-post-glass">
      <div class="container">
         <h2 class="title-section">Купить энергосберегающие стеклопакеты в Киеве</h2>
         <div class="text-custom-page">
            <p>Энергоэффективные пакеты характеризуются несколькими преимуществами:</p>
            <ul>
               <li>· уменьшением затрат на систему отопления;</li>
               <li>· высоким уровнем теплоизоляции;</li>
               <li>· светопропускной способностью;</li>
               <li>· прозрачностью, как и у обычных стеклопакетов;</li>
               <li>· предупреждением появления конденсата;</li>
            </ul>
            <p>Как таковых недостатков у энергоэффективной конструкции нет, за исключением высокой стоимостью в сравнении с обычными оконными моделями.</p>
            <h2 class="title-post">Виды энергосберегающего стекла.</h2>
            <p>Различаются следующие марки энергосберегающих стеклопакетов:</p>
            <ol>
               <li>К-стекло – отличается устойчивостью к механическим воздействиям. Может использоваться в моноостеклении (цельным стеклом без пакета).</li>
               <li>И-стекло – является самым распространенным видом. Низкоэмиссионные стеклянные вставки используются при производстве панорамных оконных конструкций, возведении зеркальных небоскребов.</li>
               <li>Мультистекло – данный тип функционирует не только зимой, но и летом. При этом экономия энергии получается более значительной.</li>
            </ol>
            <p>Стекло устанавливается так, чтобы сторона с напылением находилась во внутренней части помещения. Это помогает защитить стеклянную поверхность от повреждений.</p>
            <p>Функциональность данного типа стеклопакета оценивается по коэффициенту эмиссии или способности теплопередачи. Максимальное значение эмиссии составляет 1, минимальное – 0. Чем меньше эмиссионный показатель, тем эффективнее стекло, и больше тепла останется в помещении. Наиболее эффективными являются двухкамерные оконные конструкции.</p>
            <p>Если в двухкамерный пакет установить 2 И-стекла, то оконная конструкция будет в несколько раз теплее окна с флоат-вставками. А также в 2 раза теплее евроокна с одним низкоэмиссионным стеклом. И-стекло устанавливается первым и последним покрытием внутрь. Средним энергосберегающее стекло не ставится из-за риска перегрева воздушной камеры и разрушения пакета.</p>
         </div>
         <h2 class="title-post">Кому подойдут</h2>
         <p>Энергоэффективные стеклопакеты применяются в постройках, где требуется снижение затрат на отопление.</p>
         <p>Замена стеклопакета на энергосберегающий обеспечивает экономию в отоплении на 20-35%. Пакеты с мультистеклом являются оптимальным решением для квартир и домов, расположенных с южной и западной сторон. Евроокна с И-стеклами рекомендуются для установки в затененных квартирах, находящихся на восточной и северной стороне.</p>
         <h2 class="title-post">Как ухаживать</h2>
         <p>Правильный уход за стеклопакетом осуществляется:</p>
         <ol>
            <li>Оконный профиль регулярно очищается от пыли и грязи мягкой салфеткой с щадящими моющими средствами.</li>
            <li>Для очистки стеклопакетов используются специальные очистители.</li>
            <li>Резиновые уплотнители чистятся глицерином.</li>
            <li>При необходимости оконная фурнитура регулируется с учетом сезона.</li>
         </ol>
         <p>Для смазки фурнитуры и деталей подходит масло для швейных машинок или машинное масло.</p>
         <h2 class="title-post">Стоимость</h2>
         <p>Наша компания “Windows Group” предлагает заказать энергосберегающие стеклопакеты по цене от производителя в Киеве и области. Узнать стоимость на изделия можно на сайте или, позвонив по телефону.</p>
      </div>
   </section>
   <section class="section-other-section windows">
      <div class="container">
         <ul class="list">
            <li>
               <a href="<?=get_bloginfo('home')?>/plastikovye-okna/">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/plastikovye-okna.395e5f5a.jpg" class="img-not-cover img-fluid" alt="product"></div>
                  <span class="block-title">Металлопластиковые окна</span>
               </a>
            </li>
            <li>
               <a href="<?=get_bloginfo('home')?>/plastikovye-dveri/">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/metalloplastikovye-dveri-2.ccb91392.png" class="img-not-cover img-fluid" alt="product"></div>
                  <span class="block-title">Металлопластиковые двери</span>
               </a>
            </li>
            <li>
               <a href="<?=get_bloginfo('home')?>/komplektuyushchie/podokonniki/">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/windowsill.d0abd467.jpg" class="img-fluid" alt="product"></div>
                  <span class="block-title">Подоконники</span>
               </a>
            </li>
            <li>
               <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/">
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/moskitnye-setki-2.9b9a6c62.jpg" class="img-fluid" alt="product"></div>
                  <span class="block-title">Москитные сетки</span>
               </a>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();
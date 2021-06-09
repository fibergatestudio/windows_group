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
            <h1>Мультифункциональные стеклопакеты</h1>
         </div>
      </div>
   </section>
   <section class="section-top-page">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
         <h2 class="title-post title-post-top">Стеклопакеты</h2>
         <p class="text-custom-page">Уникальная мультифункциональная технология стеклопакета позволяет сэкономить на отоплении, кондиционировании и освещении в помещении.
             Наша компания “”Виндовс Груп” предлагает купить мультифункциональный стеклопакет от известных производителей по лучшим ценам в Киеве
             и области.</p>
         <div class="block-systems">
            <div class="container">
               <h2 class="title-section pt-lg-2">Мультифункциональные стеклопакеты</h2>
               <div class="item-type-glass-partitions systems">
                  <div class="img-block"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-6.d362525d.png" class="m-lg-0 img-fluid" alt="photo-product"></div>
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
                                          <div class="progress-bar" role="progressbar" style="width: 73%;" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"><span>73%</span></div>
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
                                          <div class="progress-bar" role="progressbar" style="width: 58%;" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span>58%</span></div>
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
                           <p>Мультифункциональный стеклопакет представляет собой светопрозрачную конструкцию со специальным многослойным напылением.
                               Основным функциональным слоем является высокоселективное серебро. Изделия, созданные с помощью глубокой вакуумной магнетронной
                               обработки, предупреждают проникновение прямых солнечных лучей в помещение. При этом полностью сохраняется пропускная способность
                               естественного освещения.</p>
                        </div>
                     </div>
                     <div class="footer-item-type-glass-partitions"><span class="item-price-custom"><span>Цена от<span class="sum mx-0"> 899 </span>грн. м<sup>2</sup> </span></span><button class="btn btn-custom-project">Оформить Заказ</button></div>
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
         <h2 class="title-section">Купить мультифункциональный стеклопакет в Киеве</h2>
         <div class="text-custom-page">
            <p>Мультипакет помогает сохранить тепло, не допуская нагрева помещения солнечными лучами. Подобную систему можно сравнить по эффективности и принципу действия с системой климатического контроля.</p>
            <p>Мультифункциональные стекла характеризуются несколькими преимуществами:</p>
            <ul>
               <li>· защитой от жары (до 68% процентов прохлады в летний сезон);</li>
               <li>· энергосбережением в зимний период;</li>
               <li>· обеспечением оптимального климата для роста растений;</li>
               <li>· предотвращением выцветания обоев и мебели;</li>
               <li>· устойчивостью к механическим и химическим воздействиям;</li>
               <li>· предупреждением оледенения и конденсата окна.</li>
            </ul>
            <p>Недостатками многофункционального стеклопакета является задержка тепла и утрата функциональности при повреждении энергосберегающего слоя.</p>
            <h2 class="title-post">Кому подойдут</h2>
            <p>Мультифункциональные пакеты универсальны в применении не только зимой, но и летом. Используются в любых коммерческих, промышленных, административных зданиях, жилых домах и квартирах. В особенности эффективны на объектах, где присутствует интенсивное отопление и сезонная вентиляция.</p>
            <p>Мультифункциональные стекла позволяют использовать однокамерный пакет с аналогичными функциональными характеристиками, как у двухкамерного изделия. Благодаря такой взаимозаменяемости обеспечивается минимальная нагрузка на петли и фурнитуру, за счет чего продлевается срок эксплуатации.</p>
            <h2 class="title-post">Как правильно выбрать</h2>
            <p>При выборе мультипакета следует учитывать определенные нюансы:</p>
            <ol>
               <li>Обращать внимание на селективность стекла или отношение между пропуском света и солнечной энергией. Чем выше селективность, тем меньшее количество тепла проходит через стекло.</li>
               <li>Проверить многофункциональное покрытие можно, поднеся зажженную спичку к стеклу. Если в отражении виден красный цвет пламени, значит, перед вами оригинальный мультифункциональный стеклопакет. Из-за разного химического состава стеклопакета цвет огня может незначительно отличаться.</li>
               <li>Узнать подлинность мультиопционального покрытия можно по тону. У качественного изделия наружная поверхность зеркальная, а при взгляде под углом – зеленоватая или голубоватая.</li>
               <li>Для монтажа оконных конструкций необходимо привлекать профессионалов. Грамотная установка – гарантия долговечного срока службы окна.</li>
            </ol>
            <p>Наши специалисты готовы выехать на объект, произвести необходимые замеры для будущего изделия, а также установить готовые оконные конструкции.</p>
            <p>В процессе эксплуатации изделия не рекомендуется использовать солнцезащитные фольгированные шторки. Они значительно снижают пропускную способность света. Взаимодействие фольгированного изделия и мультипакета приводит к разрушению стекла и химической реакции аргона.</p>
            <h2 class="title-post">Цены</h2>
            <p>Стоимость мультифункционального стеклопакета зависит от марки и материала профиля, качества используемого стекла. Наша компания “Windows Group” предлагает заказать мультифункциональный стеклопакет различной конфигурации в Украине. Узнать цены можно на сайте или, позвонив по телефону. На всю продукцию предоставляется гарантийное обслуживание.</p>
         </div>
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
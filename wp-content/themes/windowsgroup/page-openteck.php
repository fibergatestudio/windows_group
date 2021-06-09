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

<div class="main page-brand-windows">
   <section class="section-welcome-page bg-servises-glass bg-one-glass">
      <div class="container">
         <div class="text-welcome">
            <img src="<?php bloginfo('template_url') ?>/images/type-windows-brand-opentech.c0ec51c2.svg" class="img-brand img-fluid" alt="brand">
            <h1>окна openteck</h1>
         </div>
      </div>
   </section>
   <section class="section-top">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
         <h2 class="title-post title-post-top text-center">Openteck окна в Киеве</h2>
         <p class="text-custom-page">
             Оконные конструкции украинского производителя Опентек являются достойным аналогом известной марки окон «Рехау».
             Продукция соответствует стандартам качества и технологий по требованиям ДСТУ.
             Купить окна Опентек по лучшим ценам можно на сайте компании «Windows Group».В наших каталогах представлены актуальные модели металлопластиковых конструкций Опентек в Киеве и области.</p>
      </div>
   </section>

         <?php 
            
            global $wpdb;
            $result_params = $wpdb->get_results("SELECT * FROM `{$wpdb -> prefix}window_prices` WHERE `page_name` = 'profilniye_sistemy' ");
            $price_obj = json_decode($result_params[0]->data);
         
         ?>
         
   <section class="section-bank brand-windows">
      <div class="container">
         <h2 class="title-section">Выберите Подходящий Профиль Openteck</h2>
         <ul class="nav nav-pills nav-justified" id="pills-other-glass" role="tablist">
            <li class="nav-item active" role="presentation"><a class="nav-link active" id="pills-type-1-tab" data-toggle="pill" href="#pills-type-1" role="tab" aria-controls="pills-type-1" aria-selected="true" data-parent="#pills-other-glass"><span class="title-tab">Openteck Teck De-lux 60</span> <i class="fa fa-chevron-down"></i></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="pills-type-2-tab" data-toggle="pill" href="#pills-type-2" role="tab" aria-controls="pills-type-2" aria-selected="false" data-parent="#pills-other-glass"><span class="title-tab">Openteck Tesk Elite 70</span> <i class="fa fa-chevron-down"></i></a></li>
         </ul>
         <div class="tab-content" id="pills-other-glassContent">
            <div class="tab-pane fade show active" id="pills-type-1" role="tabpanel" aria-labelledby="pills-type-1">
               <div class="block">
                  <h2 class="title-block-bank d-none d-lg-block">Openteck Teck De-lux 60</h2>
                  <div class="d-lg-flex">
                     <div class="block-left">
                        <a href="#" class="block-img"><i class="icon-flag-ukraine"></i><img src="<?php bloginfo('template_url') ?>/images/opentack-type-1.488342a1.png" class="img-fluid" alt="photo-product1"></a>
                        <div class="block-text-info">
                           <div class="list-specific">
                              <dl class="info-bank brand">
                                 <dt>Количество камер профиля:</dt>
                                 <dd>2</dd>
                              </dl>
                              <dl class="info-bank brand">
                                 <dt>Толщина стенки:</dt>
                                 <dd>000 мм</dd>
                              </dl>
                              <dl class="info-bank brand">
                                 <dt>Количество контуров уплотнения (герметичность):</dt>
                                 <dd>000 мм</dd>
                              </dl>
                              <dl class="info-bank brand">
                                 <dt>Системная глубина профиля:</dt>
                                 <dd>000 мм</dd>
                              </dl>
                              <dl class="info-bank brand">
                                 <dt>Монтажная ширина профиля:</dt>
                                 <dd>000 мм</dd>
                              </dl>
                              <dl class="info-bank brand">
                                 <dt>Max. толщина стеклопакета:</dt>
                                 <dd>000 мм</dd>
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
                                             <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span>50%</span></div>
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
                                             <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span>50%</span></div>
                                          </div>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                           <p class="text-custom-page">Серия De lux представляет четырехкамерную систему. Глубина монтажа составляет 60 мм.
                               Предельная толщина стеклопакета – 32 мм. Элегантные профили обладают улучшенными
                               теплотехническими особенностями, высокой надежностью, отличной звукоизоляцией.
                               Установка продукции ДеЛюкс позволяет поддерживать оптимальный климат в помещении.
                               De lux является отличным соотношением цены в комплекте с функциональными качествами.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-type-2" role="tabpanel" aria-labelledby="pills-type-2-tab">
               <div class="block">
                  <h2 class="title-block-bank d-none d-lg-block">Openteck Tesk Elite 70</h2>
                  <div class="d-lg-flex">
                     <div class="block-left">
                        <a href="#" class="block-img"><i class="icon-flag-ukraine"></i><img src="<?php bloginfo('template_url') ?>/images/opentack-type-2.df2c9366.png" class="img-fluid" alt="photo-product1"></a>
                        <div class="block-text-info">
                           <div class="list-specific">
                              <dl class="info-bank brand">
                                 <dt>Количество камер профиля:</dt>
                                 <dd>2</dd>
                              </dl>
                              <dl class="info-bank brand">
                                 <dt>Толщина стенки:</dt>
                                 <dd>000 мм</dd>
                              </dl>
                              <dl class="info-bank brand">
                                 <dt>Количество контуров уплотнения (герметичность):</dt>
                                 <dd>000 мм</dd>
                              </dl>
                              <dl class="info-bank brand">
                                 <dt>Системная глубина профиля:</dt>
                                 <dd>000 мм</dd>
                              </dl>
                              <dl class="info-bank brand">
                                 <dt>Монтажная ширина профиля:</dt>
                                 <dd>000 мм</dd>
                              </dl>
                              <dl class="info-bank brand">
                                 <dt>Max. толщина стеклопакета:</dt>
                                 <dd>000 мм</dd>
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
                                             <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span>50%</span></div>
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
                                             <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span>50%</span></div>
                                          </div>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                           <p class="text-custom-page">Оконные конструкции серии Elit являются экономичным пятикамерным профилем с монтажной толщиной 70 мм.
                               Максимальная толщина стеклопакета – 42 мм.
                               Энергосберегающая профильная система является выгодным решением для существенной экономии на отоплении.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section-table-price-brand">
      <div class="container">
         <h2 class="title-block-type-windows">Цены на окна Openteck</h2>
         <span class="small-title">Размер 750 х 1350 мм, 1100 х 1350 мм, 1150 х 1750 мм, 1720 х 1350 мм, Цена от <span class="min-price"><?=$price_obj->opentek->min?></span> грн до <span class="max-price"><?=$price_obj->opentek->max?></span> грн</span>
         <div class="tabs-table-price-brand-glass">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item"><a class="nav-link active icon-one-glass" id="one-glass-close-tab" data-toggle="tab" href="#one-glass-close" role="tab" aria-controls="one-glass-close" aria-selected="true"><span class="px-lg-5">Окно глухое</span></a></li>
               <li class="nav-item"><a class="nav-link one-glass-open" id="one-glass-open-tab" data-toggle="tab" href="#one-glass-open" role="tab" aria-controls="one-glass-open" aria-selected="false"><span class="px-lg-5">Окно открывающиеся</span></a></li>
               <li class="nav-item"><a class="nav-link two-glass" id="two-glass-tab" data-toggle="tab" href="#two-glass" role="tab" aria-controls="two-glass" aria-selected="false"><span>2-створчатое с 1-м открыванием</span></a></li>
               <li class="nav-item"><a class="nav-link two-glass-T-open" id="two-glass-T-open-tab" data-toggle="tab" href="#two-glass-T-open" role="tab"   aria-controls="two-glass-T-open-tab" aria-selected="true"><span>2-створчатое т-образное с 1-м открыванием</span></a></li>
               <li class="nav-item"><a class="nav-link three-glass-one-open" id="three-glass-one-open-tab" data-toggle="tab" href="#three-glass-one-open" role="tab" aria-controls="three-glass-one-open" aria-selected="true"><span>3-створчатое с 1-м открытием</span></a></li>
               <li class="nav-item"><a class="nav-link three-glass-two-open" id="three-glass-two-open-tab" data-toggle="tab" href="#three-glass-two-open" role="tab" aria-controls="three-glass-two-open" aria-selected="true"><span>3-створчатое с 2-я открываниями</span></a></li>
            </ul>
            <div class="tab-content" id="myTabContent">

               <?php 
               $k = 0;
               foreach ($price_obj->opentek as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>

               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>" role="tabpanel" aria-labelledby="<?=$key_w?>-tab">
                  <div class="block-content">
                     <div class="table-tab">
                        <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/<?=$price_obj->opentek->img[$k]?>" class="img-fluid" alt="product"></div>
                        <table class="table-windows">
                           <thead>
                              <tr>
                                 <td>Профиль</td>
                                 <td>Ширина профиля</td>
                                 <td>1-камерный стеклопакет</td>
                                 <td>1-камерный энергозберигающий стеклопакет</td>
                                 <td>2-камерный стеклопакет</td>
                                 <td>2-камерный энергозберигающий стеклопакет</td>
                              </tr>
                           </thead>
                           <tbody>

                              <tr>
                                 <?php
                                 $this_obj = $price_obj->opentek->$key_w;
                                 $j = 0;
                                 foreach ($this_obj as $value) {
                                    $j++;
                                 }                             
                                 $i = 1;
                                 foreach ($this_obj as $key => $value) { ?>
                                    <?php
                                    if ($i%6 === 1) {?>
                                       <td class="name"><?=$value?></td>
                                    <?php } else{ ?>
                                       <td><?=$value?></td>
                                    <?php } 
                                    if ($i%6 === 0 && $i < $j) {?>
                                    </tr><tr>
                                    <?php } 
                                    $i++ ; 
                                 }?>                           
                              </tr>

                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
               </div>

               <?php } 
                  $k++;                
               } ?>
              
            </div>
         </div>
      </div>
   </section>
   <section class="section-calc-link">
      <div class="container">
         <div class="block-calc-link">
            <h2 class="title-section">Калькулятор стоимости окон</h2>
            <div class="block-img-text">
               <div><img src="<?php bloginfo('template_url') ?>/images/img-calc-link.8bcecadf.webp" class="img-fluid" alt="product"></div>
               <div>
                   <p class="text-custom-page">Калькулятор позволяет легко рассчитать стоимость будущей конструкции.
                       Это поможет определится в ценах на металлопластиковые изделия, сравнить варианты.
                       Также калькулятор поможет рассчитать цены на остекление балкона, заказ на офисные,
                       балконные двери с фрамугой или без, раздвижные конструкции.
                       Мы предлагаем широкий выбор окон от ведущих производителей с доставкой по выгодным ценам в Киеве и области.
                       При подсчете стоимости конструкций ПВХ нестандартных форм без профессиональной консультации трудно обойтись.
                       Позвоните по телефону, наш менеджер проконсультирует вас в выборе и просчитает ориентировочную стоимость заказа.</p>
                  <a href="<?=get_bloginfo('home')?>/okna/kalkulyator-okon/" class="link-calc"><span class="block-link-calc"><span><span class="top-title">Оконный калькулятор</span> <span class="small-title">Быстрый расчёт стоимости</span></span></span></a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section-like-type">
      <div class="container">
         <h2 class="title-section">Преимущества Окон Open Teck</h2>
         <div class="block-like-type">
            <ul class="list-scheme-works">
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works sport-top"></i></div>
                  <div>
                     <span class="title">Лидер Рынка</span>
                     <p class="px-lg-5">Окна Rehau входят в ТОП-5 лидеров рынка Европы и Украины</p>
                  </div>
               </li>
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works pig"></i></div>
                  <div>
                     <span class="title">Энергоэффективность</span>
                     <p class="px-lg-5">Снижают потери тепло энергии до 75% и позволяют экономить до -30% на оплате за тепло энергию</p>
                  </div>
               </li>
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works sign"></i></div>
                  <div>
                     <span class="title">Срок Службы 20+ Лет</span>
                     <p>На практике окна без проблем служат более 20 лет при этом не теряют свою прочность и герметичность, а так же отлично сохраняют внешний вид под агрессивным воздействием ультрафиолета, перепада температур и прочих внешних факторов</p>
                  </div>
               </li>
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works technology"></i></div>
                  <div>
                     <span class="title">Шумоизоляция</span>
                     <p>Благодаря передовым технологиям окна Рехау обладают потрясающей способностью эффективно подавлять внешние шумы и поэтому они идеально подходят жителям мегаполисов и маленьких городков</p>
                  </div>
               </li>
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works ecology"></i></div>
                  <div>
                     <span class="title">Экологическая Безопасность</span>
                     <p>Более 20 лет производитель Rehau борется за экологическую чистоту своих окон и не использует в производстве тяжелые металлы и дешевый пластик, что делает их абсолютно безопастными для вас и членов вашей семьи</p>
                  </div>
               </li>
               <li class="">
                  <div class="block-scheme-works"><i class="icon-scheme-works colors"></i></div>
                  <div>
                     <span class="title">Широкая Палитра Цветов</span>
                     <p>Благодаря богатому разнообразию цветов, можно подобрать окна Rehau, которые идеально подойдут к внешнему стилю и интерьеру вашего дома или квартиры</p>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </section>
   <section class="section-form-page-windows">
      <div class="container d-md-flex">
         <div class="block-form-page-windows">
            <span class="title-section">ОСТАВЬТЕ ЗАЯВКУ НА БЕСПЛАТНЫЙ ЗАМЕР</span>
            <form class="form-page-windows free-measurement-form">
               <div class="form-group"><label for="exampleInputName"><input name="your-name" class="form-control" id="exampleInputName" placeholder="Ваше имя*"></label></div>
               <div class="form-group"><label for="exampleInputPhone"><input name="tel-460" class="form-control" id="exampleInputPhone" placeholder="Телефон*"></label></div>
               <button type="submit" class="mt-2 btn btn-more">Отправить</button>
            </form>
         </div>
         <img src="<?php bloginfo('template_url') ?>/images/img-form-windows.73b593aa.jpg" class="img-form img-fluid" alt="photo">
      </div>
   </section>
   <section class="section-scheme-works">
      <div class="container">
         <h2 class="title-section">Схема Работы</h2>
         <ul class="list-scheme-works d-md-none">
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
               <span class="title">Заявка</span>
               <p>Позвоните нам или оставьте заявку на сайте</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title">Замер</span>
               <p>Договоримся о замере на удобную для вас дату и время</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works calculation"></i> <span class="number-scheme-works">3</span></div>
               <span class="title">Расчет</span>
               <p>Мы учтём ваши пожелания и сделаем просчет</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works payment"></i> <span class="number-scheme-works">4</span></div>
               <span class="title">Договор и оплата</span>
               <p>Заключим с вами договор</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">5</span></div>
               <span class="title">Выполнение Заказа</span>
               <p>Обычно выполнение заказа занимает 2-3 рабочих дня</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">6</span></div>
               <span class="title">Доставка И Установка</span>
               <p>Заранее сообщим о готовности заказа и согласуем удобное для вас время доставки и монтажа</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">7</span></div>
               <span class="title">Гарантия</span>
               <p>Дадим гарантию более 10 лет на изделия и 3 лет на работы</p>
            </li>
         </ul>
         <ul class="list-scheme-works-lg d-none d-md-flex">
            <li class="">
               <span class="title">Заявка</span>
               <p>Позвоните нам или оставьте заявку на сайте</p>
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
            </li>
            <li class="">
               <span class="title">Расчет</span>
               <p>Мы учтём ваши пожелания и сделаем просчет</p>
               <div class="block-scheme-works"><i class="icon-scheme-works calculation"></i> <span class="number-scheme-works">3</span></div>
            </li>
            <li class="">
               <span class="title">Выполнение Заказа</span>
               <p>Обычно выполнение заказа занимает 2-3 рабочих дня</p>
               <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">5</span></div>
            </li>
            <li class="">
               <span class="title">Гарантия</span>
               <p>Дадим гарантию более 10 лет на изделия и 3 лет на работы</p>
               <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">7</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title">Замер</span>
               <p>Договоримся о замере на удобную для вас дату и время</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works payment"></i> <span class="number-scheme-works">4</span></div>
               <span class="title">Договор и оплата</span>
               <p class="px-5">Заключим с вами договор</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">6</span></div>
               <span class="title">Доставка и Установка</span>
               <p>Заранее сообщим о готовности заказа и согласуем удобное для вас время доставки и монтажа</p>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-preference">
      <div class="container">
         <h2 class="title-section">Наши Преимущества</h2>
         <ul class="list-preference">
            <li>
               <div class="block">
                  <i class="icon icon-block icon-factory"></i> <span class="title">Без посредника</span>
                  <p>Мы один из крупнейших заводов производителей металлопластиковых окон и дверей в Украине</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-graphic"></i> <span class="title">Опыт</span>
                  <p class="px-2">Работаем на рынке уже более 20 лет</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-shield"></i> <span class="title">Гарантия</span>
                  <p>Даем гарантию более 10 лет на изделия и 5 года на работы</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-like"></i> <span class="title">Доверие</span>
                  <p>102788 Довольных<br/>клиентов</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-rocket-write"></i> <span class="title">Скорость</span>
                  <p>Среднее время выполнения заказа 2-3 рабочих дня</p>
               </div>
            </li>
            <li>
               <div class="block">
                  <i class="icon icon-block icon-payment-2"></i> <span class="title">Гибкая система оплат</span>
                  <p>Платите как вам удобно! Оплачивайте сразу или в рассрочку под 0%</p>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-buy-our-company mosquito">
      <div class="container">
         <div class="block-buy-our-company">
            <div class="info-buy-our-company">
               <h2 class="title-section">Почему стоит заказать окна Open Teck у WindowsGroup</h2>
               <ul class="list-buy-our-company">
                  <li>Мы являемся производителем и работаем с покупателями напрямую без посредников</li>
                  <li>Используем исключительно оригинальный профиль и комплектующие</li>
                  <li>Самые низкие цены</li>
                  <li>Гибкая система оплат</li>
                  <li>Действует программа скидок для заказов от 15,000 грн</li>
                  <li>Благодаря сильному опыту и технологиям производства, полученным за 20+ лет работы, наши окна служат на порядок дольше</li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <section class="section-certificate">
      <div class="container">
         <div class="block-certificate">
            <h2 class="title-section">Гарантии и Сертификаты</h2>
            <div class="block-text-sertificate">
               <p class="text-custom-page">Компания Windowsgroup является партнером и официальным дистрибьютором таких торговых марок как Openteck, Danke, Kraft, WDS, Windoff’s, Rehau и других.
Windowsgroup несет ответственность за предоставляемые услуги и продукцию. Каждый элемент имеет свои эксплуатационные свойства, поэтому на разные виды продукции дается разный срок гарантии. 
Качественные и сертифицированные комплектующие позволяют компании Windowsgroup предоставлять гарантию на целостность, сохранение формы, герметичность, неизменность цвета, а также на функционирование фурнитуры. 
Вся продукция Windowsgoup оригинальна и сертифицирована на территории Украины.
</p>
               <ul class="list-certificate">
                  <li>
                     <img src="<?php bloginfo('template_url') ?>/images/certificate.83e404af.jpg" class="img-fluid" alt="brand" data-toggle="modal" data-target="#exampleModal-zoom">
                     <div class="modal fade" id="exampleModal-zoom" tabindex="-1" aria-labelledby="exampleModal-zoom" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
                              <img src="<?php bloginfo('template_url') ?>/images/certificate-big-img.66dea923.jpg" class="img-fluid" alt="brand">
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <img src="<?php bloginfo('template_url') ?>/images/certificate.83e404af.jpg" class="img-fluid" alt="brand" data-toggle="modal" data-target="#exampleModal-zoom-2">
                     <div class="modal fade" id="exampleModal-zoom-2" tabindex="-1" aria-labelledby="exampleModal-zoom-2" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
                              <img src="<?php bloginfo('template_url') ?>/images/certificate-big-img.66dea923.jpg" class="img-fluid" alt="brand">
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <img src="<?php bloginfo('template_url') ?>/images/certificate.83e404af.jpg" class="img-fluid" alt="brand" data-toggle="modal" data-target="#exampleModal-zoom-3">
                     <div class="modal fade" id="exampleModal-zoom-3" tabindex="-1" aria-labelledby="exampleModal-zoom-3" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
                              <img src="<?php bloginfo('template_url') ?>/images/certificate-big-img.66dea923.jpg" class="img-fluid" alt="brand">
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <img src="<?php bloginfo('template_url') ?>/images/certificate.83e404af.jpg" class="img-fluid" alt="brand" data-toggle="modal" data-target="#exampleModal-zoom-4">
                     <div class="modal fade" id="exampleModal-zoom-4" tabindex="-1" aria-labelledby="exampleModal-zoom-4" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
                              <img src="<?php bloginfo('template_url') ?>/images/certificate-big-img.66dea923.jpg" class="img-fluid" alt="brand">
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <img src="<?php bloginfo('template_url') ?>/images/certificate.83e404af.jpg" class="img-fluid" alt="brand" data-toggle="modal" data-target="#exampleModal-zoom-5">
                     <div class="modal fade" id="exampleModal-zoom-5" tabindex="-1" aria-labelledby="exampleModal-zoom-5" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
                              <img src="<?php bloginfo('template_url') ?>/images/certificate-big-img.66dea923.jpg" class="img-fluid" alt="brand">
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <img src="<?php bloginfo('template_url') ?>/images/certificate.83e404af.jpg" class="img-fluid" alt="brand" data-toggle="modal" data-target="#exampleModal-zoom-6">
                     <div class="modal fade" id="exampleModal-zoom-6" tabindex="-1" aria-labelledby="exampleModal-zoom-6" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
                              <img src="<?php bloginfo('template_url') ?>/images/certificate-big-img.66dea923.jpg" class="img-fluid" alt="brand">
                           </div>
                        </div>
                     </div>
                  </li>
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
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/pvh-okna-project-1.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>35 870</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/pvh-okna-project-2.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>12 765</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/pvh-okna-project-3.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>34 520</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/pvh-okna-project-4.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>22 660</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/pvh-okna-project-5.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>12 890</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/pvh-okna-project-6.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>19 870</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
         </ul>
            <button class="btn btn-portfolio">Показать Все Работы</button>
        </div>
    </section>
   <section class="section-post section-post-windows">
      <div class="container">
         <h2 class="title-section">Виды и серии профилей Openteck</h2>
         <div class="text-custom-page">
             <img src="<?php bloginfo('template_url') ?>/images/block-img-post.18f4051d.jpg" class="block-img-post-left d-none d-md-block img-fluid" alt="img">
             <p>На торговом рынке представлены следующие профили:</p>
            <ul>
               <li>· Standart;</li>
               <li>· De lux;</li>
               <li>· Elit.</li>
            </ul>
            <h2 class="title-post">Преимущества</h2>
            <p>Окна openteck характеризуются следующими преимуществами:</p>
            <ol>
               <li>Надежностью.</li>
               <li>Выгодным соотношением цены и качества.</li>
               <li>Элегантным дизайном.</li>
               <li>Отличной тепло- и шумоизоляцией.</li>
               <li>Простым уходом.</li>
               <li>Пожаробезопасностью.</li>
            </ol>
            <p>Украинский производитель предоставляет гарантию на оконные конструкции. Срок службы изделий составляет более 45-50 лет.</p>
            <h2 class="title-post">Какие окна вам подойдут</h2>
            <img src="<?php bloginfo('template_url') ?>/images/block-img-post-3.18f4051d.jpg" class="block-img-post-left d-none d-md-block img-fluid" alt="img">
            <p>Окна Опен Тек системы Стандарт используются для остекления лоджий, балконов, в офисных и производственных помещениях.</p>
            <p>Оконные конструкции Open teck De lux подходят для установки в квартирах, домах, расположенных недалеко от оживленной дороги. Продукция серии ДеЛюкс используется для остекления проемов нестандартного размера и формы. Изделия из данной серии монтируются в офисных центрах, торговых залах и других зданиях.</p>
            <p>Изделия Elit позволяют изготавливать оконные конструкции нестандартного размера. Продукция серии Элит является оптимальным вариантом для зданий с низкими энергетическими затратами.</p>
            <h2 class="title-post">Как подобрать нужный профиль</h2>
            <p>Чтобы выбрать подходящий профиль, необходимо следовать следующим рекомендациям:</p>
            <img src="<?php bloginfo('template_url') ?>/images/block-img-post-4.e8ca2499.jpg" class="block-img-post-right d-none d-md-block img-fluid" alt="img">
            <ol>
               <li>Профильное покрытие должно быть однородным без градиентов.</li>
               <li>Классический тип ширины профиля составляет 58 мм, ширина 70 мм используется в многоэтажных зданиях, в частности в суровых климатических условиях.</li>
               <li>Толщина профиля варьируется в пределах 2,5-3 мм.</li>
               <li>Количество воздушных камер. Профиль 58 мм включает в себя максимум 3 камеры, 70 мм – от 3 до 5 камер.</li>
               <li>Количество стеклопакетов. Чем больше камер в стеклопакете, тем теплее окно.</li>
               <li>Уплотнителей для рамы должно быть два, чтобы под рамой не собирался конденсат.</li>
            </ol>
            <p>Стоимость профиля Опентека зависит от цвета и ламинации. Ламинированный материал по цене значительно выше простого профиля.</p>
            <h2 class="title-post">Запотевание панорамных окон</h2>
            <p>Панорамные конструкции запотевают по нескольким причинам:</p>
            <ol>
               <li>Высокий уровень влажности из-за недостаточной циркуляции воздуха. Решить проблему можно, проверив работу вентиляционной системы и вытяжки.</li>
               <li>Неплотное прилегание фурнитуры.</li>
               <li>Несоответствие типа стеклопакета в помещении.</li>
               <li>Неправильная регулировка окна.</li>
               <li>Нарушенная работа отопительных приборов.</li>
            </ol>
            <p>Зачастую запотевание оконных конструкций возникает из-за неправильной установки. Проникновения холодного воздуха не избежать, если окно установлено с перекосом или нарушена герметизация.</p>
            <p>Компания «Виндовс Груп» предлагает купить высококачественные окна Опентек по цене производителя с доставкой и монтажом. Узнать стоимость можно на сайте или позвонить по указанным телефонам.</p>
         </div>
      </div>
   </section>
   <section class="section-other-section brand-link">
      <div class="container">
         <h2 class="title-section">Окна Других Брендов</h2>
         <ul class="list-item-catalog colum-4">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/okna/rehau/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Rehau</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/okna/wds/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-brand-wds.5f37c8d5.svg" class="img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">WDS</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/okna/veka/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-brand-veka.5a1822d9.svg" class="img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Veka</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/okna/salamander/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-brand-salamander.4fa97951.svg" class="img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Salamander</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/okna/kbe/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-brand-kbe.0d5c807a.svg" class="img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">KBE</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/okna/viknaland/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-brand-viknaland.ff99421d.svg" class="img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Viknaland</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/okna/aluplast/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-brand-aluplast.19c32497.svg" class="img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Aluplast</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/okna/windoffs/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-brand-vindoffs.590253c8.svg" class="img-all img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Windoff`s</span></div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();

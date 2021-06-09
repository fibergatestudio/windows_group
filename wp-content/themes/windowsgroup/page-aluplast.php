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
            <img src="<?php bloginfo('template_url') ?>/images/type-windows-brand-aluplast.19c32497.svg" class="img-brand img-fluid" alt="brand">
            <h1>окна aluplast</h1>
         </div>
      </div>
   </section>
   <section class="section-top">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
         <h2 class="title-post title-post-top text-center">Окна Алюпласт в Киеве</h2>
          <p class="text-custom-page">Современные качественные окна является одним из главных условий для создания комфортного микроклимата в доме или квартире.
              Рынок предлагает широкий выбор металлопластиковых конструкций.
              Однако выбрать надежного производителя не просто.
              Компания «Виндовс Груп» предлагает купить окна Алюпласт в Киеве и области по лучшей цене.
              В каталогах представлены популярные оконные модели с гарантией качества.</p>
      </div>
   </section>

         <?php 
            
            global $wpdb;
            $result_params = $wpdb->get_results("SELECT * FROM `{$wpdb -> prefix}window_prices` WHERE `page_name` = 'profilniye_sistemy' ");
            $price_obj = json_decode($result_params[0]->data);
         
         ?>
         
   <section class="section-bank brand-windows">
      <div class="container">
         <h2 class="title-section">Выберите подходящее Вам окно ПВХ Aluplast</h2>
         <ul class="nav nav-pills nav-justified" id="pills-other-glass" role="tablist">
            <li class="nav-item active" role="presentation"><a class="nav-link active" id="pills-type-1-tab" data-toggle="pill" href="#pills-type-1" role="tab" aria-controls="pills-type-1" aria-selected="true" data-parent="#pills-other-glass"><span class="title-tab">Ideal 2000</span> <i class="fa fa-chevron-down"></i></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="pills-type-2-tab" data-toggle="pill" href="#pills-type-2" role="tab" aria-controls="pills-type-2" aria-selected="false" data-parent="#pills-other-glass"><span class="title-tab">Ideal 4000</span> <i class="fa fa-chevron-down"></i></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="pills-type-3-tab" data-toggle="pill" href="#pills-type-3" role="tab" aria-controls="pills-type-3" aria-selected="false" data-parent="#pills-other-glass"><span class="title-tab">Ideal 8000</span> <i class="fa fa-chevron-down"></i></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="pills-type-4-tab" data-toggle="pill" href="#pills-type-4" role="tab" aria-controls="pills-type-4" aria-selected="false" data-parent="#pills-other-glass"><span class="title-tab">Energetto 4000</span> <i class="fa fa-chevron-down"></i></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="pills-type-5-tab" data-toggle="pill" href="#pills-type-5" role="tab" aria-controls="pills-type-5" aria-selected="false" data-parent="#pills-other-glass"><span class="title-tab">Energetto 8000</span> <i class="fa fa-chevron-down"></i></a></li>
         </ul>
         <div class="tab-content" id="pills-other-glassContent">
            <div class="tab-pane fade show active" id="pills-type-1" role="tabpanel" aria-labelledby="pills-type-1">
               <div class="block">
                  <h2 class="title-block-bank d-none d-lg-block">Ideal 2000</h2>
                  <div class="d-lg-flex">
                     <div class="block-left">
                        <a href="#" class="block-img"><i class="icon-flag-germany"></i><img src="<?php bloginfo('template_url') ?>/images/aluplast-type-1.d1ed42f7.jpg" class="img-fluid" alt="photo-product1"></a>
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
                           <p class="text-custom-page">Классическая экономичная трехкамерная профильная система имеет монтажную глубину 60 мм с двумя контурами уплотнения. Предельная толщина стеклопакета составляет 3,2 см. Профиль обеспечивает надежную звукоизоляцию до 4 класса (43 дБ), уровень взломостойкости RC2 (WK2). При стандартном комплекте коэффициент сопротивления теплопередачи – Rq=0.63 м2•К/Вт.
                               Окна из профиля Ideal 2000 класса В соответствуют функциональным требованиям, подходят для установки в любых типах зданий. Высокое качество материала и наличие большой камеры для армирующего усилителя с улучшенными показателями энергосбережения и звукоизоляции, позволяет оценить Ideal 2000 как лидера качества среди сегмента трехкамерных оконных систем.
<!--                               <a href="#" class="read-more"><span>Читать далее</span><i class="icon icon-read-more"></i></a>-->
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-type-2" role="tabpanel" aria-labelledby="pills-type-2-tab">
               <div class="block">
                  <h2 class="title-block-bank d-none d-lg-block">Ideal 4000</h2>
                  <div class="d-lg-flex">
                     <div class="block-left">
                        <a href="#" class="block-img"><i class="icon-flag-germany"></i><img src="<?php bloginfo('template_url') ?>/images/aluplast-type-2.334c6380.jpg" class="img-fluid" alt="photo-product1"></a>
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
                           <p class="text-custom-page">Современная пятикамерная профильная система имеет монтажную глубину 70 мм с двумя уплотнительными контурами. Ширина армирующей камеры позволяет использовать усилитель с высокими статическими характеристиками.
                               Максимальная толщина стеклопакета составляет 4 см. Профиль Ideal 4000 обеспечивает уровень взломостойкости RC2 (WK2), надежную звукоизоляцию до 4 класса (43 дБ). Коэффициент сопротивления теплопередачи составляет 0,71 м² °C/Вт.
                               Окна, изготовленные из профиля Ideal 4000, имеют элегантный дизайн и высокие тепло- и шумоизоляционные характеристики. В профильной системе используется специальная технология bonding inside вклеивания стеклопакета, которая повышает уровень взломостойкости и энергосбережения.  </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-type-3" role="tabpanel" aria-labelledby="pills-type-3-tab">
               <div class="block">
                  <h2 class="title-block-bank d-none d-lg-block">Ideal 8000</h2>
                  <div class="d-lg-flex">
                     <div class="block-left">
                        <a href="#" class="block-img"><i class="icon-flag-germany"></i><img src="<?php bloginfo('template_url') ?>/images/aluplast-type-3.13bfaf3e.png" class="img-fluid" alt="photo-product1"></a>
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
                           <p class="text-custom-page">Шестикамерная профильная система Ideal 8000 имеет монтажную глубину 85 мм с предельной толщиной для установки стеклопакета 5 см. За счет наличия дополнительного уплотнительного контура на профиле обеспечиваются высокие эксплуатационные характеристики с защитой от попадания влаги и пыли.
                               Уровень взломостойкости Ideal 8000 составляет RC3, звукоизоляции – до 48 дБ (класса 5). Коэффициент сопротивления теплопередачи составляет 1,0 м² °C/Вт. В профильной системе используется уникальная технология bonding inside вклеивания стеклопакета, используемая для улучшения взломостойкости и энергосбережения окон. Элегантный дизайн, разнообразие конфигураций позволяют изготавливать из профиля окна любых форм. </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-type-4" role="tabpanel" aria-labelledby="pills-type-4-tab">
               <div class="block">
                  <h2 class="title-block-bank d-none d-lg-block">Energetto 4000</h2>
                  <div class="d-lg-flex">
                     <div class="block-left">
                        <a href="#" class="block-img"><i class="icon-flag-germany"></i><img src="<?php bloginfo('template_url') ?>/images/aluplast-type-4.256ee685.jpg" class="img-fluid" alt="photo-product1"></a>
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
                           <p class="text-custom-page">Шестикамерная профильная система Energetto 4000 с монтажной шириной 70 мм отличается улучшенным сохранением энергии и дополнительным контурным уплотнением. Предельная толщина стеклопакета составляет 4,1 см.
                               Армированное усиление из стекловолокна powerdur inside обеспечивает взломостойкость класса RC2, уровень звукоизоляции класса 4 (до 45 дБ). Коэффициент сопротивления тепловой передачи составляет 0,97 м² °C/Вт.
                               Дополнительно в профиле применяется технология вклеивания (bonding inside) и запенивания стеклопакета (foam inside). Оконная система Energetto 4000 применяется для модернизации, характеризуется изысканным внешним видом профиля, пропускающим в помещение большой поток дневного света.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-type-5" role="tabpanel" aria-labelledby="pills-type-5-tab">
               <div class="block">
                  <h2 class="title-block-bank d-none d-lg-block">Energetto 8000</h2>
                  <div class="d-lg-flex">
                     <div class="block-left">
                        <a href="#" class="block-img"><i class="icon-flag-germany"></i><img src="<?php bloginfo('template_url') ?>/images/aluplast-type-5.66b00892.jpg" class="img-fluid" alt="photo-product1"></a>
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
                           <p class="text-custom-page">Профильная система Energetto 8000 разработана для нового сегмента строительства энергосберегающего дома. Окна, изготовленные из данного типа профиля, привлекают классической формой и улучшенными эксплуатационными характеристиками.
                               Шестикамерная система Energetto 8000 имеет монтажную глубину 85 мм и три уплотнительных контура. Предельная толщина для установки стеклопакета составляет 5,1 см.
                               Армированное усиление из стекловолокна обеспечивает взломостойкость RC3 класса, звукоизоляцию до 46 дБ (класса 5). Коэффициент сопротивления теплопередаче составляет 1,07 м² °C/Вт. Дополнительно в профиле применяется технология вклеивания (bonding inside) и запенивания стеклопакета (foam inside).
                           </p>
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
         <h2 class="title-block-type-windows">Цены на окна Aluplast</h2>
         <span class="small-title">Размер 750 х 1350 мм, 1100 х 1350 мм, 1150 х 1750 мм, 1720 х 1350 мм, Цена от <span class="min-price"><?=$price_obj->aluplast->min?></span> грн до <span class="max-price"><?=$price_obj->aluplast->max?></span> грн</span>
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
               foreach ($price_obj->aluplast as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>

               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>" role="tabpanel" aria-labelledby="<?=$key_w?>-tab">
                  <div class="block-content">
                     <div class="table-tab">
                        <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/<?=$price_obj->aluplast->img[$k]?>" class="img-fluid" alt="product"></div>
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
                                 $this_obj = $price_obj->aluplast->$key_w;
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
         <h2 class="title-section">Преимущества Окон Aluplast</h2>
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
               <h2 class="title-section">Почему стоит заказать окна Aluplast у WindowsGroup</h2>
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
               <p class="text-custom-page">Компания Windowsgroup является партнером и официальным дистрибьютором таких торговых марок как Aluplast, Danke, Kraft, WDS, Windoff’s, Rehau и других.
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
         <h2 class="title-section">Виды и серии профилей Алюпласт</h2>
         <div class="text-custom-page">
            <p>Производитель окон Aluplast изготавливает конструкции из следующих видов профиля:</p>
            <ul>
               <li>· IDEAL 2000;</li>
               <li>· IDEAL 4000;</li>
               <li>· IDEAL 8000.</li>
            </ul>
            <img src="<?php bloginfo('template_url') ?>/images/block-img-post.18f4051d.jpg" class="block-img-post-left d-none d-md-block img-fluid" alt="img">
            <p>IDEAL 2000 – экономичная трехкамерная система с глубиной монтажа 60 мм. Предельная толщина стеклопакета составляет 3,2 см. Профильная система характеризуется надежной звукоизоляцией и энергосбережением. Цена на данную модель является доступной из всей линейки продукции.</p>
            <p>IDEAL 4000 – современная пятикамерная профильная система с глубиной монтажа 70 мм. Максимальная толщина стеклопакета – 40 мм. Профиль отличается высокими показателями тепло- и шумозащиты, использованием специальной технологии вклеивания стеклопакета. Из профильной системы Идеал 4000 изготавливаются панорамные модели.</p>
            <img src="<?php bloginfo('template_url') ?>/images/block-img-post-4.e8ca2499.jpg" class="block-img-post-right d-none d-md-block img-fluid" alt="img">
            <p>IDEAL 8000 – теплый шестикамерный профиль. Монтажная глубина составляет 85 мм, предельная толщина стеклопакета – 5 см. Благодаря третьему уплотнительному контуру профиль характеризуется высокой тепловой и звуковой изоляцией, долговечностью, надежностью, противовзломностью.</p>
            <h2 class="title-post">Преимущества</h2>
            <p>Профильные системы Алюпласт соответствует требованиям ДСТУ. ПВХ-профили обладают следующими преимуществами:</p>
            <ol>
               <li>Эстетичностью.</li>
               <li>Высокой герметичностью.</li>
               <li>Улучшенными тепло- и шумоизоляционными свойствами.</li>
               <li>Надежной фурнитурой.</li>
               <li>Вариативность декора, размеров и форм.</li>
               <li>Повышенной противовзломностью.</li>
            </ol>
            <p>Продукция Aluplast отличается длительным сроком эксплуатации – более 40 лет. Отзывы об окнах Алюпласт положительные. Потребители выбирают металлопластиковые конструкции Алупласт из-за соотношения цены с качеством материала.</p>
            <h2 class="title-post">Какие окна вам подойдут</h2>
            <p>Изделия из серии Идеал 2000 применяются для остекления балконов, лоджий, дач, квартир с центральным отоплением.</p>
            <p>Оконные конструкции Идеал 4000 используются для установки в частных домах, квартирах с высокими требованиями по энергосбережению.</p>
            <p>Окна Aluplast Идеал 8000 применяются для остекления частных домов с повышенными требованиями по звукозащите, сохранению энергии.</p>
            <h2 class="title-post">Как подобрать нужный профиль</h2>
            <p>Чтобы правильно выбрать профиль Алюпласт, нужно владеть определенными нюансами:</p>
            <ol>
               <li>При покупке важно учитывать количество камер в профиле. Для владельцев шумных районов рекомендуется профильная система с 6 камерами. Трехкамерные конструкции является оптимальным выбором для остекления лоджий, балконов.</li>
               <li>От ширины рамы зависит уровень тишины и тепла в помещении.</li>
               <li>Разновидность фурнитуры зависит от конструкции, способом открывания створок.</li>
            </ol>
            <img src="<?php bloginfo('template_url') ?>/images/block-img-post-3.18f4051d.jpg" class="block-img-post-left d-none d-md-block img-fluid" alt="img">
            <p>Неправильная установка оконной модели способна перечеркнуть все особенности металлопластиковых конструкций. Наши специалисты осуществят профессиональный монтаж окон Алупласт быстро и качественно.</p>
            <h2 class="title-post">Запотевание панорамных окон</h2>
            <p>Зачастую панорамные окна запотевают. Данное явление связано с появлением конденсата. Существует несколько способов для устранения проблемы запотевания панорамных конструкций:</p>
            <img src="<?php bloginfo('template_url') ?>/images/block-img-post-2.e8ca2499.jpg" class="block-img-post-right d-none d-md-block img-fluid" alt="img">
            <ol>
               <li>Регулярно проветривать комнаты.</li>
               <li>Своевременно проверять вентиляционную систему.</li>
               <li>Устранить повышенный уровень влажности в помещении с помощью осушителя воздуха, вытяжки.</li>
               <li>Установить конвекторы внутри пола для обогрева стекла и испарения влаги.</li>
               <li>Разместить вблизи панорамного окна калорифер или батареи.</li>
               <li>Применить электрообогрев для стекла.</li>
            </ol>
            <p>Компания «Windows Group» предлагает заказать окна Алупласт в Киеве по выгодной стоимости с доставкой и монтажом. Узнать цены на продукцию можно на сайте или позвонить по телефону.</p>
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
                  <a href="<?=get_bloginfo('home')?>/okna/wds" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-brand-wds.5f37c8d5.svg" class="img-fluid" alt="product"></a>
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
                  <a href="<?=get_bloginfo('home')?>/okna/openteck/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-brand-opentech.c0ec51c2.svg" class="img-fluid" alt="product"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Open Teck</span></div>
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
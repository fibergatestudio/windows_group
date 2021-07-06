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

<div class="main page-partitions-plastic page-glass-balcony">
   <section class="section-welcome-page bg-glass-balcony">
      <div class="container">
         <div class="text-welcome">
            <h1>Остекление Балконов и Лоджий в Киеве и Области</h1>
         </div>
      </div>
   </section>

         <?php 
            
            global $wpdb;
            $result_params = $wpdb->get_results("SELECT * FROM `{$wpdb -> prefix}window_prices` WHERE `page_name` = 'osteklenie_balkonov_i_lodzhij' ");
            $price_obj = json_decode($result_params[0]->data);
         
         ?>
         
   <section class="section-top-page">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
         <h2 class="title-post title-post-top mb-lg-3">Застеклить балкон в Киеве по лучшим ценам</h2>
          <p class="text-custom-page">
             Наша компания Windows Group осуществляет монтаж металлопластиковых окон уже более 15 лет. Наши мастера выполняют остекление даже на самых сложных объектах. Панорамные окна, радиусные балконы в коттеджах или высотных домах – все это не проблема для наших сотрудников, имеющих многолетний опыт и безупречную репутацию. Среди наших клиентов – как хозяева квартир и домовладений, так и руководители крупных компаний с множеством точек бизнеса по стране.
          </p>
      </div>
   </section>
   <section class="section-post section-post-windows">
      <div class="container">
         <div class="text-custom-page">
            <h2 class="title-section">Услуги по остеклению балконов и лоджий</h2>
            <p>Стандартные работы по остеклению оконных проемов и балконов</p>
            <p>Наши мастера выполнят стандартный пакет услуг по остеклению точно в срок и на высочайшем профессиональном уровне. ВиндовсГруп гарантирует безупречный результат работы сотрудников.</p>
         </div>
      </div>
   </section>
   <section class="section-top-page">
      <div class="container">
         <ul class="type-glass-balcony">
            <li>
               <h2 class="title-block">П-Образное Остекление</h2>
               <span class="small-text">Размер  800 х 1500 + 2100 х 1500 + 800 х 1500 мм, Цена от <span class="strong-text"><?=$price_obj->p_obraznoye->min?> грн</span> до <span class="strong-text"><?=$price_obj->p_obraznoye->max?></span> грн</span>
               <p>Данное остекление производится в домах серии П-3 (Хрущёва). Устанавливается конструкция из 6 или 4 створок из которых 2 параллельны, монтируется алюминиевый или армированный ПВХ профиль. ПВХ профиль используется для лучшей теплоизоляции, алюминиевый же для защиты от дождя и ветра. Стоимость остекления будет завесить от выбранного материала и конструкции профиля.</p>
               <ul class="nav nav-tabs tabs-glass-balcony" id="P-type" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="wdc-tab" data-toggle="tab" href="#wds" role="tab" aria-controls="wds" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="WDS-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="windoffs-tab" data-toggle="tab" href="#windoffs" role="tab" aria-controls="windoffs" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="windoffs-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="viknaland-tab" data-toggle="tab" href="#viknaland" role="tab" aria-controls="viknaland" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="rehau-tab" data-toggle="tab" href="#rehau" role="tab" aria-controls="rehau" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="salamander-tab" data-toggle="tab" href="#salamander" role="tab" aria-controls="salamander" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="kbe-tab" data-toggle="tab" href="#kbe" role="tab" aria-controls="kbe" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="kbe-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="opentek-tab" data-toggle="tab" href="#opentek" role="tab" aria-controls="opentek" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="veka-tab" data-toggle="tab" href="#veka" role="tab" aria-controls="veka" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="aluplast-tab" data-toggle="tab" href="#aluplast" role="tab" aria-controls="aluplast" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
               </ul>
               <div class="tab-content content-tabs-glass-balcony" id="myP-type">

               <?php 
               $k = 0;
               foreach ($price_obj->p_obraznoye as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>

                  <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>" role="tabpanel" aria-labelledby="<?=$key_w?>">
                     <div class="table-tab">
                        <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/P-type.304f2ce9.png" class="pt-lg-3 img-table-prev img-fluid" alt="photo"></div>
                        <table class="table-windows table-price-windows">
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
                                 $this_obj = $price_obj->p_obraznoye->$key_w;
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
                  
               <?php } 
                  $k++;                
               } ?>

               </div>
               <ul class="list-item-catalog pt-lg-4 mt-3 colum-3">
                  <li class="item-catalog">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-g-1.853671ae.jpg" class="img-fluid" alt="photo"></div>
                  </li>
                  <li class="item-catalog">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-g-2.0d26ebf7.jpg" class="img-fluid" alt="photo"></div>
                  </li>
                  <li class="item-catalog">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-g-3.68010819.jpg" class="img-fluid" alt="photo"></div>
                  </li>
               </ul>
               <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
            </li>
            <li>
               <h2 class="title-block">Г-Образное Остекление</h2>
               <span class="small-text">Размер 2100 х 1500 + 800 х 1500 мм, Цена от <span class="strong-text"><?=$price_obj->g_obraznoye->min?> грн</span> до <span class="strong-text"><?=$price_obj->g_obraznoye->max?></span> грн</span>
               <p>Особенность Г-образного остекления является наличие торцевой перегородки. Один из важных аспектов - максимально точные замеры, чем хуже произведены замеры, тем ниже качество конечного остекления. Остекление делается из ПВХ и алюминиевых профилей, первый самый оптимальный вариант, но и самый дорогой. При Г-образном остеклении вы можете сделать как уютное место для отдыха, так и для работы. На балкон отлично встанет встроенный шкаф и рабочий стол.</p>
                <ul class="nav nav-tabs tabs-glass-balcony" id="G-type" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="wdc-tab-G-type" data-toggle="tab" href="#wds-G-type" role="tab" aria-controls="wds-G-type" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="WDS-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="windoffs-tab-G-type" data-toggle="tab" href="#windoffs-G-type" role="tab" aria-controls="windoffs-G-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="windoffs-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="viknaland-tab-G-type" data-toggle="tab" href="#viknaland-G-type" role="tab" aria-controls="viknaland-G-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="rehau-tab-G-type" data-toggle="tab" href="#rehau-G-type" role="tab" aria-controls="rehau-G-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="salamander-tab-G-type" data-toggle="tab" href="#salamander-G-type" role="tab" aria-controls="salamander-G-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="kbe-tab-G-type" data-toggle="tab" href="#kbe-G-type" role="tab" aria-controls="kbe-G-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="kbe-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="opentek-tab-G-type" data-toggle="tab" href="#opentek-G-type" role="tab" aria-controls="opentek-G-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="veka-tab-G-type" data-toggle="tab" href="#veka-G-type" role="tab" aria-controls="veka-G-type" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="aluplast-tab-G-type" data-toggle="tab" href="#aluplast-G-type" role="tab" aria-controls="aluplast-G-type" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
               </ul>
               <div class="tab-content content-tabs-glass-balcony" id="G-typeContent">

               <?php 
               $k = 0;
               foreach ($price_obj->g_obraznoye as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>

                  <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-G-type" role="tabpanel" aria-labelledby="<?=$key_w?>-G-type">
                     <div class="table-tab">
                        <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/G-type.8766027b.png" class="img-table-prev img-fluid" alt="photo"></div>
                        <table class="table-windows table-price-windows">
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
                                 $this_obj = $price_obj->g_obraznoye->$key_w;
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
                  
               <?php } 
                  $k++;                
               } ?>

               </div>
               <ul class="list-item-catalog pt-lg-4 mt-3 colum-3">
                  <li class="item-catalog">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-g-1.b65a734d.jpg" class="img-fluid" alt="photo"></div>
                  </li>
                  <li class="item-catalog">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-g-2.0273faaf.jpg" class="img-fluid" alt="photo"></div>
                  </li>
                  <li class="item-catalog">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-g-3.7190e20e.jpg" class="img-fluid" alt="photo"></div>
                  </li>
               </ul>
               <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
            </li>
            <li>
               <h2 class="title-block">Лоджия</h2>
               <span class="small-text">Размер 3000 х 1600 мм, Цена от <span class="strong-text"><?=$price_obj->lojiya->min?> грн</span> до <span class="strong-text"><?=$price_obj->lojiya->max?></span> грн</span>
               <p>Остекление лоджии обеспечивает защиту от погодных условий, а также улучшит тепло и шумо-изоляцию. Кроме того, это позволяет расширить пространство и придать помещению уют, придав красивый и эстетический вид.</p>
                <ul class="nav nav-tabs tabs-glass-balcony" id="loggia" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="wdc-tab-loggia" data-toggle="tab" href="#wds-loggia" role="tab" aria-controls="wds-loggia" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="WDS-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="windoffs-tab-loggia" data-toggle="tab" href="#windoffs-loggia" role="tab" aria-controls="windoffs-loggia" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="windoffs-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="viknaland-tab-loggia" data-toggle="tab" href="#viknaland-loggia" role="tab" aria-controls="viknaland-loggia" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="rehau-tab-loggia" data-toggle="tab" href="#rehau-loggia" role="tab" aria-controls="rehau-loggia" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="salamander-tab-loggia" data-toggle="tab" href="#salamander-loggia" role="tab" aria-controls="salamander-loggia" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="kbe-tab-loggia" data-toggle="tab" href="#kbe-loggia" role="tab" aria-controls="kbe-loggia" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="kbe-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="opentek-tab-loggia" data-toggle="tab" href="#opentek-loggia" role="tab" aria-controls="opentek-loggia" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="veka-tab-loggia" data-toggle="tab" href="#veka-loggia" role="tab" aria-controls="veka-loggia" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="aluplast-tab-loggia" data-toggle="tab" href="#aluplast-loggia" role="tab" aria-controls="aluplast-loggia" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
               </ul>
               <div class="tab-content" id="loggiaContent">

               <?php 
               $k = 0;
               foreach ($price_obj->lojiya as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>

                  <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-loggia" role="tabpanel" aria-labelledby="<?=$key_w?>-loggia">
                     <div class="table-tab">
                        <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/loggia.04ab8d94.png" class="pt-2 img-table-prev img-fluid" alt="photo"></div>
                        <table class="table-windows table-price-windows">
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
                                 $this_obj = $price_obj->lojiya->$key_w;
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
                  
               <?php } 
                  $k++;                
               } ?>

               </div>
               <ul class="list-item-catalog pt-lg-4 mt-3 colum-3">
                  <li class="item-catalog">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-loggia-1.4b5c952c.jpg" class="img-fluid" alt="photo"></div>
                  </li>
                  <li class="item-catalog">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-loggia-2.56ea83d2.jpg" class="img-fluid" alt="photo"></div>
                  </li>
                  <li class="item-catalog">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-loggia-3.bbc6df51.jpg" class="img-fluid" alt="photo"></div>
                  </li>
               </ul>
               <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
            </li>
            <li>
               <h2 class="title-block">Французское</h2>
               <span class="small-text">Размер 4600 х 2600 мм, Цена от <span class="strong-text"><?=$price_obj->francuzskoye->min?> грн</span> до <span class="strong-text"><?=$price_obj->francuzskoye->max?></span> грн</span>
               <p>При французском остеклении удаляются частично либо полностью ограждение балкона и устанавливаются оконные профили от пола до потолка. Такой тип остекления обычно распространен среди частных домов либо коттеджах, но в последнее время очень популярен и для квартирного решения, особенно удачно на верхних этажах. Основное преимущество французского остекление - открытие красивого вида.</p>
                <ul class="nav nav-tabs tabs-glass-balcony" id="french-type" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="wdc-tab-french-type" data-toggle="tab" href="#wds-french-type" role="tab" aria-controls="wds-french-type" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="WDS-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="windoffs-tab-french-type" data-toggle="tab" href="#windoffs-french-type" role="tab" aria-controls="windoffs-french-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="windoffs-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="viknaland-tab-french-type" data-toggle="tab" href="#viknaland-french-type" role="tab" aria-controls="viknaland-french-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="rehau-tab-french-type" data-toggle="tab" href="#rehau-french-type" role="tab" aria-controls="rehau-french-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="salamander-tab-french-type" data-toggle="tab" href="#salamander-french-type" role="tab" aria-controls="salamander-french-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="kbe-tab-french-type" data-toggle="tab" href="#kbe-french-type" role="tab" aria-controls="kbe-french-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="kbe-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="opentek-tab-french-type" data-toggle="tab" href="#opentek-french-type" role="tab" aria-controls="opentek-french-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="veka-tab-french-type" data-toggle="tab" href="#veka-french-type" role="tab" aria-controls="veka-french-type" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="aluplast-tab-french-type" data-toggle="tab" href="#aluplast-french-type" role="tab" aria-controls="aluplast-french-type" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
               </ul>
               <div class="tab-content content-tabs-glass-balcony" id="-french-typeContent">

               <?php 
               $k = 0;
               foreach ($price_obj->francuzskoye as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>

                  <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-french-type" role="tabpanel" aria-labelledby="<?=$key_w?>-french-type">
                     <div class="table-tab">
                        <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/french.a9d11f60.png" class="img-table-prev img-fluid" alt="photo"></div>
                        <table class="table-windows table-price-windows">
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
                                 $this_obj = $price_obj->francuzskoye->$key_w;
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
                  
               <?php } 
                  $k++;                
               } ?>

               </div>
               <ul class="list-item-catalog pt-lg-4 mt-3 colum-3">
                  <li class="item-catalog">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-french-1.e66213b0.jpeg" class="img-fluid" alt="photo"></div>
                  </li>
                  <li class="item-catalog">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-french-2.73745b61.jpg" class="img-fluid" alt="photo"></div>
                  </li>
                  <li class="item-catalog">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-french-3.848e27c1.jpg" class="img-fluid" alt="photo"></div>
                  </li>
               </ul>
               <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
            </li>
            <li>
               <h2 class="title-block">Полукруглое</h2>
               <span class="small-text">Размер 4600 х 1600 мм, Цена от <span class="strong-text"><?=$price_obj->polukrugloe->min?> грн</span> до <span class="strong-text"><?=$price_obj->polukrugloe->max?></span> грн</span>
               <p>Главное преимущество полукруглого остекления — это эстетика и возможности создания современного дизайна. При выборе между теплой зоной либо обычным остекление, будет зависеть какие материалы выбирать и сама стоимость работы. Данный вариант остекления относится к работам повышенной сложности, к которым необходимо привлекать только высококвалифицированных специалистов.</p>
                <ul class="nav nav-tabs tabs-glass-balcony" id="semicircular-type" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="wdc-tab-semicircular-type" data-toggle="tab" href="#wds-semicircular-type" role="tab" aria-controls="wds-semicircular-type" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="WDS-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="windoffs-tab-semicircular-type" data-toggle="tab" href="#windoffs-semicircular-type" role="tab" aria-controls="windoffs-semicircular-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="windoffs-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="viknaland-tab-semicircular-type" data-toggle="tab" href="#viknaland-semicircular-type" role="tab" aria-controls="viknaland-semicircular-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="rehau-tab-semicircular-type" data-toggle="tab" href="#rehau-semicircular-type" role="tab" aria-controls="rehau-semicircular-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="salamander-tab-semicircular-type" data-toggle="tab" href="#salamander-semicircular-type" role="tab" aria-controls="salamander-semicircular-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="kbe-tab-semicircular-type" data-toggle="tab" href="#kbe-semicircular-type" role="tab" aria-controls="kbe-semicircular-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="kbe-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="opentek-tab-semicircular-type" data-toggle="tab" href="#opentek-semicircular-type" role="tab" aria-controls="opentek-semicircular-type" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="veka-tab-semicircular-type" data-toggle="tab" href="#veka-semicircular-type" role="tab" aria-controls="veka-semicircular-type" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
                  <li class="nav-item"><a class="nav-link" id="aluplast-tab-semicircular-type" data-toggle="tab" href="#aluplast-semicircular-type" role="tab" aria-controls="aluplast-semicircular-type" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
               </ul>
               <div class="tab-content content-tabs-glass-balcony" id="semicircular-typeContent">

               <?php 
               $k = 0;
               foreach ($price_obj->polukrugloe as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>

                  <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-semicircular-type" role="tabpanel" aria-labelledby="<?=$key_w?>-semicircular-type">
                     <div class="table-tab">
                        <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/semicircular-type.2a7f827e.png" class="pt-lg-4 img-table-prev img-fluid" alt="photo"></div>
                        <table class="table-windows table-price-windows">
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
                                 $this_obj = $price_obj->polukrugloe->$key_w;
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
                  
               <?php } 
                  $k++;                
               } ?>

               </div>
               <ul class="list-item-catalog pt-lg-4 mt-3 colum-3">
                  <li class="item-catalog">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-semicircular-1.e34a9f7d.jpg" class="img-fluid" alt="photo"></div>
                  </li>
                  <li class="item-catalog">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-semicircular-2.0149ffdd.jpg" class="img-fluid" alt="photo"></div>
                  </li>
                  <li class="item-catalog">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-semicircular-3.0d05a83d.jpg" class="img-fluid" alt="photo"></div>
                  </li>
               </ul>
               <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-scheme-works windowsill page-partitions-plastic">
      <div class="container">
         <h2 class="title-section">Схема Работы</h2>
         <ul class="list-scheme-works partitions d-lg-none">
            <li class="mb-2">
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
               <span class="title">Заявка</span>
               <p class="pb-2">Позвоните нам или оставьте заявку на сайте</p>
            </li>
            <li class="mb-2">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title">Замер</span>
               <p>Согласуем удобную для вас дату и время для замера</p>
            </li>
            <li class="mb-4">
               <div class="block-scheme-works"><i class="icon-scheme-works calculation"></i> <span class="number-scheme-works">3</span></div>
               <span class="title">Просчет и заключение договора</span>
               <p>Просчитаем сумму заказа с учётом всех ваших пожеланий и заключим с договор</p>
            </li>
            <li class="mb-4">
               <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">4</span></div>
               <span class="title">Выполнение заказа</span>
               <p>Обычно выполнение заказа занимает 3-5 рабочих дней</p>
            </li>
            <li class="mb-2">
               <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">5</span></div>
               <span class="title">Доставка и установка</span>
               <p>Мы заранее сообщим о готовности заказа и согласуем удобное для вас время доставки и монтажа. Монтаж производится всего за 1 рабочий день.</p>
            </li>
            <li class="mb-2">
               <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">6</span></div>
               <span class="title">Гарантия</span>
               <p>Дадим гарантию 10+ лет на материалы и 3 года на работы</p>
            </li>
         </ul>
         <ul class="list-scheme-works-lg windowsill d-none d-lg-flex">
            <li class="">
               <span class="title">Заявка</span>
               <p class="pb-2">Позвоните нам или оставьте заявку на сайте</p>
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title mt-3">Замер</span>
               <p>Согласуем удобную для вас дату и время для замера</p>
            </li>
            <li class="">
               <span class="title">Просчет и заключение договора</span>
               <p>Просчитаем сумму заказа с учётом всех ваших пожеланий и заключим с договор</p>
               <div class="block-scheme-works"><i class="icon-scheme-works calculation"></i> <span class="number-scheme-works">3</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">4</span></div>
               <span class="title mt-3">Выполнение заказа</span>
               <p>Обычно выполнение заказа занимает 3-5 рабочих дней</p>
            </li>
            <li class="">
               <span class="title">Доставка и установка</span>
               <p>Мы заранее сообщим о готовности заказа и согласуем удобное для вас время доставки и монтажа. Монтаж производится всего за 1 рабочий день.</p>
               <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">5</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">6</span></div>
               <span class="title mt-3">Гарантия</span>
               <p>Дадим гарантию 10+ лет на материалы и 3 года на работы</p>
            </li>
         </ul>
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
   <section class="section-text">
      <div class="container">
         <h2 class="title-section">Продажа и установка металлопластиковых окон</h2>
         <p>Наша фирма является одним из ведущих поставщиков пластиковых окон и дверей из ПВХ в Киеве, действующая с 2004 года. Наши экологические, энергосберегающие изделия изготовлены из отборных материалов, с использованием инновационных технологий. Мы солидная компания и берем на себя обязанность обеспечить строительный рынок продукцией самого высокого качества.</p>
         <p>Вот почему, прежде чем наши пластиковые окна поступят в продажу, они подвергаются обязательному тестированию. И все положительные результаты являются доказательством высокого качества нашего товара соответствию всем отраслевым стандартам.</p>
      </div>
   </section>
   <section class="section-lamination">
      <div class="container">
         <h2 class="title-section">Ламинация</h2>
         <div class="block-info-lamination">
            <img src="<?php bloginfo('template_url') ?>/images/laminatsiya-okon_800_auto.2c71bb2a.webp" class="img-title img-fluid" alt="photo">
            <div class="block-slider-lamination text-center text-lg-left">
               <p>Ламинация позволяет изготавливать окна любого цвета и разной фактуры. Покрыт ламинированной пленкой пластик может имитировать такие природные материалы, как дерево и камень. Срок службы такого профиля увеличивается по сравнению с традиционным белым профилем.</p>
               <ul class="slider-color-lamination">
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination.5afeabac.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-2.a6836dae.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-3.dc56a163.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-4.9be54ad0.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-5.a5490eef.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination6.0243023e.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination.5afeabac.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-2.a6836dae.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-3.dc56a163.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-4.9be54ad0.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination-5.a5490eef.png" class="img-fluid" alt="photo"></li>
                  <li><img src="<?php bloginfo('template_url') ?>/images/type-lamination6.0243023e.png" class="img-fluid" alt="photo"></li>
               </ul>
               <a href="<?=get_bloginfo('home')?>/uslugi/laminaciya-okon/" class="btn btn-success btn-href-3">Подробнее</a>
            </div>
         </div>
      </div>
   </section>
   <section class="section-preference">
      <div class="container">
         <h2 class="title-section">Наши Преимущества</h2>
         <ul class="list-preference">
            <li class="">
               <div class="block">
                  <i class="icon icon-block icon-factory"></i> <span class="title">Без посредника</span>
                  <p>Мы один из крупнейших заводов производителей металлопластиковых конструкций в Украине</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-graphic"></i> <span class="title">Опыт</span>
                  <p>Работаем на рынке уже более 20 лет</p>
               </div>
            </li>
            <li class="">
               <div class="block">
                  <i class="icon icon-block icon-shield"></i> <span class="title">Гарантия</span>
                  <p class="mx-3">Даем гарантию более 10 лет на изделия и 3 лет на работы</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-like"></i> <span class="title">Доверие</span>
                  <p>18177 Довольных<br/>клиентов</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-rocket-write"></i> <span class="title">Скорость</span>
                  <p>Среднее время выполнения заказа 3-5 рабочих дней</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-payment-2"></i> <span class="title">Гибкая система оплат</span>
                  <p>Платите как вам удобно! Оплачивайте сразу или в рассрочку под 0%</p>
               </div>
            </li>
         </ul>
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
   <section class="section-post section-post-windows section-other-type-windows bottom-none">
      <div class="container">
         <h2 class="title-section">Виды остеклений балкона</h2>
         <div class="text-custom-page">
            <h2 class="title-post"></h2>
            <p>При выборе способа застекления лоджии следует обратить внимание на разновидность конструкции балкона:</p>
            <ol>
               <li>Г-образная – имеет длинную фронтальную и боковую части, соединенные под разными углами.</li>
               <li>П-образная – распространенная в многоэтажных домах, представлена короткими боковыми элементами и длинной фронтальной частью</li>
               <li>Эркерная – состоит из нескольких элементов, образующих округлый остекляющий контур.</li>
            </ol>
            <p>В зависимости от высоты лоджии делятся на виды:</p>
            <ul>
               <li>· от парапета (при наличии парапета на балконе возможна установка металлопластиковой конструкции);</li>
               <li>· остекление от потолка до пола (идеальный вариант для усиленного освещения большого помещения).</li>
            </ul>
            <p>Тип остекления балкона от парапета до потолка позволяет максимально сохранить тепло. Кроме того, цена застекления балкона с выносом в Киеве ниже в сравнении с остеклением лоджии от пола до потолка.</p>
            <h2 class="title-post">Теплое и холодное остекление балкона и лоджии</h2>
            <p>После того, как вы решили выполнить остекление вашего помещения (веранды или балкона), необходимо выбрать технологию в зависимости от ваших потребностей. И теплое, и холодное остекление балконов надежно защитит от влаги, ветра и пыли. Но холодное остекление, в отличие от теплой пятикамерной конструкции, не сохраняет тепло и отлично подойдет для нежилого неотпаливаемого помещения. </p>
            <p>Теплое остекление – лучший и практичный способ для тепло- и звукоизоляции. Идеальный вариант застеклить лоджию – это установить пятикамерные окна с энергосберегающими стеклопакетами. Остекление осуществляется в комплексе с наружной и внутренней обшивкой и герметизацией монтажных стыков. Преимущества этой технологии:
			</p>
		<ul>
			
			<li> - расширение полноценной жилой площади;</li>
			<li> - высокий уровень тепло- и звукоизоляции;</li>
			<li> - возможность индивидуального дизайна.</li>
		</ul>

            <p>Холодное остекление балконов станет идеальный решением в том случае, если ваше помещение не рассматривается как жилое. Его можно использовать как летнюю веранду, склад, кладовую. Температура здесь не будет отличаться от уличной. Преимущества этой технологии следующие:</p>
				<ul>
					<li> - низкая цена;</li>
					<li> - легкость конструкции;</li>
					<li> - быстрый срок изготовления и установки.</li>
			 </ul>

          <h2 class="title-post">Как определиться с выбором?</h2>
            <p>В первую очередь следует определиться с назначением помещения и выбрать технологию остекления. Теплое остекление идеально для жилых помещений, офисов. Холодное остекление не предусмотрено для поддержания температуры и подойдет для неотапливаемых складов, летних веранд. При установке оконных конструкций необходимо учесть такие факторы:</p>
            <ul>
               <li>- соответствует ли состояние площадки весу оконных конструкций. Если объект ветхий, необходимо произвести укрепление парапета, основания;</li>
               <li>- какая внутренняя отделка планируется после установки окон. Иногда необходимо добавлять расширители во избежание затруднений при открытии окон;</li>
               <li>- структуру оконной конструкции, а именно: количество секций и варианты их открывания. Этот пункт существенно влияет на удобство использования, а также на стоимость всего остекления.</li>
            </ul>

            <h2 class="title-post">Преимущества остекления</h2>
            <p>Остекление балкона характеризуется рядом преимуществ:</p>
            <ul>
               <li>· эстетичностью;</li>
               <li>· теплосбережением;</li>
               <li>· защитой от ветра и осадков;</li>
               <li>· герметичностью и шумоизоляцией;</li>
               <li>· простотой в ремонте или замене.</li>
            </ul>
            <p>Балконные конструкции отличаются прочностью, надежностью и долговечностью. Холодное остекление не требует дополнительного укрепления парапета.</p>

            <h2 class="title-post">Наши преимущества</h2>
            <p>Нашими основными преимуществами являются:</p>
            <ol>
               <li>Быстрое и качественное выполнение заказа.</li>
               <li>Оптимальное соотношение цены и качества.</li>
               <li>Гарантийные обязательства.</li>
            </ol>
            <p>Позвоните уже сейчас в компанию и узнайте у менеджера-консультанта «Windows Group», в какую сумму обойдется застеклить балкон.</p>
            <h2 class="title-post">Стоимость и как заказать</h2>
            <p>Для того чтобы заказать мастера для замеров, необходимо осуществить следующие действия:</p>
            <ol>
               <li>Сделать заявку на выезд по телефону или оставить в онлайн-форме на сайте.</li>
               <li>Дождаться обратного звонка от менеджера для уточнения даты и времени приезда специалиста.</li>
               <li>По прибытии на объект замерщик произведет соответствующие расчеты с учетом параметров и особенностей лоджии.</li>
               <li>После изготовления изделия производится монтаж в соответствии с техническими требованиями по ГОСТу.</li>
               <li>По завершению монтажных работ клиент получает гарантию на установленную балконную конструкцию.</li>
            </ol>
            <p>Цена застекления балкона в Киеве зависит от нескольких факторов:</p>
            <ul>
               <li>· параметров и конфигурации;</li>
               <li>· количества камер профильной системы;</li>
               <li>· количества активных створок;</li>
               <li>· наличия ламинированного профиля;</li>
               <li>· дополнительной комплектации;</li>
               <li>· теплоизоляционных характеристик.</li>
            </ul>
            <p>Рассчитать сколько стоит застеклить балкон или лоджию можно на нашем сайте <a href="<?=get_bloginfo('home')?>/kalkulyator-okon/">в онлайн-калькуляторе</a>. Также узнать цены можно, позвонить по указанному телефону. Мы гарантируем широкий выбор качественных балконных конструкций с лучшим обслуживанием клиентов!</p>
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

   <section class="section-other-section section-other-type-windows">
      <div class="container">
         <ul class="list-item-catalog colum-3">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/plastikovye-okna.395e5f5a.jpg" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog"><span class="price border-blue">Окна</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/plastikovye-dveri/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/metalloplastikovye-dveri.feb00769.jpg" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog"><span class="price border-blue">Двери</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/okna/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/profilnye-sistemy.c81595ef.jpg" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog"><span class="price border-blue">Профильные Системы</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/podokonniki/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/podokonniki.b0c0fe3f.jpg" class="img-all img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog"><span class="price border-blue">Подоконники</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/moskitnye-setki-2.9b9a6c62.jpg" class="img-all img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog"><span class="price border-blue">Москитные Сетки</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/uslugi/tonirovanie-okon/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/toning-windows.feb7c0e1.webp" class="img-all img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog"><span class="price border-blue">Тонирование окон</span></div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();

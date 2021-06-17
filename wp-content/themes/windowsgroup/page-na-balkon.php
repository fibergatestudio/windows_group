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

<div class="main page-windows page-type-windows">
   <div class="container">
      <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
   </div>
   <section class="section-table-price">
      <div class="container">
         <div class="top-post-page">
            <h1 class="title-post">Купить пластиковые окна на балкон</h1>
            <p class="text-custom-page">Компания “Виндовс Груп” предлагает купить окна на балкон в Киеве и области по лучшей цене.
                Мы гарантируем широкий выбор качественных оконных конструкций для балконов и лоджий от популярных производителей.</p>
         </div>

         <?php 
            
            global $wpdb;
            $result_params = $wpdb->get_results("SELECT * FROM `{$wpdb -> prefix}window_prices` WHERE `page_name` = 'okna_na_balkon' ");
            $price_obj = json_decode($result_params[0]->data);
         
         ?>
         
         <div class="block-windows-type-1">
            <h2 class="title-block-type-windows">Лоджия</h2>
            <span class="small-title">Размер 3000 х 1600 мм, Цена от <span class="min-price"><?=$price_obj->lojiya->min?></span> грн до <span class="max-price"><?=$price_obj->lojiya->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-open" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-open-tab" data-toggle="tab" href="#wds-open" role="tab" aria-controls="wds-open" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-open-tab" data-toggle="tab" href="#windoffs-open" role="tab" aria-controls="windoffs-open" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-open-tab" data-toggle="tab" href="#viknaland-open" role="tab" aria-controls="viknaland-open" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-open-tab" data-toggle="tab" href="#rehau-open" role="tab" aria-controls="rehau-open" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-open-tab" data-toggle="tab" href="#salamander-open" role="tab" aria-controls="salamander-open" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-open-tab" data-toggle="tab" href="#kbe-open" role="tab" aria-controls="kbe" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-open-tab" data-toggle="tab" href="#opentek-open" role="tab" aria-controls="opentek" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-open-tab" data-toggle="tab" href="#veka-open" role="tab" aria-controls="veka-open" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-open-tab" data-toggle="tab" href="#aluplast-open" role="tab" aria-controls="aluplast-open" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-open">

               <?php 
               $k = 0;
               foreach ($price_obj->lojiya as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-open" role="tabpanel" aria-labelledby="<?=$key_w?>-open">
                  <div class="table-tab">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/balcony-1.e226c4d6.png" class="img-type-windows img-fluid" alt="photo"></div>
                     <table class="table-windows table-price-windows">
                        <thead>
                           <tr>
                              <td>Профиль</td>
                              <td>Ширина профиля</td>
                              <td>1-камерный стеклопакет</td>
                              <td>1-камерный энергосберегающий стеклопакет</td>
                              <td>2-камерный стеклопакет</td>
                              <td>2-камерный энергосберегающий стеклопакет</td>
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
                  <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
               </div>
               
               <?php } 
                  $k++;                
               } ?>
            
            </div>
         </div>
         <div class="block-windows-type-2">
            <h2 class="title-block-type-windows">П-образный балкон</h2>
            <span class="small-title">Размер 3000 х 1600 мм + 800 х 1600 мм + 800 х 1600 мм, Цена от <span class="min-price"><?=$price_obj->p_obrazniy_balkon->min?></span> грн до <span class="max-price"><?=$price_obj->p_obrazniy_balkon->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
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
            <div class="tab-content" id="myTabContent">

               <?php 
               $k = 0;
               foreach ($price_obj->p_obrazniy_balkon as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>" role="tabpanel" aria-labelledby="<?=$key_w?>">
                  <div class="table-tab">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/balcony-P.14e31519.png" class="img-type-windows img-fluid" alt="photo"></div>
                     <table class="table-windows table-price-windows">
                        <thead>
                           <tr>
                              <td>Профиль</td>
                              <td>Ширина профиля</td>
                              <td>1-камерный стеклопакет</td>
                              <td>1-камерный энергосберегающий стеклопакет</td>
                              <td>2-камерный стеклопакет</td>
                              <td>2-камерный энергосберегающий стеклопакет</td>
                           </tr>
                        </thead>
                        <tbody>
                           
                           <tr>
                              <?php
                              $this_obj = $price_obj->p_obrazniy_balkon->$key_w;
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
                  <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
               </div>
               
               <?php } 
                  $k++;                
               } ?>
            
            </div>
         </div>
         <div class="block-windows-type-3">
            <h2 class="title-block-type-windows">Г-образный балкон</h2>
            <span class="small-title">Размер 3000 х 1600 мм + 800 х 1600 мм, Цена от <span class="min-price"><?=$price_obj->g_obrazniy_balkon->min?></span> грн до <span class="max-price"><?=$price_obj->g_obrazniy_balkon->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-DoubleOneOpening" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-type-3-tab" data-toggle="tab" href="#wds-type-3" role="tab" aria-controls="wds-type-3" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-type-3-tab" data-toggle="tab" href="#windoffs-type-3" role="tab" aria-controls="windoffs-type-3" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-type-3-tab" data-toggle="tab" href="#viknaland-type-3" role="tab" aria-controls="viknaland-type-3" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-type-3-tab" data-toggle="tab" href="#rehau-type-3" role="tab" aria-controls="rehau-type-3" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-type-3-tab" data-toggle="tab" href="#salamander-type-3" role="tab" aria-controls="salamander-type-3" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-type-3-tab" data-toggle="tab" href="#kbe-type-3" role="tab" aria-controls="kbe-type-3" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-type-3-tab" data-toggle="tab" href="#opentek-type-3" role="tab" aria-controls="opentek-type-3" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-type-3-tab" data-toggle="tab" href="#veka-type-3" role="tab" aria-controls="veka-type-3" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-type-3-tab" data-toggle="tab" href="#aluplast-type-3" role="tab" aria-controls="aluplast-type-3" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-type-3">
               
               <?php 
               $k = 0;
               foreach ($price_obj->g_obrazniy_balkon as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-type-3" role="tabpanel" aria-labelledby="<?=$key_w?>-type-3">
                  <div class="table-tab">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/balcony-G.614f4c24.png" class="img-type-windows img-fluid" alt="photo"></div>
                     <table class="table-windows table-price-windows">
                        <thead>
                           <tr>
                              <td>Профиль</td>
                              <td>Ширина профиля</td>
                              <td>1-камерный стеклопакет</td>
                              <td>1-камерный энергосберегающий стеклопакет</td>
                              <td>2-камерный стеклопакет</td>
                              <td>2-камерный энергосберегающий стеклопакет</td>
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                              <?php
                              $this_obj = $price_obj->g_obrazniy_balkon->$key_w;
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
                  <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
               </div>
               
               <?php } 
                  $k++;                
               } ?>
            
            </div>
         </div>
         <div class="block-windows-type-4">
            <h2 class="title-block-type-windows">Полукруглый Балкон</h2>
            <span class="small-title">Размер 4600 х 1600 мм, Цена от <span class="min-price"><?=$price_obj->polukrugliy_balkon->min?></span> грн до <span class="max-price"><?=$price_obj->polukrugliy_balkon->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-type-3" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-type-4-tab" data-toggle="tab" href="#wds-type-4" role="tab" aria-controls="wds-type-4" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-type-4-tab" data-toggle="tab" href="#windoffs-type-4" role="tab" aria-controls="windoffs-type-4" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-type-4-tab" data-toggle="tab" href="#viknaland-type-4" role="tab" aria-controls="viknaland-type-4" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-type-4-tab" data-toggle="tab" href="#rehau-type-4" role="tab" aria-controls="rehau-type-4" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-type-4-tab" data-toggle="tab" href="#salamander-type-4" role="tab" aria-controls="salamander-type-4" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-type-4-tab" data-toggle="tab" href="#kbe-type-4" role="tab" aria-controls="kbe-type-4" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-type-4-tab" data-toggle="tab" href="#opentek-type-4" role="tab" aria-controls="opentek-type-4" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-type-4-tab" data-toggle="tab" href="#veka-type-4" role="tab" aria-controls="veka-type-4" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-type-4-tab" data-toggle="tab" href="#aluplast-type-4" role="tab" aria-controls="aluplast-type-4" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-type-4">

               <?php 
               $k = 0;
               foreach ($price_obj->polukrugliy_balkon as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-type-4" role="tabpanel" aria-labelledby="<?=$key_w?>-type-4">
                  <div class="table-tab">
                     <div class="block-img mt-lg-5"><img src="<?php bloginfo('template_url') ?>/images/balcony-2.6f6a8459.png" class="img-type-windows img-fluid" alt="photo"></div>
                     <table class="table-windows table-price-windows">
                        <thead>
                           <tr>
                              <td>Профиль</td>
                              <td>Ширина профиля</td>
                              <td>1-камерный стеклопакет</td>
                              <td>1-камерный энергосберегающий стеклопакет</td>
                              <td>2-камерный стеклопакет</td>
                              <td>2-камерный энергосберегающий стеклопакет</td>
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                              <?php
                              $this_obj = $price_obj->polukrugliy_balkon->$key_w;
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
                  <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
               </div>
               
               <?php } 
                  $k++;                
               } ?>
            
            </div>
         </div>
         <div class="block-windows-type-5">
            <h2 class="title-block-type-windows">Французский Балкон на 5 Окон</h2>
            <span class="small-title">Размер 3600 х 2600 мм, Цена от <span class="min-price"><?=$price_obj->francuzskiy_balkon->min?></span> грн до <span class="max-price"><?=$price_obj->francuzskiy_balkon->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-type-5" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-type-5-tab" data-toggle="tab" href="#wds-type-5" role="tab" aria-controls="wds-type-5" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-type-5-tab" data-toggle="tab" href="#windoffs-type-5" role="tab" aria-controls="windoffs-type-5" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-type-5-tab" data-toggle="tab" href="#viknaland-type-5" role="tab" aria-controls="viknaland-type-5" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-type-5-tab" data-toggle="tab" href="#rehau-type-5" role="tab" aria-controls="rehau-type-5" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-type-5-tab" data-toggle="tab" href="#salamander-type-5" role="tab" aria-controls="salamander-type-5" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-type-5-tab" data-toggle="tab" href="#kbe-type-5" role="tab" aria-controls="kbe-type-5" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-type-5-tab" data-toggle="tab" href="#opentek-type-5" role="tab" aria-controls="opentek-type-5" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-type-5-tab" data-toggle="tab" href="#veka-type-5" role="tab" aria-controls="veka-type-5" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-type-5-tab" data-toggle="tab" href="#aluplast-type-5" role="tab" aria-controls="aluplast-type-5" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-type-5">

               <?php 
               $k = 0;
               foreach ($price_obj->francuzskiy_balkon as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-type-5" role="tabpanel" aria-labelledby="<?=$key_w?>-type-5">
                  <div class="table-tab">
                     <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/balcony-franc.9741e3cf.png" class="img-type-windows img-fluid" alt="photo"></div>
                     <table class="table-windows table-price-windows">
                        <thead>
                           <tr>
                              <td>Профиль</td>
                              <td>Ширина профиля</td>
                              <td>1-камерный стеклопакет</td>
                              <td>1-камерный энергосберегающий стеклопакет</td>
                              <td>2-камерный стеклопакет</td>
                              <td>2-камерный энергосберегающий стеклопакет</td>
                           </tr>
                        </thead>
                        <tbody>

                           <tr>
                              <?php
                              $this_obj = $price_obj->francuzskiy_balkon->$key_w;
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
                  <div class="text-center"><button class="button-table"><span class="icon icon-phone-table"></span> Перезвоните мне</button></div>
               </div>
               
               <?php } 
                  $k++;                
               } ?>
            
            </div>
         </div>
      </div>
   </section>
   <section class="section-group-button">
      <div class="container">
         <ul class="list-button">
            <li><button class="btn btn-call-measurer icon icon-measuring-tape"><span>Вызвать замерщика</span></button></li>
            <li><button class="btn btn-call-me icon icon-mobile-phone"><span>Перезвоните мне</span></button></li>
            <li><button class="btn btn-get-discount icon icon-percentage-discount"><span>Получить скидку</span></button></li>
         </ul>
      </div>
   </section>
   <section class="section-buy-this-product">
      <div class="container">
         <h2 class="title-section">Вместе с Окнами Покупают</h2>
         <ul class="list-top-product">
            <li class="block-item-product">
               <span class="title-header">Подоконники</span>
               <a href="<?=get_bloginfo('home')?>/komplektuyushchie/podokonniki/"><img src="<?php bloginfo('template_url') ?>/images/additional-item.0559aba1.png" class="WDS-logo img-fluid" alt="photo"></a>
               <p>Широкий выбор материалов покрытия и цветов от лучших мировых брендов</p>
            </li>
            <li class="block-item-product">
               <span class="title-header">Защитные ролеты</span>
               <a href="<?=get_bloginfo('home')?>/komplektuyushchie/zashchitnye-rolety/"><img src="<?php bloginfo('template_url') ?>/images/additional-item-2.17400e5f.png" class="WDS-logo img-fluid" alt="photo"></a>
               <p>Более 300 цветов и оттенков под любой фасад</p>
            </li>
            <li class="block-item-product">
               <span class="title-header">Москитные сетки</span>
               <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/"><img src="<?php bloginfo('template_url') ?>/images/additional-item-3.9bed940f.png" class="WDS-logo img-fluid" alt="photo"></a>
               <p>Обеспечьте эффективную защиту своего дома от воздействия насекомых</p>
            </li>
            <li class="block-item-product">
               <span class="title-header">Защита окон от детей</span>
               <a href="<?=get_bloginfo('home')?>/uslugi/zashchita-okon-ot-detej/"><img src="<?php bloginfo('template_url') ?>/images/children-lock.58fcbdb6.jpg" class="WDS-logo img-fluid" alt="photo"></a>
               <p>Безопасность ваших детей в ваших руках</p>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-slider-type-profil">
      <div class="container">
         <h2 class="title-section">Выбираем Профиль</h2>
         <ul class="list-slider-type-profil">
            <li class="item">
               <div class="block-item"><span class="label label-rehau"></span> <a href="<?=get_bloginfo('home')?>/okna/rehau/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-rehau.0a5e523b.png" class="img-fluid" alt="photo"><span class="btn btn-profil">Rehau <span class="icon-back"></span></span></a></div>
            </li>
            <li class="item">
               <div class="block-item"><span class="label label-wds"></span> <a href="<?=get_bloginfo('home')?>/okna/wds/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-wds.a9ed9d0d.png" class="img-fluid" alt="photo"><span class="btn btn-profil">WDS<span class="icon-back"></span></span></a></div>
            </li>
            <li class="item">
               <div class="block-item"><span class="label label-veka"></span> <a href="<?=get_bloginfo('home')?>/okna/veka/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-veka.d7bb7764.png" class="img-fluid" alt="photo"><span class="btn btn-profil">Veka <span class="icon-back"></span></span></a></div>
            </li>
            <li class="item">
               <div class="block-item"><span class="label label-salamander"></span> <a href="<?=get_bloginfo('home')?>/okna/salamander/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-salamander.03bd72a5.png" class="img-fluid" alt="photo"><span class="btn btn-profil">Salamander<span class="icon-back"></span></span></a></div>
            </li>
            <li class="item">
               <div class="block-item"><span class="label label-Openteck"></span> <a href="<?=get_bloginfo('home')?>/okna/openteck/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-opentech.d9403169.png" class="img-fluid" alt="photo"><span class="btn btn-profil">Open Teck<span class="icon-back"></span></span></a></div>
            </li>
            <li class="item">
               <div class="block-item"><span class="label label-kbe"></span> <a href="<?=get_bloginfo('home')?>/okna/kbe/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-kbe.14ce48af.png" class="img-fluid" alt="photo"><span class="btn btn-profil">KBE<span class="icon-back"></span></span></a></div>
            </li>
            <li class="item">
               <div class="block-item"><span class="label label-viknaland"></span> <a href="<?=get_bloginfo('home')?>/okna/viknaland/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-aluplast.43ac6c2c.png" class="img-fluid" alt="photo"><span class="btn btn-profil">Viknaland<span class="icon-back"></span></span></a></div>
            </li>
            <li class="item">
               <div class="block-item"><span class="label label-aluplast"></span> <a href="<?=get_bloginfo('home')?>/okna/aluplast/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-viknaland.4525feba.png" class="img-fluid" alt="photo"><span class="btn btn-profil">Aluplast<span class="icon-back"></span></span></a></div>
            </li>
            <li class="item">
               <div class="block-item"><span class="label label-windoffs"></span> <a href="<?=get_bloginfo('home')?>/okna/windoffs/"><img src="<?php bloginfo('template_url') ?>/images/profil-slider-windoffs.f4accd4c.png" class="img-fluid" alt="photo"><span class="btn btn-profil">Windoff's<span class="icon-back"></span></span></a></div>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-glass-type">
      <div class="container">
         <h2 class="title-section">Выбираем Стеклопакет</h2>
         <ul class="list-type-glass">
            <li class="item-glass"><a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/odnokamernye/"><img src="<?php bloginfo('template_url') ?>/images/glass-type-1.8a81a597.png" class="img-fluid" alt="photo"></a><span class="title-glass">1 камерный</span></li>
            <li class="item-glass"><a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/dvuhkamernye/"><img src="<?php bloginfo('template_url') ?>/images/glass-type-2.ff7191c2.png" class="img-fluid" alt="photo"></a><span class="title-glass">2 камерный</span></li>
            <li class="item-glass"><a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/energosberegayushchie/"><img src="<?php bloginfo('template_url') ?>/images/glass-type-3.8c41787a.png" class="img-fluid" alt="photo"></a><span class="title-glass">Энергосберегающий</span></li>
            <li class="item-glass"><a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/tonirovannye/"><img src="<?php bloginfo('template_url') ?>/images/glass-type-4.6ad184f9.png" class="img-fluid" alt="photo"></a><span class="title-glass">Тонированный</span></li>
         </ul>
         <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/" class="btn btn-success btn-href-2">Подробнее</a>
      </div>
   </section>
   <section class="section-lamination">
      <div class="container">
         <h2 class="title-section">Ламинация</h2>
         <div class="block-info-lamination">
            <img src="<?php bloginfo('template_url') ?>/images/laminatsiya-okon_800_auto.d8118e05.png" class="img-title img-fluid" alt="photo">
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
               <a href="<?=get_bloginfo('home')?>/uslugi/laminaciya-okon" class="btn btn-success btn-href-3">Подробнее</a>
            </div>
         </div>
      </div>
   </section>
   <section class="section-calculator">
      <div class="container">
         <h2 class="title-section">Оконный Калькулятор</h2>
            <!--<form class="form-calculator">-->
          <ul class="form-category">
              <li class="form-category-item d-none" data-category="category-window-label"><input type="radio" id="category-window" name="category" checked="checked" class="category" data-default-type="1"> <label id="category-window-label" for="category-window" class="btn btn-category category-window-label" data-toggle="collapse" data-target=".category-window" aria-controls="category-window"><i class="icon icon-category-window"></i> <span>Окна</span> <i class="fa fa-chevron-down"></i></label></li>
              <li class="form-category-item d-none" data-category="category-balcony-label"><input type="radio" id="category-balcony" name="category" class="category" data-default-type="4"> <label id="category-balcony-label" for="category-balcony" class="btn btn-category category-balcony-label collapsed" data-toggle="collapse" data-target=".category-balcony" aria-controls="category-balcony"><i class="icon icon-category-balcony"></i> <span>Балкон и лоджия</span> <i class="fa fa-chevron-down"></i></label></li>
              <li class="form-category-item d-none" data-category="category-french-balcony-label"><input type="radio" id="category-french-balcony" name="category" class="category" data-default-type="7"> <label id="category-french-balcony-label" for="category-french-balcony" class="btn btn-category category-french-balcony-label collapsed" data-toggle="collapse" data-target=".category-french-balcony" aria-controls="category-french-balcony"><i class="icon icon-category-french-balcony"></i> <span>Французский балкон</span> <i class="fa fa-chevron-down"></i></label></li>
              <li class="form-category-item d-none" data-category="category-exit-label"><input type="radio" id="category-exit-balcony" name="category" class="category" data-default-type="10"> <label id="category-exit-balcony-label" for="category-exit-balcony" class="btn btn-category category-exit-balcony-label collapsed" data-toggle="collapse" data-target=".category-exit-balcony" aria-controls="category-exit-balcony"><i class="icon icon-category-exit-balcony"></i> <span>Выход на балкон</span> <i class="fa fa-chevron-down"></i></label></li>
          </ul>
          <div class="row">
              <div class="col-12 col-lg">
                  <div id="preview" class="furniture-type-1"></div>
              </div>
              <div class="col-12 col-lg" id="product-accordion">
                  <h5 class="text-center text-lg-left">Тип окна:</h5>
                  <ul class="tab-type-row">
                      <li class="form-product-type-item collapse category-window show" aria-labelledby="category-window-label" data-parent="#product-accordion"><input type="radio" id="product-type-1" name="product-type" class="product-type" value="1" checked="checked"> <label id="product-type-label-1" for="product-type-1" class="product-type-label img-scheme img-scheme-1" data-toggle="collapse" data-target="#furniture-category-window-1" aria-controls="furniture-category-window-1"><span class="tab-type">1 - створчатое окно</span></label></li>
                      <li class="form-product-type-item collapse category-window show" aria-labelledby="category-window-label" data-parent="#product-accordion"><input type="radio" id="product-type-2" name="product-type" class="product-type" value="2"> <label id="product-type-label-2" for="product-type-2" class="product-type-label collapsed img-scheme img-scheme-2" data-toggle="collapse" data-target="#furniture-category-window-2" aria-controls="furniture-category-window-2"><span class="tab-type">2 - створчатое окно</span></label></li>
                      <li class="form-product-type-item collapse category-window show" aria-labelledby="category-window-label" data-parent="#product-accordion"><input type="radio" id="product-type-3" name="product-type" class="product-type" value="3"> <label id="product-type-label-3" for="product-type-3" class="product-type-label collapsed img-scheme-3 img-scheme" data-toggle="collapse" data-target="#furniture-category-window-3" aria-controls="furniture-category-window-3"><span class="tab-type">3 - створчатое окно</span></label></li>
                      <li class="form-product-type-item collapse category-balcony" aria-labelledby="category-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-4" name="product-type" class="product-type" value="4"> <label id="product-type-label-4" for="product-type-4" class="product-type-label img-scheme loggia" data-toggle="collapse" data-target="#furniture-category-balcony-1" aria-controls="furniture-category-balcony-1"><span class="tab-type">лоджия</span></label></li>
                      <li class="form-product-type-item collapse category-balcony" aria-labelledby="category-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-5" name="product-type" class="product-type" value="5"> <label id="product-type-label-5" for="product-type-5" class="product-type-label collapsed img-scheme loggia-2" data-toggle="collapse" data-target="#furniture-category-balcony-2" aria-controls="furniture-category-balcony-2"><span class="tab-type">Г-образный</span></label></li>
                      <li class="form-product-type-item collapse category-balcony" aria-labelledby="category-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-6" name="product-type" class="product-type" value="6"> <label id="product-type-label-6" for="product-type-6" class="product-type-label collapsed img-scheme loggia-3" data-toggle="collapse" data-target="#furniture-category-balcony-3" aria-controls="furniture-category-balcony-3"><span class="tab-type">П-образный</span></label></li>
                      <li class="form-product-type-item collapse category-french-balcony" aria-labelledby="category-french-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-7" name="product-type" class="product-type" value="7"> <label id="product-type-label-7" for="product-type-7" class="product-type-label img-scheme loggiaFranc-1" data-toggle="collapse" data-target="#furniture-category-french-balcony-1" aria-controls="furniture-category-french-balcony-1"><span class="tab-type">Французское остекление лоджии</span></label></li>
                      <li class="form-product-type-item collapse category-french-balcony" aria-labelledby="category-french-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-8" name="product-type" class="product-type" value="8"> <label id="product-type-label-8" for="product-type-8" class="product-type-label collapsed img-scheme loggiaFranc-2" data-toggle="collapse" data-target="#furniture-category-french-balcony-2" aria-controls="furniture-category-french-balcony-2"><span class="tab-type">Г-образный французский балкон</span></label></li>
                      <li class="form-product-type-item collapse category-french-balcony" aria-labelledby="category-french-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-9" name="product-type" class="product-type" value="9"> <label id="product-type-label-9" for="product-type-9" class="product-type-label collapsed img-scheme loggiaFranc-3" data-toggle="collapse" data-target="#furniture-category-french-balcony-3" aria-controls="furniture-category-french-balcony-3"><span class="tab-type">П-образный французский балкон</span></label></li>
                      <li class="form-product-type-item collapse category-exit-balcony" aria-labelledby="category-exit-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-10" name="product-type" class="product-type" value="10"> <label id="product-type-label-10" for="product-type-10" class="product-type-label img-scheme door-1" data-toggle="collapse" data-target="#furniture-category-exit-balcony-1" aria-controls="furniture-category-exit-balcony-1"><span class="tab-type">Балконный блок с 1 окном</span></label></li>
                      <li class="form-product-type-item collapse category-exit-balcony" aria-labelledby="category-exit-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-11" name="product-type" class="product-type" value="11"> <label id="product-type-label-11" for="product-type-11" class="product-type-label collapsed img-scheme door-2" data-toggle="collapse" data-target="#furniture-category-exit-balcony-2" aria-controls="furniture-category-exit-balcony-2"><span class="tab-type">Балконный блок с 2 окном</span></label></li>
                      <li class="form-product-type-item collapse category-exit-balcony" aria-labelledby="category-exit-balcony-label" data-parent="#product-accordion"><input type="radio" id="product-type-12" name="product-type" class="product-type" value="12"> <label id="product-type-label-12" for="product-type-12" class="product-type-label collapsed img-scheme door-3" data-toggle="collapse" data-target="#furniture-category-exit-balcony-3" aria-controls="furniture-category-exit-balcony-3"><span class="tab-type">Балконная дверь</span></label></li>
                  </ul>
                  <h5 class="my-4 text-center text-lg-left">Тип открытия*:</h5>
                  <input type="hidden" name="furniture_type" id="furniture_type" value="1">
                  <ul class="form-furniture-type" id="furniture-type-accordion">
                      <li class="form-furniture-type-item collapse show category-window" aria-labelledby="category-window-label" data-parent="#product-accordion">
                          <div id="furniture-category-window-1" class="collapse show" aria-labelledby="product-type-label-1" data-parent="#furniture-type-accordion">
                              <ul class="flex-wrapper">
                                  <li><input type="radio" id="furniture-type-1" name="furniture-type" class="furniture-type" value="1" checked="checked"> <label for="furniture-type-1" class="furniture-type-label img-scheme scheme-1-type-1" onclick="document.getElementById('furniture_type').value = '1'; change_furniture_type();"><span class="tab-type">глухое окно</span></label></li>
                                  <li><input type="radio" id="furniture-type-2" name="furniture-type" class="furniture-type" value="2"> <label for="furniture-type-2" class="furniture-type-label img-scheme scheme-1-type-2" onclick="document.getElementById('furniture_type').value = '2'; change_furniture_type();"><span class="tab-type">окно с открыванием</span></label></li>
                              </ul>
                          </div>
                          <div id="furniture-category-window-2" class="collapse" aria-labelledby="product-type-label-2" data-parent="#furniture-type-accordion">
                              <ul class="flex-wrapper">
                                  <li><input type="radio" id="furniture-type-3" name="furniture-type" class="furniture-type" value="3"> <label for="furniture-type-3" class="furniture-type-label img-scheme scheme-2-type-1" onclick="document.getElementById('furniture_type').value = '3'; change_furniture_type();"><span class="tab-type">окно с одним открыванием</span></label></li>
                                  <li><input type="radio" id="furniture-type-4" name="furniture-type" class="furniture-type" value="4"> <label for="furniture-type-4" class="furniture-type-label img-scheme scheme-2-type-2" onclick="document.getElementById('furniture_type').value = '4'; change_furniture_type();"><span class="tab-type">окно с двумя открываниями</span></label></li>
                              </ul>
                          </div>
                          <div id="furniture-category-window-3" class="collapse" aria-labelledby="product-type-label-3" data-parent="#furniture-type-accordion">
                              <ul class="flex-wrapper">
                                  <li><input type="radio" id="furniture-type-5" name="furniture-type" class="furniture-type" value="5"> <label for="furniture-type-5" class="furniture-type-label img-scheme scheme-3-type-1" onclick="document.getElementById('furniture_type').value = '5'; change_furniture_type();"><span class="tab-type">окно с одним открыванием</span></label></li>
                                  <li><input type="radio" id="furniture-type-6" name="furniture-type" class="furniture-type" value="6"> <label for="furniture-type-6" class="furniture-type-label img-scheme scheme-3-type-2" onclick="document.getElementById('furniture_type').value = '6'; change_furniture_type();"><span class="tab-type">окно с двумя открываниями</span></label></li>
                                  <li><input type="radio" id="furniture-type-7" name="furniture-type" class="furniture-type" value="7"> <label for="furniture-type-7" class="furniture-type-label img-scheme scheme-3-type-3" onclick="document.getElementById('furniture_type').value = '7'; change_furniture_type();"><span class="tab-type">окно с тремя открываниями</span></label></li>
                              </ul>
                          </div>
                      </li>
                      <li class="form-furniture-type-item collapse category-balcony" aria-labelledby="category-balcony-label" data-parent="#product-accordion">
                          <div id="furniture-category-balcony-1" class="collapse show" aria-labelledby="product-type-label-4" data-parent="#furniture-type-accordion">
                              <ul class="flex-wrapper">
                                  <li><input type="radio" id="furniture-type-8" name="furniture-type" class="furniture-type" value="8"> <label for="furniture-type-8" class="furniture-type-label img-scheme loggia-1-type-1" onclick="document.getElementById('furniture_type').value = '8'; change_furniture_type();"><span class="tab-type">лоджия</span></label></li>
                              </ul>
                          </div>
                          <div id="furniture-category-balcony-2" class="collapse" aria-labelledby="product-type-label-5" data-parent="#furniture-type-accordion">
                              <ul class="flex-wrapper">
                                  <li><input type="radio" id="furniture-type-9" name="furniture-type" class="furniture-type" value="9"> <label for="furniture-type-9" class="furniture-type-label img-scheme loggia-2-type-1" onclick="document.getElementById('furniture_type').value = '9'; change_furniture_type();"><span class="tab-type">балкон с глухой боковой створкой</span></label></li>
                                  <li><input type="radio" id="furniture-type-10" name="furniture-type" class="furniture-type" value="10"> <label for="furniture-type-10" class="furniture-type-label img-scheme loggia-2-type-2" onclick="document.getElementById('furniture_type').value = '10'; change_furniture_type();"><span class="tab-type">балкон с открывающейся боковой створкой</span></label></li>
                              </ul>
                          </div>
                          <div id="furniture-category-balcony-3" class="collapse" aria-labelledby="product-type-label-6" data-parent="#furniture-type-accordion">
                              <ul class="flex-wrapper">
                                  <li><input type="radio" id="furniture-type-11" name="furniture-type" class="furniture-type" value="11"> <label for="furniture-type-11" class="furniture-type-label img-scheme loggia-3-type-1" onclick="document.getElementById('furniture_type').value = '11'; change_furniture_type();"><span class="tab-type">Балкон с двумя глухими боковыми створками</span></label></li>
                                  <li><input type="radio" id="furniture-type-12" name="furniture-type" class="furniture-type" value="12"> <label for="furniture-type-12" class="furniture-type-label img-scheme loggia-3-type-2" onclick="document.getElementById('furniture_type').value = '12'; change_furniture_type();"><span class="tab-type">Балкон с одной открывающейся боковой створкой</span></label></li>
                                  <li><input type="radio" id="furniture-type-13" name="furniture-type" class="furniture-type" value="13"> <label for="furniture-type-13" class="furniture-type-label img-scheme loggia-3-type-3" onclick="document.getElementById('furniture_type').value = '13'; change_furniture_type();"><span class="tab-type">Балкон с двумя открывающимися боковыми створками</span></label></li>
                              </ul>
                          </div>
                      </li>
                      <li class="form-furniture-type-item collapse category-french-balcony" aria-labelledby="category-french-balcony-label" data-parent="#product-accordion">
                          <div id="furniture-category-french-balcony-1" class="collapse show" aria-labelledby="product-type-label-7" data-parent="#furniture-type-accordion">
                              <ul class="flex-wrapper">
                                  <li><input type="radio" id="furniture-type-14" name="furniture-type" class="furniture-type" value="14"> <label for="furniture-type-14" class="furniture-type-label img-scheme loggiaFranc-1-type-1" onclick="document.getElementById('furniture_type').value = '14'; change_furniture_type();"><span class="tab-type">Французское остекление лоджии</span></label></li>
                              </ul>
                          </div>
                          <div id="furniture-category-french-balcony-2" class="collapse" aria-labelledby="product-type-label-8" data-parent="#furniture-type-accordion">
                              <ul class="flex-wrapper">
                                  <li><input type="radio" id="furniture-type-15" name="furniture-type" class="furniture-type" value="15"> <label for="furniture-type-15" class="furniture-type-label img-scheme loggiaFranc-2-type-1" onclick="document.getElementById('furniture_type').value = '15'; change_furniture_type();"><span class="tab-type">Балкон с глухой боковой створкой</span></label></li>
                                  <li><input type="radio" id="furniture-type-16" name="furniture-type" class="furniture-type" value="16"> <label for="furniture-type-16" class="furniture-type-label img-scheme loggiaFranc-2-type-2" onclick="document.getElementById('furniture_type').value = '16'; change_furniture_type();"><span class="tab-type">Балкон с открывающейся боковой створкой</span></label></li>
                              </ul>
                          </div>
                          <div id="furniture-category-french-balcony-3" class="collapse" aria-labelledby="product-type-label-9" data-parent="#furniture-type-accordion">
                              <ul class="flex-wrapper">
                                  <li><input type="radio" id="furniture-type-17" name="furniture-type" class="furniture-type" value="17"> <label for="furniture-type-17" class="furniture-type-label img-scheme loggiaFranc-3-type-1" onclick="document.getElementById('furniture_type').value = '17'; change_furniture_type();"><span class="tab-type">Балкон с двумя глухими боковыми створками</span></label></li>
                                  <li><input type="radio" id="furniture-type-18" name="furniture-type" class="furniture-type" value="18"> <label for="furniture-type-18" class="furniture-type-label img-scheme loggiaFranc-3-type-2" onclick="document.getElementById('furniture_type').value = '18'; change_furniture_type();"><span class="tab-type">Балкон с одной открывающейся боковой створкой</span></label></li>
                                  <li><input type="radio" id="furniture-type-19" name="furniture-type" class="furniture-type" value="19"> <label for="furniture-type-19" class="furniture-type-label img-scheme loggiaFranc-3-type-3" onclick="document.getElementById('furniture_type').value = '19'; change_furniture_type();"><span class="tab-type">Балкон с двумя открывающимися боковыми створками</span></label></li>
                              </ul>
                          </div>
                      </li>
                      <li class="form-furniture-type-item collapse category-exit-balcony" aria-labelledby="category-exit-balcony" data-parent="#product-accordion">
                          <div id="furniture-category-exit-balcony-1" class="collapse show" aria-labelledby="product-type-label-10" data-parent="#furniture-type-accordion">
                              <ul class="flex-wrapper">
                                  <li><input type="radio" id="furniture-type-20" name="furniture-type" class="furniture-type" value="20"> <label for="furniture-type-20" class="furniture-type-label img-scheme door-1-type-1" onclick="document.getElementById('furniture_type').value = '20'; change_furniture_type();"><span class="tab-type">Балконный блок с глухим окном</span></label></li>
                              </ul>
                          </div>
                          <div id="furniture-category-exit-balcony-2" class="collapse" aria-labelledby="product-type-label-11" data-parent="#furniture-type-accordion">
                              <ul class="flex-wrapper">
                                  <li><input type="radio" id="furniture-type-21" name="furniture-type" class="furniture-type" value="21"> <label for="furniture-type-21" class="furniture-type-label img-scheme door-2-type-1" onclick="document.getElementById('furniture_type').value = '21'; change_furniture_type();"><span class="tab-type">Балконный блок с двумя окнами</span></label></li>
                              </ul>
                          </div>
                          <div id="furniture-category-exit-balcony-3" class="collapse" aria-labelledby="product-type-label-12" data-parent="#furniture-type-accordion">
                              <ul class="flex-wrapper">
                                  <li><input type="radio" id="furniture-type-22" name="furniture-type" class="furniture-type" value="22"> <label for="furniture-type-22" class="furniture-type-label img-scheme door-3-type-1" onclick="document.getElementById('furniture_type').value = '22'; change_furniture_type();"><span class="tab-type">Балконная дверь</span></label></li>
                              </ul>
                          </div>
                      </li>
                  </ul>
                  <div class="row ml-lg-3">
                      <div class="col-12 col-lg-6">
                          <div class="form-group"><label class="input-label" for="width">Ширина мм*:</label> <input class="form-control" id="width" aria-describedby="width" placeholder="1000" type="number"  min="1" max="999999" step="1" oninput="validity.valid||(value='');"></div>
                      </div>
                      <div class="col-12 col-lg-6">
                          <div class="form-group"><label class="input-label" for="height">Высота мм*:</label> <input class="form-control" id="height" aria-describedby="height" placeholder="1000" type="number"  min="1" max="999999" step="1" oninput="validity.valid||(value='');"></div>
                      </div>
                      <div style="color: red; display: none; padding: 10px 0px 10px 15px;" id="razmer_err1">Ошибка размеров</div>
                  </div>
              </div>
          </div>
          <div class="row block-type-profile" style="padding-top: 25px;">
              <div class="col-12">
                  <h6 class="title-section-profile border-mob collapsed collapse-toggler" data-toggle="collapse" data-target=".profile-drop" aria-expanded="false"><span class="cursor-custom">Профиль</span></h6>
              </div>
          </div>
          <div class="row profile-drop collapse">
              <div class="col-12 d-lg-none">
                  <input type="hidden" name="brand" id="brand" value="1">
                  <div class="select-wrapper">
                      <label class="d-lg-none input-label">Бренд:</label>
                      <ul class="brands mobile-select" id="brands">
                          <li class="form-check d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-1" value="1" checked="checked" onchange="document.getElementById('brand').value = '1';"/> <label class="form-check-label" for="brand-1">Aluplast</label></li>
                          <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-2" value="2" checked="checked" onchange="document.getElementById('brand').value = '2';"/> <label class="form-check-label" for="brand-2">Salamander</label></li>
                          <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-3" value="3" checked="checked" onchange="document.getElementById('brand').value = '3';"/> <label class="form-check-label" for="brand-3">Rehau</label></li>
                          <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-4" value="4" checked="checked" onchange="document.getElementById('brand').value = '4';"/> <label class="form-check-label" for="brand-4">WDS</label></li>
                          <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-5" value="5" checked="checked" onchange="document.getElementById('brand').value = '5';"/> <label class="form-check-label" for="brand-5">Veka</label></li>
                          <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-6" value="6" checked="checked" onchange="document.getElementById('brand').value = '6';"/> <label class="form-check-label" for="brand-6">KBE</label></li>
                          <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-7" value="7" checked="checked" onchange="document.getElementById('brand').value = '7';"/> <label class="form-check-label" for="brand-7">Viknaland</label></li>
                          <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-8" value="8" checked="checked" onchange="document.getElementById('brand').value = '8';"/> <label class="form-check-label" for="brand-8">Windoffs</label></li>
                          <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" name="brand" id="brand-9" value="9" checked="checked" onchange="document.getElementById('brand').value = '9';"/> <label class="form-check-label" for="brand-9">Openteck</label></li>
                      </ul>
                  </div>
              </div>
              <div class="col-12">
                  <input type="hidden" name="model" id="model" value="1_1">
                  <div class="select-wrapper">
                      <label class="d-lg-none input-label">Модель:</label>
                      <ul class="profile-brand mobile-select" id="models">
                          <li>
                              <ul>
                                  <li class="d-none d-lg-block aluplast">
                                      <span class="title-section-profile">Aluplast</span>
                                  </li>
                                  <li class="form-check d-lg-block aluplast"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-1" value="1" data-brand="1" checked="checked" onchange="document.getElementById('model').value = '1_1';"> <label class="form-check-label" for="brand-model-1">Aluplast Ideal 2000</label></li>
                                  <li class="form-check d-none d-lg-block aluplast"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-2" value="2" data-brand="1" onchange="document.getElementById('model').value = '1_2';"> <label class="form-check-label" for="brand-model-2">Aluplast Ideal 4000</label></li>
                                  <li class="form-check d-none d-lg-block aluplast"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-3" value="3" data-brand="1" onchange="document.getElementById('model').value = '1_3';"> <label class="form-check-label" for="brand-model-3">Aluplast Ideal 8000</label></li>
                              </ul>
                          </li>
                          <li>
                              <ul>
                                  <li class="d-none d-lg-block salamander">
                                      <span class="title-section-profile">Salamander</span>
                                  </li>
                                  <li class="form-check d-none d-lg-block salamander"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-6" value="6" data-brand="2" onchange="document.getElementById('model').value = '2_1';"> <label class="form-check-label" for="brand-model-6">Salamander 2D</label></li>
                                  <li class="form-check d-none d-lg-block salamander"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-7" value="7" data-brand="2" onchange="document.getElementById('model').value = '2_2';"> <label class="form-check-label" for="brand-model-7">Salamander Streamline</label></li>
                                  <li class="form-check d-none d-lg-block salamander"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-8" value="8" data-brand="2" onchange="document.getElementById('model').value = '2_3';"> <label class="form-check-label" for="brand-model-8">Salamander BluEvolution</label></li>
                              </ul>
                          </li>
                          <li>
                              <ul>
                                  <li class="d-none d-lg-block rehau">
                                      <span class="title-section-profile">Rehau</span>
                                  </li>
                                  <li class="form-check d-none d-lg-block rehau"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-9" value="9" data-brand="3" onchange="document.getElementById('model').value = '3_1';"> <label class="form-check-label" for="brand-model-9">Rehau Euro-Design 60</label></li>
                                  <li class="form-check d-none d-lg-block rehau"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-10" value="10" data-brand="3" onchange="document.getElementById('model').value = '3_2';"> <label class="form-check-label" for="brand-model-10">Rehau Euro-Design 70</label></li>
                                  <li class="form-check d-none d-lg-block rehau"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-11" value="11" data-brand="3" onchange="document.getElementById('model').value = '3_3';"> <label class="form-check-label" for="brand-model-11">Rehau Synego</label></li>
                              </ul>
                          </li>
                          <li>
                              <ul>
                                  <li class="d-none d-lg-block wds">
                                      <span class="title-section-profile">WDS</span>
                                  </li>
                                  <li class="form-check d-none d-lg-block wds"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-14" value="14" data-brand="4" onchange="document.getElementById('model').value = '4_1';"> <label class="form-check-label" for="brand-model-14">WDS 5S</label></li>
                                  <li class="form-check d-none d-lg-block wds"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-15" value="15" data-brand="4" onchange="document.getElementById('model').value = '4_2';"> <label class="form-check-label" for="brand-model-15">WDS 6S</label></li>
                                  <li class="form-check d-none d-lg-block wds"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-16" value="16" data-brand="4" onchange="document.getElementById('model').value = '4_3';"> <label class="form-check-label" for="brand-model-16">WDS 7S</label></li>
                              </ul>
                          </li>
                          <li>
                              <ul>
                                  <li class="d-none d-lg-block veka">
                                      <span class="title-section-profile">Veka</span>
                                  </li>
                                  <li class="form-check d-none d-lg-block veka"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-17" value="17" data-brand="5" onchange="document.getElementById('model').value = '5_1';"> <label class="form-check-label" for="brand-model-17">Veka Euroline</label></li>
                                  <li class="form-check d-none d-lg-block veka"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-19" value="19" data-brand="5" onchange="document.getElementById('model').value = '5_2';"> <label class="form-check-label" for="brand-model-19">Veka Softline 70</label></li>
                                  <li class="form-check d-none d-lg-block veka"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-20" value="20" data-brand="5" onchange="document.getElementById('model').value = '5_3';"> <label class="form-check-label" for="brand-model-20">Veka Softline 82</label></li>
                              </ul>
                          </li>
                          <li>
                              <ul>
                                  <li class="d-none d-lg-block kbe">
                                      <span class="title-section-profile">KBE</span>
                                  </li>
                                  <li class="form-check d-none d-lg-block kbe"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-21" value="21" data-brand="6" onchange="document.getElementById('model').value = '6_1';"> <label class="form-check-label" for="brand-model-21">KBE Ballans3</label></li>
                                  <li class="form-check d-none d-lg-block kbe"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-22" value="22" data-brand="6" onchange="document.getElementById('model').value = '6_2';"> <label class="form-check-label" for="brand-model-22">KBE Optima 5</label></li>
                              </ul>
                          </li>
                          <li>
                              <ul>
                                  <li class="d-none d-lg-block viknaland">
                                      <span class="title-section-profile">Viknaland</span>
                                  </li>
                                  <li class="form-check d-none d-lg-block viknaland"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-24" value="24" data-brand="7" onchange="document.getElementById('model').value = '7_1';"> <label class="form-check-label" for="brand-model-24">Viknaland 58</label></li>
                                  <li class="form-check d-none d-lg-block viknaland"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-25" value="25" data-brand="7" onchange="document.getElementById('model').value = '7_2';"> <label class="form-check-label" for="brand-model-25">Viknaland 70</label></li>
                                  <li class="form-check d-none d-lg-block viknaland"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-26" value="26" data-brand="7" onchange="document.getElementById('model').value = '7_3';"> <label class="form-check-label" for="brand-model-26">Viknaland 85</label></li>
                              </ul>
                          </li>
                          <li>
                              <ul>
                                  <li class="d-none d-lg-block windoffs">
                                      <span class="title-section-profile">Windoffs</span>
                                  </li>
                                  <li class="form-check d-none d-lg-block windoffs"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-28" value="28" data-brand="8" onchange="document.getElementById('model').value = '8_1';"> <label class="form-check-label" for="brand-model-28">Windoffs 3</label></li>
                                  <li class="form-check d-none d-lg-block windoffs"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-29" value="29" data-brand="8" onchange="document.getElementById('model').value = '8_2';"> <label class="form-check-label" for="brand-model-29">Windoffs 6</label></li>
                              </ul>
                          </li>
                          <li>
                              <ul>
                                  <li class="d-none d-lg-block openteck">
                                      <span class="title-section-profile">Openteck</span>
                                  </li>
                                  <li class="form-check d-none d-lg-block openteck"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-30" value="30" data-brand="9" onchange="document.getElementById('model').value = '9_1';"> <label class="form-check-label" for="brand-model-30">OpenTeck Delux 60</label></li>
                                  <li class="form-check d-none d-lg-block openteck"><input type="radio" class="form-check-input" name="brand-model" id="brand-model-31" value="31" data-brand="9" onchange="document.getElementById('model').value = '9_2';"> <label class="form-check-label" for="brand-model-31">OpenTeck Elite 70</label></li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="row profile-drop collapse">
              <div class="col-12 col-lg-8">
                  <input type="hidden" name="steklo" id="steklo" value="1">
                  <div class="select-wrapper">
                      <label class="input-label">Стеклопакет:</label>
                      <ul class="mobile-select" id="chambers">
                          <li class="form-check d-lg-block"><input type="radio" class="form-check-input" id="chamber-1" name="chamber" value="1" checked="checked" onchange="document.getElementById('steklo').value = '1';"> <label class="form-check-label" for="chamber-1">1 камерный</label></li>
                          <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="chamber-3" name="chamber" value="3" onchange="document.getElementById('steklo').value = '2';"> <label class="form-check-label" for="chamber-3">2 камерный</label></li>
                          <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="chamber-2" name="chamber" value="2" onchange="document.getElementById('steklo').value = '3';"> <label class="form-check-label" for="chamber-2">1 камерный энергосберегающий</label></li>
                          <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="chamber-4" name="chamber" value="4" onchange="document.getElementById('steklo').value = '4';"> <label class="form-check-label" for="chamber-4">2 камерный энергосберегающий</label></li>
                      </ul>
                  </div>
              </div>
              <div class="col-12 col-lg-4">
                  <input type="hidden" name="furn" id="furn" value="1">
                  <div class="select-wrapper">
                      <label class="input-label">Фурнитура:</label>
                      <ul class="mobile-select" id="furniture-brands">
                          <li class="form-check d-lg-block"><input type="radio" class="form-check-input" id="furniture-brand-1" name="furniture-brand" value="1" checked="checked" onchange="document.getElementById('furn').value = '1';"> <label class="form-check-label" for="furniture-brand-1">Standart</label></li>
                          <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="furniture-brand-2" name="furniture-brand" value="2" onchange="document.getElementById('furn').value = '2';"> <label class="form-check-label" for="furniture-brand-2">Premium</label></li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col">
                  <span class="title-section-profile collapsed collapse-toggler" data-toggle="collapse" data-target=".additional-drop" aria-expanded="false" role="list"><span class="cursor-custom">Дополнительная комплектация</span></span>
              </div>
          </div>
          <div class="row collapse additional-drop">
              <div class="col-12 col-lg-9">
                  <h6 class="title-section-sec">Комплектующие:</h6>
                  <input type="hidden" name="podok" id="podok" value="1">
                  <input type="hidden" name="otliv" id="otliv" value="1">
                  <input type="hidden" name="moskit" id="moskit" value="1">
                  <input type="hidden" name="montag" id="montag" value="1">
                  <input type="hidden" name="otkos" id="otkos" value="1">
                  <ul id="equipments">
                      <li class="select-wrapper">
                          <label class="input-label">Подоконник:</label>
                          <ul class="mobile-select" id="windowsills">
                              <li class="form-check d-lg-block"><input type="radio" class="form-check-input" id="windowsill-1" name="windowsill" value="1" checked="checked" onchange="document.getElementById('podok').value = '1';"> <label class="form-check-label" for="windowsill-1">Без подоконника</label></li>
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-2" name="windowsill" value="2" onchange="document.getElementById('podok').value = '2';"> <label class="form-check-label" for="windowsill-2">OpenTeck</label></li>
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-3" name="windowsill" value="3" onchange="document.getElementById('podok').value = '3';"> <label class="form-check-label" for="windowsill-3">Kraft</label></li>
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-4" name="windowsill" value="4" onchange="document.getElementById('podok').value = '4';"> <label class="form-check-label" for="windowsill-4">Danke</label></li>
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-5" name="windowsill" value="5" onchange="document.getElementById('podok').value = '5';"> <label class="form-check-label" for="windowsill-5">Plastolit</label></li>
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-6" name="windowsill" value="6" onchange="document.getElementById('podok').value = '6';"> <label class="form-check-label" for="windowsill-6">Werzalit</label></li>
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-7" name="windowsill" value="7" onchange="document.getElementById('podok').value = '7';"> <label class="form-check-label" for="windowsill-7">Crystalit</label></li>
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-8" name="windowsill" value="8" onchange="document.getElementById('podok').value = '8';"> <label class="form-check-label" for="windowsill-8">WDS</label></li>
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="windowsill-9" name="windowsill" value="9" onchange="document.getElementById('podok').value = '9';"> <label class="form-check-label" for="windowsill-9">Sauberg</label></li>
                          </ul>
                      </li>
                      <li class="select-wrapper">
                          <label class="input-label">Отлив:</label>
                          <ul class="mobile-select" id="low-tides">
                              <li class="form-check d-lg-block"><input type="radio" class="form-check-input" id="low-tide-1" name="low-tide" value="1" checked="checked" onchange="document.getElementById('otliv').value = '1';"> <label class="form-check-label" for="low-tide-1">Без отлива</label></li>
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="low-tide-2" name="low-tide" value="2" onchange="document.getElementById('otliv').value = '2';"> <label class="form-check-label" for="low-tide-2">Оцинкованный белый</label></li>
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="low-tide-3" name="low-tide" value="3" onchange="document.getElementById('otliv').value = '3';"> <label class="form-check-label" for="low-tide-3">Оцинкованный цветной</label></li>
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="low-tide-4" name="low-tide" value="4" onchange="document.getElementById('otliv').value = '4';"> <label class="form-check-label" for="low-tide-4">Алюминиевый</label></li>
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="low-tide-5" name="low-tide" value="5" onchange="document.getElementById('otliv').value = '5';"> <label class="form-check-label" for="low-tide-5">Пластиковый</label></li>
                          </ul>
                      </li>
                      <li class="select-wrapper">
                          <label class="input-label">Москитная сетка:</label>
                          <ul id="nets" class="mobile-select">
                              <li class="form-check d-lg-block"><input type="radio" class="form-check-input" id="net-1" name="net" value="1" checked="checked" onchange="document.getElementById('moskit').value = '1';"> <label class="form-check-label" for="net-1">Без москитной сетки</label></li>
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="net-2" name="net" value="2" onchange="document.getElementById('moskit').value = '2';"> <label class="form-check-label" for="net-2">Москитная сетка</label></li>
                          </ul>
                      </li>
                  </ul>
              </div>
              <div class="col-12 col-lg-3">
                  <span class="title-section-sec">Услуги:</span>
                  <ul id="services">
                      <li class="select-wrapper">
                          <label class="input-label">Монтаж</label>
                          <ul id="develops" class="mobile-select">
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="develop-2" name="develop" value="2" checked="checked" onchange="document.getElementById('montag').value = '1';"> <label class="form-check-label" for="develop-2">Без установки</label></li>
                              <li class="form-check d-lg-block"><input type="radio" class="form-check-input" id="develop-1" name="develop" value="1" onchange="document.getElementById('montag').value = '2';"> <label class="form-check-label" for="develop-1">С установкой</label></li>
                          </ul>
                      </li>
                      <li class="select-wrapper">
                          <label class="input-label">Откосы</label>
                          <ul class="mobile-select" id="slopes">
                              <li class="form-check d-lg-block"><input type="radio" class="foslopesrm-check-input" id="slope-1" name="slope" value="1"  checked="checked" onchange="document.getElementById('otkos').value = '1';"> <label class="form-check-label" for="slope-1">Без откосов</label></li>
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="slope-2" name="slope" value="2" onchange="document.getElementById('otkos').value = '2';"> <label class="form-check-label" for="slope-2">Гипсокартонные</label></li>
                              <li class="form-check d-none d-lg-block"><input type="radio" class="form-check-input" id="slope-3" name="slope" value="3" onchange="document.getElementById('otkos').value = '3';"> <label class="form-check-label" for="slope-3">Пластиковые</label></li>
                          </ul>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="bottom-section-form">
              <div class="row block-bottom-section-form">
                  <div class="col-lg-4">
                      <div style="color: red; display: none; padding: 0px 0px 10px 0px;" id="razmer_err">Заполните, пожалуйста, обязательные поля</div>
                      <button class="btn-calculate-section-bottom" onclick="calculator();">Рассчитать стоимость</button>
                      <div class="block-sum-calculate">
                          <div><span class="price">Цена:</span><span>от*</span></div>
                          <div><span class="sum-calculate" id="sum-calculate">0 <span class="currency">грн</span></span></div>
                      </div>
                      <p>Цена является ориентировочной. Окончательную стоимость уточнять у менеджера.</p>
                  </div>
                  <div class="col-lg-8">
                      <div class="block-right border-left-form">
                          <div class="form-group"><label for="exampleInputName5"><input name="your-name" class="form-control" id="exampleInputName5" placeholder="Ваше имя*"></label></div>
                          <div class="form-group"><label for="exampleInputPhone5"><input name="tel-460" class="form-control" id="exampleInputPhone5" placeholder="Телефон*"></label></div>
                          <div class="form-group"><label for="exampleInputEmail"><input name="your-message" type="email" class="form-control" id="exampleInputEmail" placeholder="Е-mail"></label></div>
                          <div class="form-group"><button class="send-request">Отправить заявку</button></div>
                      </div>
                  </div>
              </div>
          </div>
            <!--</form>-->
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
               <span class="title">Просчёт Стоимости</span>
               <p>Наш специалист просчитает стоимость заказа с учётом всех ваших индивидуальных пожеланий</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works payment"></i> <span class="number-scheme-works">4</span></div>
               <span class="title">Договор и Предоплата</span>
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
               <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">6</span></div>
               <span class="title">Гарантия</span>
               <p>Дадим гарантию более 10 лет на изделия и 5 лет на работы</p>
            </li>
         </ul>
         <ul class="list-scheme-works-lg d-none d-md-flex">
            <li class="">
               <span class="title">Заявка</span>
               <p>Позвоните нам или оставьте заявку на сайте</p>
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
            </li>
            <li class="">
               <span class="title">Просчёт Стоимости</span>
               <p>Наш специалист просчитает стоимость заказа с учётом всех ваших индивидуальных пожеланий</p>
               <div class="block-scheme-works"><i class="icon-scheme-works calculation"></i> <span class="number-scheme-works">3</span></div>
            </li>
            <li class="">
               <span class="title">Выполнение Заказа</span>
               <p>Обычно выполнение заказа занимает 2-3 рабочих дня</p>
               <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">5</span></div>
            </li>
            <li class="">
               <span class="title">Гарантия</span>
               <p>Дадим гарантию более 10 лет на изделия и 5 лет на работы</p>
               <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">7</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title">Замер</span>
               <p>Договоримся о замере на удобную для вас дату и время</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works payment"></i> <span class="number-scheme-works">4</span></div>
               <span class="title">Договор и Предоплата</span>
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
   <section class="section-img">
      <div class="container">
         <div class="block-imgs">
            <div class="block-1">
               <span class="title-img">Окна сейчас,<br/>деньги - <span class="green-color px-2">потом</span></span>
               <p class="mt-3 mt-lg-4">Удивительно <span class="green-color px-2">выгодная</span> рассрочка</p>
               <ul class="list-percent">
                  <li class="percent-1">Первый взнос</li>
                  <li class="percent-1">Переплат</li>
                  <li class="percent-10">Месяцев</li>
               </ul>
            </div>
            <div class="block-2 d-none d-md-block"><img src="<?php bloginfo('template_url') ?>/images/house-house-png.413a767d.png" class="img-fluid" alt="photo"></div>
            <div class="block-3">
               <div class="block-pref">
                  <span class="header-pref">Экономьте до -35%</span>
                  <div class="body-pref">
                     <ul>
                        <li class="icon decor-li-pref">"Тепла Оселя"</li>
                        <li class="icon decor-li-pref">"Теплі Кредити"</li>
                     </ul>
                     <div class="ml-3 block-bank">
                        <span class="py-lg-2 icon ukrgaz-pref"></span> <span class="py-2 icon privat-pref"></span>
                        <div class="d-flex"><span class="py-lg-2 w-50 icon pref-exim"></span> <span class="py-lg-2 w-50 icon pref-ochad"></span></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="text-center"><a href="<?=get_bloginfo('home')?>/okna-v-rassrochku-i-kredit/" class="btn btn-success mt-0 btn-href-2">Подробнее</a></div>
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
   <section class="section-post section-post-windows">
      <div class="container">
         <h2 class="title-section">Виды балконных окон</h2>
         <p>Застекленная лоджия не только сохраняет тепло в квартире, но и помогает создать дополнительную комнату.</p>
         <p>Условно балконные окна разделяют по виду остекления и способу открывания створок.</p>
         <p>По виду остекления конструкции бывают:</p>
         <ul>
            <li>· холодные;</li>
            <li>· теплые.</li>
         </ul>
         <p>При холодном остеклении применяется легкий профиль без резинового уплотнителя, с небольшим количеством воздушных камер. В качестве светопрозрачной вставки используется обычное стекло или однокамерный стеклопакет, состоящий из двух листов толщиной по 4 мм.</p>
         <p>Изделия из холодного профиля отличаются низким весом, что важно при установке в старых постройках. Тонкие стекла лучше пропускают естественный солнечный свет в помещение. Основным недостатком холодного окна является низкий уровень теплоизоляции. В некоторых моделях не предусмотрена установка москитной сетки, защитного экрана для животных (антикошка). По стоимости холодные оконные конструкции ниже теплых.</p>
         <p>Теплое остекление применяется, когда балкон планируется использовать в качестве отдельного помещения. Для изделий ПВХ применяется утолщенный профиль с теплоизоляционным стеклопакетом. Теплая профильная система состоит из 6-7 изолированных камер с качественным резиновым уплотнителем. Для усиления энергоэффективности имеются специальные полимерные вставки.</p>
         <p>Массивная и прочная конструкция защищает балкон от взлома. Недостатком теплого остекления является невозможность монтажа в хрущевках из-за того, что старые балконные плиты не выдерживают нагрузку.</p>
         <p>На балконе и лоджиях применяется французское остекление. При данном типе остекление осуществляется по высоте от потолка до пола. В ширину оконная конструкция может занимать всю или часть стены. Для создания панорамного остекления используются безрамные модели. Панорамные окна визуально расширяют и звукоизолируют помещение, создавая иллюзию проживания в открытом пространстве. Тип открывания французского окна бывает раздвижным или распашным.</p>
         <h2 class="title-post">Особенности конструкции</h2>
         <p>По способу открывания створок конструкции бывают:</p>
         <ul>
            <li>· поворотные;</li>
            <li>· откидные;</li>
            <li>· поворотно-откидные;</li>
            <li>· подвесные;</li>
            <li>· раздвижные.</li>
         </ul>
         <p>В поворотных балконных моделях створка открывается посредством поворота в горизонтальном направлении вокруг своей правой или левой оси.</p>
         <p>Откидные балконные конструкции открываются путем поворота в вертикальном направлении вокруг нижней оси.</p>
         <p>Поворотно-откидные окна для балкона могут открываться полностью или приоткрываться для режима проветривания.</p>
         <p>Из-за особенности раздвижные конструкции применяются исключительно при холодном остеклении. Они экономят место в лоджии с небольшой площадью. Недостатком раздвижных моделей является возможное промерзание зимой, из-за чего блокируется открывание створок.</p>
         <h2 class="title-post">Преимущества пластиковых окон на балкон</h2>
         <p>Пластиковые окна на балкон характеризуются рядом преимуществ:</p>
         <ol>
            <li>Отличной тепло- и звукоизоляцией.</li>
            <li>Устойчивостью к внешним факторам (температурным изменениям, ветрам, осадкам).</li>
            <li>Оригинальной фурнитурой.</li>
            <li>Отсутствием выцветания и появления плесени.</li>
            <li>Надежностью и долговечностью.</li>
            <li>Простым уходом.</li>
            <li>Уникальной технологией армирования ПВХ-профиля.</li>
            <li>Широким выбором цветов с ламинацией или без.</li>
            <li>Возможностью использования разных типов стеклопакета.</li>
         </ol>
         <p>Установка оконной конструкции для лоджии должна осуществляться профессионалами. От качества монтажа зависят эксплуатационные свойства балконного окна.</p>
         <h2 class="title-post">Цены на окна на балкон</h2>
         <p>Компания “Windows Group” предлагает вызвать замерщика и заказать металлопластиковые оконные конструкции под ключ от производителя. Итоговая цена пластикового окна на балкон формируется с учетом используемых материалов, размера конструкции, разновидности стеклопакета, услуг монтажа. Сделать заказ можно на сайте или позвонив по телефону.</p>
      </div>
   </section>
   <section class="section-other-type-windows">
      <div class="container">
         <h2 class="title-section">Ищите Другие Окна?</h2>
         <ul class="list-other-type-windows">
            <li class="item-other-type-windows"><img src="<?php bloginfo('template_url') ?>/images/metalloplastikovye-okna-v-dom.3761e01f.png" class="img-fluid" alt="photo"> <a href="<?=get_bloginfo('home')?>/plastikovye-okna/v-dom" class="title-footer">В Дом</a></li>
            <li class="item-other-type-windows"><img src="<?php bloginfo('template_url') ?>/images/metalloplastikovye-okna-na-dachu.ef19de49.png" class="p-3 img-fluid" alt="photo"> <a href="<?=get_bloginfo('home')?>/plastikovye-okna/na-dachu/" class="title-footer">На Дачу</a></li>
            <li class="item-other-type-windows"><img src="<?php bloginfo('template_url') ?>/images/windows-bathroom.2806bc0c.jpg" class="img-fluid" alt="photo"> <a href="<?=get_bloginfo('home')?>/plastikovye-okna/v-vannuyu-komnatu/" class="title-footer">В Ванную</a></li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();

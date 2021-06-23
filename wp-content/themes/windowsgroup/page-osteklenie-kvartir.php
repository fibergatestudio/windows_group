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
            <h1>Остекление квартир</h1>
         </div>
      </div>
   </section>

         <?php 
            
            global $wpdb;
            $result_params = $wpdb->get_results("SELECT * FROM `{$wpdb -> prefix}window_prices` WHERE `page_name` = 'osteklenie_kvartir' ");
            $price_obj = json_decode($result_params[0]->data);
         
         ?>
         
   <section class="section-top-page">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
          <p class="text-custom-page">
              Текст 7-8 строчек.
          </p>
      </div>
   </section>
   
   <section class="section-top-page">
      <div class="container">
         
         <div class="block-DoubleOneOpening">
            <h2 class="title-block-type-windows">Двухстворчатое с Одним Открыванием</h2>
            <span class="small-title">Размер 1100 х 1350 мм, Цена от <span class="min-price"><?=$price_obj->okno_1->min?></span> грн до <span class="max-price"><?=$price_obj->okno_1->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-DoubleOneOpening" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-DoubleOneOpening-tab" data-toggle="tab" href="#wds-DoubleOneOpening" role="tab" aria-controls="wds-DoubleOneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-DoubleOneOpening-tab" data-toggle="tab" href="#windoffs-DoubleOneOpening" role="tab" aria-controls="windoffs-DoubleOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-DoubleOneOpening-tab" data-toggle="tab" href="#viknaland-DoubleOneOpening" role="tab" aria-controls="viknaland-DoubleOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-DoubleOneOpening-tab" data-toggle="tab" href="#rehau-DoubleOneOpening" role="tab" aria-controls="rehau-DoubleOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-DoubleOneOpening-tab" data-toggle="tab" href="#salamander-DoubleOneOpening" role="tab" aria-controls="salamander-DoubleOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-DoubleOneOpening-tab" data-toggle="tab" href="#kbe-DoubleOneOpening" role="tab" aria-controls="kbe" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-DoubleOneOpening-tab" data-toggle="tab" href="#opentek-DoubleOneOpening" role="tab" aria-controls="opentek-DoubleOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-DoubleOneOpening-tab" data-toggle="tab" href="#veka-DoubleOneOpening" role="tab" aria-controls="veka-DoubleOneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-DoubleOneOpening-tab" data-toggle="tab" href="#aluplast-DoubleOneOpening" role="tab" aria-controls="aluplast-DoubleOneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-DoubleOneOpening">

               <?php 
               $k = 0;
               foreach ($price_obj->okno_1 as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-DoubleOneOpening" role="tabpanel" aria-labelledby="<?=$key_w?>-DoubleOneOpening">
                  <div class="table-tab">
                     <img src="<?php bloginfo('template_url') ?>/images/title-img-table-windows-32.088e623b.png" class="img-type-windows-2 img-fluid" alt="photo">
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
                              $this_obj = $price_obj->okno_1->$key_w;
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
         
         <div class="block-DoubleDoubleOpening">
            <h2 class="title-block-type-windows">Двухстворчатое с Двумя Открываниями</h2>
            <span class="small-title">Размер 1100 х 1350 мм, Цена от <span class="min-price"><?=$price_obj->okno_2->min?></span> грн до <span class="max-price"><?=$price_obj->okno_2->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-DoubleDoubleOpening" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-DoubleDoubleOpening-tab" data-toggle="tab" href="#wds-DoubleDoubleOpening" role="tab" aria-controls="wds-DoubleDoubleOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-DoubleDoubleOpening-tab" data-toggle="tab" href="#windoffs-DoubleDoubleOpening" role="tab" aria-controls="windoffs-DoubleDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-DoubleDoubleOpening-tab" data-toggle="tab" href="#viknaland-DoubleDoubleOpening" role="tab" aria-controls="viknaland-DoubleDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-DoubleDoubleOpening-tab" data-toggle="tab" href="#rehau-DoubleDoubleOpening" role="tab" aria-controls="rehau-DoubleDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-DoubleDoubleOpening-tab" data-toggle="tab" href="#salamander-DoubleDoubleOpening" role="tab" aria-controls="salamander-DoubleDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-DoubleDoubleOpening-tab" data-toggle="tab" href="#kbe-DoubleDoubleOpening" role="tab" aria-controls="kbe" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-DoubleDoubleOpening-tab" data-toggle="tab" href="#opentek-DoubleDoubleOpening" role="tab" aria-controls="opentek" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-DoubleDoubleOpening-tab" data-toggle="tab" href="#veka-DoubleDoubleOpening" role="tab" aria-controls="veka-DoubleDoubleOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-DoubleDoubleOpening-tab" data-toggle="tab" href="#aluplast-DoubleDoubleOpening" role="tab" aria-controls="aluplast-DoubleDoubleOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-DoubleDoubleOpening">

               <?php 
               $k = 0;
               foreach ($price_obj->okno_2 as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-DoubleDoubleOpening" role="tabpanel" aria-labelledby="<?=$key_w?>-DoubleDoubleOpening">
                  <div class="table-tab">
                     <img src="<?php bloginfo('template_url') ?>/images/title-img-table-windows-42.3f7425db.png" class="openteck-logo img-type-windows-2 img-fluid" alt="photo">
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
                              $this_obj = $price_obj->okno_2->$key_w;
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

         <div class="block-ThreeOneOpening">
            <h2 class="title-block-type-windows">Трехстворчатое с Одним Открыванием</h2>
            <span class="small-title">Размер 1720 х 1350 мм, Цена от <span class="min-price"><?=$price_obj->okno_3->min?></span> грн до <span class="max-price"><?=$price_obj->okno_3->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-ThreeOneOpening" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-ThreeOneOpening-tab" data-toggle="tab" href="#wds-ThreeOneOpening" role="tab" aria-controls="wds-ThreeOneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-ThreeOneOpening-tab" data-toggle="tab" href="#windoffs-ThreeOneOpening" role="tab" aria-controls="windoffs-ThreeOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-ThreeOneOpening-tab" data-toggle="tab" href="#viknaland-ThreeOneOpening" role="tab" aria-controls="viknaland-ThreeOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-ThreeOneOpening-tab" data-toggle="tab" href="#rehau-ThreeOneOpening" role="tab" aria-controls="rehau-ThreeOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-ThreeOneOpening-tab" data-toggle="tab" href="#salamander-ThreeOneOpening" role="tab" aria-controls="salamander-ThreeOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-ThreeOneOpening-tab" data-toggle="tab" href="#kbe-ThreeOneOpening" role="tab" aria-controls="kbe-ThreeOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-ThreeOneOpening-tab" data-toggle="tab" href="#opentek-ThreeOneOpening" role="tab" aria-controls="opentek-ThreeOneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-ThreeOneOpening-tab" data-toggle="tab" href="#veka-ThreeOneOpening" role="tab" aria-controls="veka-ThreeOneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-ThreeOneOpening-tab" data-toggle="tab" href="#aluplast-ThreeOneOpening" role="tab" aria-controls="aluplast-ThreeOneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-ThreeOneOpening">
               
               <?php 
               $k = 0;
               foreach ($price_obj->okno_3 as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-ThreeOneOpening" role="tabpanel" aria-labelledby="<?=$key_w?>-ThreeOneOpening">
                  <div class="table-tab">
                     <img src="<?php bloginfo('template_url') ?>/images/title-img-table-windows-72.90f20249.png" class="mt-lg-5 img-type-windows-3 img-fluid" alt="photo">
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
                              $this_obj = $price_obj->okno_3->$key_w;
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
         <div class="block-ThreeDoubleOpening">
            <h2 class="title-block-type-windows">Трехстворчатое с Двумя Открываниями</h2>
            <span class="small-title">Размер 1720 х 1350 мм, Цена от <span class="min-price"><?=$price_obj->okno_4->min?></span> грн до <span class="max-price"><?=$price_obj->okno_4->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-ThreeDoubleOpening" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-ThreeDoubleOpening-tab" data-toggle="tab" href="#wds-ThreeDoubleOpening" role="tab" aria-controls="wds-ThreeDoubleOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-ThreeDoubleOpening-tab" data-toggle="tab" href="#windoffs-ThreeDoubleOpening" role="tab" aria-controls="windoffs-ThreeDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-ThreeDoubleOpening-tab" data-toggle="tab" href="#viknaland-ThreeDoubleOpening" role="tab" aria-controls="viknaland-ThreeDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-ThreeDoubleOpening-tab" data-toggle="tab" href="#rehau-ThreeDoubleOpening" role="tab" aria-controls="rehau-ThreeDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-ThreeDoubleOpening-tab" data-toggle="tab" href="#salamander-ThreeDoubleOpening" role="tab" aria-controls="salamander-ThreeDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-ThreeDoubleOpening-tab" data-toggle="tab" href="#kbe-ThreeDoubleOpening" role="tab" aria-controls="kbe-ThreeDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-ThreeDoubleOpening-tab" data-toggle="tab" href="#opentek-ThreeDoubleOpening" role="tab" aria-controls="opentek-ThreeDoubleOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-ThreeDoubleOpening-tab" data-toggle="tab" href="#veka-ThreeDoubleOpening" role="tab" aria-controls="veka-ThreeDoubleOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-ThreeDoubleOpening-tab" data-toggle="tab" href="#aluplast-ThreeDoubleOpening" role="tab" aria-controls="aluplast-ThreeDoubleOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-ThreeDoubleOpening">
               
               <?php 
               $k = 0;
               foreach ($price_obj->okno_4 as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-ThreeDoubleOpening" role="tabpanel" aria-labelledby="<?=$key_w?>-ThreeDoubleOpening">
                  <div class="table-tab">
                     <img src="<?php bloginfo('template_url') ?>/images/title-img-table-windows-82.4d9fd6e8.png" class="mt-lg-5 img-type-windows-3 img-fluid" alt="photo">
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
                              $this_obj = $price_obj->okno_4->$key_w;
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
         <div class="block-ThreeT-OneOpening">
            <h2 class="title-block-type-windows">Трехстворчатое Т-образное с Одним Открыванием</h2>
            <span class="small-title">Размер 1720 х 1750 мм, Цена от <span class="min-price"><?=$price_obj->okno_5->min?></span> грн до <span class="max-price"><?=$price_obj->okno_5->max?></span> грн</span>
            <ul class="nav nav-tabs" id="myTab-ThreeT-OneOpening" role="tablist">
               <li class="nav-item"><a class="nav-link active" id="wdc-ThreeT-OneOpening-tab" data-toggle="tab" href="#wds-ThreeT-OneOpening" role="tab" aria-controls="wds-ThreeT-OneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/WDS-logo-1.5f37c8d5.svg" class="img-fluid WDS-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="windoffs-ThreeT-OneOpening-tab" data-toggle="tab" href="#windoffs-ThreeT-OneOpening" role="tab" aria-controls="windoffs-ThreeT-OneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/logo-new-windoffs-1.590253c8.svg" class="img-fluid windoffs-logo" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="viknaland-ThreeT-OneOpening-tab" data-toggle="tab" href="#viknaland-ThreeT-OneOpening" role="tab" aria-controls="viknaland-ThreeT-OneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/viknaland-logo-1.a67c333c.svg" class="viknaland-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="rehau-ThreeT-OneOpening-tab" data-toggle="tab" href="#rehau-ThreeT-OneOpening" role="tab" aria-controls="rehau-ThreeT-OneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/rehau-logo-1.5dbf9707.svg" class="rehau-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="salamander-ThreeT-OneOpening-tab" data-toggle="tab" href="#salamander-ThreeT-OneOpening" role="tab" aria-controls="salamander-ThreeT-OneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/salamander-logo-1.4fa97951.svg" class="salamander-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="kbe-ThreeT-OneOpening-tab" data-toggle="tab" href="#kbe-ThreeT-OneOpening" role="tab" aria-controls="kbe-ThreeT-OneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/kbe-logo-1.0d5c807a.svg" class="img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="opentek-ThreeT-OneOpening-tab" data-toggle="tab" href="#opentek-ThreeT-OneOpening" role="tab" aria-controls="opentek-ThreeT-OneOpening" aria-selected="false"><img src="<?php bloginfo('template_url') ?>/images/openteck-logo-1.c0ec51c2.svg" class="openteck-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="veka-ThreeT-OneOpening-tab" data-toggle="tab" href="#veka-ThreeT-OneOpening" role="tab" aria-controls="veka-ThreeT-OneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/veka-logo-1.5a1822d9.svg" class="veka-logo img-fluid" alt="photo"></a></li>
               <li class="nav-item"><a class="nav-link" id="aluplast-ThreeT-OneOpening-tab" data-toggle="tab" href="#aluplast-ThreeT-OneOpening" role="tab" aria-controls="aluplast-ThreeT-OneOpening" aria-selected="true"><img src="<?php bloginfo('template_url') ?>/images/aluplast-logo-1.19c32497.svg" class="aluplast-logo img-fluid" alt="photo"></a></li>
            </ul>
            <div class="tab-content" id="myTabContent-ThreeT-OneOpening">
               
               <?php 
               $k = 0;
               foreach ($price_obj->okno_5 as $key_w => $value_w) {
                  if (is_object($value_w)) { ?>
               
               <div class="tab-pane fade show <?=($k===0)?'active':''?>" id="<?=$key_w?>-ThreeT-OneOpening" role="tabpanel" aria-labelledby="<?=$key_w?>-ThreeT-OneOpening">
                  <div class="table-tab">
                     <img src="<?php bloginfo('template_url') ?>/images/title-img-table-windows-92.767b3f74.png" class="img-type-windows-3T img-fluid" alt="photo">
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
                              $this_obj = $price_obj->okno_5->$key_w;
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

         <div class="block-windows-type-1">
            <h2 class="title-block-type-windows">Лоджия</h2>
            <span class="small-title">Размер 3000 х 1600 мм, Цена от <span class="min-price"><?=$price_obj->okno_6->min?></span> грн до <span class="max-price"><?=$price_obj->okno_6->max?></span> грн</span>
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
               foreach ($price_obj->okno_6 as $key_w => $value_w) {
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
                              $this_obj = $price_obj->okno_6->$key_w;
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
            <span class="small-title">Размер 3000 х 1600 мм + 800 х 1600 мм + 800 х 1600 мм, Цена от <span class="min-price"><?=$price_obj->okno_7->min?></span> грн до <span class="max-price"><?=$price_obj->okno_7->max?></span> грн</span>
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
               foreach ($price_obj->okno_7 as $key_w => $value_w) {
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
                              $this_obj = $price_obj->okno_7->$key_w;
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
            <span class="small-title">Размер 3000 х 1600 мм + 800 х 1600 мм, Цена от <span class="min-price"><?=$price_obj->okno_8->min?></span> грн до <span class="max-price"><?=$price_obj->okno_8->max?></span> грн</span>
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
               foreach ($price_obj->okno_8 as $key_w => $value_w) {
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
                              $this_obj = $price_obj->okno_8->$key_w;
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
            <span class="small-title">Размер 4600 х 1600 мм, Цена от <span class="min-price"><?=$price_obj->okno_9->min?></span> грн до <span class="max-price"><?=$price_obj->okno_9->max?></span> грн</span>
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
               foreach ($price_obj->okno_9 as $key_w => $value_w) {
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
                              $this_obj = $price_obj->okno_9->$key_w;
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
            <span class="small-title">Размер 3600 х 2600 мм, Цена от <span class="min-price"><?=$price_obj->okno_10->min?></span> грн до <span class="max-price"><?=$price_obj->okno_10->max?></span> грн</span>
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
               foreach ($price_obj->okno_10 as $key_w => $value_w) {
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
                              $this_obj = $price_obj->okno_10->$key_w;
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
               <p>Мы заранее сообщим о готовности заказа и согласуем удобное для вас время доставки и монтажа</p>
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
               <p>Мы заранее сообщим о готовности заказа и согласуем удобное для вас время доставки и монтажа</p>
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
         <h2 class="title-section">Блок с текстом</h2>
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
   <section class="section-post section-post-windows section-other-type-windows">
      <div class="container">
         <h2 class="title-section">Блок текста</h2>
         
      </div>
   </section>
   
   <a id="button"></a>
</div>

<?php
get_footer();

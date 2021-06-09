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

<div class="main page-glass">
   <section class="section-welcome-page bg-welcome-page-glass">
      <div class="container">
         <div class="text-welcome">
            <h1>Стеклопакеты</h1>
         </div>
      </div>
   </section>
   <div class="section-top-page-glass">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
         <h2 class="title-post title-post-top">Купить стеклопакет в Киеве</h2>
          <p class="text-custom-page">Стеклопакет – светопрозрачная конструкция из двух и более стекол, скрепленных по контуру герметиками и дистанционными рамками.
              Наша компания “Виндовс Груп” предлагает купить стеклопакет от ведущих производителей по лучшим ценам.</p>
      </div>
      <div class="price-type-glass">
         <div class="container">
            <h2 class="title-section">Виды Стеклопакетов</h2>
            <ul class="list-type-glass-page-glass">
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>Однокамерные</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/odnokamernye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass.65a02df2.jpg" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>599</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>Двухкамерные</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/dvuhkamernye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-2.6f5a0aaf.jpg" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>799</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>Трехкамерные</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/trekhkamernye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-3.d1dd173f.jpg" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>999</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>С подогревом</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/s-podogrevom/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-4.52ed71df.png" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>2999</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>Энергосберегающие</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/energosberegayushchie/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-5.ee7d81e0.jpg" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>830</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>Мультифункциональные</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/multifunkcionalnye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-6.d362525d.png" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>899</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>Тонированные</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/tonirovannye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-7.cd42b4f1.jpg" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>862</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
               <li class="item-glass">
                  <div class="wrapper-item-glass">
                     <div class="header-item-glass"><span>Ударопрочные</span></div>
                     <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/udaroprochnye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-8.8e64276e.jpg" class="img-fluid" alt="photo-product1"></a>
                     <div class="footer-item-glass">
                        <div class="price"><span class="text">от</span> <span>980</span> <span class="text">грн / м<sup>2</sup></span></div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div class="block-form-inline">
      <div class="container">
         <form class="call-back-form">
					<div class="form-group"><label><input class="form-control" name="your-name" placeholder="Ваше имя*"></label></div>
					<div class="form-group"><label><input class="form-control" name="tel-460" placeholder="Телефон*"></label></div>
					<div class="form-group"><label><input type="email" class="form-control" name="your-message" placeholder="E-mail"></label></div>
					<button type="submit" class="btn btn-success">Перезвоните Мне</button>
				</form>
      </div>
   </div>
   <section class="section-table-price">
      <div class="container">
         <h2 class="title-section">Цены на Стеклопакеты</h2>
         <div class="wrapper-table">
            <table class="table-page-glass table-windows">
               <thead>
                  <tr>
                     <td>Тип стеклопакета</td>
                     <td>Формула стеклопакета</td>
                     <td>Светопропускание</td>
                     <td class="td-100">Сопротивление теплопередачи</td>
                     <td>Цена за м<sup>2</sup></td>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>Однокамерный</td>
                     <td>4-10-4-10-4i</td>
                     <td>73</td>
                     <td>73</td>
                     <td>1095 грн</td>
                  </tr>
                  <tr>
                     <td>Двухкамерный</td>
                     <td>4-10ar-4-10ar-4i</td>
                     <td>62</td>
                     <td>62</td>
                     <td>1213 грн</td>
                  </tr>
                  <tr>
                     <td>Трехкамерный</td>
                     <td>4-16Ar-4zero</td>
                     <td>71</td>
                     <td>71</td>
                     <td>837 грн</td>
                  </tr>
                  <tr>
                     <td>Однокамерный энергосберегающий</td>
                     <td>4Sol-10-4-10-4i</td>
                     <td>73</td>
                     <td>73</td>
                     <td>1355 грн</td>
                  </tr>
                  <tr>
                     <td>Двухкамерный энергосберегающий</td>
                     <td>4i-14ar ACS-4-16ar ACS-4i</td>
                     <td>73</td>
                     <td>73</td>
                     <td>2338 грн</td>
                  </tr>
                  <tr>
                     <td>Двухкамерный мультифункциональный</td>
                     <td>4Sol-14ar-4-16ar-4i</td>
                     <td>67</td>
                     <td>67</td>
                     <td>1557 грн</td>
                  </tr>
                  <tr>
                     <td>Трехкамерный энергосберегающий</td>
                     <td>4Sel-10ar-4-10ar-4</td>
                     <td>55</td>
                     <td>55</td>
                     <td>1410 грн</td>
                  </tr>
                  <tr>
                     <td>Трехкамерный мультифункциональный</td>
                     <td>4-14Ar-4-14Ar-4i</td>
                     <td>70</td>
                     <td>70</td>
                     <td>1251 грн</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </section>
   <section>
      <div class="container">
         <ul>
            <li class="item-type-glass">
               <h2 class="d-md-none title-block">Однокамерные Стеклопакеты</h2>
               <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/odnokamernye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass.65a02df2.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="info-glassproduct">
                  <h2 class="d-none d-md-block title-block">Однокамерные Стеклопакеты</h2>
                  <p>Стекла в стеклопакете плотно соединяются между собой с помощью специального герметика, поэтому оконная конструкция не подразумевает замену одного стекла в стеклопакете. При появлении трещин или повреждении светопрозрачной вставки требуется изготовление нового стеклопакета.

                      Стеклянная вставка производится на заказ с учетом параметров окна. После изготовления мастер вынимает штапики и устанавливает новый пакет. Однокамерная светопрозрачная конструкция может быть заменена на двухкамерную, при условии достаточной ширины профиля.</p>
                  <div class="bottom">
                     <div class="price"><span class="text">Цена от</span> <span>599</span> <span class="text">грн / м<sup>2</sup></span></div>
                     <div class="block-buttton"><a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/odnokamernye/" class="btn btn-custom-project btn-more-details">Подробнее</a> <button class="btn btn-custom-project btn-call-me-page-glass"><span class="icon icon-phone-table"></span><span>Перезвоните Мне</span></button></div>
                  </div>
               </div>
            </li>
            <li class="item-type-glass">
               <h2 class="d-md-none title-block">Двухкамерные Стеклопакеты</h2>
               <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/dvuhkamernye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-2.6f5a0aaf.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="info-glassproduct">
                  <h2 class="d-none d-md-block title-block">Двухкамерные Стеклопакеты</h2>
                  <p>Главное отличие двухкамерных моделей от однокамерных – наличие дополнительного стекла, дистанционных рамок и камер. Двойные пакеты по весу гораздо тяжелее стеклопакетов с одной воздушной камерой. Однако это компенсируется их достоинством снижать уровень звука до 40 дБ. Также обеспечивается надежная защита помещения от холода при снижении температуры зимой до -25 градусов.</p>
                  <div class="bottom">
                     <div class="price"><span class="text">Цена от</span> <span>799</span> <span class="text">грн / м<sup>2</sup></span></div>
                     <div class="block-buttton"><a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/dvuhkamernye/" class="btn btn-custom-project btn-more-details">Подробнее</a> <button class="btn btn-custom-project btn-call-me-page-glass"><span class="icon icon-phone-table"></span><span>Перезвоните Мне</span></button></div>
                  </div>
               </div>
            </li>
            <li class="item-type-glass">
               <h2 class="d-md-none title-block">Трехкамерные Стеклопакеты</h2>
               <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/trekhkamernye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-3.d1dd173f.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="info-glassproduct">
                  <h2 class="d-none d-md-block title-block">Трехкамерные Стеклопакеты</h2>
                  <p>Трехкамерный стеклопакет состоит из трех воздушных камер и четырех стекол. Толщина используемых стеклянных вставок может отличаться или быть одинаковой. Оконная система обладает самыми высокими показателями теплозащиты и звукоизоляции по сравнению с одно- и двухкамерными стеклопакетами. При необходимости ширина камер может увеличиваться и применяются энергосберегающие стекла. Это повысит уровень энергоэффективности больше чем на 30%.</p>
                  <div class="bottom">
                     <div class="price"><span class="text">Цена от</span> <span>999</span> <span class="text">грн / м<sup>2</sup></span></div>
                     <div class="block-buttton"><a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/trekhkamernye/" class="btn btn-custom-project btn-more-details">Подробнее</a> <button class="btn btn-custom-project btn-call-me-page-glass"><span class="icon icon-phone-table"></span><span>Перезвоните Мне</span></button></div>
                  </div>
               </div>
            </li>
            <li class="item-type-glass">
               <h2 class="d-md-none title-block">Энергосберегающие стеклопакеты</h2>
               <a href="<?=get_bloginfo('home')?>/steklopakety/energosberegayushchie/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-5.ee7d81e0.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="info-glassproduct">
                  <h2 class="d-none d-md-block title-block">Энергосберегающие стеклопакеты</h2>
                  <p>Энергосберегающий стеклопакет состоит из низкоэмиссионного стекла, функционирующего по принципу зеркала. Благодаря специальной энергоэффективной обработке с нанесением напыления, стеклянная поверхность отражает тепловое излучение внутри помещения.Энергоэффективные пакеты отличаются легким весом, что снижает нагрузку на несущую раму, петли и фурнитуру. Это значительно увеличивает период эксплуатации конструкции.</p>
                  <div class="bottom">
                     <div class="price"><span class="text">Цена от</span> <span>830</span> <span class="text">грн / м<sup>2</sup></span></div>
                     <div class="block-buttton"><a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/energosberegayushchie/" class="btn btn-custom-project btn-more-details">Подробнее</a> <button class="btn btn-custom-project btn-call-me-page-glass"><span class="icon icon-phone-table"></span><span>Перезвоните Мне</span></button></div>
                  </div>
               </div>
            </li>
            <li class="item-type-glass">
               <h2 class="d-md-none title-block">Мультифункциональные</h2>
               <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/multifunkcionalnye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-6.d362525d.png" class="img-fluid" alt="photo-product1"></a>
               <div class="info-glassproduct">
                  <h2 class="d-none d-md-block title-block">Мультифункциональные</h2>
                  <p>Мультифункциональный стеклопакет представляет собой светопрозрачную конструкцию со специальным многослойным напылением. Основным функциональным слоем является высокоселективное серебро. Изделия, созданные с помощью глубокой вакуумной магнетронной обработки, предупреждают проникновение прямых солнечных лучей в помещение. При этом полностью сохраняется пропускная способность естественного освещения.</p>
                  <div class="bottom">
                     <div class="price"><span class="text">Цена от</span> <span>899</span> <span class="text">грн / м<sup>2</sup></span></div>
                     <div class="block-buttton"><a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/multifunkcionalnye/" class="btn btn-custom-project btn-more-details">Подробнее</a> <button class="btn btn-custom-project btn-call-me-page-glass"><span class="icon icon-phone-table"></span><span>Перезвоните Мне</span></button></div>
                  </div>
               </div>
            </li>
            <li class="item-type-glass">
               <h2 class="d-md-none title-block">Тонированные Стеклопакеты</h2>
               <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/tonirovannye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-7.cd42b4f1.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="block-slider-color-glass info-glassproduct">
                  <h2 class="d-none d-md-block title-block">Тонированные Стеклопакеты</h2>
                  <p>Пластиковые окна с тонированными стеклами – инновационное инженерное решение для оформления вашего дома, офиса или квартиры. Уникальная разработка изготавливается по специальной технологии. В горячую расплавленную стеклянную массу перед формовкой листа добавляются тонирующие компоненты. В результате такого смешивания получаются качественные затемненные экраны с продолжительным сроком эксплуатации, не зависящие от погодных условий.</p>
                  <div style="max-width: 100%">
                     <div class="slider-color-glass">
                        <div class="block-item-slider-color-glass">
                           <div class="item-slider-color-glass C1B8B3"></div>
                           <span>RX 40 XT</span>
                        </div>
                        <div class="block-item-slider-color-glass">
                           <div class="item-slider-color-glass B7B79F"></div>
                           <span>RX 40 XT</span>
                        </div>
                        <div class="block-item-slider-color-glass">
                           <div class="item-slider-color-glass c695851"></div>
                           <span>RX 40 XT</span>
                        </div>
                        <div class="block-item-slider-color-glass">
                           <div class="item-slider-color-glass A7967A"></div>
                           <span>RX 40 XT</span>
                        </div>
                        <div class="block-item-slider-color-glass">
                           <div class="item-slider-color-glass EBE5CF"></div>
                           <span>RX 40 XT</span>
                        </div>
                        <div class="block-item-slider-color-glass">
                           <div class="item-slider-color-glass C1B8B3"></div>
                           <span>RX 40 XT</span>
                        </div>
                        <div class="block-item-slider-color-glass">
                           <div class="item-slider-color-glass B7B79F"></div>
                           <span>RX 40 XT</span>
                        </div>
                        <div class="block-item-slider-color-glass">
                           <div class="item-slider-color-glass c695851"></div>
                           <span>RX 40 XT</span>
                        </div>
                        <div class="block-item-slider-color-glass">
                           <div class="item-slider-color-glass A7967A"></div>
                           <span>RX 40 XT</span>
                        </div>
                        <div class="block-item-slider-color-glass">
                           <div class="item-slider-color-glass EBE5CF"></div>
                           <span>RX 40 XT</span>
                        </div>
                     </div>
                  </div>
                  <div class="bottom">
                     <div class="price"><span class="text">Цена от</span> <span>862</span> <span class="text">грн / м<sup>2</sup></span></div>
                     <div class="block-buttton"><a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/tonirovannye/" class="btn btn-custom-project btn-more-details">Подробнее</a> <button class="btn btn-custom-project btn-call-me-page-glass"><span class="icon icon-phone-table"></span><span>Перезвоните Мне</span></button></div>
                  </div>
               </div>
            </li>
            <li class="item-type-glass">
               <h2 class="d-md-none title-block">Ударопрочные / Антивандальные</h2>
               <a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/udaroprochnye/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-8.8e64276e.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="info-glassproduct">
                  <h2 class="d-none d-md-block title-block">Ударопрочные / Антивандальные</h2>
                  <p>Противоударный стеклопакет имеет многослойную структуру: три закаленных и отшлифованных стекла, зафиксированных между собой полимерной пленкой. В процессе нагревания пленка расплавляется, плотно соединяя стеклянные части. Дополнительно в конструкции присутствует токопроводящий слой для защиты зимой от обледенения.</p>
                  <div class="bottom">
                     <div class="price"><span class="text">Цена от</span> <span>980</span> <span class="text">грн / м<sup>2</sup></span></div>
                     <div class="block-buttton"><a href="<?=get_bloginfo('home')?>/komplektuyushchie/steklopakety/udaroprochnye/" class="btn btn-custom-project btn-more-details">Подробнее</a> <button class="btn btn-custom-project btn-call-me-page-glass"><span class="icon icon-phone-table"></span><span>Перезвоните Мне</span></button></div>
                  </div>
               </div>
            </li>
            <li class="item-type-glass">
               <h2 class="d-md-none title-block">Стеклопакеты с Подогревом</h2>
               <a href="<?=get_bloginfo('home')?>/steklopakety/s-podogrevom/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/item-type-glass-4.52ed71df.png" class="img-fluid" alt="photo-product1"></a>
               <div class="info-glassproduct">
                  <h2 class="d-none d-md-block title-block">Стеклопакеты с Подогревом</h2>
                  <p>Стекло представляет собой тонкий низкоэмиссионный твердый материал, обладающий светопропускной способностью и энергосбережением. Для подключения покрытия к электросети в краевой зоне наносятся токоподводящие элементы. Среднее энергопотребление окна равняется потреблению лампочки мощностью 60 Вт.</p>
                  <div class="bottom">
                     <div class="price"><span class="text">Цена от</span> <span>2999</span> <span class="text">грн / м<sup>2</sup></span></div>
                     <div class="block-buttton"><a href="<?=get_bloginfo('home')?>/steklopakety/s-podogrevom/" class="btn btn-custom-project btn-more-details">Подробнее</a> <button class="btn btn-custom-project btn-call-me-page-glass"><span class="icon icon-phone-table"></span><span>Перезвоните Мне</span></button></div>
                  </div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-preference">
      <div class="container">
         <h2 class="title-section title-section-preference">Наши Преимущества</h2>
         <ul class="list-preference balcone">
            <li>
               <div class="block">
                  <i class="icon icon-block icon-factory"></i> <span class="title">Мы производитель</span>
                  <p>Собственное производство с новым современным оборудованием</p>
               </div>
            </li>
            <li>
               <div class="block">
                  <i class="icon icon-block icon-team"></i> <span class="title">Профессионализм</span>
                  <p>В нашей команде работают опытные специалисты высшего разряда</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-like"></i> <span class="title">Качество</span>
                  <p class="px-2">По нашей статистике лишь 2 стеклопакета из 100 имеют производственные дефекты</p>
               </div>
            </li>
            <li class="li-preference-small">
               <div class="block">
                  <i class="icon icon-block icon-shield"></i> <span class="title">Гарантия</span>
                  <p>Мы уверены в качестве наших стеклопакетов и поэтому даем гарантию до 10 лет</p>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-other-glass">
      <div class="container">
         <h2 class="title-section">Дополнительные Опции для Стеклопакетов</h2>
         <ul class="nav nav-pills nav-justified" id="pills-other-glass" role="tablist">
            <li class="nav-item active" role="presentation"><a class="nav-link active" id="pills-argon-tab" data-toggle="pill" href="#pills-argon" role="tab" aria-controls="pills-argon" aria-selected="true" data-parent="#pills-other-glass"><span>Аргон</span> <i class="fa fa-chevron-down"></i></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="pills-color-distance-tab" data-toggle="pill" href="#pills-color-distance" role="tab" aria-controls="pills-color-distance" aria-selected="false" data-parent="#pills-other-glass"><span>Осушенный воздух </span> <i class="fa fa-chevron-down"></i></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="pills-kreon-tab" data-toggle="pill" href="#pills-kreon" role="tab" aria-controls="pills-kreon" aria-selected="false" data-parent="#pills-other-glass"><span>Криптон</span> <i class="fa fa-chevron-down"></i></a></li>
         </ul>
         <div class="tab-content" id="pills-other-glassContent">
            <div class="tab-pane fade show active" id="pills-argon" role="tabpanel" aria-labelledby="pills-argon-tab">
               <div class="block-other-glass">
                  <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/argon.0db0ad99.jpg" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-block-other-glass">
                     <h2 class="d-none d-md-block title-block">Аргон</h2>
                     <p>Аргон – заполнение внутренних воздушных камер аргоном обеспечивает уменьшение потерь тепла за счет того, что межстекольные внутренние пространства, заполненные осушенным воздухом, наполняются инертным газом. Сборка качественных стеклопакетов с аргоновым наполнением осуществляется под специальным контролем, при котором тщательно анализируется внутреннее давление.</p>
                     <div class="d-flex justify-content-center align-items-baseline">
                        <div class="price"><span class="text"><span class="d-none d-lg-inline-block pr-1">Цена </span>от</span> <span>40</span> <span class="text">грн / 1 камера</span></div>
                        <a href="#" class="btn btn-custom-project btn-more-details">Подробнее</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-color-distance" role="tabpanel" aria-labelledby="pills-color-distance-tab">
               <div class="block-other-glass">
                  <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/colors-other-glass.f78b7064.jpg" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-block-other-glass">
                     <h2 class="d-none d-md-block title-block">Осушенный воздух</h2>
                     <p>Осушенный воздух – вакуумный стеклопакет состоит из двух стекол толщиной 3-4 мм, которые по периметру изолируются газонепроницаемым герметиком. Одно из стекол имеет специальное низкоэмиссионное покрытие. Общее расстояние между стеклопакетами составляет не более 0,7 мм. Поэтому такой стеклопакет является значительно тонким, чем стеклопакет с обычной толщиной. </p>
                     <div class="d-flex justify-content-center align-items-baseline">
                        <div class="price"><span class="text"><span class="d-none d-lg-inline-block pr-1">Цена </span>от</span> <span>20</span> <span class="text">грн / 1 камера</span></div>
                        <a href="#" class="btn btn-custom-project btn-more-details">Подробнее</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-kreon" role="tabpanel" aria-labelledby="pills-kreon-tab">
               <div class="block-other-glass">
                  <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/kreon.5776c1b8.jpg" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-block-other-glass">
                     <h2 class="d-none d-md-block title-block">Криптон</h2>
                     <p>Криптон – заполнение внутренних воздушных камер стеклопакета криптоном характеризуется высоким уровнем энергосбережения и звукоизоляции. Благодаря таким качествам благородного газа криптона могут создаваться тонкие по ширине стеклопакеты, которые будут обладать аналогичными характеристиками двух- и трехкамерных стеклопакетов. </p>
                     <div class="d-flex justify-content-center align-items-baseline">
                        <div class="price"><span class="text"><span class="d-none d-lg-inline-block pr-1">Цена </span>от</span> <span>80</span> <span class="text">грн / 1 камера</span></div>
                        <a href="#" class="btn btn-custom-project btn-more-details">Подробнее</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="block-form-inline">
      <div class="container">
         <form class="call-back-form">
					<div class="form-group"><label><input class="form-control" name="your-name" placeholder="Ваше имя*"></label></div>
					<div class="form-group"><label><input class="form-control" name="tel-460" placeholder="Телефон*"></label></div>
					<div class="form-group"><label><input type="email" class="form-control" name="your-message" placeholder="E-mail"></label></div>
					<button type="submit" class="btn btn-success">Перезвоните Мне</button>
				</form>
      </div>
   </div>
   <section class="section-banner">
      <div class="text-banner">
         <h5 class="title">Разбился или запотевает стеклопакет?</h5>
         <span class="title-2">Проведем замену или ремонт</span> <span class="text">Изготовим и установим новый стеклопакет на окно любого типа и размера</span> <span class="phone">0 800 111 222</span> <a href="<?=get_bloginfo('home')?>/vyzov-zamershchika/" class="btn btn-custom-project btn-more-details">Подробнее</a>
      </div>
      <img src="<?php bloginfo('template_url') ?>/images/bg-img-page-glass.8c01f47e.jpg" class="img-fluid" alt="photo-product1">
   </section>
   <section class="section-soundproofing">
      <div class="container">
         <h2 class="title-section">Звукоизоляция</h2>
         <ul class="nav nav-pills nav-justified" id="pills-soundproofing" role="tablist">
            <li class="nav-item active" role="presentation"><a class="nav-link active" id="pills-edge-tab" data-toggle="pill" href="#pills-edge" role="tab" aria-controls="pills-edge" aria-selected="true" data-parent="#pills-soundproofing"><span>Окраина Города</span> <i class="fa fa-chevron-down"></i></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="pills-urban-tab" data-toggle="pill" href="#pills-urban" role="tab" aria-controls="pills-urban" aria-selected="false" data-parent="#pills-soundproofing"><span>Городская Дорога</span> <i class="fa fa-chevron-down"></i></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="pills-highway-tab" data-toggle="pill" href="#pills-highway" role="tab" aria-controls="pills-highway" aria-selected="false" data-parent="#pills-soundproofing"><span>Шоссейная Дорога</span> <i class="fa fa-chevron-down"></i></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="pills-motorway-tab" data-toggle="pill" href="#pills-motorway" role="tab" aria-controls="pills-motorway" aria-selected="false" data-parent="#pills-soundproofing"><span>Автомагистраль</span> <i class="fa fa-chevron-down"></i></a></li>
         </ul>
         <div class="tab-content" id="pills-soundproofingContent">
            <div class="tab-pane fade show active" id="pills-edge" role="tabpanel" aria-labelledby="pills-edge-tab">
               <div class="block-item-soundproofing">
                  <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-soundproofing.bf7bfe00.jpg" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-soundproofing">
                     <h2 class="d-none d-lg-block title-block">Окраина Города</h2>
                     <p>Однокамерные стеклопакеты используются при остеклении дачных домиков с сезонным проживанием. Стеклопакет с одной воздушной камерой обеспечивает оптимальную степень тепло- и шумоизоляции домов и квартир на окраине города. </p>
                     <button class="btn btn-custom-project btn-more-details">Подробнее</button>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-urban" role="tabpanel" aria-labelledby="pills-urban-tab">
               <div class="block-item-soundproofing">
                  <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-soundproofing.bf7bfe00.jpg" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-soundproofing">
                     <h2 class="d-none d-lg-block title-block">Городская Дорога</h2>
                     <p>Двухкамерные стеклопакеты отлично подходят для остекления балконов, лоджий, квартир, частных домов и офисов, расположенных на окраине города. Двухкамерное остекление обеспечивает надежный уровень защиты энергосбережения и звукоизоляции. </p>
                     <button class="btn btn-custom-project btn-more-details">Подробнее</button>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-highway" role="tabpanel" aria-labelledby="pills-highway-tab">
               <div class="block-item-soundproofing">
                  <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-soundproofing.bf7bfe00.jpg" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-soundproofing">
                     <h2 class="d-none d-lg-block title-block">Шоссейная Дорога</h2>
                     <p>Для домов и квартир, расположенных рядом с шоссейной дорогой, идеальны для установки оконные конструкции из пятипрофильной системы с тройными стеклопакетами. Такие изделия надежно защищают помещение от непогоды, уличного шума и атмосферных осадков. </p>
                     <button class="btn btn-custom-project btn-more-details">Подробнее</button>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-motorway" role="tabpanel" aria-labelledby="pills-motorway-tab">
               <div class="block-item-soundproofing">
                  <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-soundproofing.bf7bfe00.jpg" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-soundproofing">
                     <h2 class="d-none d-lg-block title-block">Автомагистраль</h2>
                     <p>Трехкамерные стеклопакеты идеально подходят для установки в офисах, квартирах и частных домах, которые расположены вблизи оживленной автомагистрали. Металлопластиковые окна с таким видом остекления тяжелые по весу, поэтому подходят для установки в толстых стенах с хорошей несущей способностью. </p>
                     <button class="btn btn-custom-project btn-more-details">Подробнее</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
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
   <section class="section-post section-post-windows section-other-type-windows  post-border-none">
      <div class="container">
         <h2 class="title-section">Купить стеклопакет в Киеве</h2>
         <div class="text-custom-page">
             <p>Каждый тип остекления имеет преимущества и недостатки. Ниже в тексте рассмотрим, какие стеклопакеты лучше.</p>
             <p>2.1. Однокамерный.</p>
             <p>
                 Однокамерные модели отличаются небольшим весом, что не нагружает створки, раму и фурнитуру евроокна. За счет простоты конструкции и малого количества используемых материалов отличается низкой стоимостью.
             </p>
             <p>
                 Недостатком применения является низкий уровень звуковой и тепловой защиты. Нецелесообразна установка в регионах со средней зимней температурой меньше -5 градусов.
             </p>
             <p>2.2. Двухкамерный.</p>
             <p>
                 Такие модели являются экономичным вариантом. Оконная конструкция характеризуется высокими показателями шумоизоляции и энергосбережения. Отличается прочностью, пожаробезопасностью и взломостойкостью.
             </p>
             <p>
                 Недостатком двухкамерной модели является значительный вес, что способствует преждевременному износу фурнитуры. Большая ширина рамной конструкции не позволяет использовать двухкамерный тип в качестве остекления балкона, лоджий.
             </p>
             <p>2.3.Трехкамерный.</p>
             <p>Из достоинств трехкамерной светопрозрачной конструкции отмечаются увеличенные термоизоляционные и шумозащитные характеристики, низкую вероятность появления конденсата.</p>
             <p>Недостатком является отсутствие технологий для изготовления стеклопакетов крупных размеров.
                 Стекла, покрытые энергосберегающей пленкой, поглощают солнечный свет, что затемняет помещение.</p>
             <p>Не рекомендуется монтировать трехкамерные стеклянные вставки в старых деревянных домах, использовать для остекления лоджий и балконов.</p>
             <h2 class="title-post">Особенности</h2>
             <p>Конструкция стеклопакета классифицируется по количеству воздушных камер:</p>
             <ol>
                 <li>Однокамерная (состоит из одной камеры и двух стекол).</li>
                 <li>Двухкамерная (имеет три стекла и две камеры). Толщина конструкции – 30-40 мм.
                     Для усиления звукоизоляции внешнее стекло может утолщаться.</li>
                 <li> Трехкамерная (включает в себя три камеры и четыре стекла).</li>
             </ol>
             <p>Мы предлагаем изготовление стеклопакетов по размерам разных категорий с учетом особенностей помещения и климата местности.</p>
             <h2 class="title-post">Кому подойдут</h2>
             <p>
                 Однокамерные модели – недорогие стеклопакеты для остекления лоджий, балконов, дач, террасы, веранды, производственных объектов и хозпостроек.
             </p>
             <p>
                 Двухкамерный тип светопрозрачной конструкции идеально подходит для монтажа в регионах с холодными зимами с температурой -25 градусов и ниже. Также устанавливаются в домах вблизи шумных улиц.
             </p>
             <p>Трехкамерные модели применяются в холодных климатических условиях, при остеклении с необходимостью шумоизоляции.</p>
             <h2 class="title-post">Как выбрать профиль</h2>
             <p>Пластиковые стеклопакеты занимают до 90% площади оконной конструкции, поэтому к ним предъявляются серьезные требования по качеству.</p>
             <p>При выборе профиля для стеклопакета ПВХ учитываются критерии:</p>
             <ol>
                 <li>Ширина профиля зависит от эксплуатации окна. 58 мм – распространенная ширина, применяемая в домах и квартирах.
                     Профиль 70 мм используется в зданиях, расположенных в холодных регионах.
                     Профиль 90 мм относится к продукции премиум-класса, отличается улучшенным сохранением тепла и защитой от звука.</li>
                 <li>Чем больше воздушных камер, тем теплее евроокно.</li>
                 <li>Оконные конструкции, заполненные воздухом, лучше пропускают тепло.</li>
                 <li>От толщины стекла зависит теплоизоляция. Стандартным показателем является 4 мм.</li>
                 <li>Фирменный профиль имеет однородную структуру и окраску.
                     Подлинность материала подтверждается заводской маркировкой, отметкой о номере серии и партии.</li>
             </ol>
             <p>Функциональность стеклопакета на заказ в Киеве зависит не только от профиля, но и от качества фурнитуры и грамотной сборки.</p>
             <h2 class="title-post"> Уход</h2>
             <p>
                 За стеклопакетами легко ухаживать. Рамы и створки протираются мягкой тканью или салфеткой, используя обычное моющее средство. Главное правило при уходе – не применять абразивные чистящие средства, щелочные и кислотные растворители. Агрессивные очистители царапают пластиковую поверхность.
             </p>
             <h2 class="title-post"> Стоимость</h2>
             <p>
                 Цена изготовления стеклопакетов на заказ в Киеве зависит от количества воздушных камер и их заполнения, вида стекла, декоративных элементов. Узнать стоимость квадратного метра стеклопакета в Украине можно на сайте или, позвонив по телефону.
             </p>
         </div>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();

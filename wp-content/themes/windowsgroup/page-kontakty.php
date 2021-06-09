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

<div class="main page-contact">
   <div class="container">
      <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
   </div>
   <section class="section-prev-contact">
      <div class="container">
         <div class="block-info-contact">
            <div class="block-address-prev">
               <h2 class="title-block">Центральный Офис</h2>
               <ul class="list-contact">
                  <li><span class="icon-location"></span>г. Киев ул. Коллекторная д. 3</li>
                  <li class="li-block">
                     <span class="icon-call"></span>
                     <ul>
                        <li><a href="tel:0800339421" class="binct-phone-number-1">0 800 33 94 21</a></li>
                     </ul>
                  </li>
                  <li class="li-block">
                     <span class="clock"></span>
                     <ul>
                        <li>Пн-Пт: 08:00-18:00</li>
                        <li>Сб,Вс: выходной</li>
                     </ul>
                  </li>
                  <li><span class="icon-email"></span><a href="mailto:info@windowsgroup.com.ua">info@windowsgroup.com.ua</a></li>
                  <li>
                     <ul class="soc-icon">
                        <li><i class="icon icon-viber"></i></li>
                        <li><i class="icon icon-skype"></i></li>
                        <li><i class="icon icon-telegram"></i></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <section class="section-contact">
      <div class="container">
         <div class="block-info-contact">
            <h1 class="title-section">Наши Адреса и Телефоны</h1>
            <ul class="blocks-address">
               <li>
                  <h2 class="title-block icon icon-sales">Отдел продаж</h2>
                  <div class="block">
                     <div class="line"><a href="tel:0800339421" class="binct-phone-number-1">0 800 33 94 21</a></div>
                     <!--<div class="line"><span class="icon icon-call"></span><a href="tel:+380636865678">(063) 686-56-78</a></div>-->
                     <div class="li-block">
                        <span class="icon clock"></span>
                        <ul>
                           <li>Пн-Пт: 08:00-18:00</li>
                           <li>Сб,Вс: выходной</li>
                        </ul>
                     </div>
                     <div class="line"><span class="icon icon-email"></span><a href="mailto:sales@windowsgroup.com.ua">sales@windowsgroup.com.ua</a></div>
                     <div class="line"><span class="icon icon-small-viber"></span><a href="viber://chat?number=%2B380678180050"><span>(067) 818-00-50</span></a></div>
                     <div class="line"><span class="icon icon-small-telegram"></span><a href="tg://resolve?domain=380678180050"><span>(067) 818-00-50</span></a></div>
                     <div class="line"><span class="icon icon-small-skype"></span><a href="tel:+380678180050"><span>(067) 818-00-50</span></a></div>
                  </div>
               </li>
               <li>
                  <h2 class="title-block icon icon-service-contact">Отдел сервиса</h2>
                  <div class="block">
                     <div class="line"><a href="tel:0800339421" class="binct-phone-number-1">0 800 33 94 21</a></div>
                     <div class="li-block">
                        <span class="icon clock"></span>
                        <ul>
                           <li>Пн-Пт: 08:00-18:00</li>
                           <li>Сб,Вс: выходной</li>
                        </ul>
                     </div>
                     <div class="line"><span class="icon icon-email"></span><a href="mailto:info@windowsgroup.com.ua">info@windowsgroup.com.ua</a></div> 
                  </div>
               </li>
               <li>
                  <h2 class="title-block icon icon-repairs">Отдел ремонта и гарантийного обслуживания</h2>
                  <div class="block">
                     <div class="line"><a href="tel:0800339421" class="binct-phone-number-1">0 800 33 94 21</a></div>
                     <div class="li-block">
                        <span class="icon clock"></span>
                        <ul>
                           <li>Пн-Пт: 08:00-18:00</li>
                           <li>Сб,Вс: выходной</li>
                        </ul>
                     </div>
                     <div class="line"><span class="icon icon-email"></span><a href="mailto:info@windowsgroup.com.ua">info@windowsgroup.com.ua</a></div>
                  </div>
               </li>
            </ul>
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. lrem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>-->
         </div>
      </div>
      <a id="button"></a>
   </section>
   <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.2804651228275!2d30.676751915295327!3d50.39861049898061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c48a5c056a73%3A0xb64b193bcdc9f28!2z0YPQuy4g0JrQvtC70LvQtdC60YLQvtGA0L3QsNGPLCAzLCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1600181866746!5m2!1sru!2sua"  style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
</div>

<?php
get_footer();

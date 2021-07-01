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

<div class="main unlinking-profil">
   <div class="container">
      <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
   </div>
   <section class="section-unlinking">
      <div class="container">
         <h1 class="title-section">Все Окна</h1>
         <ul class="list-link-unlinking windows">
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/plastikovye-okna.8caa82bf.webp" class="py-2 py-lg-3 img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="title-name">Окна</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/na-balkon/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/balcony-key.763c73ab.webp" class="img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/na-balkon/" class="title-name">На балкон</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/v-dom/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/all-windows-link.2cfd4d14.webp" class="img-custom-window img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/v-dom/" class="title-name">В дом</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/na-dachu/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/city-house.caea410e.png" class="img-custom-window img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/na-dachu/" class="title-name">На дачу</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/v-vannuyu-komnatu/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/all-bathroom.c2055299.jpg" class="img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/v-vannuyu-komnatu/" class="title-name">В ванную</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/panoramnye/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/all-panoram.d6728133.jpg" class="img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/panoramnye/" class="title-name">Панорамные</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/razdvizhnye/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/door-roll.48c6a39d.jpg" class="img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/razdvizhnye/" class="title-name">Раздвижные</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/francuzkie/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/france-balcony.4e51d59c.jpg" class="img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/francuzkie/" class="title-name">Французские</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/energosberegayushchie/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/energosberegayushchie-okna.a738415d.jpg" class="img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/energosberegayushchie/" class="title-name">Энергосберегающие</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/laminirovannye/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/lamin-all.1a0e8f71.jpg" class="img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/laminirovannye/" class="title-name">Ламинированные</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/sluhovye/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/sluhovoe_okno.6f334b6a.png" class="img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/sluhovye/" class="title-name">Слуховые</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/erkernye/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/ecern-windows.d7b8ef07.png" class="img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/erkernye/" class="title-name">Эркерные</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/uglovye/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/corner.57cef3fc.jpg" class="img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/uglovye/" class="title-name">Угловые</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/kruglye/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/cycle.a7c36460.webp" class="img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/kruglye/" class="title-name">Круглые</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/ovalnye/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/ovaL.2c81c7c7.png" class="py-2 py-lg-4 img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/ovalnye/" class="title-name">Овальные</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/shestiugolnye/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/hexagon.4ecd1e7b.webp" class="py-2 py-lg-4 img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/shestiugolnye/" class="title-name">Шестиугольные</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/triugolnye/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/triangle.8b15217a.png" class="py-2 py-lg-4 img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/triugolnye/" class="title-name">Треугольные</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/arochnyye/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/plastikovyye-arochnyye-okna.png" class="py-2 py-lg-4 img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/arochnyye/" class="title-name">Арочные</a></div>
            </li>
            <li class="item">
               <div class="block-item-unlinking"><a href="<?=get_bloginfo('home')?>/plastikovye-okna/na-kuhnyu/" class="img-block"><img src="<?php bloginfo('template_url') ?>/images/plastikovyye-okna-na-kukhnyu.jpg" class="py-2 py-lg-4 img-fluid" alt="photo"></a><a href="<?=get_bloginfo('home')?>/plastikovye-okna/na-kuhnyu/" class="title-name">На кухню</a></div>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-post bg-post-unlinking">
      <div class="container">
         <h2 class="title-section">Купить пластиковые окна в Киеве по лучшей цене</h2>
         <div class="text-custom-page">
             <p>Компания «Виндовс Груп» предлагает купить пластиковые окна в Киеве и области по лучшим ценам. Мы изготавливаем оконные конструкции на современном оборудовании с использованием высококачественных комплектующих.</p>
             <span class="title-post">Преимущества пластиковых окон</span>
             <p>Окна из ПВХ-профиля характеризуются следующими преимуществами:</p>
             <ul>
                 <li>· пожаробезопасность;</li>
                 <li>· влагоустойчивость;</li>
                 <li>· надежность и прочность;</li>
                 <li>· возможность регулировки фурнитуры;</li>
                 <li>· простота ухода;</li>
                 <li>· долговечность эксплуатации;</li>
                 <li>· высокие тепло- и звукоизоляционные характеристики.</li>
             </ul>
            <p>Монтаж пластиковых оконных конструкций отличается удобством.
                Окна могут устанавливаться в заранее подготовленный проем как в сборе
                так и со снятыми стеклопакетами и створками.</p>
             <span class="title-post">Почему стоит сделать заказ у нас?</span>
            <p>Наша компания предлагает клиентам преимущества:</p>
             <ul>
                 <li>· Мы готовы принять заказ на изготовление пластиковых окон по телефону или в режиме онлайн.</li>
                 <li>· Менеджер-консультант готов проконсультировать вас по заказу, подобрать модель и конструкцию
                     будущей оконной конструкции.</li>
                 <li>· Все материалы и фурнитура для окон подбирается с учетом предпочтений клиента.</li>
                 <li>· Наша продукция прошла специальную процедуру сертификации.</li>
                 <li>· Мы готовы реализовать ваши даже самые смелые дизайнерские решения.</li>
             </ul>
            <p>Наши специалисты гарантируют грамотный и качественный монтаж оконных конструкций по ГОСТу с последующим предоставлением гарантии.</p>
             <span class="title-post">Заказать окна ПВХ в Киеве</span>
             <p>На сайте в каталоге представлены модели готовых металлопластиковых окон в различных цветовых и стилевых вариантах:</p>
             <ul>
                 <li>·на балкон;</li>
                 <li>·в дом;</li>
                 <li>·на дачу;</li>
                 <li>·в ванную;</li>
                 <li>·панорамные;</li>
                 <li>·раздвижные;</li>
                 <li>·французские;</li>
                 <li>·энергосберегающие;</li>
                 <li>·ламинированные;</li>
                 <li>·слуховые;</li>
                 <li>·эркерные;</li>
                 <li>·угловые;</li>
                 <li>·круглые;</li>
                 <li>·овальные;</li>
                 <li>·шестиугольные;</li>
                 <li>·треугольные.</li>
             </ul>
             <p>Наши специалисты готовы оперативно выехать на объект по предварительной заявке и осуществить замеры для изготовления евроокна.</p>
             <span class="title-post">Цена на окна из ПВХ-профиля</span>
             <p>Окончательная цена на пластиковые оконные конструкции зависит от нескольких критериев:</p>
             <ul>
                 <li>·типа используемого материала и фурнитуры;</li>
                 <li>·вида окна;</li>
                 <li>·разновидности остекления;</li>
                 <li>·цвета и способа декора;</li>
                 <li>·ламинации;</li>
                 <li>·услуг доставки и установки.</li>
             </ul>
             <p> Узнать примерную стоимость ПВХ окон в Киеве можно, позвонив по телефону, указанному на сайте компании «Windows Group».</p>
         </div>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();

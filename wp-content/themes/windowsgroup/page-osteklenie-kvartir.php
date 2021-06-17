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
            $result_params = $wpdb->get_results("SELECT * FROM `{$wpdb -> prefix}window_prices` WHERE `page_name` = 'osteklenie_balkonov_i_lodzhij' ");
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

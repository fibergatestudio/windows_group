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

<div class="main page-call-services">
   <div class="container">
      <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
   </div>
   <section class="section-form-page-windowsill">
      <div class="container">
         <h1 class="title-section">Бесплатный Вызов Замерщика</h1>
         <form class="form-call-services free-measurement-form">
            <ul class="form-call-services-wrapper">
               <li>
                  <div class="form-group"><label for="form-call-services-1"></label> <input id="form-call-services-1" class="form-control" name="your-name" placeholder="Ваше Имя*"></div>
                  <div class="form-group"><label for="form-call-services-2"></label> <input id="form-call-services-2" class="form-control" name="tel-460" placeholder="Телефон*"></div>
               </li>
               <li>
                  <h5 class="elem-w100">Ваши координаты:</h5>
                  <div class="form-group"><label for="form-call-services-3"></label> <input name="city" id="form-call-services-3" class="form-control" placeholder="Город"></div>
                  <div class="form-group"><label for="form-call-services-4"></label> <input name="street" id="form-call-services-4" class="form-control" placeholder="Улица"></div>
                  <div class="form-group"><label for="form-call-services-5"></label> <input name="house" id="form-call-services-5" class="form-control" placeholder="Дом"></div>
                  <div class="form-group"><label for="form-call-services-6"></label> <input name="room" id="form-call-services-6" class="form-control" placeholder="Квартира"></div>
               </li>
               <li>
                  <h5 class="elem-w100">Укажите удобное для вас время и дату замера:</h5>
                  <div class="form-group position-relative"><input name="date" id="form-call-services-7" class="form-control date" placeholder="Дата"> <label for="form-call-services-7"></label></div>
                  <div class="form-group"><label for="form-call-services-8"></label> <input name="time" id="form-call-services-8" type="time" class="form-control time"></div>
               </li>
               <li>
                  <div class="form-group elem-w100"><label></label> <textarea name="your-message" class="form-control" rows="2" placeholder="Комментарий"></textarea></div>
                  <div class="form-group elem-w100"><button type="submit" class="btn btn-custom-project big-form">Вызвать Замерщика</button></div>
               </li>
            </ul>
         </form>
      </div>
   </section>
    <section class="section-post">
        <div class="container">
            <h2 class="title-section"> Вызов замерщика окна в Киеве</h2>
            <p>
                Вы приняли решение заменить оконные конструкции? Процедура замены евроокон требует специальной подготовки и оборудования. Самое время сделать вызов замерщика окна в Киеве и Киевской области. Компания «Виндовс Груп» гарантирует индивидуальный профессиональный подход к каждому клиенту.
            </p>
            <h2 class="title-post">Описание услуги</h2>
            <p>
                Конечно, можно определить параметры проема самостоятельно. Однако в таком случае возможны ошибки и заказ конструкций с неподходящими габаритами. Главным залогом надежного и долговечного изделия является правильно осуществленные замеры, с учетом подбора подходящего функционала.
            </p>
            <p>
                Наши специалисты не только грамотно произведут замеры, но и порекомендуют оптимальный для вас вариант, с учетом архитектурных особенности здания и помещений, включая неравномерную толщину стен и нестандартную форму проема.
            </p>
            <h2 class="title-post">Стоимость и как заказать</h2>
            <p>Чтобы заказать замерщика на дом, необходимо осуществить несколько действий:</p>
            <ol>
                <li>Сделать заявку по телефону или в режиме онлайн.</li>
                <li>Дождаться обратного звонка от менеджера-консультанта.</li>
                <li>Обсудить детали по заказу.</li>
                <li>На объекте специалист обмеряет оконный проем, и составит эскиз будущей
                    конструкции с расчетом примерной стоимости.</li>
            </ol>
            <p>Цена готового окна зависит от нескольких факторов:</p>
            <ul>
                <li>·         типа профильной системы;</li>
                <li>·         формы и модели конструкции;</li>
                <li>·         вида стеклопакета и установленного стекла;</li>
                <li>·         фурнитуры;</li>
                <li>·         цвета и декора;</li>
                <li>·         количества уплотнительных контуров;</li>
                <li>·  наличия дополнительных элементов (подоконников, отливов, откосов, москитных сеток);</li>
                <li>·         особенностей монтажа.</li>
            </ul>
            <p>
                Наша компания «Windows Group» предлагает заказать вызов замерщика окон для последующего изготовления окна по лучшим ценам в Украине. Узнать расценки на товары и услуги можно на сайте или, позвонив по указанному телефону.
            </p>
        </div>
    </section>
   <a id="button"></a>
</div>

<?php
get_footer();
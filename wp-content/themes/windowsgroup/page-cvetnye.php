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

<div class="main page-mosquito type-mosquito">
   <section class="section-top-post">
      <div class="container">
         <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
         <div class="top-post-page">
            <h1 class="title-post">Москитные Сетки под Цвет Окна</h1>
            <p class="text-custom-page">Антимоскитное полотно – отличный способ защитить помещение от насекомых, пыли и песка. Наша компания «Виндовс Груп» предлагает купить цветную москитную сетку в Киеве и Киевской области с гарантией качества, по лучшим ценам от производителя.</p>
         </div>
         <div class="section-type-mosquito">
            <div class="list">
               <div>
                  <h2 class="title-block">Сетка под Цвет Окна</h2>
                  <div class="block-type-mosquito">
                     <div class="img-block d-flex">
                        <div class="img-mosquito"><img src="<?php bloginfo('template_url') ?>/images/mosquito-grid.ec54c1f2.webp" class="img-fluid" alt="product"></div>
                        <div class="block-info">
                           <div>
                              <h5>Характеристики</h5>
                              <dl>
                                 <dt>Min. высота:</dt>
                                 <dd>100</dd>
                              </dl>
                              <dl>
                                 <dt>Min. ширина:</dt>
                                 <dd>100</dd>
                              </dl>
                              <dl>
                                 <dt>Max. высота:</dt>
                                 <dd>3000</dd>
                              </dl>
                              <dl>
                                 <dt>Max. ширина:</dt>
                                 <dd>3000</dd>
                              </dl>
                           </div>
                           <span>Цена: <span class="price">220 </span>грн. / м<sup>2</sup></span>
                        </div>
                     </div>
                     <div class="text">
                        <p>Москитные сетки выполняют не только защитную функцию, но и служат декоративным дополнением окна.
                            Существуют не только традиционные белые или синие сетки, но и изделия в разном цветовом исполнении.</p>
                        <button class="btn btn-custom-project"><span class="icon icon-phone-table"></span> Перезвоните мне</button>
                     </div>
                  </div>
                  <div class="section-color-selection">
                     <div class="block-color-selection">
                        <ul id="color-list">
                           <li><input id="checkbox-yellow" class="checkbox-color" name="checkbox-selection" type="radio" data-target=".yellow-colors.list-colors" checked="checked"> <label for="checkbox-yellow" class="checkbox-color-label color-bg-yellow"></label></li>
                           <li><input id="checkbox-orange" class="checkbox-color" name="checkbox-selection" type="radio" data-target=".orange-colors.list-colors"> <label for="checkbox-orange" class="checkbox-color-label color-bg-orange"></label></li>
                           <li><input id="checkbox-red" class="checkbox-color" name="checkbox-selection" type="radio" data-target=".red-colors.list-colors"> <label for="checkbox-red" class="checkbox-color-label color-bg-red"></label></li>
                           <li><input id="checkbox-purple" class="checkbox-color" name="checkbox-selection" type="radio" data-target=".purple-colors.list-colors"> <label for="checkbox-purple" class="checkbox-color-label color-bg-purple"></label></li>
                           <li><input id="checkbox-blue" class="checkbox-color" name="checkbox-selection" type="radio" data-target=".blue-colors.list-colors"> <label for="checkbox-blue" class="checkbox-color-label color-bg-blue"></label></li>
                           <li><input id="checkbox-green" class="checkbox-color" name="checkbox-selection" type="radio" data-target=".green-colors.list-colors"> <label for="checkbox-green" class="checkbox-color-label color-bg-green"></label></li>
                           <li><input id="checkbox-gray" class="checkbox-color" name="checkbox-selection" type="radio" data-target=".gray-colors.list-colors"> <label for="checkbox-gray" class="checkbox-color-label color-bg-gray"></label></li>
                           <li><input id="checkbox-brown" class="checkbox-color" name="checkbox-selection" type="radio" data-target=".brown-colors.list-colors"> <label for="checkbox-brown" class="checkbox-color-label color-bg-brown"></label></li>
                           <li><input id="checkbox-black" class="checkbox-color" name="checkbox-selection" type="radio" data-target=".black-colors.list-colors"> <label for="checkbox-black" class="checkbox-color-label color-bg-black"></label></li>
                        </ul>
                        <div class="block-colors">
                           <div class="block-yellow-colors">
                              <h5 class="title-block">Желтые тона</h5>
                              <ul class="yellow-colors list-colors">
                                 <li class="block-color color-RAL-1000"><span class="title-color">RAL-1000 <span class="title-name">Зелено-бежевый</span></span></li>
                                 <li class="block-color color-RAL-1001"><span class="title-color">RAL-1001 <span class="title-name">Бежевый</span></span></li>
                                 <li class="block-color color-RAL-1002"><span class="title-color">RAL-1002 <span class="title-name">Песочно-бежевый</span></span></li>
                                 <li class="block-color color-RAL-1003"><span class="title-color">RAL-1003 <span class="title-name">Сигнальный желтый</span></span></li>
                                 <li class="block-color color-RAL-1004"><span class="title-color">RAL-1004 <span class="title-name">Желто-золотой</span></span></li>
                                 <li class="block-color color-RAL-1005"><span class="title-color">RAL-1005 <span class="title-name">Медово-желтый</span></span></li>
                                 <li class="block-color color-RAL-1006"><span class="title-color">RAL-1006 <span class="title-name">Кукурузно-жёлтый</span></span></li>
                                 <li class="block-color color-RAL-1007"><span class="title-color">RAL-1007 <span class="title-name">Нарциссово-жёлтый</span></span></li>
                                 <li class="block-color color-RAL-1011"><span class="title-color">RAL-1011 <span class="title-name">Коричнево-бежевый</span></span></li>
                                 <li class="block-color color-RAL-1012"><span class="title-color">RAL-1012 <span class="title-name">Лимонно-жёлтый</span></span></li>
                                 <li class="block-color color-RAL-1013"><span class="title-color">RAL-1013 <span class="title-name">Жемчужно-белый</span></span></li>
                                 <li class="block-color color-RAL-1014"><span class="title-color">RAL-1014 <span class="title-name">Слоновая кость</span></span></li>
                                 <li class="block-color color-RAL-1015"><span class="title-color">RAL-1015 <span class="title-name">Светлая слоновая кость</span></span></li>
                                 <li class="block-color color-RAL-1016"><span class="title-color">RAL-1016 <span class="title-name">Жёлтая сера</span></span></li>
                                 <li class="block-color color-RAL-1017"><span class="title-color">RAL-1017 <span class="title-name">Шафраново-жёлтый</span></span></li>
                                 <li class="block-color color-RAL-1018"><span class="title-color">RAL-1018 <span class="title-name">Цинково-жёлтый</span></span></li>
                                 <li class="block-color color-RAL-1019"><span class="title-color">RAL-1019 <span class="title-name">Серо-бежевый</span></span></li>
                                 <li class="block-color color-RAL-1020"><span class="title-color">RAL-1020 <span class="title-name">Оливково-жёлтый</span></span></li>
                                 <li class="block-color color-RAL-1021"><span class="title-color">RAL-1021 <span class="title-name">Рапсово-жёлтый</span></span></li>
                                 <li class="block-color color-RAL-1023"><span class="title-color">RAL-1023 <span class="title-name">Транспортно-жёлтый</span></span></li>
                                 <li class="block-color color-RAL-1024"><span class="title-color">RAL-1024 <span class="title-name">Охра жёлтая</span></span></li>
                                 <li class="block-color color-RAL-1027"><span class="title-color">RAL-1027 <span class="title-name">Карри жёлтый</span></span></li>
                                 <li class="block-color color-RAL-1028"><span class="title-color">RAL-1028 <span class="title-name">Дынно-жёлтый</span></span></li>
                                 <li class="block-color color-RAL-1032"><span class="title-color">RAL-1032 <span class="title-name">Жёлтый ракитник</span></span></li>
                                 <li class="block-color color-RAL-1033"><span class="title-color">RAL-1033 <span class="title-name">Георгиново-жёлтый</span></span></li>
                                 <li class="block-color color-RAL-1034"><span class="title-color">RAL-1034 <span class="title-name">Пастельно-жёлтый</span></span></li>
                                 <li class="block-color color-RAL-1035"><span class="title-color">RAL-1035 <span class="title-name">Перламутрово-бежевый</span></span></li>
                                 <li class="block-color color-RAL-1036"><span class="title-color">RAL-1036 <span class="title-name">Перламутрово-золотой</span></span></li>
                                 <li class="block-color color-RAL-1037"><span class="title-color">RAL-1037 <span class="title-name">Солнечно-жёлтый</span></span></li>
                              </ul>
                           </div>
                           <div class="block-orange-colors">
                              <h5 class="title-block">Оранжевые тона</h5>
                              <ul class="orange-colors list-colors">
                                 <li class="block-color color-RAL-2000"><span class="title-color">RAL-2000 <span class="title-name">Жёлто-оранжевый</span></span></li>
                                 <li class="block-color color-RAL-2001"><span class="title-color">RAL-2001 <span class="title-name">Красно-оранжевый</span></span></li>
                                 <li class="block-color color-RAL-2002"><span class="title-color">RAL-2002 <span class="title-name">Алый</span></span></li>
                                 <li class="block-color color-RAL-2003"><span class="title-color">RAL-2003 <span class="title-name">Пастельно-оранжевый</span></span></li>
                                 <li class="block-color color-RAL-2004"><span class="title-color">RAL-2004 <span class="title-name">Оранжевый</span></span></li>
                                 <li class="block-color color-RAL-2005"><span class="title-color">RAL-2005 <span class="title-name">Люминесцентный оранжевый</span></span></li>
                                 <li class="block-color color-RAL-2007"><span class="title-color">RAL-2007 <span class="title-name">Люминесцентный ярко-оранжевый</span></span></li>
                                 <li class="block-color color-RAL-2008"><span class="title-color">RAL-2008 <span class="title-name">Ярко-красно-оранжевый</span></span></li>
                                 <li class="block-color color-RAL-2009"><span class="title-color">RAL-2009 <span class="title-name">Транспортный оранжевый</span></span></li>
                                 <li class="block-color color-RAL-2010"><span class="title-color">RAL-2010 <span class="title-name">Сигнальный оранжевый</span></span></li>
                                 <li class="block-color color-RAL-2011"><span class="title-color">RAL-2011 <span class="title-name">Насыщенный оранжевый</span></span></li>
                                 <li class="block-color color-RAL-2012"><span class="title-color">RAL-2012 <span class="title-name">Лососёво-оранжевый</span></span></li>
                                 <li class="block-color color-RAL-2013"><span class="title-color">RAL-2013 <span class="title-name">Светлая слоновая кость</span></span></li>
                              </ul>
                           </div>
                           <div class="block-red-colors">
                              <h5 class="title-block">Красные тона</h5>
                              <ul class="red-colors list-colors">
                                 <li class="block-color color-RAL-3000"><span class="title-color">RAL-3000 <span class="title-name">Огненно-красный</span></span></li>
                                 <li class="block-color color-RAL-3001"><span class="title-color">RAL-3001 <span class="title-name">Сигнальный красный</span></span></li>
                                 <li class="block-color color-RAL-3002"><span class="title-color">RAL-3002 <span class="title-name">Карминно-красный</span></span></li>
                                 <li class="block-color color-RAL-3003"><span class="title-color">RAL-3003 <span class="title-name">Рубиново-красный</span></span></li>
                                 <li class="block-color color-RAL-3004"><span class="title-color">RAL-3004 <span class="title-name">Пурпурно-красный</span></span></li>
                                 <li class="block-color color-RAL-3005"><span class="title-color">RAL-3005 <span class="title-name">Винно-красный</span></span></li>
                                 <li class="block-color color-RAL-2007"><span class="title-color">RAL-2007 <span class="title-name">Чёрно-красный</span></span></li>
                                 <li class="block-color color-RAL-3009"><span class="title-color">RAL-3009 <span class="title-name">Оксид красный</span></span></li>
                                 <li class="block-color color-RAL-3011"><span class="title-color">RAL-3011 <span class="title-name">Коричнево-красный</span></span></li>
                                 <li class="block-color color-RAL-3012"><span class="title-color">RAL-3012 <span class="title-name">Бежево-красный</span></span></li>
                                 <li class="block-color color-RAL-3013"><span class="title-color">RAL-3013 <span class="title-name">Томатно-красный</span></span></li>
                                 <li class="block-color color-RAL-3014"><span class="title-color">RAL-3014 <span class="title-name">Розовый антик</span></span></li>
                                 <li class="block-color color-RAL-3015"><span class="title-color">RAL-3015 <span class="title-name">Светло-розовый</span></span></li>
                                 <li class="block-color color-RAL-3016"><span class="title-color">RAL-3016 <span class="title-name">Кораллово-красный</span></span></li>
                                 <li class="block-color color-RAL-3017"><span class="title-color">RAL-3017 <span class="title-name">Розовый</span></span></li>
                                 <li class="block-color color-RAL-3018"><span class="title-color">RAL-3018 <span class="title-name">Клубнично-красный</span></span></li>
                                 <li class="block-color color-RAL-3020"><span class="title-color">RAL-3020 <span class="title-name">Транспортный красный</span></span></li>
                                 <li class="block-color color-RAL-3022"><span class="title-color">RAL-3022 <span class="title-name">Лососёво-красный</span></span></li>
                                 <li class="block-color color-RAL-3024"><span class="title-color">RAL-3024 <span class="title-name">Люминесцентный красный</span></span></li>
                                 <li class="block-color color-RAL-3026"><span class="title-color">RAL-3026 <span class="title-name">Люминесцентный ярко-красный</span></span></li>
                                 <li class="block-color color-RAL-3027"><span class="title-color">RAL-3027 <span class="title-name">Малиново-красный</span></span></li>
                                 <li class="block-color color-RAL-3028"><span class="title-color">RAL-3028 <span class="title-name">Красный</span></span></li>
                                 <li class="block-color color-RAL-3031"><span class="title-color">RAL-3031 <span class="title-name">Ориент красный</span></span></li>
                                 <li class="block-color color-RAL-3032"><span class="title-color">RAL-3032 <span class="title-name">Перламутрово-рубиновый</span></span></li>
                                 <li class="block-color color-RAL-3033"><span class="title-color">RAL-3033 <span class="title-name">Перламутрово-розовый</span></span></li>
                              </ul>
                           </div>
                           <div class="block-purple-colors">
                              <h5 class="title-block">Фиолетовые тона</h5>
                              <ul class="purple-colors list-colors">
                                 <li class="block-color color-RAL-4001"><span class="title-color">RAL-4001 <span class="title-name">Красно-сиреневый</span></span></li>
                                 <li class="block-color color-RAL-4002"><span class="title-color">RAL-4002 <span class="title-name">Красно-фиолетовый</span></span></li>
                                 <li class="block-color color-RAL-4003"><span class="title-color">RAL-4003 <span class="title-name">Вересково-фиолетовый</span></span></li>
                                 <li class="block-color color-RAL-4004"><span class="title-color">RAL-4004 <span class="title-name">Бордово-фиолетовый</span></span></li>
                                 <li class="block-color color-RAL-4005"><span class="title-color">RAL-4005 <span class="title-name">Сине-сиреневый</span></span></li>
                                 <li class="block-color color-RAL-4006"><span class="title-color">RAL-4006 <span class="title-name">Транспортный пурпурный</span></span></li>
                                 <li class="block-color color-RAL-4007"><span class="title-color">RAL-4007 <span class="title-name">Пурпурно-фиолетовый</span></span></li>
                                 <li class="block-color color-RAL-4008"><span class="title-color">RAL-4008 <span class="title-name">Сигнальный фиолетовый</span></span></li>
                                 <li class="block-color color-RAL-4009"><span class="title-color">RAL-4009 <span class="title-name">Пастельно-фиолетовый</span></span></li>
                                 <li class="block-color color-RAL-4010"><span class="title-color">RAL-4010 <span class="title-name">Телемагента</span></span></li>
                                 <li class="block-color color-RAL-4011"><span class="title-color">RAL-4011 <span class="title-name">Перламутрово-фиолетовый</span></span></li>
                                 <li class="block-color color-RAL-4012"><span class="title-color">RAL-4012 <span class="title-name">Перламутрово-ежевичный</span></span></li>
                              </ul>
                           </div>
                           <div class="block-blue-colors">
                              <h5 class="title-block">Синие тона</h5>
                              <ul class="blue-colors list-colors">
                                 <li class="block-color color-RAL-5000"><span class="title-color">RAL-5000 <span class="title-name">Фиолетово-синий</span></span></li>
                                 <li class="block-color color-RAL-5001"><span class="title-color">RAL-5001 <span class="title-name">Зелёно-синий</span></span></li>
                                 <li class="block-color color-RAL-5002"><span class="title-color">RAL-5002 <span class="title-name">Ультрамариново-синий</span></span></li>
                                 <li class="block-color color-RAL-5003"><span class="title-color">RAL-5003 <span class="title-name">Сапфирово-синий</span></span></li>
                                 <li class="block-color color-RAL-5004"><span class="title-color">RAL-5004 <span class="title-name">Чёрно-синий</span></span></li>
                                 <li class="block-color color-RAL-5005"><span class="title-color">RAL-5005 <span class="title-name">Сигнальный синий</span></span></li>
                                 <li class="block-color color-RAL-5007"><span class="title-color">RAL-5007 <span class="title-name">Бриллиантово-синий</span></span></li>
                                 <li class="block-color color-RAL-5008"><span class="title-color">RAL-5008 <span class="title-name">Серо-синий</span></span></li>
                                 <li class="block-color color-RAL-5009"><span class="title-color">RAL-5009 <span class="title-name">Лазурно-синий</span></span></li>
                                 <li class="block-color color-RAL-5010"><span class="title-color">RAL-5010 <span class="title-name">Горечавково-синий</span></span></li>
                                 <li class="block-color color-RAL-5011"><span class="title-color">RAL-5011 <span class="title-name">Стально-синий</span></span></li>
                                 <li class="block-color color-RAL-5012"><span class="title-color">RAL-5012 <span class="title-name">Голубой</span></span></li>
                                 <li class="block-color color-RAL-5013"><span class="title-color">RAL-5013 <span class="title-name">Кобальтово-синий</span></span></li>
                                 <li class="block-color color-RAL-5014"><span class="title-color">RAL-5014 <span class="title-name">Голубино-синий</span></span></li>
                                 <li class="block-color color-RAL-5015"><span class="title-color">RAL-5015 <span class="title-name">Небесно-синий</span></span></li>
                                 <li class="block-color color-RAL-5017"><span class="title-color">RAL-5017 <span class="title-name">Транспортный синий</span></span></li>
                                 <li class="block-color color-RAL-5018"><span class="title-color">RAL-5018 <span class="title-name">Бирюзово-синий</span></span></li>
                                 <li class="block-color color-RAL-5019"><span class="title-color">RAL-5019 <span class="title-name">Капри синий</span></span></li>
                                 <li class="block-color color-RAL-5020"><span class="title-color">RAL-5020 <span class="title-name">Океанская синь</span></span></li>
                                 <li class="block-color color-RAL-5021"><span class="title-color">RAL-5021 <span class="title-name">Водная синь</span></span></li>
                                 <li class="block-color color-RAL-5022"><span class="title-color">RAL-5022 <span class="title-name">Ночной синий</span></span></li>
                                 <li class="block-color color-RAL-5023"><span class="title-color">RAL-5023 <span class="title-name">Отдалённо-синий</span></span></li>
                                 <li class="block-color color-RAL-5024"><span class="title-color">RAL-5024 <span class="title-name">Пастельно-синий</span></span></li>
                                 <li class="block-color color-RAL-5025"><span class="title-color">RAL-5025 <span class="title-name">Перламутровый горечавково-синий</span></span></li>
                                 <li class="block-color color-RAL-5026"><span class="title-color">RAL-5026 <span class="title-name">Перламутровый ночной синий</span></span></li>
                              </ul>
                           </div>
                           <div class="block-green-colors">
                              <h5 class="title-block">Зеленые тона</h5>
                              <ul class="green-colors list-colors">
                                 <li class="block-color color-RAL-6000"><span class="title-color">RAL-6000 <span class="title-name">Патиново-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6001"><span class="title-color">RAL-6001 <span class="title-name">Изумрудно-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6002"><span class="title-color">RAL-6002 <span class="title-name">Лиственно-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6003"><span class="title-color">RAL-6003 <span class="title-name">Оливково-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6004"><span class="title-color">RAL-6004 <span class="title-name">Сине-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6005"><span class="title-color">RAL-6005 <span class="title-name">Зелёный мох</span></span></li>
                                 <li class="block-color color-RAL-6006"><span class="title-color">RAL-6006 <span class="title-name">Серо-оливковый</span></span></li>
                                 <li class="block-color color-RAL-6007"><span class="title-color">RAL-6007 <span class="title-name">Бутылочно-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6008"><span class="title-color">RAL-6008 <span class="title-name">Коричнево-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6009"><span class="title-color">RAL-6009 <span class="title-name">Пихтовый зелёный</span></span></li>
                                 <li class="block-color color-RAL-6010"><span class="title-color">RAL-6010 <span class="title-name">Травяной зелёный</span></span></li>
                                 <li class="block-color color-RAL-6011"><span class="title-color">RAL-6011 <span class="title-name">Резедово-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6012"><span class="title-color">RAL-6012 <span class="title-name">Чёрно-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6013"><span class="title-color">RAL-6013 <span class="title-name">Тростниково-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6014"><span class="title-color">RAL-6014 <span class="title-name">Жёлто-оливковый</span></span></li>
                                 <li class="block-color color-RAL-6015"><span class="title-color">RAL-6015 <span class="title-name">Чёрно-оливковый</span></span></li>
                                 <li class="block-color color-RAL-6016"><span class="title-color">RAL-6016 <span class="title-name">Бирюзово-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6017"><span class="title-color">RAL-6017 <span class="title-name">Майский зелёный</span></span></li>
                                 <li class="block-color color-RAL-6018"><span class="title-color">RAL-6018 <span class="title-name">Желто-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6019"><span class="title-color">RAL-6019 <span class="title-name">Бело-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6020"><span class="title-color">RAL-6020 <span class="title-name">Хромовый зелёный</span></span></li>
                                 <li class="block-color color-RAL-6021"><span class="title-color">RAL-6021 <span class="title-name">Бледно-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6022"><span class="title-color">RAL-6022 <span class="title-name">Коричнево-оливковый</span></span></li>
                                 <li class="block-color color-RAL-6024"><span class="title-color">RAL-6024 <span class="title-name">Транспортный зелёный</span></span></li>
                                 <li class="block-color color-RAL-6025"><span class="title-color">RAL-6025 <span class="title-name">Папоротниково-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6026"><span class="title-color">RAL-6026 <span class="title-name">Опаловый зелёный</span></span></li>
                                 <li class="block-color color-RAL-6027"><span class="title-color">RAL-6027 <span class="title-name">Светло-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6028"><span class="title-color">RAL-6028 <span class="title-name">Сосновый зелёный</span></span></li>
                                 <li class="block-color color-RAL-6029"><span class="title-color">RAL-6029 <span class="title-name">Мятно-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6032"><span class="title-color">RAL-6032 <span class="title-name">Сигнальный зелёный</span></span></li>
                                 <li class="block-color color-RAL-6033"><span class="title-color">RAL-6033 <span class="title-name">Мятно-бирюзовый</span></span></li>
                                 <li class="block-color color-RAL-6034"><span class="title-color">RAL-6034 <span class="title-name">Пастельно-бирюзовый</span></span></li>
                                 <li class="block-color color-RAL-6035"><span class="title-color">RAL-6035 <span class="title-name">Перламутрово-зелёный</span></span></li>
                                 <li class="block-color color-RAL-6036"><span class="title-color">RAL-6036 <span class="title-name">Перламутровый опаловый зелёный</span></span></li>
                                 <li class="block-color color-RAL-6037"><span class="title-color">RAL-6037 <span class="title-name">Зелёный</span></span></li>
                                 <li class="block-color color-RAL-6038"><span class="title-color">RAL-6038 <span class="title-name">Люминесцентный зелёный</span></span></li>
                              </ul>
                           </div>
                           <div class="block-gray-colors">
                              <h5 class="title-block">Серые тона</h5>
                              <ul class="gray-colors list-colors">
                                 <li class="block-color color-RAL-7000"><span class="title-color">RAL-7000 <span class="title-name">Серая белка</span></span></li>
                                 <li class="block-color color-RAL-7001"><span class="title-color">RAL-7001 <span class="title-name">Серебристо-серый</span></span></li>
                                 <li class="block-color color-RAL-7002"><span class="title-color">RAL-7002 <span class="title-name">Оливково-серый</span></span></li>
                                 <li class="block-color color-RAL-7003"><span class="title-color">RAL-7003 <span class="title-name">Серый мох</span></span></li>
                                 <li class="block-color color-RAL-7004"><span class="title-color">RAL-7004 <span class="title-name">Сигнальный серый</span></span></li>
                                 <li class="block-color color-RAL-7005"><span class="title-color">RAL-7005 <span class="title-name">Мышино-серый</span></span></li>
                                 <li class="block-color color-RAL-7006"><span class="title-color">RAL-7006 <span class="title-name">Бежево-серый</span></span></li>
                                 <li class="block-color color-RAL-7008"><span class="title-color">RAL-7008 <span class="title-name">Серое хаки</span></span></li>
                                 <li class="block-color color-RAL-7009"><span class="title-color">RAL-7009 <span class="title-name">Зелёно-серый</span></span></li>
                                 <li class="block-color color-RAL-7010"><span class="title-color">RAL-7010 <span class="title-name">Брезентово-серый</span></span></li>
                                 <li class="block-color color-RAL-7011"><span class="title-color">RAL-7011 <span class="title-name">Железно-серый</span></span></li>
                                 <li class="block-color color-RAL-7012"><span class="title-color">RAL-7012 <span class="title-name">Базальтово-серый</span></span></li>
                                 <li class="block-color color-RAL-7013"><span class="title-color">RAL-7013 <span class="title-name">Коричнево-серый</span></span></li>
                                 <li class="block-color color-RAL-7015"><span class="title-color">RAL-7015 <span class="title-name">Сланцево-серый</span></span></li>
                                 <li class="block-color color-RAL-7016"><span class="title-color">RAL-7016 <span class="title-name">Антрацитово-серый</span></span></li>
                                 <li class="block-color color-RAL-7021"><span class="title-color">RAL-7021 <span class="title-name">Чёрно-серый</span></span></li>
                                 <li class="block-color color-RAL-7022"><span class="title-color">RAL-7022 <span class="title-name">Серая умбра</span></span></li>
                                 <li class="block-color color-RAL-7023"><span class="title-color">RAL-7023 <span class="title-name">Серый бетон</span></span></li>
                                 <li class="block-color color-RAL-7024"><span class="title-color">RAL-7024 <span class="title-name">Графитовый серый</span></span></li>
                                 <li class="block-color color-RAL-7026"><span class="title-color">RAL-7026 <span class="title-name">Гранитовый серый</span></span></li>
                                 <li class="block-color color-RAL-7030"><span class="title-color">RAL-7030 <span class="title-name">Каменно-серый</span></span></li>
                                 <li class="block-color color-RAL-7031"><span class="title-color">RAL-7031 <span class="title-name">Сине-серый</span></span></li>
                                 <li class="block-color color-RAL-7032"><span class="title-color">RAL-7032 <span class="title-name">Галечный серый</span></span></li>
                                 <li class="block-color color-RAL-7033"><span class="title-color">RAL-7033 <span class="title-name">Цементно-серый</span></span></li>
                                 <li class="block-color color-RAL-7034"><span class="title-color">RAL-7034 <span class="title-name">Жёлто-серый</span></span></li>
                                 <li class="block-color color-RAL-7035"><span class="title-color">RAL-7035 <span class="title-name">Светло-серый</span></span></li>
                                 <li class="block-color color-RAL-7036"><span class="title-color">RAL-7036 <span class="title-name">Платиново-серый</span></span></li>
                                 <li class="block-color color-RAL-7037"><span class="title-color">RAL-7037 <span class="title-name">Пыльно-серый</span></span></li>
                                 <li class="block-color color-RAL-7038"><span class="title-color">RAL-7038 <span class="title-name">Агатовый серый</span></span></li>
                                 <li class="block-color color-RAL-7039"><span class="title-color">RAL-7039 <span class="title-name">Кварцевый серый</span></span></li>
                                 <li class="block-color color-RAL-7040"><span class="title-color">RAL-7040 <span class="title-name">Серое окно</span></span></li>
                                 <li class="block-color color-RAL-7042"><span class="title-color">RAL-7042 <span class="title-name">Транспортный серый A</span></span></li>
                                 <li class="block-color color-RAL-7043"><span class="title-color">RAL-7043 <span class="title-name">Транспортный серый B</span></span></li>
                                 <li class="block-color color-RAL-7044"><span class="title-color">RAL-7044 <span class="title-name">Серый шёлк</span></span></li>
                                 <li class="block-color color-RAL-7045"><span class="title-color">RAL-7045 <span class="title-name">Телегрей 1</span></span></li>
                                 <li class="block-color color-RAL-7046"><span class="title-color">RAL-7046 <span class="title-name">Телегрей 2</span></span></li>
                                 <li class="block-color color-RAL-7047"><span class="title-color">RAL-7047 <span class="title-name">Телегрей 4</span></span></li>
                                 <li class="block-color color-RAL-7048"><span class="title-color">RAL-7048 <span class="title-name">Перламутровый мышино-серый</span></span></li>
                              </ul>
                           </div>
                           <div class="block-brown-colors">
                              <h5 class="title-block">Коричневые тона</h5>
                              <ul class="brown-colors list-colors">
                                 <li class="block-color color-RAL-8000"><span class="title-color">RAL-8000 <span class="title-name">Зелёно-коричневый</span></span></li>
                                 <li class="block-color color-RAL-8001"><span class="title-color">RAL-8001 <span class="title-name">Охра коричневая</span></span></li>
                                 <li class="block-color color-RAL-8002"><span class="title-color">RAL-8002 <span class="title-name">Сигнальный коричневый</span></span></li>
                                 <li class="block-color color-RAL-8003"><span class="title-color">RAL-8003 <span class="title-name">Глиняный коричневый</span></span></li>
                                 <li class="block-color color-RAL-8004"><span class="title-color">RAL-8004 <span class="title-name">Медно-коричневый</span></span></li>
                                 <li class="block-color color-RAL-8007"><span class="title-color">RAL-8007 <span class="title-name">Олень коричневый</span></span></li>
                                 <li class="block-color color-RAL-8008"><span class="title-color">RAL-8008 <span class="title-name">Оливково-коричневый</span></span></li>
                                 <li class="block-color color-RAL-8011"><span class="title-color">RAL-8011 <span class="title-name">Орехово-коричневый</span></span></li>
                                 <li class="block-color color-RAL-8012"><span class="title-color">RAL-8012 <span class="title-name">Красно-коричневый</span></span></li>
                                 <li class="block-color color-RAL-8014"><span class="title-color">RAL-8014 <span class="title-name">Сепия коричневый</span></span></li>
                                 <li class="block-color color-RAL-8015"><span class="title-color">RAL-8015 <span class="title-name">Каштаново-коричневый</span></span></li>
                                 <li class="block-color color-RAL-8016"><span class="title-color">RAL-8016 <span class="title-name">Махагон коричневый</span></span></li>
                                 <li class="block-color color-RAL-8017"><span class="title-color">RAL-8017 <span class="title-name">Шоколадно-коричневый</span></span></li>
                                 <li class="block-color color-RAL-8019"><span class="title-color">RAL-8019 <span class="title-name">Серо-коричневый</span></span></li>
                                 <li class="block-color color-RAL-8022"><span class="title-color">RAL-8022 <span class="title-name">Чёрно-коричневый</span></span></li>
                                 <li class="block-color color-RAL-8023"><span class="title-color">RAL-8023 <span class="title-name">Оранжево-коричневый</span></span></li>
                                 <li class="block-color color-RAL-8024"><span class="title-color">RAL-8024 <span class="title-name">Бежево-коричневый</span></span></li>
                                 <li class="block-color color-RAL-8025"><span class="title-color">RAL-8025 <span class="title-name">Бледно-коричневый</span></span></li>
                                 <li class="block-color color-RAL-8028"><span class="title-color">RAL-8028 <span class="title-name">Терракотовый</span></span></li>
                                 <li class="block-color color-RAL-8029"><span class="title-color">RAL-8029 <span class="title-name">Перламутровый медный</span></span></li>
                              </ul>
                           </div>
                           <div class="block-black-colors">
                              <h5 class="title-block">Черные и белые тона</h5>
                              <ul class="black-colors list-colors">
                                 <li class="block-color color-RAL-9001"><span class="title-color">RAL-9001 <span class="title-name">Кремово-белый</span></span></li>
                                 <li class="block-color color-RAL-9002"><span class="title-color">RAL-9002 <span class="title-name">Светло-серый</span></span></li>
                                 <li class="block-color color-RAL-9003"><span class="title-color">RAL-9003 <span class="title-name">Сигнальный белый</span></span></li>
                                 <li class="block-color color-RAL-9004"><span class="title-color">RAL-9004 <span class="title-name">Сигнальный чёрный</span></span></li>
                                 <li class="block-color color-RAL-9005"><span class="title-color">RAL-9005 <span class="title-name">Чёрный янтарь</span></span></li>
                                 <li class="block-color color-RAL-9006"><span class="title-color">RAL-9006 <span class="title-name">Бело-алюминиевый</span></span></li>
                                 <li class="block-color color-RAL-9007"><span class="title-color">RAL-9007 <span class="title-name">Чёрный янтарь</span></span></li>
                                 <li class="block-color color-RAL-9010"><span class="title-color">RAL-9010 <span class="title-name">Белый</span></span></li>
                                 <li class="block-color color-RAL-9011"><span class="title-color">RAL-9011 <span class="title-name">Графитно-чёрный</span></span></li>
                                 <li class="block-color color-RAL-9016"><span class="title-color">RAL-9016 <span class="title-name">Транспортный белый</span></span></li>
                                 <li class="block-color color-RAL-9017"><span class="title-color">RAL-9017 <span class="title-name">Транспортный чёрный</span></span></li>
                                 <li class="block-color color-RAL-9018"><span class="title-color">RAL-9018 <span class="title-name">Папирусно-белый</span></span></li>
                                 <li class="block-color color-RAL-9022"><span class="title-color">RAL-9022 <span class="title-name">Перламутровый светло-серый</span></span></li>
                                 <li class="block-color color-RAL-9023"><span class="title-color">RAL-9023 <span class="title-name">Перламутровый тёмно-серый</span></span></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section-scheme-works mosquito">
      <div class="container">
         <h2 class="title-section">Как Заказать Антимоскитную Сетку</h2>
         <ul class="list-scheme-works balcone d-md-none">
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
               <span class="title">Заявка</span>
               <p>Позвоните нам или оставьте заявку на сайте</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title">Замер</span>
               <p>Договоримся о замере на удобное для вас время или выполните замер самостоятельно согласно простой инструкции на сайте</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">3</span></div>
               <span class="title">Выполнение заказа</span>
               <p>Выполнение заказа обычно занимает 1-2 рабочих дня</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">4</span></div>
               <span class="title">Доставка и установка</span>
               <p>Заранее сообщим и согласуем удобное для вас время доставки и установки</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">5</span></div>
               <span class="title">Гарантия</span>
               <p>Дадим гарантию на каждое изделие до 3-х лет</p>
            </li>
         </ul>
         <ul class="list-scheme-works-lg d-none d-md-flex">
            <li class="">
               <span class="title">Заявка</span>
               <p class="px-5 mx-lg-4">Позвоните нам или оставьте заявку на сайте</p>
               <div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
            </li>
            <li class="">
               <span class="title px-4">Выполнение заказа</span>
               <p class="px-5 mx-lg-4">Выполнение заказа обычно занимает 1-2 рабочих дня</p>
               <div class="block-scheme-works"><i class="icon-scheme-works performance"></i> <span class="number-scheme-works">3</span></div>
            </li>
            <li class="">
               <span class="title">Гарантия</span>
               <p class="px-5 mx-lg-4">Дадим гарантию на каждое изделие до 3-х лет</p>
               <div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">5</span></div>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
               <span class="title mt-3">Замер</span>
               <p class="mx-lg-4">Договоримся о замере на удобное для вас время или выполните замер самостоятельно согласно простой инструкции на сайте</p>
            </li>
            <li class="">
               <div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">4</span></div>
               <span class="title mt-3">Доставка и установка</span>
               <p class="mx-lg-4">Заранее сообщим и согласуем удобное для вас время доставки и установки</p>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-all-ukraine">
      <div class="container">
         <h2 class="title-section">Работаем по Всей Территории Украины</h2>
         <div class="block-all-ukraine">
            <img src="<?php bloginfo('template_url') ?>/images/map-ukraine-new.7f39b14f.png" class="map d-none d-md-block img-fluid" alt="map">
            <ul>
               <li>
                  <i class="icon-map icon icon-nova_poshta"></i>
                  <p>Нова пошта. Адресная или<br/>в отделение - от 70 грн.</p>
               </li>
               <li>
                  <i class="icon-map icon icon-shipping"></i>
                  <p>Курьерская доставка. Доставка по Киеву курьером - 200 грн.</p>
               </li>
               <li>
                  <i class="icon-map icon icon-delivery"></i>
                  <p>Самовывоз со склада.<br>Бесплатно в любое время</p>
               </li>
            </ul>
         </div>
      </div>
   </section>
   <section class="section-form-page-windowsill">
      <div class="container">
         <h2 class="title-section">Форма для заказа Антимоскитных Сеток</h2>
         <form class="form-windowsill sending-mosquito-net only-one">
            <ul class="form-windowsill-wrapper">
               <li class="top-row-wrapper">
                  <div class="form-group"><input type="hidden" name="type" value="Сетка под Цвет Окна"></div>
                  <div class="form-group"><input type="hidden" name="quantity" value="1"></div>
                  <div class="form-group"><label for="form-windowsill-3">Укажите высоту сетки (мм)</label> <input name="hight" id="form-windowsill-3" class="form-control" placeholder="1200"></div>
                  <div class="form-group"><label for="form-windowsill-4">Укажите ширину сетки (мм)</label> <input name="width" id="form-windowsill-4" class="form-control" placeholder="600"></div>
                  <div class="form-collapse-control">
                     <div class="btn-add-type" onclick="addMosquitoForm(this)" data-clone-btn>+</div>
                  </div>
               </li>
               <li class="bottom-row-wrapper">
                  <div class="form-windowsill-description mosquito-description">
                     <div class="form-group"><label></label> <input name="city" class="form-control" placeholder="Введите ваш город*"></div>
                     <div class="form-group"><label></label> <input name="your-name" class="form-control" placeholder="Имя*"></div>
                     <div class="form-group comment"><label></label> <textarea name="your-message" class="form-control" rows="3" placeholder="Комментарий к заказу"></textarea></div>
                     <div class="form-group"><label></label> <input name="tel-460" class="form-control" placeholder="Телефон*"></div>
                     <div class="form-group mosquito-btn"><button type="submit" class="btn btn-custom-project w-100 big-form">ОФОРМИТЬ ЗАКАЗ</button></div>
                  </div>
               </li>
               <li class="button-wrapper mosquito"></li>
            </ul>
         </form>
      </div>
   </section>
   <section class="section-measurement-rules">
      <div class="container">
         <h2 class="title-section">Как Правильно Замерять Москитную Сетку</h2>
         <div class="video-info">
            <div class="block-video"><iframe src="https://www.youtube.com/embed/kWJPtODD9Oo"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
             <p class="my-3 my-lg-0">Чтобы заказать москитную сетку, нам необходимы точные размеры
                 светового приёма. Есть два способа их получить: вызов замерщика и самостоятельный замер.
                 Для экономии времени и денег, вы можете самостоятельно произвести замеры для дальнейшей
                 передачи размеров нашим менеджерам. Для этого вам необходимы: ручка, бумага, рулетка.
                 Следуя инструкциям в видео, вы сможете сделать максимально точные замеры и приступить
                 к заказу москитной сетки.</p>
         </div>
         <div class="block-fix"></div>
      </div>
   </section>
   <section class="section-buy-our-company mosquito">
      <div class="container">
         <div class="block-buy-our-company">
            <div class="info-buy-our-company">
               <h2 class="title-section">Почему стоит заказать антимоскитную сетку именно у нас ?</h2>
               <ul class="list-buy-our-company">
                  <li>Собственное производство</li>
                  <li>Современное оборудование</li>
                  <li>Производим 800 сеток в сутки</li>
                  <li>Работаем по всей территории Украины</li>
                  <li>20+ лет опыта</li>
                  <li>118387 успешно выполненных заказов</li>
                  <li>Выполняем заказы точно в срок</li>
                  <li>Самые низкие цены</li>
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
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-mosquito.593e1089.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>980</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-mosquito-2.bec7e70a.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>5 400</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-mosquito-3.c138d53e.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>4 900</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-mosquito.593e1089.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>980</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-mosquito-2.bec7e70a.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>5 400</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
            <li>
               <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-mosquito-3.c138d53e.jpg" class="img-fluid" alt="photo-product1"></a>
               <div class="footer-item-catalog">
                  <div class="price"><span class="text">Стоимость от</span> <span>4 900</span> <span class="text">грн</span></div>
               </div>
               <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
            </li>
         </ul>
         <button class="btn btn-portfolio">Показать Все Работы</button>
      </div>
   </section>
   <section class="section-post section-post-windows bg-mosquito">
      <div class="container">
         <h2 class="title-section">Купить цветную москитную сетку в Киеве</h2>
         <div class="text-custom-page">
            <p>Цветные москитные сетки различаются по конструктивным особенностям:</p>
            <ul>
               <li>· рамные;</li>
               <li>· рулонные.</li>
            </ul>
            <p>Рамная москитная решетка фиксируется в каркасе на оконном или дверном проеме. Этот вид защитного полотна отлично подходит для любителей постоянного свежего воздуха.</p>
            <p>Рулонная сетка представляет собой конструкцию, состоящую из короба и направляющих элементов. При необходимости полотно поднимается или опускается. Данный вид «москитки» подходит для тех, кто живет без детей и животных.</p>
            <h2 class="title-post">Как правильно выбрать</h2>
            <p>Внешний вид любого интерьера зависит от мелочей. Выбирая москитную сетку, необходимо учитывать некоторые моменты:</p>
            <ol>
               <li>Цветные антимоскитные полотна необходимы тем, кто живет на центральной улице. Именно здесь важно соблюдать единство стиля, чтобы не выбиваться из общего оформления здания.</li>
               <li>Расцветка должна сочетаться с цветовой гаммой основного дизайна дома, квартиры или офиса.</li>
               <li>Для полноценности элемент может декорироваться узорами или рисунками.</li>
            </ol>
            <p>Перед покупкой следует правильно сделать замеры. Однако при самостоятельном измерении параметров могут возникать сложности. Поэтому мы предлагаем вызвать замерщика на дом. Наш специалист не только осуществит замеры, но и проконсультирует вас в выборе изделия.</p>
            <h2 class="title-post">Преимущества</h2>
            <p>Цветные москитные полотна обладают несколькими преимуществами:</p>
            <ul>
               <li>· эстетичностью;</li>
               <li>· надежностью;</li>
               <li>· защитным барьером от осадков и ветровых нагрузок;</li>
               <li>· безопасностью;</li>
               <li>· защитой от пыли, мелкого мусора и насекомых.</li>
            </ul>
            <p>Окрашенные сетчатые полотна значительно уменьшают пропуск света в помещение, а также предохраняют растения от солнечного перегрева.</p>
            <h2 class="title-post">Стоимость</h2>
            <p>Стоимость защитного полотна зависит от ряда факторов:</p>
            <ul>
               <li>· типа;</li>
               <li>· цвета;</li>
               <li>· размеров;</li>
               <li>· формы;</li>
               <li>· способа декора.</li>
            </ul>
            <p>Компания «Windows Group» предлагает заказать цветную москитную сетку в Украине по выгодной цене. Узнать ориентировочную стоимость можно на сайте или, позвонив по телефону.</p>
         </div>
      </div>
   </section>
   <section class="section-other-section section-other-type-windows">
      <div class="container">
         <ul class="list-item-catalog colum-3">
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/na-okna/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows.f9ac7d72.webp" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue px-lg-5">Москитные сетки на окна</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/na-dveri/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-2.c9a2d7a3.jpg" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Москитные сетки на двери</span></div>
               </div>
            </li>
            <li class="item-catalog page">
               <div class="block-item-catalog">
                  <a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/antikoshka/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/type-windows-3.9b0b1c96.webp" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog page-type-mosquito"><span class="price border-blue">Москитные сетки Антикошка</span></div>
               </div>
            </li>
         </ul>
      </div>
   </section>
   <a id="button"></a>
</div>

<?php
get_footer();

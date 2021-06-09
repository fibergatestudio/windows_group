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

<div class="main page-installments">
   <div class="container">
      <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
   </div>
   <section class="section-welcome-page bg-welcome-page-installments">
      <div class="container">
         <div class="d-lg-flex">
            <div class="text-welcome">
               <div>
                  <h1 class="big-title">Металлопластиковые Окна в Рассрочку или в Кредит</h1>
                  <ul>
                     <li class="title-hot-credit icon decor-cycle">"Тепла Оселя"</li>
                     <li class="title-hot-credit icon decor-li-pref">"Теплі Кредити"</li>
                  </ul>
                  <span class="text-custom-page pb-3">Получите гарантированную скидку <span class="strong-text">-35%</span> по<br/>Программе компенсации "Тепла Оселя"</span>
                  <p class="color-grey">Для тех, кто не готов сразу купить полный комплект изделий, предоставляется <span class="strong-text">рассрочка или кредит</span>. Срок рассрочки: <span class="strong-text">до 24 месяцев</span> с возможностью досрочного погашения и без первоначального взноса</p>
               </div>
               <div>
                  <ul class="img-percent">
                     <li>
                        <div class="cycle-percen">0%</div>
                        <div class="title-percent"><span>Годовых</span></div>
                     </li>
                     <li>
                        <div class="cycle-percen"><span>0<span class="price">грн.</span></span></div>
                        <div class="title-percent"><span>Без переплат</span></div>
                     </li>
                     <li>
                        <div class="cycle-percen">0%</div>
                        <div class="title-percent"><span>До 24 месяцев!</span></div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="section-top">
      <div class="container">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-none d-lg-flex">
               <li class="breadcrumb-item"><a href="#">Главная</a></li>
               <li class="breadcrumb-item active" aria-current="page">Металлопластиковые окна в рассрочку под 0%</li>
            </ol>
         </nav>
         <h2 class="title-post title-post-top text-center">Окна Сейчас – Деньги Потом!</h2>
          <p class="text-custom-page">
              Распространенная проблема – ремонт начат, а денег не хватает.
              Теперь это не проблема. Приобрести оконные конструкции можно рассрочку без хождения по банкам.
              Наша компания «Виндовс Груп» предлагает купить окна в кредит и или рассрочку в Киеве и области.
              В ассортименте фирмы представлены популярные современные модели евроокон от ведущих производителей по доступным ценам.
          </p>
      </div>
   </div>
   <section class="section-catalog installments">
      <div class="container">
         <ul class="list-item-catalog">
            <li class="item-catalog">
               <div class="block-item-catalog">
                  <div class="header-item-catalog"><span>Окно открывающиеся</span></div>
                  <a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/furniture-type-2-0.00cd664a.png" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog">
                     <div class="price"><span class="text">от</span> <span>887</span> <span class="text">грн/мес</span></div>
                     <a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="btn btn-success btn-href-4">Подробнее</a>
                  </div>
               </div>
            </li>
            <li class="item-catalog">
               <div class="block-item-catalog">
                  <div class="header-item-catalog"><span>Двухстворчатое с одним открыванием</span></div>
                  <a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/furniture-type-3-0.b4c5d7c2.png" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog">
                     <div class="price"><span class="text">от</span> <span>2221</span> <span class="text">грн/мес</span></div>
                     <a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="btn btn-success btn-href-4">Подробнее</a>
                  </div>
               </div>
            </li>
            <li class="item-catalog">
               <div class="block-item-catalog">
                  <div class="header-item-catalog"><span>Трехстворчатое с одним открыванием</span></div>
                  <a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/furniture-type-5-0.6a6c0610.png" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog">
                     <div class="price"><span class="text">от</span> <span>2940</span> <span class="text">грн/мес</span></div>
                     <a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="btn btn-success btn-href-4">Подробнее</a>
                  </div>
               </div>
            </li>
            <li class="item-catalog">
               <div class="block-item-catalog">
                  <div class="header-item-catalog"><span>Двухстворчатое Т-образное с одним открыванием</span></div>
                  <a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/title-img-table-windows-52.6288161e.png" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog">
                     <div class="price"><span class="text">от</span> <span>2695</span> <span class="text">грн/мес</span></div>
                     <a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="btn btn-success btn-href-4">Подробнее</a>
                  </div>
               </div>
            </li>
            <li class="item-catalog">
               <div class="block-item-catalog">
                  <div class="header-item-catalog"><span>Четырёхстворчатое окно с двумя открываниями</span></div>
                  <a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/furniture-type-8.ca0a0555.png" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog">
                     <div class="price"><span class="text">от</span> <span>6308</span> <span class="text">грн/мес</span></div>
                     <a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="btn btn-success btn-href-4">Подробнее</a>
                  </div>
               </div>
            </li>
            <li class="item-catalog">
               <div class="block-item-catalog">
                  <div class="header-item-catalog"><span>Балконный блок из глухого одностворчатого окна и двери</span></div>
                  <a href="<?=get_bloginfo('home')?>/plastikovye-dveri/balkonnye-bloki/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/furniture-type-20.a985efbf.png" class="img-fluid" alt="photo-product1"></a>
                  <div class="footer-item-catalog">
                     <div class="price"><span class="text">от</span> <span>3703</span> <span class="text">грн/мес</span></div>
                     <a href="<?=get_bloginfo('home')?>/plastikovye-dveri/balkonnye-bloki/" class="btn btn-success btn-href-4">Подробнее</a>
                  </div>
               </div>
            </li>
         </ul>
         <div class="list-item-brand slider-brand">
            <div class="item-brand"><img src="<?php bloginfo('template_url') ?>/images/windoffs-new.590253c8.svg" class="img-fluid" alt="photo-product1"></div>
            <div class="item-brand"><img src="<?php bloginfo('template_url') ?>/images/WDS.5f37c8d5.svg" class="img-fluid" alt="photo-product1"></div>
            <div class="item-brand"><img src="<?php bloginfo('template_url') ?>/images/rehau.5dbf9707.svg" class="img-fluid" alt="photo-product1"></div>
            <div class="item-brand"><img src="<?php bloginfo('template_url') ?>/images/veka-new.5a1822d9.svg" class="img-fluid" alt="photo-product1"></div>
            <div class="item-brand"><img src="<?php bloginfo('template_url') ?>/images/viknalend.ff99421d.svg" class="img-fluid" alt="photo-product1"></div>
            <div class="item-brand"><img src="<?php bloginfo('template_url') ?>/images/openteck.c0ec51c2.svg" class="img-fluid" alt="photo-product1"></div>
            <div class="item-brand"><img src="<?php bloginfo('template_url') ?>/images/aluplast.19c32497.svg" class="img-fluid" alt="photo-product1"></div>
            <div class="item-brand"><img src="<?php bloginfo('template_url') ?>/images/salamander.4fa97951.svg" class="img-fluid" alt="photo-product1"></div>
            <div class="item-brand"><img src="<?php bloginfo('template_url') ?>/images/KBE.0d5c807a.svg" class="img-logo-kbe img-fluid" alt="photo-product1"></div>
         </div>
      </div>
   </section>
   <section class="section-installments-form bg-welcome-page-installments-form">
      <div class="container">
         <div>
            <h2 class="title-section">Выгодная Рассрочка на Окна до 6 Месяцев!</h2>
            <ul class="list-presents-pref">
               <li class="item"><span class="icon icon-present-installments"></span> <span class="title">0% Переплат</span></li>
               <li class="item"><span class="icon icon-calendar"></span> <span class="title">Срок до 6 месяцев</span></li>
               <li class="item"><span class="icon icon-no-cach"></span> <span class="title">Без первого взноса</span></li>
               <li class="item"><span class="icon icon-doc"></span> <span class="title">Без справок о доходах</span></li>
               <li class="item"><span class="icon icon-rocket"></span> <span class="title w-100">Удобное и быстрое оформление за 15 минут</span></li>
            </ul>
         </div>
         <div class="block-form">
            <h2 class="title-section">Отправьте Заявку <span class="d-block small-title">и Получите Бесплатно на Выбор</span></h2>
            <div class="d-md-flex">
               <div>
                  <div class="form">
                     <h2 class="title-form">Оставьте заявку на консультацию менеджера</h2>
                     <form class="call-back-form">
                        <div class="form-group"><label for="exampleInputName"><input name="your-name" class="form-control" id="exampleInputName" placeholder="Ваше имя*"></label></div>
                        <div class="form-group"><label for="exampleInputPhone"><input name="tel-460" class="form-control" id="exampleInputPhone" placeholder="Телефон*"></label></div>
                        <div class="form-group"><label><textarea name="your-message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Комментарий"></textarea></label></div>
                        <button type="submit" class="btn btn-success">Получить консультацию</button>
                     </form>
                     <p class="mt-3 text-form">Экономьте время, звоните прямо сейчас!</p>
                     <a href="#" class="phone">0 800 211 052 </a><span class="text-bottom">Бесплатные звонки по всей территории Украины</span>
                  </div>
               </div>
               <ul class="list-present">
                  <li class="item">
                     <div class="title-present"><span>Бесплатно</span></div>
                     <div class="img-block"><img src="<?php bloginfo('template_url') ?>/images/mosquito-grid-2.7caf262a.jpg" class="img-fluid" alt="photo-present"></div>
                     <div class="footer-item"><span>Москитная сетка</span> <span class="bg-price price">oт <span class="cross-text">200 грн</span></span></div>
                  </li>
                  <li class="item">
                     <div class="title-present"><span>Бесплатно</span></div>
                     <div class="img-block"><img src="<?php bloginfo('template_url') ?>/images/child-blocker.12cea12f.jpg" class="img-fluid" alt="photo-present"></div>
                     <div class="footer-item"><span>Детский блокиратор</span> <span class="bg-price price">oт <span class="cross-text">220 грн</span></span></div>
                  </li>
                  <li class="item">
                     <div class="title-present"><span>Бесплатно</span></div>
                     <div class="img-block"><img src="<?php bloginfo('template_url') ?>/images/defence-hacking.01f80627.jpg" class="img-fluid" alt="photo-present"></div>
                     <div class="footer-item"><span>Защита от взлома</span> <span class="bg-price price">oт <span class="cross-text">340 грн</span></span></div>
                  </li>
                  <li class="item">
                     <div class="title-present"><span>Бесплатно</span></div>
                     <div class="img-block"><img src="<?php bloginfo('template_url') ?>/images/windows-ebb.e0c716f1.jpg" class="img-fluid" alt="photo-present"></div>
                     <div class="footer-item"><span>Отливы</span> <span class="bg-price price">oт <span class="cross-text">150 грн</span></span></div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <section class="section-bank">
      <div class="container">
         <h2 class="title-section">Наши Банки-Партнёры</h2>
         <ul class="nav nav-pills nav-justified" id="pills-other-glass" role="tablist">
            <li class="nav-item active" role="presentation"><a class="nav-link active" id="pills-privat-tab" data-toggle="pill" href="#pills-privat" role="tab" aria-controls="pills-privat" aria-selected="true" data-parent="#pills-other-glass"><span class="title-tab"><span class="icon icon-logo-privat"></span>ПриватБанк</span> <i class="fa fa-chevron-down"></i></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="pills-color-alfa-tab" data-toggle="pill" href="#pills-color-alfa" role="tab" aria-controls="pills-color-alfa" aria-selected="false" data-parent="#pills-other-glass"><span class="title-tab"><span class="icon icon-logo-alfabank"></span>Альфа-Банк</span> <i class="fa fa-chevron-down"></i></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" id="pills-mono-tab" data-toggle="pill" href="#pills-mono" role="tab" aria-controls="pills-mono" aria-selected="false" data-parent="#pills-other-glass"><span class="title-tab"><span class="icon icon-logo-mono"></span>Mono Банк</span> <i class="fa fa-chevron-down"></i></a></li>
         </ul>
         <div class="tab-content" id="pills-other-glassContent">
            <div class="tab-pane fade show active" id="pills-privat" role="tabpanel" aria-labelledby="pills-privat-tab">
               <div class="block">
                  <h2 class="title-block-bank d-none d-lg-block">ПриватБанк</h2>
                  <div class="d-lg-flex">
                     <div class="block-left">
                        <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/icon-logo-privat.a288f51a.svg" class="img-fluid" alt="photo-product1"></a>
                        <div class="">
                           <h5 class="title-block">Информация</h5>
                           <dl class="info-bank">
                              <dt>Срок:</dt>
                              <dd>до 24 месяцев</dd>
                              <dt>Сума:</dt>
                              <dd>до 100 тысяч грн</dd>
                              <dt>Первый взнос:</dt>
                              <dd>3%</dd>
                              <dt>Комиссионные услуги</dt>
                              <dd>Единоразовая комиссия 2,9%</dd>
                           </dl>
                           <h5 class="title-block">Гарантия</h5>
                           <dl class="info-bank">
                              <dt>Профиль:</dt>
                              <dd>40 лет</dd>
                              <dt>Стеклопакет:</dt>
                              <dd>20 лет</dd>
                              <dt>Фурнитура:</dt>
                              <dd>10 лет</dd>
                              <dt>Монтаж:</dt>
                              <dd>7 лет</dd>
                           </dl>
                        </div>
                     </div>
                     <p>Оплата частями – удобная услуга от Приватбанка, доступная клиентам Windowsgroup. Вы можете заказать установку оконных конструкций и подоконников и разбить оплату на срок до 6 месяцев. Предварительно необходимо проконсультироваться у менеджера банка по поводу активности услуги, а также касательно доступной суммы рассрочки на вашей карте.
</p>
                  </div>
                  <p> Сервис «Оплата частями» доступен владельцам таких карт как «Универсальная», Gold, Platinum, World Signia/Elite, Infinite.
Оформление займет всего полминуты, а для заключения договора достаточно одного лишь чека, без паспорта, ИНН и справки о доходах. Ежемесячные платежи можно вносить прямо на карту, не посещая банк. 
				   </p>
						  <p>«Мгновенная рассрочка» от Приватбанка – также очень выгодный сервис, с помощью которого наши клиенты могут получить услуги Windowsgroup. Комиссия при пользовании мгновенной рассрочкой минимальна, а остальные условия полностью совпадают с условиями оплаты частями.</p>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-color-alfa" role="tabpanel" aria-labelledby="pills-color-alfa-tab">
               <div class="block">
                  <h2 class="title-block-bank d-none d-lg-block">Альфа-Банк</h2>
                  <div class="d-lg-flex">
                     <div class="block-left">
                        <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/icon-logo-alfabank.c89491a7.svg" class="img-fluid" alt="photo-product1"></a>
                        <div class="">
                           <h5 class="title-block">Информация</h5>
                           <dl class="info-bank">
                              <dt>Срок:</dt>
                              <dd>до 64 месяцев</dd>
                              <dt>Сума:</dt>
                              <dd>до 50 тысяч грн</dd>
                              <dt>Первый взнос:</dt>
                              <dd>10%</dd>
                              <dt>Комиссионные услуги</dt>
                              <dd>Ежемесячная комиссия 1 %</dd>
                           </dl>
                           <h5 class="title-block">Гарантия</h5>
                           <dl class="info-bank">
                              <dt>Профиль:</dt>
                              <dd>40 лет</dd>
                              <dt>Стеклопакет:</dt>
                              <dd>20 лет</dd>
                              <dt>Фурнитура:</dt>
                              <dd>10 лет</dd>
                              <dt>Монтаж:</dt>
                              <dd>7 лет</dd>
                           </dl>
                        </div>
                     </div>
                     <p>Клиенты Windowsgroup могут воспользоваться моментальной или легкой рассрочкой от Альфа-Банка. Такая услуга предусматривает оплату частями с помощью кредитной карты. Условия легкой рассрочки Альфа-банка одни из самых выгодных: годовая ставка всего 0,01% без комиссий. При моментальной рассрочке ежемесячная комиссия составляет 1.8% от суммы рассрочки.</p>
                  </div>
                  <p>Погашение рассрочки происходит одинаковыми платежами и всю информацию можно отследить через приложение цифрового банка Sense SuperApp, в интернет-сервисе My Alfa-Bank или в приложении Alfa-Mobile. </p>
<p>Для активации моментальной рассрочки достаточно иметь кредитную карту, нет необходимости в справке о доходах и других документах. При этом первый платеж списывается не в ближайщий расчетный день, а через один. Таким образом клиент получает дополнительную отсрочку платежа.
</p>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-mono" role="tabpanel" aria-labelledby="pills-mono-tab">
               <div class="block">
                  <h2 class="title-block-bank d-none d-lg-block">Mono Банк</h2>
                  <div class="d-lg-flex">
                     <div class="block-left">
                        <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/icon-logo-mono.31d9c04b.svg" class="img-fluid mt-0" alt="photo-product1"></a>
                        <div class="">
                           <h5 class="title-block">Информация</h5>
                           <dl class="info-bank">
                              <dt>Срок:</dt>
                              <dd>до 36 месяцев</dd>
                              <dt>Сума:</dt>
                              <dd>до 100 тысяч грн</dd>
                              <dt>Первый взнос:</dt>
                              <dd>5%</dd>
                              <dt>Комиссионные услуги</dt>
                              <dd>Ежемесячная комиссия 1%, Единоразовая комиссия 2,9%</dd>
                           </dl>
                           <h5 class="title-block">Гарантия</h5>
                           <dl class="info-bank">
                              <dt>Профиль:</dt>
                              <dd>40 лет</dd>
                              <dt>Стеклопакет:</dt>
                              <dd>20 лет</dd>
                              <dt>Фурнитура:</dt>
                              <dd>10 лет</dd>
                              <dt>Монтаж:</dt>
                              <dd>7 лет</dd>
                           </dl>
                        </div>
                     </div>
                     <p>Бесплатная рассрочка от Monobank – прекрасный шанс для клиентов Windowsgroup получить окна своей мечты прямо сейчас, даже если средств на это на данный момент не хватает. Для оформления услуги Монобанка необходимо заказать карту банка и узнать свой лимит на покупку частями. Подтвердить приобретение услуг Windowsgroup можно в удобном мобильном приложении Monobank.</p>
                  </div>
                  
               </div>
            </div>
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
   <section class="section-text">
      <div class="container">
         <h2 class="title-section">Преимущества использования рассрочки</h2>
          <p>Купить окна ПВХ в рассрочку без банка в Киеве – оптимальный способ приобретения товара.
              Такой метод покупки имеет следующие преимущества:</p>
          <ol>
              <li>Клиент получает евроокно единовременно, а оплату за товар проводит равными частями на протяжении оговоренного срока.</li>
              <li>Возможность оформления рассрочки или кредита на месте, без посещения банковских учреждений.</li>
              <li>Покупателю предоставляется 100%-ная гарантия на покупку без переплат и начисления процентов.</li>
          </ol>
          <p>При заказе металлопластиковой оконной конструкции по предварительной договоренности доступна доставка и профессиональный монтаж.
              Качественная установка служит гарантом прочности, надежности и долговечности евроокна.</p>
      </div>
   </section>
   <section class="section-img installments">
      <div class="container">
         <h2 class="title-section">Получите -35% Скидки<br/>с Программой Компенсации Тепла Оселя</h2>
         <div class="block-imgs">
            <div class="block-2"><img src="<?php bloginfo('template_url') ?>/images/house-house-png.413a767d.png" class="img-fluid" alt="photo"></div>
            <div class="block-3">
               <div class="block-pref">
                  <span class="header-pref">Экономьте до -35%</span>
                  <div class="body-pref">
                     <ul>
                        <li class="icon decor-li-pref">"Тепла Оселя"</li>
                        <li class="icon decor-li-pref">"Теплі Кредити"</li>
                     </ul>
                     <div class="ml-3 block-bank">
                        <span class="icon ukrgaz-pref"></span> <span class="py-2 icon privat-pref"></span>
                        <div class="d-flex"><span class="w-50 icon pref-exim"></span> <span class="w-50 icon pref-ochad"></span></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		  <p>Программа «Тепла Оселя» - очень выгодный вариант для экономии ваших средств. Заказывая услугу по установке теплых качественных окон у Windowsgroup, вы получаете возможность вернуть 35% от общей суммы вашего заказа. Ниже перечислены преимущества программы, а также шаги по правильному оформлению. </p>
         <div class="block-conditions">
            <h2 class="title-section">Условия и Преимущества Программы "Тепла Оселя":</h2>
            <ul class="list-conditions">
               <li><span>Выгодные условия кредитования. Кредит выдается <span class="bold-text pl-1">частным владельцам жилья</span>.</span></li>
               <li><span>Гранты <span class="bold-text">возвращаются </span>в грн.</span></li>
               <li class="mt-lg-4"><span>Компенсация в размере <span class="bold-text">35% для физлиц.</span></span></li>
               <li><span><span class="bold-text">Отсутствуют обязательства</span> по внесению первоначального взноса*. Вы можете получить более детальную информация в своем банке.</span></li>
               <li><span>Максимальная сумма компенсации может составлять <span class="bold-text">до 50,000 грн.</span></span></li>
               <li><span class="mr-lg-3">Существенная <span class="bold-text">экономия </span>на коммунальных платежах.</span></li>
            </ul>
         </div>
         <div class="block-------">
            <h2 class="title-section px-3 mx-5 pt-3">Как Гарантированно Получить Скидку -35% на Окна по Программе Компенсации "Тепла Оселя"</h2>
            <ul class="list-item-installments">
               <li class="item-installments">
                  <span class="header-item-catalog color-2894E1">Шаг 1</span>
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/manager.bfb4e539.jpg" alt="images"></div>
                  <p class="title-item-installments"><span class="d-block bold-text">Обратитесь к нашим менеджерам</span>и получите консультацию по выбору энергоэффективных окон участвующих в программе</p>
               </li>
               <li class="item-installments">
                  <span class="header-item-catalog color-CCCC3E">Шаг 2</span>
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/partner-banks.a042dc6a.jpg" alt="images"></div>
                  <p class="title-item-installments"><span class="d-block bold-text">Мы предоставим банки партнеры,</span> в которых вы сможете взять кредит, установим вам окна</p>
               </li>
               <li class="item-installments">
                  <span class="header-item-catalog color-5A9523">Шаг 3</span>
                  <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/request.0b949d56.jpg" alt="images"></div>
                  <p class="title-item-installments"><span class="bold-text">Подайте заявку </span>и получите компенсацию <span class="bold-text">-35%</span></p>
               </li>
            </ul>
         </div>
      </div>
   </section>
   <section class="section-credit-terms">
      <div class="container">
         <h2 class="title-section mt-2">Покупайте Окна в Кредит на Самых Выгодных Условиях</h2>
         <p>Приобрести товар с отсроченным платежом могут все жители Киева и Киевской области в возрастной категории от 21 до 65 лет.
             Наша компания предлагает своим клиентам выгодные условия сотрудничества,
             которые в полной мере способны удовлетворить даже самого требовательного покупателя.
             Покупка оконных металлопластиковых конструкций позволит воплотить мечты в реальность, сделать свой дом уютным и комфортным.</p>
         <ul class="list-item-installments mt-4">
            <li class="item-installments">
               <span class="header-item-catalog color-2792DE">Выбор банков</span>
               <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/cards.fd0aecd0.jpg" alt="images"></div>
               <p class="title-item-installments">Мы работаем с банками у которых самые оптимальные и выгодные для наших клиентов условия кредитования</p>
            </li>
            <li class="item-installments">
               <span class="header-item-catalog color-2792DE">Минимум документов</span>
               <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/doc.20a1bbf7.jpg" alt="images"></div>
               <p class="title-item-installments">Всё что вам нужно это паспорт и идентификационный код</p>
            </li>
            <li class="item-installments">
               <span class="header-item-catalog color-2792DE">Максимальные сроки кредитования</span>
               <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/min-time.a5b6b4a3.jpg" alt="images"></div>
               <p class="title-item-installments">Срок кредитования до 36 месяцев</p>
            </li>
            <li class="item-installments">
               <span class="header-item-catalog color-2792DE">Быстро</span>
               <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/speed.ed8dab23.jpg" alt="images"></div>
               <p class="title-item-installments">Оформление кредита на покупку займет не более 15 минут</p>
            </li>
            <li class="item-installments">
               <span class="header-item-catalog color-2792DE px-3">Выбор кредитной прогpаммы</span>
               <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/credit-prog.e2fbcaa3.jpg" alt="images"></div>
               <p class="title-item-installments">Мы подберем под вас самую лучшую кредитную программу</p>
            </li>
            <li class="item-installments">
               <span class="header-item-catalog color-2792DE">Досрочное погашения</span>
               <div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/money.34524e3e.jpg" alt="images"></div>
               <p class="title-item-installments">Возможность бесплатного досрочного погашения кредита не платя %</p>
            </li>
         </ul>
      </div>
   </section>
   <section class="section-installments-form bg-welcome-page-installments-form">
      <div class="container">
         <div>
            <h2 class="title-section">Окна в Кредит</h2>
            <ul class="list-info-bank">
               <li class="item-info-bank">
                  <div class="block-item-info-bank">
                     <span class="icon icon-privat"></span>
                     <h5 class="title">Годовая % ставка: 24.9</h5>
                     <ul class="list-start-credit">
                        <li>Первоначальный взнос 3 %</li>
                        <li>Максимальная сумма 100 000 грн.</li>
                        <li>Срок кредитования до 24 мес.</li>
                        <li>Льготный период 3 мес.</li>
                        <li>Ежемесячная комиссия 0 %</li>
                        <li>Единоразовая комиссия 2.9 %</li>
                        <li>Обеспечение: Без залога</li>
                     </ul>
                  </div>
                  <a href="#" class="btn btn-custom-project">Получить Консультацию</a>
               </li>
               <li class="item-info-bank">
                  <div class="block-item-info-bank">
                     <span class="icon icon-alfabank"></span>
                     <h5 class="title">Годовая % ставка: 24.9</h5>
                     <ul class="list-start-credit">
                        <li>Первоначальный взнос 10 %</li>
                        <li>Максимальная сумма 50 000 грн.</li>
                        <li>Срок кредитования до 64 мес.</li>
                        <li>Льготный период 3 мес.</li>
                        <li>Ежемесячная комиссия 1 %</li>
                        <li>Единоразовая комиссия 0 %</li>
                        <li>Обеспечение: Без залога</li>
                     </ul>
                  </div>
                  <a href="#" class="btn btn-custom-project">Получить Консультацию</a>
               </li>
               <li class="item-info-bank">
                  <div class="block-item-info-bank">
                     <span class="icon icon-monobank"></span>
                     <h5 class="title">Годовая % ставка: 24.9</h5>
                     <ul class="list-start-credit">
                        <li>Первоначальный взнос 5 %</li>
                        <li>Максимальная сумма 100 000 грн.</li>
                        <li>Срок кредитования до 36 мес.</li>
                        <li>Льготный период 2 мес.</li>
                        <li>Ежемесячная комиссия 1 %</li>
                        <li>Единоразовая комиссия 2.9 %</li>
                        <li>Обеспечение: Без залога</li>
                     </ul>
                  </div>
                  <a href="#" class="btn btn-custom-project">Получить Консультацию</a>
               </li>
            </ul>
         </div>
         <div class="block-form">
            <h2 class="title-section">Отправьте Заявку <span class="d-block small-title">и Получите Бесплатно на Выбор</span></h2>
            <div class="d-md-flex">
               <div>
                  <div class="form">
                     <h2 class="title-form">Оставьте заявку на консультацию менеджера</h2>
                     <form class="call-back-form">
                        <div class="form-group"><label><input name="your-name" class="form-control" placeholder="Ваше имя*"></label></div>
                        <div class="form-group"><label><input name="tel-460" class="form-control" placeholder="Телефон*"></label></div>
                        <div class="form-group"><label><textarea name="your-message" class="form-control" rows="3" placeholder="Комментарий"></textarea></label></div>
                        <button type="submit" class="btn btn-success">Получить консультацию</button>
                     </form>
                     <p class="mt-3 text-form">Экономьте время, звоните прямо сейчас!</p>
                     <a href="#" class="phone">0 800 211 052 </a><span class="text-bottom">Бесплатные звонки по всей территории Украины</span>
                  </div>
               </div>
               <ul class="list-present">
                  <li class="item">
                     <div class="title-present"><span>Бесплатно</span></div>
                     <div class="img-block"><img src="<?php bloginfo('template_url') ?>/images/mosquito-grid-2.7caf262a.jpg" class="img-fluid" alt="photo-present"></div>
                     <div class="footer-item"><span>Москитная сетка</span> <span class="bg-price price">oт <span class="cross-text">200 грн</span></span></div>
                  </li>
                  <li class="item">
                     <div class="title-present"><span>Бесплатно</span></div>
                     <div class="img-block"><img src="<?php bloginfo('template_url') ?>/images/child-blocker.12cea12f.jpg" class="img-fluid" alt="photo-present"></div>
                     <div class="footer-item"><span>Детский блокиратор</span> <span class="bg-price price">oт <span class="cross-text">220 грн</span></span></div>
                  </li>
                  <li class="item">
                     <div class="title-present"><span>Бесплатно</span></div>
                     <div class="img-block"><img src="<?php bloginfo('template_url') ?>/images/defence-hacking.01f80627.jpg" class="img-fluid" alt="photo-present"></div>
                     <div class="footer-item"><span>Защита от взлома</span> <span class="bg-price price">oт <span class="cross-text">340 грн</span></span></div>
                  </li>
                  <li class="item">
                     <div class="title-present"><span>Бесплатно</span></div>
                     <div class="img-block"><img src="<?php bloginfo('template_url') ?>/images/windows-ebb.e0c716f1.jpg" class="img-fluid" alt="photo-present"></div>
                     <div class="footer-item"><span>Отливы</span> <span class="bg-price price">oт <span class="cross-text">150 грн</span></span></div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>
    <section class="section-post section-post-windows section-other-type-windows  post-border-none">
        <div class="container">
            <h2 class="title-section">Что нужно знать перед оформлением</h2>
            <div class="text-custom-page">
                <p>Чтобы купить пластиковые окна в кредит или рассрочку, необходимо:</p>
                <ol>
                    <li>Сделать звонок или связаться с менеджером-консультантом на сайте.</li>
                    <li>Оставить заявку на осуществление замера или сообщить специалисту компании о самостоятельно произведенных расчетах.
                        При оформлении заявки онлайн нужно заполнить все указанные поля.
                        Правильное заполнение короткой формы необходимо для обратной связи менеджера с клиентом.</li>
                    <li>Выбрать подходящее изделие с учетом материала, профильной системы, фурнитуры, стеклопакетов, вспомогательных элементов.</li>
                    <li>Узнать стоимость оконной конструкции и перейти к оформлению заказа.</li>
                    <li>Представить необходимые документы для отсрочки платежа.</li>
                    <li>Получить окна в рассрочку.</li>
                </ol>
                <p>На окончательную цену окна в рассрочку и кредит влияет ряд факторов:</p>
                <ul>
                    <li> ·         тип материала и профиля;</li>
                    <li>·         вид и функциональные возможности оконной конструкции;</li>
                    <li>·         фурнитура;</li>
                    <li>·         разновидность стеклопакета и установленного стекла</li>
                    <li>·         цвет и способы декорирования;</li>
                    <li>·         наличие дополнительных элементов (подоконников, откосов, отливов, ручек, москитных сеток, защиты от случайного выпадения
                        детей и животных).</li>
                </ul>
                <p>
                    Итоговая сумма оконной конструкции будет известна только после осуществления необходимых замеров с учетом особенностей помещения.
                </p>
                <p>
                    Компания «Windows Group» предлагает заказать в Украине металлопластиковые окна в рассрочку или кредит без банка. Мы гарантируем широкий ассортимент качественного товара от лучших оконных изготовителей.
                </p>
                <p>
                    Покупатели могут возвращать денежные средства равными частями в течение определенного времени. Также существует возможность досрочного погашения рассрочки. За долговременное закрытие кредита штрафные санкции не предусматриваются.
                </p>
                <p>
                    Узнать ориентировочные цены на евроокна и стеклопакеты в рассрочку от производителя можно на сайте или позвонить по указанному телефону.
                </p>
            </div>
        </div>
    </section>
   <a id="button"></a>
</div>

<?php
get_footer();
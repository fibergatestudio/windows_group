<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package windowsgroup
 */

?>

<?php
/*$sender = 'testmail@somedomain.tld';
$recipient = 'filimonenkovyacheslav@gmail.com';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}*/
?>

<?php

echo do_shortcode('[contact-form-7 id="345" title="Контактна форма 1"]');

if (!empty($_POST)) {
    header('location:'.'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}

?>

<!-- Modal -->
<button id="get-discount-button" type="button" class="m-4 btn btn-primary" data-toggle="modal" data-target="#exampleModalSale" style="display: none;">Получить Скидку</button>
<div class="modal fade" id="exampleModalSale" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="form">
                    <h2 class="title-form">ПОЛУЧИТЬ СКИДКУ</h2>
                    <form class="get-discount-form modal-form">
                        <div class="form-group"><label for="exampleInputName3-footer"><input name="your-name" class="form-control" id="exampleInputName3-footer" placeholder="Ваше имя*"></label></div>
                        <div class="form-group"><label for="exampleInputPhone3-footer"><input name="tel-460" class="form-control" id="exampleInputPhone3-footer" placeholder="Ваш телефон*"></label></div>
                        <div class="form-group"><label><input name="your-message" class="form-control" placeholder="Количество окон"></label></div>
                        <button type="submit" class="btn btn-custom-project">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<button id="call-back-button" type="button" class="m-4 btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="display: none;">ОСТАВЬТЕ ЗАЯВКУ НА ОБРАТНЫЙ ЗВОНОК</button>
<div class="modal fade" id="exampleModal" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="form">
                    <h2 class="title-form">ОСТАВЬТЕ ЗАЯВКУ НА ОБРАТНЫЙ ЗВОНОК</h2>
                    <form class="call-back-form modal-form">
                        <div class="form-group"><label for="exampleInputName2"><input class="form-control" id="exampleInputName2" name="your-name" placeholder="Ваше имя*"></label></div>
                        <div class="form-group"><label for="exampleInputPhone2"><input class="form-control" id="exampleInputPhone2" name="tel-460" placeholder="Телефон*"></label></div>
                        <div class="form-group"><label><input class="form-control" name="your-message" placeholder="Удобное время для звонка"></label></div>
                        <button type="submit" class="btn btn-custom-project">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<button id="free-measurement-button" type="button" class="m-4 btn btn-primary" data-toggle="modal" data-target="#exampleModal-2" style="display: none;">ЗАЯВКУ НА БЕСПЛАТНЫЙ ЗАМЕР</button>
<div class="modal fade" id="exampleModal-2" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="form">
                    <h2 class="title-form">ЗАЯВКУ НА БЕСПЛАТНЫЙ ЗАМЕР</h2>
                    <form class="free-measurement-form modal-form">
                        <div class="form-group"><label><input class="form-control" name="your-name" placeholder="Ваше имя*"></label></div>
                        <div class="form-group"><label><input class="form-control" name="tel-460" placeholder="Телефон*"></label></div>
                        <div class="form-group"><label><textarea class="form-control" rows="2" name="your-message" placeholder="Комментарий"></textarea></label></div>
                        <button type="submit" class="btn btn-custom-project">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<button id="success-send-button" type="button" class="m-4 btn btn-primary" data-toggle="modal" data-target="#exampleModal-3" style="display: none;">Ваша заявка отправлена!</button>
<div class="modal thank fade" id="exampleModal-3" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="form">
                    <img src="<?php bloginfo('template_url') ?>/images/email.a5d17883.svg" class="img-fluid" alt="photo-product1">
                    <h2 class="text-modal">Ваша заявка отправлена!</h2>
                    <h2 class="text-modal">Наш специалист скоро свяжется с вами</h2>
                    <button id="success-send-button-after" class="btn btn-custom-project">Вернуться на сайт</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<footer class="footer">
    <div class="container block-footer">
        <div class="block-1">
            <a href="<?=get_bloginfo('home')?>"><img src="<?php bloginfo('template_url') ?>/images/logo-footer.5eefe256.svg" class="img-fluid" alt=""></a>
            <p>Кредиты и рассрочка 0% от банков:</p>
            <ul class="list-bank d-flex">
                <li class="item-bank"><img src="<?php bloginfo('template_url') ?>/images/bank-alfa.f1729244.png" class="img-fluid block-item-brand bank-alfa" alt="photo-bank"></li>
                <li class="item-bank"><img src="<?php bloginfo('template_url') ?>/images/bank-privat-1.609f4586.svg" class="img-fluid block-item-brand bank-privat" alt="photo-bank"></li>
                <li class="item-bank"><img src="<?php bloginfo('template_url') ?>/images/bank-mono-1.d73bdf13.svg" class="img-fluid block-item-brand bank-mono" alt="photo-bank"></li>
            </ul>
            <ul class="menu-footer cities">
                <li><a href="<?=get_bloginfo('home')?>/plastikovye-okna-v-borispole/">Борисполь</a></li>
                <li><a href="<?=get_bloginfo('home')?>/plastikovye-okna-v-beloy-tserkvi/">Белая Церковь</a></li>
                <li><a href="<?=get_bloginfo('home')?>/plastikovye-okna-v-brovarakh/">Бровары</a></li>
                <li><a href="<?=get_bloginfo('home')?>/plastikovye-okna-v-vasilkove/">Васильков</a></li>
                <li><a href="<?=get_bloginfo('home')?>/plastikovye-okna-v-irpene/">Ирпень</a></li>                
            </ul>
        </div>
        <div class="block-2">
            <span class="title-footer">Компания</span>
            <ul class="menu-footer">
                <li><a href="#">О Нас</a></li>
                <li><a href="<?=get_bloginfo('home')?>/kontakty/">Свяжитесь с нами</a></li>
                <li><a href="#">Частые вопросы</a></li>
                <li><a href="#">Правила и условия</a></li>
                <li><a href="#" class="d-none d-md-block">Политика конфиденциальности</a></li>
            </ul>
        </div>
        <div class="block-3">
            <span class="title-footer">Наши контакты</span>
            <ul class="info">
                <li><span class="icon-location"></span>г. Киев ул. Коллекторная д. 3</li>
                <li><span class="icon-call"></span><div class="binct-phone-number-1">0 800 33 94 21</div></li>
                <!--<li><span class="icon-call"></span>(067) 818-00-50</li>
                <li><span class="icon-call"></span>(063) 686-56-78</li>-->
                <li><span class="icon-email"></span>info@windowsgroup.com.ua</li>
                <li><span class="clock-footer"></span>Пн.–Пт.: 8:00 – 18:00<br/>Сб. - Вс: ВЫХОДНОЙ</li>
            </ul>
            <div class="d-md-flex top-icon-footer">
                <div>
                    <span class="title-footer-bottom">Всегда на связи</span>
                    <ul class="list-contact">
                        <li><a href="tel:+380678180050" class="viber" rel="nofollow"></a></li>
                        <li><a href="tel:+380678180050" class="telegram" rel="nofollow"></a></li>
                        <li><a href="tel:+380678180050" class="skype" rel="nofollow"></a></li>
                    </ul>
                </div>
                <div class="block-soc">
                    <span class="title-footer-bottom">Мы в соц. сетях</span>
                    <ul class="list-soc">
                        <li><a href="https://www.facebook.com/Windows-Group-110576867768095/" class="facebook" rel="nofollow" target="_blank"></a></li>
                        <li><a href="https://www.instagram.com/windowsgroup_comp/" class="instagram" rel="nofollow" target="_blank"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <p class="container bottom-footer"><span>© 1999-2021 Windowsgroup.com.ua </span><span class="pl-lg-2">Все права защищены</span></p>
</footer>

<?php wp_footer(); ?>

<script src="https://windowsgroup.com.ua/wp-content/themes/windowsgroup/js/calculator.js"></script>
<script type="text/javascript">
(function(d, w, s) {
var widgetHash = 'raj55z3mq7ckodhjyh3g', ctw = d.createElement(s); ctw.type = 'text/javascript'; ctw.async = true;
ctw.src = '//widgets.binotel.com/calltracking/widgets/'+ widgetHash +'.js';
var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(ctw, sn);
})(document, window, 'script');
</script>
<script type="text/javascript">
  (function(d, w, s) {
var widgetHash = 'fega86lu8295jswl7jsh', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
  })(document, window, 'script');
</script> 
</body>
</html>

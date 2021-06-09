<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package windowsgroup
 */

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<meta name="google-site-verification" content="q4yOwSt2m_vtk35_G_nKgU0aaRpDfvg6Ne-XTEgSXcs" />
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?=get_bloginfo('home')?>"><i class="icon icon-logo"></i></a>
                <ul class="list-menu-top top">
                    <li class="d-none d-lg-flex"><a href="<?=get_bloginfo('home')?>/okna-v-rassrochku-i-kredit/"><span class="icon-discount"></span><span> Рассрочка 0%</span></a></li>
                    <li class="d-none d-lg-flex"><a href="<?=get_bloginfo('home')?>/akcii-i-skidki/"><span class="icon-gift"></span><span>Акции и Скидки</span></a></li>
                    <li><a href="<?=get_bloginfo('home')?>/vyzov-zamershchika/"><span class="measure_tape"></span><span class="d-none d-lg-block">Вызов Замерщика</span></a></li>
                    <li><a href="<?=get_bloginfo('home')?>/kalkulyator-okon/"><span class="icon-calculate"></span><span class="d-none d-lg-block">Калькулятор Окон</span></a></li>
                    <li><a href="<?=get_bloginfo('home')?>/kontakty/"><span class="icon-header-call"></span><span class="d-none d-lg-block">Контакты</span></a></li>
                </ul>
                <div class="phone d-none d-md-block dropdown">
                    <div class="phone-toggle"  role="list" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a class="phone-item" href="tel:0800339421"><div class="binct-phone-number-1">0 800 33 94 21</div></a></div>
                    Звонки бесплатные!
                    <!--<div class="dropdown-menu"><a class="phone-item dropdown-item" href="tel:+380445648661">(044) 564-86-61</a> <a class="phone-item dropdown-item" href="tel:+380678180050">(067) 818-00-50</a> <a class="phone-item dropdown-item" href="tel:+380636865678">(063) 686-56-78</a></div>-->
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-second">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"><span class="navbar-toggler-icon"></span> <span>Меню</span></button>

                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_class' => 'collapse navbar-collapse',
                    ) ); 
                ?>

                <div style="display: none;">
                    <ul class="list-menu-top mob d-lg-none">
                        <li><a href="<?=get_bloginfo('home')?>/okna-v-rassrochku-i-kredit/">Рассрочка 0%</a></li>
                        <li><a href="<?=get_bloginfo('home')?>/akcii-i-skidki/">Акции и Скидки</a></li>
                        <li><a href="<?=get_bloginfo('home')?>/vyzov-zamershchika/">Вызов Замерщика</a></li>
                        <li><a href="<?=get_bloginfo('home')?>/kalkulyator-okon/">Калькулятор Окон</a></li>
                        <li><a href="<?=get_bloginfo('home')?>/kontakty/">Контакты</a></li>
                    </ul>
                </div>
                <div class="phone d-md-none dropdown">
                    <div class="phone-toggle" role="list" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="binct-phone-number-1"><a class="phone-item" href="tel:0800339421">0 800 33 94 21</a></span></div>
                    <!--<div class="dropdown-menu"><a class="phone-item dropdown-item" href="tel:+380445648661">(044) 564-86-61</a> <a class="phone-item dropdown-item" href="tel:+380678180050">(067) 818-00-50</a> <a class="phone-item dropdown-item" href="tel:+380636865678">(063) 686-56-78</a></div>-->
                </div>
            </div>
        </nav>
    </header>
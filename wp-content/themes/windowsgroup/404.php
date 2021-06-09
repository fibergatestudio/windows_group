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
   <section class="section-unlinking page-404">
      <div class="container">
         <h1 class="title-section-404">404</h1>
         <h2 class="section-404">Страница не найдена</h2>
         <h4 class="section-text-404">Этой страницы не существует или она потерялась. Но Вы всегда можете <a href="<?=get_bloginfo('home')?>"> вернуться на главную!</a></h4>
      </div>
   </section>
</div>

<?php
get_footer();

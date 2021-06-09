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

<div class="main page-sales">
	<div class="container">
		<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
	</div>
	<section class="section-other-section sales">
		<div class="container">
			<ul class="list-item-catalog colum-4">
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<a href="<?=get_bloginfo('home')?>/plastikovye-okna" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/plastikovye-okna.8caa82bf.webp" class="img-fluid" alt="photo-product1"></a>
						<div class="footer-item-catalog"><span class="price price-1 border-blue">Окна</span></div>
					</div>
				</li>
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<a href="<?=get_bloginfo('home')?>/plastikovye-dveri" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/metalloplastikovye-dveri.79c6c78c.webp" class="img-fluid" alt="photo-product1"></a>
						<div class="footer-item-catalog"><span class="price price-1 border-blue">Двери</span></div>
					</div>
				</li>
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<a href="<?=get_bloginfo('home')?>/balkony-pod-klyuch" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/balcony-key.763c73ab.webp" class="img-all img-fluid" alt="photo-product1"></a>
						<div class="footer-item-catalog"><span class="price price-1 border-blue">Балкон под ключ</span></div>
					</div>
				</li>
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<a href="<?=get_bloginfo('home')?>/peregorodki" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/steklyannye-peregorodki.e3d3cd7d.webp" class="img-all img-fluid" alt="photo-product1"></a>
						<div class="footer-item-catalog"><span class="price border-blue">Стеклянные перегородки</span></div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="section-post">
		<div class="container">
			<h2 class="title-section"></h2>
			<p>Компания «Виндовс Груп» предлагает лучшие акции на окна в Киеве и Киевской области. В каталоге представлены популярные модели пластиковых окон по выгодным ценам от производителя.</p>
			<h2 class="title-post">Достоинства пластиковых изделий</h2>
			<div class="text-custom-page">
				<p>Конструкции из пластика уже много лет пользуются спросом у потребителей. Модели отлично подходят для установки в домах, квартирах, административных и промышленных помещениях.</p>
				<p>Изделия характеризуются рядом преимуществ:</p>
				<ul>
					<li>· доступной стоимостью;</li>
					<li>· безопасностью;</li>
					<li>· энергоэффективностью;</li>
					<li>· повышенной тепло- и звукоизоляцией.</li>
				</ul>
				<h2 class="title-post">Акции на окна ПВХ</h2>
				<p>Мы готовы предложить самые низкие цены на продукцию, напрямую от известных производителей:</p>
				<ul>
					<li>· Rehau;</li>
					<li>· Salamander;</li>
					<li>· Kbe;</li>
					<li>· Wds;</li>
					<li>· Viknalend;</li>
					<li>· Века;</li>
					<li>· Алюпласт;</li>
					<li>· Опентек.</li>
				</ul>
				<p>У нас действуют акции на установку пластиковых окон, при условии обязательного заказа изделия в «Виндовс Груп».</p>
				<h2 class="title-post">Преимущества заказа</h2>
				<p>Заказывая товары в нашей компании «Windows Group», Вы получите:</p>
				<ol>
					<li>Бесплатный замер и профессиональную консультацию.</li>
					<li>Быстрое и качественное изготовление.</li>
					<li>Доставку в указанные сроки.</li>
					<li>Монтаж по ГОСТу.</li>
					<li>Гибкие условия оплаты.</li>
					<li>Гарантийное обслуживание.</li>
				</ol>
				<p>Эскиз будущего изделия составляется с учетом особенностей помещения для установки и личных пожеланий клиента.</p>
				<p>Мы предлагаем заказать пластиковые оконные конструкции стандартной и нестандартной формы, в любом цветовом исполнении.</p>
				<p>Желаете узнать стоимость окна ПВХ по акции со скидкой? Оставьте номер для обратной связи на сайте или позвоните по указанным телефонам.</p>
			</div>
		</div>
	</section>
	<a id="button"></a>
</div>

<?php
get_footer();

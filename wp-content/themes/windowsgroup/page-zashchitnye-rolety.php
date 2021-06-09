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

<div class="main page-roller">
	<section class="section-welcome-page bg-welcome-page-roller">
		<div class="container">
			<div class="text-welcome">
				<h1>Защитные ролеты</h1>
			</div>
		</div>
	</section>
	<section class="section-top-post">
		<div class="container">
			<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
			<h2 class="title-post-top my-3 my-lg-0 title-post-top">Защитные ролеты</h2>
			<p class="text-custom-page">Рольставни являются оптимальным решением для комплексной защиты различных помещений – от гаража до торговых центров.
                Защитные конструкции отлично справляются со своими заявленными функциями.
                Наша компания «Виндовс Груп» предлагает купить защитные ролеты в Киеве и Киевской области по выгодным ценам.</p>
		</div>
		<div class="section-place-of-use">
			<div class="container">
				<h2 class="title-section mb-3">Места Применения</h2>
				<ul class="list-item-catalog colum-3 balcone">
					<li class="item-catalog page">
						<div class="block-item-catalog">
							<div class="header-item-catalog">На Окна</div>
							<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-place-of-use.0ec68e01.jpg" class="img-fluid" alt="photo-product1"></a>
						</div>
						<div class="footer-item-catalog">
							<div class="price max"><span class="text">от</span> <span>800</span> <span class="text">грн</span></div>
						</div>
					</li>
					<li class="item-catalog page">
						<div class="block-item-catalog">
							<div class="header-item-catalog">На Двери</div>
							<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-place-of-use-2.b37aebd7.jpg" class="img-fluid" alt="photo-product1"></a>
						</div>
						<div class="footer-item-catalog">
							<div class="price max"><span class="text">от</span> <span>1100</span> <span class="text">грн</span></div>
						</div>
					</li>
					<li class="item-catalog page">
						<div class="block-item-catalog">
							<div class="header-item-catalog">На Ворота</div>
							<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-place-of-use-3.793a2a25.jpg" class="img-fluid" alt="photo-product1"></a>
						</div>
						<div class="footer-item-catalog">
							<div class="price max"><span class="text">от</span> <span>2600</span> <span class="text">грн</span></div>
						</div>
					</li>
					<li class="item-catalog page">
						<div class="block-item-catalog">
							<div class="header-item-catalog">На МАФ</div>
							<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-place-of-use-4.3f645ddc.jpg" class="img-fluid" alt="photo-product1"></a>
						</div>
						<div class="footer-item-catalog">
							<div class="price max"><span class="text">от</span> <span>1100</span> <span class="text">грн</span></div>
						</div>
					</li>
					<li class="item-catalog page">
						<div class="block-item-catalog">
							<div class="header-item-catalog">В Помещении</div>
							<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-place-of-use-5.6fc4f1b3.jpg" class="img-fluid" alt="photo-product1"></a>
						</div>
						<div class="footer-item-catalog">
							<div class="price max"><span class="text">от</span> <span>900</span> <span class="text">грн</span></div>
						</div>
					</li>
					<li class="item-catalog page">
						<div class="block-item-catalog">
							<div class="header-item-catalog">Сантехнические Ролеты</div>
							<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-place-of-use-6.bfcdc152.jpg" class="img-fluid" alt="photo-product1"></a>
						</div>
						<div class="footer-item-catalog">
							<div class="price max"><span class="text">от</span> <span>900</span> <span class="text">грн</span></div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="section-preference-roller">
		<div class="container">
			<h2 class="title-section">Преимущества Защитных Ролет</h2>
			<ul class="list-preference-roller">
				<li class="item-preference-roller">
					<div class="block-preference-roller"><i class="icon-preference-roller safety"></i></div>
					<div>
						<span class="title">Безопастность</span>
						<p class="px-lg-5">Ролеты надежно защищают помещение от взлома и грабежа</p>
					</div>
				</li>
				<li class="item-preference-roller">
					<div class="block-preference-roller"><i class="icon-preference-roller icon-snow"></i></div>
					<div>
						<span class="title">Теплосбережение</span>
						<p>Обладают отличными термоизоляционными свойствами, благодаря чему эффективно защищают от холода и сохраняют тепло в помещении в зимнее время года</p>
					</div>
				</li>
				<li class="item-preference-roller">
					<div class="block-preference-roller"><i class="icon-preference-roller icon-wind"></i></div>
					<div>
						<span class="title">Защита от непогоды</span>
						<p>Полностью защищают помещение от ветра, дождя, града и прочих негативных внешних факторов</p>
					</div>
				</li>
				<li class="item-preference-roller">
					<div class="block-preference-roller"><i class="icon-preference-roller icon-sun"></i></div>
					<div>
						<span class="title">Защита от солнца</span>
						<p>Сохраняют прохладу летом внутри помещения, препятствуют выгоранию мебели, стен, пола и элементов декора</p>
					</div>
				</li>
				<li class="item-preference-roller">
					<div class="block-preference-roller"><i class="icon-preference-roller icon-like-roller"></i></div>
					<div>
						<span class="title">Универсальный дизайн и комфорт в использовании</span>
						<p>Благодаря широкому выбору цветов, материалов, способов монтажа, можно подобрать ролеты, которые идеально подойдут к наружному экстерьеру вашего помещения</p>
					</div>
				</li>
				<li class="item-preference-roller">
					<div class="block-preference-roller"><i class="icon-preference-roller icon-enable-sound"></i></div>
					<div>
						<span class="title">Защита от шума</span>
						<p class="px-lg-5">Отлично подавляют любой наружный шум</p>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="section-form-page-windows page-roller">
		<div class="container d-md-flex">
			<img src="<?php bloginfo('template_url') ?>/images/img-form-glass.0d0ab5cc.png" class="d-none d-lg-block img-form img-fluid" alt="photo">
			<div class="block-form-page-windows">
				<h2 class="title-section">ОСТАВЬТЕ ЗАЯВКУ НА БЕСПЛАТНЫЙ ЗАМЕР</h2>
				<form class="form-page-windows free-measurement-form">
					<div class="form-group"><label><input class="form-control text-center text-lg-left" name="your-name" id="exampleInputName" placeholder="Ваше имя*"></label></div>
					<div class="form-group"><label><input class="form-control text-center text-lg-left" name="tel-460" id="exampleInputPhone" placeholder="Телефон*"></label></div>
					<div class="form-group"><label><input type="email" name="your-message" class="form-control text-center text-lg-left" id="exampleInputEmail" placeholder="E-mail"></label></div>
					<button type="submit" class="mt-2 btn btn-more">Отправить</button>
					<p class="">Рассчитаем стоимость ваших защитных ролет за 15 минут</p>
				</form>
			</div>
		</div>
	</section>
	<section class="section-profile-type">
		<div class="container">
			<h2 class="title-section">Выбираем Профиль</h2>
			<p>В зависимости от поставленной задачи, приёма и помещения нужно правильно выбрать профиль защитного ролета. Каждый профиль имеет свою степень защиты от взлома, но и что не мало важно, защиту от непогоды, холода и шума.</p>
			<ul class="profile-type-list">
				<li class="profile-type-item">
					<h2 class="profile-type-title">Пенозаполненный</h2>
					<div class="profile-type-preview"><img src="<?php bloginfo('template_url') ?>/images/profile-type-1.94e3d98d.jpeg" alt="Profile type 1" class="img-fluid"/></div>
					<div class="profile-type-price">от <span>3000</span> грн.</div>
					<p class="profile-type-description">Данный профиль изготавливается из полосок металла, обработанных роликовой системой после чего заполняется пенополиуретаном. Основные свойства: легкость, жесткость и прочность. Помимо защитных данных, имеет также отличную звуко- и теплоизоляцию.</p>
					<ul class="profile-type-preferences">
						<li>
							<h6>Защита от взлома</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"><span>95%</span></div>
							</div>
						</li>
						<li>
							<h6>Экономия энергии</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>25%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от солнца</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span>100%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от шума</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от непогоды</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"><span>95%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от холода</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span>85%</span></div>
							</div>
						</li>
					</ul>
				</li>
				<li class="profile-type-item">
					<h2 class="profile-type-title">Экструдированный</h2>
					<div class="profile-type-preview"><img src="<?php bloginfo('template_url') ?>/images/profile-type-2.c4be4125.jpeg" alt="Profile type 1" class="img-fluid"/></div>
					<div class="profile-type-price">от <span>4500</span> грн.</div>
					<p class="profile-type-description">Изготавливается из сплава алюминия под действием высокой температуры. Преимущества данного профиля - высокая степень защиты, так-как используются ребра жесткости. Но в тоже время профиль имеет плохую изоляцию.</p>
					<ul class="profile-type-preferences">
						<li>
							<h6>Защита от взлома</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span>80%</span></div>
							</div>
						</li>
						<li>
							<h6>Экономия энергии</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 18%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span>18%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от солнца</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span>100%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от шума</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span>80%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от непогоды</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от холода</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"><span>68%</span></div>
							</div>
						</li>
					</ul>
				</li>
				<!-- <li class="profile-type-item">
					<h2 class="profile-type-title">Решетчатый</h2>
					<div class="profile-type-preview"><img src="<?php bloginfo('template_url') ?>/images/profile-type-3.4fb01686.jpeg" alt="Profile type 1" class="img-fluid"/></div>
					<div class="profile-type-price">от <span>9999</span> грн.</div>
					<p class="profile-type-description">Решетчатый профиль в отличии от других, подойдет если вам необходим визуальный контакт за пределами ролета. Обладает хорошими защитными качествами, прост в эксплуатации. Не защищает от звуков, непогоды и холода.</p>
					<ul class="profile-type-preferences">
						<li>
							<h6>Защита от взлома</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
							</div>
						</li>
						<li>
							<h6>Экономия энергии</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><span>0%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от солнца</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span>50%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от шума</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"><span>5%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от непогоды</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"><span>15%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от холода</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><span>0%</span></div>
							</div>
						</li>
					</ul>
				</li>
				<li class="profile-type-item">
					<h2 class="profile-type-title">Стальной Одностенный</h2>
					<div class="profile-type-preview"><img src="<?php bloginfo('template_url') ?>/images/profile-type-4.b550dab2.jpg" alt="Profile type 1" class="img-fluid"/></div>
					<div class="profile-type-price">от <span>9999</span> грн.</div>
					<p class="profile-type-description">Преимущества данного ролета в высокой прочности и небольших размерах, что позволяет отлично защищать небольшие проемы и занимает минимум места не сильно перекрывая световой проем.</p>
					<ul class="profile-type-preferences">
						<li>
							<h6>Защита от взлома</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 99%;" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"><span>99%</span></div>
							</div>
						</li>
						<li>
							<h6>Экономия энергии</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 18%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><span>18%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от солнца</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span>100%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от шума</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><span>70%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от непогоды</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"><span>95%</span></div>
							</div>
						</li>
						<li>
							<h6>Защита от холода</h6>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span>50%</span></div>
							</div>
						</li>
					</ul>
				</li> -->
			</ul>
		</div>
	</section>
	<section class="section-control-method">
		<div class="container">
			<h2 class="title-section">Выбираем Способ Управления</h2>
			<p>Управление рольставнями делится на ручное (механическое) или автоматизированное (при помощи электропривода). При механическом способе используются физические усилия, при автоматизированном способе регулировка ставней осуществляется пультом дистанционного управления.</p>
			<ul class="list-control-method">
				<li>
					<h2 class="d-md-none title-block">Пружинно-инерционный механизм</h2>
					<div class="block-left">
						<div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-control-method.7cb76896.jpg" class="img-fluid" alt="photo"></div>
						<div class="footer-item-catalog">
							<div class="price max"><span class="text">от</span> <span>540</span> <span class="text">грн</span></div>
						</div>
					</div>
					<div>
						<h2 class="d-none d-md-block title-block">Пружинно-инерционный механизм</h2>
						<p>При пружинно-инерционном механизме рольставни опускаются посредством скручивании пружины. Движение осуществляется вручную – внизу располагается ручка, дернув за которую ролеты открываются и закрываются.</p>
					</div>
				</li>
				<li>
					<h2 class="d-md-none title-block">Ленточный привод</h2>
					<div class="block-left">
						<div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-control-method-2.ab7c2599.jpg" class="img-fluid" alt="photo"></div>
						<div class="footer-item-catalog">
							<div class="price max"><span class="text">от</span> <span>300</span> <span class="text">грн</span></div>
						</div>
					</div>
					<div>
						<h2 class="d-none d-md-block title-block">Ленточный привод</h2>
						<p>Поднятие рольставней производится посредством вытягивания специального троса. В результате такой манипуляции вал движется, обеспечивая открытие ролетов.</p>
					</div>
				</li>
				<li>
					<h2 class="d-md-none title-block">Шнуровой редукторный привод</h2>
					<div class="block-left">
						<div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-control-method-3.17099396.jpg" class="img-fluid" alt="photo"></div>
						<div class="footer-item-catalog">
							<div class="price max"><span class="text">от</span> <span>600</span> <span class="text">грн</span></div>
						</div>
					</div>
					<div>
						<h2 class="d-none d-md-block title-block">Шнуровой редукторный привод</h2>
						<p>Для функционирования редукторного привода в помещение монтируется специальный шнуровой укладчик – барабанный редуктор с ручкой. Для управления полотном на укладчике вращается ручка по часовой или против часовой стрелке.</p>
					</div>
				</li>
				<li>
					<h2 class="d-md-none title-block">Воротковый привод</h2>
					<div class="block-left">
						<div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-control-method-4.de7f6b93.jpg" class="img-fluid" alt="photo"></div>
						<div class="footer-item-catalog">
							<div class="price max"><span class="text">от</span> <span>1650</span> <span class="text">грн</span></div>
						</div>
					</div>
					<div>
						<h2 class="d-none d-md-block title-block">Воротковый привод</h2>
						<p>Управление воротковым приводом осуществляется посредством вращения ручки по часовой, либо против часовой стрелки. В стену монтируется металлический стержень, а внутри помещения – длинная алюминиевая ручка. Воротковый привод не имеет гибких элементов, в сравнении с ленточным и шнуровым является более надежным.</p>
					</div>
				</li>
				<li>
					<h2 class="d-md-none title-block">Автоматический электро-привод</h2>
					<div class="block-left">
						<div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-control-method-5.cb7f404b.jpg" class="img-fluid" alt="photo"></div>
						<div class="footer-item-catalog">
							<div class="price max"><span class="text">от</span> <span>3000</span> <span class="text">грн</span></div>
						</div>
					</div>
					<div>
						<h2 class="d-none d-md-block title-block">Автоматический электро-привод</h2>
                        <p>Поднимать и опускать рольставни можно с помощью выключателя, либо стационарного или переносного пульта дистанционного управления. Дополнительно ролеты могут оснащаться системой аварийного открытия в случае в случае электричества. </p>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="section-type-box">
		<div class="container">
			<h2 class="title-section">Выбираем Короб</h2>
			<p>Различаются следующие виды короба для ролетов:</p>
            <ul class="list-page-disc">
                <li>круглый;</li>
                <li>полукруглый;</li>
                <li>со срезом на 45 градусов.</li>
            </ul>
            <p>Короб является одним из важнейших элементов рольставни, он защищает полотно и механизм от загрязнений.</p>
			<ul class="list-item-catalog colum-3">
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<div class="header-item-catalog">Короб Круглый</div>
						<div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-type-box.cdd911e3.jpg" class="img-fluid" alt="photo-product1"></div>
						<p>Круглые коробы для рольставней идеально подчеркнут плавность линий и гармоничность всех фасадных элементов. Короб такой формы рекомендуется устанавливать в арочных проемах. Конструкции отличаются простотой установки и экономией пространства.</p>
					</div>
					<div class="footer-item-catalog">
						<!-- <div class="price max border-blue"><span class="text">от</span> <span>9999</span> <span class="text">грн / м<sup>2</sup></span></div> -->
					</div>
				</li>
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<div class="header-item-catalog">Короб Полукруглый</div>
						<div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-type-box-2.56f4a55e.jpg" class="img-fluid" alt="photo-product1"></div>
                        <p>Полукруглые коробы для рольставней идеально сочетаются с различными вариантами оформления фасадов, не нарушая общего архитектурного стиля. Монтаж полукруглых коробов обеспечивает надежную и эффективную защиту ролетов от неисправностей и поломок.</p>
					</div>
					<div class="footer-item-catalog">
						<!-- <div class="price max border-blue"><span class="text">от</span> <span>9999</span> <span class="text">грн / м<sup>2</sup></span></div> -->
					</div>
				</li>
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<div class="header-item-catalog">Короб 45<sup>0</sup></div>
						<div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-type-box-3.1e609e24.jpg" class="img-fluid" alt="photo-product1"></div>
                        <p>Квадратный короб со срезом под 45 градусов используется со всеми разновидностями профиля, является классическим решением для зданий со строгими архитектурными элементами. </p>
					</div>
					<div class="footer-item-catalog">
						<!-- <div class="price max border-blue"><span class="text">от</span> <span>9999</span> <span class="text">грн / м<sup>2</sup></span></div> -->
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="section-installation-method">
		<div class="container">
			<h2 class="title-section">Способ Монтажа</h2>
            <p>Различается несколько способов монтажа рольставней:</p>
            <ul class="list-page-disc">
                <li>накладной;</li>
                <li>встроенный;</li>
                <li>комбинированный;</li>
                <li>монтаж коробом внутрь.</li>
            </ul>
            <p>Грамотный монтаж ролетов обеспечивает энергосбережение, защиту помещения от взлома, шума, а также придает зданию солидный внешний вид.</p>
            <ul class="list-item-catalog colum-2">
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<div class="header-item-catalog">Накладной Монтаж</div>
						<div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-installation-method-1.c0a9ecad.jpg" class="img-fluid" alt="photo-product1"></div>
						<p>Наружный или накладной монтаж не требует изготовления ниши для размещения короба. Короб с полотном устанавливается непосредственно над проемом, а направляющие рейки размещаются возле него. Накладная установка применяется для зданий с уже установленными оконными конструкциями. Наружный способ подходит для монтажа любых типов привода.</p>
					</div>
				</li>
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<div class="header-item-catalog">Встроенный Монтаж</div>
						<div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-installation-method-2.2d75c1b2.jpg" class="img-fluid" alt="photo-product1"></div>
						<p>При встроенном монтаже короб и направляющие монтируются на внутренние откосы оконного проема. Такой способ установки подходит для больших окон, поскольку задняя стенка короба и направляющие частично перекрывают световой проем. Встроенный монтаж является лучшим по взломостойкости. При встроенной установке используется электропривод, потому что выход вала приходится на стекло.</p>
					</div>
				</li>
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<div class="header-item-catalog">Комбинированный Монтаж</div>
						<div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-installation-method-3.4e20628b.jpg" class="img-fluid" alt="photo-product1"></div>
						<p>Для комбинированной установки требуется обустройство специальной выемки в верхней части оконного проема, которая предусматривается на этапе строительства или реконструкции здания. При смешанном монтаже допускается несколько вариантов фиксации направляющих и короба.</p>
					</div>
				</li>
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<div class="header-item-catalog">Монтаж коробом Внутрь</div>
						<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/img-installation-method-4.0567e963.jpg" class="img-fluid" alt="photo-product1"></a>
                        <p>Короб для рольставней, установленный внутрь, придает зданию эстетичный вид, не выступая за фасад. Обязательным условием для монтажа является такая толщина стены от наружной плоскости окна, чтобы можно было полностью спрятать короб. Установка ролетов осуществляется в торцевую часть направляющей шины, что снижает вероятность взлома конструкции. </p>
                    </div>
				</li>
			</ul>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<h2 class="title-section">Выбор Цвета</h2>
			<div class="d-lg-flex">
				<div class="block-img"><img src="<?php bloginfo('template_url') ?>/images/title-img-color-roller.dc573206.jpg" class="img-color-roller img-fluid" alt="photo-product1"></div>
				<p>Для плавного вписывания в фасад, ролеты могут быть выполнены в разных цветах. Богатая цветовая палитра позволит органично вписать в дизайн, либо контрастировать с ним. При выборе стоит помнить, что оттенки цветов на экране могут отличатся от реальных.</p>
			</div>
			<ul class="list-color-roller">
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller.c90b4cd3.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">01 Белый</span></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller-2.8db50395.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">02 Коричневый</span></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller-3.35f2cc3e.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">03 Серый</span></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller-4.7ba9ca42.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">04 Бежевый</span></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller-5.db3dc565.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">06 Небесно-синий</span></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller-6.7afff083.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">07 Красный рубин</span></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller-7.62774c99.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">08 Металлик</span></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller-8.f23ec193.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">09 Золотой дуб</span></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller-9.021452f7.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">10 Черный</span></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller-10.1c74dfd6.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">13 Антрацит</span></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller-11.e1416bea.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">13 Зеленая ель</span></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller-12.1e41fe9c.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">16 Лазурно-синий</span></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller-13.f790e991.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">20 Желтый</span></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller-14.d4629878.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">21 Кремовый</span></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller-15.a564fea5.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">22 Темно-коричневый</span></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/img-color-roller-16.7713bec0.jpg" class="img-fluid" alt="photo-product1"><span class="title-color-roller">23 Слоновая кость</span></li>
			</ul>
		</div>
	</section>
	<div class="block-form-inline">
		<div class="container">
			<form class="call-back-form">
				<div class="form-group"><label><input class="form-control" name="your-name" placeholder="Ваше имя*"></label></div>
				<div class="form-group"><label><input class="form-control" name="tel-460" placeholder="Телефон*"></label></div>
				<div class="form-group"><label><input type="email" class="form-control" name="your-message" placeholder="E-mail"></label></div>
				<button type="submit" class="btn btn-success">Перезвоните Мне</button>
			</form>
		</div>
	</div>
	<section class="section-scheme-works roller">
		<div class="container">
			<h2 class="title-section">Схема Работы</h2>
			<ul class="list-scheme-works balcone d-md-none">
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
					<span class="title">Заявка</span>
					<p>Позвоните нам или оставьте заявку на сайте</p>
				</li>
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
					<span class="title">Выезд Замерщика</span>
					<p>Согласуем удобное для вас время и дату для замера</p>
				</li>
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works calculation"></i> <span class="number-scheme-works">3</span></div>
					<span class="title">Оценка Стоимости и Заключение Договора</span>
					<p>Создадим прототип с учетом всех ваших пожеланий, просчитаем и заключим договор</p>
				</li>
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works icon-roller"></i> <span class="number-scheme-works">4</span></div>
					<span class="title">Изготовление Ролет</span>
					<p>Обычно производство занимает около 5 рабочих дней</p>
				</li>
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">5</span></div>
					<span class="title">Доставка и Монтаж</span>
					<p>Заранее сообщим о готовности вашего заказа, согласуем удобную дату и время, привезем и установим ваши ролеты</p>
				</li>
			</ul>
			<ul class="list-scheme-works-lg d-none d-md-flex">
				<li class="">
					<span class="title">Заявка</span>
					<p class="px-5 mx-lg-3">Позвоните нам или оставьте заявку на сайте</p>
					<div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
				</li>
				<li class="">
					<span class="title px-4">Оценка Стоимости и Заключение Договора</span>
					<p class="px-2">Создадим прототип с учетом всех ваших пожеланий, просчитаем и заключим договор</p>
					<div class="block-scheme-works"><i class="icon-scheme-works calculation"></i> <span class="number-scheme-works">3</span></div>
				</li>
				<li class="">
					<span class="title">Доставка и Монтаж</span>
					<p class="px-2">Заранее сообщим о готовности вашего заказа, согласуем удобную дату и время, привезем и установим ваши ролеты</p>
					<div class="block-scheme-works"><i class="icon-scheme-works delivery"></i> <span class="number-scheme-works">5</span></div>
				</li>
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
					<span class="title mt-3">Выезд Замерщика</span>
					<p class="px-5">Согласуем удобное для вас время и дату для замера</p>
				</li>
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works icon-roller"></i> <span class="number-scheme-works">4</span></div>
					<span class="title mt-3">Изготовление Ролет</span>
					<p class="px-5">Обычно производство занимает около 5 рабочих дней</p>
				</li>
			</ul>
		</div>
	</section>
	<section class="section-preference">
		<div class="container">
			<h2 class="title-section">Наши Преимущества</h2>
			<ul class="list-preference balcone">
				<li class="li-preference-small">
					<div class="block">
						<i class="icon icon-block icon-shield"></i> <span class="title">Гарантия</span>
						<p>На все ролеты мы даем гарантию до 10 лет</p>
					</div>
				</li>
				<li>
					<div class="block">
						<i class="icon icon-block icon-standards"></i> <span class="title">Стандарты ДСТУ</span>
						<p>Наши изделия строго соответствуют всем стандартам ДСТУ</p>
					</div>
				</li>
				<li>
					<div class="block">
						<i class="icon icon-block icon-quality"></i> <span class="title">Высококачественные материалы</span>
						<p>Для производства ролет мы искпользуем только высококачественные и проверенные материалы</p>
					</div>
				</li>
				<li class="li-preference-small">
					<div class="block">
						<i class="icon icon-block icon-guarantee"></i> <span class="title">Гарантийное и постгарантийное обсуживание</span>
						<p class="px-2">Мы следим за качеством наших изделий и всегда рады решать любые задачи</p>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="block-portfolio">
		<div class="container">
			<h2 class="title-section my-3 my-lg-4">Наши Работы</h2>
			<ul class="slider-portfolio-present">
				<li>
					<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/zashchitnye-rolety-project-1.jpg" class="img-fluid" alt="photo-product1"></a>
					<div class="footer-item-catalog">
						<div class="price"><span class="text">Стоимость от</span> <span>6 800</span> <span class="text">грн</span></div>
					</div>
					<a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
				</li>
				<li>
					<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/zashchitnye-rolety-project-2.jpg" class="img-fluid" alt="photo-product1"></a>
					<div class="footer-item-catalog">
						<div class="price"><span class="text">Стоимость от</span> <span>19 800</span> <span class="text">грн</span></div>
					</div>
					<a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
				</li>
				<li>
					<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/zashchitnye-rolety-project-3.jpg" class="img-fluid" alt="photo-product1"></a>
					<div class="footer-item-catalog">
						<div class="price"><span class="text">Стоимость от</span> <span>4 800</span> <span class="text">грн</span></div>
					</div>
					<a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
				</li>
				<li>
					<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/zashchitnye-rolety-project-1.jpg" class="img-fluid" alt="photo-product1"></a>
					<div class="footer-item-catalog">
						<div class="price"><span class="text">Стоимость от</span> <span>6 800</span> <span class="text">грн</span></div>
					</div>
					<a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
				</li>
                <li>
                    <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/zashchitnye-rolety-project-2.jpg" class="img-fluid" alt="photo-product1"></a>
                    <div class="footer-item-catalog">
                        <div class="price"><span class="text">Стоимость от</span> <span>19 800</span> <span class="text">грн</span></div>
                    </div>
                    <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
                </li>
                <li>
                    <a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/zashchitnye-rolety-project-3.jpg" class="img-fluid" alt="photo-product1"></a>
                    <div class="footer-item-catalog">
                        <div class="price"><span class="text">Стоимость от</span> <span>4 800</span> <span class="text">грн</span></div>
                    </div>
                    <a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
                </li>
			</ul>
			<button class="btn btn-portfolio">Показать Все Работы</button>
		</div>
	</section>
    <section class="section-post section-post-windows">
        <div class="container">
            <h2 class="title-section">Защитные роллеты на окна и двери купить в Киеве</h2>
            <div class="text-custom-page">
                <p>
                    Роллетные конструкции являются разновидностью жалюзи, обеспечивающие не только защиту от солнца, но и от взлома.
                    Металлическое полотно представляет собой конструкцию, состоящую из нескольких элементов:
                </p>
                <ul>
                    <li>·короба;</li>
                    <li>·вороткового привода;</li>
                    <li>·направляющей шины;</li>
                    <li>·ручного ригеля;</li>
                    <li> ·обрамления;</li>
                    <li> ·замкового ригеля;</li>
                    <li>·концевой ламели.</li>
                </ul>
                <p> Конструкция рольставней скрывается в коробе, закрепленном над окном или дверью.
                    При необходимости полотно опускается или поднимается посредством специального механизма.
                    Скручивание защитного навеса обеспечивает значительную экономию пространства.</p>
                <p>Направляющие шины обеспечивают перемещение полотна при намотке на короб. Выделяется несколько видов направляющих:</p>
                <ul>
                    <li>·стандартные;</li>
                    <li>·усиленные (толстые стенки усиливают противовзломность);</li>
                    <li>·сдвоенные (применяются для совмещенных роллетов);</li>
                    <li>·угловые (используются при монтаже роллет в теплоизоляционный проем);</li>
                    <li>·дистанционные (увеличивают пространство для теплоизоляции между дверью или окном и роллетами).</li>
                </ul>
                <p>
                    Способ управления железными ролетами бывает ручным и автоматическим. Механическое управление подразумевает приложение физических усилий. В качестве управляющих элементов применяются тросовый редуктор, ленточный привод, пружинный инерционный механизм и кардан. Ручное регулирование рольставней часто используется внутри помещения.
                </p>
                <p>
                    Автоматическое управление осуществляется посредством нескольких способов: электрического привода, дистанционного управления, при помощи выключателей и автоматической системы. Данный вид управления подразумевает дополнительные услуги в виде прокладки проводки, установки дополнительных направляющих, исполнительных устройств и пультов.
                </p>
                <p>
                    Наличие запирающего замка является гарантией антивандальной защиты. Разновидность замка зависит от способа управления роллетами. При ручной регулировке применяются механические замки, задвижки и верхние замки. Для автоматических изделий используются автоматизированные устройства.
                </p>
                <h2 class="title-post">Как правильно выбрать</h2>
                <p>При выборе защитных ролетов на окна и двери следует учитывать некоторые моменты:</p>
                <ol>
                    <li>Подборка комплектации роллетов зависит от желаемого уровня безопасности и архитектурных особенностей здания.</li>
                    <li>Для защиты от несанкционированного проникновения или противоударной защиты применяются пенонаполненные рольставни.</li>
                    <li>Для объектов с повышенным требованием безопасности используются экструдированные модели.</li>
                    <li>Решетчатые роллеты являются лучшим вариантом для защиты магазинов и торговых павильонов.</li>
                    <li>Существуют разные виды монтажа. Накладная установка применяется для готовых оконных или дверных конструкций.
                        Встроенный монтаж используется на этапе проектирования зданий.</li>
                </ol>
                <p>
                    Мы изготавливаем внешние ролеты на окна и двери под заказ с учетом размеров проемов. Перед заказом рекомендуется вызвать замерщика на объект для осуществления предварительных расчетов и составления эскиза будущей роллетной конструкции.
                </p>
                <h2 class="title-post">Преимущества</h2>
                <p>Наружные ролеты на окна характеризуются несколькими преимуществами:</p>
                <ul>
                    <li>·эстетичностью;</li>
                    <li>·отличной взломоустойчивостью;</li>
                    <li>·функционированием при низкой температуре;</li>
                    <li>·высоким уровнем шумо- и теплоизоляцией;</li>
                    <li>·защитой от солнечных лучей;</li>
                    <li>·простотой и удобством эксплуатации.</li>
                </ul>
                <p>В наших каталогах представлены антивандальные ролеты на окна с гарантией качества от производителя.
                    Отличная функциональность и внешний вид помогут выбрать роллеты, подходящие под стиль фасада здания.
                    Наши изделия соответствуют международным стандартам безопасности.</p>
                <h2 class="title-post">Стоимость</h2>
                <p>Цена защитных ролетов зависит от габаритов, типа профиля, вида управления и запирающего устройства, оформления защитной конструкции.</p>
                <p>Компания «Windows Group» предлагает заказать металлические ролеты на окна в Украине по лучшей стоимости.
                    Узнать цены на изделия можно на сайте или, позвонив по указанному телефону.</p>
            </div>
        </div>
    </section>
	<section class="section-other-section section-other-type-windows">
		<div class="container">
			<ul class="list-item-catalog colum-3">
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<a href="<?=get_bloginfo('home')?>/plastikovye-okna/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/plastikovye-okna.395e5f5a.jpg" class="img-fluid" alt="photo-product1"></a>
						<div class="footer-item-catalog"><span class="price price-1 border-blue">Окна ПВХ</span></div>
					</div>
				</li>
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<a href="<?=get_bloginfo('home')?>/plastikovye-dveri/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/metalloplastikovye-dveri.feb00769.jpg" class="img-fluid" alt="photo-product1"></a>
						<div class="footer-item-catalog"><span class="price price-1 border-blue">Двери ПВХ</span></div>
					</div>
				</li>
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<a href="<?=get_bloginfo('home')?>/alyuminij/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/alyuminievye-konstrukcii.a09d637c.jpg" class="img-all img-fluid" alt="photo-product1"></a>
						<div class="footer-item-catalog"><span class="price border-blue">Алюминиевые Конструкции</span></div>
					</div>
				</li>
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<a href="<?=get_bloginfo('home')?>/okna/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/profilnye-sistemy.c81595ef.jpg" class="img-fluid" alt="photo-product1"></a>
						<div class="footer-item-catalog"><span class="price border-blue">Профильные Системы</span></div>
					</div>
				</li>
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<a href="<?=get_bloginfo('home')?>/komplektuyushchie/moskitnye-setki/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/moskitnye-setki.52fd1937.jpg" class="img-fluid" alt="photo-product1"></a>
						<div class="footer-item-catalog"><span class="price price-1 border-blue">Москитные Сетки</span></div>
					</div>
				</li>
				<li class="item-catalog page">
					<div class="block-item-catalog">
						<a href="<?=get_bloginfo('home')?>/peregorodki/" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/steklyannye-peregorodki.d25ebb39.jpg" class="img-all img-fluid" alt="photo-product1"></a>
						<div class="footer-item-catalog"><span class="price border-blue">Стеклянные Перегородки</span></div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<a id="button"></a>
</div>

<?php
get_footer();
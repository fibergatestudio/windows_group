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

<div class="main page-balcone">
	<section class="section-scheme-house-balcone">
		<div class="container">
			<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
			<h1 class="title-post my-3 my-lg-0 title-post-top">Вынос балкона по полу</h1>
			<p class="text-custom-page">
                Вынос балкона по полу или плите – процедура увеличения площади методом масштабирования основания. Такой вариант расширения позволяет получить 10-35 см полезного пространства, в некоторых случаях до 50 см. Количество «отвоеванных» сантиметров будет зависеть от конструкции лоджии или балкона, его состояния, изношенности здания. В любом случае, вынос балконов по плите – самый надежный и эффективный метод расширения.
                Процедура сложная, ответственная, поэтому требует профессионального подхода. В компании «Windows Group» вы можете заказать расширение балкона по плите в Киеве, не опасаясь за качество проведенных монтажных работ. Стоимость балкона с выносом по полу можно посмотреть на нашем сайте, воспользовавшись удобным калькулятором, а также <a href="https://windowsgroup.com.ua/uslugi/osteklenie-balkonov-i-lodzhij/">заказать остекление балконов</a> окнами ПВХ.
            </p>
		</div>

		<div class="price-page-product">
			<div class="container">
				<h2 class="title-section page pt-4 pt-xl-4">Цены на услуги по выносу балкона по полу</h2>
				<div class="d-md-flex">
					<table class="table-windows">
						<thead>
							<tr>
								<td>Наименование</td>
								<td>Единица<br/>изм.</td>
								<td>Цена<br/>грн</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Наружная обшивка сайдингом</td>
								<td>м<sup>2</sup></td>
								<td>от 600</td>
							</tr>
							<tr>
								<td>Наружная обшивка профнастилом</td>
								<td>м<sup>2</sup></td>
								<td>от 300</td>
							</tr>
							<tr>
								<td>Обшивка ПВХ вагонкой</td>
								<td>м<sup>2</sup></td>
								<td>от 180</td>
							</tr>
							<tr>
								<td>Обшивка МДФ панели</td>
								<td>м<sup>2</sup></td>
								<td>от 350</td>
							</tr>
							<tr>
								<td>Обшивка деревянная вагонка</td>
								<td>м<sup>2</sup></td>
								<td>от 300</td>
							</tr>
							<tr>
								<td>Обшивка гипсокартон</td>
								<td>м<sup>2</sup></td>
								<td>от 130</td>
							</tr>
							<tr>
								<td>Утепление пенопластом</td>
								<td>м<sup>2</sup></td>
								<td>от 60</td>
							</tr>
							<tr>
								<td>Утепление стиродур</td>
								<td>м<sup>2</sup></td>
								<td>от 140</td>
							</tr>
							<tr>
								<td>Утепление минватой</td>
								<td>м<sup>2</sup></td>
								<td>от 250</td>
							</tr>
						</tbody>
					</table>
					<table class="table-windows">
						<thead>
							<tr>
								<td>Наименование</td>
								<td>Единица<br/>изм.</td>
								<td>Цена<br/>грн</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Пол черновой</td>
								<td>м<sup>2</sup></td>
								<td>от 500</td>
							</tr>
							<tr>
								<td>Укладка линолеума (работа)</td>
								<td>м<sup>2</sup></td>
								<td>от 80</td>
							</tr>
							<tr>
								<td>Укладка ламината (работа)</td>
								<td>м<sup>2</sup></td>
								<td>от 130</td>
							</tr>
							<tr>
								<td>Крыша</td>
								<td>м<sup>2</sup></td>
								<td>от 1200</td>
							</tr>
							<tr>
								<td>Вынос по полу</td>
								<td>п.м.</td>
								<td>от 1100</td>
							</tr>
							<tr>
								<td>Вынос-каркас (от пола)</td>
								<td>п.м.</td>
								<td>от 600</td>
							</tr>
							<tr>
								<td>Вынос косынка</td>
								<td>п.м.</td>
								<td>от 600</td>
							</tr>
							<tr>
								<td>Обесшумка козырька</td>
								<td>п.м.</td>
								<td>от 90</td>
							</tr>
							<tr>
								<td>Паро-гидробарьер</td>
								<td>м<sup>2</sup></td>
								<td>от 30</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<section class="section-group-button">
		<div class="container">
			<ul class="list-button">
				<li><button class="btn btn-call-measurer icon icon-measuring-tape"><span>Вызвать замерщика</span></button></li>
				<li><button class="btn btn-call-me icon icon-mobile-phone"><span>Перезвоните мне</span></button></li>
				<li><button class="btn btn-get-discount icon icon-percentage-discount"><span>Получить скидку на ремонт</span></button></li>
			</ul>
		</div>
	</section>

	<div class="container block-portfolio">
		<h2 class="title-section my-3 my-lg-4">Наши Проекты</h2>
		<ul class="slider-portfolio-present">
			<li>
				<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio.e4a3ea4e.jpg" class="img-fluid" alt="photo-product1"></a>
				<div class="footer-item-catalog">
					<div class="price"><span class="text">Стоимость от</span> <span>9200</span> <span class="text">грн</span></div>
				</div>
				<a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
			</li>
			<li>
				<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-22.95ee553a.png" class="img-fluid" alt="photo-product1"></a>
				<div class="footer-item-catalog">
					<div class="price"><span class="text">Стоимость от</span> <span>4500</span> <span class="text">грн</span></div>
				</div>
				<a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
			</li>
			<li>
				<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/portfolio-3.4b617888.jpeg" class="img-fluid" alt="photo-product1"></a>
				<div class="footer-item-catalog">
					<div class="price"><span class="text">Стоимость от</span> <span>18900</span> <span class="text">грн</span></div>
				</div>
				<a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
			</li>

		</ul>
		<button class="btn btn-portfolio">Показать все работы</button>
	</div>

	<section class="section-post post-border post-border-top">
        <div class="container">
            <h2 class="title-post">Требуется ли разрешение на расширение балкона по полу</h2>
            <p class="text-custom-page">Расширить балкон по плите без каких-либо разрешений можно только на расстояние до 30 см.
                В остальных случаях потребуется узаконить выносную конструкцию. Но, бывают ситуации, когда увеличить балкон по плите невозможно, среди них:</p>
            <ul class="list-style-disc">
                <li>несущая стена не выдержит выносной балкон, вес которого более 80 кг;</li>
                <li>пристройка «старше» 20 лет;</li>
                <li>плита основания треснутая, наблюдаются сколы по краям;</li>
                <li>первый этаж – весь мусор от соседей сверху будет падать на козырек;</li>
                <li>примыкающая к балкону или лоджии стена квартиры находится в аварийном состоянии;</li>
                <li>монтажные работы могут принести неудобства соседям;</li>
                <li>металлические элементы «съедает» ржавчина.</li>
            </ul>
            <p class="text-custom-page">
                При увеличении балконов по полу первостепенным является вопрос безопасности.
                Если постройка требует ремонта, специалисты реконструируют или заменяют старую конструкцию.
                Только после этого мастер приступает к проектированию и монтажным работам.
            </p>
        </div>
    </section>

	<section class="section-preference">
		<div class="container">
			<span class="title-section">Наши Преимущества</span>
			<ul class="list-preference balcone">
				<li>
					<div class="block">
						<i class="icon icon-block icon-target"></i> <span class="title">Индивидуальный подход</span>
						<p>Создадим и детально визуализируем проект перед началом выполнения заказа</p>
					</div>
				</li>
				<li>
					<div class="block">
						<i class="icon icon-block icon-list"></i> <span class="title">Полный спектр <span class="d-block">услуг</span></span>
						<p>Профессионально выполним все виды услуг любого уровня сложности</p>
					</div>
				</li>
				<li class="li-preference-small">
					<div class="block">
						<i class="icon icon-block icon-graphic"></i> <span class="title">Опыт</span>
						<p class="px-2">Наша компания имеет более 200+ успешно выполненных проектов</p>
					</div>
				</li>
				<li class="li-preference-small">
					<div class="block">
						<i class="icon icon-block icon-shield"></i> <span class="title">Гарантия</span>
						<p>Дадим гарантию до 5 лет на работы и до 10 лет на стройматериалы, фурнитуру, стеклопакеты и другие конструкции</p>
					</div>
				</li>
			</ul>
		</div>
	</section>

    <section class="section-post post-border">
        <div class="container">
            <h2 class="title-post">Как увеличить балкон: виды выноса</h2>
            <p class="text-custom-page">
                <a href="https://windowsgroup.com.ua/balkony-pod-klyuch/">Сделать балкон под ключ</a> можно тремя основными способами. Каждый из них имеет свои особенности и сложности:
            </p>
            <ul class="list-style-disc">
                <li> остекление балконов с выносом по полу – вариант отлично подойдет для тех, кто хочет получить отдельную жилую комнату, соединенную с основной;</li>
                <li> <a href="https://windowsgroup.com.ua/balkony-pod-klyuch/vynos-balkona-po-podokonniku/">вынос балкона по подоконнику</a> – метод широко используется в панельных зданиях и позволяет оборудовать полноценный подоконник,
                    где можно поставить цветы или любимые книги.
                    Также существует еще одна разновидность выноса по подоконнику – «бабочка».
                    Подобная реконструкция не требует регистрации, так как при монтаже затрагиваются исключительно боковые стороны;</li>
                <li> двойной вынос – это одновременное увеличение площади по полу и подоконнику методом «косынка».</li>
            </ul>
            <p class="text-custom-page">При расширении обязательно встанет вопрос, как застеклить балкон с выносом по полу. Это может быть установка прозрачного французского остекления, деревянных или металлопластиковых окон и нового парапета, утепленное и холодное остекление.
                Компания «Windows Group» осуществляет качественный вынос балкона по полу в Киеве по доступной цене. Мы гарантируем безопасность и надежность возведенной конструкции.</p>
            <h2 class="title-post">Этапы увеличения балконов по полу</h2>
            <p class="text-custom-page">Изначально производится оценка плиты. Мастер тщательно проверяет состояние парапета, крыши, определяет глубину сварки.
                Практически по всех случаях бетонная плита имеет сколы и трещины, поэтому перед тем, как расширить балкон по полу, основание укрепляется.</p>
            <p class="text-custom-page">Дальнейшие работы включают несколько этапов:</p>
            <ol class="">
                <li>Демонтируются старые перила.</li>
                <li>Нижнюю плиту увеличивают фронтально или по периметру.</li>
                <li>По краям обваривают металлическим каркасом, усиливают. Опора должна быть крепкой, от этого зависит надежность конструкции выносного балкона.</li>
                <li>Снизу каркас обшивают металлическими листами и устанавливают новое ограждение по всему периметру.</li>
                <li>Производится обшивка снаружи, укладывается новый пол, в том числе на вынесенном пространстве.</li>
                <li>Стены и пол укрепляют.</li>
                <li>Конструкцию утепляют изнутри и устанавливают остекление.</li>
            </ol>
            <p class="text-custom-page">Все металлические элементы обрабатываются специальными веществами для предотвращения коррозии.</p>
        </div>
    </section>

	<section class="section-scheme-works">
		<div class="container">
			<span class="title-section">Схема выполнения заказа</span>
			<ul class="list-scheme-works balcone d-md-none">
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
					<span class="title">Заявка</span>
					<p>Позвоните нам или оставьте заявку на сайте чтобы заказать услугу</p>
				</li>
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
					<span class="title">Выезд и Консультация Замерщика</span>
					<p>Договоримся о выезде замерщика на удобную для вас дату и время</p>
				</li>
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works model"></i> <span class="number-scheme-works">3</span></div>
					<span class="title">Моделирование и Визуализация Проекта</span>
					<p>Перед началом выполнения заказа специалист нашей компании смоделирует и визуализирует проект вашего балкона</p>
				</li>
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works calculation"></i> <span class="number-scheme-works">4</span></div>
					<span class="title">Расчет Стоимости</span>
					<p>Наша компания просчитает, поможет оптимизировать и согласует итоговую смету с учётом всех ваших индивидуальных пожеланий, утепления, обрешетки и т.д.</p>
				</li>
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works dogovor"></i> <span class="number-scheme-works">5</span></div>
					<span class="title">Подписание Договора и Внесение Предоплаты</span>
					<p>Подпишем договор перед началом выполнения заказа</p>
				</li>
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works work"></i> <span class="number-scheme-works">6</span></div>
					<span class="title">Монтажные Работы</span>
					<p>Наша компания качественно и надежно выполнит заказ точно в срок согласно строгим строительным требованиям и стандартам</p>
				</li>
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">7</span></div>
					<span class="title">Гарантия</span>
					<p>Наша компания дает гарантию до 10 лет на материалы и до 5 лет на работы</p>
				</li>
			</ul>
			<ul class="list-scheme-works-lg balcone d-none d-md-flex">
				<li class="">
					<div class="info-list-scheme-works-lg">
						<span class="title">Заявка</span>
						<p>Позвоните нам или оставьте заявку на сайте чтобы заказать услугу</p>
					</div>
					<div class="block-scheme-works"><i class="icon-scheme-works request"></i> <span class="number-scheme-works">1</span></div>
				</li>
				<li class="">
					<div class="info-list-scheme-works-lg">
						<span class="title">Моделирование и Визуализация Проекта</span>
						<p>Перед началом выполнения заказа наша компания смоделирует и визуализирует проект с учетом изменения площади.
					</div>
					<div class="block-scheme-works"><i class="icon-scheme-works model"></i> <span class="number-scheme-works">3</span></div>
				</li>
				<li class="">
					<div class="info-list-scheme-works-lg">
						<span class="title">Подписание Договора и<br/>Внесение Предоплаты</span>
						<p>Подпишем договор перед началом выполнения заказа</p>
					</div>
					<div class="block-scheme-works"><i class="icon-scheme-works dogovor"></i> <span class="number-scheme-works">5</span></div>
				</li>
				<li class="">
					<div class="info-list-scheme-works-lg">
						<span class="title">Гарантия</span>
						<p>Компания даст гарантию более 10 лет на изделия и 3 года на работы</p>
					</div>
					<div class="block-scheme-works"><i class="icon-scheme-works assurance"></i> <span class="number-scheme-works">7</span></div>
				</li>
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works sample"></i> <span class="number-scheme-works">2</span></div>
					<div class="info-list-scheme-works-lg">
						<span class="title">Выезд и Консультация Замерщика</span>
						<p>Компания вышлет специалиста для измерения площади на удобную для вас дату и время</p>
					</div>
				</li>
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works calculation"></i> <span class="number-scheme-works">4</span></div>
					<div class="info-list-scheme-works-lg">
						<span class="title">Расчет Стоимости</span>
						<p>Просчитаем, поможем оптимизировать и согласуем итоговую смету с учётом всех ваших индивидуальных пожеланий и площади</p>
					</div>
				</li>
				<li class="">
					<div class="block-scheme-works"><i class="icon-scheme-works work"></i> <span class="number-scheme-works">6</span></div>
					<div class="info-list-scheme-works-lg">
						<span class="title">Монтажные Работы</span>
						<p>Качественно и надежно выполним заказ точно в срок согласно строгим строительным требованиям и стандартам</p>
					</div>
				</li>
			</ul>
		</div>
	</section>

    <section class="section-post post-border ">
        <div class="container">
            <h2 class="title-post">Остекление</h2>
            <p class="text-custom-page">
                Стоимость расширения балкона по полу напрямую зависит от выбранного профиля. Остекление ПВХ обойдется дороже, но и преимуществ у такого вида достаточно.
                Компания предлагает <a href="https://www.google.com/url?q=https://windowsgroup.com.ua/plastikovye-dveri/&sa=D&source=editors&ust=1622148046433000&usg=AOvVaw1vrJf8UYGjhWG7kGyAX_Bn">металлопластиковые двери в Киеве</a> по доступной цене. Широкий ассортимент порадует своим разнообразием и качеством.
                <a href="https://windowsgroup.com.ua/plastikovye-okna/">Стоимость пластиковых окон с установкой</a> зависит от цвета, количества камер и стеклопакета.
            </p>
            <p class="text-custom-page">Остекление может быть холодным и теплым. Второй вариант позволяет использовать балкон в зимний сезон, так как подразумевает переоборудование помещения под жилую комнату с шумо- и теплоизоляцией. Холодное остекление с алюминиевым профилем отличается легкостью, низкой ценой и прочностью.</p>
            <p class="text-custom-page">Минусом такого метода считается отсутствие возможности переоборудования балкона в жилую комнату. <a href="https://windowsgroup.com.ua/alyuminij/dveri/">Цены на алюминиевые двери</a> и профили низкие, но температура в помещении будет идентична уличной.</p>
            <p class="text-custom-page">Типы рамных конструкций:</p>
            <ul class="list-style-disc">
                <li>деревянные – хорошо сохраняют тепло, экологически чистые, но с годами теряют презентабельный внешний вид;</li>
                <li>алюминиевые – недорогие, долговечные, легкие, применяются для холодного остекления в любых зданиях;</li>
                <li>рамы ПВХ – используются для теплого остекления, отлично удерживают тепло, обладают звукоизоляцией.
                    Пластиковый балкон с выносом по полу считается самым удачным вариантом. Цена вполне приемлема, но стоит учитывать тяжелый вес ПВХ конструкций.</li>
            </ul>
            <p class="text-custom-page">        Немаловажную роль играет выбор фурнитуры для окон и дверей. От их качества зависит удобство управления створками и долговечность увеличенного балкона. Дополнительно желательно поставить специальную защиту против взлома. Узнать стоимость <a href="https://windowsgroup.com.ua/plastikovye-dveri/balkonnye-bloki/">установки балконного блока</a> с учетом выбранного типа остекления и фурнитуры можно на нашем сайте.
            </p>
            <p class="text-custom-page">        Дополнительно при обшивке снаружи и внутри применяются вспомогательные элементы – подоконник, отлив для осадков, откос и др.
                Порог устанавливается, чтобы устранить разницу в высоте между полом балкона и смежной комнаты. Откос скрывает стены после монтажа. Подоконник обеспечивает дополнительное место для хранения вещей, мелкой техники или цветов, а также предотвращает запотевание окон и утепляет проем.
            </p>
            <h2 class="title-post">Отделка</h2>
            <p class="text-custom-page">        Изнутри балконы с выносом по плите утепляются пенопластом, стиродуром, минеральной ватой. Поверх используется облицовка из гипсокартона или панелей ПВХ. Дополнительно может устанавливаться теплый пол и отопление, электрические розетки, светильники. Затем производится отделка потолка, стен с учетом предпочтений заказчика.</p>
            <p class="text-custom-page">        Грамотно реализованное расширение балкона по плите в Хрущевке позволяет значительно увеличить площадь, а также организовать функциональное, удобное дополнительное пространство. Компания «Windows Group» предлагает <a href="https://windowsgroup.com.ua/balkony-pod-klyuch/vynos-balkona/">расширение балкона в Киеве</a> с применением качественных материалов и фурнитуры.</p>
            <h2 class="title-post">Заказать расширение балкона по полу в Хрущевке</h2>
            <p class="text-custom-page">Давно мечтаете о личном кабинете или домашней оранжерее? Компания «Windows Group» поможет вам организовать уютное пространство для любых целей.</p>
            <p class="text-custom-page">Преимущества заказа пластикового балкона с выносом по полу у нас:</p>
            <ol>
                <li>Доступная цена.</li>
                <li>Качественное и быстрое выполнение работ с учетом ваших предпочтений.</li>
                <li>В процессе используются надежные, долговечные и сертифицированные материалы.</li>
                <li>Абсолютно все профильные системы отвечают европейским стандартам.</li>
                <li>Выезд замерщика на дом для расчетов, оценки состояния балкона и составления сметы, договора.</li>
            </ol>
            <p class="text-custom-page">Мы даем гарантию 10 лет на изделия, а также до 5 лет на проделанные монтажные работы.</p>
            <h2 class="title-post">Цена на расширения балкона по полу</h2>
            <p class="text-custom-page">        Каждый проект является индивидуальным. Стоимость будет зависеть от многих факторов. Приблизительную цену вы можете узнать, воспользовавшись онлайн-калькулятором на нашем сайте. Для более детального расчета выезжает специалист. Наша компания занимается всеми видами монтажных работ по обустройству балконов и лоджий, а также <a href="https://windowsgroup.com.ua/">продажей и установкой пластиковых окон</a>. Мы быстро и качественно сделаем балкон под ключ по доступным ценам, гарантируя безопасность и прочность конструкции.</p>
        </div>
    </section>
<!--    <section class="section-post">-->
<!--        <h2 class="title-post"></h2>-->
<!--        <p class="text-custom-page">-->
<!--        </p>-->
<!--        <ul class="">-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--        </ul>-->
<!--        <p class="text-custom-page"></p>-->
<!--    </section>-->

	<section class="section-other-type-windows">
        <div class="container">
            <h2 class="title-section">Вместе с выносом балкона по полу так же выбирают:</h2>
            <ul class="list-other-type-windows">
                <li class="item-other-type-windows"><img src="<?php bloginfo('template_url') ?>/images/metalloplastikovye-okna-na-balkon.7e6bd63c.jpg" class="img-fluid" alt="photo"> <a href="<?=get_bloginfo('home')?>/plastikovye-okna/na-balkon/" class="title-footer">На Балкон</a></li>
                <li class="item-other-type-windows"><img src="<?php bloginfo('template_url') ?>/images/panoramnye-okna.afd86d19.jpg" class="img-fluid" alt="photo"> <a href="<?=get_bloginfo('home')?>/plastikovye-okna/panoramnye/" class="title-footer">Панорамные</a></li>
                <li class="item-other-type-windows"><img src="<?php bloginfo('template_url') ?>/images/razdvizhnye-okna.34136da0.jpg" class="img-fluid" alt="photo"> <a href="<?=get_bloginfo('home')?>/plastikovye-okna/razdvizhnye/" class="title-footer">Раздвижные</a></li>
                <li class="item-other-type-windows"><img src="<?php bloginfo('template_url') ?>/images/francuzskie-okna.4a110c15.jpg" class="img-fluid" alt="photo"> <a href="<?=get_bloginfo('home')?>/plastikovye-okna/francuzkie/" class="title-footer">Французские</a></li>
                <li class="item-other-type-windows"><img src="<?php bloginfo('template_url') ?>/images/energosberegayushchie-okna.a738415d.jpg" class="img-fluid" alt="photo"> <a href="<?=get_bloginfo('home')?>/plastikovye-okna/energosberegayushchie/" class="title-footer">Энергосберегающие</a></li>
                <li class="item-other-type-windows"><a href="<?=get_bloginfo('home')?>/okna/plastikovye-okna/vse-okna/" class="icon-button"></a> <a href="<?=get_bloginfo('home')?>/okna/plastikovye-okna/vse-okna" class="title-button">Показать всё</a></li>
            </ul>
        </div>
    </section>

	<a id="button"></a>
</div>

<?php
get_footer();

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
			<h1 class="title-post my-3 my-lg-0 title-post-top">Ремонт балкона и лоджии в Киеве</h1>
			<p class="text-custom-page">
                Многие люди, затевая ремонт во «вторичке» или новостройке, не обращают должного внимания на состояние балкона или лоджии. Зачастую там хранится весь хлам, который занимает полезное пространство. <strong>Реставрация балкона</strong> – комплекс ремонтных работ, позволяющих получить из ветхого, некомфортного помещения полноценную жилую комнату под домашний офис, зимний сад, для отдыха или сушки белья. Компания «Windows Group» быстро и качественно производит ремонт балконов по приемлемым ценами с гарантией. 
            </p>
		</div>

		<div class="price-page-product">
			<div class="container">
				<h2 class="title-section page pt-4 pt-xl-4">Цены на услуги по ремонту балкона</h2>
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
					<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/balkony-pod-klyuch-1.jpg" class="img-fluid" alt="photo-product1"></a>
					<div class="footer-item-catalog">
						<div class="price"><span class="text">Стоимость от</span> <span>9200</span> <span class="text">грн</span></div>
					</div>
					<a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
				</li>
				<li>
					<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/balkony-pod-klyuch-2.jpg" class="img-fluid" alt="photo-product1"></a>
					<div class="footer-item-catalog">
						<div class="price"><span class="text">Стоимость от</span> <span>4500</span> <span class="text">грн</span></div>
					</div>
					<a href="#" class="block-hover"><span class="hover-more"><span>Подробнее</span></span></a>
				</li>
				<li>
					<a href="#" class="block-img"><img src="<?php bloginfo('template_url') ?>/images/balkony-pod-klyuch-3.jpg" class="img-fluid" alt="photo-product1"></a>
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
			<div class="text-custom-page">
				<h2 class="title-section">Перечень услуг</h2>
				<p>Если раньше пределом мечтаний владельцев квартир была установка металлопластиковых окон, то сегодня можно <strong>заказать ремонт балкона с утеплением</strong> и отделкой под ключ. По окончанию работ вы получите полноценную комнату для любых целей.</p>
				<p>Существует два основных вида балконов – холодный, теплый. Первый вариант подойдет для бытовых нужд, например, хранения чего-либо или сушки белья. Второй тип подразумевает «теплое» благоустройство с комфортной температурой внутри круглый год.</p>
				<p>Подобный евроремонт включает в себя такие работы:</p>
				<ol>
					<li><a href="<?=get_bloginfo('home')?>/balkony-pod-klyuch/vynos-po-polu/">Расширение балкона по полу</a>, подоконнику или в пол.</li>
					<li>Установку новой крыши или реставрация старой.</li>
					<li>Устранение протекания.</li>
					<li>Остекление качественными деревянными, алюминиевыми, металлопластиковыми профилями.</li>
					<li>Утепление балкона, дополнительно возможен монтаж теплого пола.</li>
					<li><strong>Внешнюю и внутреннюю отделку</strong>.</li>
					<li>Монтаж электропроводки, осветительных приборов.</li>
					<li>Установку мебели, сушек для белья, встроенных шкафов.</li>
				</ol>
				<p>Также, у нас вы можете заказать регулировку фурнитуры, замену уплотнителей, монтаж микропроветривания и пр. Ориентировочную стоимость комплексного ремонта старого деревянного балкона можно рассчитать, воспользовавшись удобным онлайн-калькулятором на нашем сайте.</p>
			</div>
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
			<div class="text-custom-page">
				<h2 class="title-section">Расширение и вынос балкона</h2>
				<p>Существует расширение по подоконнику и <a href="<?=get_bloginfo('home')?>/balkony-pod-klyuch/vynos-po-polu/">вынос балкона по полу в Киеве</a>. Первый вариант подразумевает увеличение верхней части за счет установки широкого подоконника. Его можно использовать как подставку для цветов или рабочую поверхность. Расширение по полу с привариванием металлического каркаса подарит до 35 см дополнительного пространства.</p>
				<p>Никаких разрешений на такое увеличение брать не нужно. Каркас сваривается во все стороны или только в боковую и переднюю. Затем все покрывается грунтовкой, устанавливается крыша или козырьки, проводится наружная отделка. Теперь конструкция готова к установке оконных профилей. <strong>Стоимость ремонта балкона</strong> с выносом рассчитывается индивидуально.</p>
			</div>
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
	<section class="section-post post-border">
		<div class="container">
			<div class="text-custom-page">
				<h2 class="title-post">Варианты остекления</h2>
				<p>Выбор остекления зависит от необходимости энергосбережения, шумо- и теплоизоляции, предпочтений заказчика. Если балкон нужен только для хранения спортивного инвентаря или заготовок на зиму, можно не тратиться на утепление и купить холодные оконные профиля – алюминиевые.</p>
				<p>Теплое <strong>остекление и капитальный ремонт лоджий под ключ</strong> обычно проводится металлопластиковыми конструкциями. Они обеспечивают защиту от шума, холода, жары летом, просты в эксплуатации, герметичны. Дополнительно можно выбрать солнцезащитные стеклопакеты.</p>
				<p>Если вы предпочитаете дерево, для визуализации натуральной древесины применяется ламинация – отличный дизайнерский вариант, чтобы выделиться среди белых профилей. Для защиты от воров предназначены взломобезопасная система.</p>
				<p>Также, вы можете установить блокиратор, чтобы дети не смогли самостоятельно открыть балкон. <a href="<?=get_bloginfo('home')?>/okna/wds/">Цены на окна WDS</a> и других надежных производителей указаны на сайте. Вы можете заказать обратный звонок специалиста, чтобы обсудить интересующие вопросы.</p>
				<h2 class="title-post">Утепление, наружная и внутренняя обшивка</h2>
				<p>Компания «Windows Group» использует для утепления минеральную вату, пенопласт, стиродур. Процесс включает в себя отделку пола, стен, потолка, изоляцию щелей, стыков. Самым распространенным материалом для утепления является пенопласт. Вагонка обладает приятным запахом и высокими показателями теплосбережения, проста в уходе, имеет красивый внешний вид, стоит <strong>недорого</strong>. Стиродур водостойкий, не подвергается гниению. Минеральная вата содержит немного смол и доступна в цене.</p>
				<p>Наружная обшивка необходима для защиты балкона от негативного воздействия дождя, снега, солнца. В процессе применяются такие материалы:</p>
				<ul class="ml-3">
					<li>● профнастил – исключает протекание и продувание, имеет красивый внешний вид;</li>
					<li>● сайдинг – прочная, сплошная обшивка, которая крепится на специальные замки. Защищает от шума с улицы, перепадов температуры;</li>
					<li>● пластик – бюджетный вариант с минимальным сроком монтажа.</li>
				</ul>
				<p>Внутренняя отделка подразумевает применение деревянной или пластиковой вагонки, МДФ панелей. Реконструкция деревом отлично подойдет для людей с аллергией. Материал безопасный, надежный, долговечный, натуральный. Вы можете выбрать ольху, смереку или сосну.</p>
				<p>Пластиковая вагонка обеспечивает отличную звукоизоляцию, энергосбережение. МДФ панели сохраняют оптимальную температуру в помещении, имитируют древесину разных пород, представлены в любых цветовых решениях.</p>
				<p>Работы по отделке включают в себя обшивку стен, штукатурку с последующей покраской или поклейкой обоев. Команда профессионалов быстро и качественно поможет вам <strong>отремонтировать балкон</strong> с предоставлением гарантии на проделанные работы.</p>
				<h2 class="title-post">Монтаж электропроводки</h2>
				<p>Специалисты компании «Windows Group», не нарушая требований энергобезопасности, установят розетки, настенное освещение, лампы в потолок, декоративную подсветку и даже теплый пол.</p>
				<p>Утепленный пол – отличная альтернатива стандартному отоплению. Можно выбрать кабельный, инфракрасный или водяной тип. Благодаря подогреву на балконе сохраняется оптимальная температура, а внутренняя отделка надежно защищена от влаги.</p>
				<h2 class="title-post">Установка мебели и сушилок для белья</h2>
				<p>Многие люди хранят на балконе вещи в полном беспорядке. Решить этот вопрос помогут распашные, раздвижные шкафы, тумбы из пластика, МДФ или дерева. Они незаменимы для комфортного хранения любых вещей, так как отличаются максимальной вместительностью и небольшими габаритами.</p>
				<p>Потолочная сушилка с регулировкой высоты послужит отличной альтернативой обычных веревок. После использования можно поднять конструкцию под потолок и освободить полезное пространство на балконе. Компания «Windows Group» осуществляет <a href="<?=get_bloginfo('home')?>/balkony-pod-klyuch/">установку балконов под ключ</a> в минимальные сроки, учитывая пожелания заказчика.</p>
				<h2 class="title-post">Цены на ремонт балкона под ключ</h2>
				<p>Стоимость ремонта лоджии или балкона под ключ рассчитывается индивидуально в зависимости от многих факторов. Учитывается тип и состояние постройки, количество необходимых работ, выбранный профиль, стеклопакеты, варианты обшивки, отделки, декора, мебели и пр. Точную цену вы узнаете после выезда мастера для замера и оценки, а также обсуждения всех нюансов ремонта. В любом случае, <a href="<?=get_bloginfo('home')?>/plastikovye-okna/">стоимость установки металлопластиковых</a> окон вместе с капитальным ремонтом в одной компании обойдется дешевле, чем заказывать каждую услугу по отдельности.</p>
				<h2 class="title-post">Реставрация балконов</h2>
				<p>Компания «Виндовс Груп» недорого отреставрирует старый балкон, лоджию или <strong>террасу в Киеве</strong> с учетом пожеланий клиента. Мы даем гарантию на проделанные работы и установленные профильные системы. Профессиональные специалисты готовы воплотить в жизнь самые нестандартные проекты.</p>
				<p>Преимущества заказа у нас:</p>
				<ol>
					<li>Огромный опыт и ответственность.</li>
					<li>Бесплатный выезд замерщика.</li>
					<li>Прозрачная система расчетов стоимости ремонтных работ.</li>
					<li>Большой ассортимент качественных материалов, профильных систем, фурнитуры.</li>
					<li>Возможность моделирования и визуализации проекта в 3Д программе. Еще до начала работ вы увидите, как будет выглядеть балкон.</li>
					<li>Гарантия на изделия от 10 лет.</li>
				</ol>
				<p>Наши специалисты помогут подобрать идеальный вариант ремонтных работ с реализацией предпочтений клиента. В конечном итоге вы получите комфортный, презентабельный балкон под оранжерею, рабочий кабинет, детскую, мини бар. Для заказа оставьте заявку в режиме онлайн на сайте и дождитесь звонка менеджера.</p>
			</div>
		</div>
	</section>


	<section class="section-other-type-windows">
        <div class="container">
            <h2 class="title-section">Вместе с ремонтом балкона так же выбирают:</h2>
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

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
			<h1 class="title-post my-3 my-lg-0 title-post-top">Вынос балкона</h1>
			<p class="text-custom-page">
                Выносной балкон – это конструкция, в которой элементы остекления размещаются за пределами фронтальной части или свободного периметра несущей плиты. В результате такого смещения образуется дополнительное место. Компания «Windows Group» предлагает заказать вынос балкона в Киеве по доступным ценам, с гарантией качества выполнения монтажных работ.
            </p>
		</div>

		<div class="price-page-product">
			<div class="container">
				<h2 class="title-section page pt-4 pt-xl-4">Цены на услуги по выносу балкона</h2>
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
            <h2 class="title-section">Виды балконов с выносом</h2>
            <h2 class="title-post"></h2>
            <p class="text-custom-page"> Не каждый владелец квартиры может похвастаться большой площадью. Получить дополнительные квадратные метры не проблема, достаточно расширить и утеплить балкон.</p>
            <p class="text-custom-page"> Эту ответственную процедуру важно поручить профессионалам, заказав <a href="https://windowsgroup.com.ua/balkony-pod-klyuch/">установку балконов в Киеве</a> в компании «Windows Group». Узнать предварительную стоимость расширения балкона можно на нашем сайте или по телефону.</p>
            <p class="text-custom-page">Виды выноса балконов:</p>
            <ul class="list-style-disc">
                <li><a href="https://windowsgroup.com.ua/balkony-pod-klyuch/vynos-balkona-po-podokonniku/">вынос балкона по подоконнику</a> – вариант подразумевает изготовление жесткого и прочного металлического каркаса по периметру окна,
                    с выносом за границы лоджии на 30 см и более;</li>
                <li>вынос лоджии в пол – увеличить балкон можно посредством выноса подоконника, при этом ширина пола неизменна.
                    Удлинение лоджии по подоконнику увеличит балконную конструкцию на 30 см с каждой стороны;</li>
                <li><a href="https://windowsgroup.com.ua/balkony-pod-klyuch/vynos-balkona-po-polu/">вынос балкона по полу</a> – представлен в двух вариантах выполнения (прямоугольная форма, бабочка).
                    Прямоугольный вынос применяется для расширения пространства балкона, технология «бабочки» добавляет площадь по подоконнику,
                    расположенному с боковых сторон лоджии.</li>
            </ul>
            <p class="text-custom-page"> Преимущества расширения балкона в Хрущевке:</p>
            <ul class="list-style-disc">
                <li>значительное увеличение площади;</li>
                <li>улучшение освещенности квартиры (особенности на этажах, расположенных в затемненных сторонах);</li>
                <li>надежное и долговечное укрепление парапета, с учетом нагрузки бетонной плиты;</li>
                <li> изготовление широкого подоконника без использования самой площади балкона.</li>
            </ul>
            <p class="text-custom-page">Для реконструкции лоджий в домах старой постройки необходимо получить разрешение на ремонт в соответствующих организациях: БТИ, проектная организация, МЧС и пожарная инспекция. Кроме того, важно обсудить планируемые изменения с соседями, в целях безопасности и комфорта.</p>
            <p class="text-custom-page"></p>
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
            <h2 class="title-section">Увеличение и вынос балконов: особенности и сложности установки</h2>
            <p class="text-custom-page">Каждый вариант расширения балкона в Хрущевке имеет определенные особенности и нюансы монтажа:</p>
            <ol>
                <li>Увеличение балкона по подоконнику осуществляется во время обшивки и остекления, в качестве дополнительного декора и добавления площади:
                    <ul class="list-style-disc">
                        <li>основание для будущего подоконника создается исключительно по уровню;</li>
                        <li>для визуального расширения идеально подходит панорамное остекление фасадов алюминиевым профилем;</li>
                        <li>при наличии металлического ограждения балконная конструкция приваривается к нему, а бетонное ограждение соединяется с лоджией анкерами;</li>
                        <li>после установки балконной конструкции проводится монтаж подоконника, его обшивка, отделка и остекление.</li>
                    </ul>
                </li>
                <li>Увеличение балкона в пол осуществляется с верхней части парапета.</li>
                <li>Расширение лоджии по полу отличается сложностью выполнения:
                    <ul class="list-style-disc">
                        <li>            для увеличения пола на расстояние свыше 50 см с каждой стороны до основания требуется получение специального разрешения;</li>
                        <li>            в начале работы обязательно демонтируется парапет или старая балконная конструкция, ремонтируется бетонное основание;</li>
                        <li>            сверху бетонной площадки устанавливается прочный металлический каркас, который фиксируется к бетону и стенам дома с помощью анкерных болтов;</li>
                        <li>для усиления конструкции применяется металлическая труба;</li>
                        <li>после установки увеличенного балкона осуществляется отделка, обшивка и остекление.</li>
                    </ul>
                </li>
            </ol>
            <p class="text-custom-page"><a href="https://windowsgroup.com.ua/plastikovye-dveri/razdvizhnye/">Купить раздвижные двери на балкон</a> можно на нашем сайте, достаточно выбрать понравившуюся модель и заказать. <a href="https://windowsgroup.com.ua/alyuminij/dveri/">Алюминиевые двери под заказ</a> идеально дополнят и украсят ваш выносной балкон.</p>
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
            <h2 class="title-section"> Как выбрать балконные блоки из ПВХ для выносной лоджии?</h2>
            <p class="text-custom-page">В комплектацию оконно-дверного блока для балкона входит несколько элементов:</p>
            <ul class="list-style-disc">
                <li>рама;</li>
                <li>стеклопакет;</li>
                <li>крепеж с запором;</li>
                <li>дополнительные элементы (подоконники, пороги, отливы, крыши).</li>
            </ul>
            <p class="text-custom-page">Для того, чтобы правильно выбрать <a href="https://windowsgroup.com.ua/plastikovye-dveri/balkonnye-bloki/">балконные блоки из ПВХ</a> , следует учесть несколько критериев.</p>
            <h2 class="title-post">Профиль</h2>
            <p class="text-custom-page">            Алюминиевая профильная система отличается прочностью и легкостью. Профиль имеет небольшую ширину и простой дизайн. Из данного материала изготавливаются, как стандартные, так и нестандартные конструкции. Единственным недостатком является неспособность поддержания комнатной температуры в зимнее время года. Исправить данный минус можно, купив балконную конструкцию из теплоизолирующего алюминиевого профиля.</p>
            <p class="text-custom-page">            Пластиковая профильная система относится к категории универсальных профилей. Уровень теплозащиты пластика зависит от глубины и камерности профиля, разновидности стеклопакета и качества установки.</p>
            <p class="text-custom-page">            Узнать <a href="https://windowsgroup.com.ua/plastikovye-okna/">стоимость пластикового окна с установкой </a>можно на нашем сайте, перейдя по указанной ссылке.</p>
            <h2 class="title-post">Стеклопакет</h2>
            <p class="text-custom-page">            Разновидность стеклопакета подбирается с учетом необходимого уровня теплоизоляции и назначения балкона. На жилой лоджии монтируются <a href="https://windowsgroup.com.ua/okna/rehau/">металлопластиковые окна REHAU от производителя.</a> Для нежилого балкона лучше выбрать конструкцию, состоящую из стандартных одинарных стекол.</p>
            <p class="text-custom-page">            Для остекления лоджий с выносом используются оконные конструкции со стеклами различных видов: от опциональных до тонированных.</p>
            <h2 class="title-post">Оконная и дверная фурнитура</h2>

            <p class="text-custom-page">            Функциональность и комфортность управления створками зависит от качества оконной и дверной фурнитуры. Для надежной и длительной эксплуатации балконного блока следует выбрать качественный крепеж. Чтобы защитить квартиру от несанкционированного проникновения, рекомендуется установить взломозащитную фурнитуру.</p>
            <h2 class="title-post">Вспомогательные элементы остекления</h2>
            <p class="text-custom-page">            Для завершенности внешнего вида остекления балконов с выносом используются различные порожки, отливы, откосы и подоконники.</p>
            <p class="text-custom-page">            Установка порога обеспечивает устранение разницы высоты пола, что обеспечивает плавный переход из комнаты на балкон.</p>
            <p class="text-custom-page">            Монтаж отливов осуществляется, когда отсутствуют элементы остекления по парапету. Дополнительно отливы служат защитой от атмосферных осадков.</p>
            <p class="text-custom-page">            Откосы устанавливаются изнутри или снаружи, с целью закрыть все имеющиеся стенки после монтажа балконной конструкции.</p>
            <p class="text-custom-page">            Подоконники обеспечивают дополнительное утепление проема, а также предотвращают запотевание окон. Кроме того, на подоконной доске можно разместить мелкую технику и комнатные растения.</p>
            <h2 class="title-post">Заказать расширение балкона в Киеве</h2>
            <p class="text-custom-page">Компания «Виндовс Груп» предлагает застеклить балкон с выносом, с применением высококачественных, сертифицированных материалов и фурнитуры.</p>
            <p class="text-custom-page">Преимущества заказа расширения балкона у нас:</p>
            <ol>
                <li>            Быстрое и качественное выполнение услуг точно в установленные сроки, вне зависимости от сложности установки.</li>
                <li>            Изготовление балконных конструкций из практичных, безопасных, долговечных материалов и фурнитуры.</li>
                <li>            Производство профильной системы в строгом соответствии с европейскими технологическими стандартами и нормами качества.</li>
                <li>            Заказ выезда мастера на дом с составлением сметы предварительных расчетов.</li>
                <li>            Реализация популярных современных моделей выносных балконных блоков по доступной стоимости изготовителя в Украине.</li>
            </ol>
            <p class="text-custom-page"> При условии правильной эксплуатации срок балконной конструкции составляет 30-40 лет.</p>
            <h2 class="title-post">Цена расширения балкона с выносом под ключ в Киеве</h2>
            <p class="text-custom-page">            Рассчитать стоимость пластикового балкона с выносом можно на нашем сайте в удобном калькуляторе. Для расчета потребуется выбрать следующие критерии:</p>
            <ul class="list-style-disc">
                <li>тип окна;</li>
                <li>механизм открытия;</li>
                <li>ширина и высота конструкции;</li>
                <li>вид профиля;</li>
                <li>элементы дополнительной комплектации.</li>
            </ul>
            <p class="text-custom-page">            После введения необходимых данных перед заказчиком откроются контакты поставщиков, которые необходимы для более подробного уточнения деталей проектирования и установки.</p>
            <p class="text-custom-page">            Альтернативный вариант – заказать выезд мастера для замера. По прибытию на указанный объект специалист произведет точные расчеты и проконсультирует по выбору оптимального балконного блока.</p>
            <p class="text-custom-page">            Узнать цены на расширение балкона можно на сайте компании «Windows Group». Оставьте онлайн-заявку для обратной связи, и мы перезвоним вам в ближайшее время.</p>
        </div>
    </section>

	<section class="section-other-type-windows">
        <div class="container">
            <h2 class="title-section">Вместе с выносом балкона так же выбирают:</h2>
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

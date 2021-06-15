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
			<h1 class="title-post my-3 my-lg-0 title-post-top">Французский балкон</h1>
			<p class="text-custom-page">
                Французская лоджия – это разновидность балкона, устанавливаемая на бетонной площадке с решетчатым ограждением или без него. Панорамные окна устанавливаются перед дверью с наружной стороны проема.
                Отличительной чертой данной конструкции является абсолютное отсутствие площадки или ее минимальная ширина. Полукруглая или прямоугольная форма выступа с красивой кованой решеткой будет смотреться стильно, уютно и изящно.
                Компания «Виндовс Груп» предлагает заказать французский балкон под ключ в Киеве, изготовленный из качественных и безопасных материалов.

            </p>
		</div>

		<div class="price-page-product">
			<div class="container">
				<h2 class="title-section page pt-4 pt-xl-4">Цены на услуги по французским балконам</h2>
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
            <h2 class="title-section"> Виды французских балконов</h2>
            <p class="text-custom-page">Французские лоджии по размеру бетонной площадки бывают:</p>
            <ul class="list-style-disc">
                <li>с полным отсутствием выступа – стандартная конструкция, состоящая из стеклянной двери с металлическим ограждением;</li>
                <li>с наличием выступа – балкон имеет небольшую площадку со средним размером 30-50 см,
                    такое расстояние позволяет разместить объемные горшки или вазоны с цветами.</li>
            </ul>
            <p class="text-custom-page">Часто несущая бетонная плита не превышает длины стопы, но иногда может доходить до полуметра.
                Самыми распространенными разновидностями являются балконные конструкции с коваными ограждениями и панорамными окнами.</p>
            <p class="text-custom-page">Для французского балкона используется несколько видов остекления:</p>
            <ul class="list-style-disc">
                <li>матовое;</li>
                <li>прозрачное;</li>
                <li>тонированное;</li>
                <li>окна от пола до потолка;</li>
                <li> витражное;</li>
                <li> установка пластиковых сэндвич-панелей.</li>
            </ul>
            <p class="text-custom-page">Чтобы упростить уход за балконной конструкцией, в нижней части устанавливаются фрамуги, а верхнюю часть застекляют распашными окнами с глухой рамой.</p>
            <p class="text-custom-page">Для дополнительного декоративного оформления окна украшаются шпросами золотистого, серебристого, белоснежного и черного цвета. Это позволит зрительно разделить балконную конструкцию на единичные и ячеистые сегменты.</p>
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
            <h2 class="title-section">Преимущества французского остекления балконов</h2>
            <p class="text-custom-page"> Основные преимущества лоджии с французскими окнами:</p>
            <ul class="list-style-disc">
                <li>нестандартный изящный вид;</li>
                <li>масштабный вид из окна;</li>
                <li>визуальное увеличение пространства;</li>
                <li>наполнение комнаты естественным светом;</li>
                <li>отсутствие в дополнительной обшивке внешнего парапета лоджии сайдингом или профнастилом;</li>
                <li>максимальное утепление французского балкона по периметру площадки;</li>
                <li>экономия на внутренней отделке балконной конструкции;</li>
                <li>высокий уровень теплоизоляции;</li>
                <li>быстрая установка;</li>
                <li>долговечность и безопасность конструкции;</li>
                <li>отсутствие в необходимости проведения сварочных работ;</li>
                <li>отсутствие в необходимости проведения сварочных работ;</li>
                <li>повышенный уровень защиты от шума, что особенно актуально для тех, кто не любит слышать посторонние звуки с улицы;</li>
                <li>простота ухода и эксплуатации;</li>
                <li>современность дизайна (строгость линий, комбинация металла с декоративной штукатуркой);</li>
                <li>разнообразие вариантов декорирования;</li>
                <li>доступная стоимость.</li>
            </ul>
            <p class="text-custom-page">Кроме того, французский балкон может использоваться в качестве мини-оранжереи, зимнего сада или просто выполнять функцию фасадного декора.</p>
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
            <h2 class="title-section">Французские двери на панорамный балкон</h2>
            <p class="text-custom-page">В оформлении французской балконной конструкции отдельное внимание уделяется выбору дверей.</p>
            <p class="text-custom-page">Французские двери на полностью стеклянный балкон устанавливаются по всей ширине проема. Конструкция состоит из цельных остекленных рам, которые внешне напоминают большие окна размером на весь периметр стены.</p>
            <p class="text-custom-page">Двери различаются в зависимости от материала изготовления, механизма открывания и типа  используемых стекол:</p>
            <ul class="list-style-disc">
                <li>слайдинг – простая дверная конструкция состоит из полотна, перемещаемого посредством роликов по металлическим рельсам;</li>
                <li>наклонно-раздвижные двери – принцип работы основывается на выдвигании и отведении в сторону, при этом проем остается свободным;         подвижная часть дверной конструкции в закрытом состоянии плотно примыкает к балконной раме, поэтому данный тип дверей можно устанавливать при любом виде остекления;</li>
                <li>подъемно-раздвижные двери – конструкция устанавливается в широком дверном проеме, отличительным признаком модели является ее частичное открытие;</li>
                <li> подъемно-сдвижные двери – открытие дверного полотна осуществляется посредством легкого поворота ручки, дверь сначала приподнимается и затем отодвигается в сторону по нижнему или верхнему рельсовому механизму; сдвижные подъемные конструкции изготавливаются размером до 10 м;</li>
                <li>двери складного типа гармошка – внешне похожи на ширму, дверные створки соединяются в цельное полотно посредством складывания в гармошку; складные дверные конструкции изготавливаются высотой 2,5 м и шириной не более 6 м.</li>
            </ul>
            <p class="text-custom-page">Узнать <a href="https://windowsgroup.com.ua/plastikovye-dveri/balkonnye-bloki/">цены на балконные блоки из ПВХ</a> можно на нашем сайте в прайсе или, позвонив по телефону.</p>
            <p class="text-custom-page"> Стеклопакеты могут устанавливаться в однокамерном или двухкамерном виде. Для остекления используется закаленное стекло, которое выдерживает механические нагрузки.</p>
            <h2 class="title-post">Преимущества заказа балкона под ключ</h2>
            <p class="text-custom-page">Установка французского балкона подразумевает определенные нюансы монтажа, поэтому это ответственное занятие лучше поручить специалистам своего дела.</p>
            <p class="text-custom-page"><a href="https://windowsgroup.com.ua/balkony-pod-klyuch/">Изготовление балконов под ключ в Киеве</a> имеет определенные преимущества:</p>
            <ul class="list-style-disc">
                <li>максимальный пропуск дневного света;</li>
                <li>зрительное расширение пространства, балкон служит продолжением комнаты;</li>
                <li>постоянная и улучшенная циркуляция воздуха помещения;</li>
                <li>утонченный и модный дизайн;</li>
                <li>множество вариантов оформления панорамного балкона;</li>
                <li>индивидуальный подбор оптимальной конфигурации балконной конструкции;</li>
                <li>оперативное и качественное выполнение услуги;</li>
                <li>реализация заказа по любым пожеланиям клиента.</li>
            </ul>
            <p class="text-custom-page"> Французские двери сочетаются с любым традиционным или современным дизайном помещения.</p>
            <h2 class="title-post">Рассчитать стоимость французского балкона в Киеве</h2>
            <p class="text-custom-page">На нашем сайте доступен удобный онлайн калькулятор, который поможет легко и быстро рассчитать цену пластикового французского балкона.</p>
            <p class="text-custom-page">Во встроенном многофункциональном калькуляторе можно также просчитать ориентировочную стоимость будущего балконного блока.</p>
            <p class="text-custom-page">Для расчетов важно знать несколько параметров:</p>
            <ul class="list-style-disc">
                <li>тип окна (Г-образный французский, французское остекление, П-образный французский);</li>
                <li>механизм открытия;</li>
                <li>размеры проема (ширина и высота);</li>
                <li>тип и толщина профиля ПВХ от производителей Aluplast, Openteck, Века,  Rehau, KBE, Salamander, Викналенд, WDS, Windoffs;</li>
                <li>тип стеклопакета;</li>
                <li>тип фурнитуры (Standart, Premium);</li>
                <li>дополнительная комплектация (с подоконником, наличие отливов, москитной сетки, откосов, монтажа).</li>
            </ul>
            <p class="text-custom-page">После введения вышеперечисленных критериев клиенту станут доступны данные поставщиков, которые необходимы для более детального уточнения условий заказа, оплаты и доставки.</p>
            <h2 class="title-post">Французский балкон под ключ в Киеве</h2>
            <p class="text-custom-page">Цена установки панорамного балкона под ключ в Украине включает в себя следующий перечень услуг:</p>
            <ul class="list-style-disc">
                <li>выход лоджии в пол для расширения квадратных метров;</li>
                <li>утепление балконов с устранением щелей, с применением монтажной пены, а также герметичных и влагоустойчивых стройматериалов;</li>
                <li>установка крыши/козырька;</li>
                <li>реконструкция балконов;</li>
                <li>остекление любой сложности холодными теплыми профильными системами;</li>
                <li>дополнительная обшивка с отделкой лоджий;</li>
                <li>монтаж напольного покрытия ламинатом или линолеумом.</li>
            </ul>
            <p class="text-custom-page">  Узнать <a href="https://windowsgroup.com.ua/alyuminij/okna/">стоимость алюминиевых окон</a> для французского балкона можно на сайте в прайс-листе или, позвонив по указанному телефону. Менеджеры-консультанты компании «Windows Group» просчитают вам ориентировочную стоимость вашей панорамной лоджии.</p>
            <p class="text-custom-page">  Альтернативный вариант – оставить онлайн заявку на нашем сайте для вызова мастера. По прибытию на объект опытные специалисты проведут необходимые замеры для последующего изготовления балконной конструкции.</p>
            <p class="text-custom-page">  <a href="https://windowsgroup.com.ua/plastikovye-dveri/mezhkomnatnye/">Купить металлопластиковые межкомнатные двери</a> и
                <a href="https://windowsgroup.com.ua/">металлопластиковые окна под заказ в Киеве</a> по приемлемым ценам можно в нашей компании «Виндовс Груп».
                Мы предлагаем широкий выбор продукции с гарантией качества и лучшего обслуживания.</p>
        </div>
    </section>
	<section class="section-other-type-windows">
        <div class="container">
            <h2 class="title-section">Вместе с французскими балконами так же выбирают:</h2>
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

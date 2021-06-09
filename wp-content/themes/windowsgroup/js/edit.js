// Очистка URL
history.pushState("", document.title, window.location.pathname);
const thisHref = window.location.href;

// Validation
$('[name="tel-460"]').mask("+38 (099) 999-99-99");

function validateEmail(email) {
  	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  	return re.test(email);
}


// Header menu
const topMenu = document.querySelector('div.menu-menu-1-container');
topMenu.setAttribute('id','navbarText');
const ulMenu = document.querySelector('div.menu-menu-1-container > ul');
ulMenu.setAttribute('class','navbar-nav');
ulMenu.setAttribute('id','menu');
const liMenu = document.querySelectorAll('div.menu-menu-1-container > ul > li');
liMenu.forEach(function(item) {
	item.setAttribute('class','menu-item dropdown');
})
const aMenu = document.querySelectorAll('div.menu-menu-1-container > ul > li > a');
aMenu.forEach(function(item) {
	item.setAttribute('onclick','goToLink(this)');
	item.setAttribute('class','menu-link');
	item.setAttribute('data-toggle','collapse');
	item.setAttribute('role','button');
	item.setAttribute('aria-expanded','false');
	item.setAttribute('aria-controls','');
})
const aChildMenu = document.querySelectorAll('div.menu-menu-1-container > ul > li > ul a');
aChildMenu.forEach(function(item) {
	item.setAttribute('class','dropdown-item');
})
let childrenMenu = document.querySelectorAll('div.menu-menu-1-container > ul > li > ul');
childrenMenu.forEach(function(item) {
	item.setAttribute('class','dropdown-menu collapse menu-wrap');
	let liChildren = item.childNodes;
	let newHtml = '';
	[].forEach.call(liChildren, function(el) {
		if (el.children) {
			newHtml += el.innerHTML;
		}							
	})
	item.innerHTML = newHtml;
})
const ulMobileMenu = document.querySelector('ul.list-menu-top.mob.d-lg-none');
const mobileMenu = ulMobileMenu.innerHTML;
ulMobileMenu.remove();
const textHtml = '<ul class="list-menu-top mob d-lg-none">'+mobileMenu+'</ul>';
topMenu.insertAdjacentHTML('beforeend', textHtml);
topMenu.setAttribute('class','ready-menu collapse navbar-collapse');

$('#navbarText li > a').each((k,el)=>{
	if ($(el).attr('href') === "https://windowsgroup.com.ua/komplektuyushchie/") {
		$(el).removeAttr('href');
		$(el).removeAttr('onclick');
		$(el).siblings('ul').append(`
			<a href="https://windowsgroup.com.ua/komplektuyushchie/" class="dropdown-item">
			Другие...</a>
			`);
	}
})


// Переход по ссылке в родительском элементе топ-меню
function goToLink(elem){
	const href = elem.getAttribute('href');
	document.location.href = href;
}


// Вызов поп-ап 
const phoneItems = document.querySelectorAll('span.icon-phone-table');
phoneItems.forEach(function(item) {
	item.parentElement.addEventListener('click', function (event) {
		localStorage.setItem('scrollTo', $(item).offset().top);
		document.getElementById('call-back-button').click();
	});
})
const mobileItems = document.querySelectorAll('button.icon-mobile-phone');
mobileItems.forEach(function(item) {
	item.addEventListener('click', function (event) {
		localStorage.setItem('scrollTo', $(item).offset().top);
		document.getElementById('call-back-button').click();
	});
})
const infoBankItems = document.querySelectorAll('.item-info-bank .btn-custom-project');
infoBankItems.forEach(function(item) {
	item.addEventListener('click', function (event) {
		event.preventDefault();
		localStorage.setItem('scrollTo', $(item).offset().top);
		document.getElementById('call-back-button').click();
	});
})
const standartLuxItems = document.querySelectorAll('.list-type-standart-lux .btn-custom-project');
standartLuxItems.forEach(function(item) {
	item.addEventListener('click', function (event) {
		event.preventDefault();
		localStorage.setItem('scrollTo', $(item).offset().top);
		document.getElementById('call-back-button').click();
	});
})
const glassItems = document.querySelectorAll('.item-type-glass-partitions .btn-custom-project');
glassItems.forEach(function(item) {
	item.addEventListener('click', function (event) {
		event.preventDefault();
		localStorage.setItem('scrollTo', $(item).offset().top);
		document.getElementById('call-back-button').click();
	});
})
const measuringItems = document.querySelectorAll('button.icon-measuring-tape');
measuringItems.forEach(function(item) {
	item.addEventListener('click', function (event) {
		localStorage.setItem('scrollTo', $(item).offset().top);
		document.getElementById('free-measurement-button').click();
	});
})
const discountItems = document.querySelectorAll('button.icon-percentage-discount');
discountItems.forEach(function(item) {
	item.addEventListener('click', function (event) {
		localStorage.setItem('scrollTo', $(item).offset().top);
		document.getElementById('get-discount-button').click();
	});
})


/**
 * Отправка форм.
 **/ 
 const wpCF7Form = document.querySelector('form.wpcf7-form');
 const wpCF7Name = document.querySelector('form.wpcf7-form input[name="your-name"]');
 const wpCF7Tel = document.querySelector('form.wpcf7-form input[name="tel-460"]');
 const wpCF7Subject = document.querySelector('form.wpcf7-form input[name="your-subject"]');
 const wpCF7Message = document.querySelector('form.wpcf7-form textarea[name="your-message"]');


// Обратный звонок
const callBackButton = document.querySelectorAll('.call-back-form button[type="submit"]');

callBackButton.forEach(function(item) {
	item.addEventListener('click', function (event) {
		event.preventDefault();	

		const parent = $(item).parent();
		
		const email = parent.find('input[type="email"]').val();
		if (!validateEmail(email) && parent.find('input[type="email"]').length > 0) {
			alert('Заполните корректно поле с email! Пример: me@example.com');
			return false;
		}		
		
		const callBackName = parent.find('input[name="your-name"]');
		const callBackTel = parent.find('input[name="tel-460"]');
		const callBackMessage = parent.find('[name="your-message"]');
		
		if (!parent.hasClass('modal-form')) {
			localStorage.setItem('scrollTo', parent.offset().top + 150);
		}

		if (callBackName.val() && (callBackTel.val().length == 19)) {
			wpCF7Name.value = callBackName.val();
			wpCF7Tel.value = callBackTel.val();
			wpCF7Subject.value = 'Перезвоните мне';
			wpCF7Message.value = callBackMessage.val()+'\r\n'+'Письмо было отправлено со страницы: '+thisHref;
			localStorage.setItem('wpCF7Boolean', 'true');
			wpCF7Form.submit();						
		}
		else {
			const errorHtml = 'Заполните корректно поле с именем!\r\n';
			const errorHtmlTel = 'Заполните корректно поле с телефоном! Пример: +38 (333) 333-33-33';
			let message = '';
			if(!callBackName.val()){
				message += errorHtml;
			}
			if(!(callBackTel.val().length == 19)){
				message += errorHtmlTel;
			}
			alert(message);
		}
	});
});


// Получить Скидку
const getDiscountButton = document.querySelectorAll('.get-discount-form button[type="submit"]');

getDiscountButton.forEach(function(item) {
	item.addEventListener('click', function (event) {
		event.preventDefault();

		const parent = $(item).parent();

		const email = parent.find('input[type="email"]').val();
		if (!validateEmail(email) && parent.find('input[type="email"]').length > 0) {
			alert('Заполните корректно поле с email! Пример: me@example.com');
			return false;
		}
		
		const getDiscountName = parent.find('input[name="your-name"]');
		const getDiscountTel = parent.find('input[name="tel-460"]');
		const getDiscountMessage = parent.find('[name="your-message"]');
		
		if (!parent.hasClass('modal-form')) {
			localStorage.setItem('scrollTo', parent.offset().top + 150);
		}

		if (getDiscountName.val() && (getDiscountTel.val().length == 19)) {
			wpCF7Name.value = getDiscountName.val();
			wpCF7Tel.value = getDiscountTel.val();
			wpCF7Subject.value = 'Получить Скидку';
			wpCF7Message.value = 'Количество окон: '+getDiscountMessage.val()+'\r\n'+'Письмо было отправлено со страницы: '+thisHref;
			localStorage.setItem('wpCF7Boolean', 'true');
			wpCF7Form.submit();						
		}
		else {
			const errorHtml = 'Заполните корректно поле с именем!\r\n';
			const errorHtmlTel = 'Заполните корректно поле с телефоном! Пример: +38 (333) 333-33-33';
			let message = '';
			if(!getDiscountName.val()){
				message += errorHtml;
			}
			if(!(getDiscountTel.val().length == 19)){
				message += errorHtmlTel;
			}
			alert(message);
		}
	});
});


// Бесплатный замер
const freeMeasurementButton = document.querySelectorAll('.free-measurement-form button[type="submit"]');

freeMeasurementButton.forEach(function(item) {
	item.addEventListener('click', function (event) {
		event.preventDefault();

		let freeMeasurementName = null;
		let freeMeasurementTel = null;
		let freeMeasurementMessage = null;
		
		if ($(item).hasClass('big-form')) {
			const parent = $(item).parent().parent().parent().parent();
			localStorage.setItem('scrollTo', parent.offset().top + 150);

			const email = parent.find('input[type="email"]').val();
			if (!validateEmail(email) && parent.find('input[type="email"]').length > 0) {
				alert('Заполните корректно поле с email! Пример: me@example.com');
				return false;
			}
			
			freeMeasurementName = parent.find('input[name="your-name"]');
			freeMeasurementTel = parent.find('input[name="tel-460"]');
			freeMeasurementMessage = 'Город: '+parent.find('[name="city"]').val()+'\r\n';
			freeMeasurementMessage += 'Улица: '+parent.find('[name="street"]').val()+'\r\n';
			freeMeasurementMessage += 'Дом: '+parent.find('[name="house"]').val()+'\r\n';
			freeMeasurementMessage += 'Квартира: '+parent.find('[name="room"]').val()+'\r\n';
			freeMeasurementMessage += 'Дата: '+parent.find('[name="date"]').val()+'\r\n';
			freeMeasurementMessage += 'Время: '+parent.find('[name="time"]').val()+'\r\n';
			freeMeasurementMessage += 'Комментарий: '+parent.find('[name="your-message"]').val();

			if (freeMeasurementName.val() && (freeMeasurementTel.val().length == 19)) {
				wpCF7Name.value = freeMeasurementName.val();
				wpCF7Tel.value = freeMeasurementTel.val();
				wpCF7Subject.value = 'Заявка на бесплатный замер';
				wpCF7Message.value = freeMeasurementMessage+'\r\n'+'Письмо было отправлено со страницы: '+thisHref;
				localStorage.setItem('wpCF7Boolean', 'true');
				wpCF7Form.submit();						
			}
			else {
				const errorHtml = 'Заполните корректно поле с именем!\r\n';
				const errorHtmlTel = 'Заполните корректно поле с телефоном! Пример: +38 (333) 333-33-33';
				let message = '';
				if(!freeMeasurementName.val()){
					message += errorHtml;
				}
				if(!(freeMeasurementTel.val().length == 19)){
					message += errorHtmlTel;
				}
				alert(message);
			}
		}
		else{
			const parent = $(item).parent();

			const email = parent.find('input[type="email"]').val();
			if (!validateEmail(email) && parent.find('input[type="email"]').length > 0) {
				alert('Заполните корректно поле с email! Пример: me@example.com');
				return false;
			}
			
			freeMeasurementMessage = parent.find('[name="your-message"]');
			freeMeasurementName = parent.find('input[name="your-name"]');
			freeMeasurementTel = parent.find('input[name="tel-460"]');

			if (!parent.hasClass('modal-form')) {
				localStorage.setItem('scrollTo', parent.offset().top + 150);
			}

			if (freeMeasurementName.val() && (freeMeasurementTel.val().length == 19)) {
				wpCF7Name.value = freeMeasurementName.val();
				wpCF7Tel.value = freeMeasurementTel.val();
				wpCF7Subject.value = 'Заявка на бесплатный замер';
				wpCF7Message.value = (freeMeasurementMessage.val())?freeMeasurementMessage.val():'Заявка на бесплатный замер'+'\r\n'+'Письмо было отправлено со страницы: '+thisHref;
				localStorage.setItem('wpCF7Boolean', 'true');
				wpCF7Form.submit();						
			}
			else {
				const errorHtml = 'Заполните корректно поле с именем!\r\n';
				const errorHtmlTel = 'Заполните корректно поле с телефоном! Пример: +38 (333) 333-33-33';
				let message = '';
				if(!freeMeasurementName.val()){
					message += errorHtml;
				}
				if(!(freeMeasurementTel.val().length == 19)){
					message += errorHtmlTel;
				}
				alert(message);
			}
		}		
	});
});


// Заказ подоконника
function addSillForm(elem){
	const form = $(elem).parent().parent().parent().parent();
	const quantity = form.find('ul').length;

	if (quantity < 10) {
		form.append(`
			<ul class="form-windowsill-wrapper">
			<li class="top-row-wrapper">
			<div class="form-group"><label>Укажите ширину подоконника мм</label> <input name="width" class="form-control" placeholder="600"></div>
			<div class="form-group"><label>Укажите длинну подоконника мм</label> <input name="length" class="form-control" placeholder="1200"></div>
			<div class="form-group"><label>Укажите необходимое количество</label> <input name="quantity" class="form-control" placeholder="1"></div>
			<div class="form-group"><label>Укажите название модели</label> <input name="modelName" class="form-control" placeholder=""></div>
			<div class="form-collapse-control">
			<div class="btn-add-type" onclick="removeSillForm(this)" data-clone-btn="">-</div>
			</div>
			</li>
			<li class="bottom-row-wrapper">
			<div class="form-windowsill-description">
			<div class="form-group comment"><label></label> <textarea name="your-message" class="form-control" rows="3" placeholder="Комментарий к заказу"></textarea></div>
			</div>
			</li>
			</ul>
			`);
	}	
}

function removeSillForm(elem){
	$(elem).parent().parent().parent().remove();
}

const windowSillButton = document.querySelectorAll('form.sending-sill button[type="submit"]');

windowSillButton.forEach(function(item) {
	item.addEventListener('click', function (event) {
		event.preventDefault();

		let windowSillName = null;
		let windowSillTel = null;
		let windowSillMessage = '';
		
		if ($(item).hasClass('big-form')) {
			const parent = $(item).parent().parent().parent().parent();
			localStorage.setItem('scrollTo', parent.offset().top + 150);

			const email = parent.find('input[type="email"]').val();
			if (!validateEmail(email) && parent.find('input[type="email"]').length > 0) {
				alert('Заполните корректно поле с email! Пример: me@example.com');
				return false;
			}
			
			windowSillName = parent.find('input[name="your-name"]');
			windowSillTel = parent.find('input[name="tel-460"]');
			
			parent.find('ul').each((k,elem)=>{
				$(elem).find('.form-group').each((j,el)=>{
					if ($(el).find('[name="width"]').val() != undefined) {
						windowSillMessage += 'Ширина '+(k+1)+'-го подоконника: '+$(el).find('[name="width"]').val()+'\r\n';							
					}
					if ($(el).find('[name="length"]').val() != undefined) {
						windowSillMessage += 'Длина '+(k+1)+'-го подоконника: '+$(el).find('[name="length"]').val()+'\r\n';							
					}
					if ($(el).find('[name="quantity"]').val() != undefined) {
						windowSillMessage += 'Количество '+(k+1)+'-го подоконника: '+$(el).find('[name="quantity"]').val()+'\r\n';							
					}
					if ($(el).find('[name="modelName"]').val() != undefined) {
						windowSillMessage += 'Модель '+(k+1)+'-го подоконника: '+$(el).find('[name="modelName"]').val()+'\r\n';							
					}
					if ($(el).find('[name="your-message"]').val() != undefined) {
						windowSillMessage += 'Комментарий '+(k+1)+'-го подоконника: '+$(el).find('[name="your-message"]').val()+'\r\n';							
					}
				})
			})			

			if (windowSillName.val() && (windowSillTel.val().length == 19)) {
				wpCF7Name.value = windowSillName.val();
				wpCF7Tel.value = windowSillTel.val();
				wpCF7Subject.value = 'Заказ подоконника';
				wpCF7Message.value = windowSillMessage+'\r\n'+'Письмо было отправлено со страницы: '+thisHref;
				localStorage.setItem('wpCF7Boolean', 'true');
				wpCF7Form.submit();						
			}
			else {
				const errorHtml = 'Заполните корректно поле с именем!\r\n';
				const errorHtmlTel = 'Заполните корректно поле с телефоном! Пример: +38 (333) 333-33-33';
				let message = '';
				if(!windowSillName.val()){
					message += errorHtml;
				}
				if(!(windowSillTel.val().length == 19)){
					message += errorHtmlTel;
				}
				alert(message);
			}
		}		
	});
});


// Заказ Москитной сетки
function addMosquitoForm(elem){
	const form = $(elem).parent().parent().parent().parent();
	const quantity = form.find('ul').length;

	if (quantity < 10) {
		if (!form.hasClass('only-one')) {
			form.append(`
			<ul class="form-windowsill-wrapper">
			<li class="top-row-wrapper">
			<div class="form-group"><label>Укажите тип сетки</label> <input name="type" class="form-control" placeholder="600"></div>
			<div class="form-group"><label>Укажите ширину сетки мм</label> <input name="width" class="form-control" placeholder="1200"></div>
			<div class="form-group"><label>Укажите необходимое количество</label> <input name="quantity" class="form-control" placeholder="1"></div>
			<div class="form-group"><label>Укажите высоту сетки мм</label> <input name="hight" class="form-control" placeholder=""></div>
			<div class="form-collapse-control">
			<div class="btn-add-type" onclick="removeMosquitoForm(this)" data-clone-btn="">-</div>
			</div>
			</li>
			<li class="bottom-row-wrapper">
			<div class="form-windowsill-description">
			<div class="form-group comment"><label></label> <textarea name="your-message" class="form-control" rows="3" placeholder="Комментарий к заказу"></textarea></div>
			</div>
			</li>
			</ul>
			`);
		}
		else{
			form.append(`
			<ul class="form-windowsill-wrapper">
			<li class="top-row-wrapper">
			<div class="form-group"><input type="hidden" name="type" value=""></div>
			<div class="form-group"><input type="hidden" name="quantity" value="1"></div>
			<div class="form-group"><label>Укажите ширину сетки мм</label> <input name="width" class="form-control" placeholder="1200"></div>			
			<div class="form-group"><label>Укажите высоту сетки мм</label> <input name="hight" class="form-control" placeholder=""></div>
			<div class="form-collapse-control">
			<div class="btn-add-type" onclick="removeMosquitoForm(this)" data-clone-btn="">-</div>
			</div>
			</li>
			<li class="bottom-row-wrapper">
			<div class="form-windowsill-description">
			<div class="form-group comment"><label></label> <textarea name="your-message" class="form-control" rows="3" placeholder="Комментарий к заказу"></textarea></div>
			</div>
			</li>
			</ul>
			`);
		}
	}	
}

function removeMosquitoForm(elem){
	$(elem).parent().parent().parent().remove();
}

const windowMosquitoButton = document.querySelectorAll('form.sending-mosquito-net button[type="submit"]');

windowMosquitoButton.forEach(function(item) {
	item.addEventListener('click', function (event) {
		event.preventDefault();

		let windowMosquitoName = null;
		let windowMosquitoTel = null;
		let windowMosquitoCity = '';
		let windowMosquitoMessage = '';
		
		if ($(item).hasClass('big-form')) {
			const parent = $(item).parent().parent().parent().parent().parent();
			localStorage.setItem('scrollTo', parent.offset().top + 150);

			const email = parent.find('input[type="email"]').val();
			if (!validateEmail(email) && parent.find('input[type="email"]').length > 0) {
				alert('Заполните корректно поле с email! Пример: me@example.com');
				return false;
			}
			
			windowMosquitoName = parent.find('input[name="your-name"]');
			windowMosquitoTel = parent.find('input[name="tel-460"]');
			windowMosquitoCity = parent.find('input[name="city"]').val();

			if (!parent.hasClass('only-one')){
				parent.find('ul').each((k,elem)=>{
					$(elem).find('.form-group').each((j,el)=>{
						if ($(el).find('[name="type"]').val() != undefined) {
							windowMosquitoMessage += 'Тип '+(k+1)+'-ой сетки: '+$(el).find('[name="type"]').val()+'\r\n';							
						}
						if ($(el).find('[name="width"]').val() != undefined) {
							windowMosquitoMessage += 'Ширина '+(k+1)+'-ой сетки: '+$(el).find('[name="width"]').val()+'\r\n';							
						}
						if ($(el).find('[name="quantity"]').val() != undefined) {
							windowMosquitoMessage += 'Количество '+(k+1)+'-ой сетки: '+$(el).find('[name="quantity"]').val()+'\r\n';							
						}
						if ($(el).find('[name="hight"]').val() != undefined) {
							windowMosquitoMessage += 'Высота '+(k+1)+'-ой сетки: '+$(el).find('[name="hight"]').val()+'\r\n';							
						}
						if ($(el).find('[name="your-message"]').val() != undefined) {
							windowMosquitoMessage += 'Комментарий '+(k+1)+'-ой сетки: '+$(el).find('[name="your-message"]').val()+'\r\n';							
						}
					})
				})
			}
			else{
				let typeVal = '';
				parent.find('ul').each((k,elem)=>{
					$(elem).find('.form-group').each((j,el)=>{
						if ($(el).find('[name="type"]').val()){
							typeVal = $(el).find('[name="type"]').val();
						}
						if ($(el).find('[name="type"]').val() != undefined) {
							windowMosquitoMessage += 'Тип '+(k+1)+'-ой сетки: '+typeVal+'\r\n';							
						}
						if ($(el).find('[name="width"]').val() != undefined) {
							windowMosquitoMessage += 'Ширина '+(k+1)+'-ой сетки: '+$(el).find('[name="width"]').val()+'\r\n';							
						}
						if ($(el).find('[name="quantity"]').val() != undefined) {
							windowMosquitoMessage += 'Количество '+(k+1)+'-ой сетки: '+$(el).find('[name="quantity"]').val()+'\r\n';							
						}
						if ($(el).find('[name="hight"]').val() != undefined) {
							windowMosquitoMessage += 'Высота '+(k+1)+'-ой сетки: '+$(el).find('[name="hight"]').val()+'\r\n';							
						}
						if ($(el).find('[name="your-message"]').val() != undefined) {
							windowMosquitoMessage += 'Комментарий '+(k+1)+'-ой сетки: '+$(el).find('[name="your-message"]').val()+'\r\n';							
						}
					})
				})
			}
						
			if (windowMosquitoName.val() && (windowMosquitoTel.val().length == 19)) {
				wpCF7Name.value = windowMosquitoName.val();
				wpCF7Tel.value = windowMosquitoTel.val();
				wpCF7Subject.value = 'Заказ москитной сетки';
				wpCF7Message.value = 'Город: '+windowMosquitoCity+'\r\n'+windowMosquitoMessage+'\r\n'+'Письмо было отправлено со страницы: '+thisHref;
				localStorage.setItem('wpCF7Boolean', 'true');
				wpCF7Form.submit();						
			}
			else {
				const errorHtml = 'Заполните корректно поле с именем!\r\n';
				const errorHtmlTel = 'Заполните корректно поле с телефоном! Пример: +38 (333) 333-33-33';
				let message = '';
				if(!windowMosquitoName.val()){
					message += errorHtml;
				}
				if(!(windowMosquitoTel.val().length == 19)){
					message += errorHtmlTel;
				}
				alert(message);
			}
		}		
	});
});


// Заказ Отливов
function addCanopyForm(elem){
	const form = $(elem).parent().parent().parent().parent();
	const quantity = form.find('ul').length;

	if (quantity < 10) {
		form.append(`
			<ul class="form-windowsill-wrapper">
			<li class="top-row-wrapper">
			<div class="form-group"><label>Укажите ширину отлива мм</label> <input name="width" class="form-control" placeholder="600"></div>
			<div class="form-group"><label>Укажите длинну отлива мм</label> <input name="length" class="form-control" placeholder="1200"></div>
			<div class="form-group"><label>Укажите необходимое количество</label> <input name="quantity" class="form-control" placeholder="1"></div>
			<div class="form-group"><label>Укажите тип материала</label> <input name="type" class="form-control" placeholder=""></div>
			<div class="form-collapse-control">
			<div class="btn-add-type" onclick="removeCanopyForm(this)" data-clone-btn="">-</div>
			</div>
			</li>
			<li class="bottom-row-wrapper">
			<div class="form-windowsill-description">
			<div class="form-group comment"><label></label> <textarea name="your-message" class="form-control" rows="3" placeholder="Комментарий к заказу"></textarea></div>
			</div>
			</li>
			</ul>
			`);
	}	
}

function removeCanopyForm(elem){
	$(elem).parent().parent().parent().remove();
}

const windowCanopyButton = document.querySelectorAll('form.sending-canopy button[type="submit"]');

windowCanopyButton.forEach(function(item) {
	item.addEventListener('click', function (event) {
		event.preventDefault();

		let windowCanopyName = null;
		let windowCanopyTel = null;
		let windowCanopyMessage = '';
		
		if ($(item).hasClass('big-form')) {
			const parent = $(item).parent().parent().parent().parent();
			localStorage.setItem('scrollTo', parent.offset().top + 150);

			const email = parent.find('input[type="email"]').val();
			if (!validateEmail(email) && parent.find('input[type="email"]').length > 0) {
				alert('Заполните корректно поле с email! Пример: me@example.com');
				return false;
			}
			
			windowCanopyName = parent.find('input[name="your-name"]');
			windowCanopyTel = parent.find('input[name="tel-460"]');
			
			parent.find('ul').each((k,elem)=>{
				$(elem).find('.form-group').each((j,el)=>{
					if ($(el).find('[name="width"]').val() != undefined) {
						windowCanopyMessage += 'Ширина '+(k+1)+'-го отлива: '+$(el).find('[name="width"]').val()+'\r\n';							
					}
					if ($(el).find('[name="length"]').val() != undefined) {
						windowCanopyMessage += 'Длина '+(k+1)+'-го отлива: '+$(el).find('[name="length"]').val()+'\r\n';							
					}
					if ($(el).find('[name="quantity"]').val() != undefined) {
						windowCanopyMessage += 'Количество '+(k+1)+'-го отлива: '+$(el).find('[name="quantity"]').val()+'\r\n';							
					}
					if ($(el).find('[name="modelName"]').val() != undefined) {
						windowCanopyMessage += 'Тип '+(k+1)+'-го отлива: '+$(el).find('[name="type"]').val()+'\r\n';							
					}
					if ($(el).find('[name="your-message"]').val() != undefined) {
						windowCanopyMessage += 'Комментарий '+(k+1)+'-го отлива: '+$(el).find('[name="your-message"]').val()+'\r\n';							
					}
				})
			})			

			if (windowCanopyName.val() && (windowCanopyTel.val().length == 19)) {
				wpCF7Name.value = windowCanopyName.val();
				wpCF7Tel.value = windowCanopyTel.val();
				wpCF7Subject.value = 'Заказ отлива';
				wpCF7Message.value = windowCanopyMessage+'\r\n'+'Письмо было отправлено со страницы: '+thisHref;
				localStorage.setItem('wpCF7Boolean', 'true');
				wpCF7Form.submit();						
			}
			else {
				const errorHtml = 'Заполните корректно поле с именем!\r\n';
				const errorHtmlTel = 'Заполните корректно поле с телефоном! Пример: +38 (333) 333-33-33';
				let message = '';
				if(!windowCanopyName.val()){
					message += errorHtml;
				}
				if(!(windowCanopyTel.val().length == 19)){
					message += errorHtmlTel;
				}
				alert(message);
			}
		}		
	});
});


// Попап успешной отправки
if (localStorage.getItem('wpCF7Boolean') === 'true') {
	localStorage.setItem('wpCF7Boolean', 'false');
	document.getElementById('success-send-button').click();
}
document.getElementById('success-send-button-after').addEventListener('click', function (event) {	
	if (localStorage.getItem('scrollTo')) {
		let top = localStorage.getItem('scrollTo');
		window.scrollTo(0, (parseInt(top) - 500));
		localStorage.removeItem('scrollTo');
	}	
	document.querySelector('#exampleModal-3 button.close').click();	
});


/*breadcrumbs*/
$('.breadcrumbs__separator').text('/');
$('.breadcrumbs').addClass('breadcrumb');


// Сетка под Цвет Окна
$('#color-list input').change((e)=>{
	const target = $(e.target).attr('data-target');
	$('.block-color-selection .block-colors > div').hide();
	$(target).parent().show();
});


// Отправка заказа с калькулятором
let calcCategory = '';
let calcProduct = '';
let calcFurnitureType = '';
let calcBrandModel = '';
let calcChamber = '';
let calcFurnitureBrand = '';
let calcWindowsill = '';
let calcLowTide = '';
let calcNet = '';
let calcDevelop = '';
let calcSlope = '';
let calcMessage = '';
let calcWidth = '';
let calcHeight = '';
let calcSum = '';
let calcNetColor = '';
let calcNetType = '';

$('.btn-calculate-section-bottom').click((e)=>{
	
	calcMessage = '';
	
	// Москитки
	$('.section-calculator-page input:checked').each((k,el)=>{
		if ($(el).attr('name').indexOf('chooseСolor') != -1) {
			calcNetColor = $(el).parent().find('label').text();
		}
		if ($(el).attr('name').indexOf('exampleType') != -1) {
			calcNetType = $(el).parent().find('label').text();
		}
	})
	
	// Окна
	$('.section-calculator input:checked').each((k,el)=>{
		if (!($(el).parent().css('display') === 'none')) {
			
			if ($(el).attr('id').indexOf('category') != -1) {
				calcCategory = $(el).parent().find('label').text();
			}
			if ($(el).attr('id').indexOf('product') != -1) {
				calcProduct = $(el).parent().find('label').text();
			}
			if ($(el).attr('id').indexOf('furniture-type') != -1) {
				calcFurnitureType = $(el).parent().find('label').text();
			}
			if ($(el).attr('id').indexOf('brand-model') != -1) {
				calcBrandModel = $(el).parent().find('label').text();
			}
			if ($(el).attr('id').indexOf('chamber') != -1) {
				calcChamber = $(el).parent().find('label').text();
			}
			if ($(el).attr('id').indexOf('furniture-brand') != -1) {
				calcFurnitureBrand = $(el).parent().find('label').text();
			}
			if ($(el).attr('id').indexOf('windowsill') != -1) {
				calcWindowsill = $(el).parent().find('label').text();
			}
			if ($(el).attr('id').indexOf('low-tide') != -1) {
				calcLowTide = $(el).parent().find('label').text();
			}
			if ($(el).attr('id').indexOf('net') != -1) {
				calcNet = $(el).parent().find('label').text();
			}
			if ($(el).attr('id').indexOf('develop') != -1) {
				calcDevelop = $(el).parent().find('label').text();
			}
			if ($(el).attr('id').indexOf('slope') != -1) {
				calcSlope = $(el).parent().find('label').text();
			}
			console.log($(el).attr('id') +': '+ $(el).val() + ' | ' + $(el).parent().find('label').text());
		}		
	})

	calcWidth = $("#width").val();
	calcHeight = $("#height").val();
	
	// Окна
	if (calcCategory) {
		calcMessage += 'Категория : '+calcCategory+'\r\n';
		calcMessage += 'Тип окна : '+calcProduct+'\r\n';
		calcMessage += 'Тип открытия : '+calcFurnitureType+'\r\n';
		calcMessage += 'Профиль : '+calcBrandModel+'\r\n';
		calcMessage += 'Стеклопакет : '+calcChamber+'\r\n';
		calcMessage += 'Фурнитура : '+calcFurnitureBrand+'\r\n';
		calcMessage += 'Подоконник : '+calcWindowsill+'\r\n';								
		calcMessage += 'Отлив : '+calcLowTide+'\r\n';
		calcMessage += 'Москитная сетка : '+calcNet+'\r\n';
		calcMessage += 'Монтаж : '+calcDevelop+'\r\n';
		calcMessage += 'Откосы : '+calcSlope+'\r\n';
		calcMessage += 'Ширина : '+calcWidth+'\r\n';
		calcMessage += 'Высота : '+calcHeight+'\r\n';
	}
	// Москитки
	if (calcNetColor) {
		calcMessage += 'Выбор цвета рамки : '+calcNetColor+'\r\n';
		calcMessage += 'Тип сетки : '+calcNetType+'\r\n';
		calcMessage += 'Ширина : '+calcWidth+'\r\n';
		calcMessage += 'Высота : '+calcHeight+'\r\n';
	}

	setTimeout(()=>{
		calcSum = $('#sum-calculate').text();		
	},1000);

})

$('.bottom-section-form .send-request').click((e)=>{
	const item = $(e.target);
	const parent = item.parent().parent();
	let calcName = null;
	let calcTel = null;

	if (calcSum === '' || calcWidth === '' || calcHeight === '') {
		alert("Заполните корректно калькулятор !")
		return false;
	}
	else{

		localStorage.setItem('scrollTo', parent.offset().top + 150);
		
		const email = parent.find('input[type="email"]').val();
		if (!validateEmail(email) && parent.find('input[type="email"]').length > 0) {
			alert('Заполните корректно поле с email! Пример: me@example.com');
			return false;
		}
		else{
			calcMessage += 'Email : '+email+'\r\n';
		}

		calcMessage += 'Ориентировочная стоимость : '+calcSum+'\r\n';

		calcName = parent.find('input[name="your-name"]');
		calcTel = parent.find('input[name="tel-460"]');		

		if (calcName.val() && (calcTel.val().length == 19)) {
			wpCF7Name.value = calcName.val();
			wpCF7Tel.value = calcTel.val();
			if (calcCategory) {
				wpCF7Subject.value = 'Заказ окна с калькулятором';
			}
			if (calcNetColor) {
				wpCF7Subject.value = 'Заказ москитки с калькулятором';
			}	
			wpCF7Message.value = calcMessage+'\r\n'+'Письмо было отправлено со страницы: '+thisHref;
			localStorage.setItem('wpCF7Boolean', 'true');
			wpCF7Form.submit();						
		}
		else {
			const errorHtml = 'Заполните корректно поле с именем!\r\n';
			const errorHtmlTel = 'Заполните корректно поле с телефоном! Пример: +38 (333) 333-33-33';
			let message = '';
			if(!calcName.val()){
				message += errorHtml;
			}
			if(!(calcTel.val().length == 19)){
				message += errorHtmlTel;
			}
			alert(message);
		}
	}
})


// Автовыбор типа в калькуляторе
$('#product-accordion .tab-type-row > .form-product-type-item label').click((e)=>{
	const target = $(e.target).attr('data-target');
	setTimeout(()=>{
		$(target+' li:first-child .furniture-type-label').click();		
	},500);		
})
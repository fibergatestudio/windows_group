
var width_el = document.getElementById("width");
if (width_el) width_el.addEventListener("change", function() {
    var furniture_type = document.getElementById('furniture_type').value; //Тип открытия
    var width          = document.getElementById('width').value; //Ширина

    if (furniture_type == '1') {
        if (width < 500) document.getElementById("width").value = 500;
        if (width > 1400) document.getElementById("width").value = 1400;
    } else if (furniture_type == '2') {
        if (width < 500) document.getElementById("width").value = 500;
        if (width > 900) document.getElementById("width").value = 900;
    } else if (furniture_type == '3' || furniture_type == '4') {
        if (width < 1000) document.getElementById("width").value = 1000;
        if (width > 1600) document.getElementById("width").value = 1600;
    } else if (furniture_type == '5' || furniture_type == '6' || furniture_type == '7') {
        if (width < 1600) document.getElementById("width").value = 1600;
        if (width > 2700) document.getElementById("width").value = 2700;
    } else if (furniture_type == '8') {
        if (width < 1600) document.getElementById("width").value = 1600;
        if (width > 3500) document.getElementById("width").value = 3500;
    } else if (furniture_type == '22') {
        if (width < 600) document.getElementById("width").value = 600;
        if (width > 900) document.getElementById("width").value = 900;
    } else if (furniture_type == 'moskitka') {
        if (width < 100) document.getElementById("width").value = 100;
        if (width > 3000) document.getElementById("width").value = 3000;
    }
});

var height_el = document.getElementById("height");
if (height_el) height_el.addEventListener("change", function() {
    var furniture_type = document.getElementById('furniture_type').value; //Тип открытия
    var height         = document.getElementById('height').value; //Ширина

    if (furniture_type == '1') {
        if (height < 500) document.getElementById("height").value = 500;
        if (height > 1600) document.getElementById("height").value = 1600;
    } else if (furniture_type == '2') {
        if (height < 500) document.getElementById("height").value = 500;
        if (height > 1600) document.getElementById("height").value = 1600;
    } else if (furniture_type == '3' || furniture_type == '4') {
        if (height < 1000) document.getElementById("height").value = 1000;
        if (height > 1600) document.getElementById("height").value = 1600;
    } else if (furniture_type == '5' || furniture_type == '6' || furniture_type == '7') {
        if (height < 1300) document.getElementById("height").value = 1300;
        if (height > 1600) document.getElementById("height").value = 1600;
    } else if (furniture_type == '8') {
        if (height < 1600) document.getElementById("height").value = 1600;
        if (height > 1800) document.getElementById("height").value = 1800;
    } else if (furniture_type == '22') {
        if (height < 1900) document.getElementById("height").value = 1900;
        if (height > 2300) document.getElementById("height").value = 2300;
    } else if (furniture_type == 'moskitka') {
        if (height < 100) document.getElementById("height").value = 100;
        if (height > 3000) document.getElementById("height").value = 3000;
    }
});

//JS функция калькулятора
function calculator() {
    var furniture_type = document.getElementById('furniture_type').value; //Тип открытия
    var width          = document.getElementById('width').value; //Ширина
    var height         = document.getElementById('height').value; //Высота
    var model          = document.getElementById('model').value; //Профиль
    var steklo         = document.getElementById('steklo').value; //Стеклопакет
    var furnit         = document.getElementById('furn').value; //Фурнитура
    var podok          = document.getElementById('podok').value; //Подоконник
    var otliv          = document.getElementById('otliv').value; //Отлив
    var moskit         = document.getElementById('moskit').value; //Москитная сетка
    var montag         = document.getElementById('montag').value; //Монтаж
    var otkos          = document.getElementById('otkos').value; //Откосы

    if (width == '') {
        document.getElementById("width").style.border = '1px solid red';
        document.getElementById("razmer_err").style.display = 'block';
    } else document.getElementById("width").style.border = '1px solid #ced4da';
    if (height == '') {
        document.getElementById("height").style.border = '1px solid red';
        document.getElementById("razmer_err").style.display = 'block';
    } else document.getElementById("height").style.border = '1px solid #ced4da';
    if (width == '' || height == '') return;

    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://windowsgroup.com.ua/wp-content/themes/windowsgroup/calculator.php?furniture_type=' + furniture_type + '&width=' + width + '&height=' + height + '&model=' + model + '&steklop=' + steklo + '&furnit=' + furnit + '&podok=' + podok + '&otliv=' + otliv + '&moskitka=' + moskit + '&montaga=' + montag + '&otkosa=' + otkos, true);
    xhr.send();
    xhr.onreadystatechange = function() {
        if (xhr.readyState != 4) return;
        if (xhr.status != 200) {
            alert(xhr.status + ': ' + xhr.statusText);
        } else {
            var obj = JSON.parse(xhr.responseText);
            document.getElementById("razmer_err1").style.display = 'none';
            if (obj.height != '') {
                document.getElementById("height").value = obj.height;
                document.getElementById("height").style.border = '1px solid red';
                document.getElementById("razmer_err1").style.display = 'block';
            }
            if (obj.width != '') {
                document.getElementById("width").value = obj.width;
                document.getElementById("width").style.border = '1px solid red';
                document.getElementById("razmer_err1").style.display = 'block';
            }
            document.getElementById('sum-calculate').innerHTML = obj.price;
            document.getElementById("razmer_err").style.display = 'none';
        }
    }
}

//JS функция калькулятора москитки
function calculator_moskitka() {
    var furniture_type = document.getElementById('furniture_type').value; //moskitka
    var width          = document.getElementById('width').value; //Ширина
    var height         = document.getElementById('height').value; //Высота
    var model          = ''; //Профиль
    var steklo         = ''; //Стеклопакет
    var furnit         = ''; //Фурнитура
    var podok          = ''; //Подоконник
    var otliv          = ''; //Отлив
    var moskit         = ''; //Москитная сетка
    var montag         = ''; //Монтаж
    var otkos          = ''; //Откосы
    var chooseСolor    = document.getElementById('chooseСolor').value; //Цвет рамки
    var typesetka      = document.getElementById('typesetka').value; //Тип сетки

    if (width == '') {
        document.getElementById("width").style.border = '1px solid red';
        document.getElementById("razmer_err").style.display = 'block';
    } else document.getElementById("width").style.border = '1px solid #ced4da';
    if (height == '') {
        document.getElementById("height").style.border = '1px solid red';
        document.getElementById("razmer_err").style.display = 'block';
    } else document.getElementById("height").style.border = '1px solid #ced4da';
    if (width == '' || height == '') return;

    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://windowsgroup.com.ua/wp-content/themes/windowsgroup/calculator.php?furniture_type=' + furniture_type + '&width=' + width + '&height=' + height + '&model=' + model + '&steklop=' + steklo + '&furnit=' + furnit + '&podok=' + podok + '&otliv=' + otliv + '&moskitka=' + moskit + '&montaga=' + montag + '&otkosa=' + otkos + '&chooseСolor=' + chooseСolor + '&typesetka=' + typesetka, true);
    xhr.send();
    xhr.onreadystatechange = function() {
        if (xhr.readyState != 4) return;
        if (xhr.status != 200) {
            alert(xhr.status + ': ' + xhr.statusText);
        } else {
            var obj = JSON.parse(xhr.responseText);
            document.getElementById("razmer_err1").style.display = 'none';
            if (obj.height != '') {
                document.getElementById("height").value = obj.height;
                document.getElementById("height").style.border = '1px solid red';
                document.getElementById("razmer_err1").style.display = 'block';
            }
            if (obj.width != '') {
                document.getElementById("width").value = obj.width;
                document.getElementById("width").style.border = '1px solid red';
                document.getElementById("razmer_err1").style.display = 'block';
            }
            document.getElementById('sum-calculate').innerHTML = obj.price;
            document.getElementById("razmer_err").style.display = 'none';
        }
    }
}

function change_furniture_type() {
    var furniture_type = document.getElementById('furniture_type').value; //Тип открытия

    document.getElementById("width").value = '';
    document.getElementById("height").value = '';

    if (furniture_type == '1') {
        document.getElementById("width").placeholder = 1000;
        document.getElementById("height").placeholder = 1000;
    } else if (furniture_type == '2') {
        document.getElementById("width").placeholder = 600;
        document.getElementById("height").placeholder = 1000;
    } else if (furniture_type == '3') {
        document.getElementById("width").placeholder = 1100;
        document.getElementById("height").placeholder = 1300;
    } else if (furniture_type == '4') {
        document.getElementById("width").placeholder = 1300;
        document.getElementById("height").placeholder = 1600;
    } else if (furniture_type == '5') {
        document.getElementById("width").placeholder = 2400;
        document.getElementById("height").placeholder = 1400;
    } else if (furniture_type == '6') {
        document.getElementById("width").placeholder = 1800;
        document.getElementById("height").placeholder = 1600;
    } else if (furniture_type == '7') {
        document.getElementById("width").placeholder = 2200;
        document.getElementById("height").placeholder = 1600;
    } else if (furniture_type == '8') {
        document.getElementById("width").placeholder = 2700;
        document.getElementById("height").placeholder = 1700;
    } else if (furniture_type == '9') {
        document.getElementById("width").placeholder = 2700;
        document.getElementById("height").placeholder = 1700;
    } else if (furniture_type == '10') {
        document.getElementById("width").placeholder = 2700;
        document.getElementById("height").placeholder = 1700;
    } else if (furniture_type == '11') {
        document.getElementById("width").placeholder = 2700;
        document.getElementById("height").placeholder = 1700;
    } else if (furniture_type == '12') {
        document.getElementById("width").placeholder = 2700;
        document.getElementById("height").placeholder = 1700;
    } else if (furniture_type == '13') {
        document.getElementById("width").placeholder = 2700;
        document.getElementById("height").placeholder = 1700;
    } else if (furniture_type == '14') {
        document.getElementById("width").placeholder = 2700;
        document.getElementById("height").placeholder = 2700;
    } else if (furniture_type == '15') {
        document.getElementById("width").placeholder = 2700;
        document.getElementById("height").placeholder = 2700;
    } else if (furniture_type == '16') {
        document.getElementById("width").placeholder = 2700;
        document.getElementById("height").placeholder = 2700;
    } else if (furniture_type == '17') {
        document.getElementById("width").placeholder = 2700;
        document.getElementById("height").placeholder = 2700;
    } else if (furniture_type == '18') {
        document.getElementById("width").placeholder = 2700;
        document.getElementById("height").placeholder = 2700;
    } else if (furniture_type == '19') {
        document.getElementById("width").placeholder = 2700;
        document.getElementById("height").placeholder = 1700;
    } else if (furniture_type == '20') {
        document.getElementById("width").placeholder = 1000;
        document.getElementById("height").placeholder = 2500;
    } else if (furniture_type == '21') {
        document.getElementById("width").placeholder = 1400;
        document.getElementById("height").placeholder = 2500;
    } else if (furniture_type == '22') {
        document.getElementById("width").placeholder = 800;
        document.getElementById("height").placeholder = 2500;
    }
}

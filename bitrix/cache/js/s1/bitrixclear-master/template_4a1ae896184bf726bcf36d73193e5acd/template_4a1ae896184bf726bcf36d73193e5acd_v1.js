
; /* Start:"a:4:{s:4:"full";s:62:"/bitrix/templates/bitrixclear-master/js/init.js?15516293141128";s:6:"source";s:47:"/bitrix/templates/bitrixclear-master/js/init.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/

function Buy() {
    const kol = document.getElementById('middle-label').value;//Получаем количество из поле ввода
    const id = document.getElementById('element_id').value;//Получаем ID товара
    var formData = new FormData();//Создадим объект для передачи данных
    formData.append('id', id);//Добавим переменную с ID товара
    formData.append('kol', kol);//Добавим переменную с количеством товаров
    //ajax
    var HttpRequest = new XMLHttpRequest();//Создадим объект для отправки AJAX запроса
    HttpRequest.onload = function(e) {
        if (this.status == 200) {//Проверка что результат отчета успешный (может быть 404 или другие)
            alert('Товар добавлен в корзину');//Сообщение
            document.getElementById('chart-value').innerText = this.response;//Записываем цифру в элемент корзины в верстке
        }
    };//Функция в которую возвращается ответ от сеовера
    HttpRequest.open("POST", '/bitrix/templates/bitrixclear-master/cart/', true);//Настройка запроса для отправки (второй параметр путь к PHP скрипту)
    HttpRequest.send(formData);//Отправка запроса на сервер
}



/* End */
;; /* /bitrix/templates/bitrixclear-master/js/init.js?15516293141128*/

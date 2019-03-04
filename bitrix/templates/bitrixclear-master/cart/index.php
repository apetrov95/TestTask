<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');//Обязательная строка инициирующая движок Битрикса, но не подключающая шаблон
$id = $_POST['id'];//Получаем из глабального массива $_POST id товара
$kol = $_POST['kol'];//Получаем количество
$bx_sessid = bitrix_sessid();//Получаем уникальный код сесии
if (!empty($_SESSION['BX_CART'])) {//Проверяем существует ли наша корзина в массиве $_SESSION
    $arChart= $_SESSION['BX_CART'];//Если да то получаем текущиие данные о корзине
} else {
    $arChart = array();//Если нет присваиваем пустой массив
}
$arChart[$id] = $arChart[$id]+$kol;//Значение элемента массива с id товара увеличиваем на введенное количество
$_SESSION['BX_CART'] = $arChart;//Сохраняем в сесии массив с корзиной
echo count($_SESSION['BX_CART']);//Возвращаем количество отдельных позиций в корзине
print_r($_SESSION['BX_CART']);//Вернем ответ о содержании корзины
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');//������������ ������ ������������ ������ ��������, �� �� ������������ ������
$id = $_POST['id'];//�������� �� ����������� ������� $_POST id ������
$kol = $_POST['kol'];//�������� ����������
$bx_sessid = bitrix_sessid();//�������� ���������� ��� �����
if (!empty($_SESSION['BX_CART'])) {//��������� ���������� �� ���� ������� � ������� $_SESSION
    $arChart= $_SESSION['BX_CART'];//���� �� �� �������� �������� ������ � �������
} else {
    $arChart = array();//���� ��� ����������� ������ ������
}
$arChart[$id] = $arChart[$id]+$kol;//�������� �������� ������� � id ������ ����������� �� ��������� ����������
$_SESSION['BX_CART'] = $arChart;//��������� � ����� ������ � ��������
echo count($_SESSION['BX_CART']);//���������� ���������� ��������� ������� � �������
print_r($_SESSION['BX_CART']);//������ ����� � ���������� �������
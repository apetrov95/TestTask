<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
global $APPLICATION;
use \Bitrix\Main\Page\Asset;
include_once('meta.php');
?>
<!doctype html>
<html lang="ru">
	<head>


		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . '/js/init.js');?>
        <!-- Последняя компиляция и сжатый CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Дополнение к теме -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Последняя компиляция и сжатый JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/css/reset.css' );?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/css/fonts.css' );?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/css/mitus.css' );?>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle()?></title>
	</head>
	<body>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false);?></h1>
        <div class="panel-body">
          <div class="row">
<div class="col-md-4">
    Лого сайта
</div>
              <div class="col-md-4">
                    </div>
              <div class="col-md-4">
                Корзина:  <div class="chart"><p id="chart-value"><?=count($_SESSION['BX_CART']);?></p>Товар(ов)</div>
              </div>
        </div>
        </div>
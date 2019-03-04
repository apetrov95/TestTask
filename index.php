<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>


<?
if (CModule::IncludeModule("iblock")):
// ID инфоблока из которого выводим элементы
    $iblock_id = 4;
    $arSelect = Array("ID","NAME",'PREVIEW_PICTURE', 'DETAIL_TEXT','DATE_CREATE','PREVIEW_TEXT');

    $elemtovar = CIBlockElement::GetList (
// Сортировка элементов
        Array("ID" => "ASC"),

        Array("IBLOCK_ID" => $iblock_id),
        false,
        false,
        $arSelect


    );


    ?>

<div class="main_tovar">
    <div class="row">
        <? while($ob = $elemtovar->GetNextElement()){
            $arFields = $ob->GetFields();
            $img_path = CFile::ResizeImageGet(
                $arFields["PREVIEW_PICTURE"],
                array('width'=>'200', 'height'=>'250'),
                BX_RESIZE_IMAGE_PROPORTIONAL
            );?>
            <div class="col-md-3">
                <div class="tovar">
                <div class="img"><img src="<? echo $img_path['src'];?>"/></div>
<br />
                <div class="name"><label> <? echo $arFields['NAME'] ?></label></div>
                    <br />
                <small><label>Дата создания: </label> <? echo $arFields['DATE_CREATE']?></small>
                    <br />
                <div class="text"><label>Описание: </label> <? echo $arFields['PREVIEW_TEXT']?></div>
                    <br />


                    <input type="text" id="middle-label" placeholder="Введите количество">
                    <input type="hidden" id="element_id" value="<?=$arFields['ID']?>"><!-- Поле для хранения ID товара -->

                    <a class="button large expanded" onclick="Buy()">Купить</a>


                </div>
            </div>



        <? } ?>
    </div>
    </div>
<?
endif;
?>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
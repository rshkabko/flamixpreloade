<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CModule::IncludeModule("iblock");

$dbIBlockType = CIBlockType::GetList(
    array("sort" => "asc"),
    array("ACTIVE" => "Y")
);
while ($arIBlockType = $dbIBlockType->Fetch())
{
    if ($arIBlockTypeLang = CIBlockType::GetByIDLang($arIBlockType["ID"], LANGUAGE_ID))
        $arIblockType[$arIBlockType["ID"]] = "[".$arIBlockType["ID"]."] ".$arIBlockTypeLang["NAME"];
}

$arComponentParameters = array(
    "GROUPS" => array(
        "PARAMS" => array(
            "NAME" => 'PARAMS',
        ),
    ),
    "PARAMETERS" => array(
        "BG_COLOR" => array(
            "PARENT" => "PARAMS",
            "NAME" => 'Background color',
            "TYPE" => "TEXT",
            "MULTIPLE" => "N",
            "DEFAULT" => "#121212"
        ),
        "MAIN_COLOR" => array(
            "PARENT" => "PARAMS",
            "NAME" => 'Main X color',
            "TYPE" => "TEXT",
            "MULTIPLE" => "N",
            "DEFAULT" => "#fff"
        ),
        "SECOND_COLOR" => array(
            "PARENT" => "PARAMS",
            "NAME" => 'Second X color',
            "TYPE" => "TEXT",
            "MULTIPLE" => "N",
            "DEFAULT" => "#46B03D"
        ),

    ),
);
?>
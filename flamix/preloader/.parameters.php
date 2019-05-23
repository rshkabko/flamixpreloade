<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

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
            "TYPE" => "STRING",
            "DEFAULT" => "#121212"
        ),
        "MAIN_COLOR" => array(
            "PARENT" => "PARAMS",
            "NAME" => 'Main X color',
            "TYPE" => "STRING",
            "DEFAULT" => "#fff"
        ),
        "SECOND_COLOR" => array(
            "PARENT" => "PARAMS",
            "NAME" => 'Second X color',
            "TYPE" => "STRING",
            "DEFAULT" => "#46B03D"
        ),
        "CACHE_TIME" => array()
    ),
);

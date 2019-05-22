<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<div id="flamixPreloader" class="flamix-preloader" style="background-color: <?=$arParams['BG_COLOR'];?>;opacity:1;position:fixed;width:100%;height:100%;transform:scale(1.4);z-index:999999;top:0;left:0;">
    <div class="flamix-preloader__preloader-container">
        <div class="flamix-preloader__x-container">
            <div class="line-white-full">
                <span style="background-color: <?=$arParams['MAIN_COLOR'];?>;"></span>
            </div>
            <div class="line-white-half">
                <span style="background-color: <?=$arParams['MAIN_COLOR'];?>;"></span>
            </div>
            <div class="line-green-half">
                <span style="background-color: <?=$arParams['SECOND_COLOR'];?>;"></span>
            </div>
        </div>
        <div class="flamix-preloader__beam-block">
            <div class="flamix-preloader__beam" style="background-color: <?=$arParams['SECOND_COLOR'];?>;"></div>
        </div>
    </div>
</div>
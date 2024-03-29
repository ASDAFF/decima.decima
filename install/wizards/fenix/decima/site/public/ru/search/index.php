<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?>

<?$APPLICATION->IncludeComponent("bitrix:search.page", "search", array(
	"RESTART" => "N",
	"NO_WORD_LOGIC" => "N",
	"CHECK_DATES" => "N",
	"USE_TITLE_RANK" => "N",
	"DEFAULT_SORT" => "rank",
	"FILTER_NAME" => "",
	"arrFILTER" => array(
		0 => "main",
		1 => "iblock_catalog",
		2 => "iblock_news",
		3 => "iblock_services",
		4 => "iblock_blog",
	),
	"arrFILTER_main" => array(
	),
	"arrFILTER_iblock_services" => array(
		0 => "all",
	),
	"arrFILTER_iblock_news" => array(
		0 => "all",
	),
	"arrFILTER_iblock_catalog" => array(
		0 => "all",
	),
	"SHOW_WHERE" => "N",
	"SHOW_WHEN" => "N",
	"PAGE_RESULT_COUNT" => "25",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Результаты поиска",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => ".default",
	"USE_LANGUAGE_GUESS" => "Y",
	"USE_SUGGEST" => "N",
	"SHOW_ITEM_TAGS" => "N",
	"SHOW_ITEM_DATE_CHANGE" => "N",
	"SHOW_ORDER_BY" => "N",
	"SHOW_TAGS_CLOUD" => "N",
	"SHOW_RATING" => "",
	"RATING_TYPE" => "",
	"PATH_TO_USER_PROFILE" => "",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
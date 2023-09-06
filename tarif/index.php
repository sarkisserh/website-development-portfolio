<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тарифы");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"tarif", 
	array(
		"COMPONENT_TEMPLATE" => "tarif",
		"IBLOCK_TYPE" => "PODELU",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_TITLE" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "PROPERTY_BANK",
			1 => "PROPERTY_TARRIF_ZONE",
			2 => "PROPERTY_NAME",
			3 => "PROPERTY_INTERVAL_FROM",
			4 => "PROPERTY_INTERVAL_TO",
			5 => "PROPERTY_OPEN_COST",
			6 => "PROPERTY_ACCOUNT_FREE_TERM",
			7 => "PROPERTY_ACCOUNT_PAYMENT",
			8 => "PROPERTY_ACCOUNT_PERCENT_MOUNT",
			9 => "PROPERTY_BUSINESS_TRANSFER",
			10 => "PROPERTY_BUSINESS_TRANSFER_TELECOM",
			11 => "PROPERTY_BUSINESS_TRANSFER_PAPER",
			12 => "PROPERTY_PEOPLE_TRANSFER",
			13 => "PROPERTY_CASH_IN_CASHBOX",
			14 => "PROPERTY_CASH_IN_SELF",
			15 => "PROPERTY_CASH_OUT_CASHBOX",
			16 => "PROPERTY_CASH_OUT_SELF",
			17 => "PROPERTY_COMMISION_FOR_INCOMING_TRANSFER",
			18 => "PROPERTY_OVERDRAFT",
			19 => "PROPERTY_TRADING_ACQUIRING",
			20 => "PROPERTY_INTERNET_ACQUIRING",
			21 => "PROPERTY_SALARY_PROJECT",
			22 => "PROPERTY_CARD_ISSUE",
			23 => "PROPERTY_MOBILE_BANK_CONNECTION",
			24 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"SEF_FOLDER" => "/tarif/",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
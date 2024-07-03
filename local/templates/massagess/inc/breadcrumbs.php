<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();?>
<section class="breadcrumbs__section">
	<div class="container">
<?$APPLICATION->IncludeComponent(
	'bitrix:breadcrumb',
	'',
	Array(
		'PATH' => '',
		'SITE_ID' => 'f1',
		'START_FROM' => '0'
	)
);?>
	</div>
</section>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Юридические аспекты');
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/legal.min.css');
?>
<?$APPLICATION->IncludeComponent(
	'bitrix:main.include',
	'',
	Array(
		'AREA_FILE_SHOW' => 'file',
		'PATH' => SITE_TEMPLATE_PATH.'/inc/breadcrumbs.php',
	)
);?>
<section class="legal">
	<div class="container">
		<div class="legal__filters">
			<h1>Юридические аспекты</h1>
			<div class="legal__filters-block">
				<div class="filter active">Политика конфиденциальности</div>
				<div class="filter">Публичная оферта</div>
				<div class="filter">Правила оплаты</div>
				<div class="filter">Возврат и обмен</div>
			</div>
		</div>
		<div class="info">
			Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium quis eveniet suscipit alias nisi illo rem earum non debitis doloremque aut vel id molestiae officia, labore! Maxime, beatae libero atque?
		</div>
	</div>
</section>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
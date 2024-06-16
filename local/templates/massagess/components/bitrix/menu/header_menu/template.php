<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
if (!empty($arResult)) {?>
<div class="menu__block">
	<div class="menu__button">
		<img src="<?=SITE_TEMPLATE_PATH?>/images/menu.svg" alt="Меню" />
	</div>
	<div class="header__menu">
		<div class="top">
			<ul>
	<?$previousLevel = 0;
	$countItems = count($arResult);
	$i = 0;
	foreach($arResult as $arItem) {
		if ($previousLevel && $arItem['DEPTH_LEVEL'] < $previousLevel) {?>
			<?=str_repeat('</ul></li>', ($previousLevel - $arItem['DEPTH_LEVEL']));?>
		<?}
		if ($arItem['IS_PARENT']) {
			if ($arItem['DEPTH_LEVEL'] == 1) {?>
				<li class="hasChild<?if($arItem['SELECTED']) {?> selected<?}?>">
					<a href='<?=$arItem['LINK']?>'><?=$arItem['TEXT']?></a>
					<ul class="submenu">
			<?} else {?>
				<li class="hasChild<?if($arItem['SELECTED']) {?> selected<?}?>">
					<a href='<?=$arItem['LINK']?>'><?=$arItem['TEXT']?></a>
					<ul class="submenu">
			<?}
		} else {
			if ($arItem['PERMISSION'] > 'D') {
				if ($arItem['DEPTH_LEVEL'] == 1) {?>
				<li>
					<a href="<?=$arItem['LINK']?>"<?if($arItem['SELECTED']) {?> class="selected"<?}?>><?=$arItem['TEXT']?></a>
				</li>
				<?} else {?>
				<li>
					<a href="<?=$arItem['LINK']?>"<?if($arItem['SELECTED']) {?> class="selected"<?}?>><?=$arItem['TEXT']?></a>
				</li>
				<?}
			} else {
				if ($arItem['DEPTH_LEVEL'] == 1) {?>
				<li>
					<a href="" class="<?if ($arItem['SELECTED']) {?>root-item-selected<?} else {?>root-item<?}?>" title="<?=GetMessage('MENU_ITEM_ACCESS_DENIED')?>"><?=$arItem['TEXT']?></a>
				</li>
				<?} else {?>
				<li>
					<a href="" class="denied" title="<?=GetMessage('MENU_ITEM_ACCESS_DENIED')?>"><?=$arItem['TEXT']?></a>
				</li>
				<?}
			}
		}
		$previousLevel = $arItem['DEPTH_LEVEL'];
		$i++;
	}
	if ($previousLevel > 1) {?>
		<?=str_repeat('</ul></li>', ($previousLevel - 1) );
	}?>
		</div>
		<div class="bottom">
			<div class="contact__block">
				<a href="tel:+79034005588">+7 903-400-55-88</a>
				<span>ул. Серафимовича, 107</span>
			</div>
			<div class="contact__block">
				<a href="tel:+79034005588">+7 903-400-55-88</a>
				<span>просп. Кировский, 48</span>
			</div>
			<div class="contact__block">
				<a href="tel:+79034005588">+7 903-400-55-88</a>
				<span>ул. Береговая, 25Г/4,<br />отель Radisson Blu</span>
			</div>
		</div>
	</div>
</div>
<?}?>
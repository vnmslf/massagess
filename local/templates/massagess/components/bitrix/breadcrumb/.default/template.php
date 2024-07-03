<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
/**
 * @global CMain $APPLICATION
 */
global $APPLICATION;
if(empty($arResult)) {
	return '';
}
$strReturn = '';
$strReturn .= '
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
	<a class="backlink" href="/">
		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M15 6L9 12L15 18" stroke="#40515A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
		</svg>
	</a>';
$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++) {
	$title = htmlspecialcharsex($arResult[$index]['TITLE']);
	if($arResult[$index]['LINK'] <> '' && $index != $itemSize - 1) {
		$strReturn .= '
			<div class="breadcrumb__item" id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a class="breadcrumb__item-element" href="'.$arResult[$index]['LINK'].'" title="'.$title.'" itemprop="item">
					<span itemprop="name">'.$title.'&nbsp;/</span>
				</a>
				<meta itemprop="position" content="'.($index + 1).'" />
			</div>';
	} else {
		$strReturn .= '
			<div class="breadcrumb__item breadcrumb__item-last" data-backlink="'.$arResult[$index - 1]['LINK'].'">
				<span class="breadcrumb__item-element">'.$title.'</span>
			</div>';
	}
}
$strReturn .= '<div style="clear:both"></div></div>';
return $strReturn;
?>
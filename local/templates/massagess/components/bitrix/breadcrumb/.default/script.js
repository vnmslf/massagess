$(document).ready(function() {
	$('.breadcrumbs__section').find('.backlink').attr('href', $('.breadcrumbs__section').find('breadcrumb__item.breadcrumb__item-last').attr('data-backlink'));
})
$(document).on('click', '.filter[data-block]', function() {
	$(this).parents('.legal__filters-block').find('.filter').removeClass('active');
	$(this).addClass('active');
	$(this).parents('.legal__filters').next('.info').find('.info__block').removeClass('active');
	$(this).parents('.legal__filters').next('.info').find('.' + $(this).attr('data-block')).addClass('active');
})
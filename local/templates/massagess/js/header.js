$(window).on('scroll', function() {
	var y_scroll_pos = window.pageYOffset;
	if(y_scroll_pos > 0) {
		$('header').addClass('scrolling');
	} else {
		$('header').removeClass('scrolling')
	}
});
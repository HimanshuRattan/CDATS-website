$(window).scroll(function() {
	if ($(this).scrollTop() > 300) {
		$('.fixed-top').addClass('opaque');
	} else {
		$('.fixed-top').removeClass('opaque');
	}
});

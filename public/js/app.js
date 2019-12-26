$('.nav-trigger').on('click', function () {
	if ($('.navbar').hasClass('show-menu')) {
		$('.navbar').removeClass('show-menu');
	} else {
		$('.navbar').addClass('show-menu');
	}
})
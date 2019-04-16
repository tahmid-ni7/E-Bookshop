(function ($) {
	'use strict';

	jQuery(document).ready(function () {

		$('.slider-area').owlCarousel({
			items: 1,
			nav: false,
			dots: true,
			loop: true,
			autoplay: 3000,
			animateIn: 'fadeIn',
  			animateOut: 'fadeOut'
		});
		
	});


})(jQuery);
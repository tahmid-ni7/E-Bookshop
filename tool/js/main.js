(function ($) {
	'use strict';

	jQuery(document).ready(function () {

		/*=== For Slider ===*/
		$('.slider-area').owlCarousel({
			items: 1,
			nav: false,
			dots: true,
			loop: true,
			autoplay: false,
			animateIn: 'fadeIn',
  			animateOut: 'fadeOut'
		});

		/*=== For clickable table row ===*/
		$(".clickable-row").click(function()
		 {
		   window.location = $(this).data("href");
		 });

		/*=== For clickable div ===*/
		$(".clickable-div").click(function()
		 {
		   window.location = $(this).data("href");
		 });
		
	});


})(jQuery);
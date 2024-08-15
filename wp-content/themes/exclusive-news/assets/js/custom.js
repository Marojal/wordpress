jQuery(function ($) {
	
    /* -----------------------------------------
    editor picks slider
    ----------------------------------------- */
	$('.editor-picks-wrapper.vertical').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		infinite: true,
		loop: true,
		vertical: true,
		verticalSwiping: true,
		dots: false,
		prevArrow: false,
		nextArrow: false,
		nextArrow: '<button class="fas fa-angle-down slick-next"></button>',
		prevArrow: '<button class="fas fa-angle-up slick-prev"></button>',
		appendArrows: '.editor-pick-arrows.vertical',
	});

});
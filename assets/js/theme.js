jQuery(function($){
	$(document).ready(function(){
		$('.hero-carousel').slick({
			lazyLoad: 'ondemand',
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 3000,
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear',
			dots: true,
		});

		$('#searchform #s').attr('placeholder', 'キーワードを入力してください');


		if ($(window).scrollTop() >= 1) {
			$('.page-header').addClass('header-sticky');
		} else {
			$('.page-header').removeClass('header-sticky');
		}
	});

	$(window).scroll(function(){
		if ($(window).scrollTop() >= 1) {
			$('.page-header').addClass('header-sticky');
		} else {
			$('.page-header').removeClass('header-sticky');
		}
	});

	// $('.nav-open').off('click').on('click', function(){
	// 	if($('body').hasClass('nav-opened'))
	// 		$('body').removeClass('nav-opened');
	// 	else
	// 		$('body').addClass('nav-opened');
	// });

	// $('.submenu-opener').off('click').on('click', function(){
	// 	if(!$(this).hasClass('opened')) {
	// 		$(this).next('.menu-popup').slideDown();
	// 		$(this).addClass('opened');
	// 	} else {
	// 		$(this).next('.menu-popup').slideUp();
	// 		$(this).removeClass('opened');
	// 	}
	// });

	$('.menu').off('click').on('click', function(){
		if ($(this).hasClass('menu--sitemap')) {
			$('.menu.menu--search').next('.menu-popup').fadeTo(0, 0);
			$('.menu.menu--search').next('.menu-popup').hide();
			$('.menu.menu--search').removeClass('opened');
		} else if ($(this).hasClass('menu--search')) {
			$('.menu.menu--sitemap').next('.menu-popup').fadeTo(0, 0);
			$('.menu.menu--sitemap').next('.menu-popup').hide();
			$('.menu.menu--sitemap').removeClass('opened');
		}

		if (!$(this).hasClass('opened')) {
			// $(this).next('.menu-popup').slideDown();
			$(this).next('.menu-popup').fadeTo(100, 1);
			$(this).addClass('opened');
		} else {
			// $(this).next('.menu-popup').slideUp();
			$(this).next('.menu-popup').fadeTo(100, 0);
			$(this).removeClass('opened');
		}
	});
});
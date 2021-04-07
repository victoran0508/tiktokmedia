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

	$('.menu').off('click').on('click', function(){
		if ($(this).hasClass('menu--sitemap')) {
			$('.menu.menu--search').removeClass('active');
		} else if ($(this).hasClass('menu--search')) {
			$('.menu.menu--sitemap').removeClass('active');
		}

		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
		} else {
			$(this).removeClass('active');
		}
	});

	$('.menu-background').off('click').on('click', function(){
		$(this).prev().prev().removeClass('active');
	});
});
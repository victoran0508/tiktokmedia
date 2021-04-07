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

		if ($('.float-sns-btn').offset().top + $('.float-sns-btn').height() > $('.about-author dd').offset().top + $('.about-author dd').height()) {
			$('.float-sns-btn').css('position', 'absolute');
			$('.float-sns-btn').css('bottom', '100px');
			$('.float-sns-btn').css('top', 'auto');
			if ($(window).width() > 1200) {
				$('.float-sns-btn').css('left', '-42px');
			} else if ($(window).width() > 1080) {
				$('.float-sns-btn').css('left', 'calc(558px - 50vw)');
			} else {
				$('.float-sns-btn').css('left', '10px');
			}
		}
		if ($('.about-author dd').position().top + $('.about-author dd').height() - $(window).scrollTop() > 80 + $('.float-sns-btn').height()) {
			$('.float-sns-btn').css('position', 'fixed');
			$('.float-sns-btn').css('top', '160px');
			$('.float-sns-btn').css('bottom', 'unset');
			if ($(window).width() > 1200) {
				$('.float-sns-btn').css('left', 'calc(50vw - 590px)');
			} else if ($(window).width() > 1080) {
				$('.float-sns-btn').css('left', '10px');
			} else {
				$('.float-sns-btn').css('left', '10px');
			}
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
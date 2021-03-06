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

		$('#toc_container p.toc_title').append(' <span class="toc_toggle">[<a href="#">非表示</a>]</span>');

		var h = $('#toc_container .toc_list').height() + 'px';
		$('#toc_container .toc_list').css('max-height', h);

		$('span.toc_toggle a').click(function(event) {
			event.preventDefault();
			$('#toc_container').toggleClass('collapsed');
			if ($('#toc_container').hasClass('collapsed')) {
				$('span.toc_toggle a').text('表示');
				$('#toc_container .toc_list').css('max-height', '0');
			} else {
				$('span.toc_toggle a').text('非表示');
				$('#toc_container .toc_list').css('max-height', h);
			}
		});
	});

	$(window).scroll(function(){
		if ($(window).scrollTop() >= 1) {
			$('.page-header').addClass('header-sticky');
		} else {
			$('.page-header').removeClass('header-sticky');
		}

		$('.shared-counts-wrap').css('position', 'fixed');
		$('.shared-counts-wrap').css('top', '160px');
		$('.shared-counts-wrap').css('bottom', 'unset');
		if ($(window).width() > 1200) {
			$('.shared-counts-wrap').css('left', 'calc(50vw - 590px)');
		} else if ($(window).width() > 1080) {
			$('.shared-counts-wrap').css('left', '10px');
		} else {
			$('.shared-counts-wrap').css('left', '10px');
		}

		if ($('.shared-counts-wrap').offset().top + $('.shared-counts-wrap').height() > $('.about-author dd').offset().top + $('.about-author dd').height()) {
			$('.shared-counts-wrap').css('position', 'absolute');
			$('.shared-counts-wrap').css('top', ($('.about-author dd').offset().top + $('.about-author dd').height() - $('.shared-counts-wrap').height()) + 'px');
		}

		// if ($('.shared-counts-wrap').offset().top + $('.shared-counts-wrap').height() > $('.about-author dd').offset().top + $('.about-author dd').height()) {
		// 	$('.shared-counts-wrap').css('position', 'absolute');
		// 	$('.shared-counts-wrap').css('bottom', '100px');
		// 	$('.shared-counts-wrap').css('top', 'auto');
		// 	if ($(window).width() > 1200) {
		// 		$('.shared-counts-wrap').css('left', '-42px');
		// 	} else if ($(window).width() > 1080) {
		// 		$('.shared-counts-wrap').css('left', 'calc(558px - 50vw)');
		// 	} else {
		// 		$('.shared-counts-wrap').css('left', '10px');
		// 	}
		// }
		// if ($('.about-author dd').position().top + $('.about-author dd').height() - $(window).scrollTop() > 80 + $('.shared-counts-wrap').height()) {
		// 	$('.shared-counts-wrap').css('position', 'fixed');
		// 	$('.shared-counts-wrap').css('top', '160px');
		// 	$('.shared-counts-wrap').css('bottom', 'unset');
		// 	if ($(window).width() > 1200) {
		// 		$('.shared-counts-wrap').css('left', 'calc(50vw - 590px)');
		// 	} else if ($(window).width() > 1080) {
		// 		$('.shared-counts-wrap').css('left', '10px');
		// 	} else {
		// 		$('.shared-counts-wrap').css('left', '10px');
		// 	}
		// }
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
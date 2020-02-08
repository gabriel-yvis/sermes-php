(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {
		/* 
		=================================================================
		06 - Cast Slider
		=================================================================	
		*/
		$(".cast-slider").owlCarousel({
			autoplay: false,
			loop: true,
			margin: 0,
			touchDrag: true,
			mouseDrag: true,
			nav: true,
			navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
			dots: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1200,
			autoplayHoverPause: true,
			responsive: {
				0: {
					items: 2
				},
				480: {
					items: 2
				},
				600: {
					items: 2
				},
				750: {
					items: 5
				},
				1000: {
					items: 5
				},
				1200: {
					items: 6
				}
			}
		});

		/* 
		=================================================================
		07 - Youtube Popup JS
		=================================================================	
		*/

		$('.popup-youtube, .play-video').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});

		/* 
		=================================================================
		08 - Datepicker JS
		=================================================================	
		*/

		$(function () {
			$("#releasedate").datepicker();
		});

		/* 
		=================================================================
		09 - Responsive Menu
		=================================================================	
		*/
		$("ul#responsive_navigation").slicknav({
			prependTo: ".filmoja-responsive-menu"
		});
	});

	   /* 
		=================================================================
		10 - Btn To Top
		=================================================================	
		*/
	if ($("body").length) {
		var btnUp = $('<div/>', {
			'class': 'btntoTop'
		});
		btnUp.appendTo('body');
		$(document).on('click', '.btntoTop', function () {
			$('html, body').animate({
				scrollTop: 0
			}, 700);
		});
		$(window).on('scroll', function () {
			if ($(this).scrollTop() > 200) $('.btntoTop').addClass('active');
			else $('.btntoTop').removeClass('active');
		});
	}
}(jQuery));


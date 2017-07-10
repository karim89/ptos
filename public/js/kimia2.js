(function($){
	"use strict";
	$(function()
	{
		var kimia2 = {
			mainHeight : function() {
				var winHeight = $(window).height();
				var footerHeight = $('.footer').height();
				$('#main-content').css({
					'height' : winHeight
				});
				$('#myCarousel img').css({
					'height' : winHeight - footerHeight
				});
			},
			arrowFooter : function() {
				var arrowBtn = $('.footer-content .arrow-footer');
				var footerHeight = $('.footer').height();
				$('.slide-content').css({
					'bottom' : footerHeight
				});
				arrowBtn.on('click', function() {
					$(this).toggleClass('active');
					$('.slide-content').slideToggle();
				});
			}
		};
		
		kimia2.mainHeight();
		kimia2.arrowFooter();

	});
})(jQuery);
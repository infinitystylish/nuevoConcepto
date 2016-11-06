(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		$(".menu-hamburguer").on("click",function(){
			$(".nav-mobile").toggleClass("open");
			$("body").toggleClass("open");
			$("body").prepend('<div class="layer-overlay"></div>');
		});

		$("body").on("click",".layer-overlay",function(){
			$(this).fadeToggle(600);
			$(".nav-mobile").toggleClass("open");
			$("body").toggleClass("open");
		})
		
	});
	
})(jQuery, this);

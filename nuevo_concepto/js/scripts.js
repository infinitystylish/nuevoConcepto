(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		$(".menu-hamburguer").on("click",function(){
			$(".nav-mobile").toggleClass("open");
			$("body").toggleClass("open");
			$(".layer-overlay").toggleClass("open");
		});

		$("body").on("click",".layer-overlay",function(){
			if($(".layer-overlay").hasClass("open")){
				console.log("hola");
				$(".layer-overlay").toggleClass("open");
				$(".nav-mobile").toggleClass("open");
				$("body").toggleClass("open");
			}
			
		})
		
	});
	
})(jQuery, this);

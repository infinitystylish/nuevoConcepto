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

		$(".package-slider").slick();

		$(".musical-equipment-slider-container").slick({
			slidesToShow: 3,
  			slidesToScroll: 3,
  			arrows: true,
  			infinite: true,
		  	responsive: [
			    {
			      breakpoint: 1140,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 584,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    },
			  ]
		});

		$(".members-container-slider").slick({
			slidesToShow: 3,
  			slidesToScroll: 3,
  			arrows: true,
  			infinite: true,
		  	responsive: [
			    {
			      breakpoint: 1140,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 767,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    },
			  ]
		});
		
	});
	
})(jQuery, this);

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

		$(".contact-form > form").validate({
			rules: 
			{
				name:{
					required: true,
				},
				email:{
					required: true,
					email: true
					
				},
				message:{
					required: true,
					minlength: 10
				},
				
			},
			
			messages: {
				name: {
					required: 'Este campo es requerido.',
				},
				email: {
					required: 'Este campo es requerido.',
					email: 'Correo no válido'
				},
				message: {
					required: 'Este campo es requerido.',
					minlength: 'Introduzca al menos 10 carácteres.'
					
				},
				
			},
			errorPlacement: function(error, element) {
			    error.insertAfter(element);
			}
		});

		var $page = $("html, body");

		$page.on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function(){
	       $page.stop();
	   	});

		$(".menu-desktop li").on("click touchstart",function(e) {
			e.preventDefault();
			var toSection = $(this).data();
			if($("."+toSection.section).length){
				 $('html, body').animate({
			        scrollTop: $("."+toSection.section).offset().top - 70
			    }, 1500);
			}
		});

		$(".menu-mobile li").on("click touchstart",function(e) {
			e.preventDefault();
			if($(".layer-overlay").hasClass("open")){
				$(".layer-overlay").toggleClass("open");
				$(".nav-mobile").toggleClass("open");
				$("body").toggleClass("open");
			}
			var toSection = $(this).data();
			if($("."+toSection.section).length){
				 $('html, body').delay(1000).animate({
			        scrollTop: $("."+toSection.section).offset().top - 70
			    }, 1500);
			}
		});

		 

		
	});
	
})(jQuery, this);

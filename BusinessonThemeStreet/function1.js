$(document).ready(function(){
	$('.home-project-hover').fadeOut();
	$('.home-project').hover(function(){
		$(this).find('.home-project-overlay').stop().css('opacity','0.8');
		$(this).find('.home-project-hover').stop().fadeIn();
	}, function(){
		$('.home-project-overlay').stop().css('opacity','0');
		$('.home-project-hover').stop().fadeOut();
	});

	//$('.contact-slide-select-1').addClass('.active');

	$('.contact-slide-select-1').click(function(){
		$(this).toggleClass('contact-slide-select-1-active active');
	});

	$('.contact-slide-select-2').click(function(){
		$(this).toggleClass('contact-slide-select-2-active active');
	});

	$('.contact-slide-select-3').click(function(){
		$(this).toggleClass('contact-slide-select-3-active active');
	});

	$('.contact-slide-select-4').click(function(){
		$(this).toggleClass('contact-slide-select-4-active active');
	});

	$('.contact-slide-select-5').click(function(){
		$(this).toggleClass('contact-slide-select-5-active active');
	});



	$('.slide-section').hover(function(){
		$(this).find('.slide-nav').css('top','434px');
		$(this).find('.slide-icon-active').css('opacity', '1');
		$(this).find('.slide-icon-contact').css('opacity','0');
		$(this).find('.slide-img').stop().animate({'top' :'-30px'}, 500, 'swing');
	}, function(){
		$(this).find('.slide-nav').css('top','480px');
		$(this).find('.slide-icon-active').css('opacity', '0');
		$(this).find('.slide-icon-contact').css('opacity','1');
		$(this).find('.slide-img').stop().animate({'top' : '0px'}, 500, 'swing');
	});

	$('.slide-icon-active').click(function(){
		var slide = $(this).parent().parent().parent().find('.home-slide');
		var image = slide.find('.slide-img');
		var active = slide.find('.slide-img-active');
		var nav = $(this).parent().parent().parent().find('.slide-nav');
		var allSlides = $('.home-slide');
		//Add ClearSlide Functions		
		function $(clearSlide()) {
var exclude = 0;
	if ($(slide).hasClass('home-slide-1')){
		var exclude = 1;
	}
	if ($(slide).hasClass('home-slide-2')){
		var exclude = 2;
	}
	if ($(slide).hasClass('home-slide-3')){
		var exclude = 3;
	}
	if ($(slide).hasClass('home-slide-4')){
		var exclude = 4;
	}
	if ($(slide).hasClass('home-slide-5')){
		var exclude = 5;
	}
	if ($(slide).hasClass('home-slide-6')){ 
		var exclude = 6;
	}
if ($(slide).css('width') === '1000px'){
	if (exclude != 1) {
			if ($(slide).hasClass('home-slide-1')){
				$(slide).css({
					'width': '160px',
					'left' : '0px',
					'z-index' : '0'
				});
			}
			}
			if (exclude != 2) {
			if ($(slide).hasClass('home-slide-2')){
				$(slide).css({
					'width': '160px',
					'left' : '168px',
					'z-index' : '0'
				});
			}
			}
			if (exclude != 3) {
			if ($(slide).hasClass('home-slide-3')){
				$(slide).css({
					'width': '160px',
					'left' : '336px',
					'z-index' : '0'
				});
			}
			}
			if (exclude != 4) {
			if ($(slide).hasClass('home-slide-4')){
				$(slide).css({
					'width': '160px',
					'left' : '504px',
					'z-index' : '0'
				});
			}
			}
			if (exclude != 5) {
			if ($(slide).hasClass('home-slide-5')){
				$(slide).css({
					'width': '160px',
					'left' : '672px',
					'z-index' : '0'
				});
			}
			}
			if (exclude != 6) {
			if ($(slide).hasClass('home-slide-6')){
				$(slide).css({
					'width': '160px',
					'left' : '840px',
					'z-index' : '0'
				});
			}
}			
			image.fadeIn();
		}
		};
		// End ClearSlide Functions
		//Sets slides back to normal position and width
		if ($(slide).css('width') === '1000px'){
			if ($(slide).hasClass('home-slide-1')){
				$(slide).css({
					'width': '160px',
					'left' : '0px',
					'z-index' : '0'
				});
			}
			if ($(slide).hasClass('home-slide-2')){
				$(slide).css({
					'width': '160px',
					'left' : '168px',
					'z-index' : '0'
				});
			}
			if ($(slide).hasClass('home-slide-3')){
				$(slide).css({
					'width': '160px',
					'left' : '336px',
					'z-index' : '0'
				});
			}
			if ($(slide).hasClass('home-slide-4')){
				$(slide).css({
					'width': '160px',
					'left' : '504px',
					'z-index' : '0'
				});
			}
			if ($(slide).hasClass('home-slide-5')){
				$(slide).css({
					'width': '160px',
					'left' : '672px',
					'z-index' : '0'
				});
			}
			if ($(slide).hasClass('home-slide-6')){
				$(slide).css({
					'width': '160px',
					'left' : '840px',
					'z-index' : '0'
				});
			}	
			image.fadeIn();
		} else { //Sends slide to 1000px
			active.css({
				'width' : '1000px'
			});
			slide.css({
				'width' : '1000px',
				'z-index' : '500',
				'left' : '0'
			});
			image.fadeOut();
		}

		if($(active).css('width') === '1000px'){
			active.css({
				'width' : '160px'
			});
		} else {
			active.css({
				'width' : '1000px'
			});
		}

	});

});


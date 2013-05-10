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
		$(this).find('.slide-nav').animate({'top':'434px'}, 200);
		$(this).find('.slide-icon-active').css('opacity', '1');
		$(this).find('.slide-icon-contact').css('opacity','0');
		//$(this).find('.slide-img').stop().animate({'top' :'-30px'}, 500, 'swing');
	}, function(){
		$(this).find('.slide-nav').animate({'top':'480px'}, 200);
		$(this).find('.slide-icon-active').css('opacity', '0');
		$(this).find('.slide-icon-contact').css('opacity','1');
		//$(this).find('.slide-img').stop().animate({'top' : '0px'}, 500, 'swing');
	});


	//$('.slide-img-active').fadeOut();
	$('.slide-icon-active').click(function(){
		var slide = $(this).parent().parent().parent().find('.home-slide');
		var image = slide.find('.slide-img');
		var active = slide.find('.slide-img-active');
		var nav = $(this).parent().parent().parent().find('.slide-nav');
		var allSlides = $('.home-slide');
		var activeSlide = $('.activeSlide');
		//Sets slides back to normal position and width
		if ($(slide).css('width') === '1000px'){
			if ($(slide).hasClass('home-slide-1')){
				$(slide).removeClass('activeSlide').css({
					'width': '160px',
					'left' : '0px',
					'z-index' : '0'
				});
				$(image).css({					
					'left' : '0px'					
				});
				$(active).css({
					'left' : '0px'
				});
			}
			if ($(slide).hasClass('home-slide-2')){
				$(slide).removeClass('activeSlide').css({
					'width': '160px',
					'left' : '168px',
					'z-index' : '0'
				});
				$(image).css({					
					'left' : '-168px'
				});
				$(active).css({
					'left' : '-168px'
				});
			}
			if ($(slide).hasClass('home-slide-3')){
				$(slide).removeClass('activeSlide').css({
					'width': '160px',
					'left' : '336px',
					'z-index' : '0'
				});
				$(image).css({					
					'left' : '-336px'
				});
				$(active).css({
					'left' : '-336px'
				});
			}
			if ($(slide).hasClass('home-slide-4')){
				$(slide).removeClass('activeSlide').css({
					'width': '160px',
					'left' : '504px',
					'z-index' : '0'
				});
				$(image).css({					
					'left' : '-504px'
				});
				$(active).css({
					'left' : '-504px'
				});
			}
			if ($(slide).hasClass('home-slide-5')){
				$(slide).removeClass('activeSlide').css({
					'width': '160px',
					'left' : '672px',
					'z-index' : '0'
				});
				$(image).css({					
					'left' : '-672px'
				});
				$(active).css({
					'left' : '-672px'
				});
			}
			if ($(slide).hasClass('home-slide-6')){
				$(slide).removeClass('activeSlide').css({
					'width': '160px',
					'left' : '840px',
					'z-index' : '0'
				});
				$(image).css({					
					'left' : '-840px'
				});
				$(active).css({
					'left' : '-840px'
				});
				$(activeSlide).css({
					'width' : '160px'
				});
			}	
			image.fadeIn();
		} else { //Sends slide to 1000px
			image.fadeOut('500');

			if ($(activeSlide).hasClass('home-slide-1')){
				$('.home-slide-1').find('.slide-img').fadeIn();
				activeSlide.css({
					'width' : '160px',
					'left' : '0px',
					'z-index' : '0'
				}).removeClass('activeSlide');

			}

			if ($(activeSlide).hasClass('home-slide-2')){
				$('.home-slide-2').find('.slide-img').fadeIn();
				activeSlide.css({
					'width' : '160px',
					'left' : '168px',
					'z-index' : '0'
				}).removeClass('activeSlide');
			}			

			if ($(activeSlide).hasClass('home-slide-3')){
				$('.home-slide-3').find('.slide-img').fadeIn();
				activeSlide.css({
					'width' : '160px',
					'left' : '336px',
					'z-index' : '0'
				}).removeClass('activeSlide');
			}

			if ($(activeSlide).hasClass('home-slide-4')){
				$('.home-slide-4').find('.slide-img').fadeIn();
				activeSlide.css({
					'width' : '160px',
					'left' : '504px',
					'z-index' : '0'
				}).removeClass('activeSlide');
			}

			if ($(activeSlide).hasClass('home-slide-5')){
				$('.home-slide-5').find('.slide-img').fadeIn();
				activeSlide.css({
					'width' : '160px',
					'left' : '672px',
					'z-index' : '0'
				}).removeClass('activeSlide');
			}

			if ($(activeSlide).hasClass('home-slide-6')){
				$('.home-slide-6').find('.slide-img').fadeIn();
				activeSlide.css({
					'width' : '160px',
					'left' : '840px',
					'z-index' : '0'
				}).removeClass('activeSlide');
			}

			active.animate({
				'width' : '1000px'
			},400);

			setTimeout(function() {
			    slide.addClass('activeSlide').css('z-index', '500').animate({
					'width' : '1000px',
					'left' : '0'
				}, 400);
				active.animate({
					'left' : '0'
				}, 400);

			}, 500);
		}
	}); // END OF SLIDE CLICK FUNCTION
	

	//HOMEPAGE INFINITE SLIDER
	$('.project-control-left').click(function(){
		if ($('.home-project-wrapper').css('left') === '-27px' === true){
			$('.home-project-wrapper').css('left', '-1371px').animate({
				left : '+=672px',
				transition: 'all 0.2s linear'
			});
		} else {
			$('.home-project-wrapper').animate({
				left : '+=672px'
			});
		}
	});

	$('.project-control-right').click(function(){
		if ($('.home-project-wrapper').css('left') === '-2043px' === true){
			$('.home-project-wrapper').css('left', '-699px').animate({
				left : '-=672px'
			});
		} else {
			$('.home-project-wrapper').animate({
				left : '-=672px'
			});
		}
	});

	//TESTIMONIAL FULL PAGE CASE STUDIES SLIDER
	$('.case-select-1').click(function(){
		$('.case-wrapper').animate({
			left : '-1200px'
		},300);
	});

	$('.case-select-2').click(function(){
		$('.case-wrapper').animate({
			left : '-2400px'
		},300);
	});

	$('.case-select-3').click(function(){
		$('.case-wrapper').animate({
			left : '-3600px'
		},300);
	});

	$('.case-select-4').click(function(){
		$('.case-wrapper').animate({
			left : '-4800px'
		},300);
	});

	$('.case-select-5').click(function(){
		$('.case-wrapper').animate({
			left : '-6000px'
		},300);
	});

	$('.case-select-6').click(function(){
		$('.case-wrapper').animate({
			left : '-7200px'
		},300);
	});

	$('.case-select-7').click(function(){
		$('.case-wrapper').animate({
			left : '-8400px'
		},300);
	});

	$('.case-select-8').click(function(){
		$('.case-wrapper').animate({
			left : '-9600px'
		},300);
	});

	$('.case-select-9').click(function(){
		$('.case-wrapper').animate({
			left : '-10800px'
		},300);
	});

	$('.case-select-10').click(function(){
		$('.case-wrapper').animate({
			left : '-12000px'
		},300);
	});



	$('.case-info-nav-left').click(function(){
		if($('.case-wrapper').css('left') === '-1200px' === true){
			$('.case-wrapper').css('left', '-13200px').animate({
				left : '+=1200px'
			},300);
		} else {
			$('.case-wrapper').animate({
				left : '+=1200px'
			},300);
		}
	});

	$('.case-info-nav-right').click(function(){
		if($('.case-wrapper').css('left') === '-12000px' === true){
			$('.case-wrapper').css('left', '0px').animate({
				left : '-=1200px'
			},300);
		} else {
			$('.case-wrapper').animate({
				left : '-=1200px'
			},300);
		}
	});

	//TESTIMONIAL INDIVITUAL CASE STUDY SLIDER

	$('.testimonial-slide-control-1').click(function(){
		$('.case-slider-wrapper').animate({
			left : '0'
		});
	}); 

	$('.testimonial-slide-control-2').click(function(){
		$('.case-slider-wrapper').animate({
			left : '-960px'
		});
	});

	$('.testimonial-slide-control-3').click(function(){
		$('.case-slider-wrapper').animate({
			left : '-1920px'
		});
	});

	$('.testimonial-slide-control-4').click(function(){
		$('.case-slider-wrapper').animate({
			left : '-2880px'
		});
	});


});

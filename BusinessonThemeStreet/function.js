$(document).ready(function(){

	//Contact Slide CheckMarks
	
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



	//Home Slider Overlay Animation

	$('.slide-overlay').hover(
		function() {
			$(this).animate({marginTop:"-26px"});
			$(this).find(".tab-hovers").css({'display':'block'});
		},
		function() {
			$(this).animate({marginTop:"0"});
			$(this).find(".tab-hovers").css({'display':'none'});

		});

	//Default Slider Sliding

	$(function () {
		setInterval(
			function () {
				$('.default-slider ul').find('li:last').animate({
					"left":  "1000px"
				}, 600, function () {
					$('.default-slider ul li:first').css({
						'left': '0px'
					});
					$('.default-slider ul li:last').css({
						'left': '0px'
					});
					$('.default-slider ul li:first').before($('.default-slider ul li:last'));          
				});
			},10000
			);
	});

	//Activators 

	$('.slide-overlay').click(function() {
		if (this.id == "activator-1") {
			var slide = $(".slide-1-div");
			var active = slide.find('.slideImg');

			if (slide.css('width') == '1000px'){
				slide.animate({'width':'160px'},500,function(){
					active.animate({'top':'548px'},200);
				});
			}
			else {
				$(".contact-page-slide").css({'z-index':'2000'});
				$(".slide-div").css({'z-index':'3000'});
				slide.css({'z-index':'4000'});
				active.animate({'top':'0'},500,function() {
					slide.animate({
						'width' : '1000px',
						'left' : '0'
					}, 400,function(){
						active.animate({
							'left' : '0'
						}, 400,function(){
							if ($(".slide-2-div").css("width") == '1000px'){
								$(".slide-2-div").css({'width':'160px','left':'168px'});
								$(".slide-2-div img").css({'top':'548px'});
							}
							if ($(".slide-3-div").css("width") == '1000px'){
								$(".slide-3-div").css({'width':'160px','left':'336px'});
								$(".slide-3-div img").css({'top':'548px'});
							}
							if ($(".slide-4-div").css("width") == '1000px'){
								$(".slide-4-div").css({'width':'160px','left':'504px'});
								$(".slide-4-div img").css({'top':'548px'});
							}
							if ($(".slide-5-div").css("width") == '1000px'){
								$(".slide-5-div").css({'width':'160px','left':'672px'});
								$(".slide-5-div img").css({'top':'548px'});
							}
							if ($(".contact-slide").css("width") == "1000px"){
								$(".contact-slide").css({'left':'1000px'});
								$(".contact-page-slide").css({'z-index':'3000'});
							}
						});
					});
});
}
}
if (this.id == "activator-2") {
	var slide = $(".slide-2-div");
	var active = slide.find('.slideImg');

	if (slide.css('width') == '1000px'){
		slide.animate({'width':'160px','left':'168px'},500,function(){
			active.animate({'top':'548px'},200);
		});
	}
	else {
		$(".contact-page-slide").css({'z-index':'2000'});
		$(".slide-div").css({'z-index':'3000'});
		slide.css({'z-index':'4000'});
		active.animate({'top':'0'},500,function() {
			slide.animate({
				'width' : '1000px',
				'left' : '0'
			}, 400,function(){
				active.animate({
					'left' : '0'
				}, 400,function(){
					if ($(".slide-1-div").css("width") == '1000px'){
						$(".slide-1-div").css({'width':'160px','left':'0px'});
						$(".slide-1-div img").css({'top':'548px'});
					}
					if ($(".slide-3-div").css("width") == '1000px'){
						$(".slide-3-div").css({'width':'160px','left':'336px'});
						$(".slide-3-div img").css({'top':'548px'});
					}
					if ($(".slide-4-div").css("width") == '1000px'){
						$(".slide-4-div").css({'width':'160px','left':'504px'});
						$(".slide-4-div img").css({'top':'548px'});
					}
					if ($(".slide-5-div").css("width") == '1000px'){
						$(".slide-5-div").css({'width':'160px','left':'672px'});
						$(".slide-5-div img").css({'top':'548px'});
					}
					if ($(".contact-slide").css("width") == "1000px"){
						$(".contact-slide").css({'left':'1000px'});
						$(".contact-page-slide").css({'z-index':'3000'});
					}
				});
			});
});
}
}
if (this.id == "activator-3") {
	var slide = $(".slide-3-div");
	var active = slide.find('.slideImg');

	if (slide.css('width') == '1000px'){
		slide.animate({'width':'160px','left':'336px'},500,function(){
			active.animate({'top':'548px'},200);
		});
	}
	else {
		$(".contact-page-slide").css({'z-index':'2000'});
		$(".slide-div").css({'z-index':'3000'});
		slide.css({'z-index':'4000'});
		active.animate({'top':'0'},500,function() {
			slide.animate({
				'width' : '1000px',
				'left' : '0'
			}, 400,function(){
				active.animate({
					'left' : '0'
				}, 400,function(){
					if ($(".slide-1-div").css("width") == '1000px'){
						$(".slide-1-div").css({'width':'160px','left':'0px'});
						$(".slide-1-div img").css({'top':'548px'});
					}
					if ($(".slide-2-div").css("width") == '1000px'){
						$(".slide-2-div").css({'width':'160px','left':'168px'});
						$(".slide-2-div img").css({'top':'548px'});
					}
					if ($(".slide-4-div").css("width") == '1000px'){
						$(".slide-4-div").css({'width':'160px','left':'504px'});
						$(".slide-4-div img").css({'top':'548px'});
					}
					if ($(".slide-5-div").css("width") == '1000px'){
						$(".slide-5-div").css({'width':'160px','left':'672px'});
						$(".slide-5-div img").css({'top':'548px'});
					}
					if ($(".contact-slide").css("width") == "1000px"){
						$(".contact-slide").css({'left':'1000px'});
						$(".contact-page-slide").css({'z-index':'3000'});
					}
				});
			});
});
}
}
if (this.id == "activator-4") {
	var slide = $(".slide-4-div");
	var active = slide.find('.slideImg');

	if (slide.css('width') == '1000px'){
		slide.animate({'width':'160px','left':'504px'},500,function(){
			active.animate({'top':'548px'},200);
		});
	}
	else {
		$(".contact-page-slide").css({'z-index':'2000'});
		$(".slide-div").css({'z-index':'3000'});
		slide.css({'z-index':'4000'});
		active.animate({'top':'0'},500,function() {
			slide.animate({
				'width' : '1000px',
				'left' : '0'
			}, 400,function(){
				active.animate({
					'left' : '0'
				}, 400,function(){
					if ($(".slide-1-div").css("width") == '1000px'){
						$(".slide-1-div").css({'width':'160px','left':'0px'});
						$(".slide-1-div img").css({'top':'548px'});
					}
					if ($(".slide-2-div").css("width") == '1000px'){
						$(".slide-2-div").css({'width':'160px','left':'168px'});
						$(".slide-2-div img").css({'top':'548px'});
					}
					if ($(".slide-3-div").css("width") == '1000px'){
						$(".slide-3-div").css({'width':'160px','left':'336px'});
						$(".slide-3-div img").css({'top':'548px'});
					}
					if ($(".slide-5-div").css("width") == '1000px'){
						$(".slide-5-div").css({'width':'160px','left':'672px'});
						$(".slide-5-div img").css({'top':'548px'});
					}
					if ($(".contact-slide").css("width") == "1000px"){
						$(".contact-slide").css({'left':'1000px'});
						$(".contact-page-slide").css({'z-index':'3000'});
					}
				});
			});
});
}
}
if (this.id == "activator-5") {
	var slide = $(".slide-5-div");
	var active = slide.find('.slideImg');

	if (slide.css('width') == '1000px'){
		slide.animate({'width':'160px','left':'672px'},500,function(){
			active.animate({'top':'548px'},200);
		});
	}
	else {
		$(".contact-page-slide").css({'z-index':'2000'});
		$(".slide-div").css({'z-index':'3000'});
		slide.css({'z-index':'4000'});
		active.animate({'top':'0'},500,function() {
			slide.animate({
				'width' : '1000px',
				'left' : '0'
			}, 400,function(){
				active.animate({
					'left' : '0'
				}, 400,function(){
					if ($(".slide-1-div").css("width") == '1000px'){
						$(".slide-1-div").css({'width':'160px','left':'0px'});
						$(".slide-1-div img").css({'top':'548px'});
					}
					if ($(".slide-2-div").css("width") == '1000px'){
						$(".slide-2-div").css({'width':'160px','left':'168px'});
						$(".slide-2-div img").css({'top':'548px'});
					}
					if ($(".slide-3-div").css("width") == '1000px'){
						$(".slide-3-div").css({'width':'160px','left':'336px'});
						$(".slide-3-div img").css({'top':'548px'});
					}
					if ($(".slide-4-div").css("width") == '1000px'){
						$(".slide-4-div").css({'width':'160px','left':'504px'});
						$(".slide-4-div img").css({'top':'548px'});
					}
					if ($(".contact-slide").css("width") == "1000px"){
						$(".contact-slide").css({'left':'1000px'});
						$(".contact-page-slide").css({'z-index':'3000'});
					}
				});
			});
});
}
}
if (this.id == "activator-6") {
	var slide = $(".contact-slide");

	if (slide.css('left') == '0px'){
		slide.animate({
			'left' : '1000px',
			'z-index' : '0'
		},200);
	}
	else {
		$(".contact-page-slide").css({'z-index':'4000'});
		slide.animate({'left':'0px'},200,function(){
			if ($(".slide-1-div").css("width") == '1000px'){
				$(".slide-1-div").css({'width':'160px','left':'0px'});
				$(".slide-1-div img").css({'top':'548px'});
			}
			if ($(".slide-2-div").css("width") == '1000px'){
				$(".slide-2-div").css({'width':'160px','left':'168px'});
				$(".slide-2-div img").css({'top':'548px'});
			}
			if ($(".slide-3-div").css("width") == '1000px'){
				$(".slide-3-div").css({'width':'160px','left':'336px'});
				$(".slide-3-div img").css({'top':'548px'});
			}
			if ($(".slide-4-div").css("width") == '1000px'){
				$(".slide-4-div").css({'width':'160px','left':'504px'});
				$(".slide-4-div img").css({'top':'548px'});
			}
			if ($(".slide-5-div").css("width") == '1000px'){
				$(".slide-5-div").css({'width':'160px','left':'672px'});
				$(".slide-5-div img").css({'top':'548px'});
			}
		});
	}
}


});


	//HOMEPAGE RECENT PROJECTS
	$('.home-project-hover').fadeOut();
	$('.home-project').hover(function(){
		$(this).find('.home-project-overlay').stop().animate({
			'opacity':'0.8'
		});
		$(this).find('.home-project-hover').fadeIn();
	}, function(){
		$('.home-project-overlay').stop().css('opacity','0');
		$('.home-project-hover').stop().fadeOut();
	});

	//HOMEPAGE RECENT PROJECTS SLIDER
	$('.project-control-left').click(function(){
		if ($('.home-project-wrapper').css('left') === '-27px' === true){
			$('.home-project-wrapper').css('left', '-1371px').animate({
				left : '+=672px'
			}, 200);
		} else {
			$('.home-project-wrapper').animate({
				left : '+=672px'
			}, 200);
		}
	});

	$('.project-control-right').click(function(){
		if ($('.home-project-wrapper').css('left') === '-27px' === true){
			$('.home-project-wrapper').css('left', '-1371px').animate({
				left : '+=672px'
			}, 200);
		} else {
			$('.home-project-wrapper').animate({
				left : '+=672px'
			}, 200);
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


	// CASE STUDIES LEFT/RIGHT NAV
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

	//SERVICE PAGE SLIDER LEFT/RIGHT NAV
	$('.service-page-control-left').click(function(){
		if($('.service-page-slide-wrapper').css('left') === '0px' === true){
			$('.service-page-slide-wrapper').css('left', '-915px').animate({
				left : '+=305px'
			},300);
		} else {
			$('.service-page-slide-wrapper').animate({
				left : '+=305px'
			},300);
		}
	});

	$('.service-page-control-right').click(function(){
		if($('.service-page-slide-wrapper').css('left') === '-610px' === true){
			$('.service-page-slide-wrapper').css('left', '305px').animate({
				left : '-=305px'
			},300);
		} else {
			$('.service-page-slide-wrapper').animate({
				left : '-=305px'
			},300);
		}
	});
});

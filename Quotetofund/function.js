$(document).ready(function(){
	$('.go-button').click(function(){
		$(this).fadeOut('slow')
		$('.qtf-face').animate({
			'left' : '-2000px'
		}, 1000);
		$('.qtf-money-bag').delay('500').animate({
			'left' : '-2000px'
		}, 1000);
		$('.top-slider-text1').delay('200').animate({
			'left' : '-2000px'
		}, 1000);
		$('.top-slider-text2').delay('200').animate({
			'left' : '-2000px'
		}, 1000);
		$('.qtf-graph').delay('100').animate({
			'left' : '-2000px'
		}, 1000);

		// INCOMING SLIDE
		$('.bank').delay('500').animate({
			'left' : '95px'
		}, 1000);
		$('.women').delay('400').animate({
			'left' : '238px'
		}, 1000);
		$('.credit-card').delay('300').animate({
			'left' : '575px'
		}, 1000);
		$('.top-slider-second-text').delay('200').animate({
			'left' : '112px'
		}, 1000);
	});

	//APPROVAL SLIDE
	$('.slider-2-approval').hide();
	$('.slider-2-payment').hide();
	$('.mini-nav').hide();

	$('.qtf-arrow-left').click(function(){
		$('.slider2-content').hide();
		$('.slider-2-approval').show();
		$('.mini-nav').show();
	});

	$('.mini-nav-back').click(function(){
		$('.slider2-content').show();
		$('.slider-2-approval').hide();
	});

	//PAYMENT SLIDE
	$('.qtf-arrow-right').click(function(){
		$('.mini-nav').show();
		$('.slider2-content').hide();
		$('.slider-2-payment').show();
	});

	//MINI NAV SECTION
	$('.mini-nav-back').click(function(){
		$('.slider2-content').show();
		$('.slider-2-approval').hide();
		$('.slider-2-payment').hide();
		$('.mini-nav').hide();
	});

	$('.mini-nav-approval').click(function(){
		$('.slider-2-approval').show();
		$('.slider-2-payment').hide();
	});

	$('.mini-nav-payment').click(function(){
		$('.slider-2-payment').show();
		$('.slider-2-approval').hide();
	});
});

//APPROVAL & PAYMENTS ARROW HOVER EFFECTS

$(document).ready(function(){
	$(".qtf-arrow-left").hover(
		function() {
			$(this).stop().animate({"opacity": ".5"}, "fast");
		},
		function() {
			$(this).stop().animate({"opacity": "1"}, "fast");
		});

	$(".qtf-arrow-right").hover(
		function() {
			$(this).stop().animate({"opacity": ".5"}, "fast");
		},
		function() {
			$(this).stop().animate({"opacity": "1"}, "fast");
		});


	});





















































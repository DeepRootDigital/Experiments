$(document).ready(function(){
	$('.go-button').click(function(){
		$(this).fadeOut('fast')
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
		$('.bank').fadeIn('slow').animate({
			'left' : '95px'
		}, 1000);
		$('.women').fadeIn('fast').animate({
			'left' : '238px'
		}, 1000);
		$('.credit-card').fadeIn('slow').animate({
			'left' : '575px'
		}, 1000);
		$('.top-slider-second-text').fadeIn('fast').animate({
			'left' : '112px'
		}, 1000);
	});

	//APPROVAL SLIDE
	$('.slider-2-approval').hide();
	$('.slider-2-payment').hide();
	$('.mini-nav').hide();

	$('.second-slider-box.left').click(function(){
		$('.slider2-content').hide();
		$('.slider-2-approval').show();
		$('.mini-nav').show();
	});

	$('.mini-nav-back').click(function(){
		$('.slider2-content').show();
		$('.slider-2-approval').hide();
	});

	//PAYMENT SLIDE
	$('.second-slider-box.right').click(function(){
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

//APPROVAL & PAYMENTS ARROW HOVER EFFECTS
	$('.qtf-arrow-left').hover(
		function() {
			$(this).stop().animate({"opacity": ".8"}, "fast");
		},
		function() {
			$(this).stop().animate({"opacity": "1"}, "fast");
		});

	$('.qtf-arrow-right').hover(
		function() {
			$(this).stop().animate({"opacity": ".8"}, "fast");
		},
		function() {
			$(this).stop().animate({"opacity": "1"}, "fast");
		});

	$('.top img').hover(
		function() {
			$(this).stop().animate({"opacity": ".8"}, "fast");
		},
		function() {
			$(this).stop().animate({"opacity": "1"}, "fast");
		});

	$('.bottom img').hover(
		function() {
			$(this).stop().animate({"opacity": ".8"}, "fast");
		},
		function() {
			$(this).stop().animate({"opacity": "1"}, "fast");
		});

	$('.second-slider-box').hover(
  function() {
   $(this).find('.qtf-second-slider-text').find('p').css( "color", "#f5a624" );
   $(this).find('.qtf-second-slider-text').find('p span').css( "color", "#fff");
   $(this).find('.qtf-second-slider-text').find('qtf-second-slider-bottom-text').css( "color", "#f5a624" );
  },
  function() {
   $(this).find('.qtf-second-slider-text').find('p').css( "color", "#fff");
   $(this).find('.qtf-second-slider-text').find('p span').css( "color", "#f5a624");
   $(this).find('.qtf-second-slider-text').find('qtf-second-slider-bottom-text').css( "color", "#fff" );
  });

$('.second-slider-box').hover(
  function() {
   $(this).find('.qtf-second-slider-right-text').find('p').css( "color", "#f5a624" );
   $(this).find('.qtf-second-slider-right-text').find('p span').css( "color", "#fff");
  },
  function() {
   $(this).find('.qtf-second-slider-right-text').find('p').css( "color", "#fff");
   $(this).find('.qtf-second-slider-right-text').find('p span').css( "color", "#f5a624");
  });

	
	});





















































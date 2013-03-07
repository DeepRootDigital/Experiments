$(document).ready(function(){
	$('.tour-contact-dropdown form').fadeOut();
	$(".one-bedroom").fadeOut();
	$(".two-bedroom").fadeOut();
	$(".three-bedroom").fadeOut();
	$(".four-bedroom").fadeOut();
	$(".tour-contact-bottom").click(function(){
		$(this).fadeOut(500, function(){		
		});
		$('.tour-contact-dropdown').delay(100).animate({
			height: '190'
		},1200);
		$('.tour-contact-dropdown form').fadeIn(2500, function(){

		});
	});

	$(".bed-one").click(function(){
		$(".one-bedroom").fadeIn(600);
		$(".two-bedroom").fadeOut(600);
		$(".three-bedroom").fadeOut(600);
		$(".four-bedroom").fadeOut(600);
		$(".home-option-img").fadeOut(600);
		$(".home-option-select li:nth-child(2)").removeClass('bedroom-select');
		$(".home-option-select li:nth-child(3)").removeClass('bedroom-select');
		$(".home-option-select li:nth-child(4)").removeClass('bedroom-select');
		if ($(".bed-one").hasClass('bedroom-select') === true){
			$(".home-option-select li:nth-child(1)").removeClass('bedroom-select');		
			$(".home-option-img").fadeIn(600);	
			$(".one-bedroom").fadeOut(600);
		} else {$(".home-option-select li:nth-child(1)").addClass('bedroom-select');}
	});

	$(".bed-two").click(function(){
		$(".one-bedroom").fadeOut(600);
		$(".two-bedroom").fadeIn(600);
		$(".three-bedroom").fadeOut(600);
		$(".four-bedroom").fadeOut(600);
		$(".home-option-img").fadeOut(600);
		$(".home-option-select li:nth-child(1)").removeClass('bedroom-select');
		$(".home-option-select li:nth-child(3)").removeClass('bedroom-select');
		$(".home-option-select li:nth-child(4)").removeClass('bedroom-select');
		if ($(".bed-two").hasClass('bedroom-select') === true){
			$(".home-option-select li:nth-child(2)").removeClass('bedroom-select');
			$(".home-option-img").fadeIn(600);
			$(".two-bedroom").fadeOut(600);	
		} else {$(".home-option-select li:nth-child(2)").addClass('bedroom-select');}
	});

	$(".bed-three").click(function(){
		$(".one-bedroom").fadeOut(600);
		$(".two-bedroom").fadeOut(600);
		$(".three-bedroom").fadeIn(600);
		$(".four-bedroom").fadeOut(600);
		$(".home-option-img").fadeOut(600);
		$(".home-option-select li:nth-child(1)").removeClass('bedroom-select');
		$(".home-option-select li:nth-child(2)").removeClass('bedroom-select');
		$(".home-option-select li:nth-child(4)").removeClass('bedroom-select');
		if ($(".bed-three").hasClass('bedroom-select') === true){
			$(".home-option-select li:nth-child(3)").removeClass('bedroom-select');
			$(".home-option-img").fadeIn(600);
			$(".three-bedroom").fadeOut(600);	
		} else {$(".home-option-select li:nth-child(3)").addClass('bedroom-select');}
	});

	$(".bed-four").click(function(){
		$(".one-bedroom").fadeOut(600);
		$(".two-bedroom").fadeOut(600);
		$(".three-bedroom").fadeOut(600);
		$(".four-bedroom").fadeIn(600);
		$(".home-option-img").fadeOut(600);
		$(".home-option-select li:nth-child(1)").removeClass('bedroom-select');
		$(".home-option-select li:nth-child(2)").removeClass('bedroom-select');
		$(".home-option-select li:nth-child(3)").removeClass('bedroom-select');
		if ($(".bed-four").hasClass('bedroom-select') === true){
			$(".home-option-select li:nth-child(4)").removeClass('bedroom-select');
			$(".home-option-img").fadeIn(600);
			$(".four-bedroom").fadeOut(600);	
		} else {$(".home-option-select li:nth-child(4)").addClass('bedroom-select');}
	});

	$(".one-bedroom").mouseOver(function(){
		
	});
});





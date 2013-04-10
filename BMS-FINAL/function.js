$(document).ready(function(){
	$('.home-project-hover').fadeOut();
	$('.home-project').hover(function(){
		$(this).find('.home-project-overlay').stop().css('opacity','0.8');
		$(this).find('.home-project-hover').stop().fadeIn();
	}, function(){
		$('.home-project-overlay').stop().css('opacity','0');
		$('.home-project-hover').stop().fadeOut();
	});
});


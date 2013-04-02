$(document).ready(function(){
	$(".grid-info").removeClass("grayscale");
	$(".grid-block").hover(function(){
		$(this).find(".grid-info").animate({
			height: "100px"
		}, 1000);
	}, function(){
		$(this).find(".grid-info").animate({
			height: "25px"
		}, 1000);
	});
	$(".grid-block").hover(function(){
		$(this).find(".grid-image").removeClass("grayscale");
	}, function(){
		$(this).find(".grid-image").addClass("grayscale");
	});
	$(".grid-info").hover(function(){
		$(this).parent(".grid-block").find(".grid-overlay").css("opacity", 0);
	}, function(){
		$(this).parent(".grid-block").find(".grid-overlay").css("opacity", 1);
	});
});
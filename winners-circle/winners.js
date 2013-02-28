$(document).ready(function(){
	$('.tour-contact-dropdown form').fadeOut();
	$(".two-bedroom").fadeOut();
	$(".tour-contact-bottom").click(function(){
		$(this).fadeOut(500, function(){		
		});
		$('.tour-contact-dropdown').delay(100).animate({
			height: '185'
		},1200);
		$('.tour-contact-dropdown form').fadeIn(2500, function(){

		});
	});
	// $(".home-option-select li").mouseover(function(){
	// 	$(this).addClass("bedroom-select");
	// });
	// $(".home-option-select li").mouseout(function(){
	// 	$(this).removeClass("bedroom-select");
	// });

	// $(".bed-two").click(function(){
	// 	$(".home-option-img").toggle();
	// 	$(".two-bedroom").toggle();
	// 	if ($(".bed-two").is(':visible')){
	// 		$(".home-option-select li:nth-child(2)").addClass('bedroom-select');
	// 	} else {$(".home-option-select li:nth-child(2)").removeClass('bedroom-select');}
	// });

	$(".bed-two").click(function(){
		$(".home-option-img").toggle();
		$(".two-bedroom").toggle();
		if ($(".bed-two").hasClass('bedroom-select') === true){
			$(".home-option-select li:nth-child(2)").removeClass('bedroom-select');
		} else {$(".home-option-select li:nth-child(2)").addClass('bedroom-select');}
	});
});


// $(document).ready(function(){
// 	$(".tour-contact-bottom").click(
// 	    function () {
// 	       $(".tour-contact-dropdown").toggle("slow")
// 	    $(this).css({
//             'display': 'none'
//         });
//         $(".tour-contact-dropdown form").css({
//         	'display': 'block'
//         });
//     });
// });


$(document).ready(function(){
	$(".tour-contact-bottom").click(
	    function () {
	       $(".tour-contact-dropdown").animate({
	                "height":  "188px"
	            }, 500, function () {
	                
	    });
	    $(this).css({
                    'display': 'none'
                });
    });
});
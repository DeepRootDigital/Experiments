$(document).ready(function(){
	$(this).find('.home-option-content li').hover(function(){
		$(this).find('.two-bedroom-img1').show();
		$(this).find('.two-bedroom-img2').show();
	},
	function () {
		$(this).find('.two-bedroom-img1').hide();
		$(this).find('.two-bedroom-img2').hide();
	});	
});
$( document ).ready(function() {

	//Navigation Menu Events
	$(".submenu li").hover(
		function () {
			if ($(this).find("ul").length ) {
				$(".subnav-items").show();
			}
		},
		function () {
			$(".subnav-items").hide();
		}
		);

	//Recipes Lightbox Events

	$(".sngl-button").click(function()
	{
		$(this).parent().parent().parent().find(".recipe-lb").show();
		$(".lightbox-overlay").show();
	});

	$(".lightbox-overlay").click(function()
	{
		$(".lightbox-overlay").hide();
		$(".gallerybox").hide();
		$(".recipe-lb").hide();	
		$(".employeelbx").hide();	
	});

	//Gallery Lightbox Events

	$(".sngl-button").click(function()
	{
		$(this).parent().find(".gallerybox").show();
		$(".lightbox-overlay").show();
	});

	//Employee Lightbox Events

	$(".sngl-button").click(function()
	{
		$(this).parent().parent().find(".employeelbx").show();
		$(".lightbox-overlay").show();
	});

	//Slider Events

	$(function () {
		$('#slideFrame ul li:last').css({
			'left': '150px'
		});
		$('#slideFrame ul li:first').before($('#slideFrame ul li:last'));
		setInterval(
			function () {
				$('#slideFrame ul').find('li:last').animate({
					"left":  "150px"
				}, 700, function () {
					$('#slideFrame ul li:first').css({
						'left': '-450px'
					});
					$('#slideFrame ul li:first').before($('#slideFrame ul li:last'));                
				});
			},3000
			);
	});

	//Overlay Events

	$(function () {
		$('.bigblock .overlay').hover(
			function () {
				$(this).animate({
					"width":  "280px"
				}, 400, function () {

				});
			},
			function () {
				$(this).animate({
					"width":  "130px"
				}, 400, function () {

				});
			}
			);
		$('.wideblock .overlay').hover(
			function () {
				$(this).animate({
					"width":  "280px"
				}, 400, function () {

				});
			},
			function () {
				$(this).animate({
					"width":  "130px"
				}, 400, function () {

				});
			}
			);  
		$('.superblock .overlay').hover(
			function () {
				$(this).animate({
					"width":  "600px"
				}, 00, function () {

				});
				$(this).animate({
					"margin-left":  "0px"
				}, 400, function () {

				});
			},
			function () {
				$(this).animate({
					"margin-left":  "450px"
				}, 400, function () {

				});
				$(this).animate({
					"width":  "130px"
				}, 400, function () {

				});

			}
			);    

		$('#employees-page ul li').hover(
			function () {
				$(this).find('.overlay').animate({
					"margin-top":  "-162px"
				}, 200, function () {

				});
				$(this).find('.overlay').animate({
					"height":  "155px"
				}, 200, function () {

				});
			},
			function () {
				$(this).find('.overlay').animate({
					"height":  "25px"
				}, 200, function () {

				});
				$(this).find('.overlay').animate({
					"margin-top":  "-36px"
				}, 200, function () {

				});

			}
			); 
	});

});

//Sharing Events

function myPopup(url) {
	window.open( url, "myWindow", "status = 1, height = 500, width = 360, resizable = 0" )
}

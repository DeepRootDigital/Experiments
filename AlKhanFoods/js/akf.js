$( document ).ready(function() {




$(".submenu li ul").wrap('<div class="sub-menu-inject" />');
$(".submenu li ul li ul").unwrap('<div class="sub-menu-inject" />');
$(".submenu li ul").wrap('<div class="sub-menu-wrap" />');
$(".submenu li ul li ul").unwrap('<div class="sub-menu-wrap" />');
$(".sub-menu-wrap ul li ul").wrap('<div class="sub-sub-menu-wrap" />');

$(".sub-menu-inject").append($('.subnav-items'));
	//Navigation Menu Events
	$(".submenu li a").hover(
		
		function () {
			var lol = $(this).parent().find("ul");
			var lawl = $(lol).find("li");	

				
			
			if ($(this).parent().find("ul").length ) {
					$(this).parent().find(".sub-menu-inject").fadeIn(400);
					$(".subnav-items").fadeIn(400);
					$(".constructor").fadeIn(400);
					$(".article-item").fadeIn(400);
					$(".sub-menu-wrap").fadeIn(400);
					$(lawl).show();
					$(lol).show();
					$(".sub-sub-menu-wrap").hide();
					
				}

			},
			function () {

				var lol = $(this).parent().find("ul");
				var lawl = $(lol).find("li");

				$(".sub-menu-inject").hover(
					function(){
						$(this).parent().find(".sub-menu-inject").show();
						$(".subnav-items").show();
						$(".article-item").show();
						$(lol).show();
						$(lawl).show();
						$(".sub-menu-wrap").show();
						$(".sub-sub-menu-wrap").hide();
						$(".constructor").show();

						$(".submenu ul li ul li").hover(
							function(){
								$(".sub-sub-menu-wrap").fadeIn(400);
							},
							function(){
								$(".sub-sub-menu-wrap").hover(
									function(){
										$(".sub-sub-menu-wrap li").hover(
											function(){
												$(".sub-sub-menu-wrap").fadeIn(400);
											},
											function(){
												
											});
									},
									function(){
										$(".sub-sub-menu-wrap").fadeOut(400);
									});
							}
							);
					},
					function(){

						
					});

				$(".submenu-spacer").hover(
					function(){
						$(".sub-sub-menu-wrap").fadeOut(400);
						$(".sub-menu-wrap").fadeOut(400);
						$(".article-item").fadeOut(400);
						$(".subnav-items").fadeOut(400);
						$(".sub-menu-inject").fadeOut(400);
						$(".constructor").fadeOut(400);
						$(".submenu li ul li").fadeOut(400);
						$(".submenu li ul").fadeOut(400);
					});

				$(".topmenu").hover(
					function(){
						$(".sub-sub-menu-wrap").fadeOut(400);
						$(".sub-menu-wrap").fadeOut(400);
						$(".article-item").fadeOut(400);
						$(".subnav-items").fadeOut(400);
						$(".sub-menu-inject").fadeOut(400);
						$(".constructor").fadeOut(400);
						$(".submenu li ul li").fadeOut(400);
						$(".submenu li ul").fadeOut(400);
					});

			}
			);

$(".sub-menu-inject").hover(
					function(){

						$(".submenu ul li ul li").hover(
							function(){
								$(".sub-sub-menu-wrap").fadeIn(400);
							},
							function(){
								$(".sub-sub-menu-wrap").hover(
									function(){
										$(".sub-sub-menu-wrap li").hover(
											function(){
												$(".sub-sub-menu-wrap").fadeIn(400);
											},
											function(){});
									},
									function(){
										$(".sub-sub-menu-wrap").fadeOut(400);
									});
							}
							);
					},
					function(){


						$(".sub-sub-menu-wrap").fadeOut(400);
						$(".sub-menu-wrap").fadeOut(400);
						$(".article-item").fadeOut(400);
						$(".subnav-items").fadeOut(400);
						$(".sub-menu-inject").fadeOut(400);
						$(".constructor").fadeOut(400);
						$(".submenu li ul li").fadeOut(400);
						$(".submenu li ul").fadeOut(400);
						
					});



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
		$('#slideFrame ul li h2').fadeIn();  
		$('#slideFrame ul li:first').before($('#slideFrame ul li:last'));
		setInterval(
			function () {
			$('#slideFrame ul li:first h2').fadeOut();  
				$('#slideFrame ul').find('li:last').animate({
					"left":  "150px"
				}, 700, function () {
					$('#slideFrame ul li:first').css({
						'left': '-450px'
					});
					$('#slideFrame ul li:first h2').fadeIn();  
					$('#slideFrame ul li:first').before($('#slideFrame ul li:last'));          
				});
			},3000
			);
	});

	//Overlay Events

	$(function () {
		$('.bigblock').hover(
			function () {
				$(this).find(".overlay").animate({
					"width":  "280px"
				}, 400, function () {

				});
			},
			function () {
				$(this).find(".overlay").animate({
					"width":  "130px"
				}, 400, function () {

				});
			}
			);
		$('.wideblock').hover(
			function () {
				$(this).find(".overlay").animate({
					"width":  "280px"
				}, 400, function () {

				});
			},
			function () {
				$(this).find(".overlay").animate({
					"width":  "130px"
				}, 400, function () {

				});
			}
			);  
		$('.superblock').hover(
			function () {
				$(this).find(".overlay").animate({
					"width":  "600px"
				}, 00, function () {

				});
				$(this).find(".overlay").animate({
					"margin-left":  "0px"
				}, 400, function () {

				});
			},
			function () {
				$(this).find(".overlay").animate({
					"margin-left":  "450px"
				}, 400, function () {

				});
				$(this).find(".overlay").animate({
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
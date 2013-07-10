$( document ).ready(function() {




$(".submenu li ul").wrap('<div class="sub-menu-inject" />');
$(".submenu li ul li ul").unwrap('<div class="sub-menu-inject" />');
$(".submenu li ul").wrap('<div class="sub-menu-wrap" />');
$(".submenu li ul li ul").unwrap('<div class="sub-menu-wrap" />');
$(".sub-menu-wrap ul li ul").wrap('<div class="sub-sub-menu-wrap" />');

$(".sub-menu-inject").append($('.subnav-items'));
$(".sub-menu-inject").append($('.dropdown-bigbluetriangle'));
	//Navigation Menu Events
	$(".menu").children().hover(
		
		function () {

			//  Clear previous hover classes and add new one.
			$(".menu").children().removeClass('hovered');
			$(this).addClass('hovered');

			//  Define the submenu content.
			var lol = $(".hovered").find("ul");
			var lawl = $(lol).find("li");

			$(".hovered").children("a").addClass("special");
			var thispanelname = $('.special').text().slice(0,11);
			if ($('.special').text().length > 12) {
				var thispanelname = thispanelname + "...";
			}
			$('.hovered').find(".dd-text").text(thispanelname);
			$(".hovered").children("a").removeClass("special");



			// If there is content, load it.
			if ($(".hovered").find("ul").length > 0 ) {
					if ($(".constructor").css('display') == 'none') {
						$(".constructor").slideDown(200,function(lol){
							$(".hovered").find(".sub-menu-inject").show();
							$(".hovered").find(".sub-menu-wrap").show();
							$(".hovered").find(".sub-sub-menu-wrap").hide();

							// Load in the Subnav Items
							if ($(".hovered").find(".subnav-items").css('display') == 'none') {						
								$(".hovered").find(".subnav-items").slideDown(100);
								$(".hovered").find(".article-item").slideDown(100);
							}
							else {
							}

						});
					}
					else {
						$(".hovered").find(".sub-menu-inject").show();
						$(".hovered").find(".sub-menu-wrap").show();
						$(".hovered").find(".sub-sub-menu-wrap").hide();
						if ($(".hovered").find(".subnav-items").css('display') == 'none') {
							$(".hovered").find(".subnav-items").show();
							$(".hovered").find(".article-item").show();
							}
						else {
						}
					}

			//  Show submenu content.
			$(lol).show();
			$(lawl).show();

			}
			else
			{
				$(".sub-sub-menu-wrap").hide();
				$(".sub-menu-wrap").hide();
				$(".sub-menu-inject").hide();
				$(".submenu li ul li").hide();
				$(".submenu li ul").hide();
				$(lawl).hide();
				$(lol).hide();
				$(".constructor").slideUp(200);
				$(".subnav-items").hide();
			}


			//  Show level three submenu
			$(".sub-menu-wrap").children().children().hover(
				function() {
					$('.hovereded a').css("color","#FFFFFF");
					$('.hovereded a img').remove();
					$(".hovereded").find(".sub-sub-menu-wrap").hide();
					$(".sub-menu-wrap").children().children().removeClass('hovereded');
					$(this).addClass('hovereded');

					$('.hovereded a').css("color","#f69320");
					$('.hovereded div ul li a').css("color","#ffffff");
					$('<img src="http://localhost/wordpress/wp-content/uploads/2013/07/dropdown-whitetrianglepointer.png" />').prependTo('.hovereded a');
					$('.hovereded div ul li a img').remove();

					if ($(".hovereded").find("ul").length > 0) {
						$(".hovereded").parent().find(".sub-sub-menu-wrap").show();

						$(".sub-sub-menu-wrap").hover(
							function(){
								$(".hovereded").find(".sub-sub-menu-wrap").show();


								// Add the triangle when 3rd tier is hovered
								$(".sub-sub-menu-wrap ul li a").hover(
									function(){
										$('.hovereded div ul li a').css("color","#FFFFFF");
										$($(this)).css("color","#f69320");
										$('.hovereded div ul li a img').remove();
										$('<img src="http://localhost/wordpress/wp-content/uploads/2013/07/dropdown-orangetrianglepointer.png" />').prependTo($(this));
									},
									function(){
										$('.hovereded div ul li a img').remove();
										$($(this)).css("color","#ffffff");
									});

							},
							function(){
								$(".hovereded").find(".sub-sub-menu-wrap").hide();
								$('.hovereded a img').remove();
								$('.hovereded a').css("color","#ffffff");
							}
						);
					}
					else{
						$(".hovereded").find(".sub-sub-menu-wrap").hide();
						$('.hovereded a img').remove();
					}
				},
				function(){
					$('.hovereded a').css("color","#FFFFFF");
				}
			);


			//  Reposition the triangle.
			var objectoffset = $(this).offset();
			objectoffset = objectoffset.left;
			var objectoffseter = $(this).innerWidth();
			objectoffseter = objectoffseter / 2;
			objectoffseter = objectoffseter - 16;
			var divoffset = $(this).parent().offset();
			divoffset = divoffset.left;
			objectoffseter = objectoffseter + objectoffset - divoffset;
			$(".dropdown-bigbluetriangle img").animate({'margin-left': objectoffseter},200);


			// End of hover case, next is what happens when hover is broken
			},
			function () {
				$(".sub-sub-menu-wrap").hide();
				$(".sub-menu-wrap").hide();
				$(".sub-menu-inject").hide();
				$(".submenu li ul li").hide();
				$(".submenu li ul").hide();
				$(lawl).hide();
				$(lol).hide();

				$(this).removeClass('hovered');

			}
			);


// Some special hover cases to remove the menu.
$(".topmenu").hover(
	function(){
		$(".constructor").slideUp(200);
		$(".subnav-items").hide();
		$(".menu").children().removeClass('hovered');
	});

$("#homepage").hover(
	function(){
		$(".constructor").slideUp(200);
		$(".subnav-items").hide();
		$(".menu").children().removeClass('hovered');
	});

// End Drop-down Menu Code


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
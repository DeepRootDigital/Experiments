$(function () {
				$('.slider ul li:last').css({ 'left': '0px' });
				$('.slider ul li:first').before($('.slider ul li:last'));
				
				setInterval(
					function () {
						$('.slider ul').find('li:last').animate({ "left":  "650px" }, 700, function () {
							$('.grayed').toggleClass( 'grayed' );
							$('.slider ul li:first').css({ 'left': '0px' });
							$('.slider ul li:first').before($('.slider ul li:last'));
							
						});
					},3000
				);
			});
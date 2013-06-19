<?php
/*
Template Name: E-Book Landing page
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vivioptal</title>
	<link href="<?php echo get_template_directory_uri(); ?>/lp.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css" type="text/css" rel="stylesheet" />
	<?php wp_head(); ?>
</head>
<body>
	<div class="back-ribbon">
	</div>
	<div class="container">
		<div class="top-section">
			<img class="vivioptal-intro-text" src="<?php echo get_template_directory_uri(); ?>/lp-images/vivioptal.png" alt="vivioptal" />
			<div class="e-book-info">
				<p>download a copy of our</p>
				<p>free <span>e-book</span></p>
				<p>about the</p>
				<p>vitamin b</p>
				<p>complex</p>
				<img class="dotted-divider-full" src="<?php echo get_template_directory_uri(); ?>/lp-images/dotted-divider-full.png" alt="dotted-divider-full" />
				<img class="dotted-divider-half" src="<?php echo get_template_directory_uri(); ?>/lp-images/dotted-divider-half.png" alt="dotted-divider-half" />
				<img class="solid-divider" src="<?php echo get_template_directory_uri(); ?>/lp-images/solid-divider.png" alt="solid-divider" />
			</div>
			<img class="vivio-box-image" src="<?php echo get_template_directory_uri(); ?>/lp-images/vivio-box-image.png" alt="vivio-box-image" />
			<div class="vivio-submit-section">
				<form action="http://vivioptalvitamins.us4.list-manage.com/subscribe/post?u=04fad6565597d00504ebba5d8&amp;id=ab124d3c2d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<input type="text" value="" placeholder="first name..." name="FNAME" class="required" id="mce-FNAME">
					<input type="text" value="" placeholder="last name..." name="LNAME" class="required" id="mce-LNAME">
					<input type="email" value="" placeholder="email..." name="EMAIL" class="required email" id="mce-EMAIL">
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>	
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				</form>
			</div>
		</div>
		<div class="bottom-section">
			<div class="bottom-section-intro-text">
				<p>in our <span>e-book</span> you can <span>learn about...</span></p>
				<img class="bottom-section-intro-divider" src="<?php echo get_template_directory_uri(); ?>/lp-images/bottom-section-intro-divider.png" alt="bottom-section-intro-divider" />
			</div>
			<div class="b-description font-placement">
				<h1><span>sources</span> of b vitamins</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquam, leo vitae mollis eleifend etis.</p>
			</div>
			<div class="benefits-description font-placement">
				<h1><span>benefits of</span> vitamin b</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquam, leo vitae mollis eleifend etis.</p>
			</div>
			<div class="how-much-description font-placement">
				<h1><span><em>how much b</span> vitamin to take</em></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquam, leo vitae mollis eleifend etis.</p>
			</div>
		</div>
		<div class="footer-items">
			<ul>
				<li>products</li>
				<li>shop</li>
				<li>health center</li>
			</ul>
			<ul>
				<li>contact us</li>
				<li>coupons & promos</li>
				<li>about us</li>
			</ul>
			<ul>
				<li>blog</li>
				<li>free sameples</li>
			</ul>
			<div class="address-social-media">
				<p>800 456 7890</p>
				<p>info@viviopalus.com</p>
				<ul>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/lp-images/facebook-icon.png" alt="" /></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/lp-images/twitter-icon.png" alt="" /></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/lp-images/youtube-icon.png" alt="" /></a></li>
				</ul>
			</div>
			<img class="footer-divider" src="<?php echo get_template_directory_uri(); ?>/lp-images/footer-divider.png" alt="footer-divider" />
			<p>Copyright © 2012 Vivioptal All rights reserved | Privacy Policy About Our Ads Safety Terms of Service Copyright/IP Policy</p>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>
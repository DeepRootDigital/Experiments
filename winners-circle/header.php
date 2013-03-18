<!DOCTYPE html>
<html>
<head>
	<title>The Winners Circle</title>
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/2eb637b8-6ca1-4d92-b8b6-234adfb90635.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/superfish.css"/>
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/winners.js"></script>
	<?php $slideroptions = get_option('slider_theme_options'); ?>
	<?php $homepageoptions = get_option('sample_theme_options'); ?>
</head>
<body>
	<div class="page-wrap">
		<div class="center canvas">
			<header>
				<nav>
					<ul>
						<li><a href="#">Apartment Homes</a>
							<ul>
								<li><img src="<?php echo get_template_directory_uri(); ?>/images/nav-dropdown-arrow.png"><a href="#">Features</a></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/images/nav-dropdown-arrow.png"><a href="#">Floor plans/Model Home</a></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/images/nav-dropdown-arrow.png"><a href="#">Gallery</a></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/images/nav-dropdown-arrow.png"><a href="#">Web Specials</a></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/images/nav-dropdown-arrow.png"><a href="#">Online Applications</a></li>
							</ul>
						</li>
						<li><a href="#">Amenities</a></li>
						<li><a href="#">Community</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Faq</a></li>
					</ul>
				</nav>
				<div class="clear"></div>
				<div class="social-media">
					<ul>
						<li><a href="<?php echo $homepageoptions['facebookurl']?>">F</a></li>
						<li><a href="<?php echo $homepageoptions['twitterurl']?>">L</a></li>
						<li><a href="<?php echo $homepageoptions['youtubeurl']?>">X</a></li>
					</ul>
					<div class="clear"></div>
				</div>
				<div class="tour-contact-container">
					<div class="tour-contact">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
					</div>
					<div class="tour-contact-dropdown">
						<form action="#" method="POST">
							<input type="text" name="name" value="name">
							<input type="text" name="email" value="email">
							<input type="text" name="phone" value="phone">
							<input type="text" name="date" value="date/time">
							<input type="submit" value="submit" name="submit" id="contact-dropdown-submit">
						</form>
					</div>
					<div class="tour-contact-bottom">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo-bottom.png">
					</div>
				</div>
			</header>
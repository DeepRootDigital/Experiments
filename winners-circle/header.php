<!DOCTYPE html>
<html>
<head>
	<title>The Winners Circle</title>
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/2eb637b8-6ca1-4d92-b8b6-234adfb90635.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/superfish.css"/>
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/winners.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/port-loader.js"></script>
	<?php $homepageoptions = get_option('sample_theme_options'); ?>
	<?php $mainoptions = get_option('main_theme_options'); ?>
</head>
<body>
	<div class="page-wrap">
		<div class="center canvas">
			<header>
				<nav>
					<?php wp_nav_menu(array('theme_location' => 'Header Nav',)); ?>
				</nav>
				<div class="clear"></div>
				<div class="social-media">
					<ul>
						<li><a href="<?php echo $mainoptions['facebookurl']?>">F</a></li>
						<li><a href="<?php echo $mainoptions['twitterurl']?>">L</a></li>
						<li><a href="<?php echo $mainoptions['youtubeurl']?>">X</a></li>
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
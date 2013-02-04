<!DOCTYPE html>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
	<link href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
</head>
<body>
	<div class = "canvas">
		<header>
			<div class="center">
				<h1><span>.</span>Curb the Competition<span>.</span></h1>
				<form class="header-meta">
					<ul class="no-border">
						<li><input name="name" type="text" placeholder="name"></li>
						<li><input name="password" type="password" placeholder="password"></li>
					</ul>
					<ul class="border">
						<li></li>
						<li></li>
					</ul>
					<div class="login-button">
						<input name="submit" type="submit" value="">
					</div>
				</form>
				<form class="header-search">
					<ul>
						<li><input name="search" value="Search"></li>
						<li></li>
					</ul>
					<div id="submit-button" class="search-button">
						<input name="submit" type="submit" value="submit">
					</div>					
				</form>	

				<nav>
					<ul class="header-left-nav">	
						<li><a href="testimonial.php">Testimonials</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="index.php">Home</a></li>
					</ul>
					<div class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
					</div>
					<ul class="header-right-nav">
						<li><a href="#">eGuides</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
					<div class="clear"></div>
				</nav>
			</div>
		</header>
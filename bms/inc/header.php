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
					<ul class="border">
						<li><input name="name" type="text" placeholder="name"></li>
						<li><input name="password" type="password" placeholder="password"></li>
					</ul>
					<div class="login-button">
						<input name="submit" type="submit" value="">
					</div>
				</form>
				<form class="header-search">
					<ul>
						<li><input name="search" value="Search"></li>
					</ul>
					<div id="submit-button" class="search-button">
						<input name="submit" type="submit" value="submit">
					</div>					
				</form>	

				<nav>
					<?php
					$defaults = array(
					 'menu'            => 'top-left',
					 'menu_class'      => 'header-left-nav',
					);
					wp_nav_menu( $defaults );
					?>
					<div class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
					</div>
					<?php
					$defaults = array(
					 'menu'            => 'top-right',
					 'menu_class'      => 'header-right-nav',
					);
					wp_nav_menu( $defaults );
					?>
					<div class="clear"></div>
				</nav>
			</div>
		</header>
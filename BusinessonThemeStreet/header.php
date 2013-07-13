<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<script type="text/javascript" src="http://assets.pinterest.com/js/pinit.js"></script>
	<div class="canvas">
		<header>			
			<div class="center">
				<h1><span>.</span>Your one way to business success<span>.</span></h1>
				<!-- <div class="login-form">
					<form>
					<input type="text" placeholder="username">
					<input type="password" placeholder="password">
					</form>
				</div> -->
				<nav class="header-left-nav">
					<?php wp_nav_menu(array('theme_location' => 'Header Nav - Left',)); ?>
				</nav>
				<div class="logo">
					<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
				</div>
				<nav class="header-right-nav">
					<?php wp_nav_menu(array('theme_location' => 'Header Nav - Right',)); ?>
				</nav>
			</div>
			<div class="clear"></div>
		</header>
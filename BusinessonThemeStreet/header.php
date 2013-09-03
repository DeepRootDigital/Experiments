<!DOCTYPE html>
<?php $mainoptions = get_option('main_theme_options'); ?>	
<head>	
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/8732fb8c-7669-455f-a795-b783768d6394.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
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
<div class="header-fw"></div>
		<header>
<?php // get_template_part('feedback','form'); 
?>			
			<div class="center">
				<h1><span>.</span>Curb the Competition<span>.</span></h1>
				<div class="login-form">
					<div class="fbicon social-icons-top"></div>
					<div class="pinicon social-icons-top"></div>
					<div class="twittericon social-icons-top"></div>
					<div class="gglicon social-icons-top"></div>
					<div class="linkedinicon social-icons-top"></div>
					
					
					<!-- <ul>	
						<li><a href="<?php echo $mainoptions['facebookurl']; ?>">
							<img name="fbicon" src="<?php echo get_template_directory_uri(); ?>/images/social-icon-fb.png" onMouseOver="fbicon.src='<?php echo get_template_directory_uri(); ?>/images/social-icon-fb-hover.png'" onMouseOut="fbicon.src='<?php echo get_template_directory_uri(); ?>/images/social-icon-fb.png'"></a>
						</li>
						<li>
							<a href="<?php echo $mainoptions['pinteresturl']; ?>">
								<img name="pinicon" onMouseOver="pinicon.src='<?php echo get_template_directory_uri(); ?>/images/social-icon-pin-hover.png'" onMouseOut="pinicon.src='<?php echo get_template_directory_uri(); ?>/images/social-icon-pin.png'"
								src="<?php echo get_template_directory_uri(); ?>/images/social-icon-pin.png">
							</a>
						</li>
						<li>
							<a href="<?php echo $mainoptions['twitterurl']; ?>">
								<img name="twittericon" onMouseOver="twittericon.src='<?php echo get_template_directory_uri(); ?>/images/social-icon-twitter-hover.png'" onMouseOut="twittericon.src='<?php echo get_template_directory_uri(); ?>/images/social-icon-twitter.png'"
								src="<?php echo get_template_directory_uri(); ?>/images/social-icon-twitter.png">
							</a>
						</li>
						<li>
							<a href="<?php echo $mainoptions['gglplusurl']; ?>">
								<img name="youtubeicon" onMouseOver="youtubeicon.src='<?php echo get_template_directory_uri(); ?>/images/social-icon-ggl-hover.png'" onMouseOut="youtubeicon.src='<?php echo get_template_directory_uri(); ?>/images/social-icon-ggl.png'"
								src="<?php echo get_template_directory_uri(); ?>/images/social-icon-ggl.png">
							</a>
						</li>
						<li>
							<a href="http://www.linkedin.com/company/business-on-market-st">
								<img name="linkedinicon" onMouseOver="linkedinicon.src='<?php echo get_template_directory_uri(); ?>/images/social-icon-linkedin-hover.png'" onMouseOut="linkedinicon.src='<?php echo get_template_directory_uri(); ?>/images/social-icon-linkedin.png'"
								src="<?php echo get_template_directory_uri(); ?>/images/social-icon-linkedin.png">
							</a>
						</li>
					</ul> -->
					<!--
					<form>
					<input type="text" placeholder="username">
					<input type="password" placeholder="password">
				</form> -->
			</div>
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
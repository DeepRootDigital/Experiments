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
								<li><img src="<?php echo get_template_directory_uri(); ?>/images/nav-dropdown-arrow.png"><a href="#">eatures</a></li>
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
			<div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg"></div>
			<div class="home-options">
				<div class="home-option-img">
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/bedroom1.png"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/bedroom2.png"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/bedroom3.png"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/bedroom4.png"></li>
					</ul>
					<div class="clear"></div>
				</div>
				<div class="one-bedroom home-option-content">
					<ul>
						<li>1 Colonel John</li>
						<li>Jalpur</li>
						<li>Java Gold</li>
					</ul>
					<ul>
						<li>Man O' War</li>
						<li>Native Dancer</li>
					</ul>
					<div class="clear"></div>
					<div class="two-bedroom-img1">
						<img src="<?php echo $slideroptions['p2img'] ?>">
					</div>
					<div class="two-bedroom-img2">
						<img src="<?php echo get_template_directory_uri(); ?>/images/home-select-img.jpg">
					</div>
				</div>
				<div class="two-bedroom home-option-content">
					<ul>
						<li>2 Colonel John</li>
						<li>Jalpur</li>
						<li>Java Gold</li>
					</ul>
					<ul>
						<li>Man O' War</li>
						<li>Native Dancer</li>
					</ul>
					<div class="clear"></div>
					<div class="two-bedroom-img1">
						<img src="<?php echo get_template_directory_uri(); ?>/images/home-select-img.jpg">
					</div>
					<div class="two-bedroom-img2">
						<img src="<?php echo get_template_directory_uri(); ?>/images/home-select-img.jpg">
					</div>
				</div>
				<div class="three-bedroom home-option-content">
					<ul>
						<li>3 Colonel John</li>
						<li>Jalpur</li>
						<li>Java Gold</li>
					</ul>
					<ul>
						<li>Man O' War</li>
						<li>Native Dancer</li>
					</ul>
					<div class="clear"></div>
					<div class="two-bedroom-img1">
						<img src="<?php echo get_template_directory_uri(); ?>/images/home-select-img.jpg">
					</div>
					<div class="two-bedroom-img2">
						<img src="<?php echo get_template_directory_uri(); ?>/images/home-select-img.jpg">
					</div>
				</div>
				<div class="four-bedroom home-option-content">
					<ul>
						<li>4 Colonel John</li>
						<li>Jalpur</li>
						<li>Java Gold</li>
					</ul>
					<ul>
						<li>Man O' War</li>
						<li>Native Dancer</li>
					</ul>
					<div class="clear"></div>
					<div class="two-bedroom-img1">
						<img src="<?php echo get_template_directory_uri(); ?>/images/home-select-img.jpg">
					</div>
					<div class="two-bedroom-img2">
						<img src="<?php echo get_template_directory_uri(); ?>/images/home-select-img.jpg">
					</div>
				</div>
				
				<div class ="home-option-select">
					<ul>
						<li class="bed-one">One<br><span>Bedroom</span></li>
						<li class="bed-two">Two<br><span>Bedroom</span></li>
						<li class="bed-three">Three<br><span>Bedroom</span></li>
						<li class="bed-four">1 <span>&amp;</span> 2 floor<br><span>options</span></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="home-content">
				<div class="home-col-1 home-col">
					<h2><?php echo $homepageoptions['p1title'] ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/content-underline.png">
					<p><?php echo $homepageoptions['p1text'] ?></p>
					<a href="<?php echo $homepageoptions['p1link']?>">Learn <em>more</em><img src="<?php echo get_template_directory_uri(); ?>/images/learn-more-arrow.png"></a>
				</div>
				<div class="home-col-2 home-col">
					<h2><?php echo $homepageoptions['p2title'] ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/content-underline.png">
					<p><?php echo $homepageoptions['p2text'] ?></p>
					<a href="<?php echo $homepageoptions['p2link']?>">Learn <em>more</em><img src="<?php echo get_template_directory_uri(); ?>/images/learn-more-arrow.png"></a>
				</div>
				<div class="home-col-3 home-col">
					<h2><?php echo $homepageoptions['p3title'] ?></h2>
					<img src="<?php echo get_template_directory_uri(); ?>/images/content-underline.png">
					<p><?php echo $homepageoptions['p3text'] ?></p>
					<a href="<?php echo $homepageoptions['p3link']?>">Learn <em>more</em><img src="<?php echo get_template_directory_uri(); ?>/images/learn-more-arrow.png"></a>
				</div>
			</div>
		</div><!-- END Canvas -->
		<footer>
			<div class="center">
				<div class="widgets-container">
					<div class="footer-widget">
						<h2>Looking to <em>buy?</em></h2>
						<img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png">
					</div>
					<div class="footer-widget blog-widget">
						<h2>WC <em>Blog</em></h2>
						<ul>
							<li><a href="#"><p>Interesting Blog Entry</p></a></li>
							<li><a href="#"><p>Cool, Another Article</p></a></li>
							<li><a href="#"><p>This is a cool post</p></a></li>
							<li><a href="#"><p>A good article is worth</p></a></li>
							<li><a href="#"><p>Blog Content Helps SEO</p></a></li>
						</ul>
					</div>
					<div class="footer-widget social-media-widget">
						<h2>Social <em>Media</em></h2>
						<ul>
							<li><a href="<?php echo $homepageoptions['twitterurl']?>">L</a></li>
							<li><a href="<?php echo $homepageoptions['facebookurl']?>">F</a></li>
							<li><a href="<?php echo $homepageoptions['pinteresturl']?>">&</a></li>
							<li><a href="<?php echo $homepageoptions['youtubeurl']?>">X</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</footer>
		<div class="footer-lower">
			<div class="center"> 
				<p>Dico voluptatum eos at. Ne sed primis deseruisse, tation habemus corrumpit in nam, eu legere possit principes.</p>
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-lower-logo.png"></a>
			</div>
		</div>
	</div><!-- END Page Wrap -->
	<script type="text/javascript" src="http://fast.fonts.com/jsapi/2eb637b8-6ca1-4d92-b8b6-234adfb90635.js"></script>
</body>
</html>
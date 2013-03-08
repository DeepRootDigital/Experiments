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
			<div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg"></div>
			<div class="sub-content">
				<div class="sub-page-data">
					<div class="sub-left">
						<section>
							<div class="sub-left-text">
								<img src="<?php echo get_template_directory_uri(); ?>/images/house-icon-small.png">
								<h2>Churchill Downs</h2>
								<p>Lorem ipsum dolor sit amet, essent postulant ea ius, ut idque invidunt quo. Dicunt neglegentur ei usu, magna numquam at mel. Dico voluptatum eos at.<br><br>Ne sed primis deseruisse, tation habemus corrumpit in nam, eu legere possit principes. Lorem ipsum dolor sit amet, essent postulant ea ius, ut idque invidunt quo. </p>
							</div>
							<div class="sub-left-features">
								<h2>Key <span>Features</span></h2>
								<li><a href="#">Lorem ipsum dolor sit amet, essent postulant ea ius.</a></li>
								<li><a href="#">Dicunt neglegentur ei usu, magna numquam at mel.</a></li>
								<li><a href="#">Unum deterruisset et vel, no omnesque vituperatoribus has,</a></li>
							</div>
						</section>
						<div class="floor-plan">
							<h2>Floorplan</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/images/floor-plan.png">
						</div>
					</div>				
					<div class="sub-right">
						<img src="<?php echo get_template_directory_uri(); ?>/images/one-month-free.png">
						<div class="sub-page-list">
							<ul>
								<li>One <span>Bedroom</span><img src="<?php echo get_template_directory_uri(); ?>/images/house1-small.png"></li>
								<li><a href="#">Bermardini</a></li>
								<li><a href="#">Birdstone</a></li>
							</ul>
							<div class="list-shadow"></div>
							<ul>
								<li>Two <span>Bedroom</span><img src="<?php echo get_template_directory_uri(); ?>/images/house2-small.png"></li>
								<li><a href="#">Colonel John</a></li>
								<li><a href="#">Jalpur</a></li>
								<li><a href="#">Java Gold</a></li>
								<li><a href="#">Man O’ War</a></li>
								<li><a href="#">Native Dancer</a></li>
							</ul>
							<div class="list-shadow"></div>
							<ul>
								<li>Three <span>Bedroom</span><img src="<?php echo get_template_directory_uri(); ?>/images/house3-small.png"></li>
								<li><a href="#">Sea Hero</a></li>
								<li><a href="#">Street Sense</a></li>
								<li><a href="#">Sword Dancer</a></li>
							</ul>
							<div class="list-shadow"></div>
							<ul>
								<li>1 & 2 <span>Floor</span><img src="<?php echo get_template_directory_uri(); ?>/images/house4-small.png"></li>
								<li><a href="#">The Belmont</a></li>
								<li><a href="#">Churchill Downs</a></li>
								<li><a href="#">Pimlico</a></li>
							</ul>	
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>			
		</div><!-- END Canvas -->
		<div class="clear"></div>
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
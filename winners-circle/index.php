<?php $slideroptions = get_option('slider_theme_options'); ?>
<?php $homepageoptions = get_option('sample_theme_options'); ?>
<?php get_header(); ?>
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
<?php get_footer(); ?>
<?php get_header(); ?>
<?php $homepageoptions = get_option('sample_theme_options'); ?>
<div class="center">
	<div class="home-slider">
		<div class="slider-bank">
			<div class="default-slider">
				<ul>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/slide-img.jpg"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/main-slider.jpg"></li>
				</ul>
			</div>
			<div class="slide-div slide-1-div">
				<img id="active-1" class="slideImg" src="<?php echo get_template_directory_uri(); ?>/images/slide-1-active.jpg">
			</div>
			<div class="slide-div slide-2-div">
				<img id="active-2" class="slideImg" src="<?php echo get_template_directory_uri(); ?>/images/slide-2-active.jpg">
			</div>
			<div class="slide-div slide-3-div">
				<img id="active-3" class="slideImg" src="<?php echo get_template_directory_uri(); ?>/images/slide-3-active.jpg">
			</div>
			<div class="slide-div slide-4-div">
				<img id="active-4" class="slideImg" src="<?php echo get_template_directory_uri(); ?>/images/slide-4-active.jpg">
			</div>
			<div class="slide-div slide-5-div">
				<img id="active-5" class="slideImg" src="<?php echo get_template_directory_uri(); ?>/images/slide-5-active.jpg">
			</div>
			<div class ="contact-page-slide">
				<div class="contact-slide">
					<div class="contact-slide-slogan">
						<img src="<?php echo get_template_directory_uri(); ?>/images/contact-slider-slogan.png" alt="Let's connect and get started">
						<p><?php the_content(); ?></p>
					</div>
					<form>
						<input name="name" value="Name" type="text"><br>
						<input name="email" value="Email" type="text"><br>
						<input name="phone" value="Phone" type="text"><br>
						<input name="industry" value="Industry" type="text"><br>
						<textarea name="message">Message</textarea>
						<input id="contact-form-submit" type="submit" value="submit">
					</form>
					<div class="contact-slide-select">
						<h1>Select all that apply</h1>
						<ul>
							<li class="contact-slide-select-1"><p>Research and<br>planning</p></li>
							<li class="contact-slide-select-3"><p>Branding</p></li>
							<li class="contact-slide-select-2"><p>Business<br>development</p></li>
							<li class="contact-slide-select-5"><p>Web<br>development</p></li>
							<li class="contact-slide-select-4"><p>Marketing</p></li>														
						</ul>
					</div>
					<div class="contact-slide-address">
						<h1>BMS<br>CONTACT</h1>
						<ul>
							<li>7975</li>
							<li>Raytheon RD Suite 310</li>
							<li>San Diego, CA 92115</li><br>
							<li>P // 858.598.5477</li>
						</ul>	
					</div>
					<div class="clear"></div>
				</div><!--END CONTACT SLIDE -->
			</div>
		</div>
		<div class="slider-ui">
			<div id="activator-1" class="slide-overlay">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-1.png" class="tab-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-1-active.png" class="tab-hovers tab-hovers-first">
			</div>
			<div id="activator-2" class="slide-overlay">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-2.png" class="tab-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-2-active.png" class="tab-hovers">
			</div>
			<div id="activator-3" class="slide-overlay">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-3.png" class="tab-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-3-active.png" class="tab-hovers">
			</div>
			<div id="activator-4" class="slide-overlay">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-4.png" class="tab-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-4-active.png" class="tab-hovers">
			</div>
			<div id="activator-5" class="slide-overlay">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-5.png" class="tab-img">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-5-active.png" class="tab-hovers">
			</div>
			<div id="activator-6" class="slide-overlay">
				<img class="contact tab-img" src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-6.png">
			</div>
		</div>
	</div>
	<div class="home-content bottom-page-space">
		<?php 
		$options = get_option('sample_theme_options');
		if ($options['casestudies'] == '1') {
			?>
			<h1><em>Recent</em> Projects</h1>
			<section class="home-project-section">
				<div class="home-project-wrapper">
					<?php
					$counter = 0;
					$featuredPosts = new WP_Query();
					$featuredPosts->query(array('post_type' => 'Casestudies', 'posts_per_page' => 12));
					while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
					?>
					<?php if ($counter % 4 == 0) { ?>
					<div class="home-project-block">
						<?php } ?>
						<article class="home-project">
							<img class="z-set" src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
							<div class="home-project-thumbnailimage">
								<?php the_post_thumbnail(); ?> 
							</div>
							<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
							<h2><?php the_title(); ?> <em>//</em></h2>
							<h1><?php
							$category = get_the_category();
							echo $category[0]->cat_name;
							?></h1>
							<div class="home-project-hover">
								<?php if(get_post_meta(get_the_ID(), 'brandingbox', true) == true) { ?>
								<img width="30" height="30" src="<?php echo get_template_directory_uri(); ?>/images/service-icons/branding-icon-hover.png">
								<?php } ?>
								<?php if(get_post_meta(get_the_ID(), 'marketingbox', true) == true) { ?>
								<img width="30" height="30" src="<?php echo get_template_directory_uri(); ?>/images/service-icons/marketing-icon-hover.png">
								<?php } ?>
								<?php if(get_post_meta(get_the_ID(), 'developmentbox', true) == true) { ?>
								<img width="30" height="30" src="<?php echo get_template_directory_uri(); ?>/images/service-icons/bd-icon-hover.png">
								<?php } ?>
								<?php if(get_post_meta(get_the_ID(), 'technologybox', true) == true) { ?>
								<img width="30" height="30" src="<?php echo get_template_directory_uri(); ?>/images/service-icons/technology-icon-hover.png">
								<?php } ?>
								<?php echo get_the_category_list(); ?>
								<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
							</div>
						</article>
						<?php $counter++; ?>
						<?php if ($counter % 4 == 0) { ?>
						<div class="clear"></div>
					</div>
					<?php } ?>
				<?php endwhile; ?>
				<div class="clear"></div>
			</div>
		</section>
		<div class="home-project-control">
			<p class="project-control-left"></p>
			<p class="project-control-right"></p>
			<div class="clear"></div>
		</div>
		<?php } ?>

		<div class="home-bottom-info">
			<h1><?php echo $homepageoptions['hp-content-title']; ?></h1>
			<p><?php echo $homepageoptions['hp-content']; ?></p>
			<?php $serviceoptions = get_option('service_theme_options'); ?>						
			<ul>
				<li>
					<a href="<?php echo $serviceoptions['brandinglink']; ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/branding-icon.png">
						Branding
					</a>
				</li>
				<li>
					<a href="<?php echo $serviceoptions['marketinglink']; ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/marketing-icon.png">
						Marketing
					</a>
				</li>
				<li>
					<a href="<?php echo $serviceoptions['bdlink']; ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/bd-icon.png">
						Business Development
					</a>
				</li>
				<li>
					<a href="<?php echo $serviceoptions['webdevlink']; ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/technology-icon.png">
						Web Development
					</a>
				</li>
				<li>
					<a href="<?php echo $serviceoptions['randplink']; ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/randp-red.png">
						Research and Planning
					</a>
				</li>
			</ul>
		</div>
	</div>			
	<div class="bms-talk home-sidebar">
		<?php get_template_part('page','sidebar'); ?>			
	</div>
	<div class="clear"></div>
</div>
<?php get_footer(); ?> 
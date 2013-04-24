<?php $slideroptions = get_option('slider_theme_options'); ?>
<?php $homepageoptions = get_option('sample_theme_options'); ?>
<?php get_header(); ?>
<div id="slideFrame">
	<div class="slider-overlay-left"></div>
	<div class="slider-overlay-right"></div>
	<ul class="bjqs">
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg"><h1><em>Gorgeous</em> Apartment Homes</h1><p><a href="#">SEE <em>more</em></a></p></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg"><h1>The <em>Winners Circle</em></h1><p><a href="#">SEE <em>more</em></a></p></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg"><h1><em>Saratoga</em> Apartments</h1><p><a href="#">SEE <em>more</em></a></p></li>
	</ul>

</div>
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
		<?php
			$querty = new WP_Query();
			$querty->query('showposts=1&post_type=houses');
			while ($querty->have_posts()) : $querty->the_post();
			?>
			<?php 
			if (get_post_meta( get_the_ID(), 'bedrooms', true ) == 'value1') { ?>
			<div class="two-bedroom-img1"><?php autoc_get_img('lnkimage1'); ?></div>
			<div class="two-bedroom-img2"><?php autoc_get_img('lnkimage2'); ?></div>
			<?php } endwhile; ?>
		<ul>
			<?php
			$onebed = new WP_Query();
			$onebed->query('showposts=6&post_type=houses');
			while ($onebed->have_posts()) : $onebed->the_post();
			?>
			<?php 
			if (get_post_meta( get_the_ID(), 'bedrooms', true ) == 'value1') { ?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
				<div class="two-bedroom-img1">
					<?php autoc_get_img('lnkimage1'); ?>
				</div>
				<div class="two-bedroom-img2">
					<?php autoc_get_img('lnkimage2'); ?>
				</div>
			</li>
			<?php } ?>
		<?php endwhile; ?>    
	</ul>
	<div class="clear"></div>
</div>
<div class="two-bedroom home-option-content">
	<?php
			$querty = new WP_Query();
			$querty->query('showposts=1&post_type=houses');
			while ($querty->have_posts()) : $querty->the_post();
			?>
			<?php 
			if (get_post_meta( get_the_ID(), 'bedrooms', true ) == 'value2') { ?>
			<div class="two-bedroom-img1"><?php autoc_get_img('lnkimage1'); ?></div>
			<div class="two-bedroom-img2"><?php autoc_get_img('lnkimage2'); ?></div>
			<?php } endwhile; ?>
	<ul>
		<?php
		$onebed = new WP_Query();
		$onebed->query('showposts=6&post_type=houses');
		while ($onebed->have_posts()) : $onebed->the_post();
		?>
		<?php 
		if (get_post_meta( get_the_ID(), 'bedrooms', true ) == 'value2') { ?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
			<div class="two-bedroom-img1">
				<?php autoc_get_img('lnkimage1'); ?>
			</div>
			<div class="two-bedroom-img2">
				<?php autoc_get_img('lnkimage2'); ?>
			</div>
		</li>
		<?php } ?>
	<?php endwhile; ?>    
</ul>
<div class="clear"></div>
</div>
<div class="three-bedroom home-option-content">
		<?php
			$querty = new WP_Query();
			$querty->query('showposts=1&post_type=houses');
			while ($querty->have_posts()) : $querty->the_post();
			?>
			<?php 
			if (get_post_meta( get_the_ID(), 'bedrooms', true ) == 'value3') { ?>
			<div class="two-bedroom-img1"><?php autoc_get_img('lnkimage1'); ?></div>
			<div class="two-bedroom-img2"><?php autoc_get_img('lnkimage2'); ?></div>
			<?php } endwhile; ?>
	<ul>
		<?php
		$onebed = new WP_Query();
		$onebed->query('showposts=6&post_type=houses');
		while ($onebed->have_posts()) : $onebed->the_post();
		?>
		<?php 
		if (get_post_meta( get_the_ID(), 'bedrooms', true ) == 'value3') { ?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
			<div class="two-bedroom-img1">
				<?php autoc_get_img('lnkimage1'); ?>
			</div>
			<div class="two-bedroom-img2">
				<?php autoc_get_img('lnkimage2'); ?>
			</div>
		</li>
		<?php } ?>
	<?php endwhile; ?>    
</ul>
</div>
<div class="four-bedroom home-option-content">
	<?php
			$querty = new WP_Query();
			$querty->query('showposts=1&post_type=houses');
			while ($querty->have_posts()) : $querty->the_post();
			?>
			<?php 
		if (get_post_meta( get_the_ID(), 'floors', true ) == '1') { ?>
			<div class="two-bedroom-img1"><?php autoc_get_img('lnkimage1'); ?></div>
			<div class="two-bedroom-img2"><?php autoc_get_img('lnkimage2'); ?></div>
			<?php } endwhile;?>
	<ul>
		<?php
		$onebed = new WP_Query();
		$onebed->query('showposts=6&post_type=houses');
		while ($onebed->have_posts()) : $onebed->the_post();
		?>
		<?php 
		if (get_post_meta( get_the_ID(), 'floors', true ) == '1') { ?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
			<div class="two-bedroom-img1">
								<?php autoc_get_img('lnkimage1'); ?>
			</div>
			<div class="two-bedroom-img2">
				<?php autoc_get_img('lnkimage2'); ?>
			</div>
		</li>
		<?php } ?>
	<?php endwhile; ?>    
</ul>
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
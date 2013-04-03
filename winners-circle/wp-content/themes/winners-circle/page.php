<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="slide"><?php

	global $wpdb;
	$images = get_post_meta( get_the_ID(), 'mainimage', false );
	$images = implode( ',' , $images );

// Re-arrange images with 'menu_order'
	$images = $wpdb->get_col( "
		SELECT ID FROM {$wpdb->posts}
		WHERE post_type = 'attachment'
		AND ID in ({$images})
		ORDER BY menu_order ASC
		" );

	foreach ( $images as $att )
	{
    // Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
		$src = wp_get_attachment_image_src( $att, 'full' );
		$src = $src[0];
    // Show image
		echo "<img src='{$src}' />";
	}
	?></div>
	<div class="sub-content">
		<div class="sub-page-data">
			<div class="sub-left">
				<section>
					<div class="sub-left-text">
						<img src="<?php echo get_template_directory_uri(); ?>/images/house-icon-small.png">
						<h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>
					</div>
					<div class="sub-left-features">
						<h2>Blog <span>Feed</span></h2>
<?php
						$blogquery = new WP_Query();
						$blogquery->query('showposts=6');
						while ($blogquery->have_posts()) : $blogquery->the_post();
						?>
						<li>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
						<?php the_excerpt(); ?>
						</li>
<?php endwhile; ?>
						</div>
				</section>
				
			</div>				
			<div class="sub-right">
				<a href="#" id="one-month"><img src="<?php echo get_template_directory_uri(); ?>/images/one-month-free.png"></a>
				<div class="sub-page-list">
					<ul>
						<li>One <span>Bedroom</span><img src="<?php echo get_template_directory_uri(); ?>/images/house1-small.png"></li>
						<?php
						$onebed = new WP_Query();
						$onebed->query('showposts=6&post_type=houses');
						while ($onebed->have_posts()) : $onebed->the_post();
						?>
						<?php 
						if (get_post_meta( get_the_ID(), 'bedrooms', true ) == 'value1') { ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
						<?php } ?>
					<?php endwhile; ?>    
				</ul>
				<div class="list-shadow"></div>
				<ul>
					<li>Two <span>Bedroom</span><img src="<?php echo get_template_directory_uri(); ?>/images/house2-small.png"></li>
					<?php
						$twobed = new WP_Query();
						$twobed->query('showposts=6&post_type=houses');
						while ($twobed->have_posts()) : $twobed->the_post();
						?>
						<?php 
						if (get_post_meta( get_the_ID(), 'bedrooms', true ) == 'value2') { ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
						<?php } ?>
					<?php endwhile; ?>
				</ul>
				<div class="list-shadow"></div>
				<ul>
					<li>Three <span>Bedroom</span><img src="<?php echo get_template_directory_uri(); ?>/images/house3-small.png"></li>
					<?php
						$threebed = new WP_Query();
						$threebed->query('showposts=6&post_type=houses');
						while ($threebed->have_posts()) : $threebed->the_post();
						?>
						<?php 
						if (get_post_meta( get_the_ID(), 'bedrooms', true ) == 'value3') { ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
						<?php } ?>
					<?php endwhile; ?>
				</ul>
				<div class="list-shadow"></div>
				<ul>
					<li>1 & 2 <span>Floor</span><img src="<?php echo get_template_directory_uri(); ?>/images/house4-small.png"></li>
					<?php
						$multifloor = new WP_Query();
						$multifloor->query('showposts=6&post_type=houses');
						while ($multifloor->have_posts()) : $multifloor->the_post();
						?>
						<?php 
						if (get_post_meta( get_the_ID(), 'floors', true ) == '1') { ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
						<?php } ?>
					<?php endwhile; ?>
				</ul>	
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>			
</div><!-- END Canvas -->
<div class="clear"></div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
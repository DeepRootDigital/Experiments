<?php get_header(); ?>
<div id="slideFrame"><img src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg"></div>
<div class="sub-content">
	<div class="sub-page-data">
		<div class="sub-left">						
			<div class="sub-left-text">
				<img src="<?php echo get_template_directory_uri(); ?>/images/blog-quote.png">	
				<h2>Blog</h2>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>							
				<article>
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}  ?>							
					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
				</article>
				<div class="blog-share">
					<img src="<?php echo get_template_directory_uri(); ?>/images/share-icon.png">
					<p>Share</p>
					<img src="<?php echo get_template_directory_uri(); ?>/images/comment-icon.png">
					<p>Leave a comment</p>
					<div class="clear"></div>
				</div>
				<?php comments_template(); ?>
			<?php endwhile; endif; ?>									
		</div>
		<div class="sub-left-features">
			<h2>Previous <span>Blogs</span></h2>
			<?php
			$onebed = new WP_Query();
			$onebed->query('showposts=6&post_type=post');
			while ($onebed->have_posts()) : $onebed->the_post();
			?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?><?php the_excerpt(); ?></a></li>
		<?php endwhile; ?>
	</div>						
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
<?php get_footer(); ?>
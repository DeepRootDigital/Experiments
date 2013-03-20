<?php /* Template Name: FAQ Page */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg"></div>
			<div class="sub-content">
				<div class="sub-page-data">
					<div class="sub-left">
						<img class="float-left" src="<?php echo get_template_directory_uri(); ?>/images/blog-quote.png">
						<h2>FAQ</h2>
						<div class="faq-page">
							<?php
							$onebed = new WP_Query();
							$onebed->query('showposts=6&post_type=FAQ');
							while ($onebed->have_posts()) : $onebed->the_post();
							?>
							<section class="faq">
								<h3><?php the_title(); ?></h3>
								<img class="faq-open" src="<?php echo get_template_directory_uri(); ?>/images/faq-open.png">
								<img class="faq-close" src="<?php echo get_template_directory_uri(); ?>/images/faq-close.png">
								<p><?php the_content(); ?></p>
							</section>
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
<?php endwhile; endif; ?>
<?php get_footer(); ?>
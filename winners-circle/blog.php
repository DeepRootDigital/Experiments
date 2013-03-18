<?php /* Template Name: Blog Summary Page */ ?>
<?php get_header(); ?>
			<div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg"></div>
			<div class="sub-content">
				<div class="sub-page-data">
					<div class="sub-left">
						<img class="float-left" src="<?php echo get_template_directory_uri(); ?>/images/blog-quote.png">
						<h2>Blog</h2>
						<?php $wp_query->query('showposts=16&orderby=title&order=asc' . '&paged=' . $paged);
					        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
							<section class="blog-summary">
								<div class="blog-summary-img">
									<?php if ( has_post_thumbnail() ) {
									 the_post_thumbnail();
									} else { echo '<img src="'.get_template_directory_uri().'/images/blog-img-small.jpg">';} ?>
								</div>
								<div class="blog-summary-text">
									<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
									<p><?php the_excerpt(); ?></p>
									<p>By: <?php the_author(); ?></p>
									<span><?php $date = get_the_date(); echo $date; ?></span>
								</div>
								<div class="clear"></div>
								<div class="blog-summary-count">
									<p><?php comments_number( '0', '1', '%' ); ?><a href="#"><span>Comments</span></a></p>								
								</div>
							</section>
						<?php endwhile; ?>							
					</div>				
					<div class="sub-right">
						<a href="#" id="one-month"><img src="<?php echo get_template_directory_uri(); ?>/images/one-month-free.png"></a>
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
<?php get_footer(); ?>
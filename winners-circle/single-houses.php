<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg"></div>
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
								<h2>Key <span>Features</span></h2>
								<li><a href="#"><?php echo get_post_meta( get_the_ID(), 'feature1', true ); ?></a></li>
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
<?php endwhile; endif; ?>
<?php get_footer(); ?>
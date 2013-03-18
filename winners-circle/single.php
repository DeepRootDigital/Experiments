<?php get_header(); ?>
			<div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg"></div>
			<div class="sub-content">
				<div class="sub-page-data">
					<div class="sub-left">						
						<div class="sub-left-text">
							<img src="<?php echo get_template_directory_uri(); ?>/images/blog-quote.png">	
							<h2>Blog</h2>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>							
							<article>
								<img src="<?php echo get_template_directory_uri(); ?>/images/blog-img.jpg">								
								<h1><?php the_title(); ?></h1>
								<p><?php the_excerpt(); ?></p>
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
							<li><a href="#">Lorem ipsum dolor sit amet, essent postulant ea ius.</a></li>
							<li><a href="#">Dicunt neglegentur ei usu, magna numquam at mel.</a></li>
							<li><a href="#">Unum deterruisset et vel, no omnesque vituperatoribus has,</a></li>
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
<?php get_footer(); ?>
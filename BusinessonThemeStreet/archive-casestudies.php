 <?php get_header(); ?>
 <div class="canvas">
 	<section class="case-nav">
 		<div class="center">
 			
 			<nav class="case-number">
 				<img src="<?php echo get_template_directory_uri(); ?>/images/case-top.png">
 				<ul>
 					<li><p>Case<em>No.</em></p><h2 class="case-select case-select-1" href="#">1</h2></li>
 					<li><p>Case<em>No.</em></p><h2 class="case-select case-select-2" href="#">2</h2></li>
 					<li><p>Case<em>No.</em></p><h2 class="case-select case-select-3" href="#">3</h2></li>
 					<li><p>Case<em>No.</em></p><h2 class="case-select case-select-4" href="#">4</h2></li>
 					<li><p>Case<em>No.</em></p><h2 class="case-select case-select-5" href="#">5</h2></li>
 					<li><p>Case<em>No.</em></p><h2 class="case-select case-select-6" href="#">6</h2></li>
 					<li><p>Case<em>No.</em></p><h2 class="case-select case-select-7" href="#">7</h2></li>
 					<li><p>Case<em>No.</em></p><h2 class="case-select case-select-8" href="#">8</h2></li>
 					<li><p>Case<em>No.</em></p><h2 class="case-select case-select-9" href="#">9</h2></li>
 					<li><p>Case<em>No.</em></p><h2 class="case-select case-select-10" href="#">10</h2></li>
 					<div class="clear"></div>
 				</ul>					
 			</nav>
 		</div>
 	</section>
 	<section class="case-container">
 		<div class="case-wrapper">
 			<?php
 			$featuredPosts = new WP_Query();
 			$featuredPosts->query(array('post_type' => 'Casestudies', 'posts_per_page' => 1));
 			while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
 			?>
 			<article class="case-content">
 				<h1><em>Client</em> Case Studies <span>//</span> <?php the_title(); ?></h1>
 				<?php if ( has_post_thumbnail() ) { ?>
 				<div class="case-slider">
 					<?php the_post_thumbnail(); ?> 	
 				</div>
 				<?php } ?>
 				<div class="testimonial-slide-control">
 					<ul>
 						<?php if(get_post_meta(get_the_ID(), 'brandingbox', true) == true) { ?>
 						<li><img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/branding-icon.png"></li>
 						<?php } ?>
 						<?php if(get_post_meta(get_the_ID(), 'marketingbox', true) == true) { ?>
 						<li><img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/marketing-icon.png"></li>
 						<?php } ?>
 						<?php if(get_post_meta(get_the_ID(), 'developmentbox', true) == true) { ?>
 						<li><img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/bd-icon.png"></li>
 						<?php } ?>
 						<?php if(get_post_meta(get_the_ID(), 'technologybox', true) == true) { ?>
 						<li><img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/technology-icon.png"></li>
 						<?php } ?>
 					</ul>
 				</div>
 				<div class="case-info">
 					<div class = "case-info-nav">
 						<h2>Case<em>No.</em></h2>
 						<img class="case-info-nav-left" src="<?php echo get_template_directory_uri(); ?>/images/arrow-left.png">
 						<h3 style="letter-spacing:-20px; font-size:135px;">10</h3>
 						<img class="case-info-nav-right" src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.png">
 					</div>
 					<h1>"They made our business a reality. Simply the best creative force out there at the moment"</h1>
 					<div class="clear"></div>
 					<div class="case-text">
 						<div>
 							<h1>BMS Analysis:</h1>
 							<?php the_content(); ?>
 						</div>
 						<div id="reset">
 							<h1>Client Testimonial:</h1>
 							<?php echo get_post_meta(get_the_ID(), 'clienttestimonial', true) ?>
 						</div>

 					</div>
 					<div class="clear"></div>
 				</div>
 			</article>
 		<?php endwhile; ?>
 		<?php $counter = 1; ?>
 		<?php
 		$featuredPosts = new WP_Query();
 		$featuredPosts->query(array('post_type' => 'Casestudies', 'posts_per_page' => 10));
 		while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
 		?>
 		<article class="case-content">
 			<h1><em>Client</em> Case Studies <span>//</span> <?php the_title(); ?></h1>
 			<?php if ( has_post_thumbnail() ) { ?>
 			<div class="case-slider">
 				<?php the_post_thumbnail(); ?> 					
 			</div>
 			<?php } ?>
 			<div class="testimonial-slide-control">
 				<ul>
 					<?php if(get_post_meta(get_the_ID(), 'brandingbox', true) == true) { ?>
 					<li><img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/branding-icon.png"></li>
 					<?php } ?>
 					<?php if(get_post_meta(get_the_ID(), 'marketingbox', true) == true) { ?>
 					<li><img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/marketing-icon.png"></li>
 					<?php } ?>
 					<?php if(get_post_meta(get_the_ID(), 'developmentbox', true) == true) { ?>
 					<li><img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/bd-icon.png"></li>
 					<?php } ?>
 					<?php if(get_post_meta(get_the_ID(), 'technologybox', true) == true) { ?>
 					<li><img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/technology-icon.png"></li>
 					<?php } ?>
 				</ul>
 			</div>
 			<div class="case-info">
 				<div class = "case-info-nav">
 					<h2>Case<em>No.</em></h2>
 					<img class="case-info-nav-left" src="<?php echo get_template_directory_uri(); ?>/images/arrow-left.png">
 					<h3 <?php if ($counter == 10) { echo 'style="letter-spacing:-20px; font-size:135px;"'; } ?>><?php echo $counter; $counter++; ?></h3>
 					<img class="case-info-nav-right" src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.png">
 				</div>
 				<h1>"<?php echo get_post_meta(get_the_ID(), 'resultquote', true) ?>"</h1>
 				<div class="clear"></div>
 				<div class="case-text">
 					<div>
 						<h1>BMS Analysis:</h1>
 						<?php the_content(); ?>
 					</div>
 					<div id="reset">
 						<h1>Client Testimonial:</h1>
 						<?php echo get_post_meta(get_the_ID(), 'clienttestimonial', true) ?>
 					</div>

 				</div>
 				<div class="clear"></div>
 			</div>
 		</article>
 	<?php endwhile; ?>
 	<div class="clear"></div>
 </div> <!-- END CASE WRAPPER -->
</section>
</div>
<?php get_footer(); ?>
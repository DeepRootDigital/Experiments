<?php /* Template Name: Blog Summary Page */ ?>
<?php include 'header.php'; ?> 
<section class="blog">			
	<div class="blog-slider">
		<img src="<?php echo get_template_directory_uri(); ?>/images/blog-slide.jpg">
	</div>
	<div class="blog-slide-flag">
		<h1>"We are dedicated to achieving the best design for your business idea"</h1>
	</div>
	<div class="center">
		<div class="blog-left">
			<?php $wp_query->query('showposts=16&orderby=title&order=asc' . '&paged=' . $paged);
			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<article class="blog-summary">
				<div class="blog-date">
					<img src="<?php echo get_template_directory_uri(); ?>/images/blog-blue-flag.png">
					<p><?php the_time('F j, Y'); ?></p>
				</div>

				<div class="blog-image-preview">
					<img src="<?php echo get_template_directory_uri(); ?>/images/blog-small1.png">
				</div>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<h2><?php the_time('F j, Y'); ?> - Posted by <?php the_author(); ?></h2>
				<p><?php the_excerpt(); ?></p>
				<div class="blog-summary-social">
					<ul>
						<li class="blog-summary-fb"><a href="#">20</a></li>
						<li class="blog-summary-tweet"><a href="#">20</a></li>
						<li class="blog-summary-pinterest"><a href="#">20</a></li>
					</ul>
				</div>
				<div class="clear"></div>
				<h3 class="blog-summary-tags">
					<?php
					echo get_the_tag_list('Tags: ',', ','');
					?>
				</h3>
			</article>
		<?php endwhile; ?>
	</div>
	<div class="blog-sidebar blog-right">
		<ul>
			<li>
				<ul class="blog-right-social">
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-right-fb.png"></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-right-pin.png"></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-right-twitter.png"></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-right-youtube.png"></a></li>
				</ul>
				<div class="clear"></div>
			</li>
			<li><a href="#"><p>improving your proposals mobile experience</p></a></li>
			<li><a href="#"><p>OTHER TITLE OR ARTICLE HEADLINE CAN GO HERE</p></a></li>
			<li><a href="#"><p>OTHER TITLE OR ARTICLE HEADLINE CAN GO HERE</p></a></li>
			<li><h1>Read our clients<br><em>case studies</em></h1></li>
			<li>
				<div class="blog-service-nav">
					<?php include 'service-sidebar.php'; ?> 
				</div>
			</li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
</section>
<?php include 'footer.php'; ?> 
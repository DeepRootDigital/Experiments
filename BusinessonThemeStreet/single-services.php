<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
		<div class="service-page">
			<div class="service-page-header">
				<div class="center">
					<h1><em>BMS</em> Services <span>//</span></h1>
				</div>
			</div>
			<div class="center">
				<div class="service-page-sidebar">
					<?php include 'service-sidebar.php'; ?> 
				</div>
				<div class="service-page-content">
					<h1><?php the_title(); ?></h1>
					<h2><?php the_excerpt(); ?></h2>
					<?php the_content(); ?>
				</div>
				<div class="service-page-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/images/article-pic.png">
					<div class="service-page-control">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-left.png"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.png"></a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
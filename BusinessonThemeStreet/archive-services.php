<?php /* Template Name: Services Archive */ ?>
<?php get_header(); ?>
<div class="service-archive-page">
<div class="fullwidth-shadow">
	<div class="service-archive-header">
		<h1>BMS <span>Services</span> <span>//</span> <span>See Client Case Studies</span></h1>
	</div>
</div>

<div class="center">
<div class="service-page-contentarea">
<div class="service-page-sidebar">
	<?php include 'service-sidebar.php'; ?> 
</div>

<div class="service-viewport-archive">
	<div class="service-content-box-archive">

		<?php 
		$args=array(
			'post_type' => 'services'
			);

		$blogPosts = new WP_Query($args);

		while ($blogPosts->have_posts()) : $blogPosts->the_post();
		?>

		<div class="individual-page-archive <?php the_title(); ?>">
			<div class="service-page-content">
				<h1><?php the_title(); ?></h1>
				<h2><?php echo get_post_meta(get_the_ID(), 'empparagraph', true) ?></h2>
				<?php the_excerpt(); ?>
			</div>
			<div class="service-page-slide">
				<div class="service-page-slide-wrapper <?php the_title(); ?>">
					<?php autoc_get_img('serviceimages'); ?>
				</div>
				<div class="service-page-control">
					<img class="service-page-control-left" src="<?php echo get_template_directory_uri(); ?>/images/arrow-left.png">
					<img class="service-page-control-right" src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.png">
				</div>
			</div>
		</div>

	<?php endwhile; ?>
	</div>
</div>
</div>
</div>

</div>
<?php get_footer(); ?>
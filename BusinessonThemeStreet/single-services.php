<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

		<div class="service-viewport">
			<div class="service-content-box  <?php the_title(); ?>">

<?php endwhile; endif; ?>

				<?php 
				$args=array(
					'post_type' => 'Services'
					);

				$blogPosts = new WP_Query($args);

				while ($blogPosts->have_posts()) : $blogPosts->the_post();
				?>

				<div class="individual-page">
					<div class="service-page-content">
						<h1><?php the_title(); ?></h1>
						<h2><?php echo get_post_meta(get_the_ID(), 'empparagraph', true) ?></h2>
						<?php the_content(); ?>
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
<?php get_footer(); ?>
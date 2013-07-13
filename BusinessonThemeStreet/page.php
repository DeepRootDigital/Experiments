<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<?php get_header(); ?>
	<div class="center">
			<!-- <div class="home-slider">
				<h1>SLIDER</h1>
			</div> -->
			<div class="about-content bottom-page-space">
				<h1><?php the_title(); ?></h1>
				<h2><?php echo get_post_meta(get_the_ID(), 'empparagraph', true) ?></h2>
				<?php the_content(); ?>
			</div>
			<?php endwhile; endif; ?>			
			<?php get_template_part('page','sidebar'); ?>
			<div class="clear"></div>
		</div>
	<?php get_footer(); ?>
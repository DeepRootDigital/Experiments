<?php get_header(); ?>
<section class="sub-page-top-image">
	<img src="<?php echo get_template_directory_uri(); ?>/images/sub-page-top-image.png" />
</section>
<?php get_template_part('blogfeed','sidemenu'); ?>
<section class="sub-page-content">
	<div class="about-info">
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<img class="side-bottom" src="<?php echo get_template_directory_uri(); ?>/images/bottom-body-dotted-line.png" />
		<div class="sub-page-about-text">
			<?php the_content(); ?>
		</div>
	</div>
<?php endwhile; endif; ?>
	<div id="subpage-sidebar">
		<?php get_template_part('sidebar','blogfeed'); ?>
	</div>
</section>
<?php get_footer(); ?>
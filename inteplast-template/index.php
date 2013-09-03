<?php
	get_header();
?>

<?php $options = get_option('sample_theme_options'); ?>

<?php echo $options['sliderimg1']

<?php 

		$blogPosts = new WP_Query();
		$blogPosts->query('showposts=-1');
 			 while ($blogPosts->have_posts()) : $blogPosts->the_post();
  		?>

  		<div class="row">
	<div class="main">
		<img src="<?php
		echo get_template_directory_uri();
		?>
		/images/mainpic.png" />
		<h1><?php the_title(); ?></h1>
		<img src="<?php
			echo get_template_directory_uri();
			?>
			/images/maindivider.png" />

			<?php the_content(); ?>

			</div>
  		<?php endwhile; ?>
	
	<?php
		get_sidebar();
	?>

</div>

<?php
	get_footer();
?>
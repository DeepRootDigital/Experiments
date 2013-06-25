<?php
/*
Template Name: Employees
*/

get_header();
?>

<div class="row">
	<div class="main">
		<h2>Employee Directory</h2>
		<img src="<?php
			echo get_template_directory_uri();
			?>
			/images/maindivider.png" />

		<?php 
		$args=array(
			'post_type' => 'inteplast_employees');

		$blogPosts = new WP_Query($args);

 			 while ($blogPosts->have_posts()) : $blogPosts->the_post();
  		?>

  		<div class="profile">
			<div class="profpic">
				<?php the_post_thumbnail(); ?> 
			</div>

			<?php the_content(); ?>
		</div>

  		<?php endwhile; ?>

	</div>
	<?php
		get_sidebar();
	?>

</div>

<?php 
	get_footer();
?>
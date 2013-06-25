<?php
/*
Template Name: Documents
*/

	get_header();
?>


<div class="row">
	<div class="maindoc">
		<h2>Document Downloads / HR</h2>
		<img src="<?php
			echo get_template_directory_uri();
			?>
			/images/longdivider.png" />
		<ul class="sorting">
			<li>Accounting</li>
			<li>Corporate Internal</li>
			<li>&nbsp;Credit</li>
			<li>Divisional</li>
			<li>&nbsp;HR</li>
			<li>Marketing</li>
			<li>Material &amp; Purchasing</li>
			<li>Operations</li>
			<li>TQM</li>
		</ul>

		<div class="docinfo">

				<?php 
		$args=array(
			'post_type' => 'inteplast_documents');

		$blogPosts = new WP_Query($args);

 			 while ($blogPosts->have_posts()) : $blogPosts->the_post();
  		?>
			<?php the_post_thumbnail(); ?> 
			<?php the_content(); ?>

  		<?php endwhile; ?>
		</div>
	</div>
</div>


<?php
	get_footer();
?>
<?php $mainoptions = get_option('main_theme_options'); ?>
<div class="blog-sidebar blog-right">
	<ul>
		<?php query_posts('posts_per_page=3&order=DESC'); ?>
		<?php while (have_posts()) : the_post(); ?>
		<li><a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a></li>
	<?php endwhile; ?>
	<!-- <li><h1>Read our clients<br><em>case studies</em></h1></li> -->
</ul>
<div class="blog-service-nav">
	<?php include 'service-sidebar.php'; ?> 
</div>
</div>
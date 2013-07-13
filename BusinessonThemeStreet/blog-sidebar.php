<?php $mainoptions = get_option('main_theme_options'); ?>
<div class="blog-sidebar blog-right">
	<ul>
		<li>
			<ul class="blog-right-social">
				<li><a href="<?php echo $mainoptions['facebookurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-right-fb.png"></a></li>
				<li><a href="<?php echo $mainoptions['pinteresturl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-right-pin.png"></a></li>
				<li><a href="<?php echo $mainoptions['twitterurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-right-twitter.png"></a></li>
				<li><a href="<?php echo $mainoptions['youtubeurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-right-youtube.png"></a></li>
			</ul>
			<div class="clear"></div>
		</li>
		<?php query_posts('posts_per_page=3'); ?>
		<?php while (have_posts()) : the_post(); ?>
		<li><a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a></li>
	<?php endwhile; ?>
	<li><h1>Read our clients<br><em>case studies</em></h1></li>
</ul>
<div class="blog-service-nav">
	<?php include 'service-sidebar.php'; ?> 
</div>
</div>
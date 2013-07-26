<div class="single-blog-right blog-sidebar">
	<ul>
		<li><h1><em>Recent</em>Posts</h1></li>
		<?php query_posts('posts_per_page=3&order=DESC'); ?>
		<?php while (have_posts()) : the_post(); ?>
		<li><a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a></li>
	<?php endwhile; ?>
	<!-- <li><h1>Sign up to<br><em>BMS</em>talk</h1><br>
		<form>
			<input id="blog-sidebar-email-input" type="text" name="email" placeholder="Please Enter your email" value="">
			<input id="blog-sidebar-email-submit" type="submit">
		</form>
	</li> -->
	<li>
		<h1><em>our</em> services</h1>
		<div class="blog-service-nav">
			<?php include 'service-sidebar.php'; ?> 
		</div>
	</li>
	<!-- <li><h1>Read our clients<br><em>case studies</em></h1></li> -->
</ul>
</div>
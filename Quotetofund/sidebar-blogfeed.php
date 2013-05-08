<aside>
	<h1>blog <span>feed</span></h1>
	<div class="qtf-blog-feed">
		<ul>
			<?php $blogPosts = new WP_Query();
			$blogPosts->query('showposts=4');
			while ($blogPosts->have_posts()) : $blogPosts->the_post();
			?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<?php 
					if ( has_post_thumbnail() ) { 
						the_post_thumbnail();
					} 
					?>
				</a>
				<p>
					<a class="blog-text-hover" href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</p>
			</li>
		<?php endwhile; ?>
	</ul>
</div>
</aside>
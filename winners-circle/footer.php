		<footer>
			<?php $mainoptions = get_option('main_theme_options'); ?>
			<div class="center">
				<div class="widgets-container">
					<div class="footer-widget">
						<h2>Looking to <em>buy?</em></h2>
						<img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png">
					</div>
					<div class="footer-widget blog-widget">
						<h2>WC <em>Blog</em></h2>
						<ul>
							<?php
							$onebed = new WP_Query();
							$onebed->query('showposts=6&post_type=post');
							while ($onebed->have_posts()) : $onebed->the_post();
							?>
							<li><a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a></li>
						<?php endwhile; ?>
					</ul>
				</div>
				<div class="footer-widget social-media-widget">
					<h2>Social <em>Media</em></h2>
					<ul>
						<li><a href="<?php echo $mainoptions['twitterurl']?>">L</a></li>
						<li><a href="<?php echo $mainoptions['facebookurl']?>">F</a></li>
						<li><a href="<?php echo $mainoptions['pinteresturl']?>">&</a></li>
						<li><a href="<?php echo $mainoptions['youtubeurl']?>">X</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</footer>
	<div class="footer-lower">
		<div class="center"> 
			<p><?php echo $mainoptions['copyrighttxt'] ?></p>
			<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-lower-logo.png"></a>
		</div>
	</div>
</div><!-- END Page Wrap -->
</body>
</html>
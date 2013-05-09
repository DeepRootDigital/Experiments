<div class="bms-talk home-sidebar">
				<h1><em>BMS</em> Talk</h1>
				<ul>
				<?php query_posts('posts_per_page=6'); ?>
  				<?php while (have_posts()) : the_post(); ?>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/bms-logo-small.png"><p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span>>></span></p></li>
				<?php endwhile; ?>
				</ul>
				<div class="home-sidebar-contact">
					<h1><em>Intrigued</em>?</h1>
					<form method="POST" action="<?php email_form(); ?>">
						<input type="text" value="name" name="firstname">
						<input type="text" value="last" name="lastname">
						<input type="text" value="email" name="email">
						<input type="phone" value="phone" name="phone">
						<input id="home-sidebar-contact-submit" type="submit" value="submit">
					</form>
				</div>				
			</div>
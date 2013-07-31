<?php /* Template Name: News Archive */ ?>
<?php get_header(); ?>
	<div id="wrapper">
		<div class="row">
			<div class="news-header">
				<div class="news-header-header column">
					<h1>BMS Client Buzz //</h1>
				</div>
				<div class="news-header-price column">
					<p><span>May</span><br />
						17, 2013<br />
						<span>10</span><br />
						cents</p>
					</div>
				</div>
			</div>
			<div class="row">
				<?php 
					$args=array(
						'post_type' => 'news',
						);

					$blogPosts = new WP_Query($args);
					while ($blogPosts->have_posts()) : $blogPosts->the_post(); ?>
					<?php if (get_post_meta(get_the_ID(),'position',true)==='topheadline'){ ?>
						<div class="main-headline">
							<p><?php the_title(); ?></p>
						</div>
					<?php } ?>
				<?php endwhile; ?>
			</div>
			<div class="row news-area">
				<div class="left-news-column column">
				<?php 
					$args=array(
						'post_type' => 'news',
						);

					$blogPosts = new WP_Query($args);
					while ($blogPosts->have_posts()) : $blogPosts->the_post(); ?>
					<?php if (get_post_meta(get_the_ID(),'position',true)==='lefttop'){ ?>
				
					<div class="left-news-article">
						<div class="left-news-column-heading">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="left-news-column-content">
							<img src="<?php echo get_template_directory_uri(); ?>/images/news-image-texture-tall.png" />
							<p><?php the_content(); ?></p>
						</div>
					</div>
				<?php } ?>
				<?php endwhile; ?>
				<?php 
					$args=array(
						'post_type' => 'news',
						);

					$blogPosts = new WP_Query($args);
					while ($blogPosts->have_posts()) : $blogPosts->the_post(); ?>
					<?php if (get_post_meta(get_the_ID(),'position',true)==='leftmiddle'){ ?>
					<div class="left-news-article">
						<div class="left-news-column-heading">
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="left-news-column-content-middle">
							<img src="<?php echo get_template_directory_uri(); ?>/images/news-image-texture-wide.png" />
							<p><?php the_content(); ?></p>
						</div>
					</div>
					<?php } ?>
				<?php endwhile; ?>
				<?php 
					$args=array(
						'post_type' => 'news',
						);

					$blogPosts = new WP_Query($args);
					while ($blogPosts->have_posts()) : $blogPosts->the_post(); ?>
					<?php if (get_post_meta(get_the_ID(),'position',true)==='leftbottom'){ ?>
					<div class="left-news-article">
						<div class="left-news-column-heading">
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="left-news-column-content-bottom">
							<img src="<?php echo get_template_directory_uri(); ?>/images/news-image-texture-tall.png" />
							<p><?php the_content(); ?></p>
						</div>
					</div>
						<?php } ?>
					<?php endwhile; ?>
				</div>
				<div class="right-news-column column">
					<?php 
					$args=array(
						'post_type' => 'news',
						);

						$blogPosts = new WP_Query($args);
						while ($blogPosts->have_posts()) : $blogPosts->the_post(); ?>
						<?php if (get_post_meta(get_the_ID(),'position',true)==='featuredquote'){ ?>
						<div class="right-news-headliner">
							<img src="<?php echo get_template_directory_uri(); ?>/images/news-image-texture-big.png" />
						</div>
						<div class="right-news-quote">
							<h1>&ldquo;<br />
							<?php echo get_post_meta(get_the_ID(),'quotation',true); ?><br /> 
							&rdquo;</h1>
							<p><?php the_content(); ?></p>
						</div>
						<?php } ?>
					<?php endwhile; ?>
				<?php 
					$args=array(
						'post_type' => 'news',
						);

						$blogPosts = new WP_Query($args);
						while ($blogPosts->have_posts()) : $blogPosts->the_post(); ?>
						<?php if (get_post_meta(get_the_ID(),'position',true)==='rightleft'){ ?>
						<div class="right-news-article-left">
							<div class="right-news-article-title">
								<h1><?php the_title(); ?></h1>
							</div>
							<div class="right-news-article-content">
								<img src="<?php echo get_template_directory_uri(); ?>/images/news-image-texture.png" />
								<p><?php the_content(); ?></p>
							</div>
						</div>
						<?php } ?>
					<?php endwhile; ?>
				<?php 
					$args=array(
						'post_type' => 'news',
						);

						$blogPosts = new WP_Query($args);
						while ($blogPosts->have_posts()) : $blogPosts->the_post(); ?>
						<?php if (get_post_meta(get_the_ID(),'position',true)==='rightright'){ ?>
						<div class="right-news-article-right">			
							<div class="right-news-article-right-title">
								<h1><?php the_title(); ?></h1>
							</div>
							<div class="right-news-article-content-right">
								<img src="<?php echo get_template_directory_uri(); ?>/images/news-image-texture.png" />
								<p><?php the_content(); ?></p>
							</div>
						</div>
						<?php } ?>
					<?php endwhile; ?>
				</div>
			</div>
										<div class="row">
											<div class="back-to-top">
												<div class="back-to-top-pos">
													<h1>Back to top</h1>
													<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/back-to-top-button.png" /></a>
												</div>
											</div>
										</div>
									</div>
									</div>
<?php get_footer(); ?>
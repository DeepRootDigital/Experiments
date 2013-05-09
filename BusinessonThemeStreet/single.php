<?php include 'header.php'; ?> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="single-blog-slider">
		<img src="<?php echo get_template_directory_uri(); ?>/images/blog-slide.jpg">
	</div>
	<div class="single-blog-page">
		<div class="center">
			<div class="single-blog-content">
				<article>
					<div id="single-blog-date">
						<img src="<?php echo get_template_directory_uri(); ?>/images/blog-blue-flag.png">
						<p><?php the_date(); ?></p>
					</div>
					<div class="single-blog-image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/single-blog-img.png">
					</div>
					<h1><?php the_title(); ?></h1>
					<h2><?php the_date(); ?> - Posted by <?php the_author(); ?></h2>
					<?php the_content(); ?>
					<div class="blog-summary-social">
						<ul>
							<li><div class="fb-like" data-send="false" data-layout="button_count" data-width="35" data-show-faces="false"></div></li>
							<li><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>">Tweet</a></li>
							<li><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							<a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); echo $thumb['0']; ?>&description=<?php the_title(); ?>" class="pin-it-button" count-layout="horizontal"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
						</li>
					</ul>
				</div>
				<div class="clear"></div>
				<h3 class="blog-summary-tags"><?php
					echo get_the_tag_list('Tags: ',', ','');
					?></h3>
						<!--
						<section class="single-blog-comment">
							<h3>What's on your mind</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/images/single-blog-comment-header.png">
							<h2>comment</h2>
							<h1>17 <em>Comments</em></h1>
							<article class="level1-comment blog-comment">
								<img src="<?php echo get_template_directory_uri(); ?>/images/">
								<div >

							</article>
							<article class="level2-comment blog-comment">
								<img src="<?php echo get_template_directory_uri(); ?>/images/">
								<div >

							</article>
							<article class="level3-comment blog-comment">
								<img src="<?php echo get_template_directory_uri(); ?>/images/">
								<div >

							</article>
						</section> -->

					</article>
	<?php endwhile; endif;  ?>
				</div>
				<?php get_template_part('single','sidebar'); ?>
			</div>
		</div>
	<?php include 'footer.php'; ?> 
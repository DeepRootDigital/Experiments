<?php /* Template Name: Blog Summary Page */ ?>
<?php include 'header.php'; ?> 
<section class="blog">			
	<div class="blog-slider">
		<img src="<?php echo get_template_directory_uri(); ?>/images/blog-slide.jpg">
	</div>
	<div class="blog-slide-flag">
		<h1>"We are dedicated to achieving the best design for your business idea"</h1>
	</div>
	<div class="center">
		<div class="blog-left">
			<?php $wp_query->query('showposts=16&orderby=title&order=asc' . '&paged=' . $paged);
			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<article class="blog-summary">
				<div class="blog-date">
					<img src="<?php echo get_template_directory_uri(); ?>/images/blog-blue-flag.png">
					<p><?php the_time('D, j, Y'); ?></p>
				</div>

				<div class="blog-image-preview">
					<img src="<?php echo get_template_directory_uri(); ?>/images/blog-small1.png">
				</div>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<h2><?php the_time('F j, Y'); ?> - Posted by <?php the_author(); ?></h2>
				<p><?php the_excerpt(); ?></p>
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
				<h3 class="blog-summary-tags">
					<?php
					echo get_the_tag_list('Tags: ',', ','');
					?>
				</h3>
			</article>
		<?php endwhile; ?>
	</div>
	<?php get_template_part('blog','sidebar'); ?>
	<div class="clear"></div>
</div>
</section>
<?php include 'footer.php'; ?> 
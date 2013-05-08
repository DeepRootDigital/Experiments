<?php 
/*
Template Name: blog-summary
*/
?>
<?php get_header(); ?>
<div class="blog-summary-background">
	<section class="blog-summary-content">
		<?php $blogPosts = new WP_Query();
		$blogPosts->query('showposts=-1');
		while ($blogPosts->have_posts()) : $blogPosts->the_post();
		?>
		<div class="blog-post"> 
			<img class="blog-ribbon" src="<?php echo get_template_directory_uri(); ?>/images/blog-business-finance.png" />
			<div class="post-category">
				<?php
				$category = get_the_category(); 
				echo $category[0]->cat_name;
				?>
			</div>
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<div class="blog-posted-by">
				<p>posted by <?php the_author(); ?></p>
			</div>
			<img class="blog-summary-dotted-bar" src="<?php echo get_template_directory_uri(); ?>/images/bottom-body-dotted-line.png" />
			<?php if ( has_post_thumbnail() ) { ?>
			<div class="blog-summary-main-image blog-top-image">
				<?php the_post_thumbnail(); ?>
				<img class="blog-posted-date" src="<?php echo get_template_directory_uri(); ?>/images/blog-posted-date.png" />
				<div class="blog-post-date">POSTED:<br/><?php the_date('Y-m-d'); ?></div>
			</div>
			<?php }  ?>			<div class="blog-description">
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/blog-more-button.png" /></a>
		</div>
		<img class="blog-summary-single-dotted-lines" src="<?php echo get_template_directory_uri(); ?>/images/blog-summary-single-dotted-lines.png" />
		<?php
		if(get_the_tag_list()) {
			echo get_the_tag_list('<ul><li>tags</li><li>','</li><li>','</li></ul>');
		}
		?>
	</div>
	<img class="blog-bottom-border" src="<?php echo get_template_directory_uri(); ?>/images/blog-bottom-border.png" />
<?php endwhile; ?>
</section>
<div class="pagination">
	<img src="<?php echo get_template_directory_uri(); ?>/images/pagination-arrow.png" />
	<p>Older</p>
	<img src="<?php echo get_template_directory_uri(); ?>/images/pagination-quote.png" />
</div>
<div class="blog-summary-side-menu">
	<?php get_template_part('blogfeed','sidemenu'); ?>
</div>
<div class="blog-summary-feed">
	<?php get_template_part('sidebar','blogfeed'); ?>
</div>
</div>
<?php get_footer(); ?>
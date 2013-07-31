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

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
        <div class="row">
		<div class="page-body-area">

			<div class="page-body-area-left">
				<div class="page-body-left-quotebox">
					<img src="<?php echo get_template_directory_uri(); ?>/images/page-news-placeholder.png" />
					<h1>&ldquo;<br />
						<?php echo get_post_meta(get_the_ID(),'quotation',true); ?><br />
						&rdquo;</h1>
				</div>
				<div class="page-body-left-middle-image">
					<img src="<?php echo get_template_directory_uri(); ?>/images/page-news-placeholder3.png" />
				</div>
				<div class="page-body-left-bottom-image">
					<img src="<?php echo get_template_directory_uri(); ?>/images/page-news-placeholder2.png" />
				</div>
			</div>

			<div class="page-body-area-right">
				<div class="page-body-right-title">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="page-body-right-content">
					<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
						incididunt ut labore et dolore magna aliqua.</span> <br />
					<br />
					<?php the_content(); ?></p>
				</div>
				<div class="page-body-social-media">
					<img src="<?php echo get_template_directory_uri(); ?>/images/page-social-placeholder.png" />
				</div>
				<div class="page-body-right-bottom-line">
				</div>
			</div>

		</div>
	</div>

<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
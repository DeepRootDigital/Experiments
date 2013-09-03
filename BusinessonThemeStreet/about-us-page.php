<?php /* Template Name: About Us */ ?>
<?php get_header(); ?>
<div class="aboutus-page">
	<div class="aboutus-header">
		<h2>About Us</h2>
	</div>
	<img src="<?php echo get_template_directory_uri() ?>/images/about-us-toppicture.jpg" />
	<div class="aboutus-textcontent">
		<div class="aboutus-textcontent-headline">
			<h3><span>Starting our agency, 
				Business on Market St., 
				was easy</span> // Our vision 
				was built on your 
				successes, not ours.</h3>
		</div>
		<div class="aboutus-textcontent-writing">
				<p>We knew that if you were happy enough to buy us all new Ferrari sportscars, then we’d done a good job. <br /> <br />
					To become the people you would trust with your new puppy, we searched the world of San Diego and beyond for a team that would have the tools to craft the most engaging website, put together a mind-blowing sales presentation, know their way around clicks and links and conversion rates. Our folks are social (media-wise), creative (and art-smart), hard-driving (that new sportscar, soon), and exactly who your business needs to build your brand into a universally famous name.<br /> <br />
					We know that brand marketing makes an enormous difference for companies. We’ve been doing it for years. Your brand connects you with your customers, your prospective customers, and that guy that swore never to buy a widget in his life. What is a widget, anyway??<br /> <br />
					We promise to focus like a laser on your business, bring you quick, measurable outcomes and find you the success that you deserve.</p>
		</div>
	</div>
	<div class="aboutus-tree-title">
		<h2><span>.</span>Meet the Disciplineers<span>.</span></h2>
	</div>
			<div class="aboutus-tree">
				<img src="<?php echo get_template_directory_uri() ?>/images/big-bms-logo.png" />
			</div>
			<?php 
			$args=array(
				'post_type' => 'bms_employees',
				'order' => 'ASC');

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
			?>
			<div class="aboutus-tree-leaf <?php echo get_post_meta(get_the_ID(),'side',true); ?>">
				<div class="aboutus-tree-petal-picture <?php echo get_post_meta(get_the_ID(),'division',true); ?>">
					<div class="aboutus-tree-petal-text <?php echo get_post_meta(get_the_ID(),'division',true); ?>">
						<h4>&ldquo;<?php echo get_post_meta(get_the_ID(),'quotation',true); ?>&rdquo;</h4>
						<p><?php the_content() ?></p>
					</div>
					<?php the_post_thumbnail(); ?>
					
				</div>
				<div class="aboutus-tree-leaf-dots"></div>
				<div class="aboutus-tree-leaf-bubble"></div>
				<div class="aboutus-tree-leaf-text <?php echo get_post_meta(get_the_ID(),'division',true); ?>">
					<h2><?php the_title() ?> <span><?php echo get_post_meta(get_the_ID(),'lastname',true); ?></span></h2>
					<h3><span>//</span> <?php echo get_post_meta(get_the_ID(),'position',true); ?></h3>
					<h4><?php echo get_post_meta(get_the_ID(),'specialposition',true); ?></h4>
				</div>
			</div>


		<?php endwhile; ?>
		<div class="aboutus-tree-root">
			<p>We also have a wonderful Operations Manager and Copywriter on staff but they remain shrouded in mystery as they work behind the scenes to keep this ship sailing smoothly. They tend to be a little print shy.</p>
		</div>
</div>
</div>
			<?php get_footer(); ?>
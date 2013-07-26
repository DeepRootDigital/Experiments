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
				'order' => 'DESC');

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
					<img src="<?php echo get_template_directory_uri() ?>/images/leaf-thumbprint-hover.png" style="display:none" />
				</div>
				<div class="aboutus-tree-leaf-dots"></div>
				<div class="aboutus-tree-leaf-bubble"></div>
				<div class="aboutus-tree-leaf-text <?php echo get_post_meta(get_the_ID(),'division',true); ?>">
					<h2><?php the_title() ?><span><?php echo get_post_meta(get_the_ID(),'lastname',true); ?></span></h2>
					<h3><span>//</span> <?php echo get_post_meta(get_the_ID(),'position',true); ?></h3>
					<h4><?php echo get_post_meta(get_the_ID(),'specialposition',true); ?></h4>
				</div>
			</div>


		<?php endwhile; ?>
</div>









  			<!--
			<div class="aboutus-tree-leaf left">
				<div class="aboutus-tree-petal-picture">
					<div class="aboutus-tree-petal-text">
						<h4>&ldquo;I am the chief creative director yo!&rdquo;</h4>
						<p>Mr. Jacobo has held the positions of Creative and Art Director for 6 years and has added incredible value, talent and insight to the growth of BMS. Aldo’s number one specialty is Brand Development and he has directed and been a fundamental force in the design and creation of the brands BMS has developed. He has worked with companies big and small, national and international. He is fluent in Spanish with a talent for written translation.<br /><br />
							Mr. Jacobo is a Mac guru who truly understands the Apple culture having been trained in customer service in this fastest growing retail chain in history. Additionally, he absorbed the core strategies of Apple and understands how to apply those in all brands.<br /><br />
							Our Chief Creative Officer has many years of graphic design under his belt including 3 years creating visually appealing, instructive materials in the form of computer-based training for Marine helicoper pilots, crew chiefs and mechanics.<br /><br />
							We can credit Aldo with not only the beautiful design work our clients get to show off but our office boasts one of a kind sand blasted wall art featuring our clients and  designed by our very own Mr. Mac. We invite you to come and see them for yourself!</p>
						</div>
					<img src="<?php echo get_template_directory_uri() ?>/images/bob.png" />
					<img src="<?php echo get_template_directory_uri() ?>/images/leaf-thumbprint-hover.png" style="display:none" />
				</div>
					<div class="aboutus-tree-leaf-dots"></div>
					<div class="aboutus-tree-leaf-bubble"></div>
					<div class="aboutus-tree-leaf-text">
						<h2>Bob <span>Afsari</span></h2>
						<h3><span>//</span> Chief Executive Officer</h3>
						<h4>Co-founder</h4>
					</div>
				</div>
				<div class="aboutus-tree-leaf right">
					<div class="aboutus-tree-petal-picture">
						<div class="aboutus-tree-petal-text">
							<h4>&ldquo;I am the chief creative director yo!&rdquo;</h4>
							<p>Mr. Jacobo has held the positions of Creative and Art Director for 6 years and has added incredible value, talent and insight to the growth of BMS. Aldo’s number one specialty is Brand Development and he has directed and been a fundamental force in the design and creation of the brands BMS has developed. He has worked with companies big and small, national and international. He is fluent in Spanish with a talent for written translation.<br /><br />
								Mr. Jacobo is a Mac guru who truly understands the Apple culture having been trained in customer service in this fastest growing retail chain in history. Additionally, he absorbed the core strategies of Apple and understands how to apply those in all brands.<br /><br />
								Our Chief Creative Officer has many years of graphic design under his belt including 3 years creating visually appealing, instructive materials in the form of computer-based training for Marine helicoper pilots, crew chiefs and mechanics.<br /><br />
								We can credit Aldo with not only the beautiful design work our clients get to show off but our office boasts one of a kind sand blasted wall art featuring our clients and  designed by our very own Mr. Mac. We invite you to come and see them for yourself!</p>
							</div>
							<img src="<?php echo get_template_directory_uri() ?>/images/aldo.png" />
							<img src="<?php echo get_template_directory_uri() ?>/images/leaf-thumbprint-hover.png" style="display:none" />
						</div>
						<div class="aboutus-tree-leaf-dots"></div>
						<div class="aboutus-tree-leaf-bubble"></div>
						<div class="aboutus-tree-leaf-text">
						<h2>Aldo <span>Jacobo</span></h2>
						<h3><span>//</span> Chief Creative Officer</h3>
						<h4>Co-founder</h4>
					</div>
					</div>
					<div class="aboutus-tree-leaf left">
						<div class="aboutus-tree-petal-picture"></div>
						<div class="aboutus-tree-leaf-dots"></div>
						<div class="aboutus-tree-leaf-bubble"></div>
					</div>
					<div class="aboutus-tree-leaf right">
						<div class="aboutus-tree-petal-picture"></div>
						<div class="aboutus-tree-leaf-dots"></div>
						<div class="aboutus-tree-leaf-bubble"></div>
					</div>
					<div class="aboutus-tree-leaf left">
						<div class="aboutus-tree-petal-picture"></div>
						<div class="aboutus-tree-leaf-dots"></div>
						<div class="aboutus-tree-leaf-bubble"></div>
					</div>
				</div>
			-->
			<?php get_footer(); ?>
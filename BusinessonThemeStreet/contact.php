<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
<div class="contact-page">
	<div class="center">
	<div class ="contact-page-slide">
				<div class="contact-slide">
					<div class="contact-slide-slogan">
						<img src="<?php echo get_template_directory_uri(); ?>/images/contact-slider-slogan.png" alt="Let's connect and get started">
						<p><?php the_content(); ?></p>
					</div>
					<form>
						<input name="name" placeholder="name*" value="" type="text"><br>
						<input name="email" placeholder="email*" value="" type="text"><br>
						<input name="phone" placeholder="phone" value="" type="text"><br>
						<input name="industry" placeholder="industry" value="" type="text"><br>
						<textarea placeholder="message" name="message"></textarea>
						<input id="contact-form-submit" type="submit" value="submit">
					</form>
					<div class="contact-slide-select">
						<h1>Select all that apply</h1>
						<ul>
							<li class="contact-slide-select-1"><p>Research and<br>planning</p></li>
							<li class="contact-slide-select-3"><p>Branding</p></li>
							<li class="contact-slide-select-2"><p>Business<br>development</p></li>
							<li class="contact-slide-select-5"><p>Web<br>development</p></li>
							<li class="contact-slide-select-4"><p>Marketing</p></li>														
						</ul>
					</div>
					<div class="contact-slide-address">
						<h1>BMS<br>CONTACT</h1>
						<ul>
							<li>7975</li>
							<li>Raytheon RD Suite 310</li>
							<li>San Diego, CA 92115</li><br>
							<li>P // 858.598.5477</li>
						</ul>	
					</div>
					<div class="clear"></div>
				</div><!--END CONTACT SLIDE -->
		</div>
		<div class="contact-page-content">
			<h1><em>Located in</em> Kearny Mesa</h1>
			<div class="contact-page-map">
				<img src="<?php echo get_template_directory_uri(); ?>/images/map.png">
			</div>
		</div>
		<div class="contact-page-sidebar">
			<div class="bms-talk">
				<h1><em>BMS</em> Talk</h1>
				<ul>
					<?php query_posts('posts_per_page=3'); ?>
					<?php while (have_posts()) : the_post(); ?>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/bms-logo-small.png"><p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span>>></span></p></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div>

</div>
<?php get_footer(); ?>
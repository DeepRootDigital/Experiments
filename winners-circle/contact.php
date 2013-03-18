<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg"></div>
			<div class="sub-content">
				<div class="sub-page-data">
					<div class="sub-left">						
						<div class="sub-left-text">
							<img id="email-icon" src="<?php echo get_template_directory_uri(); ?>/images/email-icon.png">
							<h2>Contact Us</h2>
							<div class="contact-page">
								<p>Write to us, we want to hear from you.</p>
								<form class="form-input">
									<input id="form-name" type="text" name="name" value="name">
									<input id="form-email" type="text" name="email" value="email">
									<textarea id="form-comment"  name="comment">Comment</textarea>
									<input id="form-submit" type="submit" value="submit">
								</form>
							</div>												
						</div>
						<div class="sub-left-features">
							<h2><span>Location</span></h2>
							<div class="location-info">
								<h2 id="clear-margin">Winners Circle at Saratoga</h2>
								<p>100 Madison Drive</p>
								<p>Ballston Spa, NY 12020</p>
								<h2>Hours:</h2>
								<p>Monday – Friday 9-5</p>
								<h2>Phone: </h2>
								<p>518.885.rent (7368)</p>
								<h2>Fax: </h2>
								<p>518.885.0800</p>
								<p id="location-email">lease@</p>
								<p>winnerscircleatsaratoga.com</p>
							</div>

						</div>						
					</div>				
					<div class="sub-right">
						<a href="#" id="one-month"><img src="<?php echo get_template_directory_uri(); ?>/images/one-month-free.png"></a>
						<div class="sub-page-list">
							<ul>
								<li>One <span>Bedroom</span><img src="<?php echo get_template_directory_uri(); ?>/images/house1-small.png"></li>
								<li><a href="#">Bermardini</a></li>
								<li><a href="#">Birdstone</a></li>
							</ul>
							<div class="list-shadow"></div>
							<ul>
								<li>Two <span>Bedroom</span><img src="<?php echo get_template_directory_uri(); ?>/images/house2-small.png"></li>
								<li><a href="#">Colonel John</a></li>
								<li><a href="#">Jalpur</a></li>
								<li><a href="#">Java Gold</a></li>
								<li><a href="#">Man O’ War</a></li>
								<li><a href="#">Native Dancer</a></li>
							</ul>
							<div class="list-shadow"></div>
							<ul>
								<li>Three <span>Bedroom</span><img src="<?php echo get_template_directory_uri(); ?>/images/house3-small.png"></li>
								<li><a href="#">Sea Hero</a></li>
								<li><a href="#">Street Sense</a></li>
								<li><a href="#">Sword Dancer</a></li>
							</ul>
							<div class="list-shadow"></div>
							<ul>
								<li>1 & 2 <span>Floor</span><img src="<?php echo get_template_directory_uri(); ?>/images/house4-small.png"></li>
								<li><a href="#">The Belmont</a></li>
								<li><a href="#">Churchill Downs</a></li>
								<li><a href="#">Pimlico</a></li>
							</ul>	
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>			
		</div><!-- END Canvas -->
		<div class="clear"></div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
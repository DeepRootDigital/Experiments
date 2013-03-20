<?php /* Template Name: Contact Page */ ?>
<?php $mainoptions = get_option('main_theme_options'); ?>
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
						<?php 
							if (isset($_REQUEST['email']))
							{
								$email = $_REQUEST['email'] ;
								$subject = $_REQUEST['name'] ;
								$message = $_REQUEST['message'] ;
								$toperson = $mainoptions['emailaddress'];
								mail($toperson, $subject,
									$message, "From:" . $email);
							}
									?>
						<form class="form-input" method="post" action="<?php the_permalink(); ?>">
									<input id="form-name" type="text" name="name" value="name">
									<input id="form-email" type="text" name="email" value="email">
									<textarea id="form-comment"  name="message">Comment</textarea>
									<input id="form-submit" type="submit" value="submit">
								</form>
							</div>												
						</div>
						<div class="sub-left-features">
							<h2><span>Location</span></h2>
							<div class="location-info">
								<h2 id="clear-margin">Winners Circle at Saratoga</h2>
								<p><?php echo $mainoptions['addresstext'] ?></p>
								<h2>Hours:</h2>
								<p><?php echo $mainoptions['hours']; ?></p>
								<h2>Phone: </h2>
								<p><?php echo $mainoptions['telnumber']; ?></p>
								<h2>Fax: </h2>
								<p><?php echo $mainoptions['faxnumber']; ?></p>
								<p id="location-email"><a href="mailto:<?php echo $mainoptions['emailaddress']; ?>"><?php echo $mainoptions['emailaddress']; ?></a></p>
							</div>

						</div>						
					</div>				
					<div class="sub-right">
						<a href="#" id="one-month"><img src="<?php echo get_template_directory_uri(); ?>/images/one-month-free.png"></a>
						<div class="sub-page-list">
							<ul>
								<li>One <span>Bedroom</span><img src="<?php echo get_template_directory_uri(); ?>/images/house1-small.png"></li>
								<?php
								$onebed = new WP_Query();
								$onebed->query('showposts=6&post_type=houses');
								while ($onebed->have_posts()) : $onebed->the_post();
								?>
								<?php 
								if (get_post_meta( get_the_ID(), 'bedrooms', true ) == 'value1') { ?>
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
								<?php } ?>
							<?php endwhile; ?>    
						</ul>
						<div class="list-shadow"></div>
						<ul>
							<li>Two <span>Bedroom</span><img src="<?php echo get_template_directory_uri(); ?>/images/house2-small.png"></li>
							<?php
							$twobed = new WP_Query();
							$twobed->query('showposts=6&post_type=houses');
							while ($twobed->have_posts()) : $twobed->the_post();
							?>
							<?php 
							if (get_post_meta( get_the_ID(), 'bedrooms', true ) == 'value2') { ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
							<?php } ?>
						<?php endwhile; ?>
					</ul>
					<div class="list-shadow"></div>
					<ul>
						<li>Three <span>Bedroom</span><img src="<?php echo get_template_directory_uri(); ?>/images/house3-small.png"></li>
						<?php
						$threebed = new WP_Query();
						$threebed->query('showposts=6&post_type=houses');
						while ($threebed->have_posts()) : $threebed->the_post();
						?>
						<?php 
						if (get_post_meta( get_the_ID(), 'bedrooms', true ) == 'value3') { ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
						<?php } ?>
					<?php endwhile; ?>
				</ul>
				<div class="list-shadow"></div>
				<ul>
					<li>1 & 2 <span>Floor</span><img src="<?php echo get_template_directory_uri(); ?>/images/house4-small.png"></li>
					<?php
					$multifloor = new WP_Query();
					$multifloor->query('showposts=6&post_type=houses');
					while ($multifloor->have_posts()) : $multifloor->the_post();
					?>
					<?php 
					if (get_post_meta( get_the_ID(), 'floors', true ) == '1') { ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
					<?php } ?>
				<?php endwhile; ?>
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
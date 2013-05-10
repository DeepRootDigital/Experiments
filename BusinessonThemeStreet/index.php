<?php get_header(); ?>
<?php $homepageoptions = get_option('sample_theme_options'); ?>
		<div class="center">
			<div class="home-slider">
				<!-- SLIDE 1 -->
				<div class="slide-section">
					<div class="home-slide home-slide-1">
						<img class="slide-img slide-img-1" src="<?php echo get_template_directory_uri(); ?>/images/slide-img.jpg">
						<img class="slide-img-active slide-img-active-1" src="<?php echo get_template_directory_uri(); ?>/images/slide-1-active.jpg">					
					</div>
					<div class="slide-nav slide-nav-1">
						<div class="slide-nav-icon">
							<img class="slide-icon" src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-1.png">
							<img class="slide-icon-active slide-icon-active-1" src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-1-active.png">
						</div><img src="<?php echo get_template_directory_uri(); ?>/images/slider-bottom-overlay.png">
					</div>
				</div>
				<!-- SLIDE 2 -->
				<div class="slide-section">
					<div class="home-slide home-slide-2">
						<img class="slide-img slide-img-2" src="<?php echo get_template_directory_uri(); ?>/images/slide-img.jpg">
						<img class="slide-img-active slide-img-active-2" src="<?php echo get_template_directory_uri(); ?>/images/slide-2-active.jpg">					
					</div>
					<div class="slide-nav slide-nav-2">
						<div class="slide-nav-icon">
							<img class="slide-icon" src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-2.png">
							<img class="slide-icon-active slide-icon-active-2" src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-2-active.png">
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/images/slider-bottom-overlay.png">
					</div>
				</div>
				<!-- SLIDE 3 -->
				<div class="slide-section">
					<div class="home-slide home-slide-3">
						<img class="slide-img slide-img-3" src="<?php echo get_template_directory_uri(); ?>/images/slide-img.jpg">
						<img class="slide-img-active slide-img-active-3" src="<?php echo get_template_directory_uri(); ?>/images/slide-3-active.jpg">					
					</div>
					<div class="slide-nav slide-nav-3">
						<div class="slide-nav-icon">
							<img class="slide-icon" src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-3.png">
							<img class="slide-icon-active slide-icon-active-3" src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-3-active.png">
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/images/slider-bottom-overlay.png">
					</div>
				</div>
				<!-- SLIDE 4 -->
				<div class="slide-section">
					<div class="home-slide home-slide-4">
						<img class="slide-img slide-img-4" src="<?php echo get_template_directory_uri(); ?>/images/slide-img.jpg">
						<img class="slide-img-active slide-img-active-4" src="<?php echo get_template_directory_uri(); ?>/images/slide-4-active.jpg">					
					</div>
					<div class="slide-nav slide-nav-4">
						<div class="slide-nav-icon">
							<img class="slide-icon" src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-4.png">
							<img class="slide-icon-active slide-icon-active-4" src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-4-active.png">
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/images/slider-bottom-overlay.png">
					</div>
				</div>
				<!-- SLIDE 5 -->
				<div class="slide-section">
					<div class="home-slide home-slide-5">
						<img class="slide-img slide-img-5" src="<?php echo get_template_directory_uri(); ?>/images/slide-img.jpg">	
						<img class="slide-img-active slide-img-active-5" src="<?php echo get_template_directory_uri(); ?>/images/slide-5-active.jpg">				
					</div>
					<div class="slide-nav slide-nav-5">
						<div class="slide-nav-icon">
							<img class="slide-icon" src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-5.png">
							<img class="slide-icon-active slide-icon-active-5" src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-5-active.png">
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/images/slider-bottom-overlay.png">
					</div>
				</div>
				<!-- SLIDE 6 -->
				<div class="slide-section">
					<div class="home-slide home-slide-6">
						<img class="slide-img slide-img-6" src="<?php echo get_template_directory_uri(); ?>/images/slide-img.jpg">
						<div id="contact-slide">
							<div class="contact-slide-slogan">
								<img src="<?php echo get_template_directory_uri(); ?>/images/contact-slider-slogan.png" alt="Let's connect and get started">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							</div>
							<form>
								<input name="name" value="Name" type="text"><br>
								<input name="email" value="Email" type="text"><br>
								<input name="phone" value="Phone" type="text"><br>
								<input name="industry" value="Industry" type="text"><br>
								<textarea name="message">Message</textarea>
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
					<div class="slide-nav slide-nav-6">
						<div class="slide-nav-icon">
							<img class="slide-icon-contact" src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-6.png">
							<img class="slide-icon-active slide-icon-active-6" src="<?php echo get_template_directory_uri(); ?>/images/slider-tabs/tab-6-active.png">
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/images/slider-bottom-overlay.png">
					</div>
				</div>
			</div><!-- END HOME SLIDER -->
			
			<div class="home-content bottom-page-space">
			<!--	<h1><em>Recent</em> Projects</h1>
				<section class="home-project-section">
					<div class="home-project-wrapper">
						<div class="home-project-block">
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>1 Digital Abduction <em>//</em></h2>
								<h1>Web Development</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>2 Peashake House <em>//</em></h2>
								<h1>Marketing</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>3 Aeogea <em>//</em></h2>
								<h1>Branding</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>4 Barrellymadeit <em>//</em></h2>
								<h1>Marketing</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<div class="clear"></div>
						</div>
						<div class="home-project-block">
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>5 Digital Abduction <em>//</em></h2>
								<h1>Web Development</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>6 Peashake House <em>//</em></h2>
								<h1>Marketing</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>7 Aeogea <em>//</em></h2>
								<h1>Branding</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>8 Barrellymadeit <em>//</em></h2>
								<h1>Marketing</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<div class="clear"></div>
						</div>
						<div class="home-project-block">
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>1 Digital Abduction <em>//</em></h2>
								<h1>Web Development</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>2 Peashake House <em>//</em></h2>
								<h1>Marketing</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>3 Aeogea <em>//</em></h2>
								<h1>Branding</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>4 Barrellymadeit <em>//</em></h2>
								<h1>Marketing</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<div class="clear"></div>
						</div>
						<div class="home-project-block">
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>5 Digital Abduction <em>//</em></h2>
								<h1>Web Development</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>6 Peashake House <em>//</em></h2>
								<h1>Marketing</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>7 Aeogea <em>//</em></h2>
								<h1>Branding</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<article class="home-project">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home-img.png">
								<img class="home-project-overlay" src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay.png">
								<h2>8 Barrellymadeit <em>//</em></h2>
								<h1>Marketing</h1>
								<div class="home-project-hover">
									<img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-icons.png">
									<ul>
										<li>Web Development /</li>
										<li>Branding / Business</li>
										<li>Development /</li>
										<li>Marketing</li>
									</ul>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home-project-overlay-button.png"></a>
								</div>
							</article>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</section>
				<div class="home-project-control">
					<p class="project-control-left"></p>
					<p class="project-control-right"></p>
					<div class="clear"></div>
				</div>-->
				
				<div class="home-bottom-info">
					<h1><?php echo $homepageoptions['hp-content-title']; ?></h1>
					<p><?php echo $homepageoptions['hp-content']; ?></p>
					<ul>
						<li>Branding</li>
						<li>Web<br>Development</li>
						<li>Marketing</li>
						<li>Business<br>Development</li>
						<li>Research<br> and planning</li>
					</ul>
				</div>
			</div>			
			<div class="bms-talk home-sidebar">
				<!--
				<h1><em>BMS</em> Talk</h1>
				<ul>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/talk-icon-fb.png"><p><a href="#">improving your proposals mobile experience</a><span>>></span></p></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/talk-icon-pin.png"><p><a href="#">OTHER TITLE OR ARTICLE HEADLINe CAN GO HERE</a><span>>></span></p></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/talk-icon-twitter.png"><p><a href="#">OTHER TITLE OR ARTICLE HEADLINe CAN GO HERE</a><span>>></span></p></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/talk-icon-fb.png"><p><a href="#">improving your proposals mobile experience</a><span>>></span></p></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/bms-logo-small.png"><p><a href="#">improving your proposals mobile experience</a><span>>></span></p></li>
				</ul> -->
				<div class="home-sidebar-contact">
					<h1><em>Intrigued</em>?</h1>
					<form method="POST" action="<?php email_form(); ?>">
						<input type="text" value="name" name="firstname">
						<input type="text" value="last" name="lastname">
						<input type="text" value="email" name="email">
						<input type="phone" value="phone" name="phone">
						<input id="home-sidebar-contact-submit" type="submit" value="submit">
					</form>
				</div>				
			</div>
			<div class="clear"></div>
		</div>
<?php get_footer(); ?> 
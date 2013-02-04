<?php include('inc/header.php') ?>
		
		<div class="slider-bg">
			<div id="slider" class="center">			
				<ul class="bxslider">
				  <li><img src="<?php echo get_template_directory_uri(); ?>/images/slider1.jpg" /></li>
				  <li><img src="<?php echo get_template_directory_uri(); ?>/images/slider2.jpg" /></li>
				  <li><img src="<?php echo get_template_directory_uri(); ?>/images/slider3.jpg" /></li>
				  <li><img src="<?php echo get_template_directory_uri(); ?>/images/slider4.jpg" /></li>
				</ul>			
			</div>

		</div>
		<div class="center">
			<div class="slider-tab"><img src="<?php echo get_template_directory_uri(); ?>/images/slider-tab.png"></div>
		</div>

		<section class="center">
			<div class = "slogan">
				<h1>Get on board with <span>project onramp</span> to: <span><img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png">Start<img src="<?php echo get_template_directory_uri(); ?>/images/slogan-img2.png">Grow<img src="<?php echo get_template_directory_uri(); ?>/images/slogan-img3.png">Expand</span></h1>
			</div>
			<div class="col-1 col">
				<h2>Client Buzz //</h2>
				<ul>
					<li><a href ="#"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><img src="<?php echo get_template_directory_uri(); ?>/images/small-button.png"></a></li>
					<li><a href ="#"><p>Sed dignissim felis et sapien facilisis blandit</p><img src="<?php echo get_template_directory_uri(); ?>/images/small-button.png"></a></li>
					<li><a href ="#"><p>Quisque in orci congue risus interdum tempor quis ac turpis.</p><img src="<?php echo get_template_directory_uri(); ?>/images/small-button.png"></a></li>
					<li><a href ="#"><p>Nam venenatis dapibus nisi, sed malesuada lectus rhoncus id.</p><img src="<?php echo get_template_directory_uri(); ?>/images/small-button.png"></a></li>
					<li><a href ="#"><p>Mauris sagittis ornare velit, a aliquam mauris convallis consectetur.</p><img src="<?php echo get_template_directory_uri(); ?>/images/small-button.png"></a></li>
				</ul>
				<div class="border-bottom">
					<h2>Meet the Team //</h2>
				</div>
				<h2>Join our Mailing list //</h2>
				<form>
					<input type="text" name="email" value="Email">
					<div class="submit">
						<input type="submit" >
					</div>
				</form>
			</div>
			<div class="col-2">
				<h2>Case Studies //</h2>
				<div>
					<h3><strong>Client:</strong> Barrelly Made It</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel turpis vitae elit euismod faucibus. Mauris sed metus massa, ut auctor augue. Aliquam scelerisque bibendum mauris, dapibus aliquam dolor pharetra at. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					<a href="#"><p></p></a>
				</div>
			</div>
			<div class="col-3 col">
				<h2>BMS Blog //</h2>
				<ul>
					<li><a href ="#"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><img src="<?php echo get_template_directory_uri(); ?>/images/small-button.png"></a></li>
					<li><a href ="#"><p>Sed dignissim felis et sapien facilisis blandit</p><img src="<?php echo get_template_directory_uri(); ?>/images/small-button.png"></a></li>
					<li><a href ="#"><p>Quisque in orci congue risus interdum tempor quis ac turpis.</p><img src="<?php echo get_template_directory_uri(); ?>/images/small-button.png"></a></li>
					<li><a href ="#"><p>Nam venenatis dapibus nisi, sed malesuada lectus rhoncus id.</p><img src="<?php echo get_template_directory_uri(); ?>/images/small-button.png"></a></li>
					<li><a href ="#"><p>Mauris sagittis ornare velit, a aliquam mauris convallis consectetur.</p><img src="<?php echo get_template_directory_uri(); ?>/images/small-button.png"></a></li>
				</ul>
				<h2>Contact Us//</h2>
				<form name="contact_form" method="post" action="form_send.php">
					<input type="text" name="name" value="Name">
					<input type="text" name="email" value="Email">
					<input type="text" name="phone" value="Phone">
					<div class="submit">
						<input type="submit" class="submit_button">
					</div>
			</div>
				</form>
			<div class="clear"></div>
		</section>
<?php include('inc/footer.php') ?>
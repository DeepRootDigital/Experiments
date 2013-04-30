<!DOCTYPE html>
<html>
<head>
	<title>Fans 180</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script src="function.js"></script>
	<?php include 'styler-compiler.php'; ?>
</head>
<body>
	<div class="body-content">
		<header class="header-content">
			<img src="images/logo.png" alt="home page logo" />
			<nav>
				<ul>
					<li><a href="">home</a></li>
					<li><a href="">about us</a></li>
					<li><a href="">services</a></li>
					<li><a href="">contact us</a></li>
				</ul>
			</nav>
			<form>
				<input type="text" value="Password" />
				<input type="text" value="User ID" />
				<input id="header-form-submit" type="submit" value="" />
			</form>
			<div class="header-phone-info">
				<h5>call us:<span>855.fans.180 [ 855.326.7180 ]</span></h5>
			</div>
		</header>
		<section class="home-grid">
			<div class="home-grid-photography grid-block">
				<?php if ($styles['top-left-img'] != '') { ?>
				<img class="grid-image grayscale" src="<?php echo $styles['top-left-img'] ?>">
				<?php }
				else { ?>
				<img class="grid-image grayscale" src="images/f180-grid-photography.png">
				<?php } ?>
				<div class="grid-overlay"></div>
				<div class="grid-info">
					<img src="images/grid-info-arrow.png">
					<h1>Music</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="home-grid-music grid-block">
					<?php if ($styles['top-right-img'] != '') { ?>
					<img class="grid-image grayscale" src="<?php echo $styles['top-right-img'] ?>">
					<?php }
					else { ?>
					<img class="grid-image grayscale" src="images/f180-grid-music.png">
					<?php } ?>
					<div class="grid-overlay"></div>
					<div class="grid-info">
						<img src="images/grid-info-arrow.png">
						<h1>Photography</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
					<div class="home-grid-movies grid-block">
						<?php if ($styles['mid-left-img'] != '') { ?>
						<img class="grid-image grayscale" src="<?php echo $styles['mid-left-img'] ?>">
						<?php }
						else { ?>
						<img class="grid-image grayscale" src="images/f180-grid-movies.png">
						<?php } ?>
						<div class="grid-overlay"></div>
						<div class="grid-info">
							<img src="images/grid-info-arrow.png">
							<h1>Photography</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="home-grid-gaming grid-block">
							<?php if ($styles['mid-right-img'] != '') { ?>
							<img class="grid-image grayscale" src="<?php echo $styles['mid-right-img'] ?>">
							<?php } else { ?>
							<img class="grid-image grayscale" src="images/f180-grid-gaming.png">
							<?php } ?>
							<div class="grid-overlay"></div>
							<div class="grid-info">
								<img src="images/grid-info-arrow.png">
								<h1>Photography</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="home-grid-software grid-block">
								<?php if ($styles['top-left-small-img'] != '') { ?>
								<img class="grid-image grayscale" src="<?php echo $styles['top-left-small-img'] ?>">
								<?php } else { ?>
								<img class="grid-image grayscale" src="images/f180-grid-software.png">
								<?php } ?>
								<div class="grid-overlay"></div>
								<div class="grid-info">
									<img src="images/grid-info-arrow.png">
									<h1>Photography</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
								<div class="home-grid-celebs grid-block">
									<?php if ($styles['bottom-mid-left-img'] != '') { ?>
									<img class="grid-image grayscale" src="<?php echo $styles['bottom-mid-left-img'] ?>">
									<?php } else { ?>
									<img class="grid-image grayscale" src="images/f180-grid-celebrities.png">
									<?php } ?>
									<div class="grid-overlay"></div>
									<div class="grid-info">
										<img src="images/grid-info-arrow.png">
										<h1>Celebrities</h1>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>
									<div class="home-grid-publishing grid-block">
										<?php if ($styles['bottom-right-img'] != '') { ?>
										<img class="grid-image grayscale" src="<?php echo $styles['bottom-right-img'] ?>">
										<?php } else { ?>
										<img class="grid-image grayscale" src="images/f180-grid-publishing.png">
										<?php } ?>
										<div class="grid-overlay"></div>
										<div class="grid-info">
											<img src="images/grid-info-arrow.png">
											<h1>Photography</h1>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua.</p>
											</div>
										</div>
										<div class="home-grid-textbooks grid-block">
											<?php if ($styles['bottom-left-img'] != '') { ?>
											<img class="grid-image grayscale" src="<?php echo $styles['bottom-left-img'] ?>">
											<?php } else { ?>
											<img class="grid-image grayscale" src="images/f180-grid-textbooks.png">
											<?php } ?>
											<div class="grid-overlay"></div>
											<div class="grid-info">
												<img src="images/grid-info-arrow.png">
												<h1>Photography</h1>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</div>
										</section>
										<aside class="home-sidebar">
											<img src="images/sidebar-blue-bar.png" alt="blue bar" />
											<div class="home-sidebar-top">
												<h1>This is a cool stacked headline for this section.</h1>
												<ul>
													<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
													<li>lLorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing lit.</li>
													<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
												</ul>

											</div>
											<img src="images/sidebar-blue-bar.png" alt="blue bar" />
											<div class="home-sidebar-bottom">
												<h1><span>subhead</span> title</h1>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
												<h1><span>subhead</span> title</h1>
												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
											</div>
										</aside>

										<footer>
											<div class="home-footer-media-icons">
												<a href=""><img src="images/facebook-icon.png" alt="facebook icon" /></a>
												<a href=""><img src="images/twitter-icon.png" alt="twitter icon" /></a>
											</div>
											<p>call us:<span> 855.fans.180 [ 855.326.7180 ]</span></p>

											<ul>
												<li><a href="">contact us</a></li>
												<li><a href="">conditions of use</a></li>
												<li><a href="">privacy notice</a></li>
											</ul>
											<img class="home-footer-banner" src="images/home-footer-banner.png" alt="" />
										</footer>
									</body>
									</html>
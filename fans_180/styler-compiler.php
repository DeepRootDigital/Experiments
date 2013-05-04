<?php


$content = array (
	'phone-number-text' => '855.fans.180 [ 855.326.7180 ]',

	'sidebar-title' => 'This is a cool stacked headline for this section.',
	'sidebar-content-item1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
	'sidebar-content-item2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing lit.',
	'sidebar-content-item3' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',

	/* Panel 1 */
	'panel1-title' => 'Music',
	'panel1-content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.',
	/* Panel 2 */
	'panel2-title' => 'Photography',
	'panel2-content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.',
	/* Panel 3 */
	'panel3-title' => 'Movies',
	'panel3-content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.',
	/* Panel 4 */
	'panel4-title' => 'Software',
	'panel4-content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.',
	/* Panel 5 */
	'panel5-title' => 'Textbooks',
	'panel5-content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.',
	/* Panel 6 */
	'panel6-title' => 'Celebrities',
	'panel6-content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.',
	/* Panel 7 */
	'panel7-title' => 'Gaming',
	'panel7-content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.',
	/* Panel 8 */
	'panel8-title' => 'E-books',
	'panel8-content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.',
	);
$styles = array (
	/* Main Settings */
	'background-image-url' => '',
	'background-color' => '',
	'link-color' => '',	
	
	/* Miscelanious Stuff */
	'logo-url' => '',
	'list-item-image-url' => '',
	'sign-in-button-image-url' => '',
	
	/* Image Overlays */
	'overlay-color' => '',
	'overlay-texture-image-url' => '',
	'overlay-text-color' => '',
	
	/* Top Sidebar */
	'sidebar-bar-image-url' => '',
	'sidebar-background-url' => '',
	'top-sidebar-headline-color' => '',
	'sidebar-image-url' => '',
	
	/* Bottom Sidebar */
	'sidebar-image-url' => '',
	'bottom-sidebar-headline-color' => '',

	/* Image Locations */
	'top-left-img' => '',
	'mid-left-img' => '',
	'top-left-small-img' => '',
	'bottom-left-img' => '',

	'top-right-img' => '',
	'mid-right-img' => '',
	'bottom-mid-left-img' => '',
	'bottom-right-img' => '',
	);

	?>

	<style>
	body {
		<?php if ($styles['background-image-url'] !== '') { ?>
			background-image:url('<?php echo $styles['background-image-url']; ?>');
			<?php } ?>
			<?php if ($styles['background-color'] !== '') { ?>
				background-color:<?php echo $styles['background-color']; ?>;
				<?php } ?>
			}
			nav ul li a:hover {
				<?php if ($styles['link-color'] !== '') { ?>
					color:<?php echo $styles['link-color']; ?>;
				}
				footer ul li a {
					color:<?php echo $styles['link-color']; ?>;
				}
				footer p span {
					color:<?php echo $styles['link-color']; ?>;
				}
				.header-phone-info span {
					color:<?php echo $styles['link-color']; ?>;
				}
				article p a {
					color:<?php echo $styles['link-color']; ?>;
				}
				article ul li a {
					color:<?php echo $styles['link-color']; ?>;
				}
				<?php } ?>
				.home-sidebar-top ul li {
					<?php if ($styles['list-item-image-url'] !== '') { ?>
						background:url('<?php echo $styles['list-item-image-url']; ?>') no-repeat scroll 0 4px transparent;
						<?php } ?>
					}
					#header-form-submit {
						<?php if ($styles['sign-in-button-image-url'] !== '') { ?>
							background-image:url('<?php echo $styles['sign-in-button-image-url']; ?>');
							<?php } ?>
						}	
						.grid-info {
							<?php if ($styles['overlay-color'] !== '') { ?>
								background:none repeat scroll 0 0 <?php echo $styles['overlay-color']; ?>;
								<?php } ?>
							}
							.grid-overlay {
								<?php if ($styles['overlay-texture-image-url'] !== '') { ?>
									background:url("<?php echo $styles['overlay-texture-image-url']; ?>") repeat-y scroll 0 0 transparent;
									<?php } ?>
								}
								.grid-info > h1 {
									<?php if ($styles['overlay-text-color'] !== '') { ?>
										color:<?php echo $styles['overlay-text-color']; ?>;
									}
									.grid-info > p {
										color:<?php echo $styles['overlay-text-color']; ?>;
										<?php } ?>
									}	
									.home-sidebar-top h1 {
										<?php if ($styles['top-sidebar-headline-color'] !== '') { ?>
											color:<?php echo $styles['top-sidebar-headline-color']; ?>;
											<?php } ?>
										}	
										.home-sidebar-bottom span {
											<?php if ($styles['bottom-sidebar-headline-color'] !== '') { ?>
												color:<?php echo $styles['bottom-sidebar-headline-color']; ?>;
											}
											.sub-page-left-content h1 {
												color:<?php echo $styles['bottom-sidebar-headline-color']; ?>;
											}
											<?php } ?>
											</style>
<?php

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
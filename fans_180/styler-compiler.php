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
	background-image:url('<?php echo $styles['background-image-url']; ?>');
	background-color:<?php echo $styles['background-color']; ?>;
	}
	nav ul li a:hover {
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
	.home-sidebar-top ul li {
	background:url('<?php echo $styles['list-item-image-url']; ?>') no-repeat scroll 0 4px transparent;
	}
	#header-form-submit {
	background-image:url('<?php echo $styles['sign-in-button-image-url']; ?>');
	}	
	.grid-info {
	background:none repeat scroll 0 0 <?php echo $styles['overlay-color']; ?>;
	}
	.grid-overlay {
	background:url("<?php echo $styles['overlay-texture-image-url']; ?>") repeat-y scroll 0 0 transparent
	}
	.grid-info > h1 {
	color:<?php echo $styles['overlay-text-color']; ?>;
	}
	.grid-info > p {
	color:<?php echo $styles['overlay-text-color']; ?>;
	}	
	.home-sidebar-top h1 {
	color:<?php echo $styles['top-sidebar-headline-color']; ?>;
	}	
	.home-sidebar-bottom span {
	color:<?php echo $styles['bottom-sidebar-headline-color']; ?>;
	}
</style>
<?php

/* Autocracy Dependencies */
require_once ( get_template_directory() . '/autocracy/autocracy.php' );
require_once ( get_template_directory() . '/autocracy/homepage-manager.php' );
require_once ( get_template_directory() . '/autocracy/sidebar-manager.php' );
require_once ( get_template_directory() . '/autocracy/theme-manager.php' );
require_once ( get_template_directory() . '/autocracy/service-manager.php' );
// Re-define meta box path and URL
define('RWMB_URL', trailingslashit(get_stylesheet_directory_uri() . '/autocracy/API/'));
define('RWMB_DIR', trailingslashit(get_template_directory() . '/autocracy/API/'));
// Include the meta box script
require_once RWMB_DIR . '/meta-box.php';
include get_template_directory() . '/autocracy/demo.php';

/* Add Theme Supports */
add_theme_support('menus');
add_theme_support('post-thumbnails');

/* Register Menu Areas */
register_nav_menu('Header Nav - Left', 'Left Navigation Menu');
register_nav_menu('Header Nav - Right', 'Right Navigation Menu');

register_nav_menu('Footer Nav', 'Footer Navigation Menu');

function autoc_get_img($id) {

	global $wpdb;
	$images = get_post_meta( get_the_ID(), $id, false );
	$images = implode( ',' , $images );

// Re-arrange images with 'menu_order'
	$images = $wpdb->get_col( "
		SELECT ID FROM {$wpdb->posts}
		WHERE post_type = 'attachment'
		AND ID in ({$images})
		ORDER BY menu_order ASC
		" );

	foreach ( $images as $att )
	{
    // Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
		$src = wp_get_attachment_image_src( $att, 'full' );
		$src = $src[0];
    // Show image
		echo "<img src='{$src}' />";
	}

}

/* Register Custom Post Types */

function create_post_type() {
	register_post_type('Services', array(
		'labels' => array(
			'name' => __('Services'),
			'singular_name' => __('Services')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'Services'),
		)
	);
	register_post_type('Casestudies', array(
		'labels' => array(
			'name' => __('Case Studies'),
			'singular_name' => __('Case Study'),
			),
		'taxonomies'=>array('category'),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'Casestudies'),
		'supports' => array( 'title', 'editor', 'author', 'thumbnail',),
		)
	);
	register_post_type('bms_employees', array(
		'labels' => array(
			'name' => __('Employee Profiles'),
			'singular_name' => __('Employee Profile'),
			),
		'taxonomies'=>array('category'),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'Employees'),
		'supports' => array( 'title', 'editor', 'author', 'thumbnail',),
		)
	);
}
add_action('init', 'create_post_type');

function email_form() {
	$mainoptions = get_option('main_theme_options');
	$to = $mainoptions['emailaddress'];
	$email = $_REQUEST['email'];
	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
	$phone = $_REQUEST['phone'];
	$headers = 'From:'. $email;
	$message = 'Contact Form Request from '. $firstname .' '. $lastname . ' phone number is ' . $phone;
	mail($to,'Contact Form Request',$message,$headers);
}
?>
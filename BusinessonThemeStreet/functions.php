<?php

/* Autocracy Dependencies */
require_once ( get_template_directory() . '/autocracy/autocracy.php' );
require_once ( get_template_directory() . '/autocracy/homepage-manager.php' );
require_once ( get_template_directory() . '/autocracy/sidebar-manager.php' );
require_once ( get_template_directory() . '/autocracy/theme-manager.php' );
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
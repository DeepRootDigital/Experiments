<?php
require_once ( get_template_directory() . '/autocracy/autocracy.php' );
require_once ( get_template_directory() . '/autocracy/homepage-manager.php' );
require_once ( get_template_directory() . '/autocracy/theme-manager.php' );
// Re-define meta box path and URL
define('RWMB_URL', trailingslashit(get_stylesheet_directory_uri() . '/autocracy/API/'));
define('RWMB_DIR', trailingslashit(get_template_directory() . '/autocracy/API/'));
// Include the meta box script
require_once RWMB_DIR . '/meta-box.php';
include get_template_directory() . '/autocracy/demo.php';
add_theme_support('menus');
register_nav_menu('Header Nav', 'Navigation Menu');
register_nav_menu('Footer Nav Left', 'Footer Menu Left');
register_nav_menu('Footer Nav Right', 'Footer Menu Right');
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
?>
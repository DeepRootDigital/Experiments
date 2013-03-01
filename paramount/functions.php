<?php
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
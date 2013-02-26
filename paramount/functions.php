<?php add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' ); 
	function create_post_type() {
	    register_post_type(
	    	'Services', array(
	        'labels' => array(
	            'name' => __('Services'),
	            'singular_name' => __('Service')
	        ),
	        'public' => true,
	        'has_archive' => true,
	        'rewrite' => array('slug' => 'Services'),
	            )
	    );
	    register_post_type(
	    	'Testimonials', array(
	        'labels' => array(
	            'name' => __('Testimonials'),
	            'singular_name' => __('Testimonial')
	        ),
	        'public' => true,
	        'has_archive' => true,
	        'rewrite' => array('slug' => 'Testimonials'),
	            )
	    );
	 }
	 add_action('init', 'create_post_type');
 ?>
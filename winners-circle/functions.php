<?php
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
add_theme_support('post-thumbnails');
add_theme_support('menus');
register_nav_menu('Header Nav', 'Navigation Menu');
function create_post_type() {
 register_post_type('Houses', array(
  'labels' => array(
   'name' => __('Houses'),
   'singular_name' => __('House')
   ),
  'public' => true,
  'has_archive' => true,
  'rewrite' => array('slug' => 'Houses'),
  )
 );
 register_post_type('FAQ', array(
  'labels' => array(
   'name' => __('FAQ'),
   'singular_name' => __('FAQ')
   ),
  'public' => true,
  'has_archive' => true,
  'rewrite' => array('slug' => 'FAQ'),
  )
 );
}
add_action('init', 'create_post_type');
//BLOG POST LENGTH LIMIT
function custom_excerpt_length( $length ) {
	return 8;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//RETURNS ... at the end of each BLOG post
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
// function remove_menu_items() {
//   global $menu;
//   $restricted = array(__('Pages'));
//   end ($menu);
//   while (prev($menu)){
//     $value = explode(' ',$menu[key($menu)][0]);
//     if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){
//       unset($menu[key($menu)]);}
//     }
//   }

// add_action('admin_menu', 'remove_menu_items');
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

?>
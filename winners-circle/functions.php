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
}
add_action('init', 'create_post_type');

//BLOG POST LENGTH LIMIT
function custom_excerpt_length( $length ) {
	return 20;
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

?>


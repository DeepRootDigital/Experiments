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
add_theme_support('post-thumbnails');
function custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function new_excerpt_more( $more ) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>
<?php
function send_email() {
/* Nicks Mailer Program V1.0 */
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  $mainoptions = get_option('main_theme_options');
  //send email
  $fromemail = $_REQUEST['email'];
  $toaddress = $mainoptions['emailaddress'];
  $name = $_REQUEST['name'];
  $phone = $_REQUEST['phone'];
  $subject = 'Feasibility Study Request';
  $message = $name.' has submitted a call request at the number '.$phone.'.';
  mail($toaddress, $subject,
  $message, "From:" . $fromemail);
  header('Location: index.php');
  }
}
?>
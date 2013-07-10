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
// Disable Admin Bar for all users
add_filter('show_admin_bar', '__return_false');
// Remove Admin Bar Options from all users' Profile page
add_action('admin_print_scripts-profile.php', 'hide_admin_bar_prefs');

function hide_admin_bar_prefs() {
    ?>
    <style type="text/css">
    .show-admin-bar { display: none; }
    </style>
    <?php
}
add_theme_support('post-thumbnails');
add_image_size('gallery-thumb', 220, 220, true);
add_image_size('gallery-img', 440, 440, true);
add_image_size('post-img', 580, 285, true);
register_nav_menu('Top Nav', 'Navigation Menu');
register_nav_menu('Footer Nav', 'Footer Menu');
function create_post_type() {
    register_post_type('Recipes', array(
        'labels' => array(
            'name' => __('Recipes'),
            'singular_name' => __('Recipes')
            ),
        'taxonomies' => array('post_tag'),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'Recipes'),
        'supports' => array(
            'title',
            'revisions',
            'thumbnail',
            'author',
            'editor',
            ),
        )
    );
    register_post_type('Gallery', array(
        'labels' => array(
            'name' => __('Gallery'),
            'singular_name' => __('Gallery')
            ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'Gallery'),
        'supports' => array(
            'title',
            'revisions',
            'thumbnail',
            'author',
            )
        )
    );
    register_post_type('Employees', array(
        'labels' => array(
            'name' => __('Employees'),
            'singular_name' => __('Employees')
            ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'Employees'),
        'supports' => array(
            'title',
            'revisions',
            'author',
            'editor',
            )
        )
    );
    register_post_type('Partners', array(
        'labels' => array(
            'name' => __('Partners'),
            'singular_name' => __('Partner')
            ),
        'taxonomies' => array('post_tag'),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'Partners'),
        'supports' => array(
            'title',
            'editor',
            'revisions',
            'thumbnail',
            'author',
            
            )
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
        'supports' => array(
            'title',
            'editor',
            'revisions',
            'thumbnail',
            'author',
            )
        )
    );
}
add_action('init', 'create_post_type');
function custom_excerpt_length( $length ) {
	return 14;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
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
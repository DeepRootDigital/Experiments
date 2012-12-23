<?php
add_action('admin_init', 'theme_options_init');
add_action('admin_menu', 'theme_options_add_page');

/**
 * Init plugin options to white list our options
 */
function theme_options_init() {
    register_setting('sample_options', 'sample_theme_options', 'theme_options_validate');
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
    add_theme_page(__('Theme Options', 'sampletheme'), __('Theme Options', 'sampletheme'), 'edit_theme_options', 'theme_options', 'theme_options_do_page');
}

/**
 * Create the options page
 */
function theme_options_do_page() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_script('jquery');
    wp_enqueue_style('thickbox');
    wp_enqueue_script('my-theme-options', get_template_directory_uri() . '/js/theme-options.js');
    ?>
    <div class="wrap">
        <?php
        screen_icon();
        echo "<h2>" . get_current_theme() . __(' Theme Options', 'sampletheme') . "</h2>";
        ?>

        <?php if (false !== $_REQUEST['settings-updated']) : ?>
            <div class="updated fade"><p><strong><?php _e('Options saved', 'sampletheme'); ?></strong></p></div>
        <?php endif; ?>

        <form method="post" action="options.php">
            <?php settings_fields('sample_options'); ?>
            <?php $options = get_option('sample_theme_options'); ?>

            <table class="form-table">    

                <tr valign="top">
                    <td>Upload Image</td>
                    <td><label for="upload_image">
                            <input id="upload_image" type="text" size="36" name="sample_theme_options[logo]" value="<?php esc_attr_e($options['logo']); ?>" />
                            <input id="upload_image_button" type="button" value="Upload Image" />
                            <br />Enter an URL or upload an image for the banner.
                        </label>
                    </td>
                </tr>
                
                <th><h3>Social Media Options</h3></th>
                
                <tr valign="top"><th scope="row">Facebook URL</th>
                    <td>
                        <input type="text" name="sample_theme_options[facebookurl]" value="<?php esc_attr_e($options['facebookurl']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row">Twitter URL</th>
                    <td>
                        <input type="text" name="sample_theme_options[twitterurl]" value="<?php esc_attr_e($options['twitterurl']); ?>" />
                    </td>
                </tr>
            </table>
            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Options', 'sampletheme'); ?>" />
            </p>
        </form>
    </div>
    <?php
}

function theme_options_validate($input) {
    global $select_options, $radio_options;
    // Our checkbox value is either 0 or 1
    if (!isset($input['option1']))
        $input['option1'] = null;
    $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
    // Say our text option must be safe text with no HTML tags
    $input['sometext'] = wp_filter_nohtml_kses($input['sometext']);
    // Our select option must actually be in our array of select options
    // Say our textarea option must be safe text with the allowed tags for posts
    $input['sometextarea'] = wp_filter_post_kses($input['sometextarea']);
    return $input;
}
?>
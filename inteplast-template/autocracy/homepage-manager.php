<?php

/**
 * Create the options page
 */
function theme_options_do_page() {
    ?>
    <div class="wrap">
        <?php
        screen_icon();
        echo "<h2>" . get_current_theme() . __(' Homepage Manager', 'sampletheme') . "</h2>";
        ?>

        <?php if (false !== $_REQUEST['settings-updated']) : ?>
            <div class="updated fade"><p><strong><?php _e('Options saved', 'sampletheme'); ?></strong></p></div>
        <?php endif; ?>

        <form method="post" action="options.php">
            <?php settings_fields('sample_options'); ?>
            <?php $options = get_option('sample_theme_options'); ?>

            <table class="form-table">
                               <th><h3>Slider Images</h3></th>
                <tr valign="top"><th scope="row"><?php _e('Slider Image Link 1', 'sampletheme'); ?></th>
                    <td>
                        <a href="upload.php">Upload</a> <input id="sample_theme_options[sliderimg1]" class="regular-text" type="text" name="sample_theme_options[sliderimg1]" value="<?php esc_attr_e($options['sliderimg1']); ?>" />
                    </td>
                </tr>
                <tr valign="top"><th scope="row"><?php _e('Slider Image Link 2', 'sampletheme'); ?></th>
                    <td>
                        <a href="upload.php">Upload</a> <input id="sample_theme_options[sliderimg2]" class="regular-text" type="text" name="sample_theme_options[sliderimg2]" value="<?php esc_attr_e($options['sliderimg2']); ?>" />
                    </td>
                </tr>
                 <tr valign="top"><th scope="row"><?php _e('Slider Image Link 3', 'sampletheme'); ?></th>
                    <td>
                        <a href="upload.php">Upload</a> <input id="sample_theme_options[sliderimg3]" class="regular-text" type="text" name="sample_theme_options[sliderimg3]" value="<?php esc_attr_e($options['sliderimg3']); ?>" />
                    </td>
                </tr>
                 <tr valign="top"><th scope="row"><?php _e('Slider Image Link 4', 'sampletheme'); ?></th>
                    <td>
                        <a href="upload.php">Upload</a> <input id="sample_theme_options[sliderimg4]" class="regular-text" type="text" name="sample_theme_options[sliderimg4]" value="<?php esc_attr_e($options['sliderimg4']); ?>" />
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
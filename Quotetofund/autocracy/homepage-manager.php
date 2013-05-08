<?php
/* Creates the Theme Options Page */

function theme_options_do_page() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_script('jquery');
    wp_enqueue_style('thickbox');
    wp_enqueue_script('my-theme-options', get_template_directory_uri() . '/js/theme-options.js', false, null);
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
                <!--******************-->
                <!-- HOMEPAGE CONTENT -->
                <!--******************-->
                <h1 style="margin-top:30px">Winner Circle Content</h1>
                <h3>Homepage Content Area 1</h3>
                <h4>Content Title</h4>
                <input type="text" size="36" name="sample_theme_options[p1title]" value="<?php esc_attr_e($options['p1title']); ?>" />                 
                <h4>Content Text:</h4>
                <textarea id="sample_theme_options[p1text]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[p1text]"><?php echo esc_textarea($options['p1text']); ?></textarea>
                <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e('Save Options', 'sampletheme'); ?>" />
                </p>
            </table>
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
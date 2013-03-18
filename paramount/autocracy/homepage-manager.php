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
                <th><h3>Slider Images</h3></th>
                <tr valign="top">
                    <td>Upload Slider Image 1</td>
                    <td><label for="upload_image">
                            <input class="upload_image" type="text" size="36" name="sample_theme_options[sliderimg1]" value="<?php esc_attr_e($options['sliderimg1']); ?>" />
                            <input  class="upload_image_button" type="button" value="Upload Image" />
                            <br />Enter an URL or upload an image for the banner.
                        </label>
                    </td>
                </tr>
                <tr valign="top">
                    <td>Upload Slider Image 2</td>
                    <td><label for="upload_image">
                            <input  class="upload_image" type="text" size="36" name="sample_theme_options[sliderimg2]" value="<?php esc_attr_e($options['sliderimg2']); ?>" />
                            <input  class="upload_image_button" type="button" value="Upload Image" />
                            <br />Enter an URL or upload an image for the banner.
                        </label>
                    </td>
                </tr>
                <tr valign="top">
                    <td>Upload Slider Image 3</td>
                    <td><label for="upload_image">
                            <input  class="upload_image" type="text" size="36" name="sample_theme_options[sliderimg3]" value="<?php esc_attr_e($options['sliderimg3']); ?>" />
                            <input  class="upload_image_button" type="button" value="Upload Image" />
                            <br />Enter an URL or upload an image for the banner.
                        </label>
                    </td>
                </tr>
                <tr valign="top">
                    <td>Upload Slider Image 4</td>
                    <td><label for="upload_image">
                            <input  class="upload_image" type="text" size="36" name="sample_theme_options[sliderimg4]" value="<?php esc_attr_e($options['sliderimg4']); ?>" />
                            <input  class="upload_image_button" type="button" value="Upload Image" />
                            <br />Enter an URL or upload an image for the banner.
                        </label>
                    </td>
                </tr>
                <tr valign="top">
                    <td>Upload Slider Image 5</td>
                    <td><label for="upload_image">
                            <input  class="upload_image" type="text" size="36" name="sample_theme_options[sliderimg5]" value="<?php esc_attr_e($options['sliderimg5']); ?>" />
                            <input  class="upload_image_button" type="button" value="Upload Image" />
                        <br />Enter an URL or upload an image for the banner.</td>
                    </label>
                    </td>
                </tr>
                <td>
                    <h3>Grid Panel 1</h3>
                <tr valign="top">
                    <td>Panel Title:
                        <input type="text" size="36" name="sample_theme_options[p1title]" value="<?php esc_attr_e($options['p1title']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                <label for="upload_image">
                    <td>Panel Image:<br/>
                        <input  class="upload_image" type="text" size="36" name="sample_theme_options[p1img]" value="<?php esc_attr_e($options['p1img']); ?>" />
                        <input  class="upload_image_button" type="button" value="Upload Image" />
                        <br />Enter an URL or upload an image for the banner.
                </label>
                </tr>    
                <tr>
                    <td>
                        Panel Text:
                        <textarea id="sample_theme_options[p1text]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[p1text]"><?php echo esc_textarea($options['p1text']); ?></textarea></td>
                </tr>
                <tr valign="top">
                    <td>Panel Link:
                        <input type="text" size="36" name="sample_theme_options[p1link]" value="<?php esc_attr_e($options['p1link']); ?>" />
                    </td>
                </tr>
                </td>
                <td>
                    <h3>Grid Panel 2</h3>
                <tr valign="top">
                    <td>Panel Title:
                        <input type="text" size="36" name="sample_theme_options[p2title]" value="<?php esc_attr_e($options['p2title']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <td>Panel Image:<br/>
                        <label for="upload_image">
                            <input  class="upload_image" type="text" size="36" name="sample_theme_options[p2img]" value="<?php esc_attr_e($options['p2img']); ?>" />
                            <input  class="upload_image_button" type="button" value="Upload Image" />
                            <br />Enter an URL or upload an image for the banner.
                        </label>
                    </td>
                </tr>    
                <tr>
                    <td>
                        Panel Text:
                        <textarea id="sample_theme_options[p2text]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[p2text]"><?php echo esc_textarea($options['p2text']); ?></textarea></td>
                </tr>
                <tr valign="top">
                    <td>Panel Link:
                        <input type="text" size="36" name="sample_theme_options[p2link]" value="<?php esc_attr_e($options['p2link']); ?>" />
                    </td>
                </tr>
                </td>
                <td>
                    <h3>Grid Panel 3</h3>
                <tr valign="top">
                    <td>Panel Title:
                        <input type="text" size="36" name="sample_theme_options[p3title]" value="<?php esc_attr_e($options['p3title']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <td>Panel Image:<br/>
                        <label for="upload_image">
                            <input  class="upload_image" type="text" size="36" name="sample_theme_options[p3img]" value="<?php esc_attr_e($options['p3img']); ?>" />
                            <input  class="upload_image_button" type="button" value="Upload Image" />
                            <br />Enter an URL or upload an image for the banner.
                        </label>
                    </td>
                </tr>    
                <tr>
                    <td>
                        Panel Text:
                        <textarea id="sample_theme_options[p3text]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[p3text]"><?php echo esc_textarea($options['p1text']); ?></textarea></td>
                </tr>
                <tr valign="top">
                    <td>Panel Link:
                        <input type="text" size="36" name="sample_theme_options[p3link]" value="<?php esc_attr_e($options['p3link']); ?>" />
                    </td>
                </tr>
                </td>
                <td><h3>Grid Panel 4</h3>
                <tr valign="top">
                    <td>Panel Title:
                        <input type="text" size="36" name="sample_theme_options[p4title]" value="<?php esc_attr_e($options['p4title']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <td>Panel Image:<br/>
                        <label for="upload_image">
                            <input  class="upload_image" type="text" size="36" name="sample_theme_options[p4img]" value="<?php esc_attr_e($options['p4img']); ?>" />
                            <input  class="upload_image_button" type="button" value="Upload Image" />
                            <br />Enter an URL or upload an image for the banner.
                        </label>
                    </td>
                </tr>    
                <tr>
                    <td>
                        Panel Text:
                        <textarea id="sample_theme_options[p4text]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[p4text]"><?php echo esc_textarea($options['p4text']); ?></textarea></td>
                </tr>
                <tr valign="top">
                    <td>Panel Link:
                        <input type="text" size="36" name="sample_theme_options[p4link]" value="<?php esc_attr_e($options['p4link']); ?>" />
                    </td>
                </tr>
                </td>
                <td><h3>Grid Panel 5</h3>
                <tr valign="top">
                    <td>Panel Title:
                        <input type="text" size="36" name="sample_theme_options[p5title]" value="<?php esc_attr_e($options['p5title']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <td>Panel Image:<br/>
                        <label for="upload_image">
                            <input  class="upload_image" type="text" size="36" name="sample_theme_options[p5img]" value="<?php esc_attr_e($options['p5img']); ?>" />
                            <input  class="upload_image_button" type="button" value="Upload Image" />
                            <br />Enter an URL or upload an image for the banner.
                        </label>
                    </td>
                </tr>    
                <tr>
                    <td>
                        Panel Text:
                        <textarea id="sample_theme_options[p5text]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[p5text]"><?php echo esc_textarea($options['p5text']); ?></textarea></td>
                </tr>
                <tr valign="top">
                    <td>Panel Link:
                        <input type="text" size="36" name="sample_theme_options[p5link]" value="<?php esc_attr_e($options['p5link']); ?>" />
                    </td>
                </tr>
                </td>
                <td><h3>Grid Panel 6</h3>
                <tr valign="top">
                    <td>Panel Title:
                        <input type="text" size="36" name="sample_theme_options[p6title]" value="<?php esc_attr_e($options['p6title']); ?>" />
                    </td>
                </tr>
                <tr valign="top">
                    <td>Panel Image:<br/>
                        <label for="upload_image">
                            <input  class="upload_image" type="text" size="36" name="sample_theme_options[p6img]" value="<?php esc_attr_e($options['p6img']); ?>" />
                            <input  class="upload_image_button" type="button" value="Upload Image" />
                            <br />Enter an URL or upload an image for the banner.
                        </label>
                    </td>
                </tr>    
                <tr>
                    <td>
                        Panel Text:
                        <textarea id="sample_theme_options[p6text]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[p6text]"><?php echo esc_textarea($options['p6text']); ?></textarea></td>
                </tr>
                <tr valign="top">
                    <td>Panel Link:
                        <input type="text" size="36" name="sample_theme_options[p6link]" value="<?php esc_attr_e($options['p6link']); ?>" />
                    </td>
                </tr>
                </td>
                <td><h3>HomePage Content Area 1</h3>
                <tr valign="top">
                    <td>Panel Title:
                        <input type="text" size="36" name="sample_theme_options[hp1title]" value="<?php esc_attr_e($options['hp1title']); ?>" />
                    </td>
                    <td>
                        Panel Text:
                        <textarea id="sample_theme_options[hp1text]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[hp1text]"><?php echo esc_textarea($options['hp1text']); ?></textarea>
                    </td>
                </tr>
            </td>
            <td><h3>HomePage Content Area 2</h3>
                <tr valign="top">
                    <td>Panel Title:
                        <input type="text" size="36" name="sample_theme_options[hp2title]" value="<?php esc_attr_e($options['hp2title']); ?>" />
                    </td>
                    <td>
                        Panel Text:
                        <textarea id="sample_theme_options[hp2text]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[hp2text]"><?php echo esc_textarea($options['hp2text']); ?></textarea>
                    </td>
                </tr>
            </td>
            <tr>
                <td><h3>Quote Text</h3>
                        <textarea id="sample_theme_options[quotetext]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[quotetext]"><?php echo esc_textarea($options['quotetext']); ?></textarea>
                        Author:<input type="text" size="36" name="sample_theme_options[quoteauthor]" value="<?php esc_attr_e($options['quoteauthor']); ?>" />
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
    return $input;
}
?>
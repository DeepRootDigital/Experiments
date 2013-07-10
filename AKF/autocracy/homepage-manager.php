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
            <td>
                Slider Slide Text:
                <input type="text" size="36" name="sample_theme_options[slidetext1]" value="<?php esc_attr_e($options['slidetext1']); ?>" /> 
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
        <td>
            Slider Slide Text:
            <input type="text" size="36" name="sample_theme_options[slidetext2]" value="<?php esc_attr_e($options['slidetext2']); ?>" /> 
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
    <td>
        Slider Slide Text:
        <input type="text" size="36" name="sample_theme_options[slidetext3]" value="<?php esc_attr_e($options['slidetext3']); ?>" /> 
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
<td>
    Slider Slide Text:
    <input type="text" size="36" name="sample_theme_options[slidetext4]" value="<?php esc_attr_e($options['slidetext4']); ?>" /> 
</td>
</tr>
<tr valign="top">
    <td>Upload Slider Image 5</td>
    <td><label for="upload_image">
        <input  class="upload_image" type="text" size="36" name="sample_theme_options[sliderimg5]" value="<?php esc_attr_e($options['sliderimg5']); ?>" />
        <input  class="upload_image_button" type="button" value="Upload Image" />
        <br />Enter an URL or upload an image for the banner.
    </label>
</td>
<td>
    Slider Slide Text:
    <input type="text" size="36" name="sample_theme_options[slidetext5]" value="<?php esc_attr_e($options['slidetext5']); ?>" /> 
</td>
</tr>
<th><h3>Homepage Content</h3></th>
<tr valign="top">
    <td>Slider SideBar Panel 1 Title</td>
    <td>
        <input type="text" size="36" name="sample_theme_options[sptitle1]" value="<?php esc_attr_e($options['sptitle1']); ?>" />                           
    </td>
</tr>
<tr valign="top">
    <td>Slider SideBar Panel 1 Text</td>
    <td>
        <textarea id="sample_theme_options[sptext1]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[sptext1]"><?php echo esc_textarea($options['sptext1']); ?></textarea>                          
    </td>
</tr>
<tr valign="top">
    <td>Slider SideBar Panel 1 Link</td>
    <td>
        <input type="text" size="36" name="sample_theme_options[splink1]" value="<?php esc_attr_e($options['splink1']); ?>" />                           
    </td>
</tr>
<tr>
    <td><hr/></td>
    <td><hr/></td>
</tr>
<tr valign="top">
    <td>Slider SideBar Panel 2 Title</td>
    <td>
        <input type="text" size="36" name="sample_theme_options[sptitle2]" value="<?php esc_attr_e($options['sptitle2']); ?>" />                           
    </td>
</tr>
<tr valign="top">
    <td>Slider SideBar Panel 2 Text</td>
    <td>
        <textarea id="sample_theme_options[sptext2]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[sptext2]"><?php echo esc_textarea($options['sptext2']); ?></textarea>                           
    </td>
</tr>
<tr valign="top">
    <td>Slider SideBar Panel 2 Link</td>
    <td>
        <input type="text" size="36" name="sample_theme_options[splink2]" value="<?php esc_attr_e($options['splink2']); ?>" />                           
    </td>
</tr>
<tr>
    <td><hr/></td>
    <td><hr/></td>
</tr>
<tr valign="top">
    <td>Slider SideBar Panel 3 Title</td>
    <td>
        <input type="text" size="36" name="sample_theme_options[sptitle3]" value="<?php esc_attr_e($options['sptitle3']); ?>" />                           
    </td>
</tr>
<tr valign="top">
    <td>Slider SideBar Panel 3 Text</td>
    <td>
       <textarea id="sample_theme_options[sptext3]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[sptext3]"><?php echo esc_textarea($options['sptext3']); ?></textarea>                      
   </td>
</tr>
<tr valign="top">
    <td>Slider SideBar Panel 3 Link</td>
    <td>
        <input type="text" size="36" name="sample_theme_options[splink3]" value="<?php esc_attr_e($options['splink3']); ?>" />                           
    </td>
</tr>
<tr>
    <td><hr/></td>
    <td><hr/></td>
</tr>
<tr valign="top">
    <td>
        Mission Text
        <textarea id="sample_theme_options[missiontext]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[missiontext]"><?php echo esc_textarea($options['missiontext']); ?></textarea>
    </td>
</tr>
<tr>
    <td><hr/></td>
    <td><hr/></td>
</tr>
<tr>
    <td>
        <h3>Gridspace Images</h3>
        Gridspace Area 1 Text:
        <input type="text" size="36" name="sample_theme_options[gspace1txt]" value="<?php esc_attr_e($options['gspace1txt']); ?>" /></td>
    </td>
</tr>
<tr valign="top">
    <td>
    Gridspace Area 1 Image:
    <label for="upload_image">
        <input class="upload_image" type="text" size="36" name="sample_theme_options[gspace1img]" value="<?php esc_attr_e($options['gspace1img']); ?>" />
        <input class="upload_image_button" type="button" value="Upload Image" />
        <br />Enter an URL or upload an image for the banner.
    </label>
</td>
</tr>
<tr>
    <td>
        Gridspace Area 2 Text:
        <input type="text" size="36" name="sample_theme_options[gspace2txt]" value="<?php esc_attr_e($options['gspace2txt']); ?>" /></td>
    </td>
</tr>
<tr valign="top">
    <td>
    Gridspace Area 2 Image:
    <label for="upload_image">
        <input class="upload_image" type="text" size="36" name="sample_theme_options[gspace2img]" value="<?php esc_attr_e($options['gspace2img']); ?>" />
        <input class="upload_image_button" type="button" value="Upload Image" />
        <br />Enter an URL or upload an image for the banner.
    </label>
</td>
</tr>
<tr>
    <td>
        Gridspace Area 3 Text:
        <input type="text" size="36" name="sample_theme_options[gspace3txt]" value="<?php esc_attr_e($options['gspace3txt']); ?>" /></td>
    </td>
</tr>
<tr valign="top">
    <td>
    Gridspace Area 3 Image:
    <label for="upload_image">
        <input class="upload_image" type="text" size="36" name="sample_theme_options[gspace3img]" value="<?php esc_attr_e($options['gspace3img']); ?>" />
        <input class="upload_image_button" type="button" value="Upload Image" />
        <br />Enter an URL or upload an image for the banner.
    </label>
</td>
</tr>
<tr>
    <td>
        Gridspace Area 4 Text:
        <input type="text" size="36" name="sample_theme_options[gspace4txt]" value="<?php esc_attr_e($options['gspace4txt']); ?>" /></td>
    </td>
</tr>
<tr valign="top">
    <td>
    Gridspace Area 4 Image:
    <label for="upload_image">
        <input class="upload_image" type="text" size="36" name="sample_theme_options[gspace4img]" value="<?php esc_attr_e($options['gspace4img']); ?>" />
        <input class="upload_image_button" type="button" value="Upload Image" />
        <br />Enter an URL or upload an image for the banner.
    </label>
</td>
</tr>
<th><h3>Homepage Panel 1</h3></th>
<tr valign="top">
    <td>Panel Title:
        <input type="text" size="36" name="sample_theme_options[p1title]" value="<?php esc_attr_e($options['p1title']); ?>" /></td>
    </tr>
    <tr><td>
        Panel Text:
        <textarea id="sample_theme_options[p1text]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[p1text]"><?php echo esc_textarea($options['p1text']); ?></textarea></td>
    </tr>
    <tr valign="top">
        <td>Panel Image</td>
        <td><label for="upload_image">
            <input class="upload_image" type="text" size="36" name="sample_theme_options[p1img]" value="<?php esc_attr_e($options['p1img']); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
            <br />Enter an URL or upload an image for the banner.
        </label>
    </td>
</tr>
<tr valign="top">
    <td>Panel Link 1 Name:
        <input type="text" size="36" name="sample_theme_options[p1name1]" value="<?php esc_attr_e($options['p1name1']); ?>" /><br/>
        Panel Link 1:
        <input type="text" size="36" name="sample_theme_options[p1link1]" value="<?php esc_attr_e($options['p1link1']); ?>" /></td>

    </tr>
    <tr valign="top">
        <td>Panel Link 2 Name:
            <input type="text" size="36" name="sample_theme_options[p1name2]" value="<?php esc_attr_e($options['p1name2']); ?>" /><br/>
            Panel Link 2:
            <input type="text" size="36" name="sample_theme_options[p1link2]" value="<?php esc_attr_e($options['p1link2']); ?>" /></td>
        </tr>
        <th><h3>Homepage Panel 2</h3></th>
        <tr valign="top">
            <td>Panel Title:
                <input type="text" size="36" name="sample_theme_options[p2title]" value="<?php esc_attr_e($options['p2title']); ?>" /></td>

            </tr>
            <tr><td>
                Panel Text:
                <textarea id="sample_theme_options[p2text]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[p2text]"><?php echo esc_textarea($options['p2text']); ?></textarea></td>
            </tr>
            <tr valign="top">
                <td>Panel Image</td>
                <td><label for="upload_image">
                    <input class="upload_image" type="text" size="36" name="sample_theme_options[p2img]" value="<?php esc_attr_e($options['p2img']); ?>" />
                    <input class="upload_image_button" type="button" value="Upload Image" />
                    <br />Enter an URL or upload an image for the banner.
                </label>
            </td>
        </tr>
        <tr valign="top">
            <td>Panel Link 1 Name:
                <input type="text" size="36" name="sample_theme_options[p2name1]" value="<?php esc_attr_e($options['p2name1']); ?>" /><br/>
                Panel Link 1:
                <input type="text" size="36" name="sample_theme_options[p2link1]" value="<?php esc_attr_e($options['p2link1']); ?>" /></td>

            </tr>
            <tr valign="top">
                <td>Panel Link 2 Name:
                    <input type="text" size="36" name="sample_theme_options[p2name2]" value="<?php esc_attr_e($options['p2name2']); ?>" /><br/>
                    Panel Link 2:
                    <input type="text" size="36" name="sample_theme_options[p2link2]" value="<?php esc_attr_e($options['p2link2']); ?>" /></td>
                </tr>
                <th><h3>Homepage Panel 3</h3></th>
                <tr valign="top">
                    <td>Panel Title:
                        <input type="text" size="36" name="sample_theme_options[p3title]" value="<?php esc_attr_e($options['p3title']); ?>" /></td>

                    </tr>
                    <tr><td>
                        Panel Text:
                        <textarea id="sample_theme_options[p3text]" class="large-text" style="height:130px; width:375px;" name="sample_theme_options[p3text]"><?php echo esc_textarea($options['p3text']); ?></textarea></td>
                    </tr>
                    <tr valign="top">
                        <td>Panel Image</td>
                        <td><label for="upload_image">
                            <input class="upload_image" type="text" size="36" name="sample_theme_options[p3img]" value="<?php esc_attr_e($options['p3img']); ?>" />
                            <input class="upload_image_button" type="button" value="Upload Image" />
                            <br />Enter an URL or upload an image for the banner.
                        </label>
                    </td>
                </tr>
                <tr valign="top">
                    <td>Panel Link 1 Name:
                        <input type="text" size="36" name="sample_theme_options[p3name1]" value="<?php esc_attr_e($options['p3name1']); ?>" /><br/>
                        Panel Link 1:
                        <input type="text" size="36" name="sample_theme_options[p3link1]" value="<?php esc_attr_e($options['p3link1']); ?>" /></td>

                    </tr>
                    <tr valign="top">
                        <td>Panel Link 2 Name:
                            <input type="text" size="36" name="sample_theme_options[p3name2]" value="<?php esc_attr_e($options['p3name2']); ?>" /><br/>
                            Panel Link 2:
                            <input type="text" size="36" name="sample_theme_options[p3link2]" value="<?php esc_attr_e($options['p3link2']); ?>" /></td>
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
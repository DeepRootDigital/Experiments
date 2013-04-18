<?php

/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 */
/* * ******************* META BOX DEFINITIONS ********************** */

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'YOUR_PREFIX_';

global $meta_boxes;

$meta_boxes = array();

// Employees CCK
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'house',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Home Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('houses'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        // IMAGE UPLOAD
        array(
            'name' => 'House Model',
            'id' => 'housemodel',
            'type' => 'text',
        ),
        array(
            'name' => 'Bedrooms',
            'id' => 'bedrooms',
            'type' => 'select',
            'options' => array (
                'value1' => 'One Bedroom',
                'value2' => 'Two Bedrooms',
                'value3' => 'Three + Bedrooms',
                ),
        ),
        array(
            'name' => 'Feature 1',
            'id' => 'feature1',
            'type' => 'text',
        ),
        array(
            'name' => 'Feature 2',
            'id' => 'feature2',
            'type' => 'text',
        ),
        array(
            'name' => 'Feature 3',
            'id' => 'feature3',
            'type' => 'text',
        ),
        array(
            'name' => 'Multiple Floors',
            'id' => 'floors',
            'type' => 'checkbox',
        ),
        array(
            'name' => 'Main Image Photo',
            'desc' => '',
            'id' => "mainimage",
            'type' => 'plupload_image',
            'max_file_uploads' => 8,
        ),
        array(
            'name' => 'Floorplan Photo',
            'desc' => '',
            'id' => "floorplan",
            'type' => 'plupload_image',
            'max_file_uploads' => 1,
        ),
        array(
            'name' => 'Link Image 1 Photo',
            'desc' => '',
            'id' => "lnkimage1",
            'type' => 'plupload_image',
            'max_file_uploads' => 1,
        ),
        array(
            'name' => 'Link Image 2 Photo',
            'desc' => '',
            'id' => "lnkimage2",
            'type' => 'plupload_image',
            'max_file_uploads' => 1,
        ),
    ),
);

// Ingredients CCK
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'recipemetacck',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Slider',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('page'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
         array(
            'name' => 'Main Image Photo',
            'desc' => '',
            'id' => "mainimage",
            'type' => 'plupload_image',
            'max_file_uploads' => 8,
        ),
    ),
);


/* * ******************* META BOX REGISTERING ********************** */

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes() {
    global $meta_boxes;

    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if (class_exists('RW_Meta_Box')) {
        foreach ($meta_boxes as $meta_box) {
            new RW_Meta_Box($meta_box);
        }
    }
}

// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action('admin_init', 'YOUR_PREFIX_register_meta_boxes');
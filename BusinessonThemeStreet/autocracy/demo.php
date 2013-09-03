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

$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'casestudyinfo',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Case Study Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('casestudies'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
     array(
        'name' => 'Result Quote',
        'id' => 'resultquote',
        'type' => 'text',
        ),
     array(
        'name' => 'Show Branding Icon?',
        'id' => 'brandingbox',
        'type' => 'checkbox',
        ),
     array(
        'name' => 'Show Marketing Icon?',
        'id' => 'marketingbox',
        'type' => 'checkbox',
        ),
     array(
        'name' => 'Show Business Development Icon?',
        'id' => 'developmentbox',
        'type' => 'checkbox',
        ),
     array(
        'name' => 'Show Technology Icon?',
        'id' => 'technologybox',
        'type' => 'checkbox',
        ),
     array(
        'name' => 'Client Testimonial',
        'desc' => "",
        'id' => "clienttestimonial",
        'type' => 'wysiwyg',
        'std' => "",
        'cols' => '20',
        'rows' => '8',
        ),
     ),
    );

$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'casestudyinfo',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Case Study Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('services'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        array(
            'name'             => 'Service Images',
            'id'               => "serviceimages",
            'type'             => 'plupload_image',
            'max_file_uploads' => 8,
            ),
        array(
            'name' => 'Emphasized Paragraph',
            'desc' => "",
            'id' => "empparagraph",
            'type' => 'wysiwyg',
            'std' => "",
            'cols' => '20',
            'rows' => '8',
            ),
        ),
    );

$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'Page Info',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Case Study Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('page'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        array(
            'name' => 'Emphasized Paragraph',
            'desc' => "",
            'id' => "empparagraph",
            'type' => 'wysiwyg',
            'std' => "",
            'cols' => '20',
            'rows' => '8',
            ),
        ),
    );
    
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'employeeprofiles',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Employee Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('bms_employees'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        array(
            'name' => 'Position',
            'id' => 'position',
            'type' => 'text',
        ),
        array(
            'name' => 'Special Position',
            'id' => 'specialposition',
            'type' => 'text',
        ),
        array(
            'name' => 'Quote',
            'id' => 'quotation',
            'type' => 'text',
        ),
        array(
            'name' => 'Last Name',
            'id' => 'lastname',
            'type' => 'text',
        ),
        array(
            'name'     => 'Division',
            'id'       => "division",
            'type'     => 'select',
            // Array of 'value' => 'Label' pairs for select box
            'options'  => array(
                'businesspeople' => 'Business People',
                'brandingpeople' => 'Branding People',
                'designers' => 'Designers',
                'wombats' => 'Wombats',
            ),
            // Select multiple values, optional. Default is false.
            'multiple' => false,
        ),
        array(
            'name'     => 'Which side',
            'id'       => "side",
            'type'     => 'select',
            // Array of 'value' => 'Label' pairs for select box
            'options'  => array(
                'left' => 'Left',
                'right' => 'Right',
            ),
            // Select multiple values, optional. Default is false.
            'multiple' => false,
        ),
        
    ),
);

$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'news',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'news',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('news'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        array(
            'name'     => 'Position',
            'id'       => "position",
            'type'     => 'select',
            // Array of 'value' => 'Label' pairs for select box
            'options'  => array(
                'lefttop' => 'Left Column Top Row',
                'leftmiddle' => 'Left Column Middle Row',
                'leftbottom' => 'Left Column Bottom Row',
                'topheadline' => 'Top Headline',
                'featuredquote' => 'Featured Area',
                'rightleft' => 'Right Column First News',
                'rightright' => 'Right Column Second News',
                'none' => 'Dont Show',
            ),
            // Select multiple values, optional. Default is false.
            'multiple' => false,
        ),
        array(
            'name' => 'Quote',
            'id' => 'quotation',
            'type' => 'text',
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
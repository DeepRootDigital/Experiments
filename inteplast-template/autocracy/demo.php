<?php

/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
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
    'id' => 'employeescck',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Employee Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('inteplast_employees'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        // IMAGE UPLOAD
        array(
            'name' => 'Position',
            'id' => 'position',
            'type' => 'text',
        ),
        array(
            'name' => 'Company',
            'id' => 'company',
            'type' => 'text',
        ),
        array(
            'name' => 'Email Address',
            'id' => 'email',
            'type' => 'text',
        ),
        array(
            'name' => 'Phone Number',
            'id' => 'ext',
            'type' => 'text',
        ),
        
    ),
);

// Employees CCK
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'documentscck',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Document Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('inteplast_documents'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        // IMAGE UPLOAD
        // SELECT BOX
        array(
            'name' => 'Date',
            'id'   => "date",
            'type' => 'text',
        ),
		array(
			'name'     => 'Document Type',
			'id'       => "doctype",
			'type'     => 'select',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'Word Document' => 'Word Document',
				'PowerPoint Document' => 'PowerPoint Document',
				'Excel Document' => 'Excel Document',
				'PDF Document' => 'PDF Document',
				'Application' => 'Application',
				'Other' => 'Other',
			),
			// Select multiple values, optional. Default is false.
			'multiple' => false,
		),
        array(
			'name' => 'File Upload',
			'id'   => "docfile",
			'type' => 'file',
			'multiple' => false,
		),
        array(
            'name' => 'Size',
            'id' => 'size',
            'type' => 'text',
        ), 
        array(
            'name' => 'Category',
            'id' => 'category',
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
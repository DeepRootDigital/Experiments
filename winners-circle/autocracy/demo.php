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
            'name' => 'Street Address',
            'id' => 'streetaddress',
            'type' => 'text',
        ),
        array(
            'name' => 'Number of Rooms',
            'id' => 'roomcount',
            'type' => 'text',
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
    ),
);

// Ingredients CCK
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'recipemetacck',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Recipe Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('recipes'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        array(
            'name' => 'Estimated Time',
            'id' => 'esttime',
            'type' => 'text',
        ),
        array(
            'name' => 'Calories',
            'id' => 'estcalories',
            'type' => 'text',
        ),
        array(
            'name' => 'Servings',
            'id' => 'servings',
            'type' => 'text',
        ),
    ),
);

// Ingredients CCK
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'ingredientscck',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Ingredients Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('recipes'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        array(
            'name' => 'Ingredient 1',
            'id' => 'ingredient1',
            'type' => 'text',
        ),
        array(
            'name' => 'Ingredient 2',
            'id' => 'ingredient2',
            'type' => 'text',
        ),
        array(
            'name' => 'Ingredient 3',
            'id' => 'ingredient3',
            'type' => 'text',
        ),
        array(
            'name' => 'Ingredient 4',
            'id' => 'ingredient4',
            'type' => 'text',
        ),
        array(
            'name' => 'Ingredient 5',
            'id' => 'ingredient5',
            'type' => 'text',
        ),
        array(
            'name' => 'Ingredient 6',
            'id' => 'ingredient6',
            'type' => 'text',
        ),
        array(
            'name' => 'Ingredient 7',
            'id' => 'ingredient7',
            'type' => 'text',
        ),
        array(
            'name' => 'Ingredient 8',
            'id' => 'ingredient8',
            'type' => 'text',
        ),
    ),
);
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'directionscck',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Directions Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('recipes'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        array(
            'name' => 'Step 1',
            'desc' => "",
            'id' => "step1",
            'type' => 'wysiwyg',
            'std' => "",
            'cols' => '20',
            'rows' => '8',
        ),
        array(
            'name' => 'Step 2',
            'desc' => "",
            'id' => "step2",
            'type' => 'wysiwyg',
            'std' => "",
            'cols' => '20',
            'rows' => '8',
        ),
        array(
            'name' => 'Step 3',
            'desc' => "",
            'id' => "step3",
            'type' => 'wysiwyg',
            'std' => "",
            'cols' => '20',
            'rows' => '8',
        ),
        array(
            'name' => 'Step 4',
            'desc' => "",
            'id' => "step4",
            'type' => 'wysiwyg',
            'std' => "",
            'cols' => '20',
            'rows' => '8',
        ),
        array(
            'name' => 'Step 5',
            'desc' => "",
            'id' => "step5",
            'type' => 'wysiwyg',
            'std' => "",
            'cols' => '20',
            'rows' => '8',
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
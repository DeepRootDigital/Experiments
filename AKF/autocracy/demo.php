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

// Arabic Post CCK
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'postcckarabic',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Post Information - Arabic',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('post'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
       array(
        'name' => 'Title',
        'id' => 'arabic-title',
        'type' => 'text',
        ),
       array(
        'name' => 'Content',
        'desc' => "",
        'id' => "arabic-content",
        'type' => 'wysiwyg',
        'std' => "",
        'cols' => '20',
        'rows' => '8',
        ),
       ),
    );

// Arabic Page CCK
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'pagecckarabic',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Page Information Arabic',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('page'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
         array(
            'name' => 'Title',
            'id' => 'arabic-title',
            'type' => 'text',
            ),
    array(
            'name' => 'Content',
            'desc' => "",
            'id' => "arabic-content",
            'type' => 'wysiwyg',
            'std' => "",
            'cols' => '20',
            'rows' => '8',
            ),
        ),
    );

// Arabic Page CCK
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'recipecckarabic',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Recipe Information Arabic',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('recipes'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
         array(
            'name' => 'Title',
            'id' => 'arabic-title',
            'type' => 'text',
            ),
    array(
            'name' => 'Content',
            'desc' => "",
            'id' => "arabic-content",
            'type' => 'wysiwyg',
            'std' => "",
            'cols' => '20',
            'rows' => '8',
            ),
        ),
    );

// Employees CCK - English
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'employeescck',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Employee Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('employees'),
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
            'name' => 'Email Address',
            'id' => 'email',
            'type' => 'text',
            ),
        array(
            'name' => 'Phone Number',
            'id' => 'ext',
            'type' => 'text',
            ),
        array(
            'name' => 'Employee photo',
            'desc' => '',
            'id' => "lnkimage1",
            'type' => 'plupload_image',
            'max_file_uploads' => 1,
            ),
        ),
    );

// Employees CCK - Arabic
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'arabemployeescck',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Arabic - Employee Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('employees'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        // IMAGE UPLOAD
        array(
            'name' => 'Position',
            'id' => 'arabic-position',
            'type' => 'text',
            ),
        array(
            'name' => 'Email Address',
            'id' => 'arabic-email',
            'type' => 'text',
            ),
        array(
            'name' => 'Phone Number',
            'id' => 'arabic-ext',
            'type' => 'text',
            ),
        array(
            'name' => 'Employee photo',
            'desc' => '',
            'id' => "arabic-lnkimage1",
            'type' => 'plupload_image',
            'max_file_uploads' => 1,
            ),
        ),
    );

// RecipeMeta CCK - English
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

// RecipeMeta CCK - Arabic
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'arabicrecipemetacck',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Arabic - Recipe Info',
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
            'id' => 'arabic-esttime',
            'type' => 'text',
            ),
        array(
            'name' => 'Calories',
            'id' => 'arabic-estcalories',
            'type' => 'text',
            ),
        array(
            'name' => 'Servings',
            'id' => 'arabic-servings',
            'type' => 'text',
            ),
        ),
    );

// Ingredients CCK - English
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

// Ingredients CCK - Arabic
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'arabicingredientscck',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Arabic - Ingredients Info',
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
            'id' => 'arabic-ingredient1',
            'type' => 'text',
            ),
        array(
            'name' => 'Ingredient 2',
            'id' => 'arabic-ingredient2',
            'type' => 'text',
            ),
        array(
            'name' => 'Ingredient 3',
            'id' => 'arabic-ingredient3',
            'type' => 'text',
            ),
        array(
            'name' => 'Ingredient 4',
            'id' => 'arabic-ingredient4',
            'type' => 'text',
            ),
        array(
            'name' => 'Ingredient 5',
            'id' => 'arabic-ingredient5',
            'type' => 'text',
            ),
        array(
            'name' => 'Ingredient 6',
            'id' => 'arabic-ingredient6',
            'type' => 'text',
            ),
        array(
            'name' => 'Ingredient 7',
            'id' => 'arabic-ingredient7',
            'type' => 'text',
            ),
        array(
            'name' => 'Ingredient 8',
            'id' => 'arabic-ingredient8',
            'type' => 'text',
            ),
        ),
);

//DirectionsCCK - English
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

//DirectionsCCK - arabic
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'arabicdirectionscck',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Arabic - Directions Info',
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
            'id' => "arabic-step1",
            'type' => 'wysiwyg',
            'std' => "",
            'cols' => '20',
            'rows' => '8',
            ),
        array(
            'name' => 'Step 2',
            'desc' => "",
            'id' => "arabic-step2",
            'type' => 'wysiwyg',
            'std' => "",
            'cols' => '20',
            'rows' => '8',
            ),
        array(
            'name' => 'Step 3',
            'desc' => "",
            'id' => "arabic-step3",
            'type' => 'wysiwyg',
            'std' => "",
            'cols' => '20',
            'rows' => '8',
            ),
        array(
            'name' => 'Step 4',
            'desc' => "",
            'id' => "arabic-step4",
            'type' => 'wysiwyg',
            'std' => "",
            'cols' => '20',
            'rows' => '8',
            ),
        array(
            'name' => 'Step 5',
            'desc' => "",
            'id' => "arabic-step5",
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
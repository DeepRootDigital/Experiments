<?php 
/* Create theme Options */
require_once ( get_template_directory() . '/theme-options.php' );

/* Add Menu First/Last support */
function add_first_and_last($output) {
    $output = preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
 $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), 
   strlen('class="menu-item'));
    return $output;
}

function social_media_display() {
	/* Check the correct outputs for social media icons */
    $options = get_option('sample_theme_options');
	if($options['facebookurl'] !== "") {
	echo "<a href=' " .$options['facebookurl']. "'>";	
    echo "<img src='". get_template_directory_uri() ."/images/facebook.png'/>";
    echo "</a>";
    };
	
	if($options['twitterurl'] !== "") {
	echo "<a href=' " .$options['twitterurl']. "'>";	
    echo "<img src='". get_template_directory_uri() ."/images/twitter.png'/>";
    echo "</a>";
    };
}

?>



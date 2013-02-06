<html>
    <head>
        <title><?php wp_title("", true); ?></title>
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <div id="container">
            <div class="header">
            <h1>gluestick marketing</h1>
            <img class="social" src="<?php echo get_template_directory_uri(); ?>/images/social.png"/>
            <div class="nav">                    
                    <?php wp_nav_menu(); ?>
            </div>
            </div>
            
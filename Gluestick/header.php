<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title><?php the_title(); ?></title>
        <?php wp_head(); ?>
        <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
        <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/slider.js" type="text/javascript"></script>
        
        <?php include 'compilestyle.php'; ?>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="logo">
                    <img src="<?php $options = get_option('sample_theme_options'); echo $options['logo']; ?>">
                </div>
                <div class="searchform">
                    <form>
                        <input type="text" />
                        <input type="submit" />
                    </form>
                </div>
                <div class="navigation">
                    <?php wp_nav_menu(); ?>
                </div>
                <div class="socialmedia">
                  <?php social_media_display(); ?>                 
                </div>
            </div>
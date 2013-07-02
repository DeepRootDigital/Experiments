<!DOCTYPE HTML>
<html>
<head>
    <?php $options = get_option('sample_theme_options'); ?>
    <?php $mainoptions = get_option('main_theme_options'); ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/grayscale.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slider.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/akf.js">

            </script>
            <title><?php wp_title("", true); ?></title>
            <?php wp_head(); ?>
            <link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" />
        </head>
        <body>
            <div id="header">
                <div class="topmenu">
                    <div class="container">
                        <a href="<?php echo site_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
                        <p><?php echo $mainoptions['subtitle']; ?></p>
                        <div class="socialmedia">
                            <ul>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png"></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="submenu">
                    <div class="container">
                        <?php wp_nav_menu(array('theme_location' => 'Top Nav', 'container_class' => 'none',)); ?>
                        <div class="subnav-items">
                            <div class="article-item">
                                <h2>Lorem Ipsum</h2>
                                <div class="item-thumbnail-bg">
                                </div>
                                Ad choro tempor has, vim elitr virtute inermis eu, duo modus offendit abhorreant ea. Omnis sonet option ut sed, cum hinc case eu.
                                [<a href="<?php the_permalink(); ?>">Read More</a>]
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="drop" class="dropdown-menu">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/akf_shadow.png" class="dropdown-divider" />
                    <div class="dropdown-right">                
                        <img class="drop-photo" src="<?php echo get_template_directory_uri(); ?>/images/akf-dropdown-photo.png" alt="drop down menu preview" />
                        <div class="drop-down-icons">
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/akf-clock-icon.png" alt="" /></a>
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/akf-levels-icon.png" alt="" /></a>
                        </div>
                        <div class="drop-menu-text">
                            <h1>Lorem <span>ipsum</span></h1>
                            <p>dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. [ <span><a href="">Read More</a> </span> ]</p>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
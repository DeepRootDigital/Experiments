<!DOCTYPE html>
<html>
    <head>
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" />
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/7fae6fe2-5b59-4099-96aa-619fda1b22d5.css"/>
   <script type="text/javascript" src="http://fast.fonts.com/jsapi/7fae6fe2-5b59-4099-96aa-619fda1b22d5.js"></script>
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/overlays.js"></script>
    </head>
    <body>
        <div class="sub-canvas">
            <div class="center">
                <a href="<?php echo site_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
                <img class="phone" src="<?php echo get_template_directory_uri(); ?>/images/phoneinfo.png">
                <div class="signup">
                    <form>
                        <p>Sign up for our newsletter</p>
                        <input type="text" value="email">
                        <input id="signup-button" type="submit">
                    </form>
                </div>
                <div class="clear"></div>
            </div>
            <div class="center sub-bg">
                <header>
                    <nav>
                    <ul>
                        <li style="padding:0px;"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/homeimage.png"></a></li>
                    </ul>
                    <?php wp_nav_menu(array('theme_location' => 'Header Nav',)); ?>
                    <div class="clear"></div>
                </nav>
                    <div class="topsocialmedia social-icons">                  
                        <ul>
                            <li class="soc-1"><a href="#"></a></li>
                            <li class="soc-2"><a href="#"></a></li>
                            <li class="soc-3"><a href="#"></a></li>
                            <li class="soc-4"><a href="#"></a></li>
                        </ul>                   
                    </div>
                </header>
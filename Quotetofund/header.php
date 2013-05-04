<!DOCTYPE html>
<html>
<head>
 <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
 <link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" />
 <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
 <script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/function.js"></script> 
 <script type="text/javascript" src="http://fast.fonts.com/jsapi/c72313c3-a6c7-4f10-a23c-04455cddea2f.js"></script>
 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.js?v=2.1.4"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.css?v=2.1.4" media="screen" />
 <script type="text/javascript">
 $(document).ready(function() {
  $(".fancybox").fancybox({scrolling: 'no'});
});
 </script>
 <?php wp_head(); ?>
</head>
<body>
  <div class="container">
   <div class="header">
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"/>
    <nav class="top-nav">
     <?php wp_nav_menu(array('theme_location' => 'Header Nav',)); ?>
  </nav>
</div>


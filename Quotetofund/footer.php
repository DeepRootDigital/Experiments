<div class="container">
<div class="footer-content">
	<img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="logo"/>
	<nav class="bottom-nav">
     		<?php wp_nav_menu(array('theme_location' => 'Footer Nav',)); ?>
     	</nav>
     	<img class="footer-dotted-line" src="<?php echo get_template_directory_uri(); ?>/images/footer-dotted-line.png" alt="logo"/>
</div>
</div>
</body>
<?php wp_footer(); ?>
</html>
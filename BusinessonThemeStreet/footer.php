		<footer>
			<div class="footer-nav">
				<?php wp_nav_menu(array('theme_location' => 'Footer Nav',)); ?>
			</div>
			<ul class="bms-info">
				<img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png">
				<li><h1>Business on<br>Market St</h1></li>
				<li>858 598 5477</li>
				<li>Info@<br>businessonmarketst.com</li>
				<li>4542 Ruffner St STE 170<br>San Diego, CA 92111</li>
			</ul>
		</footer>
	</div><!-- END CANVAS -->
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/function.js"></script>
	<?php wp_footer(); ?>
</body>
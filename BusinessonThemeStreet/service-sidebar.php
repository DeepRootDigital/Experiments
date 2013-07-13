<div id="service-nav">
	<?php $serviceoptions = get_option('service_theme_options'); ?>						
	<ul>
		<li>
			<a href="<?php echo $serviceoptions['brandinglink']; ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/branding-icon.png">
				Branding
			</a>
		</li>
		<li>
			<a href="<?php echo $serviceoptions['marketinglink']; ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/marketing-icon.png">
				Marketing
			</a>
		</li>
		<li>
			<a href="<?php echo $serviceoptions['bdlink']; ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/bd-icon.png">
				Business Development
			</a>
		</li>
		<li>
			<a href="<?php echo $serviceoptions['webdevlink']; ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/technology-icon.png">
				Web Development
			</a>
		</li>
		<li>
			<a href="<?php echo $serviceoptions['randplink']; ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/service-icons/randp-red.png">
				Research and Planning
			</a>
		</li>
	</ul>
</div>
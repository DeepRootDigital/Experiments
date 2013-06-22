<?php
/*
Template Name: Employees
*/

get_header();
?>

<div class="row">
	<div class="main">
		<h2>Employee Directory</h2>
		<img src="<?php
			echo get_template_directory_uri();
			?>
			/images/maindivider.png" />

		<div class="profile">
			<div class="profpic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/employee1.png" />
			</div>
			<div class="profinfo">
				<h3>John Smith</h3>
				<h3>Manager</h3>
				<h3>Section A</h3>
				<h3>johnsmith@inteplast.com</h3>
				<h3>EXT# 1234</h3>
			</div>
		</div>
		<div class="profile">
			<div class="profpic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/employee2.png" />
			</div>
			<div class="profinfo">
				<h3>John Smith</h3>
				<h3>Manager</h3>
				<h3>Section A</h3>
				<h3>johnsmith@inteplast.com</h3>
				<h3>EXT# 1234</h3>
			</div>
		</div>
		<div class="profile">
			<div class="profpic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/employee3.png" />
			</div>
			<div class="profinfo">
				<h3>John Smith</h3>
				<h3>Manager</h3>
				<h3>Section A</h3>
				<h3>johnsmith@inteplast.com</h3>
				<h3>EXT# 1234</h3>
			</div>
		</div>
		<div class="profile">
			<div class="profpic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/employee4.png" />
			</div>
			<div class="profinfo">
				<h3>John Smith</h3>
				<h3>Manager</h3>
				<h3>Section A</h3>
				<h3>johnsmith@inteplast.com</h3>
				<h3>EXT# 1234</h3>
			</div>
		</div>
		<div class="profile">
			<div class="profpic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/employee5.png" />
			</div>
			<div class="profinfo">
				<h3>John Smith</h3>
				<h3>Manager</h3>
				<h3>Section A</h3>
				<h3>johnsmith@inteplast.com</h3>
				<h3>EXT# 1234</h3>
			</div>
		</div>
		<div class="profile">
			<div class="profpic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/employee6.png" />
			</div>
			<div class="profinfo">
				<h3>John Smith</h3>
				<h3>Manager</h3>
				<h3>Section A</h3>
				<h3>johnsmith@inteplast.com</h3>
				<h3>EXT# 1234</h3>
			</div>
		</div>
		<div class="profile">
			<div class="profpic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/employee7.png" />
			</div>
			<div class="profinfo">
				<h3>John Smith</h3>
				<h3>Manager</h3>
				<h3>Section A</h3>
				<h3>johnsmith@inteplast.com</h3>
				<h3>EXT# 1234</h3>
			</div>
		</div>
		<div class="profile">
			<div class="profpic">
				<img src="<?php echo get_template_directory_uri(); ?>/images/employee8.png" />
			</div>
			<div class="profinfo">
				<h3>John Smith</h3>
				<h3>Manager</h3>
				<h3>Section A</h3>
				<h3>johnsmith@inteplast.com</h3>
				<h3>EXT# 1234</h3>
			</div>
		</div>
	</div>
	<?php
		get_sidebar();
	?>

</div>

<?php 
	get_footer();
?>
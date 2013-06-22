<?php
/*
Template Name: ContactUs
*/

	get_header();
?>


<div class="row">

	<div class="main">
		<h2>Contact Us</h2>
		<img src="<?php
			echo get_template_directory_uri();
			?>
			/images/maindivider.png" />
		<form>
        	<input type="text" name="name" value="" placeholder="name" class="mailer">
        	<input type="text" name="email" value="" placeholder="email" class="mailer">
        	<input type="text" name="phone" value="" placeholder="phone number" class="mailer">
        	<textarea name="message" placeholder="message"></textarea>
      	</form>

      	<p class="contactpage"> Please select the department you are trying to reach.</p>

      	<img src="<?php
			echo get_template_directory_uri();
			?>
			/images/submit.png" class="submit" />
			<br />
		<form class="checkboxes">
			<ul>
				<li><input type="checkbox" name="department" value="Department1" class="check"><h4>Department 1</h4></li>
				<li><input type="checkbox" name="department" value="Department2" class="check"><h4>Department 2</h4></li>
				<li><input type="checkbox" name="department" value="Department3" class="check"><h4>Department 3</h4></li>
				<li><input type="checkbox" name="department" value="Department4" class="check"><h4>Department 4</h4></li>
			</ul>
		</form>
	</div>

	<?php
		get_sidebar();
	?>

</div>

<?php
	get_footer();
?>
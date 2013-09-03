<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Inteplast Group</title>
	<?php
		wp_head();
	?>
	<link rel="stylesheet" href="<?php
	echo get_template_directory_uri();
	?>/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="row">
		<div class="logo columns">
			<img src="<?php
			echo get_template_directory_uri();
			?>
			/images/logo.png" />
		</div>
		<div class="search columns">
			<form name="searchboxform" action="html_form_action.asp" method="get">
			<input type="text" placeholder="search employees" id="searchboxform"> 
			</form>
            <!--<input type="submit" value="Submit">-->
			<img src="<?php
			echo get_template_directory_uri();
			?>
			/images/searchbutton.png" />
		</div>
		<div class="search columns">
			<form name="searchboxform" action="html_form_action.asp" method="get">
			<input type="text" placeholder="search documents" id="searchboxform">
			</form>
            <!--<input type="submit" value="Submit">-->
			<img src="<?php
			echo get_template_directory_uri();
			?>
			/images/searchbutton.png" />
		</div>
	</div>

	<div class="row">
		<div class="navigation">
			<!--<ul>
				<li>Divisions &amp; Sites</li>
				<li>Affiliates</li>
				<li>Corporate Updates</li>
				<li>Procedures</li>
				<li>Forms</li>
				<li>Training</li>
				<li>Employee Services</li>
				<li>Contact Us</li>
			</ul>-->

			
			<?php wp_nav_menu(array('theme_location' => 'Header Nav',)); ?>
			
		</div>
	</div>
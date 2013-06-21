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
	<link href='<?php echo get_template_directory_uri(); ?>/fonts/AUdimat-Regular.otf' rel='stylesheet' type='text/css'>
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
			<ul>
				<li>Divisions &amp; Sites</li>
				<li>Affiliates</li>
				<li>Corporate Updates</li>
				<li>Procedures</li>
				<li>Forms</li>
				<li>Training</li>
				<li>Employee Services</li>
				<li>Contact Us</li>
			</ul>

			<!--
			<?php wp_nav_menu(array('theme_location' => 'Header Nav',)); ?>
			-->
		</div>
	</div>


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

	<div class="sidenav">
		<ul>
			<li>Document Center</li>
			<li>Employee Handbook</li>
			<li>Corporate rules and...</li>
			<li>Basic Work Etiquette</li>
			<li>Casual Fridays</li>
			<li>Web Usage Limitations</li>
			<li>Company Transportation</li>
		</ul>
		<ul>
			<li>Useful Links</li>
			<li>Employee Handbook</li>
			<li>Corporate rules and...</li>
			<li>Basic Work Etiquette</li>
			<li>Casual Fridays</li>
			<li>Web Usage Limitations</li>
			<li>Company Transportation</li>
		</ul>
		<ul>
			<li>Training Materials</li>
			<li>Employee Handbook</li>
			<li>Corporate rules and...</li>
			<li>Basic Work Etiquette</li>
			<li>Casual Fridays</li>
			<li>Web Usage Limitations</li>
			<li>Company Transportation</li>
		</ul>
		<ul>
			<li>News Feeds</li>
			<li>Employee Handbook</li>
			<li>Corporate rules and...</li>
			<li>Basic Work Etiquette</li>
			<li>Casual Fridays</li>
			<li>Web Usage Limitations</li>
			<li>Company Transportation</li>
		</ul>
	</div>

</div>

<div class="row">
	<div class="footbar">
		<img src="<?php echo get_template_directory_uri(); ?>/images/footerdivider.png" />
	</div>
</div>

<div class="row">
			<div class="footerlist columns">
				<ul>
					<li>Divisions &amp; Sites</li>
					<li>AmTopp</li>
					<li>IBS</li>
					<li>World-Pak</li>
					<li>Distribution Centers</li>
					<li>Lolita Plant Site</li>
				</ul>
			</div>
			<div class="footerlist columns">
				<ul>
					<li>Affiliates</li>
					<li>Hartman</li>
					<li>Inteplast Bags &amp; Films</li>
					<li>LoneStar Plastics</li>
					<li>Matra Plast</li>
					<li>Minigrip</li>
					<li>Niaflex</li>
					<li>Pinnacle</li>
					<li>Salerno USA</li>
					<li>Salerno Canada</li>
					<li>Vifan USA</li>
					<li>Vifan Canada</li>
				</ul>
			</div>
			<div class="footerlist columns">
				<ul>
					<li>Corporate Communication</li>
					<li>Honorary Achievements Bulletin</li>
					<li>Landmarks</li>
					<li>Newsletter</li>
				</ul>
			</div>
			<div class="footerlist columns">
				<ul>
					<li>Procedures</li>
					<li>Corporate Internal</li>
					<li>Credit</li>
					<li>Divisional</li>
					<li>HR</li>
					<li>Marketing</li>
					<li>Material &amp; Purchasing</li>
					<li>Operations</li>
					<li>TQM</li>
				</ul>
			</div>
			<div class="footerlist columns">
				<ul>
					<li>Forms</li>
					<li>General</li>
					<li>Accounting</li>
					<li>Credit</li>
					<li>HR</li>
					<li>Legal</li>
					<li>Marketing</li>
					<li>Material &amp; Purchasing</li>
					<li>TQM</li>
				</ul>
			</div>
</div>


<div class="row">
		<div class="footerlist columns">
			<ul>
				<li>Training</li>
				<li>AS/400</li>
				<li>IMS</li>
				<li>ISO</li>
				<li>SIX SIGMA</li>
			</ul>
		</div>
		<div class="footerlist columns">
			<ul>
				<li>Employee Services</li>
				<li>Benefit Programs</li>
				<li>Business Travel</li>
				<li>Employee Lookup</li>
				<li>Employee Phone Directory</li>
				<li>Self Service</li>
				<li>Workflow</li>
			</ul>
		</div>
</div>


<?php
wp_footer();
?>
</body>
</html>
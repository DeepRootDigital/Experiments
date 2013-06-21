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
	<div class="maindoc">
		<h2>Contact Us</h2>
		<img src="<?php
			echo get_template_directory_uri();
			?>
			/images/longdivider.png" />
		<ul class="sorting">
			<li>Accounting</li>
			<li>Corporate Internal</li>
			<li>Credit</li>
			<li>Divisional</li>
			<li>HR</li>
			<li>Marketing</li>
			<li>Material &amp; Purchasing</li>
			<li>Operations</li>
			<li>TQM</li>
		</ul>

		<div class="docinfo">
			<ul class="indivinfotop">
				<li>Name</li>
				<li>Date Uploaded</li>
				<li>File Type</li>
				<li>Size</li>
				<li>Category</li>
			</ul>
			<img src="<?php echo get_template_directory_uri(); ?>/images/word.png" />
			<ul class="indivinfo">
				<li>ImportantDocument1.doc</li>
				<li>04/18/2013</li>
				<li>Word Document</li>
				<li>2.5 MB</li>
				<li>Health Benefits</li>
			</ul>
			<img src="<?php echo get_template_directory_uri(); ?>/images/excel.png" />
			<ul class="indivinfo">
				<li>ImportantDocument1.doc</li>
				<li>04/18/2013</li>
				<li>Excel Document</li>
				<li>2.5 MB</li>
				<li>Company Policies</li>
			</ul>
			<img src="<?php echo get_template_directory_uri(); ?>/images/pp.png" />
			<ul class="indivinfo">
				<li>ImportantDocument1.doc</li>
				<li>04/18/2013</li>
				<li>Power Point Document</li>
				<li>2.5 MB</li>
				<li>Category 3</li>
			</ul>
			<img src="<?php echo get_template_directory_uri(); ?>/images/pdf.png" />
			<ul class="indivinfo">
				<li>ImportantDocument1.doc</li>
				<li>04/18/2013</li>
				<li>PDF Document</li>
				<li>2.5 MB</li>
				<li>Category 4</li>
			</ul>
			<img src="<?php echo get_template_directory_uri(); ?>/images/word.png" />
			<ul class="indivinfo">
				<li>ImportantDocument1.doc</li>
				<li>04/18/2013</li>
				<li>Word Document</li>
				<li>2.5 MB</li>
				<li>Category 5</li>
			</ul>
			<img src="<?php echo get_template_directory_uri(); ?>/images/excel.png" />
			<ul class="indivinfo">
				<li>ImportantDocument1.doc</li>
				<li>04/18/2013</li>
				<li>Excel Document</li>
				<li>2.5 MB</li>
				<li>Category 6</li>
			</ul>
			<img src="<?php echo get_template_directory_uri(); ?>/images/pp.png" />
			<ul class="indivinfo">
				<li>ImportantDocument1.doc</li>
				<li>04/18/2013</li>
				<li>Power Point Document</li>
				<li>2.5 MB</li>
				<li>Category 7</li>
			</ul>
			<img src="<?php echo get_template_directory_uri(); ?>/images/pdf.png" />
			<ul class="indivinfo">
				<li>ImportantDocument1.doc</li>
				<li>04/18/2013</li>
				<li>PDF Document</li>
				<li>2.5 MB</li>
				<li>Category 8</li>
			</ul>
		</div>
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
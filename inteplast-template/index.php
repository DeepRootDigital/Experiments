<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Hello</title>
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
		<img src="<?php
		echo get_template_directory_uri();
		?>
		/images/mainpic.png" />
		<h1>This typeface works well for a headline in general.</h1>
		<img src="<?php
		echo get_template_directory_uri();
		?>
		/images/maindivider.png" />
		<h5>Lorem ipsum dolor sit amet, feugiat debitis vulputate id duo, 
			qui ut animal corrumpit, animal nostrud inimicus an nam. Eu meis 
			fabellas pro, ne veritus minimum cotidieque eam, ius at erant congue. </h5>
		<p>Et placerat reformidans vis, ne pri erant mandamus. Nemore placerat ea vis, 
			zril aliquando ius te. Ullum partem ius cu, dolore fierent apeirian nam ei. 
			Quo omnis inimicus ne, quo in posse honestatis omittantur. In vis malis fabellas 
			eloquentiam, pri cu tibique scriptorem, possit referrentur sit at. Quas nihil 
			corrumpit ne vim, cum insolens reprehendunt eu. Vis no veri tation, sed ad timeam 
			utamur. Ea graece gloriatur democritum duo. Vocibus eligendi repudiare cu ius.</p>
		<p>Ei sint eruditi ius, ei nec alia mutat eloquentiam, nibh doming consequat te mea. 
			Ei munere volutpat eos, ei mel tantas graecis. Pro ex mucius diceret necessitatibus. 
			Nec graeci aperiam in. Amet nonumy alienum at qui, id iuvaret inimicus salutandi 
			sit. Sapientem adolescens sed eu, has ei sint commune argumentum, mutat accusata 
			persecuti ea eam.</p>
		<p>Movet mediocritatem et ius, cu sed veri accusata philosophia, ea lucilius mnesarchum 
			vim. Molestie necessitatibus mea ad. Detraxit suavitate at mea, choro sapientem ne 
			vel. Vix oblique sententiae ex. Et est vocent copiosae referrentur.</p>
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
	<div class="footer">
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
</div>


<div class="row">
	<div class="footer">
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
</div>


<?php
wp_footer();
?>
</body>
</html>
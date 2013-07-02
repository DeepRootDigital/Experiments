<?php
/*
Template Name: Documents
*/

	get_header();
?>


<div class="row">
	<div class="maindoc">
		<h2>Document Downloads / HR</h2>
		<img src="<?php
			echo get_template_directory_uri();
			?>
			/images/longdivider.png" />
		<ul class="sorting">
			<li>Accounting</li>
			<li>Corporate Internal</li>
			<li>&nbsp;Credit</li>
			<li>Divisional</li>
			<li>&nbsp;HR</li>
			<li>Marketing</li>
			<li>Material &amp; Purchasing</li>
			<li>Operations</li>
			<li>TQM</li>
		</ul>

		<div class="docinfo">
			<div class="docheaders">
				<div class="one">Name</div>
				<div class="two">Date Uploaded</div>
				<div class="three">File Type</div>
				<div class="four">Size</div>
				<div class="five">Category</div>
			</div>

				<?php 
		$args=array(
			'post_type' => 'inteplast_documents');

		$blogPosts = new WP_Query($args);

 			 while ($blogPosts->have_posts()) : $blogPosts->the_post(); ?>

 			 <?php 
 			 	$directory = get_template_directory_uri();
 			 	switch (get_post_meta(get_the_ID(),'doctype',true)) {
 			 		case "Word Document":
 			 			echo '<img src="'.$directory.'/images/word.png" />';
 			 			break;
 			 		case "PowerPoint Document":
 			 			echo '<img src="'.$directory.'/images/pp.png" />';
 			 			break;
 			 		case "Excel Document":
 			 			echo '<img src="'.$directory.'/images/excel.png" />';
 			 			break;
 			 		case "PDF Document":
 			 			echo '<img src="'.$directory.'/images/pdf.png" />';
 			 			break;
 				 }
 			 ?>

 			  <div class="one"> <?php the_title(); ?> </div>
 			  <div class="two"> <?php echo get_post_meta(get_the_ID(),'date',true) ?> </div>
 			  <div class="three"> <?php echo get_post_meta(get_the_ID(),'doctype',true) ?></div>
 			  <div class="four"> <?php echo get_post_meta(get_the_ID(),'size',true) ?></div>
 			  <div class="five"> <?php echo get_post_meta(get_the_ID(),'category',true) ?></div>

  		<?php endwhile; ?>
		</div>
	</div>
</div>


<?php
	get_footer();
?>
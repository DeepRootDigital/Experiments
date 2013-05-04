<?php 
/*
Template Name: Contact
*/
?>
<?php get_header() ?>
<div class="contact-page-background">
	<section class="contact-page-content">
		<form>
			<p class="contact-page-intro-text">we want to hear <span>from you</span></p>
			<img class="contact-us-title-dotted-lines" src="<?php echo get_template_directory_uri(); ?>/images/blog-article-dotted-lines.png" />
			<div class="contact-input-boxes">
			<input type="text" value="name" />
			<input type="text" value="phone" />
			<input type="text" value="email" />
			<input type="checkbox" value="" />
			<p id="contact-checkbox-text">Subscribe to our newsletter</p>
			<textarea>
			</textarea>
			<div id="add-to-verify-info">
				<p>Add to verify: <b>2 + 2 =</b></p>
				<input id="verify-submit-box" type="text" />
				<input type="submit" value="" />
			</div>
		</div>
		</form>
		<div class="contact-info-section">
			<img class="contact-us-title-dotted-lines" src="<?php echo get_template_directory_uri(); ?>/images/contact-info-dotted-borders.png" />
			<div class="contact-us section-left">
				<p>Local Phone: <span>619.272.4264</span></p>
				<p>Toll Free: <span>888.789.4365</span></p>
			</div>
			<div class="contact-us section-right ">
				<p>Local Fax: <span>619.272.4261</span></p>
				<p>Toll Free Fax: <span>866.780.8363</span></p>
			</div>
		</div>
		<div class="contact-us-state-info">
			<p><span>california</span></p>
			<p><em>Toll Free:</em> 888.789.4365</p>
			<p>7676 Hazard Center Dr. Ste 500 </p>
			<p>San Diego, CA 92108</p>
		</div>
		<div class="contact-us-state-info">
			<p><span>florida</span></p>
			<p><em>Toll Free:</em> 888.702.6008</p>
			<p>7950 NW 53rd Street, Suite 337</p>
			<p>Miami, Florida 33166</p>
		</div>
		<div class="contact-us-state-info">
			<p><span>ohio</span></p>
			<p><em>Toll Free:</em> 888.702.6008</p>
			<p>159 Crocker Park Blvd 4th Floor  </p>
			<p>Westlake, Ohio44145</p>
		</div>
	</section>

<div id="contact-us-top-right-mini-menu">
<?php get_template_part('blogfeed','sidemenu'); ?>
</div>
<div id="contact-us-top-right-blog-menu">
<?php get_template_part('sidebar','blogfeed'); ?>
</div> 


</div>



<?php get_footer() ?>
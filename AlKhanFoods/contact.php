<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
<div class="container">
    <div id="single-page">
        <div class="pagecontent">
            <div class="default-page">				        
		    		<h1 id="contact-title"><?php the_title(); ?></h1>
	                <div class="pageline"></div>	 
                <div class="contact-page">               
	                <form>
						<div class="contact-top">					
							<h4>Name</h4>
							<input type="text" value="">
						</div>
						<div class="contact-top contact-top-right">	
							<h4>Email</h4>
							<input type="text" value="">
						</div>
						<div style="clear:both"></div>
						<div class="contact-textarea">
							<h4>Message</h4>
							<textarea name="contact-text" value=""></textarea>
							<input id="contact-submit" type="submit" value="">
						</div>						
					</form>	
					<div class="contact-page-info">
						<h2>corporate office</h2>	
						<p class="uppercase"><span>al khan foodstuff llc</span><p>
						<p>Al Madinha Plaza,</p>
						<p>First Floor, off no 16,</p>
						<p>Al Bashair Street,</p>
						<p>Madinat Qaboos,</p>
						<p>Sultante Of Oman.</p><br>
						<p>Tel: 24693788</p>
						<p>Fax: 24695788</p><br>
						<p>Email: alkhan@omantel.net.com</p>
						<h2>Operations Facility</h2>
						<div class="contact-page-info-bottom">
							<p><span>Rumais</span></p>
						    <p><span>Wilayat Of Barka,</span></p>
						    <p><span>Sultante Of Oman</span></p>
						    <p>Tel: 26893610</p>
						    <p>Fax: 26893604</p><br>
							<p><span>Nizwa Branch</span></p>
							<p>Tel: 25411732</p>
						</div>
						<div class="contact-page-info-bottom">
							<p ><span>Salalah Branch</span></p>
							<p>Tel: 23296871</p><br>
							<p><span>Al Kamil Branch</span></p>
							<p>Tel: 25557145</p><br>
							<p><span>Saham Branch</span></p>
							<p>Tel: 26720726</p>
						</div>
						<div style="clear:both"></div>
					</div>
	            </div>
		    </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
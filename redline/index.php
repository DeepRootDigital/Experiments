<?php
	get_header();
?>

		<div class="description">
			<div class="intro-text">
				<p>A world class automotive restoration facility. 
					Our TUV-certified staff prides themselves on our extensive research and attention to detail.</p>
			</div>
			<div class="enter-email">
				<p>Enter your email address below now, and we will notify you when we launch our brand new website.</p>
				<form>
				<input class="email-text-box" type="text" name="" placeholder="your email" />
				<input class="submit" type="submit" name="" value="" />
				</form>
			</div>
		</div>
		<div class="twitter-feed">
			<div class="the-tweets">
				<a class="twitter-timeline" href="https://twitter.com/Colpanius" data-widget-id="349588048218042370" data-tweet-limit="2" data-chrome="nofooter transparent">Tweets by @Colpanius</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
				if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
		<div class="company-info">
			<img src="<?php echo get_template_directory_uri(); ?>/images/company-info-line.png" alt="company-info-line" />
			<div class="block sales">
				<p>sales @</p>
				<p><span>redlinerestorations.net</span></p>
			</div>
			<div class="block hours">
				<p><span>m - s</span> 9am - 5pm</p>
				<p><span>sun</span> by appt</p>
			</div>
			<div class="block phone">
				<p><span>p</span> 203 <em>335 9555</em></p>
				<p><span>f</span> 203 <em>335 9550</em></p>
			</div>
			<div class="block address">
				<p><em>2316 fairfield ave</em></p>
				<p>black rock, ct 06605</p>
			</div>
		</div>
		<div class="map">
			<img src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt="map" />
		</div>

<?php
	get_footer();
?>
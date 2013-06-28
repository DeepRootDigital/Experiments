<div class="comments-section">
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="POST" id="commentform">
		<input onfocus="if(this.value == 'name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'name'; }" name="author" value="name" type="text" class="author">
		<input onfocus="if(this.value == 'email') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'email'; }" name="email"  value="email" type="text" class="email">
		<textarea onfocus="if(this.value == 'message') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'message'; }" name="comment" class="message"></textarea>
		<input type="hidden" name="comment_post_ID" value="1">
		<input type="hidden" name="comment_parent" id="comment_parent" value="1">
		<input type="image" src="<?php echo get_template_directory_uri(); ?>/images/submit-comment.png" name="submit" value="Post Comment" class="comment-submit-button" /> 
	</form>
	<div class="comments">
		<?php if($comments) : ?>  
		<?php foreach($comments as $comment) : ?>  
		<div class="comment">
			<div class="comment-line">
		<div class="gravatar">
			<?php echo get_avatar( $id_or_email, $size = '50'); ?>
		</div>
		<div class="comment-data">
			<div class="comment-meta">
				<p>By: <span><?php comment_author_link(); ?></span> / <?php comment_date(); ?></p>
			</div>
			<div class="comment-text">
				<p><?php comment_text(); ?></p>
			</div> 
		</div>
		</div>
	</div>  
<?php endforeach; ?>  
<?php else : ?>   
<?php endif; ?>  
</div>
</div>
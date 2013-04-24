<form class="form-input" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
	<input id="form-name" type="text" name="author" value="name" onfocus="if(this.value == 'name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'name'; }">
	<input id="form-email" type="text" name="email" value="email" onfocus="if(this.value == 'email') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'email'; }">
	<textarea onfocus="if(this.value == 'message') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'message'; }" id="form-comment"  name="message">message</textarea>
	<input id="form-submit" type="submit" value="submit comment">
	<input type="hidden" name="comment_post_ID" value="599">
    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
</form>
<?php if ($comments) : ?> 
	<?php foreach ($comments as $comment) : ?> 
		<div class="blog-comment"><!--BLOG COMMENTS -->
			
            <?php echo get_avatar( $comment, 32 ); ?>
            
			<h2><?php comment_author_link() ?></h2>
			<h3><?php comment_date('F jS, Y') ?></h3>
			<p><?php comment_text() ?></p>
		</div>
	<?php endforeach; /* end for each comment */ ?>
<?php endif; ?>
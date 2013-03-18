<form class="form-input" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
	<input id="form-name" type="text" name="author" value="name">
	<input id="form-email" type="text" name="email" value="email">
	<textarea id="form-comment"  name="comment">Comment</textarea>
	<input type="hidden" name="comment_post_ID" value="1">
    <input type="hidden" name="comment_parent" id="comment_parent" value="1">
	<input id="form-submit" type="submit" value="submit comment">
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
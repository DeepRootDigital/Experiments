<?php if ($comments) : ?>
	<section class="blog-article-leave-comment">
		<p>leave a <span>comment</span></p>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<input class="blog-article-name-email-text" name="author" type="text" value="name" />
			<input class="blog-article-name-email-text" name="email" type="text" value="email" />
			<textarea class="blog-article-comment-box" name="comment"></textarea>
			<input type="submit" value="" />
			<?php comment_id_fields(); ?>
			<?php do_action('comment_form', $post->ID); ?>
		</form>
		<img src="<?php echo get_template_directory_uri(); ?>/images/blog-article-dotted-lines.png" />
		<?php foreach ($comments as $comment) : ?> 
		<div class="blog-article-comment-section">
			<?php echo get_avatar($comment, 48); ?>
			<p id="blog-article-user-name"><?php comment_author_link() ?></p>
			<img id="blog-article-user-date-vertical-border" src="<?php echo get_template_directory_uri(); ?>/images/blog-article-comment-vertical-dotted-line.png" />
			<p id="blog-article-comment-date"><?php comment_date('F jS, Y') ?></p>
			<div class="comment-text"><?php comment_text() ?></div>
			<img id="blog-article-comments-bottom-border-line" src="<?php echo get_template_directory_uri(); ?>/images/blog-article-comments-bottom-border-line.png" />
		</div>
	<?php endforeach; ?>
</section>
<?php endif; ?>
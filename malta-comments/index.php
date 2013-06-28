<!DOCTYPE html>
<html lang="en">
<head>
	<title>Redline Restorations</title>
	<link tyep="text/css" rel="stylesheet" href="style.css" />
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/6f0a6d23-c087-4412-9761-ba16bbdef6cd.css"/>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</head>
<body>
	<div class="comments-section">
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<input onfocus="if(this.value == 'name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'name'; }" name="author" value="name" type="text" class="author">
		<input onfocus="if(this.value == 'email') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'email'; }" name="email"  value="email" type="text" class="email">
		<textarea onfocus="if(this.value == 'message') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'message'; }" name="comment" class="message"></textarea>
		<input type="hidden" name="comment_post_ID" value="1">
		<input type="hidden" name="comment_parent" id="comment_parent" value="1">
		<input type="image" src="<?php echo get_template_directory_uri(); ?>/images/submit-comment.png" name="submit" value="Post Comment" /> 
	</form>
	<hr/>
	<h4>
		<?php comments_number( '0 comments', '1 comment', '% comments' ); ?>
	</h4>
	<div class="comments">
		<?php if($comments) : ?>  
		<?php foreach($comments as $comment) : ?>  
		<div class="comment">
			<?php if ($comment->comment_approved == '0') : ?>  
			<p>Your comment is awaiting approval</p>  
		<?php endif; ?>
		<div class="gravatar">
			<?php echo get_avatar( $id_or_email, $size = '96'); ?>
		</div>
		<div class="comment-data">
			<div class="comment-meta">
				<p>By:<span><?php comment_author_link(); ?></span> / <?php comment_date(); ?></p>
			</div>
			<div class="comment-text">
				<p><?php comment_text(); ?></p>
			</div> 
		</div>
		<a href="#commentform"><img class="reply-link" src="<?php echo get_template_directory_uri(); ?>/images/reply.png"></a>
	</div>  
<?php endforeach; ?>  
<?php else : ?>   
<?php endif; ?>  
</div>
</div>
</body>
</html>
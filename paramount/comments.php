<div class="comment-col">
<form action="<?php echo site_url(); ?>/wp-comments-post.php" method="post">
    <input name="author" value="name" size="22" tabindex="1" type="text">
    <input name="email" value="email" size="22" tabindex="2" type="text">
    <textarea name="comment" tabindex="4">message</textarea>
    <input name="submit" tabindex="5" value="Submit Comment" type="image" src="<?php echo get_template_directory_uri(); ?>/images/blogsubmitbutton.png">
    <input name="comment_post_ID" value="1" type="hidden">
    <div class="line"></div>
</form>
<div class="comment-list">
    <?php if ($comments) : ?>  
        <ul>
            <?php foreach ($comments as $comment) : ?> 
                <li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
                    <div class="comment-info">
                        <?php echo get_avatar($comment, 48); ?>
                        <?php comment_author_link() ?><br /><?php comment_date('F jS, Y') ?>
                    </div>
                    <div class="comment-data">
                        <?php comment_text() ?>
                        <?php if ($comment->comment_approved == '0') : ?> 
                            <em>Your comment is awaiting moderation.</em>
                        <?php endif; ?>
                        </div>

                </li>
                <?php
                /* Changes every other comment to a different class */
                $oddcomment = ( empty($oddcomment) ) ? 'class="alt" ' : ''; /* different style for the class named as "alt" */
                ?>
            <?php endforeach; /* end for each comment */ ?>
        </ul>
    <?php else : // this is displayed if there are no comments so far ?>
        <?php if ('open' == $post->comment_status) : ?>
            <!-- If comments are open, but there are no comments. -->
        <?php else : // comments are closed ?>
            <!-- If comments are closed. -->
            <p class="nocomments">Comments are closed.</p>
        <?php endif; ?>
    <?php endif; ?>
</div>
</div>
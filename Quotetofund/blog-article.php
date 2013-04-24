<?php get_header(); ?>
<?php 
/*
Template Name: Blog-Article
*/
?>
<div class="blog-summary-background">
<section class="blog-summary-content">
		<img class="blog-ribbon" src="<?php echo get_template_directory_uri(); ?>/images/blog-business-finance.png" />
		<h1>blog article <span>title</span></h1>
		<div class="blog-posted-by">
			<p>posted by Justin Smith</p>
		</div>
		<img class="blog-summary-dotted-bar" src="<?php echo get_template_directory_uri(); ?>/images/bottom-body-dotted-line.png" />
		<div class="blog-summary-main-image blog-top-image">
			<img class="blog-posted-date" src="<?php echo get_template_directory_uri(); ?>/images/blog-posted-date.png" />
		</div>
		<div class="blog-description">
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
			<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
		</div>
		<img class="blog-summary-single-dotted-lines" src="<?php echo get_template_directory_uri(); ?>/images/blog-summary-single-dotted-lines.png" />
		<ul>
			<li>tags</li>
			<li>Finance, </li>
			<li>savings, </li>
			<li>loans, </li>
			<li>business</li>
		</ul>
		<img class="blog-bottom-border" src="<?php echo get_template_directory_uri(); ?>/images/blog-bottom-border.png" />
	</section>
	<section class="blog-article-leave-comment">
		<p>leave a <span>comment</span></p>
		<form>
			<input class="blog-article-name-email-text" type="text" value="name" />
			<input class="blog-article-name-email-text" type="text" value="email" />
			<textarea class="blog-article-comment-box" name="comment"></textarea>
			<input type="submit" value="" />
		</form>
		<img src="<?php echo get_template_directory_uri(); ?>/images/blog-article-dotted-lines.png" />
		<div class="blog-article-comment-section">
			<img id="blog-article-user-image" src="<?php echo get_template_directory_uri(); ?>/images/blog-article-comment-user-image.png" />
			<p id="blog-article-user-name">Aldo <span>Jacobo</span></p>
			<img id="blog-article-user-date-vertical-border" src="<?php echo get_template_directory_uri(); ?>/images/blog-article-comment-vertical-dotted-line.png" />
			<p id="blog-article-comment-date">April 19, 2012</p>
			<p id="blog-article-comment-content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			<img id="blog-article-comments-bottom-border-line" src="<?php echo get_template_directory_uri(); ?>/images/blog-article-comments-bottom-border-line.png" />
		</div>

		<div class="blog-article-comment-section">
			<img id="blog-article-user-image" src="<?php echo get_template_directory_uri(); ?>/images/blog-article-comment-user-image.png" />
			<p id="blog-article-user-name">Aldo <span>Jacobo</span></p>
			<img id="blog-article-user-date-vertical-border" src="<?php echo get_template_directory_uri(); ?>/images/blog-article-comment-vertical-dotted-line.png" />
			<p id="blog-article-comment-date">April 19, 2012</p>
			<p id="blog-article-comment-content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		</div>
	</section>

<div id="blog-article-top-right-mini-menu">
<?php get_template_part('blogfeed','sidemenu'); ?>
</div>
<div id="blog-article-top-right-blog-menu">
<?php get_template_part('sidebar','blogfeed'); ?>
</div>
</div>
<?php get_footer(); ?>
<?php /* Template Name: Blog Page */ ?>
<?php get_template_part('header', 'sub'); ?>
<div class="blog-data">
    <?php
    $counter = 0;
$blogPosts = new WP_Query();
$blogPosts->query('showposts=-1');
while ($blogPosts->have_posts()) : $blogPosts->the_post();
    ?>
    <div class="blog-post">
        <div class="left-col">
            <?php if ($counter === 0){ ?>
            <div class="blog-title">
                <h1>Blog</h1>
            </div>
            <?php } ?>
            <div class="post-title">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="post-meta">
                <span class="date"><?php echo get_the_date('F j, Y'); ?><br/>
                    San Diego, CA</span>
                </div>
                <div class="author">By:<?php the_author(); ?></div>
                <div class="comments"><?php comments_number( '0', '1', '%' ); ?></div> COMMENTS
                <img class="share" src="<?php echo get_template_directory_uri(); ?>/images/sharethisorangebox.png"> SHARE THIS</div>
                <div class="right-col">
                    <div class="post-thumbnail" <?php if ($counter === 0){ ?>style="margin-top:17px;"<?php } else { ?> style="margin-top:8px;" <?php } ?>>
                        <div class="overlay">
                            <p><?php the_excerpt(); ?></p>
                            <div class="readmore"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/dotted-arrow.png">Read More</a></div>
                        </div>
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                    </div>
                </div>
                <div class="line"></div>
            </div>
            <?php $counter++; ?>
        <?php endwhile; ?>
        </div>
        <div class="clear"></div>
    </div><!-- HOME BACKGROUND -->
    <div class="center">
        <?php get_footer();?>
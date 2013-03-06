<?php get_template_part('header', 'sub'); ?>
<div class="single-post-data">
    <div class="single-post-left-col">
        <div class="blog-list">
            <h2>Blog</h2>
            <div class="mini-post">
                <div class="post-title">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="post-meta">
                    <span class="date"><?php echo get_the_date('F j, Y'); ?><br/>
                        San Diego, CA</span>
                    </div>
                    <div class="author">By:<?php the_author(); ?></div>
                    <div class="comments"><?php comments_number( '0', '1', '%' ); ?></div> COMMENTS
                    <img class="share" src="<?php echo get_template_directory_uri(); ?>/images/sharethisorangebox.png"> SHARE THIS
                    <div class="line"></div>
                </div>
                <img class="cntr" src="<?php echo get_template_directory_uri(); ?>/images/previousblogs.png">
                <?php $blogPosts = new WP_Query();
                $blogPosts->query('showposts=4');
                while ($blogPosts->have_posts()) : $blogPosts->the_post();
                ?>
                <div class="mini-post" style="opacity:.7;">   
                    <div class="post-title">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="post-meta">
                        <span class="date"><?php echo get_the_date('F j, Y'); ?><br/>
                            San Diego, CA</span>
                        </div>
                        <div class="author">By:<?php the_author(); ?></div>
                        <div class="comments"><?php comments_number( '0', '1', '%' ); ?></div> COMMENTS
                        <img class="share" src="<?php echo get_template_directory_uri(); ?>/images/sharethisorangebox.png"> SHARE THIS
                        <div class="line"></div>
                    </div>
                <?php endwhile; ?>
                <img class="cntr" src="<?php echo get_template_directory_uri(); ?>/images/clickformoreblogs.png">
            </div>
        </div>
        <div class="single-post-right-col">
            <div class="personalproperty">

            </div>
            <div class="personalpropertytext">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <div class="line"></div>
                <?php comments_template(); ?>
            </div>
        </div>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
<div class="clear"></div>
</div><!-- HOME BACKGROUND -->  
<div class="center">
    <?php get_footer();?>






























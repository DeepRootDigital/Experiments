<?php get_header(); ?>
<div class="container">
    <?php $mainoptions = get_option('main_theme_options'); ?>
    <div id="single-post">
        <div class="pagecontent">            
            <div class="pageimage blog-img">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('post-img');
                } else {
                    echo '<img src="http://placehold.it/580x285" />';
                }
                ?> 
            </div>
            <div class="postmeta">
                <div class="share">Share This Article
                    <span style="margin-left:40px;">
                        <a href="<?php echo $mainoptions['twitterurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"/></a>
                        <a href="<?php echo $mainoptions['facebookurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"/></a>
                        <a href="<?php echo $mainoptions['pinteresturl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png"/></a>
                        <a href="<?php echo $mainoptions['youtubeurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png"/></a>
                    </span>
                </div>
                <div class="postback">[<a href="<?php echo $mainoptions['blogpageurl']; ?>"> back to articles</a>]</div>
            </div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 id="single-blog-title">
                <?php if($_COOKIE['setLanguageAKF'] == 'Arabic') { ?>
                <?php echo get_post_meta(get_the_ID(), 'arabic-title', true); ?>
                <?php } 
                else { ?>
                <?php the_title(); ?>
                <?php } ?></h1>
                <div class="postinfo">
                    <span style="font-size:14px; font-style:normal;">  Author:</span> <?php the_author(); ?><br>
                    <?php the_date(); ?>
                </div>
                <div class="pageline"></div>
                <div class="postcontent">
                    <?php if($_COOKIE['setLanguageAKF'] == 'Arabic') { ?>
                    <?php echo get_post_meta(get_the_ID(), 'arabic-content', true); ?>
                    <?php } 
                    else { the_content(); } ?>                        <br>
                    <div class="postback">[<a href="<?php echo $mainoptions['blogpageurl']; ?>">back to articles</a> ]</div>
                </div>
                <?php endwhile; endif;
                ?>            
            </div>
            <?php get_template_part( 'sidebar' ); ?>
        </div>
        <?php get_footer(); ?>
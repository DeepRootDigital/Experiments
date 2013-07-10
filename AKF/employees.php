<?php
/*
  Template Name: Employees Page
 */
  ?>
  <?php get_header(); ?>
  <div class="container">
    <div id="employees-page">
        <div class="pagecontent"><h1 class="emp-title">Management <span style="color:#f69320;">Team</style><div class="line"></div></h1>
        <ul class="employees">
            <?php
            $featuredPosts = new WP_Query();
            $featuredPosts->query(array('post_type' => 'employees'));
            while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
            ?>
            <li>
                <div class="employee-image">
                    <?php 
                    if (get_post_meta( get_the_ID(), 'lnkimage1', true ) != '')  {
                        autoc_get_img('lnkimage1');
                    }
                    else {
                        echo '<img src="">';
                    }
                    ?>
                </div>
                <div class="overlay"><a class="sngl-button"><?php the_title(); ?></a>
                    <ul class="list">
                        <li><?php echo get_post_meta(get_the_ID(), 'position', true); ?></li>
                        <li><?php echo get_post_meta(get_the_ID(), 'email', true); ?></li>
                        <li><?php echo get_post_meta(get_the_ID(), 'ext', true); ?></li>
                    </ul>
                </div>
                <div class="employeelbx">
                    <div class="toplbx">
                        <div class="lbximg">
                           <?php autoc_get_img('lnkimage1'); ?>
                       </div>
                       <div class="lbxmeta">
                        <h1><?php the_title(); ?></h1>
                        <div class="dott"></div>
                        <ul>
                            <li><?php echo get_post_meta(get_the_ID(), 'position', true); ?></li>
                            <li><?php echo get_post_meta(get_the_ID(), 'email', true); ?></li>
                            <li><?php echo get_post_meta(get_the_ID(), 'ext', true); ?></li>
                        </ul>
                    </div></div>
                    <div class="lbxbar">
                        <img class="snf" src="<?php echo get_template_directory_uri(); ?>/images/snowflake2.png" />
                        <h1><?php echo get_post_meta(get_the_ID(), 'position', true); ?></h1>
                        <div class="lbxshare">
                            <a href="<?php echo $mainoptions['twitterurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"/></a>
                            <a href="<?php echo $mainoptions['facebookurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"/></a>
                            <a href="<?php echo $mainoptions['pinteresturl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png"/></a>
                            <a href="<?php echo $mainoptions['youtubeurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png"/></a>
                        </div>
                    </div>
                    <article>
                        <div class="bio">ABOUT ME</div>
                        <div class="bioline"></div>
                        <?php the_content(); ?>
                    </article>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
    <div class="lightbox-overlay">
    </div>     
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
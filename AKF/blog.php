<?php
/*
  Template Name: Blog Page
 */
  ?>
  <?php get_header(); ?>
  <div class="container">
    <div id="blog-page">
        <div class="pagecontent">
            <h1 id="blog-title">News <em>& Media</em></h1>
            <hr/>
            <div class="postwrap">
                <?php
                $featuredPosts = new WP_Query();
                $featuredPosts->query(array('post_type' => 'post'));
                while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
                ?>
                <div class="post">    
                    <h2>
                        <?php if($_COOKIE['setLanguageAKF'] == 'Arabic') { ?>
                        <a href="<?php the_permalink(); ?>"><?php echo get_post_meta(get_the_ID(), 'arabic-title', true); ?></a></h2>
                        <?php }
                        else { ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php } ?>
                        <div class="pageline"></div>
                        <div class="postbkg">
                            <div class="postimage">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                    } else {
                                        echo '<img src="http://placehold.it/213x180" />';
                                    }
                                    ?> 
                                </a>
                            </div>
                        </div>
                        <div class="exerpt">
                            <?php if($_COOKIE['setLanguageAKF'] == 'Arabic') { ?>
                            <?php echo substr(get_post_meta(get_the_ID(), 'arabic-content', true), 0, 74); ?>
                            ...
                            <?php } 
                            else { ?>
                            <?php the_excerpt(); ?>
                            <?php } ?>
                        </div>
                        <div class="postline"></div>
                    </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            </div>
        </div>

    </div>
    <?php get_footer(); ?>
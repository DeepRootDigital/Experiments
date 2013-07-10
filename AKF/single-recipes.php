  <?php get_header(); ?>
  <div class="container">
    <?php $mainoptions = get_option('main_theme_options'); ?>
    <div id="recipes-page">
        <div class="pagecontent">
         <?php
         $featuredPosts = new WP_Query();
         $featuredPosts->query(array('post_type' => 'recipes'));
         while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
         ?>                    
         <div style="display:block;" class="recipe-lb" id="<?php echo get_the_ID(); ?>">
            <div class="single-recipe">
                <div class="recipe-image">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/images/unknown.png/" />';
                    }
                    ?>
                </div>
                <div class="recipemeta">
                    <div class="recipeinfo">
                        <div class="metablock" style="border:none;"><img src="<?php echo get_template_directory_uri(); ?>/images/clock.png" /><?php echo get_post_meta(get_the_ID(), 'esttime', true); ?></div>
                        <div class="metablock" style="width:143px;"><img src="<?php echo get_template_directory_uri(); ?>/images/graph.png" /><?php echo get_post_meta(get_the_ID(), 'estcalories', true); ?></div>
                    </div>
                    <div class="sharerecipe">
                        Share This Recipe?
                    </div>
                    <div class="socialmedia lightbox-social">
                        <a href="<?php echo $mainoptions['twitterurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"/></a>
                        <a href="<?php echo $mainoptions['facebookurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"/></a>
                        <a href="<?php echo $mainoptions['pinteresturl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png"/></a>
                        <a href="<?php echo $mainoptions['youtubeurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png"/></a>
                    </div>
                </div>
                <div class="recipe_headers">
                    <b>Ingredients</b> / Makes <?php echo get_post_meta(get_the_ID(), 'servings', true); ?> Servings
                    <span style="padding-left:60px;">
                        <b>Directions</b></span>
                        <div class="line"></div>
                    </div>
                    <div class="recipe-col-left">
                        <ul>
                            <?php
                            if (get_post_meta(get_the_ID(), 'ingredient1', true) !== '') {
                                echo '<li>' . get_post_meta(get_the_ID(), 'ingredient1', true) . '</li>';
                            }
                            if (get_post_meta(get_the_ID(), 'ingredient2', true) !== '') {
                                echo '<li>' . get_post_meta(get_the_ID(), 'ingredient2', true) . '</li>';
                            }
                            if (get_post_meta(get_the_ID(), 'ingredient3', true) !== '') {
                                echo '<li>' . get_post_meta(get_the_ID(), 'ingredient3', true) . '</li>';
                            }
                            if (get_post_meta(get_the_ID(), 'ingredient4', true) !== '') {
                                echo '<li>' . get_post_meta(get_the_ID(), 'ingredient4', true) . '</li>';
                            }
                            if (get_post_meta(get_the_ID(), 'ingredient5', true) !== '') {
                                echo '<li>' . get_post_meta(get_the_ID(), 'ingredient5', true) . '</li>';
                            }
                            if (get_post_meta(get_the_ID(), 'ingredient6', true) !== '') {
                                echo '<li>' . get_post_meta(get_the_ID(), 'ingredient6', true) . '</li>';
                            }
                            if (get_post_meta(get_the_ID(), 'ingredient7', true) !== '') {
                                echo '<li>' . get_post_meta(get_the_ID(), 'ingredient7', true) . '</li>';
                            }
                            if (get_post_meta(get_the_ID(), 'ingredient8', true) !== '') {
                                echo '<li>' . get_post_meta(get_the_ID(), 'ingredient8', true) . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="recipe-col-right">
                        <?php
                        if (apply_filters('the_content', get_post_meta(get_the_ID(), 'step1', true)) !== '') {
                            echo '<h2 class="lightbox-num1">1</h2>';
                            echo apply_filters('the_content', get_post_meta(get_the_ID(), 'step1', true));
                        }
                        if (apply_filters('the_content', get_post_meta(get_the_ID(), 'step2', true)) !== '') {
                            echo '<h2>2</h2>';
                            echo apply_filters('the_content', get_post_meta(get_the_ID(), 'step2', true));
                        }
                        if (apply_filters('the_content', get_post_meta(get_the_ID(), 'step3', true)) !== '') {
                            echo '<h2>3</h2>';
                            echo apply_filters('the_content', get_post_meta(get_the_ID(), 'step3', true));
                        }
                        if (apply_filters('the_content', get_post_meta(get_the_ID(), 'step4', true)) !== '') {
                            echo '<h2>4</h2>';
                            echo apply_filters('the_content', get_post_meta(get_the_ID(), 'step4', true));
                        }
                        if (apply_filters('the_content', get_post_meta(get_the_ID(), 'step5', true)) !== '') {
                            echo '<h2>5</h2>';
                            echo apply_filters('the_content', get_post_meta(get_the_ID(), 'step5', true));
                        }
                        ?>
                    </div>
                    <div class="rr-shadow"></div>
                    <div class="related-recipes">
                        Related Recipes
                        <div class="tags">Tags: <i>Beef, Chicken, Pasta, Black Beanz</i></div>
                        <ul class="rr">
                            <?php
                            $original_post = $post;
                            $tags = wp_get_post_tags($post->ID);
                            if ($tags) {
                                $first_tag = $tags[0]->term_id;
                                $args = array(
                                    'tag__in' => array($first_tag),
                                    'post__not_in' => array($post->ID),
                                    'showposts' => 0,
                                    'caller_get_posts' => 1
                                    );
                            }
                            $relatedPosts = new WP_Query($args);
                            $relatedPosts->query(array('post_type' => 'recipes'));
                            while ($relatedPosts->have_posts()) : $relatedPosts->the_post();
                            ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"> 
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                    } else {
                                        echo '<img src="' . get_template_directory_uri() . '/images/unknown.png/" />';
                                    }
                                    ?><?php the_title(); ?>
                                </a></li>
                                <?php
                                endwhile;
                                $post = $original_post;
                                wp_reset_query();
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php get_sidebar(); ?>
        <a href="<?php echo $mainoptions['recipepageurl']; ?>"><div style="display:block;" class="lightbox-overlay">
        </div></a>
    </div>
    <?php get_footer(); ?>
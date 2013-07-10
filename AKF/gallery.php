<?php
/*
  Template Name: Gallery Page
 */
  ?>
  <?php get_header(); ?>
  <?php $options = get_option('sample_theme_options'); ?>
  <?php $mainoptions = get_option('main_theme_options'); ?>
  <div class="container">
    <div id="gallery-page">
        <div class="gallerycontent">        
            <ul class="gallery">
                <?php
                $featuredPosts = new WP_Query();
                $featuredPosts->query(array('post_type' => 'gallery', 'posts_per_page' => -1));
                while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
                ?>
                <li class="galleryimage">
                    <a class="sngl-button">
                        <div class="gal-img">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('gallery-thumb');
                            } else {
                                echo '<img width="220" height="220" src="' . get_template_directory_uri() . '/images/unknown.png/" />';
                            }
                            ?>
                        </div>
                    </a>
                    <a class="sngl-button"><div class="overlay"><?php the_title(); ?></div></a>
                    <div class="gallerybox">   
                        <div class="gal-lb">                  
                           <?php
                           if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                        ?>
                    </div>
                    <div class="sharea">
                        <img class="sharrow" src="<?php echo get_template_directory_uri(); ?>/images/sharrow.png">
                        <article><span style="margin-bottom:10px; float:left;">Share this image</span>
                            <a target="_blank" href="javascript:myPopup('http://twitter.com/share?text=An%20Awesome%20Link&url=<?php the_permalink(); ?>')"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter2.png"></a>
                            <a target="_blank" href="javascript:myPopup('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>')" ><img src="<?php echo get_template_directory_uri(); ?>/images/facebook2.png"></a>
                            <a data-pin-config="above" href="javascript:myPopup('http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>')" data-pin-do="buttonPin" ><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest2.png"></a>
                            <a href="<?php echo $mainoptions['youtubeurl']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube2.png"></a>
                        </article>
                    </div>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
    <div class="lightbox-overlay">
    </div>     
</div>
</div>
<?php get_footer(); ?>
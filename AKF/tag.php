<?php get_header(); ?>
<div class="container">
    <div id="tag-page">
        <div class="pagecontent">
            <h1><?php single_tag_title(); ?></h1>
            <hr/>
            <div class="postwrap">
                <?php
                $featuredPosts = new WP_Query();
                $featuredPosts->query(array('post_type' => 'post'));
                while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
                    ?>
                    <div class="post">    
                        <h2><?php the_title(); ?></h2>
                        <div class="postbkg">
                            <div class="postimage">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                } else {
                                    echo '<img src="' . get_template_directory_uri() . '/images/unknown.png/" />';
                                }
                                ?> 
                            </div>
                        </div>
                        
                        <div class="postline"></div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
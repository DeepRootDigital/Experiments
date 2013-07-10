<?php
/*
  Template Name: Partners Page
 */
?>
  <?php get_header(); ?>
  <div class="container">
    <div id="partners-page">
        <div class="pagecontent">
            <h1><?php the_title(); ?></h1>
            <?php
            $featuredPosts = new WP_Query();
            $featuredPosts->query(array('post_type' => 'partners', 'posts_per_page' => -1));
            while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
            ?>
            <div class="partner">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail(array(85));
                } else {
                    echo '<img src="' . get_template_directory_uri() . '/images/unknown.png/" />';
                }
                ?>
                <div class="partnercontent">
                    <h2><?php the_title(); ?></h2>
                    <div class="partnertags">
                        <?php echo get_the_tag_list('',', ',''); ?>
                    </div>
                    <?php the_content();?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
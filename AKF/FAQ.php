<?php
/*
  Template Name: FAQ Page
 */
  ?>
  <?php get_header(); ?>
  <div class="container">
    <div id="faq-page">
        <div class="pagecontent">
            <h1><?php the_title(); ?></h1>
            <div class="pageline"></div>
            <?php
            $featuredPosts = new WP_Query();
            $featuredPosts->query(array('post_type' => 'FAQ'));
            while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
            ?>
            <article class="question">
                <div class="questiontitle">
                   <?php if($_COOKIE['setLanguageAKF'] == 'Arabic'){
                     echo get_post_meta(get_the_ID(), 'arabic-title', true);
                 }
                 else 
                 {
                   the_title();
                } 
                ?>
            </div>
            <div class="answer">
                 <?php if($_COOKIE['setLanguageAKF'] == 'Arabic'){
                     echo get_post_meta(get_the_ID(), 'arabic-content', true);
                 }
                 else 
                 {
                   the_content();
                } 
                ?>
            </div>
            <div class="expand">
            </div>

        </article>
    <?php endwhile; ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
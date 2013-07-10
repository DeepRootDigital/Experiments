<?php get_header(); ?>
<div class="container">
    <div id="single-page">
        <div class="pagecontent">
            <div class="default-page">
                <?php
                if (has_post_thumbnail()) { ?>
                <div class="pageimage">
                    <div class="pageimageoverlay">
                    </div>
                    <?php
                    the_post_thumbnail('post-img');
                    echo '</div>';
                }
                ?> 
                <div class="page-title-wrap">
                  <h1 id="default-title"><?php the_title(); ?></h1>
                  <div class="pageline"></div>
              </div>
              <div class="pagedcontent">
                <?php if (have_posts()) : while (have_posts()) : the_post();?><?php the_content(); ?><?php endwhile; endif; ?>
            </div>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
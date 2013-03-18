<?php get_template_part('header', 'sub'); ?>
<div class="service-data">
    <div class="service-left-col">
          <div class="service-list">
            <h2>Services</h2>   
            <ul>
                <?php
                $ServicePosts = new WP_Query();
                $ServicePosts->query('showposts=6&post_type=Services');
                while ($ServicePosts->have_posts()) : $ServicePosts->the_post();
                ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
                <?php endwhile; ?>               
            </ul>
        </div>
    </div>
    <div class="service-right-col">
        <div class="personalproperty">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <p><?php the_title();?></p>                     
        </div>
        <div class="personalpropertytext">
            <?php the_content(); ?>
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





























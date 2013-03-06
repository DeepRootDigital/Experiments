<?php get_template_part('header', 'sub'); ?>
<div class="service-data">
    <div class="service-fullwidth">
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






























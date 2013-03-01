<?php get_template_part('header', 'sub'); ?>
<div class="service-data">
    <div class="service-left-col">
        <div class="service-list">
            <h2>Services</h2>   
            <ul>
                <li><a href="#">Service Number One</a></li>
                <li><a href="#">REAL PROPERTY</a></li>
                <li><a href="#">PERSONAL PROPERTY</a></li>
                <li><a href="#">SERVICE NUMBER THREE</a></li>
                <li><a href="#">SERVICE NUMBER FOUR</a></li>
                <li><a href="#">SERVICE NUMBER FIVE</a></li>
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






























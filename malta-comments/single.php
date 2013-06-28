<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="entry">
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
    </div>

<?php endwhile; ?>
<?php endif; ?>


<?php comments_template(); ?>

<?php get_footer(); ?>
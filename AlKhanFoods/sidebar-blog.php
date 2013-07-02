<div id="sidebar">
                <?php
                $sidebarPosts = new WP_Query('posts_per_page=6');
                $sidebarPosts->query(array('post_type' => 'post'));
				$counter = 0;
                while ($sidebarPosts->have_posts()) : $sidebarPosts->the_post();
                    ?>
    <?php if($counter % 2) { ?>
    <div class="module-odd">
        <h2><?php the_title(); ?></h2>
        <div class="module-line"></div>
        <p><?php the_excerpt(); ?></p>
        <div class="button">
            <a href="<?php the_permalink(); ?>">More</a>
        </div>
    </div>
    <?php } ?>
    <?php else { ?>
    <div class="module-even">
           <h2><?php the_title(); ?></h2>
        <div class="module-line"></div>
        <p><?php the_excerpt(); ?></p>
        <div class="button">
            <a href="<?php the_permalink(); ?>">More</a>
        </div>
    </div>
    <?php } ?>
</div>            
<?php $counter++; endwhile; ?>
</div>

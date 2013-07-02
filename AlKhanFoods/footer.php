</div>
<?php $options = get_option('sample_theme_options'); ?>
<?php $mainoptions = get_option('main_theme_options'); ?>
<div class="footerblue"></div>
<div class="footerwhite">
    <div class="container">
        <div class="sitemap">
            <h3>Sitemap</h3>
            <?php wp_nav_menu(array('theme_location' => 'Footer Nav', 'container_class' => 'none',)); ?>
        </div>
        <div class="blogfeed">
            <h3>AKF <span class="ylow">Blog</span></h3>
            <ul>
                <?php
                $miniblogfeed = new WP_Query();
                $miniblogfeed->query(array('post_type' => 'post', 'posts_per_page' => '5',));
                while ($miniblogfeed->have_posts()) : $miniblogfeed->the_post();
                    ?>            
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div class="contactinfo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
            <b>Al Khan Foodstuff, LLC</b>
            <p>
                <?php echo $mainoptions['addresstext']; ?><br/>            
                TEL. <?php echo $mainoptions['telnumber']; ?><br/>
                FAX <?php echo $mainoptions['faxnumber']; ?>            
                <a href="mailto:<?php echo $mainoptions['emailaddress']; ?>"><?php echo $mainoptions['emailaddress']; ?></a>
            </p>
        </div>
    </div>

</div>
<?php wp_footer(); ?>
</body>
</html>

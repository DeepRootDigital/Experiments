 <footer>
    <?php $mainoptions = get_option('main_theme_options'); ?>
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'Footer Nav Left',)); ?>
        <?php wp_nav_menu(array('theme_location' => 'Footer Nav Right',)); ?>
    </nav> 
    <div class="blogfeed">
        <span>LATEST BLOG FEED</span>
        <div class="blogbox">
            <ul>
                <?php
$footerPosts = new WP_Query();
$footerPosts->query('showposts=4');
while ($footerPosts->have_posts()) : $footerPosts->the_post();
    ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="social-icons social-icons-bottom">                  
        <ul>
            <li class="soc-1"><a href="<?php echo $mainoptions['facebookurl'] ?>"></a></li>
            <li class="soc-2"><a href="<?php echo $mainoptions['twitterurl'] ?>"></a></li>
            <li class="soc-3"><a href="<?php echo $mainoptions['pinteresturl'] ?>"></a></li>
            <li class="soc-4"><a href="<?php echo $mainoptions['linkedinurl'] ?>"></a></li>
        </ul>                   
    </div>
    <div class="signup signup-bottom">
        <form>
            <p>Sign up for our newsletter</p>
            <input type="text" onfocus="if(this.value == 'email') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'email'; }" value="email">
            <input id="signup-button" type="submit">
        </form>
    </div>
    <img class="phone-bottom" src="<?php echo get_template_directory_uri(); ?>/images/phoneinfo.png">
    <div class="clear"></div>                    
</footer>
</div>
</div><!-- CANVAS -->
</body>
</html>
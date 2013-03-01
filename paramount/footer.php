 <footer>
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'Footer Nav Left',)); ?>
        <?php wp_nav_menu(array('theme_location' => 'Footer Nav Right',)); ?>
    </nav> 
    <div class="blogfeed">
        <span>LATEST BLOG FEED</span>
        <div class="blogbox">
            <ul>
                <li><a href="#">Cool title for a blog post.</a></li>
                <li><a href="#">Another cool title for a blog post.</a></li>
                <li><a href="#">This is a short blog post.</a></li>
                <li><a href="#">Blogging is good for SEO.</a></li>
            </ul>
        </div>
    </div>
    <div class="social-icons social-icons-bottom">                  
        <ul>
            <li class="soc-1"><a href="#"></a></li>
            <li class="soc-2"><a href="#"></a></li>
            <li class="soc-3"><a href="#"></a></li>
            <li class="soc-4"><a href="#"></a></li>
        </ul>                   
    </div>
    <div class="signup signup-bottom">
        <form>
            <p>Sign up for our newsletter</p>
            <input type="text" value="email">
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
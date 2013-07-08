<?php get_header(); ?>
<div class="container2">
    <div id="homepage">
        <div id="slideFrame">
            <div class="slider-overlay"></div>
            <div class="brown-overlay"></div>
            <ul>
             <?php $options = get_option('sample_theme_options'); ?>
             <?php if ($options['sliderimg1'] !== '') { ?>
             <li>
                <img width="600" height="360" src="<?php echo $options['sliderimg1']; ?>" alt="">
                <h2><?php echo $options['slidetext1'] ?></h2>
            </li>
            <?php } ?>
            <?php if ($options['sliderimg2'] !== '') { ?>
            <li>
                <img width="600" height="360" src="<?php echo $options['sliderimg2']; ?>" alt="">
                <h2><?php echo $options['slidetext2'] ?></h2>
            </li>
            <?php } ?>
            <?php if ($options['sliderimg3'] !== '') { ?>
            <li>
                <img width="600" height="360" src="<?php echo $options['sliderimg3']; ?>" alt="">
                <h2><?php echo $options['slidetext3'] ?></h2>
            </li>
            <?php } ?>
            <?php if ($options['sliderimg4'] !== '') { ?>
            <li>
                <img width="600" height="360" src="<?php echo $options['sliderimg4']; ?>" alt="">
                <h2><?php echo $options['slidetext4'] ?></h2>
            </li>
            <?php } ?>
            <?php if ($options['sliderimg5'] !== '') { ?>
            <li>
                <img width="600" height="360" src="<?php echo $options['sliderimg5']; ?>" alt="">
                <h2><?php echo $options['slidetext5'] ?></h2>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="box">
        <div class="boxhead">
            <img src="<?php echo get_template_directory_uri(); ?>/images/snowflake.png">
            <?php echo $options['sptitle1']; ?>
        </div>
        <div class="dotted"></div>
        <p><?php echo $options['sptext1']; ?></p>
        <a href="<?php echo $options['splink1']; ?>">
            <div class="button">More</div>
        </a>
    </div>
    <div id="box2" class="box">
        <div class="boxhead">
            <img src="<?php echo get_template_directory_uri(); ?>/images/snowflake.png">
            <?php echo $options['sptitle2']; ?>
        </div>
        <div class="dotted"></div>
        <p><?php echo $options['sptext2']; ?></p>
        <a href="<?php echo $options['splink2']; ?>">
            <div class="button">More</div>
        </a>
    </div>
    <div class="box">
        <div class="boxhead">
            <img src="<?php echo get_template_directory_uri(); ?>/images/snowflake.png">
            <?php echo $options['sptitle3']; ?>
        </div>
        <div class="dotted"></div>
        <p><?php echo $options['sptext3']; ?></p>
        <a href="<?php echo $options['splink3']; ?>">
            <div class="button">More</div>
        </a>
    </div>
</div>

</div>
</div>
<div class="quote">
    <div class="container">
        <div class="quotetainer">
            <img class="qmlogo" src="<?php echo get_template_directory_uri(); ?>/images/quotes.png">
            <div class="quotemessage">
                <div class="qdots"></div>
                <p><span style="color:#0097d9;">AL KAHN’S MISSION IS</span> <?php echo $options['missiontext'] ?></p>
                <div class="qdots"></div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="bigblock">
        <?php
        if($options['gspace1img'] == '' ) {
            echo '<img src="'.get_template_directory_uri().'/images/block1.png" />';
        }
        else {
            echo '<img src="'.$options['gspace1img'].'" />';
        }
        ?>
        <div class="overlay">
            <p><b>SADIA</b> PARTNERSHIP
            <?php echo $options['gspace1txt']; ?>
        </p>
        </div>
    </div>
    <div class="wideblock">
        <?php
        if($options['gspace2img'] == '') {
            echo '<img src="'.get_template_directory_uri().'/images/wideblock2.png" />';
        }
        else {
            echo '<img src="'.$options['gspace2img'].'" />';
        }
        ?>
        <div class="overlay">
            <p>
            <b>HEALTH</b> CORNER
            <?php echo $options['gspace2txt']; ?>
        </p>
        </div>
    </div>
    <div class="wideblock">
        <?php
        if($options['gspace3img'] == '') {
            echo '<img src="'.get_template_directory_uri().'/images/wideblock1.png" />';
        }
        else {
            echo '<img src="'.$options['gspace3img'].'" />';
        }
        ?>
        <div class="overlay">
            <p>AKF <b>RECIPES</b>
            <?php echo $options['gspace3txt']; ?>
        </p>
        </div>
    </div>
    <div class="superblock">
        <?php
        if($options['gspace4img'] == '' ) {
            echo '<img src="'.get_template_directory_uri().'/images/superblock.png" />';
        }
        else {
            echo '<img src="'.$options['gspace4img'].'" />';
        }
        ?>
        <div class="overlay">
            <p>
            <b>NEWS</b> & EVENTS
            <?php echo $options['gspace4txt']; ?>
        </p>
        </div>
    </div>

    <div class="section">
        <h2>AKF <span class="ylow"><?php echo $options['p1title'] ?></span>
            <div class="distline"></div></h2>

            <div class="col1">
                <img class="distsymbol" src="<?php echo get_template_directory_uri(); ?>/images/symbol.png">
                <div class="symbolline"></div>
            </div>
            <div class="col2">
             <p><?php echo $options['p1text'] ?></p>
         </div>
         <div class="col3">
          <div class="col-img-overlay"></div>
          <img width="273" height="160" src="<?php echo $options['p1img'] ?>">
          <ul>
            <?php
            $distributionfeed = new WP_Query();
            $distributionfeed->query(array('post_type' => 'post', 'posts_per_page' => '3','category_name' => 'distribution',));
            while ($distributionfeed->have_posts()) : $distributionfeed->the_post();
            ?>            
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
        <?php if ($options['p1name1'] != '') {echo '<li><a href="'.$options['p1link1'].'">'.$options['p1name1'].'</a></li>';} ?>
        <?php if ($options['p1name2'] != '') {echo '<li><a href="'.$options['p1link2'].'">'.$options['p1name2'].'</a></li>';} ?>
    </ul>
</div>
</div>
</div>
<div class="container3">
    <div class="container">
        <div class="section sect2">
            <h2>AKF <span class="ylow"><?php echo $options['p2title'] ?></span>        <div class="distline2"></div></h2>

            <div class="col1">
                <img style="margin-left:10px;" src="<?php echo get_template_directory_uri(); ?>/images/symbol3.png">
                <div class="symbolline"></div>
            </div>
            <div class="col2">
                <p><?php echo $options['p2text'] ?></p>
            </div>
            <div class="col3">
                <div class="col-img-overlay"></div>
                <img width="273" height="160" src="<?php echo $options['p2img'] ?>">
                <ul>
                    <?php
                    $partnershipfeed = new WP_Query();
                    $partnershipfeed->query(array('post_type' => 'post', 'posts_per_page' => '3','category_name' => 'partnerships',));
                    while ($partnershipfeed->have_posts()) : $partnershipfeed->the_post();
                    ?>            
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
                <?php if ($options['p2name1'] != '') {echo '<li><a href="'.$options['p2link1'].'">'.$options['p2name1'].'</a></li>';} ?>
                <?php if ($options['p2name2'] != '') {echo '<li><a href="'.$options['p2link2'].'">'.$options['p2name2'].'</a></li>';} ?>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="section sect3">
        <h2>AKF <span class="ylow"><?php echo $options['p3title'] ?></span>
            <div class="distline"></div></h2>

            <div class="col1">
                <img class="distsymbol" src="<?php echo get_template_directory_uri(); ?>/images/symbol2.png">
                <div class="symbolline"></div>
            </div>
            <div class="col2">
             <p><?php echo $options['p3text'] ?></p>
         </div>
         <div class="col3">
            <div class="col-img-overlay"></div>
            <img width="273" height="160" src="<?php echo $options['p3img'] ?>">
            <ul>
                <?php
                $communityfeed = new WP_Query();
                $communityfeed->query(array('post_type' => 'post', 'posts_per_page' => '3','category_name' => 'communites',));
                while ($communityfeed->have_posts()) : $communityfeed->the_post();
                ?>            
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            <?php if ($options['p3name1'] != '') {echo '<li><a href="'.$options['p3link1'].'">'.$options['p3name1'].'</a></li>';} ?>
            <?php if ($options['p3name2'] != '') {echo '<li><a href="'.$options['p3link2'].'">'.$options['p3name2'].'</a></li>';} ?>
        </ul>
    </div>
</div>
</div>
</div>
<?php get_footer(); ?>
<?php get_header(); ?>

<head>
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" />
</head>


    <div id="single-post">
    <h1><?php the_title(); ?>
    </h1>
    </div>
    
    

    
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; endif; ?>
        
   
    
    <body>
        <div id="containerbody1"> 
            </div>

            <div id="containerbody2">
                <div class="whatwedo">
                    <p> WHAT WE DO</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gears1.png"/>
                    <img class="arrow1" src="<?php echo get_template_directory_uri(); ?>/images/gears1arrow.png"/>
                </div>

                <div class="rbox1">
                    <div class="readmore1">Read More</div>
                </div>

                <div class="dottedline1">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/dottedline1.png"/>
                </div>

                <div class="whoweare">
                    <div class="readmore2">Read More</div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/whoarewearrow.png"/>
                    <div class="who">WHO ARE WE</div>
                    <div class="people">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/people.png"/>
                    </div>
                    
                </div>
                
                <div>
                    
                </div>

            </div>
        
        
        
        
        
        
        
        
        
        
    </body>
 
        
    
    
    
    
    <?php get_footer(); ?>
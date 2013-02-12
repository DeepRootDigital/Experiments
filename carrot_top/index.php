<?php get_header(); ?>

<div class="slider">
    <img src="<?php echo get_template_directory_uri(); ?>/images/glass2.png" width="900" />

    <div class="caption">
        Lorem Ipsum
    </div>
</div>

<div class="bodytexture">
    <div class="whatwedo">
        <div class="lftalign">
            <h2>WHAT WE DO</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/gears1.png" />
        </div>
        <div class="arrow">
        <img src="<?php echo get_template_directory_uri(); ?>/images/contactusarrow.png"/>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore 
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
            dolore eu fugiat nulla pariatur. 
        </p>
        <div class="readmore1">
            <div class="submit">
                Read More
            </div>
        </div>
    </div>
    <hr />

    <div class="whoweare">
        <div class="rightalign">
            <h2>WHO WE ARE</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/people.png" />
        </div>
        <img class="arrow2" src="<?php echo get_template_directory_uri(); ?>/images/whoarewearrow.png"/>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
            fugiat nulla pariatur. 
        </p>
        <div class="readmore2">
            <div class="submit">
                Read More
            </div>
        </div>
    </div>
    <hr />

    <div class="contactinfo">
        <div class="contactus">
            <h2>Contact Us</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/email.png" />
        </div>
        <img class="arrow3" src="<?php echo get_template_directory_uri(); ?>/images/contactusarrow.png"/>
        <div class="address">
            <h3>gluestick marketing</h3>
            <h5>4542 ruffner st. suite 170
                san diego ca, 92111
                <br />
                <br />
                123.456.7890
                nicole@gluestickmarketing.com</h5>
        </div>
        <img class="arrow4" src="<?php echo get_template_directory_uri(); ?>/images/contactusarrow.png"/>

        <div class="message">
            <h4>Leave Us A Message</h4>
            <div class="inputs">
                <input type="text" name="name" value="name" />
                <input type="text" name="email" value="email" />
                <input class="textbox" type="text" name="message" value="message" />
            </div>
            <div class="readmore3">
                <div class="submit">
                    Submit
                </div>
            </div>
        </div>   
    </div>
    <hr />

    <div class="bloginfo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/commentimage.png"/>
        <p>don't forget to check out our blog</p>
    </div>

    <?php get_footer(); ?>
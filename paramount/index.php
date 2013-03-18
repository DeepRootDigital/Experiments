<?php get_header(); ?>
<?php $homepageoptions =  get_option('sample_theme_options'); ?>
<div class="slider">
    <ul>
        <?php if ($homepageoptions['sliderimg1'] !== '') { ?>
    <li><img  src="<?php echo $homepageoptions['sliderimg1']; ?>" alt=""></li>
    <?php } ?>
    <?php if ($homepageoptions['sliderimg2'] !== '') { ?>
    <li><img  src="<?php echo $homepageoptions['sliderimg2']; ?>" alt=""></li>
    <?php } ?>
    <?php if ($homepageoptions['sliderimg3'] !== '') { ?>
    <li><img  src="<?php echo $homepageoptions['sliderimg3']; ?>" alt=""></li>
    <?php } ?>
    <?php if ($homepageoptions['sliderimg4'] !== '') { ?>
    <li><img  src="<?php echo $homepageoptions['sliderimg4']; ?>" alt=""></li>
    <?php } ?>
    <?php if ($homepageoptions['sliderimg5'] !== '') { ?>
    <li><img  src="<?php echo $homepageoptions['sliderimg5']; ?>" alt=""></li>
    <?php } ?>
    </ul>
</div>
<div class="submitbox submitbox-top">
    <h1>PROPERTY TAX REDUCTION</h1>
    <p>Feasibility Study</p>
    <form action="https://register.listanimal.com/forms/?listid=3755" method="post" name="optin" onsubmit="return required();">
        <input onfocus="if(this.value == 'name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'name'; }" type="text" name="name" value="name" />
        <input onfocus="if(this.value == 'email') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'email'; }" type="text" name="email" value="email" />
        <input onfocus="if(this.value == 'phone') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'phone'; }" type="text" name="cell" value="phone" />
        <input id="submitbox-submit" type="submit" value="Subscribe">         
    </form> 
	<script type="text/javascript">
function required(){
	var email = document.forms["optin"]["email"].value;
	if (email == ""){
		alert("Please enter your email address.");
		var error = 1;
		return false;
	}
	var x = document.forms["optin"]["email"].value;
	var atpos = x.indexOf("@");
	var dotpos = x.lastIndexOf(".");
	if (atpos < 1 || dotpos < atpos+2 || dotpos + 2 >= x.length){
		alert("A valid email address is required.");
		return false;
	}
}
</script>
    <span>[No Cost]</span>          
</div>
<div class="clear"></div>
<div class="info-box">
    <div class="connect">
        <div class="bluebox"><?php echo $homepageoptions['p1title'] ?>
            <div class="blueboxcontent"><?php echo $homepageoptions['p1text'] ?><br/><span class="readmore"><a href="<?php echo $homepageoptions['p1link'] ?>">Read More</a></span></div>
        </div>
    </div>
    <div class="appeal">
        <div class="bluebox"><?php echo $homepageoptions['p2title'] ?>
            <div class="blueboxcontent"><?php echo $homepageoptions['p2text'] ?><br/><span class="readmore"><a href="<?php echo $homepageoptions['p2link'] ?>">Read More</a></span></div>
        </div>
    </div>
    <div class="refund">
        <div class="bluebox"><?php echo $homepageoptions['p3title'] ?>
            <div class="blueboxcontent"><?php echo $homepageoptions['p3text'] ?><br/><span class="readmore"><a href="<?php echo $homepageoptions['p3link'] ?>">Read More</a></span></div>
        </div>
    </div>
    <div class="represent">
        <div class="bluebox"><?php echo $homepageoptions['p4title'] ?>
            <div class="blueboxcontent"><?php echo $homepageoptions['p4text'] ?><br/><span class="readmore"><a href="<?php echo $homepageoptions['p4link'] ?>">Read More</a></span></div>
        </div>
    </div>
    <div class="evaluate">
        <div class="bluebox"><?php echo $homepageoptions['p5title'] ?>
            <div class="blueboxcontent"><?php echo $homepageoptions['p5text'] ?><br/><span class="readmore"><a href="<?php echo $homepageoptions['p5link'] ?>">Read More</a></span></div>
        </div>
    </div>
    <div class="engage">
        <div class="bluebox"><?php echo $homepageoptions['p6title'] ?>
            <div class="blueboxcontent"><?php echo $homepageoptions['p6text'] ?><br/><span class="readmore"><a href="<?php echo $homepageoptions['p6link'] ?>">Read More</a></span></div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="home-content">
    <div class="lefttext">
        <h2><?php echo $homepageoptions['hp1title'] ?></h2>
        <p><?php echo $homepageoptions['hp1text'] ?></p>
        <h2><?php echo $homepageoptions['hp2title'] ?></h2>
        <p><?php echo $homepageoptions['hp2text'] ?></p>
    </div>
    <div class="rightlogo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/rightlogo.png">
    </div>
</div>
<div class="clear"></div>
<div class="quote-content">
    <div class="quote">
        <img class="quoteimage" src="<?php echo get_template_directory_uri(); ?>/images/quote.png" alt="rightlogo"/>
        <h1><?php echo $homepageoptions['quotetext'] ?></h1>
        <h3><?php echo $homepageoptions['quoteauthor'] ?></h3>
    </div>
    <div class="submitbox submitbox-bottom">
        <h1>PROPERTY TAX REDUCTION</h1>
        <p>Feasibility Study</p>
        <form action="https://register.listanimal.com/forms/?listid=3755" method="post" name="optin" onsubmit="return required();">
        <input onfocus="if(this.value == 'name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'name'; }" type="text" name="name" value="name" />
        <input onfocus="if(this.value == 'email') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'email'; }" type="text" name="email" value="email" />
        <input onfocus="if(this.value == 'phone') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'phone'; }" type="text" name="cell" value="phone" />
        <input id="submitbox-submit" type="submit" value="Subscribe">         
    </form> 
        <span>[No Cost]</span>          
    </div>
</div>
<div class="clear"></div>
</div><!-- HOME BACKGROUND -->
<div class="center">
   <?php get_footer(); ?>
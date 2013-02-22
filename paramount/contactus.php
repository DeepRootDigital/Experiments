<?php
/*
   Template Name: Paramount Contact Us
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Paramount</title>
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/7fae6fe2-5b59-4099-96aa-619fda1b22d5.css"/>
        <script type="text/javascript" src="http://fast.fonts.com/jsapi/7fae6fe2-5b59-4099-96aa-619fda1b22d5.js"></script>

        <script src="<?php echo get_template_directory_uri(); ?>/paramount.js" type="text/javascript"></script>

    </head>
    <body>
        <!-- HEADER CONTENT -->
        <div class="servicescontainer">
            <div class="shadow"></div>
            <div class="header">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="347" height="85" alt="logo"/>
                <img class="phoneinfo" src="<?php echo get_template_directory_uri(); ?>/images/phoneinfo.png" width="164" height="22" alt="phoneinfo"/>
                <p>SIGN UP FOR OUR NEWSLETTER</p>
                <input type="text" name="email" value="email" />
                <img class="gobutton" src="<?php echo get_template_directory_uri(); ?>/images/gobutton.png" width="33" height="29" alt="gobutton"/>
            </div>

            <div class="content2">
                <img class="homeimage" src="<?php echo get_template_directory_uri(); ?>/images/homeimage.png" width="18" height="17" alt="homeimage"/>
                <div class="nav">
                    <ul>
                        <li>ABOUT US</li>
                        <li>SERVICES</li>
                        <li>BLOG</li>
                        <li>SUCCESS STORIES</li>
                        <li>FREE EVALUATION</li>
                        <li>CONTACT US</li>
                    </ul>

                    <div class="topsocialmedia">                  
                        <ul><!-- DON'T FORGET THE ANIMATED CLASSES BELLOW! -->
                            <li><img class="link" src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" width="35" height="37" alt="facebook"/></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/pintrest2.png" alt="facebook"/></li>
                            <li><img class="twit" src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" width="35" height="37" alt="facebook"/></li>
                            <li><img class="face" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" width="35" height="37" alt="facebook"/></li>
                        </ul>                   
                    </div>
                </div>     

                <div class="contactcontainer">
                    <div class="contactleftcontent">
                        <!-- CONTACT BOX INFORMATION FIELDS -->
                        <div class="blogbluebar">
                            <h2>CONTACT US</h2>
                        </div>
                        <div class="contactaddress">
                            <p>10509 VISTA SORRENTO PRWY.<br />
                            SUITE 201<br />
                            SAN DIEGO, CA 92121</p>
                        </div>
                        <div class="contactmain">
                            <p><span style="color: #4a698d">MAIN</span><br />
                                  858.225.1200</p>
                        </div>
                        <div class="contactfax">
                            <p><span style="color: #4a698d">FAX</span><br />
                                    866.823.5577</p>
                        </div>
                        <div class="contactmailing">
                            <p><span style="color: #4a698d">MAILING ADDRESS</span><br />
                                8895 TOWNE CENTRE DR<br />
                                105-280<br />
                                SAN DIEGO, CA 92122</p>  
                        </div>
                        <div class="contactemail">
                            <p>INFO@PPTAXAPPEAL.COM</p>
                        </div>

                    </div>

                    <div class="contactrightcontent">
                        <div class="bloginputs2">
                            <div class="name_email">
                                <input type="text" name="name" value="name" />
                                <input type="text" name="email" value="email" />
                            </div>

                            <input class="blogcomment" type="text" name="comment" value="comment" />
                            <p>*If you would like to email us directly, you can do so at <span style="color: #154174;font-size: 15px">info@pptaxappeal.com</span></p>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/blogsubmitbutton.png" width="74" height="26" alt="blogsubmitbutton"/>
                        </div>
                    </div>
                </div>

            </div> 
            <!-- FOOTER CONTENT -->
            <div class="footer">
                <div class="bottomnav">
                    <ul>
                        <li>HOME</li>
                        <li>ABOUT US</li>
                        <li>SERVICES</li>
                        <li>SUCCESS STORIES</li>
                    </ul>
                    <ul>
                        <li>BLOG</li>
                        <li>FREE EVALUATION</li>
                        <li>CONTACT US</li>
                        <br />
                        <li> </li>
                    </ul>
                </div> 

                <div class="blogfeed">
                    <span style="color: #154174 ; font-size: 22px ; margin-left: 55px;">LATEST BLOG FEED</span>
                    <input type="text" name="place holder" value="place holder " />
                </div>

                <div class="rightfootercontent">
                    <ul><!-- DON'T FORGET THE ANIMATED CLASSES BELLOW! -->
                        <li><img class="face" src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" width="35" height="37" alt="facebook"/></li>
                        <li><img class="twit" src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" width="35" height="37" alt="facebook"/></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/pintrest.png" alt="pintrest"/></li>
                        <li><img class="link" src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" width="35" height="37" alt="facebook"/></li>
                    </ul>
                    <p>SIGN UP FOR OUR NEWSLETTER</p>
                    <input type="text" name="email" value="email" />
                    <img class="bottomgobutton" src="<?php echo get_template_directory_uri(); ?>/images/gobutton.png" width="33" height="29" alt="gobutton"/>
                    <img class="bottomphoneinfo" src="<?php echo get_template_directory_uri(); ?>/images/phoneinfo.png" width="164" height="22" alt="phoneinfo"/>
                </div>
                <div class="bottomtexture"></div>
            </div>

        </div>

    </body>
</html>

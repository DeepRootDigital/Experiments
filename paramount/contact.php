<?php /* Template Name: Contact Page */ ?>
<?php $mainoptions = get_option('main_theme_options'); ?>
<?php get_template_part('header', 'sub'); ?>
<div class="contact-data">
    <div class="contact-data-left-col">
        <ul>
            <li><?php echo $mainoption['addresstext']; ?></li>
                <li>
                    <b>MAIN</b>
                    <?php echo $mainoption['telnumber']; ?>
                </li>
                <li>
                   <b>FAX</b>
                   <?php echo $mainoption['faxnumber']; ?>
                </li>
                <li>
                    <b>MAILING ADDRESS</b>
                    <?php echo $mainoption['mailingaddresstext']; ?>
                </li>
                <li>
                    <?php echo $mainoptions['emailaddress'] ?>
                </li>
            </ul>
        </div>
        <div class="contact-data-right-col">
            <div class="contact-line"></div>
            <div class="comment-col">
                <form action="<?php echo site_url(); ?>/wp-comments-post.php" method="post">
                    <input onfocus="if(this.value == 'name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'name'; }" name="author" value="name" size="22" tabindex="1" type="text">
                    <input onfocus="if(this.value == 'email') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'email'; }" name="email" value="email" size="22" tabindex="2" type="text">
                    <textarea name="comment" tabindex="4">message</textarea>
                    <p>*If you would like to email us directly you can do so at <a href="mailto:<?php echo $mainoptions['emailaddress'] ?>"><?php echo $mainoptions['emailaddress'] ?></a></p><input name="submit" tabindex="5" value="Submit Comment" type="image" src="<?php echo get_template_directory_uri(); ?>/images/blogsubmitbutton.png">
                    <input name="comment_post_ID" value="1" type="hidden">
                    <div class="line"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div><!-- HOME BACKGROUND -->
<div class="center">
    <?php get_footer();?>
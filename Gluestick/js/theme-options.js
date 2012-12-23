jQuery(document).ready(function($) {
    $('.colorpicker').hide();
    $('.colorpicker').farbtastic('.color');

    $('.color').click(function() {
        $('.colorpicker').fadeIn();
    });

    $(document).mousedown(function() {
        $('.colorpicker').each(function() {
            var display = $(this).css('display');
            if ( display == 'block' )
                $(this).fadeOut();
        });
    });
});

jQuery(document).ready(function($) {
    $('.colorpicker2').hide();
    $('.colorpicker2').farbtastic('.color2');

    $('.color2').click(function() {
        $('.colorpicker2').fadeIn();
    });

    $(document).mousedown(function() {
        $('.colorpicker2').each(function() {
            var display = $(this).css('display');
            if ( display == 'block' )
                $(this).fadeOut();
        });
    });
});

jQuery(document).ready(function() {
jQuery('#upload_image_button').click(function() {
formfield = jQuery('#upload_image').attr('name');
tb_show('', 'media-upload.php?type=image&TB_iframe=true');
return false;
});

window.send_to_editor = function(html) {
imgurl = jQuery('img',html).attr('src');
jQuery('#upload_image').val(imgurl);
tb_remove();
}

});
<?php $content_text_color = get_option('content_text_color'); ?>
<style>
    body {
       background-color:  <?php echo $content_text_color; ?>;
    }
    
    .navigation ul li a:hover {
        color:#203;
    }
</style>
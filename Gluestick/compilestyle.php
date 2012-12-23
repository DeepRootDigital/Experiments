<?php 
    $bkgcolor = get_option('bgcolor');
    $maincolor = get_option('maincolor');
    $logocolor1 = get_option('logocolor1');
    $logocolor2 = get_option('logocolor2');
    $logocolor3 = get_option('logocolor3');
?>
<style>
    body {
       background-color:  <?php echo $bkgcolor; ?>;
       
    }

    .logo h1 {
        color: <?php echo $maincolor; ?>
    }
    
    .navigation ul li a:hover {
        color:<?php echo $maincolor;?>;
    }
    
    .box h2 {
        color: <?php echo $maincolor;?>;
    }
    
    .marker {
        color: <?php echo $maincolor; ?>;
    }
    .logocolor1 {
        background-color: <?php echo $logocolor1; ?>
    }
    .logocolor2 {
        background-color: <?php echo $logocolor2; ?>
    }
    .logocolor3 {
        background-color: <?php echo $logocolor3; ?>
    }
    
    .footermenu h2 {
        color: <?php echo $maincolor; ?>;
    }
    
    .contactinfo h2 {
        color: <?php echo $maincolor; ?>;
    }
</style>
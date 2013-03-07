<?php $homepageoptions =  get_option('sample_theme_options'); ?>
<style>
<?php if ($homepageoptions['p1img'] !== '') { ?>
.connect {
background-image:url('<?php echo $homepageoptions['p1img'] ?>');
}
<?php } ?>
<?php if ($homepageoptions['p2img'] !== '') { ?>
.appeal {
background-image:url('<?php echo $homepageoptions['p2img'] ?>');
}
<?php }?>
<?php if ($homepageoptions['p3img'] !== '') { ?>
.refund {
background-image:url('<?php echo $homepageoptions['p3img'] ?>');
}
<?php }?>
<?php if ($homepageoptions['p4img'] !== '') { ?>
.represent {
background-image:url('<?php echo $homepageoptions['p4img'] ?>');
}
<?php }?>
<?php if ($homepageoptions['p5img'] !== '') { ?>
.evaluate {
background-image:url('<?php echo $homepageoptions['p5img'] ?>');
}
<?php }?>
<?php if ($homepageoptions['p6img'] !== '') { ?>
.engage {
background-image:url('<?php echo $homepageoptions['p6img'] ?>');
}
<?php }?>
</style>
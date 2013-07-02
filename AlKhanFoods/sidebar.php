<div id="sidebar">
    <?php
    $sidebaroptions = get_option('sidebar_theme_options');  
    ?>    
    <?php if($sidebaroptions['pane1title'] != '') { ?>
    <div class="module-odd">
        <h2><?php echo $sidebaroptions['pane1title']; ?></h2>
        <div class="module-line"></div>
        <p><?php echo $sidebaroptions['pane1text']; ?></p>
        <div class="button">
            <a href="<?php echo $sidebaroptions['pane1link']; ?>">More</a>
        </div>
    </div>
    <?php } ?>
    <?php if($sidebaroptions['pane2title'] !== '') { ?>
    <div class="module-even">
        <h2><?php echo $sidebaroptions['pane2title']; ?></h2>
        <div class="module-line"></div>
        <p><?php echo $sidebaroptions['pane2text']; ?></p>
        <div class="button">
            <a href="<?php echo $sidebaroptions['pane2link']; ?>">More</a>
        </div>
    </div>
    <?php } ?>
    <?php if($sidebaroptions['pane3title'] !== '') { ?>
    <div class="module-odd">
        <h2><?php echo $sidebaroptions['pane3title']; ?></h2>
        <div class="module-line"></div>
        <p><?php echo $sidebaroptions['pane3text']; ?></p>
        <div class="button">
         <a href="<?php echo $sidebaroptions['pane3link']; ?>">More</a>
     </div>
 </div>
 <?php } ?>
 <?php if($sidebaroptions['pane4title'] !== '') { ?>
 <div class="module-even">
    <h2><?php echo $sidebaroptions['pane4title']; ?></h2>
    <div class="module-line"></div>
    <p><?php echo $sidebaroptions['pane4text']; ?></p>
    <div class="button">
     <a href="<?php echo $sidebaroptions['pane4link']; ?>">More</a>
 </div>
</div>
<?php } ?>
<?php if($sidebaroptions['pane5title'] !== '') { ?>
<div class="module-odd">
    <h2><?php echo $sidebaroptions['pane5title']; ?></h2>
    <div class="module-line"></div>
    <p><?php echo $sidebaroptions['pane5text']; ?></p>
    <div class="button">
      <a href="<?php echo $sidebaroptions['pane5link']; ?>">More</a>
  </div>
</div>
<?php } ?>
<?php if($sidebaroptions['pane6title'] !== '') { ?>
<div class="module-even">
    <h2><?php echo $sidebaroptions['pane6title']; ?></h2>
    <div class="module-line"></div>
    <p><?php echo $sidebaroptions['pane6text']; ?></p>
    <div class="button">
      <a href="<?php echo $sidebaroptions['pane6link']; ?>">More</a>
  </div>
</div>            
<?php } ?>
</div>

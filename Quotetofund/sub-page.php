<?php get_header(); ?>
<?php 
/*
Template Name: sub-page
*/
?>
<section class="sub-page-top-image">
	<img src="<?php echo get_template_directory_uri(); ?>/images/sub-page-top-image.png" />
</section>
<?php get_template_part('blogfeed','sidemenu'); ?>
<section class="sub-page-content">
	<div class="about-info">
		<h1><span>about</span> quote 2 fund</h1>
		<img class="side-bottom" src="<?php echo get_template_directory_uri(); ?>/images/bottom-body-dotted-line.png" />
		<div class="sub-page-about-text">
			<p>Est legere argumentum dissentiet ea, per elit nihil et. Quo quodsi accusata suavitate in, dicit audiam inciderint ei vix. An consulatu prodesset pro, falli noluisse mea ne, vivendu m dissentiet at mel. Ut nibh periculis honestatis nam, has an epicuri eleifend.</p>
			<p>Ea brute intellegam eam, id mei facete deserunt. An albucius pericula cum, magna albucius sapientem ius cu, id sed nobis quidam. Et solet nonumy voluptaria mei, habeo everti noluisse ius ad, eos no postulant maiestatis. Ex mentitum splendide vis. Duo tamquam volumus et. Ad his diam ceteros.</p>
			<p>Pro in dolor semper, qui esse reque ut. No oblique omittantur vim, vix ad euismod voluptua. Qui simul lobortis eloquentiam ne, vix enim movet tractatos in.</p>
			<p>Euripidis assueverit definitiones te vis, albucius suscipiantur in has, qui ornatus fuisset philosophia no. Tation detraxit cotidieque ne has, vix eu mandamus concludaturque. Liber rationibus ne pri. Et qui sanctus epicuri.</p>
			<p>Appellantur adversarium eum ut. Vim at fuisset similique sententiae. Graeco salutatus intellegat ad has, graeci oblique ius ut, an pro alii mediocrem. Ex oblique electram voluptaria </p>
		</div>
	</div>
	<div id="subpage-sidebar">
		<?php get_template_part('sidebar','blogfeed'); ?>
	</div>
</section>
<?php get_footer(); ?>
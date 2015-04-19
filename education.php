<?php
/**
 * displaying education
 *
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h2>Education</h2>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php $school = new WP_Query(array(
				'post_type'	=>	'school'
			)); ?>
			<?php while($school->have_posts()) : $school->the_post(); ?>
			<div style="padding: 1em; display: block;">
				<div style="width: 70%; float:left;">
					<h3><?php the_field( 'school' ); ?></h3>
					<h4><?php the_field( 'degree' ); ?></h4>
				</div>
				<div style="width: 30%; float:left; background: red; color: white; padding: 1em;">
					<h4><?php the_field( 'dates' ); ?></h4>
				</div>
				<br><br>
				<p style="margin-top: 1em;"><?php the_field( 'detailed_description' ); ?></p>
				<hr>
			</div>
		<?php endwhile; ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
<?php
/**
 * displaying experience
 *
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

	<!-- WORK EXPERIENCE -->
		<header>
			<h2>Work Experience</h2>
		</header><!-- .entry-header -->

		<?php $experience = new WP_Query(array(
			'post_type'	=>	'experience'
		)); ?>
		<?php while($experience->have_posts()) : $experience->the_post(); ?>
			<div>
				<div style="width: 70%; float:left;">
					<h3 style="margin: 0"><?php the_field( 'title' ); ?></h3>
					<h4 style="margin: 0"><?php the_field( 'company' ); ?></h4>
				</div>
				<div style="width: 30%; float:left; background: red; color: white; padding: 0.5em 0.25em;">
					<h4 style="margin: 0; font-size: 0.95em; text-align: center;"><?php the_field( 'dates' ); ?></h4>
				</div>
				<br><br>
				<p><?php the_field( 'detailed_description' ); ?></p>
				<hr>
			</div>
		<?php endwhile; ?>


	<!-- EDUCATION -->
		<header>
			<h2>Education</h2>
		</header><!-- .entry-header -->

		<?php $school = new WP_Query(array(
				'post_type'	=>	'school'
			)); ?>
			<?php while($school->have_posts()) : $school->the_post(); ?>
			<div>
				<div style="width: 70%; float:left;">
					<h3 style="margin: 0"><?php the_field( 'school' ); ?></h3>
					<h4 style="margin: 0"><?php the_field( 'degree' ); ?></h4>
				</div>
				<div style="width: 30%; float:left; background: red; color: white; padding: 0.5em 0.25em;">
					<h4 style="margin: 0; font-size: 0.95em; text-align: center;"><?php the_field( 'dates' ); ?></h4>
				</div>
			</div>
			<br><br>
			<p style="margin-top: 1em;"><?php the_field( 'detailed_description' ); ?></p>
			<hr>
		<?php endwhile; ?>


	</div><!-- .entry-content -->

</article><!-- #post-## -->
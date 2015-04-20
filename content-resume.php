<?php
/**
 * The template for displaying resume and experience
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>

	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

		?>

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


	<footer class="entry-footer">
		<?php twentyfifteen_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

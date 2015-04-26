<?php
/**
 * Displaying Recruiter Content
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
		<h1>Boston Recruiters</h1>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

		?>

		<div class="recruiter__container">

			<table class="tables">
			  <thead>
			    <tr>
			      <th>Name</th>
			      <th>Company</th>
			      <th>Recommendations Received</th>
			      <th>Recommendations Given</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			    	<?php $recruiter = new WP_Query(array(
							'post_type'	=>	'recruiter'
						)); ?>
						<?php while($recruiter->have_posts()) : $recruiter->the_post(); ?>
			      <td><a href="<?php the_title ?>" target=_blank"><?php the_field( 'recruiters_name' ); ?></a></td>
			      <td><a href="<?php the_field( 'company_url' ); ?>" target=_blank"><?php the_field( 'company' ); ?></a></td>
			      <td><?php the_field( 'recommendations_received' ); ?></td>
			      <td><?php the_field( 'recommendations_given' ); ?></td>
			    </tr>
			   <?php endwhile; ?>
			  </tbody>
			</table>
			
	</div> <!-- recruiter__container -->

	</div><!-- .entry-content -->


	<footer class="entry-footer">
		<?php twentyfifteen_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

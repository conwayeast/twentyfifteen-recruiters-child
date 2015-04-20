<?php
/**
 * displaying project
 *
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

	<?php $project = new WP_Query(array(
			'post_type'	=>	'project',
			'posts_per_page' => 1
		)); ?>
		<?php while($project->have_posts()) : $project->the_post(); ?>

			<div>
					<?php

						$image = get_field( 'featured_project_image' );

						if( !empty($image) ): ?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"/>

						<?php endif; ?>

						<div style="text-align: center;">

							<h3 style="margin: 0"><?php the_field( 'project_details' ); ?></h3>

							<a href="<?php the_field( 'project_button' ); ?>" target="_blank" title=""><button type=""><p>Visit Site</p></button></a>

						</div><!-- text-align:center -->

			</div>

		<?php endwhile; endif; ?>


	</div><!-- .entry-content -->

</article><!-- #post-## -->
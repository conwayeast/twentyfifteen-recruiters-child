<?php
/*
Template Name: Projects
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<h1>Portfolio</h1>

		<?php
      $args = array(
        'post_type' => 'project',
      );
      $query = new WP_Query( $args );
    ?>

    <?php if ($query->have_posts()): while ($query->have_posts()) : $query->the_post(); ?>

		<?php get_template_part( 'content', 'project', get_post_format() ); ?>

		<?php endwhile; endif; wp_reset_postdata();  ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>

<?php
/*
Template Name: Home
*/

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<?php
	      $args = array(
	        'post_type' => 'home',
	      );
	      $query = new WP_Query( $args );
    	?>

	    <?php if ($query->have_posts()): while ($query->have_posts()) : $query->the_post(); ?>

			<?php get_template_part( 'content', 'home', get_post_format() ); ?>

			<?php endwhile; endif; wp_reset_postdata();  ?>


		<!-- <div style="padding: 0em 1em 2em 4.25em;">
			<h2 style="font-size:3.25em; line-height: 145%; margin-bottom: 0.35em; margin-top: -24px;">Front End Development <br> &amp; Graphic Design</h2>
			<h3 style="font-size:2.75em; line-height: 135%; font-family:helvetica;">Obsessed with creating good user experiences, snowboarding and anything bacon related.</h3>
			<br>
			<div style="text-align:center;">
				<a href="http://localhost/cdub/portfolio/" title=""><button type="">View My Work</button></a>
			</div>
		</div> -->


		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
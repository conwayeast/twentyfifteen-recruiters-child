<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>



<div class="hero__container">

  <h1 class="hero__title">
    <?php the_field( 'main_title' ); ?>
    <br>
    &amp; <?php the_field( 'main_title_two' ); ?>
  </h1>

  <h3 class="hero_byline">
    <?php the_field( 'byline' ); ?>
  </h3>

  <div style="text-align: center;">

    <a href="<?php the_field( 'button_link' ); ?>" title=""><button type=""><?php the_field( 'button_text' ); ?></button></a>

  </div>

	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

 </div><!-- .hero__Container -->


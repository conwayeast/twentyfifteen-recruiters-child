<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>



    <div style="padding: 0em 1em 2em 4.25em;">

      <h2 style="font-size:3.25em; line-height: 145%; margin-bottom: 0.35em; margin-top: -24px;">
        <?php the_field( 'main_title' ); ?>
        <br>
        &amp; <?php the_field( 'main_title_two' ); ?>
      </h2>


      <h3 style="font-size:2.75em; line-height: 125%; font-family:helvetica;"><?php the_field( 'byline' ); ?></h3>

      <br>

      <div style="text-align: center;">

        <a href="<?php the_field( 'button_link' ); ?>" title=""><button type=""><p><?php the_field( 'button_text' ); ?></p></button></a>

      </div>





	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

 </div><!-- padding -->


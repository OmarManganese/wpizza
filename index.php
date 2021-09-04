<?php get_header(); ?>
  
  <?php 
  
    if( have_posts() ) {
      while( have_posts() ) {
        the_post();

        echo '<p>' . get_the_content() . '</p>';
      }
    }

  ?>

<?php get_footer(); ?>
<?php get_header(); ?>

<div class="container-md">
  <section id="menu">
    <div class="navbar-compensation">
      <h1>Menù</h1>
      <?php  

        $post_type = 'pizza';

        $taxonomy = 'pizza-types';

        $terms = get_terms( array(
          'taxonomy' => $taxonomy,
          'orderby' => 'ID',
          'order' => 'ASC',
          'hide_empty' => true
        ));
        ?>

        <div class="accordion">
          <?php
            foreach($terms as $term) :

              $args = array(
                'post_type' => $post_type,
                'tax_query' => array(
                  array(
                    'taxonomy' => $taxonomy,
                    'field' => 'slug',
                    'terms' => $term
                  ),
                ),
                'orderby' => 'date',
                'order' => 'ASC'
              );
            
              $query = new WP_Query($args);
            
              if( $query->have_posts() ) : ?>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading<?php echo $term->slug; ?>"> 
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $term->slug; ?>" aria-expanded="true" aria-controls="<?php echo $term->slug; ?>">
                      <?php echo $term->name; ?>
                    </button>
                  </h2>
                  <div id="<?php echo $term->slug; ?>" class="accordion-collapse collapse show" aria-labelledby="heading<?php echo $term->slug; ?>">
                    <div class="accordion-body">
                      <?php while( $query->have_posts() ) : $query->the_post(); ?>
                        <h3> <?php echo get_the_title(); ?> </h3>    
                        <p> <?php echo get_the_content(); ?> </p> 
                      <?php endwhile; ?>   
                    </div>
                  </div>
                </div>   
              <?php       
              endif;
            endforeach;
          ?>
        </div>
    </div>  
  </section>
</div>


<section id="contact">
  <div class="container-md navbar-compensation">
    <h1>Contact us</h1>
    <?php echo do_shortcode('[contact-form-7 id="33" title="Contact form 1"]'); ?>
  </div>
</section>


<?php 
  if( have_posts() ) {
    while( have_posts() ) {
      the_post();

      the_content();
    }
  }
?>




<?php get_footer(); ?>
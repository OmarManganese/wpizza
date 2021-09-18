<?php get_header(); ?>


<section id="menu" class="navbar-compensation">
  <div class="container-md section-container">
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



<section id="contact" class="navbar-compensation">
  <div class="contact-section-bckg-color">
    <div class="container-md section-container">
      <h1>Contact us</h1>
      <?php echo do_shortcode('[contact-form-7 id="33" title="Contact form 1"]'); ?>
    </div>
  </div>
</section>


<section id="where-we-are" class="navbar-compensation">
  <div class="container-md section-container">
    <h1>Where we are</h1>
    <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=8.635447025299074%2C45.001231187943894%2C8.643665313720705%2C45.00555519849705&amp;layer=mapnik&amp;marker=45.00339323401596%2C8.639556169509888" style="border: 1px solid black"></iframe>
    <br/>
    <small>
      <a href="https://www.openstreetmap.org/?mlat=45.00339&amp;mlon=8.63956#map=17/45.00339/8.63956">Visualizza mappa ingrandita</a>
    </small>
  </div>
</section>


<?php get_footer(); ?>
<?php
get_header();
?>
<main>
 

  <div class="container marketing">
  <div class="row">
          <div class="col-md-8">
    <?php 
    while (have_posts()) : the_post();
       ?>
        
            <h4 class="featurette-heading">
              <?php the_title() ?>
            </h4>
            <?php echo get_post_meta( $post->ID, 'ListeningToInput', true ); ?><br>
            <?php the_category( ', ' ); ?><br>
            <em><?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></em><br>
            <?php the_post_thumbnail('full') ?>
            <p class="lead"><?php the_content() ?></p>
    
    <?php endwhile; ?>
    
    </div>
    <div class="col-4">
    <?php get_sidebar() ?>
    </div>
        </div>



  </div><!-- /.container -->

  <?php get_footer() ?>
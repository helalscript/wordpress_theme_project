<?php
get_header();
?>
<!--............................. welcome box................................. -->
		<div class="mv_lightgray_wrapper mv_about_wrapper" data-scroll-index='1'>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mv_page_heading">
							<h3><?php echo get_theme_mod('welcome_box_heading','Welcome to Mover & Co'); ?></h3>
							<p class="m_b_5"><?php echo get_theme_mod('welcome_box_description','Separated they live in Bookmarksgrove right at the coast of the Semantics,a large language ocean.'); ?></p>
						</div>
					</div>
				</div>
				<div class="row gy-4 align-items-center">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="mv_aboutus1">
							<h2><?php echo get_theme_mod('welcome_head_inLine1','We Are'); ?> <span><?php echo get_theme_mod('welcome_head_inLine2','Residential mover'); ?> </span> <?php echo get_theme_mod('welcome_head_inLine3','company'); ?> </h2>
							<p><?php echo get_theme_mod('welcome_head_description','Separated they live an Bookmarks grove right at the coast of the most Semantics, a large
								language. sleep a little bit longer and forget all this nonsense", he thought, but that
								was something. All the Lorem Ipsum generators on the Internet tend to repeat predefined
								chunks as necessary, making this the first true generator on the Internet. Separated they live an Bookmarks grove right at the coast of the most Semantics, a large
								language. sleep a little bit longer and forget all this nonsense", he thought, but that
								was something.'); ?> </p>
							<a href="javascript:;" class="mv_btn"><?php echo get_theme_mod('welcome_readMore_button','read more'); ?> </a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="mv_aboutus2">
							<img src="<?php echo esc_url(get_theme_mod('welcome_box_image')) ; ?> " alt="" class="img-responsive">
							<h2><?php echo get_theme_mod('welcome_image_upper_button','More than 350+ projects were completed.'); ?> </h2>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--............................... welcome box end................................. -->



  
  <div class="container marketing">
<div class="row">
    <div class="col-8">
        <h1> Page Name <?php single_term_title() ?></h1>
    <?php 
    while (have_posts()) : the_post();
      ?>
      <a href="<?php the_permalink() ?>">
        <div class="row featurette">
        <div class="col-md-3">
            <?php the_post_thumbnail([150,150]) ?>
          </div>
          <div class="col-md-9">
            <h5 class="featurette-heading">
              <?php the_title() ?>
            </h5>
            <p class="lead"><?php the_excerpt() ?></p>
          </div>
          
        </div>
      </a>
        <hr class="featurette-divider">
      
    <?php endwhile; ?>
    </div>
    <div class="col-4">
    <?php get_sidebar() ?>
    </div>
</div>
    




    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

  <?php get_footer() ?>
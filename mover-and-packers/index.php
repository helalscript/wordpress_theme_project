<?php get_header() ?>
<!-- ......................... start carousel........................
......................... start carousel........................ -->

<div class="container">
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <?php $slider=new WP_Query(
        [
          'post_type'=>'slider',
          'orderby' => 'title', 
        'order' => 'ASC',
        'per_pa'
      ]); 
      $i=0;
      while($slider->have_posts()):$slider->the_post();
      ?>
      <div class="carousel-item <?php if($i==0){echo 'active';} $i+=1; ?>" style="">
        <span class="img-responsive"><?php the_post_thumbnail([1500,1000]) ?></span>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1><?php the_title() ?></h1>
            <p><?php the_content() ?></p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>
     
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<!-- ......................... end carousel........................
......................... end carousel........................ -->


		<div class="mv_mainslider" data-scroll-index='0'>
			<div class="mv_sliderdata">
				<div class="container">
					<div class="row gy-4 align-items-center">
						<div class="col-lg-7">
							<div class="mv_banner_left">
								<img src="<?php echo esc_url( get_theme_mod( 'provide_image','' ) ); ?>" alt="no images found">
							</div>
						</div>
						<div class="col-lg-5">
							<div class="mu_banner_right">
								<div class="mv_sliderdata_inner">
									<h4><?php echo get_theme_mod('provide_text','We Provide Best Services'); ?> </h4>
									<h2><?php echo get_theme_mod('provide_heading_1st_line','Privately Owned'); ?><span> 
										<?php echo get_theme_mod('provide_heading_2nd_line','Moving Company'); ?> </span></h2>
									<p><?php echo get_theme_mod('provide_description','Separated they live an Bookmarks grove right at the coast of the most Semantics, a large language. sleep a little bit longer and forget all this nonsense", he thought, but that was something.'); ?></p>
								</div>
								<div class="mv_freecall_wrapper">
									<div class="mv_contactdiv">
										<span class="mv_transparent_btn"><i class="fa fa-phone"></i>
										<?php echo get_theme_mod('provide_contact_button',' +1-404-555-0154'); ?></span>
										<a href="mailto:<?php echo get_theme_mod('provide_email_button'); ?>" class="mv_btn"><i class="fa fa-envelope"></i>
										<?php echo get_theme_mod('provide_email_button'); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="banner_sec2">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="banner_sec_head">
							<div class="banner_sec">
								<div class="banner_sec1">
									<img src="<?php echo esc_url( get_theme_mod( 'banner1_image' ) ); ?>" alt="no image found" class="img-responsive">
								</div>
								<div class="banner_sec1">
									<p><?php echo get_theme_mod('banner1_heading','Road Way'); ?></p>
								</div>
							</div>
							<p><?php echo get_theme_mod('banner1_description','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium'); ?></p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="banner_sec_head">
							<div class="banner_sec">
								<div class="banner_sec1">
									<img src="<?php echo esc_url( get_theme_mod( 'banner2_image' ) ); ?>" alt="no image found" class="img-responsive">
								</div>
								<div class="banner_sec1">
									<p><?php echo get_theme_mod('banner2_heading','Air Way'); ?></p>
								</div>
							</div>
							<p><?php echo get_theme_mod('banner2_description','But I must explain to you how all this mistaken idea of denouncing pleasure'); ?></p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="banner_sec_head">
							<div class="banner_sec">
								<div class="banner_sec1">
									<img src="<?php echo esc_url( get_theme_mod( 'banner3_image') ); ?>" alt="no image found" class="img-responsive">
								</div>
								<div class="banner_sec1">
									<p><?php echo get_theme_mod('banner3_heading','Ocean Way'); ?></p>
								</div>
							</div>
							<p><?php echo get_theme_mod('banner3_description','At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- ...................shipment banner................. -->
		<div class="mv_banner_section">
			<div class="container">
				<div class="mv_banner_wrapper">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="wrapper_sec1">
								<img src="<?php echo esc_url( get_theme_mod( 'Shipment_1_image' ) ); ?>?>" alt="" class="img-responsive">
								<h2><?php echo get_theme_mod('Shipment_banner1_heading','Pack Your Things'); ?></h2>
								<p><?php echo get_theme_mod('Shipment_banner1_description','Do eiusmod tempor incididunt ut labore et dolore magna'); ?></p>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="wrapper_sec1">
								<img src="<?php echo esc_url( get_theme_mod( 'Shipment_2_image' ) ); ?>?>" alt="" class="img-responsive">
								<h2><?php echo get_theme_mod('Shipment_banner2_heading','Book Your Order'); ?></h2>
								<p><?php echo get_theme_mod('Shipment_banner2_description','Do eiusmod tempor incididunt ut labore et dolore magna'); ?></p>
							</div>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="wrapper_sec1">
								<img src="<?php echo esc_url( get_theme_mod( 'Shipment_3_image' ) ); ?>?>" alt="" class="img-responsive">
								<h2><?php echo get_theme_mod('Shipment_banner3_heading','Move Your Things'); ?></h2>
								<p><?php echo get_theme_mod('Shipment_banner3_description','Do eiusmod tempor incididunt ut labore et dolore magna'); ?></p>
							</div>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="wrapper_sec1">
								<img src="<?php echo esc_url( get_theme_mod( 'Shipment_4_image' ) ); ?>?>" alt="" class="img-responsive">
								<h2><?php echo get_theme_mod('Shipment_banner4_heading','Deliver Your Things'); ?></h2>
								<p><?php echo get_theme_mod('Shipment_banner4_description','Do eiusmod tempor incididunt ut labore et dolore magna'); ?></p>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>



<!--............................... welcome box................................. -->
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


<!--...............................  Our_service_ box start................................. -->
		<div class="mv_transparent_wrapper" data-scroll-index='2'>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mv_page_heading">
							<h3> <?php echo get_theme_mod('Our_service_heading','Our Services') ?></h3>
							<p><?php echo get_theme_mod('Our_service_description','Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.') ?></p>
						</div>
					</div>
				</div>

				<div class="row gy-4">

				<?php $Our_service=new WP_Query(
        [
          'post_type'=>'Our_service',
          'orderby' => 'title', 
        'order' => 'ASC',
        'per_pa'
      ]); 
      
      while($Our_service->have_posts()):$Our_service->the_post();?>
      
	  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="mv_services_div">
							<div class="mv_service_img">
							<span class="img-responsive"><?php the_post_thumbnail([600,450]) ?></span>  
							</div>
							<div class="mv_service_content">
								<h3><?php the_title() ?></h3>
								<p><?php the_excerpt() ?></p>
								</div>
						</div>
					</div>
    <?php endwhile; wp_reset_postdata(); ?>

					
				</div>
			</div>
		</div>
<!--...............................  Our_service_ box end................................. -->




		<!--===Live Tracking===-->
		<div class="mv_product_checkout">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mv_page_heading">
							<h3>track your shipment</h3>
							<p>If you require maximum visibility to your Freight transactions, contact our logistic
								customer team or you can track your cargo by using below tracking system.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="mv_checkout_box">
					<div class="mv_white_progress">
						<ul>
							<li class="progress_active">
								<div class="progress">
									<div class="progress-bar progress-bar-striped progress-bar-animated"
										style="width:100%"></div>
								</div>
								<span>Packed</span>
							</li>
							<li>
								<div class="progress">
									<div class="progress-bar progress-bar-striped progress-bar-animated"
										style="width:100%"></div>
								</div>
								<span>Ship</span>
							</li>
							<li>
								<div class="progress">
									<div class="progress-bar progress-bar-striped progress-bar-animated"
										style="width:100%"></div>
								</div>
								<span>Transit</span>
								<span class="pro_confirm">Delivered</span>
							</li>
						</ul>
					</div>
					<div class="fd_review_wrapper">
						<div class="row">
							<div class="col-md-10">
								<div class="form_block">
									<input type="text" class="form_field" placeholder="Tracking Number">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form_block">
									<a href="javascript:;" class="mv_btn">Track Now</a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="radiogroup">
									<p>Freight Type</p>
									<ul>
										<li><a href="javascript:;"><span><i class="fa fa-plane" aria-hidden="true"></i></span> By Air</a></li>
										<li><a href="javascript:;"><span><i class="fa fa-truck" aria-hidden="true"></i></span> By Road</a></li>
										<li><a href="javascript:;"><span><i class="fa fa-ship" aria-hidden="true"></i></span> By Ship</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--======Live Tracking======-->



		<div class="mv_bindsection" data-scroll-index='3'>
			<div class="mv_lightgray_wrapper mv_tracking_wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="mv_page_heading">
								<h3>Our Process</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
									language ocean.</p>
							</div>
						</div>
					</div>
					<div class="row">

					<?php $Our_Process=new WP_Query(
        [
          'post_type'=>'Our_Process',
          'orderby' => 'title', 
        'order' => 'ASC',
        'per_pa'
      ]); 
      
      while($Our_Process->have_posts()):$Our_Process->the_post();?>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mv_process">
							<div class="mv_process_innerdiv">								
								<div class="clearfix"></div>
								<div class="mv_sec_bg">
										<span class="img-responsive"><?php the_post_thumbnail([100,100]) ?></span>
									<h3><?php the_title() ?></h3>
									<p><?php the_excerpt() ?></p>
								</div>
							</div>
						</div>						
    <?php endwhile; wp_reset_postdata(); ?>


					

					</div>
				</div>
			</div>
		</div>
		<div class="mv_transparent_wrapper our_reasons" data-scroll-index='4'>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mv_page_heading">
							<h3>Our Features</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
								language ocean.</p>
						</div>
					</div>
				</div>								
				<div class="row gy-4">
				
				<?php $Our_Feature=new WP_Query(
        ['post_type'=>'Our_Feature','orderby' => 'title', 'order' => 'ASC','per_pa']); 
      
      while($Our_Feature->have_posts()):$Our_Feature->the_post();?>
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="wrapper_sec1">
						<span class="img-responsive"><?php the_post_thumbnail([150,150]) ?></span>
							<h2><?php the_title() ?></h2>
							<p><?php the_excerpt() ?></p>
						</div>							
					</div>					
	<?php endwhile; wp_reset_postdata(); ?>

					
					
				</div>				
			</div>
		</div>




		<div class="mv_lightgray_wrapper mv_team_wrapper" data-scroll-index='5'>
			<div class="container">
				<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mv_page_heading">
							<h3>Our Dedicated Team</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
								language ocean.</p>
						</div>
					</div>
				</div>
				<div class="row">


				<?php $Our_Dedicate=new WP_Query(
        ['post_type'=>'Our_Dedicate','orderby' => 'title', 'order' => 'ASC','per_pa']); 
      
      while($Our_Dedicate->have_posts()):$Our_Dedicate->the_post();?>
      
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="mv_teamdiv">							
							<div class="mv_member_img">
								<span class="img-responsive"><?php the_post_thumbnail([300,300]) ?></span>
							</div>
							<div class="mv_member_data">
								<div class="mv_member_inner">
									<a href="#">
										<h3><?php the_title() ?></h3>
									</a>
									<p><?php the_excerpt() ?></p>	
									<div class="mv_social_main_div">
										<div class="mv_team_info">
												
										</div>		
										<div class="mv_team_social">
											
										</div>
									</div>				
								</div>
							</div>							
						</div>
					</div>
	<?php endwhile; wp_reset_postdata(); ?>
					

				</div>
			</div>
		</div>

		<div class="mv_testimonial_wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mv_page_heading mv_white_heading">
							<h3>What Client Says</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
								language ocean.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="mv_testimonial_slider">
							<div class="owl-carousel owl-theme">
							<?php $Client_Say=new WP_Query(
        ['post_type'=>'Client_Say','orderby' => 'title', 'order' => 'ASC','per_pa']); 
      
      while($Client_Say->have_posts()):$Client_Say->the_post();?>
      
										
										
										
	

								<div class="item">
									<div class="mv_testimonial_content">
										<span>
											<svg x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512"><g><path d="M4.7 17.7c-1-1.1-1.6-2.3-1.6-4.3 0-3.5 2.5-6.6 6-8.2l.9 1.3c-3.3 1.8-4 4.1-4.2 5.6.5-.3 1.2-.4 1.9-.3 1.8.2 3.2 1.6 3.2 3.5 0 .9-.4 1.8-1 2.5-.7.7-1.5 1-2.5 1-1.1 0-2.1-.5-2.7-1.1zm10 0c-1-1.1-1.6-2.3-1.6-4.3 0-3.5 2.5-6.6 6-8.2l.9 1.3c-3.3 1.8-4 4.1-4.2 5.6.5-.3 1.2-.4 1.9-.3 1.8.2 3.2 1.6 3.2 3.5 0 .9-.4 1.8-1 2.5s-1.5 1-2.5 1c-1.1 0-2.1-.5-2.7-1.1z"/></g></svg>
										</span>
										<div class="test_bottom">
											<div class="test_bottom1 img-responsive" style="width:25%" >
											<?php the_post_thumbnail([100,100]) ?>
											</div>
											<div class="test_bottom2">
												<h4><?php the_title() ?></h4>
												<!-- <p>HR Manager</p> -->
												<p class="test_para"><?php the_excerpt() ?></p>
											</div>
										</div>
									</div>
								</div>
								<?php endwhile; wp_reset_postdata(); ?>

						
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mv_call_wrapper">
			<!-- <div class="mv_delivery_man">
				<img src="images/delivery-man.png" alt="" class="img-responsive">
			</div>
			<div class="mv_delivery_box">
				<img src="images/boxxxx.png" alt="" class="img-responsive">
			</div> -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mv_page_heading">
							<h3>our strengths, which makes us</h3>
							<p>the Most preferable moving brand</p>
						</div>
					</div>
				</div>
				<div class="int_dark_counter2">
					<div class="int_counter_procces">
						<div class="row gy-4">
							<div class="col-lg-3 col-md-3 col-sm-12">
								<div class="int_count2_box counter_text">
									<h1><span class="count_no" data-to="30" data-speed="3000">30</span><span>+</span>
									</h1>
									<p>years of trust</p>
									<h5>delivering smiles since 1987</h5>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12">
								<div class="int_count2_box counter_text">
									<h1><span class="count_no" data-to="98000"
											data-speed="3000">98000</span><span>+</span></h1>
									<p>moves annually</p>
									<h5>happily acrosss the world</h5>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12">
								<div class="int_count2_box counter_text">
									<h1><span class="count_no" data-to="12" data-speed="3000">12</span><span>+</span>
									</h1>
									<p>milliom sq.feet</p>
									<h5>warehousing space</h5>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12">
								<div class="int_count2_box counter_text">
									<h1><span class="count_no" data-to="6000"
											data-speed="3000">6000</span><span>+</span></h1>
									<p>trained manpower</p>
									<h5>makes your move safe & on time</h5>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mv_lightgray_wrapper mv_lightgray_contact" data-scroll-index='6'>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mv_page_heading">
							<h3>Contact Us</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
								language ocean.</p>
						</div>
					</div>
				</div>				
				<div class="row gy-4 align-items-center">	
					<div class="col-lg-5">
						<div class="mv_contat_left">
							<h1>contact information</h1>
						</div>
						<div class="row gy-4">
							<div class="col-lg-6">
								<div class="mv_contact_inner">
									<div class="mv_contact_icon">
										<span>
											<svg x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"><g><path d="M341.476 338.285c54.483-85.493 47.634-74.827 49.204-77.056C410.516 233.251 421 200.322 421 166 421 74.98 347.139 0 256 0 165.158 0 91 74.832 91 166c0 34.3 10.704 68.091 31.19 96.446l48.332 75.84C118.847 346.227 31 369.892 31 422c0 18.995 12.398 46.065 71.462 67.159C143.704 503.888 198.231 512 256 512c108.025 0 225-30.472 225-90 0-52.117-87.744-75.757-139.524-83.715zm-194.227-92.34a15.57 15.57 0 0 0-.517-.758C129.685 221.735 121 193.941 121 166c0-75.018 60.406-136 135-136 74.439 0 135 61.009 135 136 0 27.986-8.521 54.837-24.646 77.671-1.445 1.906 6.094-9.806-110.354 172.918L147.249 245.945zM256 482c-117.994 0-195-34.683-195-60 0-17.016 39.568-44.995 127.248-55.901l55.102 86.463a14.998 14.998 0 0 0 25.298 0l55.101-86.463C411.431 377.005 451 404.984 451 422c0 25.102-76.313 60-195 60z"/><path d="M256 91c-41.355 0-75 33.645-75 75s33.645 75 75 75 75-33.645 75-75-33.645-75-75-75zm0 120c-24.813 0-45-20.187-45-45s20.187-45 45-45 45 20.187 45 45-20.187 45-45 45z"/></g></svg>
										</span>
									</div>
									<div class="mv_contact_content">
										<h4>Address</h4>
										<p>7336 Wintergreen Ave.
											Montclair, NJ 07042</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mv_contact_inner">
									<div class="mv_contact_icon">
										<span>
											<svg x="0" y="0" viewBox="0 0 473.806 473.806" style="enable-background:new 0 0 512 512"><g><path d="M374.456 293.506c-9.7-10.1-21.4-15.5-33.8-15.5-12.3 0-24.1 5.3-34.2 15.4l-31.6 31.5c-2.6-1.4-5.2-2.7-7.7-4-3.6-1.8-7-3.5-9.9-5.3-29.6-18.8-56.5-43.3-82.3-75-12.5-15.8-20.9-29.1-27-42.6 8.2-7.5 15.8-15.3 23.2-22.8 2.8-2.8 5.6-5.7 8.4-8.5 21-21 21-48.2 0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5-6-6.2-12.3-12.6-18.8-18.6-9.7-9.6-21.3-14.7-33.5-14.7s-24 5.1-34 14.7l-.2.2-34 34.3c-12.8 12.8-20.1 28.4-21.7 46.5-2.4 29.2 6.2 56.4 12.8 74.2 16.2 43.7 40.4 84.2 76.5 127.6 43.8 52.3 96.5 93.6 156.7 122.7 23 10.9 53.7 23.8 88 26 2.1.1 4.3.2 6.3.2 23.1 0 42.5-8.3 57.7-24.8.1-.2.3-.3.4-.5 5.2-6.3 11.2-12 17.5-18.1 4.3-4.1 8.7-8.4 13-12.9 9.9-10.3 15.1-22.3 15.1-34.6 0-12.4-5.3-24.3-15.4-34.3l-54.9-55.1zm35.8 105.3c-.1 0-.1.1 0 0-3.9 4.2-7.9 8-12.2 12.2-6.5 6.2-13.1 12.7-19.3 20-10.1 10.8-22 15.9-37.6 15.9-1.5 0-3.1 0-4.6-.1-29.7-1.9-57.3-13.5-78-23.4-56.6-27.4-106.3-66.3-147.6-115.6-34.1-41.1-56.9-79.1-72-119.9-9.3-24.9-12.7-44.3-11.2-62.6 1-11.7 5.5-21.4 13.8-29.7l34.1-34.1c4.9-4.6 10.1-7.1 15.2-7.1 6.3 0 11.4 3.8 14.6 7l.3.3c6.1 5.7 11.9 11.6 18 17.9 3.1 3.2 6.3 6.4 9.5 9.7l27.3 27.3c10.6 10.6 10.6 20.4 0 31-2.9 2.9-5.7 5.8-8.6 8.6-8.4 8.6-16.4 16.6-25.1 24.4-.2.2-.4.3-.5.5-8.6 8.6-7 17-5.2 22.7l.3.9c7.1 17.2 17.1 33.4 32.3 52.7l.1.1c27.6 34 56.7 60.5 88.8 80.8 4.1 2.6 8.3 4.7 12.3 6.7 3.6 1.8 7 3.5 9.9 5.3.4.2.8.5 1.2.7 3.4 1.7 6.6 2.5 9.9 2.5 8.3 0 13.5-5.2 15.2-6.9l34.2-34.2c3.4-3.4 8.8-7.5 15.1-7.5 6.2 0 11.3 3.9 14.4 7.3l.2.2 55.1 55.1c10.3 10.2 10.3 20.7.1 31.3zM256.056 112.706c26.2 4.4 50 16.8 69 35.8s31.3 42.8 35.8 69c1.1 6.6 6.8 11.2 13.3 11.2.8 0 1.5-.1 2.3-.2 7.4-1.2 12.3-8.2 11.1-15.6-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3 3.7-15.6 11s3.5 14.4 10.9 15.6zM473.256 209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2 3.7-15.5 11-1.2 7.4 3.7 14.3 11.1 15.6 46.6 7.9 89.1 30 122.9 63.7 33.8 33.8 55.8 76.3 63.7 122.9 1.1 6.6 6.8 11.2 13.3 11.2.8 0 1.5-.1 2.3-.2 7.3-1.1 12.3-8.1 11-15.4z"/></g></svg>
										</span>
									</div>
									<div class="mv_contact_content">
										<h4>Call Us</h4>
										<p>(+1800) 12345-6789<br>
											(+1800) 12345-6789</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mv_contact_inner">
									<div class="mv_contact_icon">
										<span>
											<svg x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"><g><path d="M388.816 169.245c-3.89-3.92-10.221-3.946-14.142-.057-3.92 3.89-3.946 10.222-.056 14.143l.06.062a9.897 9.897 0 0 0 7.054 2.941c2.548 0 5.1-.974 7.058-2.916 3.921-3.89 3.916-10.252.026-14.173z"/><path d="m509.071 289.501-92.878-92.878c-3.905-3.904-10.237-3.904-14.143 0-3.905 3.905-3.905 10.237 0 14.143l73.732 73.731H299.957c-14.586 0-26.451-11.866-26.451-26.451V82.222l71.183 71.182c3.905 3.904 10.237 3.904 14.143 0 3.905-3.905 3.905-10.237 0-14.143l-90.33-90.329c-3.905-3.904-10.237-3.904-14.142 0L94.94 208.355c-3.905 3.905-3.905 10.237 0 14.143l240.569 240.568a10.001 10.001 0 0 0 14.142 0l159.421-159.422a10.003 10.003 0 0 0-.001-14.143zM253.508 78.071v127.356H126.152L253.508 78.071zm79.072 353.781L126.152 225.426h127.356v32.62c0 25.613 20.838 46.451 46.451 46.451h32.621v127.355zm19.999.001V304.497h127.355L352.579 431.853zM68.631 253.999H10c-5.523 0-10 4.478-10 10s4.477 10 10 10h58.631c5.523 0 10-4.477 10-10 0-5.522-4.477-10-10-10zM98.446 253.999h-.15c-5.523 0-10 4.478-10 10s4.477 10 10 10h.15c5.523 0 10-4.478 10-10s-4.477-10-10-10zM42.016 149.002H10.013c-5.523 0-10 4.478-10 10s4.477 10 10 10h32.003c5.523 0 10-4.478 10-10s-4.477-10-10-10zM112.51 149.002H74.682c-5.523 0-10 4.478-10 10s4.477 10 10 10h37.828c5.523 0 10-4.478 10-10s-4.477-10-10-10zM134.282 308.998H78.283c-5.523 0-10 4.478-10 10s4.477 10 10 10h55.999c5.523 0 10-4.478 10-10s-4.478-10-10-10zM178.008 372.996H37.009c-5.523 0-10 4.478-10 10s4.477 10 10 10h140.999c5.523 0 10-4.478 10-10s-4.477-10-10-10z"/></g></svg>
										</span>
									</div>
									<div class="mv_contact_content">
										<h4>email</h4>
										<p>info@mover.com<br>
											info@mover.com</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mv_contact_inner">
									<div class="mv_contact_icon">
										<span>
											<svg x="0" y="0" viewBox="0 0 511.863 511.863" style="enable-background:new 0 0 512 512"><g><path d="M268.337 129.55c-7.18 0-13 5.82-13 13v25c0 7.18 5.82 13 13 13s13-5.82 13-13v-25c0-7.18-5.82-13-13-13zM268.337 405c-7.18 0-13 5.82-13 13v25c0 7.18 5.82 13 13 13s13-5.82 13-13v-25c0-7.18-5.82-13-13-13zM418.547 279.77h-25c-7.18 0-13 5.82-13 13s5.82 13 13 13h25c7.18 0 13-5.82 13-13s-5.82-13-13-13zM384.166 390.219a12.734 12.734 0 0 0-.419-.419l-17.68-17.68c-4.96-5.191-13.189-5.379-18.38-.419s-5.379 13.189-.419 18.38c.136.143.276.282.419.419l17.68 17.68c4.96 5.191 13.189 5.379 18.38.419s5.379-13.189.419-18.38zM376.381 183.952a12.999 12.999 0 0 0-17.634.048l-69 69c-21.989-11.852-49.423-3.634-61.275 18.355a45.223 45.223 0 0 0-5.415 21.475l.03-.06c-.013 24.991 20.235 45.261 45.226 45.274 24.991.013 45.261-20.235 45.274-45.226a45.254 45.254 0 0 0-5.42-21.498l69-69c4.855-5.289 4.503-13.513-.786-18.368zM268.337 312.02c-10.631 0-19.25-8.619-19.25-19.25.011-10.627 8.623-19.239 19.25-19.25 10.631 0 19.25 8.619 19.25 19.25s-8.619 19.25-19.25 19.25z"/><path d="M473.737 133.45c4.96 5.191 13.189 5.379 18.38.419 5.191-4.96 5.379-13.189.419-18.38a11.825 11.825 0 0 0-.419-.419L446.037 69c-5.191-4.96-13.42-4.772-18.38.419-4.801 5.025-4.801 12.936 0 17.961l13.91 13.91-27.61 27.61a217.36 217.36 0 0 0-132.61-55V26h45.9c7.18 0 13-5.82 13-13s-5.82-13-13-13h-117.81c-7.18 0-13 5.82-13 13s5.82 13 13 13h45.9v47.92a217.614 217.614 0 0 0-142 63.82c-4.96 5.191-4.772 13.42.419 18.38 5.025 4.801 12.937 4.801 17.961 0 75.461-75.461 197.807-75.462 273.268-.002l.002.002c75.34 75.34 75.34 197.93 0 273.27s-197.93 75.34-273.27 0c-5.191-4.96-13.42-4.772-18.38.419-4.801 5.025-4.801 12.936 0 17.961 85.68 85.55 224.488 85.444 310.038-.235 81.871-81.995 85.797-213.543 8.962-300.275l27.62-27.62 13.78 13.81z"/><path d="M147.947 196.4H28.727c-7.18 0-13 5.82-13 13s5.82 13 13 13h119.22c7.18 0 13-5.82 13-13s-5.82-13-13-13zM178.247 279.77H59.017c-7.18 0-13 5.82-13 13s5.82 13 13 13h119.23c7.18 0 13-5.82 13-13s-5.82-13-13-13zM147.947 363.13H28.727c-7.18 0-13 5.82-13 13s5.82 13 13 13h119.22c7.18 0 13-5.82 13-13s-5.82-13-13-13z"/></g></svg>
										</span>
									</div>
									<div class="mv_contact_content">
										<h4>work hours</h4>
										<p>Mon - Fri 10:00AM<br>
											Sunday - Closed</p>
									</div>
								</div>
							</div>
						</div>
					</div>					
					<div class="col-lg-7">
						<div class="mv_contact_form_div">
							<h3>get in touch</h3>
							<form>
								<div class="mv_contactform">
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" id="ur_name" name="first_name"
													class="form-control require" placeholder="Enter Your Name" />
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="email" id="ur_mail" class="form-control require"
													placeholder="Enter Your Email" data-valid="email"
													data-error="Email should be valid." />
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="subject" id="sub" class="form-control require"
													placeholder="Enter Your Subject" />
											</div>
										</div>										
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="subject" id="sub" class="form-control require"
													placeholder="Enter Your Mobile No." />
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea class="form-control require" name="message" id="msg"
													placeholder="Message" rows="12"></textarea>
											</div>
										</div>
										<div class="mv_contact_btndiv">
											<button class="mv_btn submitForm" id="" type="button"
												form-type="contact">Submit</button>
											<p class="response"></p>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>				
			</div>
		</div>		

		<div class="real_map">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3369734.150220435!2d-96.57871699241277!3d38.99279830162545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1564574037986!5m2!1sen!2sin"
				frameborder="0" height="400" allowfullscreen=""></iframe>
		</div>		
		

		<?php get_footer() ?>
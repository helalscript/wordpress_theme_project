<div class="mv_footer_wrapper">
			<div class="mv_delivery_man_footer">
				<img src="images/delivery-man.png" alt="" class="img-responsive">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="mv_footerdiv1">
							<div class="mv_footer_logo">
								<a href="<?php echo home_url('/') ?>"><?php echo get_custom_logo() ?></a>
							</div>
							<p><?php echo get_theme_mod('Footer_box_description','Even the all-powerful Pointing has no control about the blind tex it is almost
								unorthographic life One day however.'); ?></p>
							<div class="mv_footer_social_link">
								<ul>
									<li><a href="#"><i class="fa fa-facebook icon"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter icon"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin icon"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram icon"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="mv_footerdiv">
							<h3> <?php echo get_theme_mod('Footer_r1_head','services'); ?> </h3>
							<ul>
								<li><a href="#"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Corporate
										Relocation</a></li>
								<li><a href="#"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Moving
										Overseas</a></li>
								<li><a href="#"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Moving
										Locally</a></li>
								<li><a href="#"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Commercial
										Relocation</a></li>
								<li><a href="#"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Parking</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="mv_footerdiv">
							<h3><?php echo get_theme_mod('Footer_r2_head','Quick links'); ?> </h3>
							<ul>
								<li><a href="#"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Additional
										Services</a></li>
								<li><a href="#"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Contacts
										us</a></li>
								<li><a href="#"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Storage</a>
								</li>
								<li><a href="#"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Insurance</a>
								</li>
								<li><a href="#"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Quanlity
										Policy Statement</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="mv_footerdiv">
							<h3><?php echo get_theme_mod('Footer_r3_head','contact Us'); ?></h3>
							<ul>
								<li>
									<p><i class="fa fa-map-o"></i> 2718 Ashwood Drive <br> Bedford, IA 50833 </p>
								</li>
								<li><a href="mailto:info@mover.com"><i class="fa fa-envelope"></i> info@mover.com</a>
								</li>
								<li>
									<p><i class="fa fa-volume-control-phone"></i> +1-404-555-0154</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="mv_copyright">
						
							<p>&copy; 2023 <a href="#">Move & Co</a> 
							<img src="<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>" alt="Product 1" width="100" height="100">
							<?php 
            echo get_theme_mod('my_copyright_text', __( 'All Rights Reserved', 'my_theme' ) 
        ); 
        ?> </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--script start-->
<?php wp_footer() ?>

<script>
		$(function () { $.scrollIt(); });
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhQLWA1eirlraNYVtABVRhznkCfQY9pbw&amp;callback=initMap"
		async defer></script>
	<script>
		function initMap() {
			var map;
			var bounds = new google.maps.LatLngBounds();
			var markers = [
				['London Eye, London', 22.298341, 70.797055],
				['Palace of Westminster, London', 22.296410, 70.794561]
			];
			var mapOptions = {
				mapTypeId: 'roadmap',
				scrollwheel: false,
				zoom: 8
			};
			var map = new google.maps.Map(document.getElementById('real_map'), mapOptions);
			map.setTilt(45);

			// Info Window Content
			var infoWindowContent = [
				['<div class="map_info_wrapper">' +
					'<div class="map_img_wrapper">' +
					'<img  src="" alt="">' +
					'<div class="tag_sale">sale</div>' +
					'<div class="tag_price">$24000</div>' +
					'</div>' +
					'<div class="map_detail">' +
					'<div class="map_content">' +
					'<h5><a href="#">Apartments for sale</a></h5>' +
					'<p>Curabitur tortor. Pellentesque nibhat at aenem quamn scelerisque semico saroudr dolora ecens mattis.</p>' +
					'</div>' +
					'<ul>' +
					'<li><i class="flaticon-drawing18"></i>750 SQFT</li>' +
					'<li><i class="flaticon-bathtub3"></i>2 bath</li>' +
					'<li><i class="flaticon-bed40"></i>2 beds</li>' +
					'</ul>' +
					'</div>' +
					'</div>'
				],
				['<div class="map_info_wrapper">' +
					'<div class="map_img_wrapper">' +
					'<img  src="" alt="">' +
					'<div class="tag_sale">sale</div>' +
					'<div class="tag_price">$24000</div>' +
					'</div>' +
					'<div class="map_detail">' +
					'<div class="map_content">' +
					'<h5><a href="#">Apartments for sale</a></h5>' +
					'<p>Curabitur tortor. Pellentesque nibhat at aenem quamn scelerisque semico saroudr dolora ecens mattis.</p>' +
					'</div>' +
					'<ul>' +
					'<li><i class="flaticon-drawing18"></i>750 SQFT</li>' +
					'<li><i class="flaticon-bathtub3"></i>2 bath</li>' +
					'<li><i class="flaticon-bed40"></i>2 beds</li>' +
					'</ul>' +
					'</div>' +
					'</div>'
				]
			];

			// Display multiple markers on a map
			var infoWindow = new google.maps.InfoWindow(),
				marker, i;
			// Loop through our array of markers & place each one on the map  
			for (i = 0; i < markers.length; i++) {
				var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
				bounds.extend(position);
				marker = new google.maps.Marker({
					position: position,
					map: map,
					icon: 'images/favicon.png',
					title: markers[i][0]
				});
				// Allow each marker to have an info window    
				google.maps.event.addListener(marker, 'click', (function (marker, i) {
					return function () {
						infoWindow.setContent(infoWindowContent[i][0]);
						infoWindow.open(map, marker);
					}
				})(marker, i));
				// Automatically center the map fitting all markers on the screen
				map.fitBounds(bounds);
			}

		}
	</script>
	<script>
		$(window).scroll(function () {
			var scroll = $(window).scrollTop();
			if (scroll >= 300) {
				$(".mv_topheader").addClass("darkHeader");
			}
			else {
				$(".mv_topheader").removeClass("darkHeader");
			}
		});
	</script>

	<!--script end-->
</body>


<!-- Mirrored from templatebundle.net/templates/mover-and-packers-html-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jan 2024 03:41:06 GMT -->
</html>
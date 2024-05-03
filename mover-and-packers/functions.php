  
 <?php 
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');


function add_my_styles(){
    //...........................start theme style................................
wp_enqueue_style('style',get_stylesheet_uri()); 
wp_enqueue_style('bootstrap',get_template_directory_uri()."/css/bootstrap.min.css");
wp_enqueue_style('style11',get_template_directory_uri()."/css/bootstrap-datepicker.min.css");
wp_enqueue_style('style22',get_template_directory_uri()."/css/animate.css");
wp_enqueue_style('style33',get_template_directory_uri()."/https://fonts.googleapis.com/");
wp_enqueue_style('style44',get_template_directory_uri()."/https://fonts.gstatic.com/");
wp_enqueue_style('style55',get_template_directory_uri()."/https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&amp;display=swap");
wp_enqueue_style('style66',get_template_directory_uri()."/css/font-awesome.css");
wp_enqueue_style('style77',get_template_directory_uri()."/css/fonts.css");
wp_enqueue_style('style88',get_template_directory_uri()."/js/plugins/owl/owl.carousel.css");
wp_enqueue_style('style99',get_template_directory_uri()."/js/plugins/magnific_popup/magnific-popup.css");
//................................end theme style..................................

//........................favicon links...........................//
wp_enqueue_style('',get_template_directory_uri()."/images/favicon.png");

}
add_action('wp_enqueue_scripts','add_my_styles');


function add_my_scripts(){
//................................Start theme script..................................
wp_enqueue_script('script_11',get_template_directory_uri()."/js/jquery.min.js", array() ,null ,true);
wp_enqueue_script('script_22',get_template_directory_uri()."/js/bootstrap-datepicker.min.js", array() ,null ,true);
wp_enqueue_script('script_33',get_template_directory_uri()."/js/plugins/owl/owl.carousel.js", array() ,null ,true);
wp_enqueue_script('script_44',get_template_directory_uri()."/js/bootstrap.bundle.min.js", array() ,null ,true);
wp_enqueue_script('script_55',get_template_directory_uri()."/js/plugins/magnific_popup/jquery.magnific-popup.min.js", array() ,null ,true);
wp_enqueue_script('script_66',get_template_directory_uri()."/js/countto/jquery.appear.js", array() ,null ,true);
wp_enqueue_script('script_77',get_template_directory_uri()."/js/countto/jquery.countTo.js", array() ,null ,true);
wp_enqueue_script('script_88',get_template_directory_uri()."/js/custom.js", array() ,null ,true);
	
//................................end theme script..................................
}
add_action('wp_enqueue_scripts','add_my_scripts');




// ........................................Menu register start...................................
function mytheme_register_nav_menu()
{
    register_nav_menus(
        array(
            'primary_menu' => __('Primary Menu', 'text_domain'),
        )
    );
}
add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);
class AWP_Menu_Walker extends Walker_Nav_Menu
{
    
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= '<li class="nav-item"><a class="nav-link" href="' . $item->url . '">' . $item->title . '</a>';
    }
}


// ........................................Menu register End...................................





// ........................................Carousel register Start...................................

function set_my_sidebar(){
    register_sidebar(array(
        'name'          => 'Sidebar', 'textdomain',
		'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
    ));
}
add_action('widgets_init','set_my_sidebar');
function wpdocs_register_Slider_cpt() {

   $labels = array(

      'name'                     => __( 'Sliders', 'TEXTDOMAINHERE' ),
      'singular_name'            => __( 'Slider', 'TEXTDOMAINHERE' ),
      'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
      'add_new_item'             => __( 'Add New Slider', 'TEXTDOMAINHERE' ),
      'edit_item'                => __( 'Edit Slider', 'TEXTDOMAINHERE' ),
      'new_item'                 => __( 'New Slider', 'TEXTDOMAINHERE' ),
      'view_item'                => __( 'View Slider', 'TEXTDOMAINHERE' ),
      'view_items'               => __( 'View Sliders', 'TEXTDOMAINHERE' ),
      'search_items'             => __( 'Search Sliders', 'TEXTDOMAINHERE' ),
      'not_found'                => __( 'No Sliders found.', 'TEXTDOMAINHERE' ),
      'not_found_in_trash'       => __( 'No Sliders found in Trash.', 'TEXTDOMAINHERE' ),
      'parent_item_colon'        => __( 'Parent Sliders:', 'TEXTDOMAINHERE' ),
      'all_items'                => __( 'All Sliders', 'TEXTDOMAINHERE' ),
      'archives'                 => __( 'Slider Archives', 'TEXTDOMAINHERE' ),
      'attributes'               => __( 'Slider Attributes', 'TEXTDOMAINHERE' ),
      'insert_into_item'         => __( 'Insert into Slider', 'TEXTDOMAINHERE' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this Slider', 'TEXTDOMAINHERE' ),
      'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
      'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
      'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
      'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
      'menu_name'                => __( 'Sliders', 'TEXTDOMAINHERE' ),
      'filter_items_list'        => __( 'Filter Slider list', 'TEXTDOMAINHERE' ),
      'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
      'items_list_navigation'    => __( 'Sliders list navigation', 'TEXTDOMAINHERE' ),
      'items_list'               => __( 'Sliders list', 'TEXTDOMAINHERE' ),
      'item_published'           => __( 'Slider published.', 'TEXTDOMAINHERE' ),
      'item_published_privately' => __( 'Slider published privately.', 'TEXTDOMAINHERE' ),
      'item_reverted_to_draft'   => __( 'Slider reverted to draft.', 'TEXTDOMAINHERE' ),
      'item_scheduled'           => __( 'Slider scheduled.', 'TEXTDOMAINHERE' ),
      'item_updated'             => __( 'Slider updated.', 'TEXTDOMAINHERE' ),
      'item_link'                => __( 'Slider Link', 'TEXTDOMAINHERE' ),
      'item_link_description'    => __( 'A link to an Slider.', 'TEXTDOMAINHERE' ),

   );

   $args = array(

      'labels'                => $labels,
      'description'           => __( 'organize and manage company Sliders', 'TEXTDOMAINHERE' ),
      'public'                => true,
      'menu_icon'             => 'dashicons-admin-network',
      'capability_type'       => 'post',
      'supports'              => array( 'title', 'editor','thumbnail','custom-fields' ),
   );

   register_post_type( 'slider', $args );
}
add_action( 'init', 'wpdocs_register_Slider_cpt' );
// ........................................Carousel register End...................................



// ........................................Customize register Start...................................
// ........................................Customize register Start...................................


function my_customizer($wp_customize)
{
    // Theme Options Panel
    $wp_customize->add_panel(
        'my_theme_options',
        array(
            'title'            => __('Theme Options', 'my_theme'),
            'description'      => __('Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'my_theme'),
        )
    );
// Theme Options Panel end 

// =========================== Theme Options section Start ===================================
// =========================== Theme Options section Start ===================================


// =========================== text_options ===========================
    $wp_customize->add_section(
        'text_options',
        array(
            'title'         => __('Text Options', 'my_theme'),
            'priority'      => 1,
            'panel'         => 'my_theme_options'
        )
    );
    

    // Setting for Copyright text.
    $wp_customize->add_setting(
        'my_copyright_text',
        array(
            'default'           => __('Express Home Delivery', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
   
    // Control for Copyright text
    $wp_customize->add_control(
        'my_copyright_text',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'text_options',
            'label'       => 'Copyright text',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
// Control for Copyright image
    $wp_customize->add_setting('logo', array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'logo',
        array(
            'label'    => __('Logo', 'text-domain'),
            'section'  => 'text_options',
            'settings' => 'logo',
        )
    ));

//=================provide customize start====================================

$wp_customize->add_section(
    'provide_options',
    array(
        'title'         => __('Provide Service Options', 'my_theme'),
        'priority'      => 1,
        'panel'         => 'my_theme_options'
    )
);
 // Setting for Copyright text.
 $wp_customize->add_setting(
    'provide_text',
    array(
        'default'           => __('We Provide Best Services', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for Provide text
    $wp_customize->add_control(
        'provide_text',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'provide_options',
            'label'       => 'Provide head text',
            'description' => 'Text put here will be outputted in the provide service',
        )
    );
 // Setting for heading_1st_line text.
 $wp_customize->add_setting(
    'provide_heading_1st_line',
    array(
        'default'           => __('Privately Owned', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for heading_1st_line
    $wp_customize->add_control(
        'provide_heading_1st_line',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'provide_options',
            'label'       => 'Provide heading line 1',
        )
    );
 // Setting for heading_2nd_line text.
 $wp_customize->add_setting(
    'provide_heading_2nd_line',
    array(
        'default'           => __('Moving Company', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for heading_2nd_line
    $wp_customize->add_control(
        'provide_heading_2nd_line',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'provide_options',
            'label'       => 'Provide heading line 2',
        )
    );
     // Setting for provide_description text.
 $wp_customize->add_setting(
    'provide_description',
    array(
        'default'           => __('Separated they live an Bookmarks grove right at the coast of the most Semantics, a large language. sleep a little bit longer and forget all this nonsense", he thought, but that was something.', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for provide_description text
    $wp_customize->add_control(
        'provide_description',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'provide_options',
            'label'       => 'description',)
    );


         // Setting for provide_contact_button text.
 $wp_customize->add_setting(
    'provide_contact_button',
    array(
        'default'           => __(' +1-404-555-0154', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for provide_contact_button text
    $wp_customize->add_control(
        'provide_contact_button',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'provide_options',
            'label'       => 'Contact Button',)
    );
         // Setting for provide_email_button text.
 $wp_customize->add_setting(
    'provide_email_button',
    array(
        'default'           => __('info@mover.com', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for provide_email_button text
    $wp_customize->add_control(
        'provide_email_button',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'provide_options',
            'label'       => 'Email Button',)
    );

    // Control for Copyright image
    $wp_customize->add_setting('provide_image', array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'provide_image',
        array(
            'label'    => __('Provide Image', 'text-domain'),
            'section'  => 'provide_options',
            'settings' => 'provide_image',
        )
    ));
//=================provide customize End====================================



//=================Banner customize Start===================================


$wp_customize->add_section(
    'banner_options',
    array(
        'title'         => __('Banner Options', 'my_theme'),
        'priority'      => 1,
        'panel'         => 'my_theme_options'
    )
);
 // Setting for banner 1 text.----------------------------
 $wp_customize->add_setting(
    'banner1_heading',
    array(
        'default'           => __('Road Way', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for banner 1 text
    $wp_customize->add_control(
        'banner1_heading',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'banner_options',
            'label'       => 'Banner 1 Heading',
            
        )
    );
 $wp_customize->add_setting(
    'banner1_description',
    array(
        'default'           => __('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for banner 1 text
    $wp_customize->add_control(
        'banner1_description',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'banner_options',
            'label'       => 'Banner 1 Description',
            
        )
    );
// Control for banner 1  image
$wp_customize->add_setting('banner1_image', array(
    'capability'        => 'edit_theme_options',
    'default'           => '',
    'sanitize_callback' => 'ic_sanitize_image',
));
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'banner1_image',
    array(
        'label'    => __('banner1 Image', 'text-domain'),
        'section'  => 'banner_options',
        'settings' => 'banner1_image',
    )
));

// Setting for banner 2 text.------------------------
 $wp_customize->add_setting(
    'banner2_heading',
    array(
        'default'           => __('Air Way', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for banner 2 text
    $wp_customize->add_control(
        'banner2_heading',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'banner_options',
            'label'       => 'Banner 2 Heading',
            
        )
    );
    $wp_customize->add_setting(
        'banner2_description',
        array(
            'default'           => __('But I must explain to you how all this mistaken idea of denouncing pleasure', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
        // Control for banner 1 text
        $wp_customize->add_control(
            'banner2_description',
            array(
                'type'        => 'textarea',
                'priority'    => 10,
                'section'     => 'banner_options',
                'label'       => 'Banner 2 Description',
                
            )
        );
// Control for banner 2  image
$wp_customize->add_setting('banner2_image', array(
    'capability'        => 'edit_theme_options',
    'default'           => '',
    'sanitize_callback' => 'ic_sanitize_image',
));
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'banner2_image',
    array(
        'label'    => __('banner2 Image', 'text-domain'),
        'section'  => 'banner_options',
        'settings' => 'banner2_image',
    )
));


// Setting for banner 3 text.---------------------------
 $wp_customize->add_setting(
    'banner3_heading',
    array(
        'default'           => __('Ocean Way', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for banner 3 text
    $wp_customize->add_control(
        'banner3_heading',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'banner_options',
            'label'       => 'Banner 3 Heading',
            
        )
    );
    $wp_customize->add_setting(
        'banner3_description',
        array(
            'default'           => __('At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
        // Control for banner 3 description
        $wp_customize->add_control(
            'banner3_description',
            array(
                'type'        => 'textarea',
                'priority'    => 10,
                'section'     => 'banner_options',
                'label'       => 'Banner 3 Description',
                
            )
        );
        // Control for banner 3  image
$wp_customize->add_setting('banner3_image', array(
    'capability'        => 'edit_theme_options',
    'default'           => '',
    'sanitize_callback' => 'ic_sanitize_image',
));
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'banner3_image',
    array(
        'label'    => __('banner3 Image', 'text-domain'),
        'section'  => 'banner_options',
        'settings' => 'banner3_image',
    )
));
//=================Banner customize End====================================




//================= Shipment banner customize start=================================


$wp_customize->add_section(
    'Shipment_banner',
    array(
        'title'         => __('Shipment Banner', 'my_theme'),
        'priority'      => 1,
        'panel'         => 'my_theme_options'
    )
);

 // Setting for Shipment_banner 1 text.----------------------------
 $wp_customize->add_setting(
    'Shipment_banner1_heading',
    array(
        'default'           => __('Pack Your Things', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for Shipment_banner 1 text
    $wp_customize->add_control(
        'Shipment_banner1_heading',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'Shipment_banner',
            'label'       => 'Shipment 1 Heading',
            
        )
    );
 $wp_customize->add_setting(
    'Shipment_banner1_description',
    array(
        'default'           => __('Do eiusmod tempor incididunt ut labore et dolore magna', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for Shipment_banner 1 description
    $wp_customize->add_control(
        'Shipment_banner1_description',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'Shipment_banner',
            'label'       => 'Shipment 1 Description',
            
        )
    );
// Control for Shipment_banner 1  image
$wp_customize->add_setting('Shipment_1_image', array(
    'capability'        => 'edit_theme_options',
    'default'           => '',
    'sanitize_callback' => 'ic_sanitize_image',
));
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'Shipment_banner1_image',
    array(
        'label'    => __('Shipment_banner 1 Image', 'text-domain'),
        'section'  => 'Shipment_banner',
        'settings' => 'Shipment_1_image',
    )
));



 // Setting for Shipment_banner 2 text.----------------------------
 $wp_customize->add_setting(
    'Shipment_banner2_heading',
    array(
        'default'           => __('Book Your Order', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for Shipment_banner 2 text
    $wp_customize->add_control(
        'Shipment_banner2_heading',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'Shipment_banner',
            'label'       => 'Shipment 2 Heading',
            
        )
    );
 $wp_customize->add_setting(
    'Shipment_banner2_description',
    array(
        'default'           => __('Do eiusmod tempor incididunt ut labore et dolore magna', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for Shipment_banner 2 description
    $wp_customize->add_control(
        'Shipment_banner2_description',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'Shipment_banner',
            'label'       => 'Shipment 2 Description',
            
        )
    );
// Control for Shipment_banner 2  image
$wp_customize->add_setting('Shipment_2_image', array(
    'capability'        => 'edit_theme_options',
    'default'           => '',
    'sanitize_callback' => 'ic_sanitize_image',
));
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'Shipment_banner2_image',
    array(
        'label'    => __('Shipment_banner 2 Image', 'text-domain'),
        'section'  => 'Shipment_banner',
        'settings' => 'Shipment_2_image',
    )
));



 // Setting for Shipment_banner 3 text.----------------------------
 $wp_customize->add_setting(
    'Shipment_banner3_heading',
    array(
        'default'           => __('Move Your Things', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for Shipment_banner 3 text
    $wp_customize->add_control(
        'Shipment_banner3_heading',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'Shipment_banner',
            'label'       => 'Shipment 3 Heading',
            
        )
    );
 $wp_customize->add_setting(
    'Shipment_banner3_description',
    array(
        'default'           => __('Do eiusmod tempor incididunt ut labore et dolore magna', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for Shipment_banner 3 description
    $wp_customize->add_control(
        'Shipment_banner3_description',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'Shipment_banner',
            'label'       => 'Shipment 3 Description',
            
        )
    );
// Control for Shipment_banner 3  image
$wp_customize->add_setting('Shipment_3_image', array(
    'capability'        => 'edit_theme_options',
    'default'           => '',
    'sanitize_callback' => 'ic_sanitize_image',
));
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'Shipment_banner3_image',
    array(
        'label'    => __('Shipment_banner 3 Image', 'text-domain'),
        'section'  => 'Shipment_banner',
        'settings' => 'Shipment_3_image',
    )
));


 // Setting for Shipment_banner 4 text.----------------------------
 $wp_customize->add_setting(
    'Shipment_banner4_heading',
    array(
        'default'           => __('Deliver Your Things', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for Shipment_banner 4 text
    $wp_customize->add_control(
        'Shipment_banner4_heading',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'Shipment_banner',
            'label'       => 'Shipment 4 Heading',
            
        )
    );
 $wp_customize->add_setting(
    'Shipment_banner4_description',
    array(
        'default'           => __('Do eiusmod tempor incididunt ut labore et dolore magna', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for Shipment_banner 4 description
    $wp_customize->add_control(
        'Shipment_banner4_description',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'Shipment_banner',
            'label'       => 'Shipment 4 Description',
            
        )
    );
// Control for Shipment_banner 4  image
$wp_customize->add_setting('Shipment_4_image', array(
    'capability'        => 'edit_theme_options',
    'default'           => '',
    'sanitize_callback' => 'ic_sanitize_image',
));
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'Shipment_banner4_image',
    array(
        'label'    => __('Shipment_banner 4 Image', 'text-domain'),
        'section'  => 'Shipment_banner',
        'settings' => 'Shipment_4_image',
    )
));
//=================Shipment banner customize End====================================




//=================welcome box customize start==================================

$wp_customize->add_section(
    'welcome_box',
    array(
        'title'         => __('Welcome Box', 'my_theme'),
        'priority'      => 1,
        'panel'         => 'my_theme_options'
    )
);

 // Setting for welcome_box text.----------------------------
 $wp_customize->add_setting(
    'welcome_box_heading',
    array(
        'default'           => __('Welcome To Mover & Co', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for welcome_box text
    $wp_customize->add_control(
        'welcome_box_heading',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'welcome_box',
            'label'       => 'welcome box main Heading',
            
        )
    );
    // Setting for welcome_box description.----------------------------
 $wp_customize->add_setting(
    'welcome_box_description',
    array(
        'default'           => __('Separated They Live In Bookmarksgrove Right At The Coast Of The Semantics, A Large Language Ocean.', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for welcome_box description
    $wp_customize->add_control(
        'welcome_box_description',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'welcome_box',
            'label'       => 'welcome box main Description',
            
        )
    );


        // Setting for welcome_box description.----------------------------
 $wp_customize->add_setting(
    'welcome_head_inLine1',
    array(
        'default'           => __('We Are', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for welcome_box description
    $wp_customize->add_control(
        'welcome_head_inLine1',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'welcome_box',
            'label'       => 'welcome_headLine1',
            
        )
    );
           // Setting for welcome_box description.----------------------------
 $wp_customize->add_setting(
    'welcome_head_inLine2',
    array(
        'default'           => __('Residential Mover', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for welcome_box description
    $wp_customize->add_control(
        'welcome_head_inLine2',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'welcome_box',
            'label'       => 'welcome_headLine2',
            
        )
    );
           // Setting for welcome_box description.----------------------------
 $wp_customize->add_setting(
    'welcome_head_inLine3',
    array(
        'default'           => __('Company', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for welcome_box description
    $wp_customize->add_control(
        'welcome_head_inLine3',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'welcome_box',
            'label'       => 'welcome_headLine3',
            
        )
    );
              // Setting for welcome_box description.----------------------------
 $wp_customize->add_setting(
    'welcome_head_description',
    array(
        'default'           => __('Separated they live an Bookmarks grove right at the coast of the most Semantics, a large language. sleep a little bit longer and forget all this nonsense", he thought, but that was something. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. Separated they live an Bookmarks grove right at the coast of the most Semantics, a large language. sleep a little bit longer and forget all this nonsense", he thought, but that was something.', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for welcome_box description
    $wp_customize->add_control(
        'welcome_head_description',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'welcome_box',
            'label'       => 'Welcome Head Description',
            
        )
    );

    $wp_customize->add_setting(
        'welcome_readMore_button',
        array(
            'default'           => __('Read More', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
        // Control for welcome_box description
        $wp_customize->add_control(
            'welcome_readMore_button',
            array(
                'type'        => 'text',
                'priority'    => 10,
                'section'     => 'welcome_box',
                'label'       => 'Welcome ReadMore Button Text',
                
            )
        );

        // Control for welcome box image
$wp_customize->add_setting('welcome_box_image', array(
    'capability'        => 'edit_theme_options',
    'default'           => '',
    'sanitize_callback' => 'ic_sanitize_image',
));
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'welcome_box1_image',
    array(
        'label'    => __('Welcome Box Image', 'text-domain'),
        'section'  => 'welcome_box',
        'settings' => 'welcome_box_image',
    )
    ));

    $wp_customize->add_setting(
        'welcome_image_upper_button',
        array(
            'default'           => __('More than 350+ projects were completed.', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
        // Control for welcome_box image upper button
        $wp_customize->add_control(
            'welcome_image_upper_button',
            array(
                'type'        => 'text',
                'priority'    => 10,
                'section'     => 'welcome_box',
                'label'       => 'Image Upper Button Text',
                
            )
        );
//=================welcome box customize End====================================







//=================Our service customize End====================================
$wp_customize->add_section(
    'Our_service',
    array(
        'title'         => __('Our service', 'my_theme'),
        'priority'      => 1,
        'panel'         => 'my_theme_options'
    )
);

 // Setting for Our service text.----------------------------
 $wp_customize->add_setting(
    'Our_service_heading',
    array(
        'default'           => __('Our Services', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for Our service text
    $wp_customize->add_control(
        'Our_service_heading',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'Our_service',
            'label'       => 'Our Service main Heading',
            
        )
    );

     // Setting for Our service description ----------------------------
 $wp_customize->add_setting(
    'Our_service_description',
    array(
        'default'           => __('Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for Our service description 
    $wp_customize->add_control(
        'Our_service_description',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'Our_service',
            'label'       => 'Our Service main Description ',
            
        )
    );


//=================Our service customize End====================================


//=================Our Footer_box customize End====================================
$wp_customize->add_section(
    'Footer_box',
    array(
        'title'         => __('Footer Description', 'my_theme'),
        'priority'      => 1,
        'panel'         => 'my_theme_options'
    )
);

 // Setting for Our service text.----------------------------
 $wp_customize->add_setting(
    'Footer_box_description',
    array(
        'default'           => __('Even the all-powerful Pointing has no control about the blind tex it is almost unorthographic life One day however.', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for Our service text
    $wp_customize->add_control(
        'Footer_box_description',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'Footer_box',
            'label'       => 'Footer Description',
            
        )
    );


     // Setting for footer row 1 header text.----------------------------
 $wp_customize->add_setting(
    'Footer_r1_head',
    array(
        'default'           => __('Services', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for footer row 1 header text
    $wp_customize->add_control(
        'Footer_r1_head',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'Footer_box',
            'label'       => 'Footer Description',
            
        )
    );
     // Setting for footer row 2 header text.----------------------------
 $wp_customize->add_setting(
    'Footer_r2_head',
    array(
        'default'           => __('Quick Links', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for footer row 2 header text
    $wp_customize->add_control(
        'Footer_r2_head',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'Footer_box',
            'label'       => 'Footer Description',
            
        )
    );
     // Setting for footer row 3 header text.----------------------------
 $wp_customize->add_setting(
    'Footer_r3_head',
    array(
        'default'           => __('Contact Us', 'my_theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
    // Control for footer row 3 header text
    $wp_customize->add_control(
        'Footer_r3_head',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'Footer_box',
            'label'       => 'Footer Description',
            
        )
    );
//=================Our Footer customize End====================================


// =========================== Theme Options section Start ===================================
// =========================== Theme Options section Start ===================================
   
}







function ic_sanitize_image($file, $setting)
{

    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );

    //check file type from file name
    $file_ext = wp_check_filetype($file, $mimes);
    //if file has a valid mime type return it, otherwise return default
    return ($file_ext['ext'] ? $file : $setting->default);
}
add_action('customize_register', 'my_customizer');

// ........................................Customize register End...................................




//.............................  Our_service_ box post Start................................. 

function set_Our_service(){
    register_sidebar(array(
        'name'          => 'Sidebar', 'textdomain',
		'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
    ));
}
add_action('widgets_init','set_Our_service');
function wpdocs_register_Our_service_cpt() {

   $labels = array(

      'name'                     => __( 'Our_services', 'TEXTDOMAINHERE' ),
      'singular_name'            => __( 'Our_service', 'TEXTDOMAINHERE' ),
      'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
      'add_new_item'             => __( 'Add New Our_service', 'TEXTDOMAINHERE' ),
      'edit_item'                => __( 'Edit Our_service', 'TEXTDOMAINHERE' ),
      'new_item'                 => __( 'New Our_service', 'TEXTDOMAINHERE' ),
      'view_item'                => __( 'View Our_service', 'TEXTDOMAINHERE' ),
      'view_items'               => __( 'View Our_services', 'TEXTDOMAINHERE' ),
      'search_items'             => __( 'Search Our_services', 'TEXTDOMAINHERE' ),
      'not_found'                => __( 'No Our_services found.', 'TEXTDOMAINHERE' ),
      'not_found_in_trash'       => __( 'No Our_services found in Trash.', 'TEXTDOMAINHERE' ),
      'parent_item_colon'        => __( 'Parent Our_services:', 'TEXTDOMAINHERE' ),
      'all_items'                => __( 'All Our_services', 'TEXTDOMAINHERE' ),
      'archives'                 => __( 'Our_service Archives', 'TEXTDOMAINHERE' ),
      'attributes'               => __( 'Our_service Attributes', 'TEXTDOMAINHERE' ),
      'insert_into_item'         => __( 'Insert into Our_service', 'TEXTDOMAINHERE' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this Our_service', 'TEXTDOMAINHERE' ),
      'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
      'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
      'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
      'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
      'menu_name'                => __( 'Our services', 'TEXTDOMAINHERE' ),
      'filter_items_list'        => __( 'Filter Our_service list', 'TEXTDOMAINHERE' ),
      'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
      'items_list_navigation'    => __( 'Our_services list navigation', 'TEXTDOMAINHERE' ),
      'items_list'               => __( 'Our_services list', 'TEXTDOMAINHERE' ),
      'item_published'           => __( 'Our_service published.', 'TEXTDOMAINHERE' ),
      'item_published_privately' => __( 'Our_service published privately.', 'TEXTDOMAINHERE' ),
      'item_reverted_to_draft'   => __( 'Our_service reverted to draft.', 'TEXTDOMAINHERE' ),
      'item_scheduled'           => __( 'Our_service scheduled.', 'TEXTDOMAINHERE' ),
      'item_updated'             => __( 'Our_service updated.', 'TEXTDOMAINHERE' ),
      'item_link'                => __( 'Our_service Link', 'TEXTDOMAINHERE' ),
      'item_link_description'    => __( 'A link to an Our_service.', 'TEXTDOMAINHERE' ),

   );

   $args = array(

      'labels'                => $labels,
      'description'           => __( 'organize and manage company Our_services', 'TEXTDOMAINHERE' ),
      'public'                => true,
      'menu_icon'             => 'dashicons-admin-network',
      'capability_type'       => 'post',
      'supports'              => array( 'title', 'editor','thumbnail'),
   );

   register_post_type( 'Our_service', $args );
}
add_action( 'init', 'wpdocs_register_Our_service_cpt' );

//...............................  Our_service_ box post End................................. 


//...............................Our_Process_ box post start...............................

function set_Our_Process(){
    register_sidebar(array(
        'name'          => 'Sidebar', 'textdomain',
		'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
    ));
}
add_action('widgets_init','set_Our_Process');
function wpdocs_register_Our_Process_cpt() {

   $labels = array(

      'name'                     => __( 'Our_Processs', 'TEXTDOMAINHERE' ),
      'singular_name'            => __( 'Our_Process', 'TEXTDOMAINHERE' ),
      'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
      'add_new_item'             => __( 'Add New Our_Process', 'TEXTDOMAINHERE' ),
      'edit_item'                => __( 'Edit Our_Process', 'TEXTDOMAINHERE' ),
      'new_item'                 => __( 'New Our_Process', 'TEXTDOMAINHERE' ),
      'view_item'                => __( 'View Our_Process', 'TEXTDOMAINHERE' ),
      'view_items'               => __( 'View Our_Processs', 'TEXTDOMAINHERE' ),
      'search_items'             => __( 'Search Our_Processs', 'TEXTDOMAINHERE' ),
      'not_found'                => __( 'No Our_Processs found.', 'TEXTDOMAINHERE' ),
      'not_found_in_trash'       => __( 'No Our_Processs found in Trash.', 'TEXTDOMAINHERE' ),
      'parent_item_colon'        => __( 'Parent Our_Processs:', 'TEXTDOMAINHERE' ),
      'all_items'                => __( 'All Our_Processs', 'TEXTDOMAINHERE' ),
      'archives'                 => __( 'Our_Process Archives', 'TEXTDOMAINHERE' ),
      'attributes'               => __( 'Our_Process Attributes', 'TEXTDOMAINHERE' ),
      'insert_into_item'         => __( 'Insert into Our_Process', 'TEXTDOMAINHERE' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this Our_Process', 'TEXTDOMAINHERE' ),
      'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
      'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
      'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
      'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
      'menu_name'                => __( 'Our Processs', 'TEXTDOMAINHERE' ),
      'filter_items_list'        => __( 'Filter Our_Process list', 'TEXTDOMAINHERE' ),
      'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
      'items_list_navigation'    => __( 'Our_Processs list navigation', 'TEXTDOMAINHERE' ),
      'items_list'               => __( 'Our_Processs list', 'TEXTDOMAINHERE' ),
      'item_published'           => __( 'Our_Process published.', 'TEXTDOMAINHERE' ),
      'item_published_privately' => __( 'Our_Process published privately.', 'TEXTDOMAINHERE' ),
      'item_reverted_to_draft'   => __( 'Our_Process reverted to draft.', 'TEXTDOMAINHERE' ),
      'item_scheduled'           => __( 'Our_Process scheduled.', 'TEXTDOMAINHERE' ),
      'item_updated'             => __( 'Our_Process updated.', 'TEXTDOMAINHERE' ),
      'item_link'                => __( 'Our_Process Link', 'TEXTDOMAINHERE' ),
      'item_link_description'    => __( 'A link to an Our_Process.', 'TEXTDOMAINHERE' ),

   );

   $args = array(

      'labels'                => $labels,
      'description'           => __( 'organize and manage company Our_Processs', 'TEXTDOMAINHERE' ),
      'public'                => true,
      'menu_icon'             => 'dashicons-admin-network',
      'capability_type'       => 'post',
      'supports'              => array( 'title', 'editor','thumbnail'),
   );

   register_post_type( 'Our_Process', $args );
}
add_action( 'init', 'wpdocs_register_Our_Process_cpt' );

//...............................Our_Process_ box post End.................................



//...............................Our_Features_ box post Start................................

function set_Our_Feature(){
    register_sidebar(array(
        'name'          => 'Sidebar', 'textdomain',
		'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
    ));
}
add_action('widgets_init','set_Our_Feature');
function wpdocs_register_Our_Feature_cpt() {

   $labels = array(

      'name'                     => __( 'Our_Features', 'TEXTDOMAINHERE' ),
      'singular_name'            => __( 'Our_Feature', 'TEXTDOMAINHERE' ),
      'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
      'add_new_item'             => __( 'Add New Our_Feature', 'TEXTDOMAINHERE' ),
      'edit_item'                => __( 'Edit Our_Feature', 'TEXTDOMAINHERE' ),
      'new_item'                 => __( 'New Our_Feature', 'TEXTDOMAINHERE' ),
      'view_item'                => __( 'View Our_Feature', 'TEXTDOMAINHERE' ),
      'view_items'               => __( 'View Our_Features', 'TEXTDOMAINHERE' ),
      'search_items'             => __( 'Search Our_Features', 'TEXTDOMAINHERE' ),
      'not_found'                => __( 'No Our_Features found.', 'TEXTDOMAINHERE' ),
      'not_found_in_trash'       => __( 'No Our_Features found in Trash.', 'TEXTDOMAINHERE' ),
      'parent_item_colon'        => __( 'Parent Our_Features:', 'TEXTDOMAINHERE' ),
      'all_items'                => __( 'All Our_Features', 'TEXTDOMAINHERE' ),
      'archives'                 => __( 'Our_Feature Archives', 'TEXTDOMAINHERE' ),
      'attributes'               => __( 'Our_Feature Attributes', 'TEXTDOMAINHERE' ),
      'insert_into_item'         => __( 'Insert into Our_Feature', 'TEXTDOMAINHERE' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this Our_Feature', 'TEXTDOMAINHERE' ),
      'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
      'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
      'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
      'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
      'menu_name'                => __( 'Our Feature', 'TEXTDOMAINHERE' ),
      'filter_items_list'        => __( 'Filter Our_Feature list', 'TEXTDOMAINHERE' ),
      'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
      'items_list_navigation'    => __( 'Our_Features list navigation', 'TEXTDOMAINHERE' ),
      'items_list'               => __( 'Our_Features list', 'TEXTDOMAINHERE' ),
      'item_published'           => __( 'Our_Feature published.', 'TEXTDOMAINHERE' ),
      'item_published_privately' => __( 'Our_Feature published privately.', 'TEXTDOMAINHERE' ),
      'item_reverted_to_draft'   => __( 'Our_Feature reverted to draft.', 'TEXTDOMAINHERE' ),
      'item_scheduled'           => __( 'Our_Feature scheduled.', 'TEXTDOMAINHERE' ),
      'item_updated'             => __( 'Our_Feature updated.', 'TEXTDOMAINHERE' ),
      'item_link'                => __( 'Our_Feature Link', 'TEXTDOMAINHERE' ),
      'item_link_description'    => __( 'A link to an Our_Feature.', 'TEXTDOMAINHERE' ),

   );

   $args = array(

      'labels'                => $labels,
      'description'           => __( 'organize and manage company Our_Features', 'TEXTDOMAINHERE' ),
      'public'                => true,
      'menu_icon'             => 'dashicons-admin-network',
      'capability_type'       => 'post',
      'supports'              => array( 'title', 'editor','thumbnail'),
   );

   register_post_type( 'Our_Feature', $args );
}
add_action( 'init', 'wpdocs_register_Our_Feature_cpt' );
//...............................Our Features_ box post End................................. 


//.........................Our_Dedicated Team box post Start............................... 

function set_Our_Dedicate(){
    register_sidebar(array(
        'name'          => 'Sidebar', 'textdomain',
		'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
    ));
}
add_action('widgets_init','set_Our_Dedicate');
function wpdocs_register_Our_Dedicate_cpt() {

   $labels = array(

      'name'                     => __( 'Our_Dedicates', 'TEXTDOMAINHERE' ),
      'singular_name'            => __( 'Our_Dedicate', 'TEXTDOMAINHERE' ),
      'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
      'add_new_item'             => __( 'Add New Our_Dedicate', 'TEXTDOMAINHERE' ),
      'edit_item'                => __( 'Edit Our_Dedicate', 'TEXTDOMAINHERE' ),
      'new_item'                 => __( 'New Our_Dedicate', 'TEXTDOMAINHERE' ),
      'view_item'                => __( 'View Our_Dedicate', 'TEXTDOMAINHERE' ),
      'view_items'               => __( 'View Our_Dedicates', 'TEXTDOMAINHERE' ),
      'search_items'             => __( 'Search Our_Dedicates', 'TEXTDOMAINHERE' ),
      'not_found'                => __( 'No Our_Dedicates found.', 'TEXTDOMAINHERE' ),
      'not_found_in_trash'       => __( 'No Our_Dedicates found in Trash.', 'TEXTDOMAINHERE' ),
      'parent_item_colon'        => __( 'Parent Our_Dedicates:', 'TEXTDOMAINHERE' ),
      'all_items'                => __( 'All Our_Dedicates', 'TEXTDOMAINHERE' ),
      'archives'                 => __( 'Our_Dedicate Archives', 'TEXTDOMAINHERE' ),
      'attributes'               => __( 'Our_Dedicate Attributes', 'TEXTDOMAINHERE' ),
      'insert_into_item'         => __( 'Insert into Our_Dedicate', 'TEXTDOMAINHERE' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this Our_Dedicate', 'TEXTDOMAINHERE' ),
      'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
      'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
      'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
      'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
      'menu_name'                => __( 'Our Dedicate', 'TEXTDOMAINHERE' ),
      'filter_items_list'        => __( 'Filter Our_Dedicate list', 'TEXTDOMAINHERE' ),
      'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
      'items_list_navigation'    => __( 'Our_Dedicates list navigation', 'TEXTDOMAINHERE' ),
      'items_list'               => __( 'Our_Dedicates list', 'TEXTDOMAINHERE' ),
      'item_published'           => __( 'Our_Dedicate published.', 'TEXTDOMAINHERE' ),
      'item_published_privately' => __( 'Our_Dedicate published privately.', 'TEXTDOMAINHERE' ),
      'item_reverted_to_draft'   => __( 'Our_Dedicate reverted to draft.', 'TEXTDOMAINHERE' ),
      'item_scheduled'           => __( 'Our_Dedicate scheduled.', 'TEXTDOMAINHERE' ),
      'item_updated'             => __( 'Our_Dedicate updated.', 'TEXTDOMAINHERE' ),
      'item_link'                => __( 'Our_Dedicate Link', 'TEXTDOMAINHERE' ),
      'item_link_description'    => __( 'A link to an Our_Dedicate.', 'TEXTDOMAINHERE' ),

   );

   $args = array(

      'labels'                => $labels,
      'description'           => __( 'organize and manage company Our_Dedicates', 'TEXTDOMAINHERE' ),
      'public'                => true,
      'menu_icon'             => 'dashicons-admin-network',
      'capability_type'       => 'post',
      'supports'              => array( 'title', 'editor','thumbnail'),
   );

   register_post_type( 'Our_Dedicate', $args );
}
add_action( 'init', 'wpdocs_register_Our_Dedicate_cpt' );
//.........................Our Dedicated Team box post End.................................

//.........................What_Client_Says post Start............................... 

function set_Client_Say(){
    register_sidebar(array(
        'name'          => 'Sidebar', 'textdomain',
		'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
    ));
}
add_action('widgets_init','set_Client_Say');
function wpdocs_register_Client_Say_cpt() {

   $labels = array(

      'name'                     => __( 'Client_Says', 'TEXTDOMAINHERE' ),
      'singular_name'            => __( 'Client_Say', 'TEXTDOMAINHERE' ),
      'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
      'add_new_item'             => __( 'Add New Client_Say', 'TEXTDOMAINHERE' ),
      'edit_item'                => __( 'Edit Client_Say', 'TEXTDOMAINHERE' ),
      'new_item'                 => __( 'New Client_Say', 'TEXTDOMAINHERE' ),
      'view_item'                => __( 'View Client_Say', 'TEXTDOMAINHERE' ),
      'view_items'               => __( 'View Client_Says', 'TEXTDOMAINHERE' ),
      'search_items'             => __( 'Search Client_Says', 'TEXTDOMAINHERE' ),
      'not_found'                => __( 'No Client_Says found.', 'TEXTDOMAINHERE' ),
      'not_found_in_trash'       => __( 'No Client_Says found in Trash.', 'TEXTDOMAINHERE' ),
      'parent_item_colon'        => __( 'Parent Client_Says:', 'TEXTDOMAINHERE' ),
      'all_items'                => __( 'All Client_Says', 'TEXTDOMAINHERE' ),
      'archives'                 => __( 'Client_Say Archives', 'TEXTDOMAINHERE' ),
      'attributes'               => __( 'Client_Say Attributes', 'TEXTDOMAINHERE' ),
      'insert_into_item'         => __( 'Insert into Client_Say', 'TEXTDOMAINHERE' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this Client_Say', 'TEXTDOMAINHERE' ),
      'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
      'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
      'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
      'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
      'menu_name'                => __( 'Client Say', 'TEXTDOMAINHERE' ),
      'filter_items_list'        => __( 'Filter Client_Say list', 'TEXTDOMAINHERE' ),
      'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
      'items_list_navigation'    => __( 'Client_Says list navigation', 'TEXTDOMAINHERE' ),
      'items_list'               => __( 'Client_Says list', 'TEXTDOMAINHERE' ),
      'item_published'           => __( 'Client_Say published.', 'TEXTDOMAINHERE' ),
      'item_published_privately' => __( 'Client_Say published privately.', 'TEXTDOMAINHERE' ),
      'item_reverted_to_draft'   => __( 'Client_Say reverted to draft.', 'TEXTDOMAINHERE' ),
      'item_scheduled'           => __( 'Client_Say scheduled.', 'TEXTDOMAINHERE' ),
      'item_updated'             => __( 'Client_Say updated.', 'TEXTDOMAINHERE' ),
      'item_link'                => __( 'Client_Say Link', 'TEXTDOMAINHERE' ),
      'item_link_description'    => __( 'A link to an Client_Say.', 'TEXTDOMAINHERE' ),

   );

   $args = array(

      'labels'                => $labels,
      'description'           => __( 'organize and manage company Client_Says', 'TEXTDOMAINHERE' ),
      'public'                => true,
      'menu_icon'             => 'dashicons-admin-network',
      'capability_type'       => 'post',
      'supports'              => array( 'title', 'editor','thumbnail'),
   );

   register_post_type( 'Client_Say', $args );
}
add_action( 'init', 'wpdocs_register_Client_Say_cpt' );
//.........................What Client Says post End................................. 

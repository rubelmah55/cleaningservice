<?php

function cleaning_setup() {
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'cleaning', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary Menu', 'cleaning' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sz16_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Woocommerce Support
	add_theme_support( 'woocommerce' );

	add_theme_support( 'wc-product-gallery-slider' );

	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
}
add_action( 'after_setup_theme', 'cleaning_setup' );


function cleaning_scripts() {

	/**
	 * Enqueue styles.
	 */
	wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
	wp_enqueue_style('icon-font', get_template_directory_uri() . '/css/font-awesome.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('slick-css', get_template_directory_uri() . '/css/slick.css', array(), false, 'all');
	wp_enqueue_style('venubox', get_template_directory_uri() . '/css/venobox.css', array(), false, 'all');
	wp_enqueue_style( 'cleaning-style', get_stylesheet_uri() );


	/**
	 * Enqueue scripts.
	 */
	wp_enqueue_script('jquery');

	wp_enqueue_script('jquery_min', get_template_directory_uri() . '/js/jquery.min.js', array(), false, false);

	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
	wp_enqueue_script('slick_min', get_template_directory_uri() . '/js/slick.min.js', array(), false, true);
	wp_enqueue_script('venobox', get_template_directory_uri() . '/js/venobox.min.js', array(), false, true);
	wp_enqueue_script('setting', get_template_directory_uri() . '/js/setting.js', array(), false, true);

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cleaning_scripts' );



add_action( 'init', 'cleaning_post_types' );

function cleaning_post_types() {
	$labels = array(
		'name'               => _x( 'Services', 'post type general name', 'cleaning' ),
		'singular_name'      => _x( 'Service', 'post type singular name', 'cleaning' ),
		'menu_name'          => _x( 'Services', 'admin menu', 'cleaning' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'cleaning' ),
		'add_new'            => _x( 'Add New Service', 'Service', 'cleaning' ),
		'add_new_item'       => __( 'Add New Service', 'cleaning' ),
		'new_item'           => __( 'New Service', 'cleaning' ),
		'edit_item'          => __( 'Edit Service', 'cleaning' ),
		'view_item'          => __( 'View Service', 'cleaning' ),
		'all_items'          => __( 'All Services', 'cleaning' ),
		'search_items'       => __( 'Search Services', 'cleaning' ),
		'parent_item_colon'  => __( 'Parent Services:', 'cleaning' ),
		'not_found'          => __( 'No Services found.', 'cleaning' ),
		'not_found_in_trash' => __( 'No Services found in Trash.', 'cleaning' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'cleaning' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_icon'			 => 'dashicons-editor-kitchensink',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','excerpt')
	);
	register_post_type( 'service', $args );
	//Register Post Type For Services Item


	$labels = array(
		'name'               => _x( 'Services', 'post type general name', 'cleaning' ),
		'singular_name'      => _x( 'Service', 'post type singular name', 'cleaning' ),
		'menu_name'          => _x( 'Services', 'admin menu', 'cleaning' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'cleaning' ),
		'add_new'            => _x( 'Add New Service', 'Service', 'cleaning' ),
		'add_new_item'       => __( 'Add New Service', 'cleaning' ),
		'new_item'           => __( 'New Service', 'cleaning' ),
		'edit_item'          => __( 'Edit Service', 'cleaning' ),
		'view_item'          => __( 'View Service', 'cleaning' ),
		'all_items'          => __( 'All Services', 'cleaning' ),
		'search_items'       => __( 'Search Services', 'cleaning' ),
		'parent_item_colon'  => __( 'Parent Services:', 'cleaning' ),
		'not_found'          => __( 'No Services found.', 'cleaning' ),
		'not_found_in_trash' => __( 'No Services found in Trash.', 'cleaning' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'cleaning' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_icon'			 => 'dashicons-editor-kitchensink',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','excerpt')
	);
	register_post_type( 'service', $args );

}


/*
	===============================
	Register Sidebar
	===============================
*/
add_action( 'widgets_init', 'clening_sidebar' );
function clening_sidebar() {
    register_sidebar( array(
			'name'          => __('Page Sidebar', 'text-domain'),
			'id'            => 'page-sidebar',
			'description'   => __('This sidebar will be displayed in pages', 'text-domain'),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="group-header"><p class="heading">',
			'after_title'   => '</p></div>',
    ) );
}






function my_admin_css( $css ) {
    $css .= "
        #site-heading a span { color:blue !important; }
        #favorite-actions { display:none; }
    ";
    return $css;
}
add_filter( 'c2c_add_admin_css', 'my_admin_css' );




require get_template_directory() . '/inc/options.php';
require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';


/* customize login screen */
function charity_images_custom_login_page() {
    echo '<style type="text/css">
        .login h1 a { background-image:url("'. get_stylesheet_directory_uri().'/images/logo.png") !important; height: 100px !important; width: 100% !important; margin: 0 auto !important; background-size: contain !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_stylesheet_directory_uri().'/images/banner.jpg") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before {background-color: #42b1e67a; position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
		#login {
		    padding: 7% 0 0;
		}
    </style>';
}
add_action('login_head', 'charity_images_custom_login_page', 99);
function cabinet_login_logo_url_title() {
 	return 'Business Simple';
}
add_filter( 'login_headertitle', 'cabinet_login_logo_url_title' );
function cabinet_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'cabinet_login_logo_url' );






// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');
















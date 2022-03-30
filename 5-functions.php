<?php

get_template_part('/inc/halim-options');

include( get_template_directory() . '/includes/my_file.php' );

require_once(get_template_directory().'/layout/twitterAPI.php');

include( get_template_directory() . '/layout/twitterAPI.php' );

require_once('twitterAPI.php');

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

//Get template part create folder

template-parts/content-service.php 

<?php get_template_part("template-parts/content", "service")?>

// Kirki Customizer
require_once(get_theme_file_path('/inc/stack-customizer.php'));

function halim_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'sliders', 'teams', 'testimonials', 'portfolio', 'gallery'));
    load_theme_textdomain('halim', get_template_directory() . '/languages');

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'halim')
    ));
	
			add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);
		add_editor_style("/assets/css/editor.css");
		//css blank takbe
		
		add_image_size( 'category-thumb', 300, 9999 );
		the_post_thumbnail('category-thumb');
		the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) );
		the_post_thumbnail( 'thumbnail', array( "left","bottom" ) );
		//Regenerate thumbnail plugin lagbe
	
}
add_action('after_setup_theme', 'halim_setup');


function halim_assets() {
    
    wp_enqueue_style( 'font-poppins', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'style-theme', get_stylesheet_uri() );


    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

}   
add_action('wp_enqueue_scripts', 'halim_assets');


// Custom Posts
function halim_custom_posts() {

    // Slider Custom Post
    register_post_type('sliders', array(
        'labels' => array(
            'name' => __('Sliders', 'halim'),
            'singular_name' => __('Slider', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true
    ));

    // Portfolio Custom Post
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => __('Portfolios', 'halim'),
            'singular_name' => __('Portfolio', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    ));

    register_taxonomy('portfolio-cat', 'portfolio', array(
        'lables' => array(
            'name' => __('Categories', 'halim'),
            'singular_name' => __('Category', 'halim')
        ),
        'hierarchical' => true,
        'show_admin_column' => true
    ));

}
add_action('init', 'halim_custom_posts');

// Register Sidebar

function halim_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'halim' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'halim' ),
        'before_widget' => '<div class="single-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'halim_widgets_init' );
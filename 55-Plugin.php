<!-- Create a new folder in plugin folder. For example create a folder name custom-post. Then create index.php file -->

<?php
/*
Plugin Name:  WPBeginner Plugin Tutorial
Plugin URI:   https://www.wpbeginner.com 
Description:  A short little description of the plugin. It will be displayed on the Plugins page in WordPress admin area. 
Version:      1.0
Author:       WPBeginner 
Author URI:   https://www.wpbeginner.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wpb-tutorial
Domain Path:  /languages
*/

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

    // Services Custom Post
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'halim'),
            'singular_name' => __('Service', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'custom-fields'),
        'show_in_rest' => true
    ));

    // Counter Custom Post
    register_post_type('counters', array(
        'labels' => array(
            'name' => __('Counters', 'halim'),
            'singular_name' => __('Counter', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'custom-fields'),
    ));

    // Team Custom Post
    register_post_type('teams', array(
        'labels' => array(
            'name' => __('Teams', 'halim'),
            'singular_name' => __('Team', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'thumbnail', 'custom-fields'),
    ));

    // Testimonials Custom Post
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'halim'),
            'singular_name' => __('Testimonial', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'thumbnail', 'custom-fields'),
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

    // Gallery Custom Post
    register_post_type('gallery', array(
        'labels' => array(
            'name' => __('Gallerys', 'halim'),
            'singular_name' => __('Gallery', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'thumbnail', 'custom-fields'),
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
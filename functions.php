<?php

function elearning_enqueue_fontawesome() {
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'elearning_enqueue_fontawesome' );
add_action( 'admin_enqueue_scripts', 'elearning_enqueue_fontawesome' );


function eLearning_load_scripts(){
    wp_enqueue_style( 'eLearning_styleSheet', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_style( 'eLearning_bootstrap_min', get_template_directory_uri() . '/css/bootstrap.min.css', '1.0');
    wp_enqueue_style( 'eLearning_animate', get_template_directory_uri() . '/lib/animate/animate.css', '1.0');
    wp_enqueue_style( 'eLearning_style', get_template_directory_uri() . '/css/style.css', '1.0');
    wp_enqueue_style( 'eLearning_custom', get_template_directory_uri() . '/css/custom.css', '1.0');
    wp_enqueue_style( 'eLearning_animate_min', get_template_directory_uri() . '/lib/animate/animate.min.css', '1.0');
    wp_enqueue_style( 'eLearning_owl_carousel_css', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.css', '1.0');
    wp_enqueue_style( 'eLearning_owl_carousel_css_min', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', '1.0');
    wp_enqueue_style( 'eLearning_owl_theme_default_css', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.theme.default.css', '1.0');
    wp_enqueue_style( 'eLearning_owl_theme_default_min_css', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.theme.default.min.css', '1.0');
    wp_enqueue_style( 'eLearning_owl_theme_green_css', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.theme.green.css', '1.0');
    wp_enqueue_style( 'eLearning_owl_theme_green_min_css', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.theme.green.min.css', '1.0');

    wp_enqueue_script('eLearning_main_js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), NULL, false);
    wp_enqueue_script('eLearning_script_js', get_template_directory_uri() . '/js/script.js', array(  ) );
    wp_enqueue_script('eLearning_easing', get_template_directory_uri() . '/easing/easing.js', array( ), NULL, false);
    wp_enqueue_script('eLearning_easing_min', get_template_directory_uri() . '/easing/easing.min.js', array( ), NULL, false);
    wp_enqueue_script('eLearning_owl_carousel', get_template_directory_uri() . '/owlcarousel/assets/owl.carousel.js', array( ), NULL, false);
    wp_enqueue_script('eLearning_owl_carousel_min', get_template_directory_uri() . '/owlcarousel/assets/owl.carousel.min.js', array( ), NULL, false);
    wp_enqueue_script('eLearning_wow', get_template_directory_uri() . '/wow/wow.js', array( ), NULL, false);
    wp_enqueue_script('eLearning_wow_min', get_template_directory_uri() . '/wow/wow.min.js', array( ), NULL, false);

}

add_action('wp_enqueue_scripts', 'eLearning_load_scripts');

function after_theme_setup(){

    $custom_logo_defaults = array(
		'height'               => 300,
		'width'                => 300,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $custom_logo_defaults );

    register_nav_menus(
        array(
            'main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu',
        )
    );

    
}

add_action('after_setup_theme', 'after_theme_setup');

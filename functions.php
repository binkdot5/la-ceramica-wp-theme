<?php
/**
 * La Ceramica Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package La Ceramica
 * 
 */

/**
 * Enqueue scripts and styles.
 */
function laceramica_scripts() {
    wp_enqueue_style( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1', 'all');
    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1', 'all');
    wp_enqueue_style( 'laceramica-icons', get_template_directory_uri() . '/inc/css/fontello.css', array(), '1.0', 'all');
    wp_enqueue_style( 'laceramica-style', get_stylesheet_uri(), array(), '1.0', 'all');
    // wp_enqueue_script( 'vue', get_template_directory_uri() . '/inc/js/vue.js', array(), '2.6.12', true);
    wp_enqueue_script( 'jquery-cdn', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', true);
    wp_enqueue_script( 'jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.3.2.min.js', array(), '3.3.2', true);
    wp_enqueue_script( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.0', true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);    
}
add_action( 'wp_enqueue_scripts', 'laceramica_scripts' );

function laceramica_config() {

    // This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
                'menu-1' => __( 'Primary', 'laceramica' ),
                'menu-2' => __( 'Mobile', 'laceramica-mob')
			)
		);
    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */ 
    add_theme_support( 'custom-logo', array(
        'height'      => 120,
        'width'       => 228,
        'flex-height' => false,
        'flex-width'  => false,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    /**
     * Adds ability to edit <title> tag from Wordpress
     */
    add_theme_support( 'title-tag' );
    
}
add_action( 'after_setup_theme', 'laceramica_config', 0 );


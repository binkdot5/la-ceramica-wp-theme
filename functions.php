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
    wp_enqueue_style( 'laceramica-style', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_style( 'laceramica-icons', get_template_directory_uri() . '/inc/css/fontello.css', array(), '1.0', 'all');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/inc/css/slick.css', array(), '1.8.1', 'all');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/inc/css/animate.min.css', array(), '4.1.1', 'all');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery/jquery.min.js', array(), '3.6.0', true);
    wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/js/jquery/jquery-migrate.min.js', array(), '1.4.1', true);
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array(), '1.8.2', true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);    
}
add_action( 'wp_enqueue_scripts', 'laceramica_scripts' );

function laceramica_config() {

    // This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
                'menu-1' => __( 'Primary', 'la-ceramica' ),
                'menu-2' => __( 'Mobile', 'la-ceramica'),
                'menu-3' => __( 'Footer', 'la-ceramica' )
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


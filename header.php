<?php
/**
 * The header of the theme.
 *
 * This is the template that displays all of the <head> section and initiates <body>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package La Ceramica
 * 
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php
        if ( ! function_exists( '_wp_render_title_tag' ) ) {
            function theme_slug_render_title() {
        ?>
        <?php
            }
            add_action( 'wp_head', 'theme_slug_render_title' );
        }
    ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <main class="lcLayout">
        <h1 class="hidden">La Ceramica</h1>
    
        <header class="left-fixed-header">
            <h2 class="hidden">Site Header</h2>
            <div class="mobHeader">
                <h3 class="hidden">Site Logo</h3>
                <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '"><img id="logo" src="' . esc_url( $custom_logo_url ) . '" alt="la ceramica logo"> </a>';
                ?>
                <button class="mob-nav-show"><i class="icon-008-list"></i></button>
            </div>
            <address id="mainAddress">
                <?php the_field( 'store_address' ); ?>
            </address>
            <nav class="fixedNav">
                <h3 class="hidden">Site Navigation</h3>
                <!-- <a href="">MENU</a> -->
                <?php wp_nav_menu( array('theme_location' => 'menu-1') ); ?>
            </nav>
            <nav class="overlay mob-nav">
                <?php get_template_part('/template-parts/header/mobile-nav'); ?>
            </nav>
            
        </header>
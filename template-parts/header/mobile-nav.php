<?php
/**
 * Displays the navigation menu for mobile. *768px and below*
 *
 * @package La Ceramica
 * 
 */

?>

<div class="fg-nav">
    <h2 class="hidden">Mobile Navigation Menu</h2>
    <?php wp_nav_menu( array('theme_location' => 'menu-2') ); ?>
    <address>
        <?php the_field('store_address'); ?>
        <br />
        <div>
            <a class="blueHeading" href="tel:<?php the_field('store_tel'); ?>">CALL NOW</a>
        </div>
    </address>
    <br />
    <a class="mob-nav-close" href="#">&times;</a>
</div>
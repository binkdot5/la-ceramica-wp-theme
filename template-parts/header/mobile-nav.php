<?php
/**
 * Displays the navigation menu for mobile. *768px and below*
 *
 * @package La Ceramica
 * 
 */

?>

<div>
    <h2 class="hidden">Mobile Navigation Menu</h2>
    <a class="mob-nav-close" href="#">&times;</a> 
    <ul>
        <li>HOME</li>
        <li>COMPANY</li>
        <li>PRODUCTS</li>
        <li>CONTACT</li>
    </ul>
    <address>
        <?php the_field( 'store_address' ); ?>
        <div>
            <i class="icon-icon-awesome-email"></i>
            <a class="blueHeading" href="tel:<?php the_field('store_tel'); ?>">CALL NOW</a>
        </div>
    </address>
</div>
<?php
/**
 * The template for displaying the home page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package La Ceramica
 * 
 */

get_header();
?>

    <section class="lc_col_1 animate__animated animate__zoomIn">
        <h2 class="hidden">Column 1</h2>
        <div class="cell-1 d-flex-column">
            <h2>Send us a message!</h2>
            <?php
                $page = get_post(); 
                $content = apply_filters( 'the_content', $page->post_content ); 
                echo $content;  
            ?>
        </div>
    </section>
    <section class="lc_col_2 animate__animated animate__zoomIn body-margin">
        <h2 class="hidden">Column 2</h2>
        <div class="cell-1">
            <h3>As promised we are one click away, <br />
            use the form on the left, write to us <br />
            at <a href="mailto:contact@laceramic.in">contact@laceramica.in</a><br />
            or give us a call at :<a href="tel:+919990999093">+91-99909-99093</a></h3>
        </div>
    </section>

    

<?php

get_footer();
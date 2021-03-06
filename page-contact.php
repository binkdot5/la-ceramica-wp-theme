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
    </section>
<?php

get_footer();
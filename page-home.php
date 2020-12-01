<?php
/**
 * The template for displaying the home page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mia&J
 * 
 */

get_header();
?>

    <section class="lc_col_1 animate__animated animate__zoomIn">
        <h2 class="hidden">Column 1</h2>
        <?php get_template_part( 'template-parts/home/carousel-widget' ); ?>
    </section>
    <section class="lc_col_2 animate__animated animate__zoomIn">
        <h2 class="hidden">Column 2</h2>
        <div class="cell-1 inline-flex">
            <hgroup class="cbs">
                <h3>Complete</h3>
                <h3>Bathroom</h3>
                <h3>Solutions</h3>
            </hgroup>
            <?php
                $page = get_post(); 
                $content = apply_filters( 'the_content', $page->post_content ); 
                echo $content;  
            ?>
        </div>
        <div class="cell-2">
            <img class="col2-img" loading="lazy" src="<?php the_field('carousel_5'); ?>" alt="oyster whirlpool frontal" />
        </div>
        <div class="cell-3 inline-flex usp">
            <?php get_template_part( 'template-parts/home/usp-widget' ); ?>  
        </div>
        
    </section>

    

<?php

get_footer();
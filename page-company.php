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
        <div class="cell-1 inline-flex">
            <h2>Founded in 2007</h2>
            <?php
                $page = get_post(); 
                $content = apply_filters( 'the_content', $page->post_content ); 
                echo $content;  
            ?>
        </div>
        <div class="cell-1">
            <div>
                <h3><?php the_field('usp_1_heading'); ?></h3>
                <p><?php the_field('usp_1_body'); ?></p>
            </div>
            <div>
                <h3><?php the_field('usp_2_heading'); ?></h3>
                <p><?php the_field('usp_2_body'); ?></p>
            </div>
        </div>
        <div class="cell-2">
            <div>
                <h3><?php the_field('usp_3_heading'); ?></h3>
                <p><?php the_field('usp_3_body'); ?></p>
            </div>
        </div>
    </section>
    <section class="lc_col_2 animate__animated animate__zoomIn">
        <h2 class="hidden">Column 2</h2>
        <div class="cell-1">
            <img class="col2-img" src="<?php the_field('carousel_5'); ?>" alt="oyster whirlpool frontal" />
        </div>
        <div class="cell-2">
            <h2>Recognised & Reliable</h2>
            <?php get_template_part( 'template-parts/company/awards-widget' ); ?>
        </div>
        <div class="cell-3 inline-flex usp">
            <?php get_template_part( 'template-parts/home/usp-widget' ); ?>  
        </div>
        
    </section>

    

<?php

get_footer();
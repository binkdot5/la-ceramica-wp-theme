<?php
/**
 * The template for displaying the products page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package La Ceramica
 * 
 */

get_header();
?>

    <section class="lc_col_1 animate__animated animate__zoomIn body-margin">
        <h2 class="hidden">Column 1</h2>
        <div class="cell-1 d-flex-column">
            <div class="product-grid-margin inline-flex">
                <img class="col2-img product-tall" src="<?php the_field('lc-products-image-tall-1'); ?>" alt="photo 1" />
                <img class="col2-img product-tall" src="<?php the_field('lc-products-image-tall-2'); ?>" alt="photo 2" />
            </div>
            <?php
                $page = get_post(); 
                $content = apply_filters( 'the_content', $page->post_content ); 
                echo $content;
                the_field('pr_copy_2');
            ?>
        </div>
        <div class="cell-2">
            <h2 class="hidden">Photo 5</h2>
            <img class="col2-img product-square" src="<?php the_field('lc-products-image-square-2'); ?>" alt="photo 5" />
        </div>
        <div class="cell-3 product-grid-margin">
            <h2 class="hidden">Photo 7</h2>
            <img class="col2-img product-square" src="<?php the_field('lc-products-image-square-2'); ?>" alt="photo 7" />
        </div>
        <div class="cell-4">
            <div class="product-grid-margin inline-flex">
                <img class="col2-img product-tall" src="<?php the_field('lc-products-image-tall-1'); ?>" alt="photo 1" />
                <img class="col2-img product-tall" src="<?php the_field('lc-products-image-tall-2'); ?>" alt="photo 2" />
            </div>
        </div>
    </section>
    <section class="lc_col_2 animate__animated animate__zoomIn body-margin">
        <h2 class="hidden">Column 2</h2>
        <div class="cell-1">
            <h2 class="hidden">Photo 3</h2>
            <img class="col2-img" src="<?php the_field('lc-products-image-wide-1'); ?>" alt="photo 3" />
            <div class="brand-overlay">
                <a href="/wordpress/clients/la-ceramica/products/jaquar"><h2>Jaquar</h2></a>
            </div>
        </div>
        <div class="cell-2 inline-flex">
            <h2 class="hidden">Photo 3 & 4</h2>
            <img class="col2-img product-tall-2" src="<?php the_field('lc-products-image-tall-3'); ?>" alt="photo 3" />
            <img class="col2-img product-tall-3" src="<?php the_field('lc-products-image-square-1'); ?>" alt="photo 3" />
        </div>
        <div class="cell-3">
            <div class="product-grid-margin">
                <h3><?php the_field('pr_heading_3'); ?></h3>
                <p class="mb-2"><?php the_field('pr_copy_3'); ?></p>
            </div>
            <img class="col2-img" src="<?php the_field('lc-products-image-wide-2'); ?>" alt="photo 6" />
        </div>
        <div class="cell-4">
        <div class="product-grid-margin">
                <h3><?php the_field('pr_heading_4'); ?></h3>
                <p class="mb-2"><?php the_field('pr_copy_4'); ?></p>
            </div>
        </div>
    </section>

    

<?php

get_footer();
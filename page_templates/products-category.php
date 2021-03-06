<?php
/*
 * Template Name: Products Category Template
 */

get_header(); ?>

<section class="lc_col_1 animate__animated animate__zoomIn body-margin">
    <div class="cell-1">
        <h2 class="hidden"><?php echo get_the_title() ?></h2>
        <p><a href="<?php echo site_url('/products') ?>">< Back</a></p>
        <?php
                $page = get_post(); 
                $content = apply_filters( 'the_content', $page->post_content ); 
                echo $content;
        ?>
    </div>
    <div class="cell-2">
        <div class="product-grid-margin inline-grid">
            <img class="col2-img product-tall" src="<?php the_field('brand_img_2'); ?>"/>
            <img class="col2-img product-tall" src="<?php the_field('brand_img_3'); ?>"/>
        </div>
    </div>
</section>
<section class="lc_col_2 animate__animated animate__zoomIn body-margin">
    <div class="cell-1"> 
        <img class="col2-img product-square" src="<?php the_field('brand_img_1'); ?>"/>
    </div>
    <div class="cell-2">
        <img class="col2-img" src="<?php the_field('brand_img_4'); ?>"/>
    </div>
</section>

<?php get_footer(); ?>
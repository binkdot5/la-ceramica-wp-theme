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
    <div class="cell-1">
        <div class="product-grid-margin inline-grid">
            <div class="brand-container">
                <a href="<?php echo site_url( '/products/artize', 'http' ); ?>">
                    <img class="col2-img product-tall" src="<?php the_field('lc-products-image-tall-1'); ?>"/>
                    <h2 class="brand-name">Artize</h2>
                </a>
            </div>
            <div class="brand-container">
                <a href="<?php echo site_url( '/products/artize', 'http' ); ?>">
                    <img class="col2-img product-tall" src="<?php the_field('lc-products-image-tall-1'); ?>"/>
                    <h2 class="brand-name">Kohler</h2>
                </a>
            </div>
            <div class="brand-container">
                <a href="<?php echo site_url( '/products/jaquar', 'http' ); ?>">
                    <img class="col2-img product-tall" src="<?php the_field('lc-products-image-tall-2'); ?>"/>
                    <h2 class="brand-name">Jaquar</h2>
                </a>
            </div>
        </div>
        <?php
            $page = get_post(); 
            $content = apply_filters( 'the_content', $page->post_content ); 
            echo $content;
        ?>
    </div>
    <div class="cell-2">
        <h2 class="hidden">Photo 5</h2>
        <div class="brand-container">
            <a href="<?php echo site_url( '/products/geberit', 'http' ); ?>">
                <img class="col2-img product-square" src="<?php the_field('lc-products-image-wide-2'); ?>"/>
                <h2 class="brand-name">Geberit</h2>
            </a>
        </div>
    </div>
    <div class="cell-3 product-grid-margin">
        <h2 class="hidden">Photo 7</h2>
        <pre></pre>
        <?php the_field('pr_copy_2'); ?>
    </div>
    <div class="cell-3">
        <div class="product-grid-margin inline-grid">
            <div class="brand-container">
                <a href="<?php echo site_url( '/products/paqos', 'http' ); ?>">
                    <img class="col2-img product-tall" src="<?php the_field('lc-products-image-tall-4'); ?>"/>
                    <h2 class="brand-name">Paqos</h2>
                </a>
            </div>
            <div class="brand-container">
                <a href="<?php echo site_url( '/products/johnson', 'http' ); ?>">
                    <img class="col2-img product-tall" src="<?php the_field('lc-products-image-tall-5'); ?>"/>
                    <h2 class="brand-name">H&R Johnson</h2>
                </a>
            </div>
        </div>
    </div>
    <div class="cell-3">
        <div class="product-grid-margin">
            <h3><?php the_field('pr_heading_4'); ?></h3>
            <p class="mb-2"><?php the_field('pr_copy_4'); ?></p>
        </div>
    </div>
    <div class="cell-3">
        <h2 class="hidden">Photo 6</h2>
        <div class="brand-container">
            <a href="<?php echo site_url( '/products/welspun-flooring', 'http' ); ?>">
                <img class="col2-img product-square" src="<?php the_field('lc-products-image-wide-3'); ?>"/>
                <h2 class="brand-name">Welspun Floorings</h2>
            </a>
        </div>
    </div>
</section>
<section class="lc_col_2 animate__animated animate__zoomIn body-margin">
    <h2 class="hidden">Column 2</h2>
    <div class="cell-1">
        <h2 class="hidden">Photo 3</h2>
        <div class="brand-container">
            <a href="<?php echo site_url( '/products/glocera', 'http' ); ?>">
                <img class="col2-img" src="<?php the_field('lc-products-image-wide-1'); ?>"/>
                <h2 class="brand-name">Oyster</h2>
            </a>
        </div>
    </div>
    <div class="cell-2 inline-grid">
        <h2 class="hidden">Photo 3 & 4</h2>
        <div class="brand-container">
            <a href="<?php echo site_url( '/products/oyster', 'http' ); ?>">
                <img class="col2-img product-square" src="<?php the_field('lc-products-image-tall-3'); ?>"/>
                <h2 class="brand-name">Oyster</h2>
            </a>
        </div>
        <div class="brand-container">
            <a href="<?php echo site_url( '/products/varmora', 'http' ); ?>">
                <img class="col2-img product-square" src="<?php the_field('lc-products-image-tall-6'); ?>"/>
                <h2 class="brand-name">Varmora</h2>
            </a>
        </div>
    </div>
    <div class="cell-3">
        <h3 class="no-mt"><?php the_field('pr_heading_3'); ?></h3>
        <p class="mb-2"><?php the_field('pr_copy_3'); ?></p>
    </div>
    <div class="cell-1 inline-grid">
        <div class="brand-container">
            <a href="<?php echo site_url( '/products/hindware-homes', 'http' ); ?>">
                <img class="col2-img" src="<?php the_field('lc-products-image-square-1'); ?>"/>
                <h2 class="brand-name">Hindware Homes</h2>
            </a>
        </div>
        <div class="brand-container">
            <a href="<?php echo site_url( '/products/viega', 'http' ); ?>">
                <img class="col2-img" src="<?php the_field('lc-products-image-square-2'); ?>"/>
                <h2 class="brand-name">Viega</h2>
            </a>
        </div>
    </div>
    <div class="cell-3">
        <div class="brand-container">
            <a href="<?php echo site_url( '/products/hindware-kitchen-ensemble', 'http' ); ?>">
                <img class="col2-img" src="<?php the_field('lc-products-image-wide-4'); ?>"/>
                <h2 class="brand-name">Hindware Kitchen Ensemble</h2>
            </a>
        </div>
    </div>
</section>
<?php
get_footer();
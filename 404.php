<?php
/**
 * The 404 page template
 *
 *
 * @package La Ceramica
 * 
 */

get_header();
?>
    
    <section class="lc_col_1 animate__animated animate__backInDown">
        <h2 class="hidden">Column 1</h2>
        <h2>Page not Found</h2>
        <h1>Error Code: 404</h1>
        <p>Looks like you've requested a page that does not exist or is under construction.</p>
        <h6>Try again later.</h6>
        <p>Head back to <a href="<?php echo site_url() ?>">Home</a></p>
    </section>
    <section class="lc_col_2 animate__animated animate__zoomIn body-margin">
    </section>


<?php
get_footer();
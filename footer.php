<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package La Ceramica
 * 
 */

?>

        <footer class="inline-flex cell-3 animate__animated animate__fadeIn">
            <h2 class="hidden">Footer</h2>
            <div class="information">
                <?php get_template_part( 'template-parts/footer/moreinfo-widget' ); ?>
            </div>
            <div>
                <?php get_template_part( 'template-parts/footer/subsidary-widget' ); ?>
            </div>
            <div class="social">
                <?php get_template_part( 'template-parts/footer/social-widget' ); ?>
            </div>
        </footer>

    </main>

<?php wp_footer(); ?>

</body>
</html>
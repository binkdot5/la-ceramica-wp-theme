<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
    
    <section class="lc_col_1 animate__animated animate__backInDown">
        <h2 class="hidden">Column 1</h2>
        <?php
            $page = get_post(); 
            $content = apply_filters( 'the_content', $page->post_content ); 
            echo $content;  
        ?>
    </section>
<?php
get_footer();
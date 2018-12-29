<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>


<?php // Disabled Code by Danish
//get_template_part( 'template-parts/footer/footer', 'widgets' );
//get_template_part( 'template-parts/footer/site', 'info' );
?>

<footer>
    <div class="container footer_container">
        <div class="row">
            <div class="col-md-12">
            
                <nav id="footer_menu" class="footer_menu">
                                        
                    <?php if ( has_nav_menu( 'bottom' ) ) : ?>
    
                    <?php
                    wp_nav_menu( array(
                    'theme_location' => 'bottom',
                    'menu_class'     => 'bottom-menu',
                    ));
                    ?>
                                                
                    <?php endif; ?>
                    
                </nav>
                                
            </div>                        
        </div>
    </div>                                                  
</footer>

        
<?php wp_footer(); ?>

</body>
</html>

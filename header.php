<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


<script>
jQuery(document).ready(function () {

        for(var i = 1; i <=6; i++ ) {
            var max = 0;
            jQuery('.tbl_row-' + i, this).each(function () {
            var h = jQuery(this).height(); 
            max = h > max ? h : max;
            });
            jQuery('.tbl_row-' + i, this).each(function () {
                jQuery(this).css("height", max);
            });
        }        
});
</script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
        <div class="container">
            <div class="row">
            
                <div class="col-md-3">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="/wp-content/uploads/2018/12/logo.jpg" class="logo"/></a>
                </div>
            
                <div class="col-md-9">
            		<?php if ( has_nav_menu( 'top' ) ) : ?>
            					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
            		<?php endif; ?>
	            </div>
             
             
             
             </div>
        </div>
    </header>

<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<div class="left-section col-md-8">

<h1 class="main_title"><?php the_title(); ?></h1>

<?php the_content(); ?>

</div>       

<?php require get_template_directory() . '/inc/custom-sidebar_template.php'; ?>
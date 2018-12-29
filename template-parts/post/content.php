<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<?php 
$featured_box_amazon_btn = get_post_meta($post->ID, '_amazon-product_link', true);
?>  
            
<div class="left-section col-md-8">

<h1 class="main_title"><?php the_title(); ?></h1>

<?php
$box_value = get_post_meta($post->ID, '_box_number', true);
if($box_value == 'For Box 1' || $box_value == 'For Box 2'){
    ?>
<div class="featured-product_box_main">

    <div class="featured-product_header">
        <span class="featured-product_header_text">Header Text Here</span>
    </div>
        
    <div class="featured-product_box_left">
        <a class="" href="" target="_blank" rel="noopener noreferrer">
            <!--<img class="featured-product_box_image" title="" src="" alt="" />-->
            <?php the_post_thumbnail(); ?>
        </a>
    </div>
        
    <div class="featured-product_box_right">
        <span class="featured-product_box_title"><?php the_title(); ?></span>
        <span class="featured-product_box_text">
            <?php the_excerpt(); ?>
        </span>
        <div class="product-box_btn_wrapper">                
        <a class="featured-product_box_btn" href="<?php echo $featured_box_amazon_btn; ?>" target="_blank" rel="noopener noreferrer">Button Text</a>
        <img class="product-box_btn_amazon_img" src="/wp-content/uploads/2018/12/amazon_gray_logo.png" />
        </div>        
    </div>
    
</div>

<div style="clear: both;"></div>
    <?php
}
?>
<h2 class="main_title">Produktbeschreibung: <?php the_title(); ?></h2>
<?php the_content(); ?>

</div>

<?php require get_template_directory() . '/inc/custom-sidebar_template.php'; ?>
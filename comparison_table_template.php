<?php
/*
Template Name: Comparison Table Template
*/

get_header(); ?>

<div id="main-container" class="container">
    <main id="main" class="site-main row" role="main">
    
    <div class="comparison-table_wrapper">
    
    <?php
        $args = array( 'post_type' => 'comp_table', 'posts_per_page' => 10, 'order' => 'asc' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    
    <?php
        $i = $i+1;
        $j = 1;
     ?>
    
    <div class="table_column">        
        <div class="comparison-table_product_img tbl_col-<?php echo $i; ?> tbl_row-<?php echo $j; $j++; ?>"><?php the_post_thumbnail(); ?></div>
        <div class="comparison-table_product_title tbl_col-<?php echo $i; ?> tbl_row-<?php echo $j; $j++; ?>"><?php the_title(); ?></div>
        <div class="comparison-table_amazon_btn tbl_col-<?php echo $i; ?> tbl_row-<?php echo $j; $j++; ?>">Button Text</div>
        <div class="comparison-table_conclusion tbl_col-<?php echo $i; ?> tbl_row-<?php echo $j; $j++; ?>"><?php the_content(); ?></div>
        <div class="comparison-table_pros tbl_col-<?php echo $i; ?> tbl_row-<?php echo $j; $j++; ?>"><?php the_content(); ?></div>
        <div class="comparison-table_cons tbl_col-<?php echo $i; ?> tbl_row-<?php echo $j; $j++; ?>"><?php the_content(); ?></div>                                
    </div>
        
    <?php
        endwhile;
    ?>
    
    </div>
        
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();

<!-- Extra work Below -->

<!-- Extra work Above -->
<?php
//Function to decide if you want "Details" buttons or "Amazon" buttons in sidebar
$amazon_or_details = 'details'; //change this value to amazon or details
?>

<div class="right-section col-md-4">
        
      
        
        <div class="sidebar_box1">
            
            <h3 class="sidebar_box_heading">Recommended Product</h3>
            
            <?php
            $args = array( 
            'post_type' => '', 
            'posts_per_page' => 11,
            'meta_key'   => '_box_number',
            'meta_query' => array(
                array(
                'key'     => '_box_number',
                'value'   => array('For Box 1'),
                'compare' => 'IN',
                ),
              ),
            );
            
            $loop = new WP_Query( $args );
            if($loop->have_posts()) {
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            
            <?php
            $link_or_detail_btn = get_post_meta($post->ID, '_amazon-product_link', true);
            if($amazon_or_details == 'amazon'){
            $product_btn_link = $link_or_detail_btn;
            $product_btn_text = 'Amazon';
            } else if($amazon_or_details == 'details'){
            $product_btn_link = get_permalink();
            $product_btn_text = 'Details';
            }
            ?>
                                           
            <div class="sidebar_box_left">
                <div class="sidebar_img_wrap"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
            </div>
            
            <div class="sidebar_box_right">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <a class="sidebar_details_btn" href="<?php echo $product_btn_link; ?>"><?php echo $product_btn_text ?></a>
            </div>
            
            <?php
            endwhile;
            wp_reset_query();
            } else{
                ?>
                <h3>Nothing to show.</h3>
                <?php
            }
            ?>
            
        </div>

<!-- Box 1 end here -->      
       
        <div class="sidebar_box2">
            
            <h3 class="sidebar_box_heading">Price Value Product</h3>
            
            <?php
            $args = array( 
            'post_type' => '', 
            'posts_per_page' => 11,
            'meta_key'   => '_box_number',
            'meta_query' => array(
                array(
                'key'     => '_box_number',
                'value'   => array('For Box 2'),
                'compare' => 'IN',
                ),
              ),
            );
            
            $loop = new WP_Query( $args );
            if($loop->have_posts()) {
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            
            
            <?php
            $link_or_detail_btn = get_post_meta($post->ID, '_amazon-product_link', true);
            if($amazon_or_details == 'amazon'){
            $product_btn_link = $link_or_detail_btn;
            $product_btn_text = 'Amazon';
            } else if($amazon_or_details == 'details'){
            $product_btn_link = get_permalink();
            $product_btn_text = 'Details';
            }
            ?>
            
            
            <div class="sidebar_box_left">
                <div class="sidebar_img_wrap"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
            </div>
            
            <div class="sidebar_box_right">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <a class="sidebar_details_btn" href="<?php echo $product_btn_link; ?>"><?php echo $product_btn_text ?></a>
            </div>
            
            <?php
            endwhile;
            wp_reset_query();
            } else{
                ?>
                <h3>Nothing to show.</h3>
                <?php
            }
            ?>
            
        </div>
        
<!-- Box 2 end here -->

        <div class="sidebar_box3">
            
            <h3 class="sidebar_box_heading">Related Products</h3>
            
            <?php
            $args = array( 
            'post_type' => '', 
            'posts_per_page' => 11,
            'meta_key'   => '_box_number',
            'orderby'   => 'post_date',
            'meta_query' => array(
                array(
                'key'     => '_box_number',
                'value'   => array('For Box 3'),
                'compare' => 'IN',
                ),
              ),
            );
            
            $loop = new WP_Query( $args );
            if($loop->have_posts()) {
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            
            
            <?php
            $link_or_detail_btn = get_post_meta($post->ID, '_amazon-product_link', true);
            if($amazon_or_details == 'amazon'){
            $product_btn_link = $link_or_detail_btn;
            $product_btn_text = 'Amazon';
            } else if($amazon_or_details == 'details'){
            $product_btn_link = get_permalink();
            $product_btn_text = 'Details';
            }
            ?>
            
            
            <div class="sidebar-products_wrapper">
            <div class="sidebar_box_left">
                <div class="sidebar_img_wrap"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
            </div>
            
            <div class="sidebar_box_right">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <a class="sidebar_details_btn" href="<?php echo $product_btn_link; ?>"><?php echo $product_btn_text ?></a>
            </div>
            </div>
            <!--<div style="clear: both;"></div>-->
            
            <?php
            endwhile;
            wp_reset_query();
            } else{
                ?>
                <h3>Nothing to show.</h3>
                <?php
            }
            ?>
            
        </div>
        
<!-- Box 3 end here -->        

</div>




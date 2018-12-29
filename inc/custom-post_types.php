<?php
//Custom Post Types For 2 Featured Boxes
function create_post_type() {
  register_post_type( 'comp_table',
    array(
      'labels' => array(
        'name' => __( 'Comparison Table Products' ),        
        'singular_name' => __( 'Product' ),
        'menu_name' => __('Comparison Table'),
        'all_items' => __('All Products'),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'thumbnail', 'custom-fields', 'editor' ),
    )
  );
  
  register_post_type( 'ft_product_2',
    array(
      'labels' => array(
        'name' => __( 'Featured Product 2' ),        
        'singular_name' => __( 'Product' ),
        'menu_name' => __('Second Product'),
        'all_items' => __('All Products'),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'thumbnail', 'custom-fields', 'editor' ),
    )
  );
  
}
add_action( 'init', 'create_post_type' );
//Custom Post Types For 2 Featured Boxes End
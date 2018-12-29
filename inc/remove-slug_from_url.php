<?php
//Removing Slug From Custom Post Type Featured Product 1
add_filter(
'post_type_link',
'custom_post_type_link',
10,
3
);

function custom_post_type_link($permalink, $post, $leavename) {
if (!gettype($post) == 'post') {
return $permalink;
}
switch ($post->post_type) {
case 'ft_product_1':
$permalink = get_home_url() . '/' . $post->post_name . '/';
break;
}

return $permalink;
}
//
add_action(
'pre_get_posts',
'custom_pre_get_posts'
);

function custom_pre_get_posts($query) {
global $wpdb;

if(!$query->is_main_query()) {
return;
}

$post_name = $query->get('name');

$post_type = $wpdb->get_var(
$wpdb->prepare(
'SELECT post_type FROM ' . $wpdb->posts . ' WHERE post_name = %s LIMIT 1',
$post_name
)
);

switch($post_type) {
case 'ft_product_1':
$query->set('ft_product_1', $post_name);
$query->set('post_type', $post_type);
$query->is_single = true;
$query->is_page = false;
break;
}

return $query;
}
//Removing Slug From Custom Post Type Featured Product 1 End



//Removing Slug From Custom Post Type Featured Product 2
add_filter(
'post_type_link',
'custom_post_type_link2',
10,
3
);

function custom_post_type_link2($permalink, $post, $leavename) {
if (!gettype($post) == 'post') {
return $permalink;
}
switch ($post->post_type) {
case 'ft_product_2':
$permalink = get_home_url() . '/' . $post->post_name . '/';
break;
}

return $permalink;
}
//
add_action(
'pre_get_posts',
'custom_pre_get_posts2'
);

function custom_pre_get_posts2($query) {
global $wpdb;

if(!$query->is_main_query()) {
return;
}

$post_name = $query->get('name');

$post_type = $wpdb->get_var(
$wpdb->prepare(
'SELECT post_type FROM ' . $wpdb->posts . ' WHERE post_name = %s LIMIT 1',
$post_name
)
);

switch($post_type) {
case 'ft_product_2':
$query->set('ft_product_2', $post_name);
$query->set('post_type', $post_type);
$query->is_single = true;
$query->is_page = false;
break;
}

return $query;
}
//Removing Slug From Custom Post Type Featured Product 2 End
<?php

function wpizza_script_enqueue() {
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/wpizza.css');
}

add_action( 'wp_enqueue_scripts', 'wpizza_script_enqueue');


function pizza_custom_post_type (){
	
	$labels = array(
		'name' => 'Pizzas',
		'singular_name' => 'Pizza',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Pizza',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'revisions',
		),
		'menu_position' => 5,
    'menu_icon' => '',
		'exclude_from_search' => false
	);
	register_post_type('pizza',$args);
}
add_action('init','pizza_custom_post_type');


function awesome_custom_taxonomies() {
	
	$labels = array(
		'name' => 'Pizza Types',
		'singular_name' => 'Pizza Type',
		'search_items' => 'Search Pizza Types',
		'all_items' => 'All Pizza Types',
		'parent_item' => 'Parent Pizza Type',
		'parent_item_colon' => 'Parent Pizza Type:',
		'edit_item' => 'Edit Pizza Type',
		'update_item' => 'Update Pizza Type',
		'add_new_item' => 'Add New Pizza Type',
		'new_item_name' => 'New Pizza Type Name',
		'menu_name' => 'Pizza Types'
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'pizza-types' )
	);
	
	register_taxonomy('pizza-types', array('pizza'), $args);
}

add_action( 'init' , 'awesome_custom_taxonomies' );
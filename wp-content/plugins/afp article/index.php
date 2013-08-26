<?php
/*
Plugin Name: Age Friendly Article
Version: 1.0
Description: Creates custom post type Articles 
Author: Chris, Jameson, Sarah
License: GNU General Public License v2 or later
*/


function afp_custom_post_article() {
	$labels = array(
		'name'               => _x( 'Articles', 'post type general name' ),
		'singular_name'      => _x( 'Articles', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Article' ),
		'add_new_item'       => __( 'Add New Article' ),
		'edit_item'          => __( 'Edit Article' ),
		'new_item'           => __( 'New Article' ),
		'all_items'          => __( 'All Articles' ),
		'view_item'          => __( 'View Articles' ),
		'search_items'       => __( 'Search Articles' ),
		'not_found'          => __( 'No articles found' ),
		'not_found_in_trash' => __( 'No articles found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Articles'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our Articles and articles specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor'),
		'has_archive'   => true,
		'taxonomies' => array('category')
	);
	register_post_type( 'article', $args );	
}
add_action( 'init', 'afp_custom_post_article' );
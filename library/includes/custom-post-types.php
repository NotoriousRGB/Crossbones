<?php

// Add new post type for Recipes
add_action('init', 'slides_init');
function slides_init() 
{
	$slide_labels = array(
		'name' => _x('Slides', 'post type general name'),
		'singular_name' => _x('Slide', 'post type singular name'),
		'all_items' => __('All Slides'),
		'add_new' => _x('Add New Slide', 'slide'),
		'add_new_item' => __('Add New Slide'),
		'edit_item' => __('Edit Slide'),
		'new_item' => __('New Slide'),
		'view_item' => __('View Slide'),
		'search_items' => __('Search In Slides'),
		'not_found' =>  __('No Slides Found'),
		'not_found_in_trash' => __('No Slides Found In Trash'), 
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $slide_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','thumbnail','custom-fields'),
		'has_archive' => 'slides'
	); 
	register_post_type('slides',$args);
}

// Add new post type for Photos
add_action('init', 'portfolio_init');
function portfolio_init() 
{
	$portfolio_labels = array(
		'name' => _x('Portfolio', 'post type general name'),
		'singular_name' => _x('Portfolio', 'post type singular name'),
		'all_items' => __('All Portfolio'),
		'add_new' => _x('Add New Item', 'photos'),
		'add_new_item' => __('Add New Item'),
		'edit_item' => __('Edit Portfolio Item'),
		'new_item' => __('New Portfolio Item'),
		'view_item' => __('View Portfolio Item'),
		'search_items' => __('Search In Portfolio'),
		'not_found' =>  __('No Portfolio Items Found'),
		'not_found_in_trash' => __('No Portfolio Items Found In Trash'), 
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $portfolio_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','thumbnail'),
		'has_archive' => 'portfolio'
	); 
	register_post_type('portfolio',$args);
}

// Add new post type for Videos
add_action('init', 'testimonial_init');
function testimonial_init() 
{
	$testimonial_labels = array(
		'name' => _x('Testimonials', 'post type general name'),
		'singular_name' => _x('Testimonial', 'post type singular name'),
		'all_items' => __('All Testimonials'),
		'add_new' => _x('Add New Testimonial', 'videos'),
		'add_new_item' => __('Add New Testimonials'),
		'edit_item' => __('Edit Testimonial'),
		'new_item' => __('New Testimonial'),
		'view_item' => __('View Testimonial'),
		'search_items' => __('Search In Testimonials'),
		'not_found' =>  __('No Testimonials Found'),
		'not_found_in_trash' => __('No Testimonials Found In Trash'), 
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $testimonial_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
		'has_archive' => 'testimonials'
	); 
	register_post_type('testimonials',$args);
}
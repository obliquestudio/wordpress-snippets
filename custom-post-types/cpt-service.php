<?php
/**
 * Service Custom Post Type
 *
 * @author O B L / Q U E
 * @package WordPress
 * @subpackage MBO_Framework
 * @since MBO Framework 1.0.0
 */

/**
 * Register the "Service" custom post type
 * See http://codex.wordpress.org/Function_Reference/register_post_type
 */
function cpt_service() {

	register_post_type( 'service',
		array(
			'labels' => array(
				'name'					=> __( 'Services', 'mboframework' ),
				'singular_name'			=> __( 'Service', 'mboframework' ),
				'all_items'				=> __( 'All Services', 'mboframework' ),
				'add_new'				=> __( 'Add New', 'mboframework' ),
				'add_new_item'			=> __( 'Add New Service', 'mboframework' ),
				'edit'					=> __( 'Edit', 'mboframework' ),
				'edit_item'				=> __( 'Edit Service', 'mboframework' ),
				'new_item'				=> __( 'Add New Service', 'mboframework' ),
				'view_item'				=> __( 'View Service', 'mboframework' ),
				'search_items'			=> __( 'Search Services', 'mboframework' ),
				'not_found'				=> __( 'No services found', 'mboframework' ),
				'not_found_in_trash'	=> __( 'No services found in trash', 'mboframework' ),
				'parent_item_colon' 	=> ''
			),
			'description'			=> __( 'This is the service post type', 'mboframework' ),
			'public'				=> true,
			'publicly_queryable'	=> true,
			'exclude_from_search'	=> false,
			'show_ui'				=> true,
			'query_var'				=> true,
			'menu_position'			=> 8,
			'menu_icon'				=> 'dashicons-screenoptions', // use dashicons for menu icon: https://developer.wordpress.org/resource/dashicons/
			'rewrite'				=> array( 'slug' => 'service', 'with_front' => false ),
			'has_archive'			=> false,
			'capability_type'		=> 'post',
			'hierarchical'			=> false,
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
				'excerpt',
				'trackbacks',
				'custom-fields',
				'comments',
				'revisions',
				'sticky'
			)
		)
	);

}
add_action( 'init', 'cpt_service');


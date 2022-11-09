<?php 

/**
 * Register a new CPT called Product
 *
 * @return void
 */
add_action( 'init', 'register_products_post_type' );
function register_products_post_type() { 
	$labels = array(
		'name'               => __( 'Products', 'text-domain' ),
		'singular_name'      => __( 'Product', 'text-domain' ),
		'add_new'            => __( 'Add New', 'text-domain' ),
		'add_new_item'       => __( 'Add New Product', 'text-domain' ),
		'edit_item'          => __( 'Edit Product', 'text-domain' ),
		'new_item'           => __( 'New Product', 'text-domain' ),
		'view_item'          => __( 'View Product', 'text-domain' ),
		'search_items'       => __( 'Search Products', 'text-domain' ),
		'not_found'          => __( 'No Product Found', 'text-domain' ),
		'not_found_in_trash' => __( 'No Product found in Trash', 'text-domain' ),
	);
	$args = array(
		'label'               => __( 'Products', 'text-domain' ),
		'labels'              => $labels,
		'description'         => __( 'Products you have worked on', 'text-domain'),
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => false,
		'public'              => true,
		'publicly_queryable'  => true,
		'can_export'          => true,
		'show_in_rest'        => true,
		'exclude_from_search' => false,
		'hierarchical'        => false,
		'menu_icon'           => 'dashicons-groups',
		'capability_type'     => 'post',
		'taxonomies'          => array( '' ),
		'rewrite'             => array( 'slug' => 'products' ),
		'supports'            => array( 
			'title',
			'custom-fields',
			'thumbnail',
			'editor'
		),

	);
	register_post_type( 'products', $args );
}

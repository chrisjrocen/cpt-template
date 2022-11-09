<?php 

/**
 * Register a new CPT called Product
 *
 * @return void
 */
add_action( 'init', 'register_products_post_type' );
function register_products_post_type() { 
	$labels = array(
		'name'               => __( 'Products', 'Post type general name', 'text-domain' ),
		'singular_name'      => __( 'Product', 'Post type singular name', 'text-domain' ),
		'add_new'            => __( 'Add New', 'text-domain' ),
		'add_new_item'       => __( 'Add New Product', 'text-domain' ),
		'edit_item'          => __( 'Edit Product', 'text-domain' ),
		'new_item'           => __( 'New Product', 'text-domain' ),
		'view_item'          => __( 'View Product', 'text-domain' ),
		'search_items'       => __( 'Search Products', 'text-domain' ),
		'not_found'          => __( 'No Product Found', 'text-domain' ),
		'not_found_in_trash' => __( 'No Product found in Trash', 'text-domain' ),
		'menu_name'             => __( 'Products', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => __( 'Product', 'Add New on Toolbar', 'textdomain' ),
		'all_items'             => __( 'All Products', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Products:', 'textdomain' ),
		//Most of the options below are optional.Use them only when you need them
		'featured_image'        => __( 'Product Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => __( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => __( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => __( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => __( 'Product archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => __( 'Insert into product', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this product', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => __( 'Filter products list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => __( 'Products list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => __( 'Products list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
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
	register_post_type( 'cpt_products', $args );
}

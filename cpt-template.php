<?php 

/**
 * Register a new CPT called Product
 *
 * @return void
 */
add_action('init', 'register_cpts');

function register_cpts()
{
    $custom_post_types = array(
        'jobs' => [
            'name'                  => _x('Jobs', 'Post type general name', 'blocksy'),
            'singular_name'         => _x('job', 'Post type singular name', 'blocksy'),
            'description'           => _x('Description', 'Post type singular name', 'blocksy'),
            'taxonomies'            => array('location', 'job-category'),
            'supports'              => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
            'hierarchical'          => false,
            'capability_type'       => 'post',
            'has_archive'           => true,
        ]
    );

    $custom_taxonomies = array(
        'location' => [
            'name'              => _x('Locations', 'taxonomy general name', 'blocksy'),
            'singular_name'     => _x('location', 'taxonomy singular name', 'blocksy'),
            'search_items'      => __('Search Locations', 'blocksy'),
            'all_items'         => __('All Locations', 'blocksy'),
            'edit_item'         => __('Edit Location', 'blocksy'),
            'update_item'       => __('Update Location', 'blocksy'),
            'add_new_item'      => __('Add New Location', 'blocksy'),
            'new_item_name'     => __('New Location Name', 'blocksy'),
            'object_type'       => array('jobs'),
            'hierarchical'      => true
        ],
        'job-category' => [
            'name'              => _x('Categories', 'taxonomy general name', 'blocksy'),
            'singular_name'     => _x('job-category', 'taxonomy singular name', 'blocksy'),
            'plural_name'       => _x('categories', 'taxonomy plural name', 'blocksy'),
            'search_items'      => __('Search Categories', 'blocksy'),
            'all_items'         => __('All Categories', 'blocksy'),
            'edit_item'         => __('Edit Category', 'blocksy'),
            'update_item'       => __('Update Category', 'blocksy'),
            'add_new_item'      => __('Add New Category', 'blocksy'),
            'new_item_name'     => __('New Category Name', 'blocksy'),
            'object_type'       => array('jobs'),
            'hierarchical'      => true
        ],
        'company' => [
            'name'              => _x('Companies', 'taxonomy general name', 'blocksy'),
            'singular_name'     => _x('company', 'taxonomy singular name', 'blocksy'),
            'plural_name'       => _x('companies', 'taxonomy plural name', 'blocksy'),
            'search_items'      => __('Search Companies', 'blocksy'),
            'all_items'         => __('All Companies', 'blocksy'),
            'edit_item'         => __('Edit Company', 'blocksy'),
            'update_item'       => __('Update Company', 'blocksy'),
            'add_new_item'      => __('Add New Company', 'blocksy'),
            'new_item_name'     => __('New Company Name', 'blocksy'),
            'object_type'       => array('jobs'),
            'hierarchical'      => true
        ]
    );

    foreach ($custom_taxonomies as $custom_taxonomy) {
        $args = array(
            'labels'             => $custom_taxonomy,
            'hierarchical'       => $custom_taxonomy['hierarchical']
        );
        register_taxonomy($custom_taxonomy['singular_name'], $custom_taxonomy['object_type'], $args);
    }

    foreach ($custom_post_types as $custom_post_type) {
        $args = array(
            'labels'             => $custom_post_type,
            'description'        => $custom_post_type['description'],
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => $custom_post_type['singular_name']),
            'capability_type'    => $custom_post_type['capability_type'],
            'has_archive'        => $custom_post_type['has_archive'],
            'hierarchical'       => $custom_post_type['hierarchical'],
            'supports'           => $custom_post_type['supports'],
            'taxonomies'         => $custom_post_type['taxonomies'],
            'show_in_rest'       => true
        );
        register_post_type($custom_post_type['name'], $args);
    }
}

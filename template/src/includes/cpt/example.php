<?php

namespace Matise\CPT;

class YOUR_CPT_NAME {

	/**
	 * Constructor, add actions
	 */
	public function __construct() {
		add_action('init', array($this, 'cpt'), 0 ); //Init CPT
		add_action('init', array($this, 'taxonomy'), 0 ); //Init taxonomy
		add_action('admin_init', array($this, 'admin_settings')); //Init archive page
	}

	/**
	 * Add CPT for YOUR_CPT_NAME
	 */
	public function cpt() {
		$labels = array(
			'name'                  => _x( 'YOUR_CPT_NAME', 'Post Type General Name' ),
			'singular_name'         => _x( 'YOUR_CPT_NAME', 'Post Type Singular Name' ),
			'menu_name'             => __( 'YOUR_CPT_NAME' ),
			'name_admin_bar'        => __( 'YOUR_CPT_NAME' ),
			'archives'              => __( 'Archives' ),
			'attributes'            => __( 'Attributes' ),
			'parent_item_colon'     => __( 'Parent:' ),
			'all_items'             => __( 'All' ),
			'add_new_item'          => __( 'Add new' ),
			'add_new'               => __( 'Add new' ),
			'new_item'              => __( 'New' ),
			'edit_item'             => __( 'Edit' ),
			'update_item'           => __( 'Update' ),
			'view_item'             => __( 'View' ),
			'view_items'            => __( 'View' ),
			'search_items'          => __( 'Search' ),
			'not_found'             => __( 'Not found' ),
			'not_found_in_trash'    => __( 'Not found in Trash' ),
			'featured_image'        => __( 'Featured Image' ),
			'set_featured_image'    => __( 'Set featured image' ),
			'remove_featured_image' => __( 'Remove featured image' ),
			'use_featured_image'    => __( 'Use as featured image' ),
			'insert_into_item'      => __( 'Insert into item' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item' ),
			'items_list'            => __( 'Items list' ),
			'items_list_navigation' => __( 'Items list navigation' ),
			'filter_items_list'     => __( 'Filter items list' ),
		);
		$args = array(
			'label'                 => __( 'YOUR_CPT_NAME' ),
			'description'           => __( 'Description' ),
			'labels'                => $labels,
			'supports'              => array('title', 'excerpt', 'thumbnail'),
			'taxonomies'            => array(),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 6,
			'menu_icon'             => 'dashicons-clipboard',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => true,
			'rest_base'             => 'YOUR_CPT_NAME',
			'rewrite' => array('slug' => 'YOUR_CPT_NAME','with_front' => false),
		);
		register_post_type( 'YOUR_CPT_NAME', $args );
	}
	
	/**
	 * Add taxonomy
	 */
	public function taxonomy() {
		$labels = array(
			'name' => _x( 'YOUR_CPT_TAXONOMY_NAME', 'taxonomy general name' ),
			'singular_name' => _x( 'YOUR_CPT_TAXONOMY_NAME', 'taxonomy singular name' ),
			'search_items' =>	__( 'Search' ),
			'all_items' => __( 'All' ),
			'parent_item' => __( 'Parent' ),
			'parent_item_colon' => __( 'Parent:' ),
			'edit_item' => __( 'Edit' ),
			'update_item' => __( 'Update' ),
			'add_new_item' => __( 'Add New' ),
			'new_item_name' => __( 'New name' ),
			'menu_name' => __( 'YOUR_CPT_TAXONOMY_NAME' ),
		);

		register_taxonomy('YOUR_CPT_TAXONOMY_NAME', array('YOUR_CPT_NAME'), array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'public'	=> false,
			'show_in_rest' => false,
			'show_admin_column' => true,
			'query_var' => true
		));
		register_taxonomy_for_object_type('YOUR_CPT_TAXONOMY_NAME', 'YOUR_CPT_NAME');
	}

	/**
	 * Add Admin settings for YOUR_CPT_NAME
	 */
	public function admin_settings() {
		// Save settings for events and YOUR_CPT_NAME
		$id = 'page_for_' . 'YOUR_CPT_NAME';
		add_filter( 'whitelist_options', function ( $options ) {
				$options['reading'][] = $id;
				return $options;
		});

		//display posts names to pages in WP
		add_filter( 'display_post_states', function ( $states, $post ) {
			$id = 'page_for_' . 'YOUR_CPT_NAME';
			if ( intval( get_option( $id ) ) === $post->ID ) {
				$states[$id] = __( 'YOUR_CPT_NAME' . ': archive' );
			}
			return $states;
		}, 10, 2 );


		$id = 'page_for_' . 'YOUR_CPT_NAME';
		add_settings_field( $id, __( 'YOUR_CPT_NAME' . ': archive' ), array($this, 'settings_field'), 'reading', 'default', array(
			'label_for'	=> 'field-' . $id, // A unique ID for the field. Optional.
			'class'	 		=> 'row-' . $id,	 // A unique class for the TR. Optional.
			'id'				=> $id //Send the page name
		));
	}

	/**
	 * Add wp dropdown for admin settings
	 */
	public function settings_field( $args ) {
		$id = $args['id'];
		wp_dropdown_pages(array(
			'name'	=> $id,
			'show_option_none'	=> '&mdash; Select &mdash;',
			'option_none_value' => '0',
			'selected'	=> get_option($id),
		));
	}
}
//Init function when loaded
new YOUR_CPT_NAME();

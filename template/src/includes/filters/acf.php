<?php
namespace Matise\Filters;

class Matise_ACF {
	public function __construct() {
		//filter for acf update and format values
		add_action('acf/init', array($this, 'my_acf_init'));
		add_filter('allowed_block_types', array($this, 'allowed_blocks_types'), 10, 2 );
	}
	public function my_acf_init() {
		// check function exists
		if( function_exists('acf_register_block_type') ) {
			// Homepage header
			acf_register_block_type(
				array(
					'name'								=> 'homepage-header',
					'title'								=> __('Homepage header'),
					'description'					=> __('Homepage header with only one image'),
					'render_callback'			=> array($this, 'render_callback'),
					'category'						=> 'header', // Category defines where the block is set in the gutenberg editor block picker.
					'icon'								=> svg('header'), // You can use dashicons or custom svg element
					'align'								=> 'full',
					'enqueue_style' 			=> get_template_directory_uri() . '/assets/homepage-header.css',
					'enqueue_scripts' 		=> get_template_directory_uri() . '/assets/homepage-header.js',
					'keywords'						=> array( 'header', 'regular'),
					'supports' 						=> array(
						'align' 						=> array('full') // customize alignment toolbar, here only 'full' is available
					)
				)
			);
		}
	}

	/**
	 * Callback function of acf_register_block
	 * Refers to sections folder
	 */
	public function render_callback($block) {
		$slug = str_replace('acf/', '', $block['name']);
		// include a template part from within the "section" folder
		if (file_exists( get_theme_file_path("/includes/components/sections/{$slug}.php"))) {
			include( get_theme_file_path("/includes/components/sections/{$slug}.php") );
		}
	}

	/**
	 * Filter to 
	 */
	public function allowed_blocks_types($allowed_blocks, $post) {
		$homepage_id = get_option('page_on_front');
		$allowed = array(
			// 'acf/homepage-header'
		);
		return $allowed;
	}
}
new Matise_ACF();
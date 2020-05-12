<?php
namespace Matise\Settings;

class Matise_ACF {
	/**
	 * Constructor to init acf
	 */
	public function __construct() {
		//filter for acf update and format values
		add_action('acf/init', array($this, 'register_block_types'));
		add_filter('allowed_block_types', array($this, 'allowed_blocks_types'), 10, 2 );
	}

	/**
	 * Register block types
	 */
	public function register_block_types() {
		// check function exists
		if (function_exists('acf_register_block_type')) {
			// Homepage header
			// acf_register_block_type(
			// 	array(
			// 		'name'								=> 'homepage-header',
			// 		'title'								=> __('Homepage header'),
			// 		'description'					=> __('Homepage header with only one image'),
			// 		'render_callback'			=> array($this, 'render_callback'),
			// 		'category'						=> 'header', // Category defines where the block is set in the gutenberg editor block picker.
			// 		// 'icon'								=> svg('header'), // You can use dashicons or custom svg element
			// 		'align'								=> 'full',
			// 		'enqueue_assets'			=> function() {
			// 			wp_enqueue_style('homepage-header-css', get_theme_file_uri( '/assets/homepage-header.css' ), array(), date("is"), false);
			// 			wp_enqueue_script('homepage-header-js', get_theme_file_uri( '/assets/homepage-header.js' ), array(), date("is"), true );
			// 		},
			// 		'keywords'						=> array( 'header', 'regular'),
			// 		'supports' 						=> array(
			// 			'align' 						=> false,
			// 			'mode'							=> false
			// 		),
			// 		'mode' 								=> 'edit'
			// 	)
			// );
		}
	}

	/**
	 * Callback function of acf_register_block
	 * Refers to sections folder
	 * Output is defined in WP Core, otherwise it is looking for the file
	 */
	public function render_callback($block) {
		global $output;
		if ($output === 'json') {
			echo json_encode(get_fields());
			return;
		} else {
			$slug = str_replace('acf/', '', $block['name']);
			// include a template part from within the "acf-blocks" folder
			if (file_exists(get_theme_file_path("/includes/components/acf-blocks/{$slug}/{$slug}.php"))) {
				include(get_theme_file_path("/includes/components/acf-blocks/{$slug}/{$slug}.php") );
			} else {
				echo json_encode(get_fields());
				return;
			}
		}
	}

	/**
	 * Filter blocks on pages
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
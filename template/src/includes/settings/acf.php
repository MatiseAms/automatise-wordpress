<?php
namespace Automatise\Settings;

class Automatise_ACF
{
	private $blocks = array(
		// 'page-header' => array(
		// 	'title' => 'Page header',
		// 	'category' => 'header',
		// 	'keywords' => array('header')
		// ),
	);
	/**
	* Constructor to init acf
	*/
	public function __construct()
	{
		//filter for acf update and format values
		add_action('acf/init', array($this, 'register_block_types'));
		add_filter('allowed_block_types_all', array($this, 'allowed_blocks_types'), 10, 2);
		add_filter('block_categories_all', array($this, 'custom_gb_categories'), 10, 2);
	}
	public function custom_gb_categories($categories, $post)
	{
		return array_merge(
			$categories,
			array(
				array(
					'slug' => 'header',
					'title' => 'Header',
				),
				array(
					'slug' => 'content',
					'title' => 'Content',
				)
			)
		);
	}
	/**
	* Register block types
	*/
	public function register_block_types()
	{
		// check function exists
		if (function_exists('acf_register_block_type')) {
			if ($this->blocks) {
				foreach ($this->blocks as $key => $block) {
					acf_register_block_type(
						array(
							'name'								=> $key,
							'title'								=> $block['title'],
							'render_callback'			=> array($this, 'render_callback'),
							'category'						=> $block['category'], // Category defines where the block is set in the gutenberg editor block picker.
							'icon'								=> svg('acf/'.$key), // You can use dashicons or custom svg element
							'align'								=> 'full',
							'keywords'						=> $block['keywords'],
							'supports' 						=> array(
								'align' 						=> false,
								'mode'							=> false
							),
							'mode' 								=> 'edit'
						)
					);
				}
			}
		}
	}

	/**
	* Callback function of acf_register_block
	* Refers to sections folder
	* Output is defined in WP Core, otherwise it is looking for the file
	*/
	public function render_callback($block)
	{
		global $output;
		if ($output === 'json') {
			echo json_encode(get_fields());
			return;
		} else {
			$slug = str_replace('acf/', '', $block['name']);
			// include a template part from within the "acf-blocks" folder
			if (file_exists(get_theme_file_path("/includes/components/acf-blocks/{$slug}/index.php"))) {
				include(get_theme_file_path("/includes/components/acf-blocks/{$slug}/index.php"));
			} else {
				echo json_encode(get_fields());
				return;
			}
		}
	}

	/**
	* Filter blocks on pages
	*/
	public function allowed_blocks_types($allowed_blocks, $post)
	{
		$homepage_id = get_option('page_on_front');
		$allowed = array();
		if ($this->blocks) {
			foreach ($this->blocks as $key => $block) {
				$allowed[] = 'acf/'.$key;
			}
		}
		return $allowed;
	}
}
new Automatise_ACF();

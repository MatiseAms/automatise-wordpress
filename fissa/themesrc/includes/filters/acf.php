<?php
namespace Matise\Filters;

/**
 * Filters can be used on ACF fields so we dont have to add filters in the API anymore
 * More information: https://www.advancedcustomfields.com/resources/
 */
class Matise_ACF {
	public function __construct() {
		//filter for acf update and format values
		add_filter('acf/update_value/type=link', array($this, 'change_acf_url'), 10, 1);
		add_filter('acf/format_value/type=link', array($this, 'change_acf_url'), 10, 1);
		add_filter('acf/format_value/type=page_link', array($this, 'change_acf_url_post_link'), 10, 1);
		add_filter('acf/fields/flexible_content/layout_title', array($this, 'change_reusable_block_title'), 10, 4 );
		add_filter('acf/fields/post_object/query', array($this, 'filter_query_objects'), 10, 2);
	}

	/** 
	 * Change title on reusable block
	 * $title - $title of the field, return value aswell
	 * $field - Field data
	 * $layout, The layout of acf
	 * $i - Index
	 */
	public function change_reusable_block_title( $title, $field, $layout, $i ) {
		if ($layout['name'] === 'reusable_block') {
			if (isset($field['value']) && isset($field['value'][$i]) && isset($field['value'][$i][$layout['sub_fields'][0]['key']])) {
				$post_id = $field['value'][$i][$layout['sub_fields'][0]['key']];
				if ($post_id) {
					return get_the_title($post_id);
				}
			}
		}
		return $title;
	}

	/**
	 * Change acf url on update and formatting
	 * $value - URL Object or String
	 */
	public function change_acf_url($value) {
		if (is_array($value)) {
			$value['url'] = apply_filters('matise_get_relative_url', $value['url']);
			$value['title'] = html_entity_decode($value['title']);
		} else if (is_string($value)) {
			$value = apply_filters('matise_get_relative_url', $value);
		}
		return $value;
	}

	/**
	 * Change acf url on update and formatting (Only for post link object)
	 * $value - URL Object or String
	 */
	public function change_acf_url_post_link($value) {
		return get_relative_permalink($value);
	}

	/** 
	 * Filter query objects in ACF
	 * $args - The wp query args
	 * $field - Field data
	 * Returns WP query args
	 */
	public function filter_query_objects( $args, $field) {
		if ($field['name'] === 'event') {
			$args['meta_query'] = array(
				array(
					'key'		=> 'date',
					'value'		=> date('Ymd'),
					'type'		=> 'DATE',
					'compare'	=> '>='
				)
			);
		} else if ($field['name'] === 'job') {
			$args['post_status'] = 'publish';
		}
		return $args;
	}
}
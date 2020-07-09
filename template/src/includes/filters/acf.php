<?php
namespace Matise\Filters;

use Matise\Register_Fields\Basics;
/**
 * Filters can be used on ACF fields so we dont have to add filters in the API anymore
 * More information: https://www.advancedcustomfields.com/resources/
 */
class ACF {
	public function __construct() {
		//filter for acf update and format values
		add_filter('acf/update_value/type=link', array($this, 'change_acf_url'), 10, 1);
		add_filter('acf/format_value', array($this, 'change_base_acf_image_values'), 10, 3);
		add_filter('acf/format_value/type=link', array($this, 'change_acf_url'), 10, 1);
		add_filter('acf/format_value/type=page_link', array($this, 'change_acf_url_post_link'), 10, 1);
		add_filter('acf/fields/flexible_content/layout_title', array($this, 'change_reusable_block_title'), 10, 4 );
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
		} elseif (is_string($value)) {
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
	 * Change base acf image values
	 * If nothing set return object instaed of boolean
	 */
	public function change_base_acf_image_values($value, $post_id, $field) {
		if ($field['type'] === 'image' && is_numeric($value)) {
			return Basics::get_image_object($value);
		}
		if ($field['type'] === 'image' && !$value) {
			return array();
		}
		return $value;
	}

	/**
	 * Add extra tag to page header
	 */
	public function add_tag_for_page_header($field, $post_id) {
		if (($post_type = get_post_type($post_id)) === 'cases') {
			$team = get_the_terms($post_id, 'team_member');
			$team_data = [];
			foreach ($team as $member) {
				$data = (array) $member;
				$data['image'] = get_field('image', $member);
				$team_data = $data;
			}
			$post_type_object = get_post_type_object($post_type);
			$field['tag'] = array(
				'key'	=> $post_type_object->name,
				'label'	=> $post_type_object->label,
			);
			$field['metaData'] = array(
				'team'	=> $team_data,
				'partner'	=> get_the_terms($post_id, 'partner'),
				'client'	=> get_the_terms($post_id, 'client'),
				'role'	=> get_the_terms($post_id, 'role')
			);
		}
		return $field;
	}

}
new ACF();

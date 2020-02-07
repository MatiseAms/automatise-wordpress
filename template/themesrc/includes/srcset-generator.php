<?php
// Don't forget to uncheck the sizes you do not need: /wordpress/wp-admin/options-general.php?page=tinify
// Add sizes in order from small to large
global $image_sizes;
$image_sizes = array(
	'mobile' => array(
		375,
		210
	),
	'tablet' => array(
		960,
		540
	),
	'small_desktop' => array(
		1280,
		720
	),
	'medium_desktop' => array(
		1440,
		810
	),
	'large_desktop' => array(
		1920,
		1080
	)
);

foreach ($image_sizes as $image_name => $image_size) {
	add_image_size($image_name, $image_size[0], $image_size[1], true);
}

function create_srcset($sizes, $source_id) {
	$srcsets = '';
	foreach ($sizes as $size_name => $size) {
		$srcsets = '<source media="(min-width: ' . $size[0] . 'px)" srcset="' . wp_get_attachment_image_url($source_id, $size_name) . '">' . $srcsets;
	}
	return
	'<picture>'
		. $srcsets .
		'<img src="' . wp_get_attachment_image_url($source_id, 'large') . '" alt="' . get_post_meta($source_id, '_wp_attachment_image_alt', TRUE) . '" />
	</picture>';
}


// Usage: echo srcset('small_desktop', get_post_thumbnail_id($post));
function srcset($start_size, $source_id) {
	global $image_sizes;
	$sources = array();
	foreach ($image_sizes as $image_name => $image_size) {
		if ($image_name == $start_size) {
			$sources[$image_name] = $image_size;
			return create_srcset($sources, $source_id);
		} else {
			$sources[$image_name] = $image_size;
		}
	}
}

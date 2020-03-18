<?php
/**
 * Helper function to get the relative permalink based on post id
 */
function get_relative_permalink($id) {
	return apply_filters('matise_get_relative_url', get_the_permalink($id));
}

function debug ($debug) {
	print_r('<pre>');
	print_r($debug);
	print_r('</pre>');
}

function perror ($debug) {
	error_log(print_r($debug, 1));
}
<?php
function svg($svg_name) {
	$tpl = get_template_directory().'/includes/svgs/'.$svg_name.'.svg';
	if ( file_exists($tpl) ){
		ob_start();
		include($tpl);
		return ob_get_clean();
	} else {
		// Or throw an error on the template
		error_log('File ('.$tpl.') does not exist');
	}
}

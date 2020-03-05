<?php
function partial($partial_name, $data){
	switch($partial_name){
		case 'tile';
			$tpl = get_template_directory().'/includes/components/partials/tile.php';
			break;
	}
	if (file_exists($tpl)) {
		ob_start();
		include($tpl);
		return ob_get_clean();
	} else {
		// Or throw an error on the template
		error_log('File ('.$tpl.') does not exist');
	}
}

<?php

function svg($svg_name){
	switch($svg_name){
		case 'arrow';
			$tpl = get_template_directory().'/includes/components/svgs/arrow.svg';
		break;
		default:
			$tpl = $svg_name;
	}
	if ( file_exists($tpl) ){
		ob_start();
			include($tpl);
		return ob_get_clean();
	} else {
		// Or throw an error on the template
		echo 'file ('.$tpl.') doesnt exist';
	}
}

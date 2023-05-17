<?php

//===================
// Show commit reference and environment in admin bar
//===================
if (!strpos(COMMIT, 'commit')) {
	function my_custom_admin_head() {
		$matise_env = '';
		if (defined('MATISE_ENVIRONMENT')){
			$matise_env = MATISE_ENVIRONMENT;
		}
		echo "<script>
		window.addEventListener('load', function () {
			var ul = document.querySelector('ul#wp-admin-bar-top-secondary');
			var li = document.createElement('li');
			li.appendChild(document.createTextNode('". $matise_env . ' - ' . COMMIT ."'));
			ul.appendChild(li);
		}, false);
		</script>";
	}
	add_action( 'admin_head', 'my_custom_admin_head' );
}

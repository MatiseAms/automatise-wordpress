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

$mailgun_key = '<%= mailgun %>';

define('MAILGUN_API_KEY', $mailgun_key);

// mailgun temporary matise settings
if(defined('MAILGUN_API_KEY') && MAILGUN_API_KEY !== 'key-undefined'){
	switch (MATISE_ENVIRONMENT) {
		case 'local':
		case 'staging':
			update_option('mailgun', array(
				'region' => 'us',
				'useAPI' => 1,
				'domain' => 'mg.matise.nl',
				'apiKey' => MAILGUN_API_KEY,
				'secure' => 1,
				'sectype' => 'tls',
				'track-clicks' => 'htmlonly',
				'track-opens' => 1,
				'from-address' => 'temp@mg.matise.nl',
				'from-name' => 'Matise Staging Wordpress',
				'campaign-id' => 'matise-staging-<%= packageName %>'
			));	

			function general_admin_notice(){
				global $pagenow;
				if ( $pagenow == 'options-general.php' && isset($_GET['page']) && $_GET['page'] == 'mailgun') {
					echo '<div class="notice notice-warning is-dismissible">
						<p>Mailgun settings are defined in code on local and staging.</p>
					</div>';
				}
			}
			add_action('admin_notices', 'general_admin_notice');
			break;
	}
}

//===================
// Show commit reference and environment in admin bar
//===================
if(!strpos(COMMIT, 'commit')){
	function my_custom_admin_head() {
		$matise_env = '';
		if(defined('MATISE_ENVIRONMENT')){
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

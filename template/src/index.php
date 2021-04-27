<?php
/**
 * Index page
 *
* @author       <%= author %>
 * @package      Wordpress
 * @subpackage   <%= name %>
 * @version      1.0
 * @since        1.0
 */
<% if (wordpressType === 'headless') { %>
$uri = $_SERVER['REQUEST_URI'];
wp_redirect('https://' . FRONTEND_DOMAIN . $uri, 301);
exit();
<% } else { %>
get_header();
the_post();
the_content();
?>
<br>
<br>
<br>
<br>
<!-- Please excuse the ugly HTML, I tried to add as little standard styling as possible to this project -->
<section class="row">
	<div class="column small-3 large-5"></div>
	<div class="column small-18 large-14">
		<h1>Automatise WordPress</h1>
		<br>
		<p>This is an <a href="https://www.npmjs.com/package/automatise-wordpress">open source project started by Matise</a> and maintained by <a href="https://cydstumpel.nl/" target="_blank" rel="noopener">Cyd Stumpel</a></p>
		<p><a href="https://gryd.cydstumpel.nl/" target="_blank" rel="noopener">Matise Gryd</a>, an SCSS framework, is included.</p>

		<p>Please don't hesitate to share your issues/feature requests <a href="https://github.com/MatiseAms/automatise-wordpress" target="_blank" rel="noopener">on GitHub</a></p>
	</div>
	<div class="column small-3 large-5"></div>
</section>
<?php
get_footer();
<% } %>

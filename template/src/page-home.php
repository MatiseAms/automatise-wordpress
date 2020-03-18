<?php
/**
* Template Name: Home Template
*/

<% if (type === 'headless') { %>
$uri = $_SERVER['REQUEST_URI'];
wp_redirect('https://' . FRONTEND_DOMAIN . $uri, 301);
exit();
<% } %>
get_header();
<% if (type === 'normal') { %>
the_title();
the_content();
<% } %>
get_footer();

?>

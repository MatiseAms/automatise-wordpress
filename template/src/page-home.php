<?php
/**
* Template Name: Home Template
*/

<% if (wordpressType === 'headless') { %>
$uri = $_SERVER['REQUEST_URI'];
wp_redirect('https://' . FRONTEND_DOMAIN . $uri, 301);
exit();
<% } else { %>
get_header();
the_title();
the_content();
get_footer();
<% } %>

?>

<?php
/**
* Template Name: Home Template
*/


get_header();
<% if (type === 'normal') { %>
the_post();
the_content();
<% } %>
get_footer();

?>

<?php
/**
 * Index page
 *
 * @author       Matise (matise.nl)
 * @package      Wordpress
 * @subpackage   <%= name %>
 * @version      1.0
 * @since        1.0
 */

get_header();
<% if (type === 'normal') { %>
the_post();
the_content();
<% } %>
get_footer();

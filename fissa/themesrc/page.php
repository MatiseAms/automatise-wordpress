<?php
/**
 * Page page
 *
 * @author       Matise (matise.nl)
 * @package      Wordpress
 * @subpackage   fissa
 * @version      1.0
 * @since        1.0
 */

get_header();
the_post();
the_content();
echo '<h1>Fissa!</h1>';
get_footer();

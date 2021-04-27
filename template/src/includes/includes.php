<?php
//===================
// Helper functions
//===================
require_once('helper-functions.php');

//===================
// Matise theme Development essentials
//===================
require_once('field-groups/acf.php');

//===================
// Theme specific functions functions
//===================
require_once('settings/index.php');

<% if (wordpressType === 'headless') { %>
//===================
// WP Core
//===================
require_once('wp-core/init.php');
<% } %>

<% if (wordpressType === 'normal') { %>
//===================
// Components and partials
//===================
require_once('svgs/generate.php');
<% } %>

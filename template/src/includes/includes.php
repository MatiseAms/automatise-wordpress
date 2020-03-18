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
require_once('filters/index.php');

<% if (type === 'headless') { %>
//===================
// WP Core
//===================
require_once('wp-core/init.php');
<% } %>

<% if (type === 'headless') { %>
//===================
// Components and partials
//===================
require_once('components/partials/generate.php');
require_once('components/svgs/generate.php');
<% } %>

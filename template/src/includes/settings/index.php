<?php
require_once('essentials.php');
<% if (wordpressType === 'normal') { %>
require_once('acf.php');
<% } %>
require_once('image.php');
require_once('menu-settings.php');
require_once('theme.php');
<% if (wordpressType === 'headless') { %>
require_once('url.php');
<% } %>
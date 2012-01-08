<?php

/*

Author: David Behrend
URL: htp://www.notoriousrgb.com/

*/

define('XBONES_FILEPATH', TEMPLATEPATH);
define('XBONES_DIRECTORY', get_template_directory_uri());

// THE CROSSBONES FRAMEWORK
require_once('library/includes/core.php'); 
require_once('library/includes/plugins.php');
require_once('library/includes/sidebars.php');


// SETUP THE THEME OPTIONS PANEL
require_once (XBONES_FILEPATH . '/admin/admin-functions.php');
require_once (XBONES_FILEPATH . '/admin/admin-interface.php');
require_once (XBONES_FILEPATH . '/admin/theme-options.php');
require_once (XBONES_FILEPATH . '/admin/theme-functions.php');
<?php

/*

Author: David Behrend
URL: htp://www.notoriousrgb.com/

*/

define('XBONES_FILEPATH', TEMPLATEPATH);
define('XBONES_DIRECTORY', get_template_directory_uri());

define('ADMIN_PATH', STYLESHEETPATH . '/admin/');
define('ADMIN_DIR', get_bloginfo('stylesheet_directory') . '/admin/');
define('LAYOUT_PATH', ADMIN_PATH . '/layouts/');
$themedata = get_theme_data(STYLESHEETPATH . '/library/custom-style.css');
define('THEMENAME', $themedata['Name']);
define('OPTIONS', 'xbones'); // Name of the database row where your options are stored


// THE CROSSBONES FRAMEWORK
require_once('library/includes/core.php'); 
require_once('library/includes/plugins.php');
require_once('library/includes/sidebars.php');
//require_once('library/includes/custom-meta-boxes.php');
require_once('library/includes/custom-post-types.php');

// SETUP THE THEME OPTIONS PANEL
require_once (ADMIN_PATH . 'admin-interface.php'); // Admin Interfaces
require_once (ADMIN_PATH . 'theme-options.php'); // Options panel settings and custom settings
require_once (ADMIN_PATH . 'admin-functions.php'); // Theme actions based on options settings
require_once (ADMIN_PATH . 'medialibrary-uploader.php'); // Media Library Uploader



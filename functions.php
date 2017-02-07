<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */

if(!defined('ABSPATH') ) {
  exit; // Exit if accessed directly
}

$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}

/* 

Recommeded if using Advanced Custom Fields

//add a options page in the admin panel
if (function_exists('acf_add_options_page') ) {
	acf_add_options_page((array(
      'page_title' => 'Website Options',
      'menu_title' => 'Website Options',
      'menu_slug' => 'website_options',
      'parent_slug' => '',
      'position' => 'false',
      'redirect' => 'false',    
    )));
} */

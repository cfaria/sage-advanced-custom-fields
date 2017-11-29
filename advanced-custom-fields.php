<?php
namespace App;
/**
 * Advanced Custom Fields drop-in functionality for Sage 9
 * Version: 1.0
 * Author: Michael W. Delaney
 */

/**
 * Set local json save path
 * @param  string $path unmodified local path for acf-json
 * @return string       our modified local path for acf-json
 */
add_filter('acf/settings/save_json', function($path) {
  
  // Set Sage9 friendly path at /theme-directory/resources/assets/acf-json
  $path = get_stylesheet_directory() . '/assets/acf-json';
  
  // If the directory doesn't exist, create it.
  if (!is_dir($path)) {
    mkdir($path);
  }
  
  // Always return
  return $path;
  
});


/**
 * Set local json load path
 * @param  string $path unmodified local path for acf-json
 * @return string       our modified local path for acf-json
 */
add_filter('acf/settings/load_json', function($paths) {
  
  // append path
  $paths[] = get_stylesheet_directory() . '/assets/acf-json';
  
  // return
  return $paths;
  
});

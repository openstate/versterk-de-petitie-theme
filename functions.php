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
unset($file, $filepath);

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
  global $post;
  if (in_category('news')) {
    return '&nbsp;&nbsp;&nbsp;<a class="moretag" href="' . get_permalink($post->ID) . '"><b>&gt;</b></a>';
  }
  elseif (in_category('datablog')) {
    return '&nbsp;&nbsp;&nbsp;<a class="moretag" href="' . get_permalink($post->ID) . '"><b>&gt;</b></a>';
  }
}
add_filter('excerpt_more', 'new_excerpt_more');

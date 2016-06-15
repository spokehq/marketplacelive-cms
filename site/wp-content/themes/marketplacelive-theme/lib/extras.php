<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


/**
 * Utility debugging function
 * @param mixed $arg1
 * @param mixed $arg2
 * Usage can be `pre($debug_me);` or `pre('this is a message', $debug_me);`
 *
 */
function pre($arg1, $arg2 = null) {
  // bail if >2 args
  if ( func_num_args() > 2 ) {
    echo '<pre>';
    echo 'Function pre() has too many args. Max args only: pre([$context], $data)';
    echo '</pre>';
    return;
  }
  // which arg will have the data
  $data_arg_idx = ( 1 === func_num_args() ) ? 0 : 1;
  // is there a "$context" arg
  $is_context_arg = 1 === $data_arg_idx;
  $context = !$is_context_arg ? '' : func_get_arg(0);
  $data = func_get_arg($data_arg_idx);

  echo '<pre>';
  echo '**'.$context.'**'.PHP_EOL.PHP_EOL;
  if( is_string($data) ){
    echo $data;
  }
  elseif( is_array($data) ) {
    print_r($data);
  }
  elseif( is_object($data)) {
    var_dump($data);
  }
  else {
    var_dump($data);
  }
  echo '</pre>';
}

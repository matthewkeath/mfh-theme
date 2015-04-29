<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Config;

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
  if (Config\display_sidebar()) {
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

// the _3 prefix has to match the id of the form you have created
add_action( "gform_after_submission_3", "login_form_after_submission", 10, 2 );

function login_form_after_submission($entry, $form) {

  // get the username and pass
  $username = $entry[1];
  $pass = $entry[2];

  $creds = array();

  // create the credentials array
  $creds['user_login'] = $username;
  $creds['user_password'] = $pass;

  // sign in the user and set him as the logged in user
  $sign = wp_signon( $creds );
  wp_set_current_user( $sign->ID );
}

add_filter("gform_allowable_tags_1", "allow_basic_tags");
function allow_basic_tags($allowable_tags){
    return '<iframe>';
}



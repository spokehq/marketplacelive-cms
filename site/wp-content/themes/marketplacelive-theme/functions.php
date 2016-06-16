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
  'lib/customizer.php', // Theme customizer
  'lib/wp_bootstrap_navwalker.php' // Nav Walker (Menu)
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/**
 * Add custom SpokeHQ login image and click functionality for theme
 *
 */
function spokehq_loginlogo() {

  echo "<style type=\"text/css\">
    .login {
    background: #D3D3D3;
    }
    .login h1 a {
      background-image: url('" . get_template_directory_uri() . "/dist/images/spoke-theme.png') !important;
      width: 320px;height: 97px;background-size: 300px 52px;background-position: center center;
    }
  </style>";

}

add_action('login_head', 'spokehq_loginlogo');

function spokehq_loginURL() {
  return 'http://www.spokehq.com';
}

add_filter('login_headerurl', 'spokehq_loginURL');

function spokehq_loginURLtext() {
  return 'Spoke™ | Web &amp; Emerging Media, Strategy, Development, Management and Online Branding';
}

add_filter('login_headertitle', 'spokehq_loginURLtext');

function spokehq_loginfooter() { ?>

  <p style="text-align: center; margin-top: 1em;">
    If you have questions, <a style="color: #ea430c; text-decoration: none;
  "href="http://www.spokehq.com/contact/">Speak to Spoke.
    </a>
  </p>

<?php }

add_action('login_footer','spokehq_loginfooter');

/**
 * Replace title with page title
 * Call on template pages when working with ACF
 * Refactor for specific uses
 */
function acf_change_title_text( $title ){
  $screen = get_current_screen();
  
  // replace 'sponsor' with your post type slug
  if  ( 'sponsor' == $screen->post_type ) {
    $title = "Company name";
  }

  return $title;
}

add_filter( 'enter_title_here', 'acf_change_title_text' );
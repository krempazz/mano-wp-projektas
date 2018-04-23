<?php
define('ASSETS_URL' , get_template_directory_uri() . '/assets/' );

  // define scripts
add_action( 'wp_enqueue_scripts', 'vcs_theme_styles' );
function vcs_theme_styles() {

// registering css
  wp_register_style('reset_css', ASSETS_URL . '/css/reset.css', array(), false, 'all');
  wp_register_style('main_site_styles', ASSETS_URL . '/css/main.css', array(), false, 'all');


// enqueue styles
  wp_enqueue_style('reset_css');
  wp_enqueue_style('main_site_styles');



// registering javascript files
  wp_register_script('main_js', ASSETS_URL . '/js/main.js', array( 'jquery_js' ), false, true );
  wp_register_script('google_map_api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB2AfL0C-02xQjukgqVDnAxrOKyVQVF8OU' , array( ), false, true );
  wp_register_script('maps', ASSETS_URL . '/js/maps.js', array( 'google_map_api' ), false, true );
  wp_register_script('jquery_js', ASSETS_URL . '/js/jquery.js', array( ), false, true );


// enqueue scripts
  wp_enqueue_script('main_js');
  wp_enqueue_script('google_map_api');
  wp_enqueue_script('maps');
  wp_enqueue_script('jquery_js');


}

// Theme supports
  add_action( 'init' , 'vcs_adding_theme_supports' );
  function vcs_adding_theme_supports () {
    add_theme_support( 'menus' );
}

  add_action( 'init' , 'vcs_registering_menus' );
// Defining navigation
  function vcs_registering_menus() {

    register_nav_menus( array(
          'top-menu'        => __('Viršutinis meniu'),
      ) );

  }
  // google maps
  function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyB2AfL0C-02xQjukgqVDnAxrOKyVQVF8OU';

	return $api;

}

  add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

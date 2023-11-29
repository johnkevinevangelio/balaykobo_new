<?php
// bootstrap 5 wp_nav_menu walker
  require_once('navwalker.php');

  function wpb_theme_setup () {
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
    add_theme_support('post-thumbnails');
  }

  add_action('after_setup_theme', 'wpb_theme_setup');

  function balaykobo_menus() {

    $locations = array(
      'primary' => "Desktop Primary Menu",
      'mobile' => "Mobile Primary Menu"
    );

    register_nav_menus($locations);
  }

  add_action('init','balaykobo_menus');
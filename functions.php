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
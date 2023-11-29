<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <title>
            <?php
                $a = '|'
            ?>
            <?php bloginfo('name'); ?> |
            <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        </title>
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
        <!-- Custom CSS -->
        <link href="<?php bloginfo('template_url'); ?>/css/sideBarStyle.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/landing_page.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/second_page.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/gallery.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/contact.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/portfolio.css" rel="stylesheet" />
        <?php wp_head(); ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <div class="justify-content-center fixed-top" id="navMain">
            <?php 
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul class="nav my-lg-0 justify-content-center">%3$s</ul>'
                    )
                );
            ?>
            <!-- <ul class="nav my-lg-0 justify-content-center">
                <li class="home-nav-item" id="home-item"><a href="#home"><img class="nav-home-icon white"/></a></li>
                <li class="home-nav-item" id="studio-item"><a href="#studio"><img  class="nav-studio-icon white"/></a></li>
                <li class="home-nav-item" id="reservation-item"><a href="#reservation"><img class="nav-reservation-icon white"/></a></li>
                <li class="home-nav-item" id="services-item"><a href="#services"><img class="nav-services-icon white"/></a></li>
                <li class="home-nav-item" id="about-item"><a href="#services"><img class="nav-about-icon white"/></a></li>
            </ul> -->
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="btn-group dropstart mobile-nav-menu justify-content-end fixed-top px-4 px-lg-5 py-3">
            <button class="navbar-toggler nav-menu-button" role="button" id="mobileDropDownMenuBtn" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
                <div class="animated-icon"><span></span><span></span><span></span></div>
            </button>
            <div class="dropdown-menu mobile" aria-labelledby="mobileDropDownMenuBtn">
                <a class="dropdown-item" href="#home">Home</a>
                <a class="dropdown-item" href="#studio">Studio</a>
                <a class="dropdown-item" href="#reservation">Reservation</a>
                <a class="dropdown-item" href="#services">Services</a>
                <a class="dropdown-item" href="#services">About</a>
            </div>
        </div>

        <!-- <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="main-menu">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                    ?>
                </div>
            </div>
        </nav> -->
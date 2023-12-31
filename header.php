<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <title>
            <?php wp_title() ;?>
        </title>
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.cdnfonts.com/css/oxygen-mono" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Oxygen Mono' rel='stylesheet'>
        <link href="https://fonts.cdnfonts.com/css/spectral" rel="stylesheet">
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick/slick-theme.css">
        <link href="<?php bloginfo('template_url'); ?>/css/sideBarStyle.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/landing_page.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/second_page.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/gallery.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/contact.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/portfolio.css" rel="stylesheet" />

        <link href="<?php bloginfo('template_url'); ?>/css/single.css" rel="stylesheet" />

        <link href="<?php bloginfo('template_url'); ?>/css/about.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/services.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/partnership.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/studios.css" rel="stylesheet" />
        <?php wp_head(); ?>
        <style>
            #page-top::-webkit-scrollbar-track
            {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                border-radius: 10px;
                background-color: #F5F5F5;
            }

            #page-top::-webkit-scrollbar
            {
                width: 12px;
                background-color: #F5F5F5;
            }

            #page-top::-webkit-scrollbar-thumb
            {
                border-radius: 10px;
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
                background-color: #555;
            }
        </style>
    </head>
    <body id="page-top"> 
        <!-- remove scroll temporarily -->
        <!-- Navigation-->
        <div class="justify-content-center fixed-top" id="navMain">
            <div class="menu-title-cont">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="landing-title" src="<?php bloginfo('template_url'); ?>/assets/title.png"/>
                </a>
            </div>
            <div class="nav-book-now-btn">
                <button type="button" class="btn btn-outline-light btn-sm px-4">Book now</button>
            </div>
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

            <!-- Navigation menu for windows -->
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
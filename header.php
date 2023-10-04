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
        <?php wp_head(); ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <!-- <div class="nav fixed-top pe-6 align-items-center sidebar-section" id="mainNav">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-link my-3" id="home-item"><a href="#home"><img class="nav-home-icon" src="<?php bloginfo('template_url'); ?>/assets/home-icon.svg" width="24" height="42"></a></li>
                <li class="nav-link my-3" id="studio-item"><a href="#studio"><img  class="nav-studio-icon" src="<?php bloginfo('template_url'); ?>/assets/studio-icon.svg" width="24" height="42"/></a></li>
                <li class="nav-link my-3" id="reservation-item"><a href="#reservation"><img class="nav-reservation-icon" src="<?php bloginfo('template_url'); ?>/assets/reservation-icon.svg" width="24" height="42"/></a></li>
                <li class="nav-link my-3" id="services-item"><a href="#services"><img class="nav-services-icon" src="<?php bloginfo('template_url'); ?>/assets/services-icon.svg" width="24" height="42"/></a></li>
                <li class="nav-link my-3" id="about-item"><a href="#services"><img class="nav-about-icon" src="<?php bloginfo('template_url'); ?>/assets/about-icon.svg" width="24" height="42"/></a></li>
            </ul>
        </div> -->
        <nav class="navbar navbar-expand-md navbar-light bg-light">
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
        </nav>
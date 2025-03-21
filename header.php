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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.cdnfonts.com/css/oxygen-mono" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Oxygen Mono' rel='stylesheet'>
        <link href="https://fonts.cdnfonts.com/css/spectral" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/fontawesome" rel="stylesheet">
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

        <link href="<?php bloginfo('template_url'); ?>/css/contactpage.css" rel="stylesheet" />

        <link href="<?php bloginfo('template_url'); ?>/css/single.css" rel="stylesheet" />

        <link href="<?php bloginfo('template_url'); ?>/css/about.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/services.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/partnership.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/studios.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/bookForm.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/faq.css" rel="stylesheet" />
        <link rel="preload">
        
        <!------ Book Studio ---------->
        <link href="https://fonts.cdnfonts.com/css/helvetica-neue-5" rel="stylesheet">
        <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
        <!------ Include the above in your HEAD tag ---------->
        <?php wp_head(); ?>
        <style>
            #page-top {
                overflow-x: hidden;
            }
            #page-top::-webkit-scrollbar-track
            {
                display: none;
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                border-radius: 10px;
                background-color: #F5F5F5;
            }

            #page-top::-webkit-scrollbar
            {
                width: 10px;
                background-color: #F5F5F5;
            }

            #page-top::-webkit-scrollbar-thumb
            {
                border-radius: 10px;
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
                background-color: #555;
            }
        </style>
        <?php $myTitle = get_the_title() ?>
        <?php if($myTitle == 'Studios') : ?>
            <style>
                #navMain {
                    filter: invert(0);
                }
                .mobile-nav-menu {
                    filter: invert(0);
                }
                #navMain.menu-bg:hover {
                    backdrop-filter: blur(15px);
                    background-color: rgba(62, 53, 44, 0.5) !important;
                }
            </style>
        <?php elseif(is_front_page()) : ?>
            <style>
                #navMain {
                    filter: invert(0);
                }
                .mobile-nav-menu {
                    filter: invert(0);
                }
                #navMain.menu-bg:hover {
                    backdrop-filter: blur(15px);
                    background-color: rgba(62, 53, 44, 0.5) !important;
                }
            </style>
        <?php elseif($myTitle == 'About') : ?>
            <style>
                #navMain {
                    filter: invert(0);
                }
                .mobile-nav-menu {
                    filter: invert(0);
                }
                #navMain.menu-bg:hover {
                    backdrop-filter: blur(15px);
                    background-color: rgba(62, 53, 44, 0.5) !important;
                }
            </style>
        <?php elseif(has_tag( 'gallery' ) ) : ?>
            <style>
                #navMain {
                    filter: invert(0);
                }
                .mobile-nav-menu {
                    filter: invert(0);
                }
                #navMain.menu-bg:hover {
                    backdrop-filter: blur(15px);
                    background-color: rgba(62, 53, 44, 0.5) !important;
                }
            </style> 
        <?php else : ?>
            <style>
                .landing-title {
                    filter: invert(100%);
                }
                #navMain li {
                    filter: invert(100%);
                }
                #navMain .nav-book-now-btn {
                    filter: invert(100%);
                }
                #navMain:hover {
                    filter: invert(0);
                    backdrop-filter: blur(15px);
                    background-color: rgba(255, 255, 255, 0.5);
                }
                /* #navMain.menu-bg {
                    backdrop-filter: blur(2px);
                    background-color: rgba(0, 0, 0, 0.5);
                } */
                #navMain.menu-bg:hover {
                    filter: invert(0);
                    backdrop-filter: blur(15px);
                    background-color: rgba(255, 255, 255, 0.5);
                }
                .mobile-nav-menu {
                    filter: invert(100%);
                }
            </style>
        <?php endif; ?>
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
                <a type="button" href="<?php echo get_permalink( get_page_by_title( 'Book a Studio' ) ); ?>" class="btn btn-outline-light btn-sm px-4">Book now</a>
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
        <nav class="navbar navbar-expand-lg fixed-top navbar-bg mobile-nav-menu diff-blend">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                    <img class="mobile-logo" src="<?php bloginfo('template_url'); ?>/assets/mobile-logo.png"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <img width="35" height="35" src="<?php bloginfo('template_url'); ?>/assets/burger-icon.svg"/>
                </button>
            </div>
        </nav>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarNav" aria-labelledby="navbarNavLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="mobileNav offcanvas-body d-flex align-items-end">
                <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'mobile',
                            'container' => '',
                            'theme_location' => 'mobile',
                            'items_wrap' => '<ul class="mobileNav navbar-nav">%3$s</ul>'
                        )
                    );
                ?>
                <!-- <ul class="mobileNav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="row">
                                <div class="col-3"><img class="nav-studios-icon black" /></div>
                                <div class="col-9 nav-link-text py-1">Studio</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="row">
                                <div class="col-3"><img class="nav-gallery-icon black" /></div>
                                <div class="col-9 nav-link-text py-1">Gallery</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="row">
                                <div class="col-3"><img class="nav-partnerships-icon black ps-2" /></div>
                                <div class="col-9 nav-link-text py-1">Partnerships</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="row">
                                <div class="col-3"><img class="nav-services-icon black" /></div>
                                <div class="col-9 nav-link-text py-1">Services</div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="row">
                                <div class="col-3"><img class="nav-about-icon black" /></div>
                                <div class="col-9 nav-link-text py-1">About</div>
                            </div>
                        </a>
                    </li>
                </ul> -->
            </div>
            <div class="mobileNav offcanvas-footer d-flex justify-content-center align-items-center py-5 mb-4">
                <a type="button" class="btn btn-dark btn-block" href="<?php echo get_permalink( get_page_by_title( 'Book a Studio' ) ); ?>">Book now</a>
            </div>
        </div>

        <div class="spinner-wrapper">
            <div class="d-flex justify-content-center loadingLogo">
                <div class="loadingLogoNew">
                    <img src="https://balaykobo.com/wp-content/uploads/2024/05/Balay-Kobo-Horizontal-Logo-White.png">
                </div>
                <!-- <div class="loadingLogo1">
                    <img src="<?php bloginfo('template_url'); ?>/assets/loadingLogo1.png">
                </div>
                <div class="loadingLogo2">
                    <img src="<?php bloginfo('template_url'); ?>/assets/loadingLogo2.png">
                </div> -->
            </div>
            <div class="spinner-border visually-hidden" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

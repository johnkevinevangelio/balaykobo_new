<html>
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
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/portfolio.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/gallery.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/sideBarStyle.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/css/services.css" rel="stylesheet" />
        <style type="text/css">
        </style>
    </head>
    <body id="page-top">
            <!-- Navigation-->
            <div class="justify-content-center fixed-top permanent-bg" id="navMain">
                <div class="menu-title-cont">
                    <img class="landing-title" src="<?php bloginfo('template_url'); ?>/assets/title.png"/>
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
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php $myTitle = get_the_title() ?>
                    <?php $myTitle ?>
                    <?php if($myTitle == 'Studios') : ?>
                        <div class="container-fluid g-0">
                            <div class="row g-0">
                                <?php
                                    $args = array(
                                    );
                                    $my_post = get_posts($args);
                                    if ( $my_post ) {
                                        foreach ( $my_post as $post ) : 
                                            setup_postdata( $post ); 
                                ?>
                                <?php get_template_part('content'); ?>
                                <?php
                                    endforeach;
                                    wp_reset_postdata();
                                    }
                                ?>
                            </div>
                        </div>
                    <?php else :?>
                        <?php echo get_the_content() ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php __('No Page Found'); ?></p>
            <?php endif; ?>
        <footer>
            <style>
                .footerStyle {
                    background-color: #557689;
                    padding-bottom: 10%;
                }
                .footerTitle {
                    color: #EBE9DA;
                    font-family: 'Spectral';
                    font-size: 26px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: normal;
                }
                .footerSub {
                    color: #F2F2E6;
                    font-family: 'Oxygen Mono';
                    font-size: 16px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 115.2%; /* 18.432px */
                    text-transform: uppercase;
                }
            </style>
            <div class="footerStyle container-fluid pt-5">
                <div class="d-flex flex-row-reverse">
                    <div>
                        <ul style="list-style-type: none;">
                            <li class="footerTitle">Information</li>
                            <li class="footerSub">SPONSOR Kobo</li>
                            <li class="footerSub">CONTACT US</li>
                        </ul>
                    </div>
                    <div>
                        <ul style="list-style-type: none;">
                            <li class="footerTitle">Follow Us</li>
                            <li class="footerSub">FACEBOOK</li>
                            <li class="footerSub">INSTAGRAM</li>
                            <li class="footerSub">LINKEDIN</li>
                            <li class="footerSub">TIKTOK</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
        <!-- <script src="<?php bloginfo('template_url'); ?>/js/navBarScripts.js"></script> -->
        <!-- Custom Scripts -->
        <?php include 'nav-script.php';?>
        <?php include 'services-script.php';?>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script>
            let currentIndex = 0
            function changeImage (excerpt, id) {
                if (excerpt.length) {
                    const imgSources = excerpt.split(",")
                    const galleryImage = document.getElementById(id);
                    galleryImage.src = imgSources[currentIndex];
                    currentIndex = (currentIndex + 1) % imgSources.length;
                }
            }
            document.addEventListener("DOMContentLoaded", function() {
                window.addEventListener("scroll", function() {
                    var scroll = window.scrollY;
                    var arrowElement = document.querySelector('.arrow');
                    
                    if (!arrowElement) return
                    if (scroll >= 1) {
                        arrowElement.classList.add('fade');
                        arrowElement.classList.remove('bounce');
                    } else {
                        arrowElement.classList.remove('fade');
                        arrowElement.classList.add('bounce');
                        arrowElement.style.animationPlayState = 'running';
                    }
                });
            });
            function getImageBrightness(imageSrc, callback) {
                var img = document.createElement("img");
                img.src = imageSrc;
                img.style.display = "none";
                img.crossOrigin = "anonymous";
                document.body.appendChild(img);

                var colorSum = 0;

                img.onload = function() {
                    // create canvas
                    var canvas = document.createElement("canvas");
                    canvas.width = this.width;
                    canvas.height = this.height;

                    var ctx = canvas.getContext("2d");
                    ctx.drawImage(this, 0, 0);

                    var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                    var data = imageData.data;
                    var r, g, b, avg;

                    for (var x = 0, len = data.length; x < len; x += 4) {
                    r = data[x];
                    g = data[x + 1];
                    b = data[x + 2];

                    avg = Math.floor((r + g + b) / 3);
                    colorSum += avg;
                    }

                    var brightness = Math.floor(colorSum / (this.width * this.height));
                    callback(brightness);
                }
            }
        </script>
    </body>
</html>
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
        <link href="https://fonts.cdnfonts.com/css/oxygen-mono" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/spectral" rel="stylesheet">
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
        <link href='https://fonts.googleapis.com/css?family=Oxygen Mono' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick/slick-theme.css">
        <link href="<?php bloginfo('template_url'); ?>/css/sideBarStyle.css" rel="stylesheet" />
        <style type="text/css">
            html, body {
                background: #EBE9DA;
                margin: 0;
                padding: 0;
                width: 100%;
                -webkit-text-size-adjust: 100%;
            }
            * {
                box-sizing: border-box;
            }
            .slider {
                width: calc(100% - 30px);
                margin-top: 30px;
            }
            .slick-track {
                display: flex !important;
            }
            .slick-slide {
                max-height: 300px !important;
                margin: 0px 10px;
            }
            .slick-slide img {
                width: 100%;
            }
            .slick-slide img:hover {
                opacity: 0.7;
            }
            .slick-prev:before,
            .slick-next:before {
                color: black;
            }
            .slick-slide {
                transition: all ease-in-out .3s;
            }
            .featured-works {
                overflow-x: hidden;
                margin-top: 30px;
            }
            .featured-works > .row {
                display: -ms-flexbox; /* IE10 */
                display: flex;
                -ms-flex-wrap: wrap; /* IE10 */
                flex-wrap: wrap;
                padding: 0 4px;
            }

                /* Create four equal columns that sits next to each other */
            .featured-works .column {
                -ms-flex: 20%; /* IE10 */
                flex: 20%;
                max-width: 20%;
                padding: 0 2px;
                margin-left: 0;
                margin-right: 0;
            }

            .featured-works .column img {
                margin-top: 30px;
                vertical-align: middle;
                width: 100%;
            }

            .top-padding {
                padding-top: 75px !important;
            }

                /* Responsive layout - makes a two column-layout instead of four columns */
            @media screen and (max-width: 800px) {
                .featured-works .column {
                    -ms-flex: 50%;
                    flex: 50%;
                    max-width: 50%;
                }
            }

                /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                .featured-works .column {
                    -ms-flex: 100%;
                    flex: 100%;
                    max-width: 100%;
                }
            }
            .post-video {
                object-fit: cover !important;
                width: 100%;
                height: 500px;
                margin-top: 30px;
            }
            .post-title {
                padding: 0;
                margin-top: 50px;
            }
            @media screen and (max-width: 800px) {
                .post-video {
                    object-fit: cover !important;
                    width: 100%;
                    height: 300px;
                }
            }

                /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                .post-video {
                    object-fit: cover !important;
                    width: 100%;
                    height: 200px;
                }
            }
            .subheader {
                color: #000 !important;
                font-family: 'Oxygen Mono';
                font-size: 16px;
                font-weight: 400;
                line-height: 150.2%;
            }
            .floorPlan img {
                width: 70%;
            }
            .singleMainContent {
                padding-top: 5%;
            }
            .title-header {
                color: #3E352C;
                font-family: 'Spectral';
                font-size: 42px;
                font-style: 'normal';
                font-weight: 400;
                line-height: 103.2%;
                margin-bottom: 10px;
                margin-top: 50px;
            }
            /* .bookStudio {
                background: url('/assets/second_page/background.jpg');
            }
            .bookStudio > .row {
                background-position: center;
                background-color: rgb(235, 233, 218, 0.7);
            } */
        </style>
    </head>
    <body>
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
                <div class="container-fluid text-center g-0 singleMainContent">
                    <?php echo get_the_content() ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
        <footer>
            <style>
                .bookStudio {
                    background: url(http://localhost/balaykobo/wp-content/uploads/2024/01/singlebookstudiobackground.jpg);
                    background-size: cover;
                    background-position: center;
                    padding-top: 5%;
                    padding-bottom: 3%;

                }
                .bookStudioTitleHeader {
                    color: #3E352C;
                    font-family: 'Spectral';
                    font-size: 42px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 103.2%;
                }
                .bookStudioSubheader {
                    color: #000;
                    font-family: 'Oxygen Mono';
                    font-size: 16px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 150.2%; /* 24.032px */
                }
                .singleBookBtn1Style {
                    width: 228px;
                    height: 35px;
                    padding: 8px, 33.6px, 8px, 33.6px;
                    border: 1px;
                    gap: 83.2px;
                    border-radius: 6px;
                    border: 0.8px solid #496575;
                    background-color: #557689;
                    text-align: center;
                    color: #FFF;
                    font-family: 'Oxygen Mono';
                    font-size: 14px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 115.2%; /* 16.128px */
                }
                .singleBookBtn2Style {
                    width: 228px;
                    height: 35px;
                    padding: 8px, 33.6px, 8px, 33.6px;
                    border-radius: 6px;
                    border: 1px solid #DADADA;
                    gap: 83.2px;
                    background-color: #F4F4F4;
                    text-align: center;
                    color: 3E352C;
                    font-family: 'Oxygen Mono';
                    font-size: 14px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 115.2%; /* 16.128px */
                }
                .btnText {
                    font-family: Oxygen Mono;
                    font-size: 14px;
                }
            </style>
            <div class="bookStudio text-center mt-5" id="bookStudioId">
                <div>
                    <div class="row">
                        <div class="col align-self-center bookStudioTitleHeader">
                            Book studio
                        </div>
                    </div>
                    <div class="row">
                        <div class="col align-self-center bookStudioSubheader">
                            You have two options below.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center align-self-center singleBookContent">
                            <div class="mt-4">
                                <a class="btn btn-outline-secondary me-2 singleBookBtn1Style" style="">
                                    <div class="btnText"> Call our booking manager </div>
                                </a>
                                <a class="btn btn-outline-secondary singleBookBtn2Style" style="">
                                    <div class="btnText"> Reserve through form </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </footer>
        <?php get_footer(); ?>
        <!-- <footer>
            <style>
                .footerStyle {
                    background-color: #557689;
                    padding-bottom: 10%;
                    padding-right: 5%
                }
                .footerContent {
                    margin-top: 5%;
                }
                .footerTitle {
                    color: #EBE9DA;
                    font-family: 'Spectral';
                    font-size: 26px;
                    font-style: normal;
                    font-weight: 400;
                    letter-spacing: 2px;
                    line-height: normal;
                }
                .footerSub {
                    color: #F2F2E6;
                    font-family: 'Oxygen Mono';
                    font-size: 16px;
                    font-style: normal;
                    line-height: 18px;
                    font-weight: 200;
                    letter-spacing: 1px;
                    text-transform: uppercase;
                    padding-top: 5px;
                    padding-bottom: 5px;
                }
            </style>
            <div class="bookStudio text-center mt-5" id="bookStudioId" style="background: url('<?php bloginfo('template_url'); ?>/assets/second_page/background.jpg');">
                <div class="container-fluid pb-5" style="background-color: rgb(235, 233, 218, 0.7);">
                    <div class="row">
                        <div class="col align-self-center title-header">
                            Book studio
                        </div>
                    </div>
                    <div class="row">
                        <div class="col align-self-center subheader">
                            You have two options below
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-11 align-self-center text-lg-center ps-5">
                            <a class="btn btn-outline-secondary me-4" style="border-radius: 20px">
                                <span class="ms-2 me-5"> call our booking manager </span>
                                <i class="bi bi-arrow-right ms-4 me-2"></i>
                            </a>
                            <a class="btn btn-outline-secondary" style="border-radius: 20px">
                                <span class="ms-2 me-5"> reserve through form </span>
                                <i class="bi bi-arrow-right ms-4 me-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footerStyle container-fluid">
                <div class="d-flex flex-row-reverse">
                    <div class="footerContent">
                        <ul style="list-style-type: none;">
                            <li class="footerTitle">Information</li>
                            <li class="footerSub">SPONSOR KŌBŌ</li>
                            <li class="footerSub">CONTACT US</li>
                        </ul>
                    </div>
                    <div class="footerContent">
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
        </footer> -->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
        <!-- Custom Scripts -->
        <?php include 'nav-script.php';?>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_url'); ?>/css/slick/slick.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
            $(document).on('ready', function() {
                $(".regular").slick({
                    dots: false,
                    infinite: true,
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    swipeToSlide: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                                autoplay: true,
                                autoplaySpeed: 2000
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                autoplay: true,
                                autoplaySpeed: 2000
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                autoplay: true,
                                autoplaySpeed: 2000
                            }
                        }
                    ]
                });
            });
        </script>
    </body>
</html>
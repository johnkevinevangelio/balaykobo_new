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
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick/slick-theme.css">
        <style>
            body {
                background: #EBE9DA;
                margin: 0;
                padding: 0
            }
            * {
                box-sizing: border-box;
            }
            .add-ons {
                padding-right: 5px;
                padding-left: 10px;
            }
            .slider {
                width: 100%;
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
                max-width: 100%;
            }
            /* .slick-slide img:hover {
                width: 103%;
            } */
            .slick-prev:before {
                display: none;
            }
            .slick-prev:before,
            .slick-next:before {
                color: black;
            }
            .slick-slide {
                transition: all ease-in-out .3s;
                /* opacity: .2; */
            }
            
            /* .slick-active {
                opacity: .5;
            }

            .slick-current {
                opacity: 1;
            }, */
            .featured-works {
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
            }

            .featured-works .column img {
                margin-top: 30px;
                vertical-align: middle;
                width: 100%;
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
                margin-top: 30px
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
            .title-header {
                color: #3E352C;
                font-family: Spectral;
                font-size: 42px;
                font-style: normal;
                font-weight: 400;
                line-height: 103.2%;
                margin-bottom: 10px;
                margin-top: 50px;
            },
            .subheader {
                color: #000;
                font-family: Oxygen Mono;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 150.2%;
            }
        </style>
    </head>
    <body>
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <?php the_content() ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
        <?php wp_footer() ?>
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
            $(".regular").slick({
                dots: false,
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                swipeToSlide: true,
                // adaptiveHeight: true,
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
        </script>
    </body>
</html>
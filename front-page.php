<?php get_header(); ?>
        <!-- Masthead-->
        <header class="masthead">
            <div>
                <div id="myCarousel" class="carousel slide carousel-fade caption-animate" data-bs-touch="true" data-bs-keyboard="true" data-bs-ride="carousel" data-bs-pause="false">
                <!-- <div class="indicator-number" id="indicator">1/6</div> -->
                <!-- <div class="carousel-indicators">
                    <div class="indicator-number">1/6</div>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div> -->
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item carousel-image landing-img-1 active" data-bs-interval="3000">
                        </div>
                        <div class="carousel-item carousel-image landing-img-1-5" data-bs-interval="3000">
                        </div>
                        <div class="carousel-item carousel-image landing-img-2" data-bs-interval="3000">
                            <div class="carouselCaption caption-1">
                                A creative and communal stage for artists
                            </div>
                        </div>
                        <div class="carousel-item carousel-image landing-img-3" data-bs-interval="3000">
                            <div class="carouselCaption caption-2">
                                Fusing Filipino + Japanese sensibilities
                            </div>
                        </div>     
                        <div class="carousel-item carousel-image landing-img-4" data-bs-interval="3000">
                            <div class="carouselCaption caption-3">
                                Made for the sun
                            </div>
                        </div>
                        <div class="carousel-item carousel-image landing-img-5" data-bs-interval="3000">
                            <div class="carouselCaption caption-4">
                                Holding Space for beauty
                            </div>
                        </div>
                        <!-- <div class="carousel-item carousel-image landing-img-6" data-bs-interval="3000">
                            <div class="carouselCaption caption-5">
                               Providing comfort and clarity
                            </div>
                        </div> -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon visually-hidden" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- <div>
                <img class="landing-title" src="<?php bloginfo('template_url'); ?>/assets/title.png"/>
            </div> -->
            <!-- <a href="#secondPageId"><div class="arrow animated bounce"></div></a> -->
        </header>
        <!-- Section 2 -->
        <div class="container-fluid secondPage text-center" id="secondPageId">
            <div class="secondPageCont">
                <div class="row">
                    <div class="col-12 text-center align-self-center secondPageContent">
                        <div class="secondPageTitle">A multipurpose home + studio for photoshoots, workshops, and intimate events</div>
                        <div class="mt-5 secondPageButtonContainer">
                            <div>
                                <a class="btn btn-outline-secondary button1Style">
                                    <div class="btnText"> Book now </div>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo get_permalink( get_page_by_title( 'Studios' ) ); ?>" class="btn btn-outline-secondary button2Style" style="">
                                    <div class="btnText"> Explore studios </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio-->
        <div class="container-fluid portfolio g-0" id="portfolioId">
            <div class="eye"></div>
            <?php if(have_posts()) : ?>
            <div class="row g-0">
                <?php 
                    $the_query = new WP_Query( 'tag=gallery' );
                ?>
                <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                    <?php get_template_part('content'); ?>
                <?php endwhile; ?>
            </div>
            <?php else : ?>
                <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <!-- Contact Us -->
        <!-- <div class="container-fluid contact" id="contact-section-1">
            <div class="row desc icon">
                <div class="align-start"><img src="<?php bloginfo('template_url'); ?>/assets/about-active-icon.svg" width="25" height="25"/></div>
            </div>
            <div class="row desc text">
                <h2 class="text-black">Everyone is Welcome at BALAY KО̄BО̄</h2>
            </div>
            <div class="background-film"></div>
            <div class="row pt-book-now-container">
                <div class="book-now-container ms-auto py-5 px-5">
                    <div class="pt-4 pb-4">
                        <h5 class="text-white">Looking for a space to shoot in?</h5>
                    </div>
                    <a class="btn btn-white mb-3">
                        <span class="ms-2 me-5 btnText"> book now </span>
                        <i class="bi bi-arrow-right ms-4 me-2"></i>
                    </a>
                </div>
            </div>
        </div> -->
        <!-- <div class="container-fluid contact" id="contact-section-2">
            <div class="row desc icon">
                <div class="align-start"><img src="<?php bloginfo('template_url'); ?>/assets/about-active-icon.svg" width="25" height="25"/></div>
            </div>
            <div class="row desc text">
                <h2>coming soon</h2>
            </div>
            <div class="background-film"></div>
            <div class="row pt-book-now-container">
                <div class="book-now-container ms-auto py-5 px-5">
                    <div class="pt-4 pb-4">
                        <h5 class="text-white">coming soon</h5>
                    </div>
                    <a class="btn btn-white mb-3">
                        <span class="ms-2 me-5 btnText"> book now </span>
                        <i class="bi bi-arrow-right ms-4 me-2"></i>
                    </a>
                </div>
            </div>
        </div> -->
        <div class="container-fluid text-center contactSection" id="contactSection">
            <div class="contactSectionCont">
                <div class="row">
                    <div class="col-12 text-center align-self-center contactPageContent">
                        <img src="https://balaykobo.com/wp-content/uploads/2024/01/about-active-icon.png" class="contactIcon"></img>
                        <div class="contactSectionTitle">We are BALAY KŌBŌ</div>
                        <div class="mt-5 contactPageButtonContainer">
                            <div>
                                <a class="btn btn-outline-secondary contactBtnStyle">
                                    <div class="btnText"> Book now </div>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo get_permalink( get_page_by_title( 'Studios' ) ); ?>" class="btn btn-outline-secondary button2Style" style="">
                                    <div class="btnText"> Explore studios </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container-fluid contact-section-3" id="contact-section-3">
            <div class="book-now-main-container">
                <div class="book-now-cont py-5">
                    <div class="pt-3">
                        <h6 class="text-black">ABOUT US</h6>
                    </div>
                    <div class="pb-3">
                        <h4 class="text-black">We are Balay Kōbō, check us out!</h4>
                    </div>
                    <a href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>" class="btn btn-black">
                        <span class="ms-2 me-5 btnText"> Learn more about us </span>
                        <i class="bi bi-arrow-right ms-4 me-2"></i>
                    </a>
                </div>
            </div>
        </div> -->
<?php get_footer(); ?>
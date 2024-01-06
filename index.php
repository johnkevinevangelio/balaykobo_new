<?php get_header(); ?>
        <div class="spinner-wrapper">
            <div class="d-flex justify-content-center loadingLogo">
                <div class="loadingLogo1">
                    <img src="<?php bloginfo('template_url'); ?>/assets/loadingLogo1.png">
                </div>
                <div class="loadingLogo2">
                    <img src="<?php bloginfo('template_url'); ?>/assets/loadingLogo2.png">
                </div>
            </div>
            <div class="spinner-border visually-hidden" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
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
                        <div class="carousel-item carousel-image landing-img-1 active" data-bs-interval="4500">
                        </div>
                        <div class="carousel-item carousel-image landing-img-2" data-bs-interval="2000">
                            <div class="carousel-caption caption-1">
                                A creative and communal stage for artists
                            </div>
                        </div>
                        <div class="carousel-item carousel-image landing-img-3" data-bs-interval="2000">
                            <div class="carousel-caption caption-2">
                                Fusing Filipino + Japanese sensibilities
                            </div>
                        </div>     
                        <div class="carousel-item carousel-image landing-img-4" data-bs-interval="2000">
                            <div class="carousel-caption caption-3">
                                Made for the sun
                            </div>
                        </div>
                        <div class="carousel-item carousel-image landing-img-5" data-bs-interval="2000">
                            <div class="carousel-caption caption-4">
                                Holding Space for beauty
                            </div>
                        </div>
                        <div class="carousel-item carousel-image landing-img-6" data-bs-interval="2000">
                            <div class="carousel-caption caption-5">
                               Providing comfort and clarity
                            </div>
                        </div>
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
            <div class="row" id="home">
                <div class="col-12 text-center align-self-center secondPageContent">
                    <div class="secondPageTitle">A multipurpose home + studio for photoshoots, workshops, and intimate events</div>
                    <div class="mt-5">
                        <a class="btn btn-outline-secondary me-4 button1Style" style="">
                            <div class="btnText"> Book now </div>
                        </a>
                        <a href="http://localhost/balaykobo/studios/" class="btn btn-outline-secondary button2Style" style="">
                            <div class="btnText"> Explore studios </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <hr class="hr hr-blurry" /> -->
            <!-- <div class="row" id="studio">
                <div class="col-12 text-center align-self-center">
                    <h1>studio</h1>
                    <br/>
                    <p>Elevating and holding space for beauty </p>
                    <p> Paying homage to Filipino and Japanese sensibilities </p>
                    <p> Balay Kobo takes pride in its rich architecture interiors.</p>
                </div>
            </div>
            <hr class="hr hr-blurry" />
            <div class="row" id="about">
                <div class="col-12 text-center align-self-center">
                    <h1>about</h1>
                </div>
            </div> -->
        </div>
        <!-- Gallery -->
        <!-- <div class="container-fluid gallery" id="galleryId">
            <div class="row py-5">
                <div class="col-lg-2 col-sm-auto align-self-center text-lg-center">
                    <img src="<?php bloginfo('template_url'); ?>/assets/about-active-icon.svg"/>
                </div>
                <div class="col-lg-2 col-sm-auto align-self-center">
                    <h1>Kobo</h1>
                    <h1>Gallery</h1>
                </div>
                <div class="col-lg-5 align-self-center">
                    <p> A multipurpose home + studio to bring people together in a communal space. </p>
                    <p> Gathering inspiration from her stay in Japan to paying homage to her Filipino heritage. Balay Kobo takes pride in its rich architecture interiors.</p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-lg-11 align-self-center text-lg-center ps-5">
                    <a class="btn btn-outline-secondary me-4" style="border-radius: 20px">
                        <span class="ms-2 me-5"> book now </span>
                        <i class="bi bi-arrow-right ms-4 me-2"></i>
                    </a>
                    <a class="btn btn-outline-secondary" style="border-radius: 20px">
                        <span class="ms-2 me-5"> explore studios </span>
                        <i class="bi bi-arrow-right ms-4 me-2"></i>
                    </a>
                </div>
            </div>
        </div> -->
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
        <div class="container-fluid contact" id="contact-section-1">
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
                        <span class="ms-2 me-5"> book now </span>
                        <i class="bi bi-arrow-right ms-4 me-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid contact" id="contact-section-2">
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
                        <span class="ms-2 me-5"> book now </span>
                        <i class="bi bi-arrow-right ms-4 me-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid contact-section-3" id="contact-section-3">
            <div class="book-now-main-container">
                <div class="book-now-cont py-5">
                    <div class="pt-3">
                        <h6 class="text-black">ABOUT US</h6>
                    </div>
                    <div class="pb-3">
                        <h4 class="text-black">We are Balay Kōbō, check us out!</h4>
                    </div>
                    <a class="btn btn-black">
                        <span class="ms-2 me-5"> Learn more about us </span>
                        <i class="bi bi-arrow-right ms-4 me-2"></i>
                    </a>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
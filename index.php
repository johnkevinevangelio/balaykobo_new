<?php get_header(); ?>
        <!-- Masthead-->
        <header class="masthead">
            <div>
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item carousel-image landing-img-1" data-bs-interval="5000">
                        </div>
                        <div class="carousel-item carousel-image landing-img-2" data-bs-interval="5000">
                        </div>
                        <div class="carousel-item carousel-image landing-img-3 active" data-bs-interval="5000">
                        </div>     
                        <div class="carousel-item carousel-image landing-img-4" data-bs-interval="5000">
                        </div>
                        <div class="carousel-item carousel-image landing-img-5" data-bs-interval="5000">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img class="landing-title" src="<?php bloginfo('template_url'); ?>/assets/title.png"/>
            </div>
            <div class="arrow animated bounce"></div>
        </header>
        <!-- Section 2 -->
        <div class="container-fluid secondPage vh-100 text-center" id="secondPageId">
            <div class="row" id="home">
                <div class="col-12 text-center align-self-center">
                    <h1>home</h1>
                    <br/>
                    <p>A multipurpose + studio made for the sun</p>
                </div>
            </div>
            <hr class="hr hr-blurry" />
            <div class="row" id="studio">
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
            </div>
        </div>
        <!-- Gallery -->
        <div class="container-fluid gallery" id="galleryId">
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
        </div>
        <!-- Portfolio-->
        <div class="container-fluid portfolio g-0" id="portfolioId">
            <div class="eye"></div>
            <?php if(have_posts()) : ?>
            <div class="row g-0">
                <?php while(have_posts()) : the_post(); ?>
                <div class="col-md-6">
                    <div class="position-relative">
                        <?php if(has_post_thumbnail()) : ?>
                            <!-- <img src="<?php bloginfo('template_url'); ?>/assets/landing_page/landing01.jpeg" class="img-fluid clickable-image" alt="Image 1"> -->
                            <img 
                                id="img-<?php the_ID(); ?>"
                                src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>"
                                class="img-fluid clickable-image"
                                alt="Image 1"
                            >
                        <?php endif; ?>
                        <div 
                            class="overlay-portfolio"
                            onclick="<?php if(has_excerpt()) : ?>changeImage('<?php echo get_the_excerpt(); ?>', 'img-<?php the_ID(); ?>')<?php endif; ?>"
                        >
                            <a>
                                <h3><?php the_title(); ?></h3>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <!-- <div class="col-md-6 custom-border">
                    <div class="position-relative">
                        <img src="<?php bloginfo('template_url'); ?>/assets/landing_page/landing02.jpeg" class="img-fluid clickable-image" alt="Image 2">
                        <div class="overlay-portfolio">
                            <h2>Column 2 Heading</h2>
                        </div>
                    </div>
                </div> -->
            </div>
            <?php else : ?>
                <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
        </div>
<?php get_footer(); ?>
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
        <!-- Contact Us -->
        <div class="container-fluid contact" id="contact-section-1">
            <div class="row desc pt-5 px-4">
                <div class="align-start"><img src="<?php bloginfo('template_url'); ?>/assets/about-active-icon.svg" width="20" height="20"/></div>
            </div>
            <div class="row desc pt-3 pb-5 px-4">
                <h3 class="text-black">Everyone is Welcome at BALAY KО̄BО̄</h3>
            </div>
            <div class="background-film"></div>
            <div class="row pt-book-now-container">
                <div class="book-now-container ms-auto py-5 px-5">
                    <div class="pt-3 pb-2">
                        <h5 class="text-white">Looking for a space to shoot in?</h5>
                    </div>
                    <a class="btn btn-white">
                        <span class="ms-2 me-5"> book now </span>
                        <i class="bi bi-arrow-right ms-4 me-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid contact" id="contact-section-2">
            <div class="row desc pt-5 px-4">
                <div class="align-start"><img src="<?php bloginfo('template_url'); ?>/assets/about-active-icon.svg" width="20" height="20"/></div>
            </div>
            <div class="row desc pt-3 pb-5 px-4">
                <h3>coming soon</h3>
            </div>
            <div class="background-film"></div>
            <div class="row pt-book-now-container">
                <div class="book-now-container ms-auto py-5 px-5">
                    <div class="pt-3 pb-2">
                        <h5 class="text-white">coming soon</h5>
                    </div>
                    <a class="btn btn-white">
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
        <!-- Contact-->
        <!-- <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6"> -->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <!-- <form id="contactForm" data-sb-form-api-token="API_TOKEN"> -->
                            <!-- Name input-->
                            <!-- <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div> -->
                            <!-- Email address input-->
                            <!-- <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div> -->
                            <!-- Phone number input-->
                            <!-- <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div> -->
                            <!-- Message input-->
                            <!-- <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div> -->
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <!-- <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div> -->
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <!-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> -->
                            <!-- Submit Button-->
                            <!-- <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div> -->
                        <!-- </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div>
            </div>
        </section> -->
<?php get_footer(); ?>
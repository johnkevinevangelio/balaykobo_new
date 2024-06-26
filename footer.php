        <!-- Footer-->
        <footer>
            <style>
                .footerStyle {
                    background-color: #557689;
                    padding-right: 2%;
                    padding-left: 2%;
                    padding-bottom: 20px;
                }
                .footerContentContainer {
                    padding-bottom: 3%;
                }
                .footerContent {
                    margin-top: 3%;
                }
                .footerTitle {
                    color: #EBE9DA;
                    font-family: 'Spectral';
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 400;
                    letter-spacing: 2px;
                    line-height: normal;
                }
                .footerSub a {
                    color: #F2F2E6;
                    font-family: 'Oxygen Mono';
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 200;
                    letter-spacing: 1px;
                    text-transform: uppercase;
                    padding-top: 10px;
                    padding-bottom: 5px;
                    text-decoration: none;
                }
                .footerSub i {
                    color: #F2F2E6;
                    font-family: 'Oxygen Mono';
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 200;
                    letter-spacing: 1px;
                    text-transform: uppercase;
                    padding-top: 10px;
                    padding-bottom: 5px;
                    text-decoration: none;
                }
                .footerSub a:hover {
                    text-decoration: underline;
                }
                .footerContent i {
                    color: #F2F2E6;
                    font-size: 24px;
                    font-weight: 200;
                    margin-right: 12px;
                }
                .footerCopyright {
                    color: #F2F2E6;
                    font-family: 'Oxygen Mono';
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 200;
                    letter-spacing: 1px;
                    padding-top: 10px;
                    padding-bottom: 5px;
                    text-decoration: none;
                }
                .footerAddress {
                    color: #F2F2E6;
                    font-family: "Oxygen Mono";
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 115.2%; /* 18.432px */
                    text-transform: uppercase;
                    margin-bottom: 10px;
                }
                .footerEmail {
                    color: #F2F2E6;
                    font-family: "Oxygen Mono";
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 115.2%; /* 18.432px */
                }
                @media screen and (max-width: 787px) {
                    .footerStyle {
                        padding-left: 20px;
                    }
                }
            </style>
            <div class="footerStyle container-fluid">
                <div class="d-flex flex-wrap footerContentContainer">
                    <div class="footerContent p-2">
                        <div class="footerTitle mb-2">Follow Us</div>
                        <div class="d-flex">
                            <a href="https://www.facebook.com/balaykobo.artstudio" target="_blank"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/balay.kobo/ " target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/balay-kobo/" target="_blank"><i class="bi bi-linkedin"></i></a>
                            <a href="https://www.tiktok.com/@balay.kobo" target="_blank"><i class="bi bi-tiktok"></i></a>
                        </div>
                    </div>
                    <div class="footerContent p-2">
                        <ul style="list-style-type: none; text-align: start">
                            <li class="footerTitle mb-2">Information</li>
                            <li class="footerSub"><a href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>">ABOUT US</a></li>
                            <li class="footerSub"><a href="<?php echo get_permalink( get_page_by_title( 'ContactPage' ) ); ?>">CONTACT US</a></li>
                            <li class="footerSub"><a href="<?php echo get_permalink( get_page_by_title( 'Studios' ) ); ?>">EXPLORE STUDIOS</a></li>
                            <li class="footerSub"><a href="<?php echo get_permalink( get_page_by_title( 'Book a Studio' ) ); ?>">BOOK NOW</a></li>
                            <li class="footerSub"><a href="<?php echo get_permalink( get_page_by_title( 'FAQ' ) ); ?>">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="footerContent ms-md-auto p-2 align-self-center">
                        <div class="footerAddress">66 MAHOGANY ROAD, PILAR VILLAGE, LAS PIÑAS CITY</div>
                        <div class="footerEmail">info.balaykobo@gmail.com</div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="footerCopyright align-self-end">© Balay Kōbō 2024</div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap Modal -->
        <div class="modal modalFade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div id="modalDialog" class="modal-dialog custom-modal-dialog">
                <div class="modal-content custom">
                    <div class="modal-img-cont">
                        <img src="" id="modalImage" alt="Modal Image">
                    </div>
                    <div id="modal-desc-cont" class="modal-desc mt-2 d-flex">
                        <span id="imageDescription"></span>
                    </div>
                </div>
            </div>
        </div>
        <?php wp_footer() ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
        <!-- Custom Scripts -->
        <?php include 'nav-script.php';?>
        <?php include 'services-script.php';?>
        <?php include 'partnership-script.php';?>
        <?php include 'gallery-script.php';?>
        <?php include 'book-form-script.php';?>
        <?php include 'faq-script.php';?>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_url'); ?>/css/slick/slick.js" type="text/javascript" charset="utf-8"></script>
        <?php include 'singlePage-script.php'; ?>
        <script>
            window.onload = function() {
                //check for Navigation Timing API support
                // if (window.performance) {
                //     console.info("window.performance works fine on this browser");
                // }
                // console.info(performance.navigation.type);
                // const spinnerWrapperEl = document.querySelector('.spinner-wrapper');
                // const bodyId = document.getElementById('page-top');
                // performance.navigation.type == performance.navigation.TYPE_RELOAD && document.querySelector('.masthead')
                // if (bodyId) {
                //     bodyId.style.overflowY = 'scroll';
                // }
                // if (spinnerWrapperEl) {
                //     spinnerWrapperEl.style.opacity = '0';
                //     bodyId.style.overflowY = 'scroll';
                //     spinnerWrapperEl.style.display = 'none';
                // }
                // if (spinnerWrapperEl) {

                // } else {
                //     spinnerWrapperEl.style.opacity = '0';
                //     bodyId.style.overflowY = 'scroll';
                //     spinnerWrapperEl.style.display = 'none';
                // }
            }
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
                const spinnerWrapperEl = document.querySelector('.spinner-wrapper');
                const bodyId = document.getElementById('page-top'); 
                bodyId.style.overflowY = 'hidden';
                if (document.querySelector('.masthead')) {
                    if (spinnerWrapperEl) {
                        setTimeout(() => {
                            spinnerWrapperEl.style.opacity = '0';
                            bodyId.style.overflowY = 'scroll';
                            spinnerWrapperEl.style.display = 'none';
                        }, 2000)
                    }
                } else {
                    spinnerWrapperEl.style.opacity = '0';
                    bodyId.style.overflowY = 'scroll';
                    spinnerWrapperEl.style.display = 'none';
                }
                
                // window.addEventListener("scroll", function() {
                //     var scroll = window.scrollY;
                //     var arrowElement = document.querySelector('.arrow');
                    
                //     if (scroll >= 1) {
                //         arrowElement.classList.add('fade');
                //         arrowElement.classList.remove('bounce');
                //     } else {
                //         arrowElement.classList.remove('fade');
                //         arrowElement.classList.add('bounce');
                //         arrowElement.style.animationPlayState = 'running';
                //     }
                // });
                function clickOnCarouselSlide () {
                    console.log("test")
                    // $("#myCarousel").carousel('next');
                    // document.querySelectorAll('.carousel-item').forEach(item => {
                    //     item.addEventListener('onclick', event => {
                    //         console.log('test')
                    //         document.querySelector('#myCarousel').carousel('next');
                    //     });
                    // });
                }
                document.querySelectorAll('.carousel-image').forEach(item => {
                    item.addEventListener('onclick', event => {
                        console.log('test')
                        document.querySelector('#myCarousel').carousel('next');
                    });
                });
                var myCarousel = document.getElementById('myCarousel')
                // myCarousel.addEventListener('slid.bs.carousel', function () {
                //     console.log('test')
                // })
                if (!myCarousel) return
                // myCarousel.addEventListener('slide.bs.carousel', function (e) {
                //     var totalItems = document.getElementsByClassName('carousel-item').length;
                //     var slides = this.querySelectorAll('.carousel-item');
                //     var slideFrom = Array.from(slides).findIndex(item => item.classList.contains('active'));
                //     var slideTo = e.to;
                //     var currSlide = parseInt(slideTo) + 1;
                //     document.getElementById('indicator').innerHTML = currSlide + '/' + totalItems
                // })
            });

        </script>
    </body>
</html>

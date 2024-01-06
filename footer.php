        <!-- Footer-->
        <footer>
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
        </footer>
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
                    
                    if (scroll >= 1) {
                        arrowElement.classList.add('fade');
                        arrowElement.classList.remove('bounce');
                    } else {
                        arrowElement.classList.remove('fade');
                        arrowElement.classList.add('bounce');
                        arrowElement.style.animationPlayState = 'running';
                    }
                });
                var myCarousel = document.getElementById('myCarousel')

                myCarousel.addEventListener('slide.bs.carousel', function (e) {
                    var totalItems = document.getElementsByClassName('carousel-item').length;
                    var slides = this.querySelectorAll('.carousel-item');
                    var slideFrom = Array.from(slides).findIndex(item => item.classList.contains('active'));
                    var slideTo = e.to;
                    var currSlide = parseInt(slideTo) + 1;
                    document.getElementById('indicator').innerHTML = currSlide + '/' + totalItems
                })
            });

        </script>
    </body>
</html>

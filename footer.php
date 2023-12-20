        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; <?php echo Date('Y'); ?> - <?php bloginfo('name') ?></div></div>
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

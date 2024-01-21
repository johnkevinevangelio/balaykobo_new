<script src="<?php bloginfo('template_url'); ?>/css/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".regular").slick({
            dots: false,
            infinite: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: true,
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
        // $(".slider").on("afterChange", function () {
        //     if ($(".slick-prev").hasClass("slick-disabled")) {
        //         $(".prev-btn").addClass("slick-disabled");
        //     } else {
        //         $(".prev-btn").removeClass("slick-disabled");
        //     }
        //     if ($(".slick-next").hasClass("slick-disabled")) {
        //         $(".next-btn").addClass("slick-disabled");
        //     } else {
        //         $(".next-btn").removeClass("slick-disabled");
        //     }
        // });
    });
</script>
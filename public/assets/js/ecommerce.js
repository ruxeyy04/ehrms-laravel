(function ($) {
    "use strict";
    jQuery(".feed-slider").owlCarousel({
        loop: true,
        autoplay: true,
        rewind: true,
        margin: 20,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 3000,
        smartSpeed: 800,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            575: {
                items: 1
            },
            768: {
                items: 2
            },
            1024: {
                items: 2
            },
            1366: {
                items: 2
            }
        }
    });

})(jQuery);
$(document).ready(function() {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        autoResize: false,
        resizeReInit: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    })
    $(window).resize(function() {
        var width = $(window).width();
        if (width > 991) {
            swiper.params.slidesPerView = 3;
        }
        if (width <= 991) {
            swiper.params.slidesPerView = 2;
        }
        if (width <= 468) {
            swiper.params.slidesPerView = 1;
        }
    })
    $(window).trigger('resize');
});
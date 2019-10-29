$(document).ready(function() {
    $('.love div').click(function() {
        var number = parseInt($(this).children('span').text());
        $(this).children('.fa-heart').css({ 'color': '#f17677', 'font-size': '14px', 'transition': 'all .3s ease-in' });
        number += 1;
        $(this).children('span').replaceWith('<span>' + number + '</span>');

    })
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
})
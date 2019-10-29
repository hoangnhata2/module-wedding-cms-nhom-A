$(document).ready(function() {
    $('.toggle').click(function() {
        $('.toggle').toggleClass('active-toggle');
        $('.menu').toggleClass('active-menu');
    });

    // $(window).resize(function() {
    //     var width = $(window).width();
    //     if (width > 991) {
    //         $('#menu-main-menu li.menu-item').hover(function() {
    //             $('#menu-main-menu li.menu-item').css('display', 'block');
    //         })
    //     }
    //     if (width < 991) {
    //         $('#menu-main-menu li.menu-item').hover(function() {
    //             if ($(this).children('.sub-menu').css('display', 'none')) {
    //                 $(this).children('.sub-menu').css('display', 'block');
    //             } else {
    //                 $(this).children('.sub-menu').css('display', 'none');
    //             }
    //         })
    //     }
    // })
});
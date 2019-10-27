$(document).ready(function() {
    var count = 0;
    var number = parseInt($('.love a span').text());
    $('.love a').click(function() {
        count += 1;
        if (count == 1) {
            $('.fa-heart').css({ 'color': '#f17677', 'font-size': '14px', 'transition': 'all .3s ease' });
            number += 1;
            $('.love a span').replaceWith('<span>' + number + '</span>');
        } else if (count > 1) {
            alert("Rated!!!");
        }
    })
})
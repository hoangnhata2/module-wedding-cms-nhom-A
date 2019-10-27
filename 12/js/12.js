$(document).ready(function() {
    var count = 0;
    $('.love a').click(function() {
        var number = parseInt($(this).children('span').text());
        count += 1;
        if (count == 1) {
            $(this).children('.fa-heart').css({ 'color': '#f17677', 'font-size': '14px', 'transition': 'all .3s ease' });
            number += 1;
            $(this).children('span').replaceWith('<span>' + number + '</span>');
        } else if (count > 1) {
            alert("Rated!!!");
        }
    })
})
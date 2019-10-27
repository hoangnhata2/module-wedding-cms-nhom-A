$(document).ready(function() {
    $('.love a').find().click(function() {
        var count = 0;
        var number = parseInt($(this).children('span').text());
        count += 1;
        if (this.count == 1) {
            $(this).children('.fa-heart').css({ 'color': '#f17677', 'font-size': '14px', 'transition': 'all .3s ease' });
            number += 1;
            $(this).children('span').replaceWith('<span>' + number + '</span>');
        } else if (this.count > 1) {
            alert("Rated!!!");
        }
    })
})
$(document).ready(function(){
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 15,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,

        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
})
// Preloader
/* $(function () {
  var $preloader = $("#page-preloader"),
    $spinner = $preloader.find(".spinner");
  $spinner.fadeOut();
  $preloader.delay(350).fadeOut("slow");
}); */

$(function () {
  $(".slider-for").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".slider-nav",
  });
  $(".slider-nav").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".slider-for",
    focusOnSelect: true,
    arrows: false,
  });
});

var swiper = new Swiper(".swiper-container-upside", {
  nested: true,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".home-finished .swiper-next",
    prevEl: ".home-finished .swiper-prev",
  },
});

var galleryThumbs = new Swiper(".gallery-thumbs", {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: false,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  nested: true,
});

var galleryTop = new Swiper(".gallery-top", {
  spaceBetween: 10,
  nested: true,
  thumbs: {
    swiper: galleryThumbs,
  },
});


jQuery(function ($) {
  $(".phone").mask("+7 (999) 999-9999");
});

jQuery(document).ready(function () {
  $(".header-slider").slick({
    arrows: true,
    dots: true,
    slidesToShow: 1,
    // autoplay: true,
    speed: 800,
    autoplaySpeed: 1500,
    slidesToScroll: 1,
  });
});


const $=jQuery;

$(document).ready(function () {
  $(".slider").slick({
    arrows: true,
    dots: true,
    slidesToShow: 3,
    // autoplay: true,
    speed: 1000,
    autoplaySpeed: 800,
    slidesToScroll: 3,
    // centerMode:true,
    // variableWidth: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});
$(document).ready(function () {
  $(".slider-blog").slick({
    arrows: true,
    dots: false,
    slidesToShow: 1,
    // autoplay: true,
    speed: 1000,
    autoplaySpeed: 800,
    slidesToScroll: 1,
    // centerMode:true,
    // variableWidth: true,
    nextArrow: $(".nextS"),
    prevArrow: $(".prevS"),
  });
});

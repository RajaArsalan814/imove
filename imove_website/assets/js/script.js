"use strict";

// NAVBAR
$(window).scroll(function () {
  if ($(this).scrollTop() > 50) {
    $(".header").addClass("sticky");
  } else {
    $(".header").removeClass("sticky");
  }
});

// ACCORDION
$(".accordion .card")
  .on("show.bs.collapse", function (e) {
    $(this)
      .find(".fa-plus-circle")
      .removeClass("fa-plus-circle")
      .addClass("fa-minus-circle");
  })
  .on("hidden.bs.collapse", function () {
    $(this)
      // .parent()
      .find(".fa-minus-circle")
      .removeClass("fa-minus-circle")
      .addClass("fa-plus-circle");
  });

//   TESTIMONIAL
$(".testimonial-slider").slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: false,
  dots: true,
  centerMode: true,
  variableWidth: true,
  responsive: [
    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
      },
    },
  ],
});

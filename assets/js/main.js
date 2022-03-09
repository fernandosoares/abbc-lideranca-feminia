let $ = jQuery;
$(document).ready(function () {
  $("#slides").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $("#slides-depoimentos").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  var divId;

  $(".nav-link").on("click", function () {
    divId = $(this).attr("href");
    $("html, body").animate(
      {
        scrollTop: $(divId).offset().top - 69,
      },
      250
    );
  });
});

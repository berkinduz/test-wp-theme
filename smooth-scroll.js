jQuery(document).ready(function ($) {
  $(".scroll-to").click(function (e) {
    e.preventDefault();

    var target = $(this).attr("href");
    var offset = $(target).offset().top;

    $("html, body").animate(
      {
        scrollTop: offset,
      },
      1000,
      "easeInOutExpo"
    );
  });
});

jQuery(document).ready(function ($) {
  const $scrollToTop = $("#scrollToTop");

  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $scrollToTop.addClass("visible");
    } else {
      $scrollToTop.removeClass("visible");
    }
  });

  $scrollToTop.click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      800
    );
    return false;
  });
});

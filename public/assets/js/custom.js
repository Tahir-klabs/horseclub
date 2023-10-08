$(document).ready(function () {
  switchDiv();

  $("li:first-child").addClass("first");
  $("li:last-child").addClass("last");

  $('[href="#"]').attr("href", "javascript:;");

  $(".menu-Bar").click(function () {
    $(this).toggleClass("open");
    $(".menuWrap").toggleClass("open");
    $("body").toggleClass("ovr-hiddn");
  });

  $(".loginUp").click(function () {
    $(".LoginPopup").fadeIn();
    $(".overlay").fadeIn();
  });

  $(".signUp").click(function () {
    $(".signUpPop").fadeIn();
    $(".overlay").fadeIn();
  });

  $(".closePop,.overlay").click(function () {
    $(".popupMain").fadeOut();
    $(".overlay").fadeOut();
  });

  $(".menu .menu-item-has-children").addClass("dropdown-nav ");
  $(".menu .menu-item-has-children ul.sub-menu").addClass("dropdown");

  /* Tabbing Function */
  $("[data-targetit]").on("click", function (e) {
    $(this).addClass("active");
    $(this).siblings().removeClass("active");
    var target = $(this).data("targetit");
    $("." + target)
      .siblings('[class^="box-"]')
      .hide();
    $("." + target).fadeIn();
    $(".tabViewList").slick("setPosition", 0);
  });

  // Accordian
  $(".accordian h4").click(function () {
    $(".accordian li").removeClass("active");
    $(this).parent("li").addClass("active");
    $(".accordian li div").slideUp();
    $(this).parent("li").find("div").slideDown();
  });

  $("li.dropdown-nav").hover(function () {
    $(this).children("ul").stop(true, false, true).slideToggle(300);
  });

  $(".searchBtn").click(function () {
    $(".searchWrap").addClass("active");
    $(".overlay").fadeIn("active");
    $(".searchWrap input").focus();
    $(".searchWrap input").focusout(function (e) {
      $(this).parents().removeClass("active");
      $(".overlay").fadeOut("active");
      $("body").removeClass("ovr-hiddn");
    });
  });

  // Fancybox Config
  $('[data-fancybox="gallery"]').fancybox({
    buttons: ["slideShow", "thumbs", "zoom", "fullScreen", "share", "close"],
    loop: false,
    protect: true,
  });

  $(".gallery-slider").slick({
    dots: true,
    arrows: true,
    infinite: false,
    speed: 500,
    slidesToShow: 1,
    // prevArrow: $('.prev'),
    // nextArrow: $('.next')
  });

  $("  .img-slider").slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    adaptiveHeight: true,
    // prevArrow: $('.prev'),
    // nextArrow: $('.next')
  });

  $(".leader-slider").slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    // prevArrow: $('.prev'),
    // nextArrow: $('.next')
  });

  $(".selection-slider").slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    // prevArrow: $('.prev'),
    // nextArrow: $('.next')
  });

  //     Slider For
  // $('.slider-for').slick({
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     dots: false,
  //     arrows: false,
  //     fade: true,
  //     asNavFor: '.slider-nav'
  // });
  // $('.slider-nav').slick({
  //     slidesToShow: 4,
  //     slidesToScroll: 1,
  //     asNavFor: '.slider-for',
  //     dots: false,
  //     focusOnSelect: true
  // });

  /* Top Scroll */
  // $('body').on('click', '.scrolldown-fl', function() {
  //     goToScroll('awardSec');
  // });
});

$(window).on("scroll touchmove", function () {
  $("header").toggleClass("stickyOpen", $(document).scrollTop() > 200);
});

$(window).on("load", function () {
  var currentUrl = window.location.href.substr(
    window.location.href.lastIndexOf("/") + 1
  );
  $("ul.menu li a").each(function () {
    var hrefVal = $(this).attr("href");
    if (hrefVal == currentUrl) {
      $(this).removeClass("active");
      $(this).closest("li").addClass("active");
      $("ul.menu li.first").removeClass("active");
    }
  });
});

/* RESPONSIVE JS */
if ($(window).width() < 824) {
}

function switchDiv() {
  var $window = $(window).outerWidth();
  if ($window <= 768) {
    $(".topAppendTxt").each(function () {
      var getdtd = $(this).find(".cloneDiv").clone(true);
      $(this).find(".cloneDiv").remove();
      $(this).append(getdtd);
    });
  }
}

function goToScroll(e) {
  $("html, body").animate(
    {
      scrollTop: $("." + e).offset().top,
    },
    1000
  );
}

settings = {
  //Model Popup
  objModalPopupBtn1: ".modalButton1",
  objModalPopupBtn2: ".modalButton2",
  objModalPopupBtn3: ".modalButton3",
  objModalCloseBtn: ".overlay, .closeBtn",
  objModalDataAttr: "data-popup",
};
$(settings.objModalPopupBtn1).bind("click", function () {
  if ($(this).attr(settings.objModalDataAttr)) {
    var strDataPopupName = $(this).attr(settings.objModalDataAttr);

    //Fade In Modal Pop Up
    $(".overlay, #" + strDataPopupName).fadeIn();
  }
});

$(settings.objModalPopupBtn2).bind("click", function () {
  if ($(this).attr(settings.objModalDataAttr)) {
    var strDataPopupName = $(this).attr(settings.objModalDataAttr);

    //Fade In Modal Pop Up
    $(".overlay, #" + strDataPopupName).fadeIn();
  }
});

$(settings.objModalPopupBtn3).bind("click", function () {
  if ($(this).attr(settings.objModalDataAttr)) {
    var strDataPopupName = $(this).attr(settings.objModalDataAttr);

    //Fade In Modal Pop Up
    $(".overlay, #" + strDataPopupName).fadeIn();
  }
});

//On clicking the modal background
$(settings.objModalCloseBtn).bind("click", function () {
  $(".modal").fadeOut();
});

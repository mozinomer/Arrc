$(function () {
    "use strict";

    /*------ MENU Fixed ------*/
    $(window).scroll(function () {
        var $scroll = $(window).scrollTop();
        var $navbar = $(".navbar");
        if ($scroll > 100) {
            $navbar.addClass("scroll-nav");
        } else {
            $navbar.removeClass("scroll-nav");
        }
    });

 // banner slider
 $(function () {
    var owl = $('.main-slider');
    owl.owlCarousel({
        margin: 0,
        loop:true,
        dots: false,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        items: 1,
        smartSpeed: 500,
        navText: ["<span class='fa fa-angle-left'></span>", "<span class='fa fa-angle-right'></span>"],
        onInitialized: counter, //When the plugin has initialized.
        onTranslated: counter //When the translation of the stage has finished.
    });

    function counter(event) {
        var element = event.target; // DOM element, in this example .owl-carousel
        var items = event.item.count; // Number of items
        var item = event.item.index + 1; // Position of the current item
        $('#counter').html("<span class='firs_number'>" + "0" + item + "</span>" + "<span  class='second_number'> / </span> " + "<span class='second_number'>" + "0" + items + "</span>");

    }
});
var swiper = new Swiper('.bio-swiper', {
    spaceBetween: 40,
    slidesPerView:4,
    pagination: {
      el: '.swiper-pagination',
      type: 'progressbar',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      500: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 4,
      },
    }
  });
  var swiper = new Swiper('.game-swiper', {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    }
  });
  var swiper = new Swiper('.video-swiper', {
    slidesPerView: 2,
    spaceBetween: 20,
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2,
      },
    
    }
  });
  $('.company-owl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    items:1,
    navText: ["<span class='fa fa-angle-left'></span>", "<span class='fa fa-angle-right'></span>"],
    dots:false,
});
$('.result-slider').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  items:1,
  navText: ["<span class='fa fa-angle-left'></span>", "<span class='fa fa-angle-right'></span>"],
  dots:false,

});
$(document).ready(function(){

  $(".video").slice(0, 6).show();
  $(".load-more-btn a").on("click", function(e){
    e.preventDefault();
    $(".video:hidden").slice(0, 3).slideDown();
    if($(".video:hidden").length == 0) {
      $(".load-more-btn a").text("No More Videos");
    }
  });

});
});




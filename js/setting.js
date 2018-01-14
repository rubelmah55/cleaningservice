$(document).ready(function(){
  $('.serv').slick({
    dots: false,
    infinite: false,
    speed: 3000,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.reviews').slick({
     autoplay: true, 
    dots: false,
    infinite: true,
    speed: 3000,
    slidesToShow: 1,
    adaptiveHeight: true

     });

// navbar
var $mainContainer = $('.main-container');

  $('.navbar-toggle[data-toggle="sidebar"]').click(function(){
    if($mainContainer.hasClass("open")) {
      $mainContainer.removeClass("open");
    }
    else {
      $mainContainer.addClass("open");
    }
  });

  $('.protective-glass').click(function(){
    $mainContainer.removeClass("open");
  }); 

/**
   * Smooth scroll
   *
   */
  $(function() {
    $('.smoothScroll, a').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 80
          }, 1000);
          return false;
        }
      }
    });
  });

// Photo Gallery
    $('.venobox').venobox();
});  

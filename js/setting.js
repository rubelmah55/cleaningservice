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

    $('.venobox').venobox();
});  

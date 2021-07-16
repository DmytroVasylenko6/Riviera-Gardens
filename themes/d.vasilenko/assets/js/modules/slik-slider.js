
//homepage slider

  $('.js-reviews-slider').slick({
    infinite: true,
    arrows: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    variableWidth: false,
    prevArrow: '<button type="button" class="slick-prev"></button>',
    nextArrow: '<button type="button" class="slick-next"></button>',
    autoplay: true,
    speed: 2000,
    autoplaySpeed: 3000,
    
    responsive: [
      {
        breakpoint: 1681,
        settings: {
          slidesToShow: 3.5,
        }
      },
    
      {
        breakpoint: 1249,
        settings: {
          slidesToShow: 3,
        }
      },

      {
        breakpoint: 1025,
        settings: {
          swipe: true,
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },

      {
        breakpoint: 769,
        settings: {
          swipe: true,
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
       {
        breakpoint: 561,
        settings: {
          swipe: true,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.js-hero-slider').slick({
    infinite: true,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: false,
    autoplay: false,
    speed: 1000,
    // autoplaySpeed: 3000,
    
  });

  
  
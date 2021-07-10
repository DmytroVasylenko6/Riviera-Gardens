
//homepage slider
if ($('html[dir="rtl"]').length) {

  $('.js-home-slider').slick({
    infinite: true,
    arrows: false,
    slidesToShow: 7,
    slidesToScroll: 1,
    variableWidth: false,
    autoplay: true,
    autoplaySpeed: 3000,
    rtl: true,
    responsive: [
      {
        breakpoint: 1248,
        settings: {
          slidesToShow: 6,
          slidesToScroll: 1,
        }
      },
    
      {
        breakpoint: 990,
        settings: {
          swipe: true,
          slidesToShow: 4,
          slidesToScroll: 1,
        }
      },

      {
        breakpoint: 640,
        settings: {
          swipe: true,
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },

      {
        breakpoint: 480,
        settings: {
          swipe: true,
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });

    $('.js-feedback-slider').slick({
    // infinite: true,
    arrows: false,
    slidesToShow: 4.5,
    slidesToScroll: 1,
    variableWidth: false,
    autoplay: true,
    autoplaySpeed: 3000,
    rtl: true,
    responsive: [
      {
        breakpoint: 1440,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        }
      },
    
      {
        breakpoint: 990,
        settings: {
          slidesToShow: 3.5,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          swipe: true,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  
} else {
  $('.js-home-slider').slick({
    infinite: true,
    arrows: false,
    slidesToShow: 7,
    slidesToScroll: 1,
    variableWidth: false,
    autoplay: true,
    autoplaySpeed: 3000,
    rtl: false,
    responsive: [
      {
        breakpoint: 1248,
        settings: {
          slidesToShow: 6,
          slidesToScroll: 1,
        }
      },
    
      {
        breakpoint: 990,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        }
      },

      {
        breakpoint: 640,
        settings: {
          swipe: true,
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },

         {
        breakpoint: 480,
        settings: {
          swipe: true,
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });

    $('.js-feedback-slider').slick({
    // infinite: true,
    arrows: false,
    slidesToShow: 4.5,
    slidesToScroll: 1,
    variableWidth: false,
    autoplay: true,
    autoplaySpeed: 3000,
    rtl: false,
    responsive: [
      {
        breakpoint: 1440,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        }
      },
    
      {
        breakpoint: 990,
        settings: {
          slidesToShow: 2.5,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
       {
        breakpoint: 480,
        settings: {
          swipe: true,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

}
  
  
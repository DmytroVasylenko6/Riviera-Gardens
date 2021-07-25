import Swiper from 'swiper/bundle';


const swiper = new Swiper(".mySwiper", {
  speed: 2000,
  slidesPerView: 'auto',
  loop: true,
  preloadImages: false,
  lazy: true,
  watchSlidesVisibility: true,
  autoplay: {
           delay: 4500,
      },
  pagination: {
    el: ".swiper-pagination",
     clickable: true,
  },

  });


 
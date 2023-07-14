import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js';

var slideContainerNosotros = document.querySelector('.mySwiperNosotros');
var slideContainerActivity1 = document.querySelector('.mySwiperActivity1');
var slideContainerActivity2 = document.querySelector('.mySwiperActivity2');
var slideContainerActivity3 = document.querySelector('.mySwiperActivity3');
var slideContainerActivity4 = document.querySelector('.mySwiperActivity4');
var slideContainerDonation = document.querySelector('.mySwiperDonation');


// Slider per view

var swiper4 = new Swiper(slideContainerNosotros, {
    slidesPerView: 1,
    spaceBetween: 10,
    effect: "fade",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    autoplay:{
        delay:5000,
        disableOnInteraction: false,
    },

    loop: true,

  });

var swiperActivity1 = new Swiper(slideContainerActivity1, {
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  autoplay:{
      delay:5000,
      disableOnInteraction: false,
  },

  loop: true,

  breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
      },

      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },

      768: {
          slidesPerView: 2,
          spaceBetween: 30,
      },

      1024: {
          slidesPerView: 3,
          spaceBetween: 40,
      },

      1280: {
        slidesPerView: 4,
        spaceBetween: 40,
      }
    }
});

var swiperActivity2 = new Swiper(slideContainerActivity2, {
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  autoplay:{
      delay:5000,
      disableOnInteraction: false,
  },

  loop: true,

  breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
      },

      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },

      768: {
          slidesPerView: 2,
          spaceBetween: 30,
      },

      1024: {
          slidesPerView: 3,
          spaceBetween: 40,
      },

      1280: {
        slidesPerView: 4,
        spaceBetween: 40,
      }
    }
});

var swiperActivity3 = new Swiper(slideContainerActivity3, {
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  autoplay:{
      delay:5000,
      disableOnInteraction: false,
  },

  loop: true,

  breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
      },

      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },

      768: {
          slidesPerView: 2,
          spaceBetween: 30,
      },

      1024: {
          slidesPerView: 3,
          spaceBetween: 40,
      },

      1280: {
        slidesPerView: 3,
        spaceBetween: 40,
      }
    }
});

var swiperActivity4 = new Swiper(slideContainerActivity4, {
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  autoplay:{
      delay:5000,
      disableOnInteraction: false,
  },

  loop: true,

  breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
      },

      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },

      768: {
          slidesPerView: 2,
          spaceBetween: 30,
      },

      1024: {
          slidesPerView: 3,
          spaceBetween: 40,
      },

      1280: {
        slidesPerView: 4,
        spaceBetween: 40,
      }
    }
});

var swiperDonation = new Swiper(slideContainerDonation, {
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },

  autoplay:{
      delay:5000,
      disableOnInteraction: false,
  },

  loop: true,

  breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 10,
      },

      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },

      768: {
          slidesPerView: 3,
          spaceBetween: 20,
      },

      1024: {
          slidesPerView: 4,
          spaceBetween: 20,
      },

      1280: {
        slidesPerView: 6,
        spaceBetween: 20,
      }
    }
});

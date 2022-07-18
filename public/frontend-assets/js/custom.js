const swiper = new Swiper('.swiper', {
  loop: true,
    speed: 1000,

    lazy: true,
   
    autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },
});
const desSswiper = new Swiper('.swiperdestinasi', {
  loop: true,
    speed: 1000,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    lazy: true,
   
});
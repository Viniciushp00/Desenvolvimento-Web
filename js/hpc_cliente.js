var swiper = new Swiper(".mySwiper", {
  slidesPerView: getSlidesPerView(),
  spaceBetween: 30,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

function getSlidesPerView() {
  if (window.innerWidth < 700) {
    return 1;
  } else {
    return 3;
  }
}

window.addEventListener("resize", function() {
  swiper.params.slidesPerView = getSlidesPerView();
  swiper.update();
});
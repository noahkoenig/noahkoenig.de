var swiper = new Swiper(".mySwiper", {
    allowTouchMove: false,
    autoplay: {
        delay: 12000,
        disableOnInteraction: false,
      },
    centeredSlides: true,
    direction: "horizontal",
    loop: true,
    loopPreventsSliding: false,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    spaceBetween: 0,
    speed: 1000
});
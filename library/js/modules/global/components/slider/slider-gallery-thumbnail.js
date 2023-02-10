import Swiper, {Autoplay, Thumbs, FreeMode} from 'swiper';
import 'swiper/css/bundle';
Swiper.use([Autoplay, Thumbs, FreeMode]);

function Swipers(elm) {
  if (document.querySelector(elm)) {

    const thumbnailSwiper = new Swiper("#image-slider-gallery-thumbnail .js-thumbnail", {
      spaceBetween: 16,
      slidesPerView: 5,
      freeMode: true,
      watchSlidesProgress: true,
      navigation: {
        nextEl: "#image-slider-gallery-thumbnail .swiper-button-next",
        prevEl: "#image-slider-gallery-thumbnail .swiper-button-prev",
      },
    });

    const mainSwiper = new Swiper("#image-slider-gallery-thumbnail .js-image-thumbnail", {
      spaceBetween: 16,
      navigation: {
        nextEl: "#image-slider-gallery-thumbnail .swiper-button-next",
        prevEl: "#image-slider-gallery-thumbnail .swiper-button-prev",
      },
      thumbs: {
        swiper: thumbnailSwiper,
      },
    });

    thumbnailSwiper.on('activeIndexChange', (e) => {
      mainSwiper.slideTo(e.realIndex, 300, false)
    });
  }
}

export default { Swipers };

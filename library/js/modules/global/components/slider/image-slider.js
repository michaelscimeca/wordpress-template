import Swiper, {Autoplay, FreeMode} from 'swiper';
import 'swiper/css/bundle';
Swiper.use([Autoplay,  FreeMode]);

function Swipers(elm) {
  if (document.querySelector(elm)) {
    const swiper = new Swiper("#js-image-slider-gallery .swiper", {
      spaceBetween: 16,
      navigation: {
        nextEl: "#js-image-slider-gallery .swiper-button-next",
        prevEl: "#js-image-slider-gallery .swiper-button-prev",
      },
    });
  }
}

export default { Swipers };

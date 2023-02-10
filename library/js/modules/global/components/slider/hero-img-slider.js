import Swiper from 'swiper';
import 'swiper/css/bundle';

function Swipers(elm) {
  if (document.querySelector(elm)) {
    const swiper = new Swiper('#js-home-image-slider', {
      speed: 1800,
      loop: true,
      autoplay: true,
      slidesPerView: 1,
    });
  }
}

export default { Swipers };

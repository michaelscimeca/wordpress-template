import Swiper, {Autoplay} from 'swiper';
import 'swiper/css/bundle';
Swiper.use([Autoplay]);

function Swipers(elm) {
  if (document.querySelector(elm)) {
    const swiper = new Swiper('#js-quote-slider.swiper', {
      slidesPerView: 'auto',
      autoplay: true,
      loop: true,
      speed: 6000,
      autoplayDisableOnInteraction: false,
    });
  }
}

export default { Swipers };

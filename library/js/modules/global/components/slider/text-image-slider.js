import Swiper, {Navigation, Autoplay, Pagination} from 'swiper';
import 'swiper/css/bundle';
Swiper.use([Autoplay, Pagination, Navigation]);

function Swipers(elm) {
  if (document.querySelector(elm)) {
    const swiper = new Swiper('#js-text-image-slider .swiper', {
      modules: [Navigation, Pagination],
      slidesPerView: 1,
      autoplay: true,
      loop: true,
      speed: 6000,
      autoplayDisableOnInteraction: false,
      pagination: {
       el: '.swiper-pagination',
       type: 'bullets',
     },
     navigation: {
       nextEl: "#js-text-image-slider .swiper-button-next",
       prevEl: "#js-text-image-slider .swiper-button-prev",
     }
    });
  }
}

export default { Swipers };

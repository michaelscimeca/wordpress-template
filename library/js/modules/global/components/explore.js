import Swiper from 'swiper';
import 'swiper/css/bundle';

function Swipers(elm) {
  if (document.querySelector(elm)) {
  const swiper = new Swiper('#js-explore .swiper', {
    speed: 1800,
    slidesPerView: 5,
   });
 }
}

export default { Swipers };

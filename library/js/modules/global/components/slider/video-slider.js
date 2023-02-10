const Plyr = require('plyr');
import Swiper from 'swiper';
import 'swiper/css/bundle';
function Swipers(elm) {
  if (document.querySelector(elm)) {
    let players = [];
    let start = true;
    const swiper = new Swiper('#video-slider-gallery .swiper', {
      speed: 1800,
      slidesPerView: 1,
      loop: true,
      on: {
        init: function () {
          const videos = document.querySelectorAll('#video-slider-gallery .js-player');
          videos.forEach((item, i) => {
            let player = new Plyr(item, {
              controls: [],
              autoplay: false,
              autopause: true,
              muted: true,
              clickToPlay: false,
              loop: {
                active: true
              }
            })
            players.push(player)
          });
        },
        slideChange: function(e) {
          if(start !== true) {
            players[e.activeIndex].play();
          } else {
            start = false;
            setTimeout(()=>{
              players[players.length - 3].play();
            },1000)
          }
        },
      },
    });
  }
}

export default { Swipers };

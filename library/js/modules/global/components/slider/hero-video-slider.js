import Swiper from 'swiper';
import Vimeo from '@vimeo/player';
import 'swiper/css/bundle';
function Swipers(elm) {
  const iframe = document.querySelector('iframe');

  if (document.querySelector(elm)) {
    let players = [];
    let start = true;

    const swiper = new Swiper('#js-hero-video-slider .swiper', {
      speed: 1800,
      slidesPerView: 1,
      loop: true,
            autoplay: {
        delay: 5000,
      },
      on: {
        init: function () {
          const videos = [...document.querySelectorAll('#js-hero-video-slider #js-player')]
          videos.forEach((item, i) => {
            let playera = new Vimeo(item, {
              background: true,
              autoplay: true,
              playsinline: true,
              autopause: false,
              muted: true,
              loop: true,
              controls: false,
              dnt: false,
              interactive_params: 1,
            });
            console.log(playera)
            players.push( playera)
          });
        },
        slideChange: function(e) {
          if(players.length >= 1) {
            const activeSlide = players[e.activeIndex];
            console.log(players)
            //           console.log(players[[activeSlide]],e.activeIndex,activeSlide)
            // ;
            //           players[activeSlide].play();

          }


          // if(start !== true) {
          //   players[e.activeIndex + 1].play();
          //   // console.log(players[e.activeIndex + 1])
          // } else {
          //   start = false;

          //   setTimeout(()=>{
          //     players[1].play();
          //   },500)
          // }
        },
      },
    });
  }
}

export default { Swipers };

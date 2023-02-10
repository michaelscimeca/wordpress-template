import Highway from '@dogstudio/highway';
import imagesLoaded from 'imagesLoaded';
const FontFaceObserver = require('fontfaceobserver');
const observeVisibility = require('../modules/global/observe-visibility');
const main = document.querySelector('#app main');

let onScroll;
const preloadImages = () => {
  return new Promise((resolve, reject) => {
    imagesLoaded(document.querySelectorAll('img'), { background: true }, resolve);
  });
};

class Home extends Highway.Renderer {
  // Hooks/methods
  onEnter () {
    main.scrollTo(0, 0);
  }

  onLeave () {
  }

  onEnterCompleted () {
    const font = new FontFaceObserver('Merriweather');
    const hiddenEls = document.querySelectorAll('.js-ae');
    let lastScrollTop = 0;
    let scrollDir = 'down';
    rotateIcon.init('#spin', '#rotation');

    // Listen for @font-face to be loaded to transform text
    font.load().then(function () {

    });

    for (let i = 0; i < hiddenEls.length; i++) {
      observeVisibility.default.bind(hiddenEls[i], {
        callback: visibilityChanged
      });
    }

    preloadImages().then(() => {
      for (let i = 0; i < fireImmediately.length; i++) {
        fireImmediately[i].classList.add('js-show');
      }
    });

    function visibilityChanged (isVisible, el) {
      if (isVisible) {
        el.classList.add('js-show');
      } else {
        // el.classList.remove('js-show');
      }

      if (isVisible && scrollDir === 'down') {
        el.classList.add('js-show');
      } else if (!isVisible && scrollDir === 'up') {
        el.classList.remove('js-show');
      } else if (isVisible) {
        el.classList.add('js-show');
      }
    }

    onScroll = () => {
      const st = main.scrollTop;
      if (st > lastScrollTop) {
        scrollDir = 'down';
      } else {
        scrollDir = 'up';
      }
      lastScrollTop = st <= 0 ? 0 : st;
    };

    main.addEventListener('scroll', onScroll);
  }

  onLeaveCompleted () {
    main.removeEventListener('scroll', onScroll);
  }
}

// Don`t forget to export your renderer
export default Home;

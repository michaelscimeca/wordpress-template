const $ = require('jquery');
const FontFaceObserver = require('fontfaceobserver');

module.exports = (elm) => {
  if (document.querySelector(elm)) {
    const font = new FontFaceObserver('Merriweather');
    font.load().then(function () {
      const e = $('.js-scroll-text');
      for (let i = 0; i < 1; i++) {
        e.clone().insertAfter(e).addClass('duplicate-after');
        e.clone().insertBefore(e).addClass('duplicate-before');
      }
      const a = $('.js-scroll-text');
      a.addClass('run')
    });
  }
}

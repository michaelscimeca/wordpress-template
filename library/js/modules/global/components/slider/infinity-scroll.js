const $ = require('jquery');
const slick = require('slick-carousel');

module.exports = (elm) => {
  if (document.querySelector(elm)) {
    let slider = $('#js-infinity-scroll');

    slider.on('init', function(slick) {
    });

    slider.slick({
      speed: 9000,
      autoplay: true,
      autoplaySpeed: 0,
      cssEase: 'linear',
      slidesToShow: 1,
      slidesToScroll: 1,
      variableWidth: true,


    });
  }
}

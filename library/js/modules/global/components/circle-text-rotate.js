const emitter = require('tiny-emitter/instance');

module.exports = (elm) => {
  if (document.querySelector(elm)) {
    const element = document.querySelector("#js-rotate");
    const maxRotation = 12 * 360;
    const maxScroll = document.body.scrollHeight - window.innerHeight;

    window.addEventListener("scroll", function() {
      const scrollPercent = window.scrollY / maxScroll;
      const rotation = scrollPercent * maxRotation;
      element.style.transform = `rotate(${rotation}deg)`;
    });

    // emitter.on('some-event', function (y) {
    //   // console.log(arg1,-((arg1 / (pageHeight - viewportHeight)) * (textWidth - viewportWidth)) + "px")
    //     const scrollPercent = y / maxScroll;
    //     const rotation = scrollPercent * maxRotation;
    //     element.style.transform = `rotate(${rotation}deg)`;
    // });
  }
}

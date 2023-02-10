const emitter = require('tiny-emitter/instance');

const InView = (elm) => {
  if (document.querySelector(elm)) {
    const element = document.querySelector(".js-bg-scroll");
    const masks = document.querySelectorAll('#mask-clips-container li .box');

    const observer = new IntersectionObserver((entries) => {
      const entry = entries[0];
      const percentageVisible = (entry.intersectionRatio * 100).toFixed(2);
      // console.log(mask.toFixed(2) + '%')
      let a = (parseFloat(percentageVisible) / 100) * 100;
      // console.log(a)
      // element.style.setProperty("--my-variable", newValue.toFixed(2));
      // element.style.setProperty("--clip-mask", a + '%');
      masks.forEach((item, i) => {
          item.style.width = a + '%';
      });
    });

    observer.observe(element);
    // window.addEventListener("scroll", () => {
    //   observer.unobserve(element);
    //   observer.observe(element);
    // });

    emitter.on('some-event', function (y) {
      observer.unobserve(element);
      observer.observe(element);
    });
  }
}

export default InView;

import LocomotiveScroll from 'locomotive-scroll';
import gsap, { ScrollTrigger } from "gsap";
import emitter from 'tiny-emitter/instance';

gsap.registerPlugin(ScrollTrigger);

function Locomotive() {
  const font = new FontFaceObserver('Merriweather');
  font.load().then(() => {
    const scroll = new LocomotiveScroll({
      el: document.querySelector('#app'),
      smooth: true
    });
    scroll.on('scroll', (args) => {
      emitter.emit('some-event', args.scroll.y);
    });
  });
}

export default { Locomotive };
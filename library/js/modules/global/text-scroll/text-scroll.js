import gsap from "gsap";
import { ScrollTrigger } from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);
const emitter = require('tiny-emitter/instance');

const Text_scroll = (elm,s) => {
  if (document.querySelector(elm)) {
    const text = document.querySelector('#js-scroll-text .text');
    const textElement = document.querySelector('#js-scroll-text');
    const pageHeight = document.documentElement.scrollHeight;
    let textWidth = text.getBoundingClientRect().width;
    let viewportHeight = window.innerHeight;
    let viewportWidth = window.innerWidth;

    window.addEventListener('resize', (e) => {
      textWidth = text.getBoundingClientRect().width;
      viewportHeight = window.innerHeight;
      viewportWidth = window.innerWidth;
    })
// 
    // window.addEventListener('scroll', () => {
    //   let scrolled = document.documentElement.scrollTop;
    //
    //   // console.log(arg1,-((arg1 / (pageHeight - viewportHeight)) * (textWidth - viewportWidth)) + "px")
    //   if(textElement){
    //     gsap.to(textElement, {
    //       ease: 'linear',
    //       x: -((scrolled / (pageHeight - viewportHeight)) * (textWidth - viewportWidth)) + "px"
    //     });
    //   }
    // });

    emitter.on('some-event', function (y) {
      // console.log(arg1,-((arg1 / (pageHeight - viewportHeight)) * (textWidth - viewportWidth)) + "px")
      if(textElement){
        gsap.to(textElement, {
          ease: 'linear',
          x: -((y / (pageHeight - viewportHeight)) * (textWidth - viewportWidth)) + "px"
        });
      }
    });
  }
}

export default Text_scroll;

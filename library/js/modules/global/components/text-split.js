import SplitType from 'split-type';
import gsap from "gsap";
const FontFaceObserver = require('fontfaceobserver');

function splitText(elm) {
  if (document.querySelector(elm)) {
    const font = new FontFaceObserver('Merriweather');
    font.load().then(function () {
      const aboveHeadlines = [...document.querySelectorAll('.above-headline')];
      const headlines = [...document.querySelectorAll('.js-headline-split-text.column')];
      const headings = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'];
      const p = ['p'];
      let aboveHeadline;

      let headline;
      let paragraph;
      let htag;
      let ptag;

      // aboveHeadlines.forEach((item) => {
      //   aboveHeadline = new SplitType(item);
      //   aboveHeadline.words.forEach((word, i) => word.classList.add(`word-${i}`));
      //   aboveHeadline.chars.forEach((char, i) => char.classList.add(`char-${i}`));
      // });

      headlines.forEach((item) => {
        htag = headings.find(tag=>item.querySelector(tag));
        // ptag = p.find(tag=>item.querySelector(tag));

        headline = new SplitType(htag);
        // console.log(headline)
        // // paragraph = new SplitType(ptag);
        // gsap.set(headline.chars, {
        //   'will-change': 'opacity, transform',
        //   opacity: 0,
        //   rotationX: -90,
        //   yPercent: 50
        // });
        // gsap.to(headline.chars, {
        //   ease: 'power1.inOut',
        //   opacity: 1,
        //   rotationX: 0,
        //   yPercent: 0,
        //   stagger: {
        //     each: 0.03,
        //     from: 0
        //   },
        // });
      //   //
      //   // gsap.set(paragraph.chars, {
      //   //   'will-change': 'opacity, transform',
      //   //   opacity: 0,
      //   //   xPercent: () => gsap.utils.random(-200,200),
      //   //   yPercent: () => gsap.utils.random(-150,150)
      //   // });
      //   // gsap.to(paragraph.chars, {
      //   //   ease: 'power1.inOut',
      //   //   duration: 300,
      //   //   opacity: 1,
      //   //   xPercent: 0,
      //   //   yPercent: 0,
      //   //   stagger: { each: 0.0005, grid: 'auto', from: 'random'},
      //   // });
      //
      //
      //   console.log(headline.chars)
      //
      //   // headline.chars.forEach((chars, i) => {
      //   //   console.log(chars)
      //   // });
      //
      //
      //   // headline.words.forEach((word, i) => word.classList.add(`word-${i}`));
      //   // headline.chars.forEach((chars, i) => chars.classList.add(`char-${i}`));
      //
      //   // paragraph.words.forEach((word, i) => word.classList.add(`word-${i}`));
      //   // paragraph.chars.forEach((chars, i) => chars.classList.add(`char-${i}`));
      //
      //   // console.log(paragraph.chars)
      //   // console.log(headline, paragraph)
      });

      //
      // const chars = document.querySelectorAll('h1 .char, h2 .char h3 .char');
      // console.log(chars);
      //


      // gsap.set(chars, {
      //   'will-change': 'transform',
      //   transformOrigin: '50% 0%',
      //   scaleY: 0
      // });
      // gsap.to(chars, {
      //   ease: 'back',
      //   opacity: 1,
      //   scaleY: 1,
      //   yPercent: 0,
      //   stagger: 0.03,
      // });


      //
      // gsap.set(chars, {
      //   'will-change': 'opacity, transform',
      //   x: (position,_,arr) => 150*(position-arr.length/2)
      // });
      // gsap.to(chars, {
      //   ease: 'power1.inOut',
      //   x: 0,
      //   stagger: {
      //     grid: 'auto',
      //     from: 'center'
      //   },
      // });


      //
      // gsap.set(chars, {
      //   'will-change': 'opacity, transform',
      //   opacity: 0,
      //   xPercent: () => gsap.utils.random(-200,200),
      //   yPercent: () => gsap.utils.random(-150,150)
      // });
      // gsap.to(chars, {
      //   ease: 'power1.inOut',
      //   opacity: 1,
      //   xPercent: 0,
      //   yPercent: 0,
      //   stagger: { each: 0.05, grid: 'auto', from: 'random'},
      // });
      //


      // gsap.set(chars, {
      //   opacity: 0
      // });
      // chars.forEach((char, position) => {
      //   let initialHTML = char.innerHTML;
      //
      //   gsap.to(char, {
      //     duration: 0.03,
      //     innerHTML: () => lettersAndSymbols[Math.floor(Math.random() * lettersAndSymbols.length)],
      //     repeat: 1,
      //     repeatRefresh: true,
      //     opacity: 1,
      //     repeatDelay: 0.03,
      //     delay: (position+1)*0.18,
      //     onComplete: () => gsap.set(char, {innerHTML: initialHTML, delay: 0.03}),
      //     scrollTrigger: {
      //       trigger: title,
      //       start: 'top bottom',
      //       end: 'bottom center',
      //       toggleActions: "play resume resume reset",
      //       onEnter: () => gsap.set(char, {opacity: 0})
      //     }
      //   });
      // }

      // const chars = title.querySelectorAll('.char');
      //  wrapElements(chars, 'span', 'char-wrap');
      //
      //  gsap.set(chars, {
      //      'will-change': 'transform',
      //      xPercent: -250,
      //      rotationZ: 45,
      //      scaleX: 6,
      //      transformOrigin: '100% 50%'
      //  });
      //  gsap.to(chars, {
      //      duration: 1,
      //      ease: 'power2',
      //      xPercent: 0,
      //      rotationZ: 0,
      //      scaleX: 1,
      //      stagger: -0.06,
      //      scrollTrigger: {
      //          trigger: title,
      //          start: 'top bottom+=10%',
      //          end: 'bottom top+=10%',
      //          scrub: true
      //      }
      //  });
    });

  }
}
export default { splitText };

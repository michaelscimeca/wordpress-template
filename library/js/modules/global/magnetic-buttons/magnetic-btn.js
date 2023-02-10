import gsap from "gsap";

const Magnetic_btn = (elm) => {
  if(document.querySelector(elm)) {
    const magneticAreas = document.querySelectorAll('.magnetic-area');
    const magneticContents = document.querySelectorAll('.magnetic-content');

    function parallaxIt(e, target, movement = 1) {
      const boundingRect = target.getBoundingClientRect();
      const relX = e.pageX - boundingRect.left;
      const relY = e.pageY - boundingRect.top;
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      gsap.to(target, {
        x: (relX - (boundingRect.width / 2)) * movement,
        y: (relY - boundingRect.height/2 - scrollTop) * movement,
        ease: "power1",
        duration: 0.6
      });
    }

    function callParallax(e, i) {
      parallaxIt(e, magneticContents[i]);
    }

    magneticAreas.forEach((item, i) => {
      item.addEventListener('mousemove', function(e){
        callParallax(e, i);
      });

      item.addEventListener('mouseleave', function(){
        gsap.to(magneticContents[i], {
          scale:1,
          x: 0,
          y: 0,
          ease: "power3",
          duration: 0.6
        });
      });
    });
  };
};
export default Magnetic_btn;

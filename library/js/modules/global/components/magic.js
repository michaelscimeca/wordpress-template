const Magic = (elm, timeout = 1000, interval = 1000) => {
  if (document.querySelector(elm)) {

    const magic = document.querySelector(elm);
    const rand = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;

    const magicStars = [...Array(5)].map(() => {
      const magicStar = document.createElement("span");
      magicStar.classList.add("magic-star");
      magicStar.innerHTML = '<svg viewBox="0 0 512 512"><path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" /></svg>';
      return magicStar;
    });

    magic.append(...magicStars);

    const animate = star => {
      star.style.setProperty("--star-left", `${rand(-10, 100)}%`);
      star.style.setProperty("--star-top", `${rand(-40, 50)}%`);

      star.style.animation = "none";
      star.offsetHeight;
      star.style.animation = "";
    }

    magicStars.forEach((star, index) => {
      setTimeout(() => {
        animate(star);
        setInterval(() => animate(star), interval);
      }, timeout + index * (interval / 4));
    });
  }
};

export default { Magic };


// const Magic = (elm, timeout = 1000, interval = 1000) => {
//   const magic = document.querySelector(elm);
//   const rand = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;
//
//   const magicStars = [...Array(4)].map(() => {
//     const magicStar = document.createElement("span");
//     magicStar.classList.add("magic-star");
//     magicStar.innerHTML = '<svg viewBox="0 0 512 512"><path d="M512 255.1c0 11.34-7.406 20.86-18.44 23.64l-171.3 42.78l-42.78 171.1C276.7 504.6 267.2 512 255.9 512s-20.84-7.406-23.62-18.44l-42.66-171.2L18.47 279.6C7.406 276.8 0 267.3 0 255.1c0-11.34 7.406-20.83 18.44-23.61l171.2-42.78l42.78-171.1C235.2 7.406 244.7 0 256 0s20.84 7.406 23.62 18.44l42.78 171.2l171.2 42.78C504.6 235.2 512 244.6 512 255.1z" /></svg>';
//     return magicStar;
//   });
//
//   magic.append(...magicStars);
//
//   const animate = star => {
//     star.style.setProperty("--star-left", `${rand(-10, 100)}%`);
//     star.style.setProperty("--star-top", `${rand(-40, 80)}%`);
//
//     star.style.animation = "none";
//     star.offsetHeight;
//     star.style.animation = "";
//   }
//
//   magicStars.forEach((star, index) => {
//     setTimeout(() => {
//       animate(star);
//       setInterval(() => animate(star), interval);
//     }, timeout + index * (interval / 4));
//   });
// };
//
// export default { Magic };

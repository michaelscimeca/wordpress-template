module.exports = (elm) => {
  const animationElm = document.querySelectorAll('.js-ae');
  let keys = {
    s: false,
    g: false,
    a: false,
    r: false,
    t: false,
  };

  document.addEventListener("keydown", (event) => {
    if (event.key === "s") {
      keys.s = true;
    }
    if (event.key === "g") {
      keys.g = true;
    }

    if (event.key === "a") {
      keys.a = true;
    }

    if (event.key === "r") {
      keys.r = true;
    }

    if (event.key === "t") {
      keys.t = true;
    }

    if(keys.g && keys.s){
      document.querySelector('#grid-helper').classList.add('active')
    }

    if(keys.t && keys.s){
      document.querySelector('#dev-notes').classList.add('active')
    }

    if(keys.r && keys.a) {
      animationElm.forEach((item, i) => {
        item.classList.remove('js-active')
      });
    }
  });

  document.addEventListener("keyup", (event) => {
    keys = {
      a: false,
      g: false,
      s: false,
      r: false,
      t: false
    };
    document.querySelector('#grid-helper').classList.remove('active')
    document.querySelector('#dev-notes').classList.remove('active')

    animationElm.forEach((item, i) => {
      item.classList.add('js-active')
    });
  });
}

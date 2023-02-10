export default function (elm) {
  if (document.querySelector(elm)) {
    // Here will setup the cms to handle cms if needed
    const body = document.querySelector('body');
    const moduleContainer = document.querySelector('#module-one-container');
    const moduleCloseBtn = moduleContainer.querySelector('#js-close-btn');
    // Setup module in the cms and then apple that value class below
    const moduleOpenBtn = document.querySelectorAll('.module-1');

    moduleOpenBtn.forEach(item => {
      item.addEventListener('click', e => {
        body.classList.add('overflow-hidden-module');
        moduleContainer.classList.add('active');
      });
    });

    moduleCloseBtn.addEventListener('click', e => {
      body.classList.remove('overflow-hidden-module');
      moduleContainer.classList.remove('active');
    });
  }
}

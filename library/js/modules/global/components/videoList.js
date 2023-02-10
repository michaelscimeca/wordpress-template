const Plyr = require('plyr');

module.exports = (elm) => {
  const element = document.querySelector(elm);
  if (element) {
    const moduleContainer = document.querySelector('#js-video-list-module-container');
    const videoContainer = document.querySelector('#js-video-list-module-container #js-video-container');
    const list = document.querySelectorAll('#video-list ul li');
    const closeModuleBtn = document.querySelector('#js-close-btn');

    const onModuleClose = () => {
      moduleContainer.classList.remove("show");
      videoContainer.innerHTML = '';
    }

    closeModuleBtn.addEventListener('click', onModuleClose);
    moduleContainer.addEventListener('click', onModuleClose);

    list.forEach((item) => {
      item.addEventListener('click',(e)=> {
        videoContainer.innerHTML =
        `<div id="player" class="js-player"
         data-plyr-provider="${e.target.dataset.video_type}"
         data-plyr-embed-id="${e.target.dataset.video_id}">
         </div>`;

        const modulePlayer = document.querySelector('#js-video-list-module-container #player');
        let player = new Plyr(modulePlayer, {
          controls: [],
          autoplay: true,
          autopause: false,
          muted: true,
          clickToPlay: false,
          loop: {
            active: true
          }
        })

        player.on('ready', (event) => {
          moduleContainer.classList.add("show");
        });

      })
    });
  }
}

import Player from '@vimeo/player';

function Video(elm) {
  const element = document.querySelector(elm);
  if (element) {
    const player = new Player(element, {
      background: true,
      autoplay: true,
      playsinline: true,
      muted: true,
      loop: true,
      controls: false,
      autopause: false,
      dnt: false,
      interactive_params: 1,
    });
  }
}

export default { Video };

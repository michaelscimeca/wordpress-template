'use strict';
import '../scss/app.scss';
import DetectBrowser from './modules/global/ua-detection';
import Hero_Image_Slider from './modules/global/components/slider/hero-img-slider';
import Hero_Video_Slider from './modules/global/components/slider/hero-video-slider';
import HeroVideo from './modules/global/components/hero-video';

import Text_Scroll from './modules/global/text-scroll/text-scroll';
import Magnetic_btn from './modules/global/magnetic-buttons/magnetic-btn'
// import Locomotive from './modules/global/scroll/scrolling';
import SplitText from './modules/global/components/text-split';
// import InView from './modules/global/in-view/in-view';
import Slider_Gallery from './modules/global/components/slider/image-slider';
import Slider_gallery_thumbnail from './modules/global/components/slider/slider-gallery-thumbnail';
import Small_Gallery_Slider from './modules/global/components/slider/slider-small-image-gallery';
import Video_Slider_Gallery from './modules/global/components/slider/video-slider';
import Text_Image_Slider from './modules/global/components/slider/text-image-slider';
import ExploreSlider from './modules/global/components/explore';
import QuoteSlider from './modules/global/components/slider/quotes-slider';
import CookieNotification from './modules/global/components/cookie-notification';
import Notification from './modules/global/components/notification';
import Btn_Module from './modules/global/components/btn-module';
import Magic from './modules/global/components/magic';
import Accordion from './modules/global/components/accordion';
// import GoogleMaps360 from './modules/global/components/google-room-view';
import gsap from "gsap";

(function app () {
  function ready () {
    // if(location.hostname === 'localhost') require('./modules/helper')()
    require('./modules/helper')()
    DetectBrowser();

    require('./modules/global/reveal/scrollreavl')();
    require('./modules/global/post/post-search')('#js-input-search-container');
    require('./modules/global/post/fetch')('#js-fetch-post-api');
    require('./modules/global/components/videoList')('#js-video-list-module-container');
    require('./modules/global/components/map')('.js-acf-map');
    // require('./modules/global/components/room-view')('.map');
    require('./modules/global/components/slider/infinity-scroll')('#js-infinity-scroll');
    require('./modules/global/components/marquee')('#marquee');
    // require('./modules/global/components/circle-text-rotate')('#scroll-down-rotate');

    /// ems scripts
    ExploreSlider.Swipers('#js-explore');
    QuoteSlider.Swipers('#js-quote-slider');
    HeroVideo.Video('#js-hero-video');
    Hero_Image_Slider.Swipers('#js-home-image-slider');
    Hero_Video_Slider.Swipers('#js-hero-video-slider');
    Video_Slider_Gallery.Swipers('#video-slider-gallery');
    Text_Image_Slider.Swipers('#js-text-image-slider');
    Slider_Gallery.Swipers('#js-image-slider-gallery');
    Slider_gallery_thumbnail.Swipers('#image-slider-gallery-thumbnail');
    Small_Gallery_Slider.Swipers('#js-small-image-slider-gallery');

    CookieNotification('#js-cookie-notification');
    Notification('#js-notification');
    Btn_Module('#module-one-container');
    Accordion('#js-accordion-list-container');
    // GoogleMaps360.googleMaps('#room-view-360 .map')
    Text_Scroll('#scroll-text');
    // SplitText.splitText('.js-headline-split-text')
    Magnetic_btn('.magnetic-wrap');
    Magic.Magic('.magic');
    // InView('.js-bg-scroll');
    // Locomotive.Locomotive();
  }
  document.addEventListener('DOMContentLoaded', ready);

})();

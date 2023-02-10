function googleMaps(elm) {
  if (document.querySelector(elm)) {
    const maps = document.querySelectorAll('.map');
    maps.forEach((item, i) => {

    });
    const panorama = new google.maps.StreetViewPanorama(
      map,
      {
        pano: 'https://paragoncasinoresort.flywheelstaging.com/wp-content/uploads/2021/02/North-King-7-min_1-scaled.jpg',
        visible: true,
        panControl: false,
        zoomControl: false,
        addressControl: false,
        scrollwheel: false,
        panoProvider: getCustomPanorama
      }
    );

    panorama.registerPanoProvider(getCustomPanorama);

    function getCustomPanorama (pano) {
      return {
        tiles: {
          tileSize: new google.maps.Size(8192, 8192 / 2),
          worldSize: new google.maps.Size(8192, 8192 / 2),
          centerHeading: 170,
          getTileUrl: function () {
            return pano;
          }
        }
      };
    }
  }
}

export default { googleMaps };

<?php

// In order use of the Google Maps JavaScript API, you must first register a valid API key. To obtain an API key, please follow Google’s Get an API Key instructions. The Google Maps field requires the following APIs; Maps JavaScript API, Geocoding API and Places API.
function my_acf_google_map_api( $api ){
  $api['key'] = 'AIzaSyDHwfZIFcW_UU6FtQIJHpnmGj7AD61Onw0';
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Method 2: Setting.
function my_acf_init() {
  acf_update_setting('google_api_key', 'AIzaSyDHwfZIFcW_UU6FtQIJHpnmGj7AD61Onw0');
}
add_action('acf/init', 'my_acf_init');


?>

<?php
/***************************************************************
* Loading CSS / JS dynamically
****************************************************************/

/* === Register & Enqueue the Scripts & Styles. === */
function normcore_load_js_css() {
  if (!is_admin()) {
    function env($file) {
      return get_stylesheet_directory_uri() . (substr(get_site_url(), -6) === '.local' ? '/dev' : '/dist') . $file;
    }
    function time_v($file) {
      return filemtime( get_stylesheet_directory() . $file );
    }
    /* === CUSTOM FONTS === */
    wp_register_style('ggdefault_fonts', 'https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap', array(), '', 'all');
    wp_register_style('ggdefault_fontss', 'https://fonts.googleapis.com/css2?family=Heebo:wght@400;600&display=swap', array(), '', 'all');
    wp_register_style('ggfont_awesome_fonts', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '', 'all');

		/* === STYLESHEET === */
		wp_register_style(
     'ggdefault_stylesheet',
      env('/js/app.css'),
      [],
      time_v('/dist/js/app.css') . "2",
      'all'
    );

		/* === JAVASCRIPT === */
		wp_register_script(
      'ggdefault_js',
      env('/js/app.js'),
      [],
      time_v('/dist/js/app.js') . "2",
      true
    );

		/* === enqueuing styles and scripts  === */
    wp_enqueue_script('ggdefault_js');
    wp_enqueue_style('ggdefault_fonts');
    wp_enqueue_style('ggdefault_fontss');

    wp_enqueue_style('ggfont_awesome_fonts');
		wp_enqueue_style('ggdefault_stylesheet');
    }
 }

 /* ===
 * wp_enqueue_scripts is the proper hook to use when enqueuing
 * items that are meant to appear on the front end.
 === */
 add_action( 'wp_enqueue_scripts', 'normcore_load_js_css' );

?>

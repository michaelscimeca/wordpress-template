<?php
/***************************************************************
* Remove JQuery Migrate
****************************************************************/
// 
// function remove_jquery_migrate( $scripts ) {
//   if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
//     $script = $scripts->registered['jquery'];
//
//     if ( $script->deps ) { // Check whether the script has any dependencies
//       $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
//     }
//   }
// }
//
// add_action( 'wp_default_scripts', 'remove_jquery_migrate' );
// add_filter( 'wp_enqueue_scripts', 'change_default_jquery', PHP_INT_MAX );
//
// function change_default_jquery( ){
//     wp_dequeue_script( 'jquery');
//     wp_deregister_script( 'jquery');
// }
?>

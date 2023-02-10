<?php
/**
* Add REST API support to an already registered post type.
*/
add_filter( 'register_post_type_args', 'my_post_type_args', 10, 2 );

function my_post_type_args( $args, $post_type ) {
  if ( 'entertainment-post' === $post_type ) {
    $args['show_in_rest'] = true;
    // Optionally customize the rest_base or rest_controller_class
    $args['rest_base']             = 'entertainment-post';
    $args['rest_controller_class'] = 'WP_REST_Posts_Controller';
  }

  return $args;

}

?>

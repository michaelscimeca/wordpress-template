<?php
function normcore_custom_post_types( $array ) {
  for ( $i = 0; $i < count( $array );
  $i++ ) {
    $labels = array(
      'name' => $array[ $i ][ 'name' ],
      'singular_name' => $array[ $i ][ 'singular' ],
      'add_new_item' =>  $array[ $i ][ 'add_new_item' ],
      'add_new' =>  $array[ $i ][ 'add_new' ],
      'edit_item' => $array[ $i ][ 'edit_item' ]
    );
    $args = array(
      'labels' => $labels,
      'description' => ( isset( $array[ $i ][ 'desc' ] ) ) ? $array[ $i ][ 'desc' ] : '',
      'public' => ( isset( $array[ $i ][ 'public' ] ) ) ? $array[ $i ][ 'public' ] : true,
      'show_ui' => ( isset( $array[ $i ][ 'show_ui' ] ) ) ? $array[ $i ][ 'show_ui' ] : true,
      'show_in_rest' => ( isset( $array[ $i ][ 'show_in_rest' ] ) ) ? $array[ $i ][ 'show_in_rest' ] : false,
      'has_archive' => ( isset( $array[ $i ][ 'has_archive' ] ) ) ? $array[ $i ][ 'has_archive' ] : true,
      'show_in_menu' => ( isset( $array[ $i ][ 'show_in_menu' ] ) ) ? $array[ $i ][ 'show_in_menu' ] : true,
      'menu_position' => ( isset( $array[ $i ][ 'position' ] ) ) ? $array[ $i ][ 'position' ] : 25,
      'exclude_from_search' => ( isset( $array[ $i ][ 'exclude_from_search' ] ) ) ? $array[ $i ][ 'exclude_from_search' ] : false,
      'capability_type' => ( isset( $array[ $i ][ 'capability_type' ] ) ) ? $array[ $i ][ 'capability_type' ] : 'post',
      'map_meta_cap' => ( isset( $array[ $i ][ 'map_meta_cap' ] ) ) ? $array[ $i ][ 'map_meta_cap' ] : true,
      'hierarchical' => ( isset( $array[ $i ][ 'hierarchical' ] ) ) ? $array[ $i ][ 'hierarchical' ] : false,
      'rewrite' => array( 'slug' => $array[ $i ][ 'slug' ], 'with_front' => true ),
      'query_var' => ( isset( $array[ $i ][ 'query_var' ] ) ) ? $array[ $i ][ 'query_var' ] : true,
    );
    if ( isset( $array[ $i ][ 'taxonomies' ] ) ) {
      $args[ 'taxonomies' ] = array( 'category' );
    }
    register_post_type( $array[ $i ][ 'slug' ], $args );
  }
}
function normcore_create_post_types() {
register_taxonomy( 'room_types', 'rooms', array(
    'label' => __( 'Room Types' ),
    'rewrite' => array( 'slug' => 'room_types' ),
    'hierarchical' => true,
  )
);
  register_taxonomy( 'room_promotions', 'rooms', array(
    'label' => __( 'Room Promotions' ),
    'rewrite' => array( 'slug' => 'room_promotions' ),
    'hierarchical' => true,
  )
);
$postTypes = array(
  array(
    'name' => 'Entertainment',
    'singular' => 'Entertainment-Post',
    'slug' => 'entertainment-post',
    'add_new_item' => 'Add Entertainment',
    'add_new' => 'Add Entertainment',
    'edit_item' => 'Edit Entertainment'
  ),
  array(
    'name' => 'Room',
    'singular' => 'Rooms',
    'slug' => 'Rooms',
    'add_new_item' => 'Add Room',
    'add_new' => 'Add Room',
    'edit_item' => 'Edit Room',
    'taxonomies' => array( 'types' )
  )
);
normcore_custom_post_types( $postTypes );
}
add_action( 'init', 'normcore_create_post_types' );


add_filter( 'manage_rooms_posts_columns', 'add_room_types_and_promotions_columns' );
function add_room_types_and_promotions_columns( $columns ) {

    $columns['room_types'] = __( 'Room Types' );
    $columns['room_promotions'] = __( 'Room Promotions' );
    $date = $columns['date'];
    unset( $columns['date'] );
    $columns['date'] = $date;
    return $columns;
}

add_action( 'manage_rooms_posts_custom_column', 'populate_room_types_and_promotions_columns', 10, 2 );
function populate_room_types_and_promotions_columns( $column, $post_id ) {
    switch ( $column ) {
        case 'room_types':
            $taxonomy = 'room_types';
            break;
        case 'room_promotions':
            $taxonomy = 'room_promotions';
            break;
    }
    $terms = get_the_terms( $post_id, $taxonomy );
    if ( $terms && ! is_wp_error( $terms ) ) {
        echo '<ul>';
        foreach ( $terms as $term ) {
            echo '<li>' . $term->name . '</li>';
        }
        echo '</ul>';
    }
}
add_filter('manage_rooms_posts_columns', 'remove_category_column');
function remove_category_column($columns) {
    unset($columns['categories']);
    return $columns;
}
?>

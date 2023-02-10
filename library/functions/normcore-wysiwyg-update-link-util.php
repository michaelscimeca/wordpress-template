<?php
// Query for attachments
add_filter( 'wp_link_query_args', 'link_query_args' );
function link_query_args( $query ) {
    $query['post_status'] = array('publish','inherit');
    $query['post_type'] = array( 'post','page','attachment');

    return $query;
}

// Link to media file URL instead of attachment page
add_filter( 'wp_link_query', 'link_query_results' );
function link_query_results( $results ) {

    foreach ( $results as $index => &$result ) {
        if ( $result['info'] === 'Page' || strtotime($result['info']) ) {
            $pageArr[] = $result;
        }

        if ( $result['info'] === 'Media' ) {
            /*
            // Remove certain MIME types
            if( in_array( get_post_mime_type( $result['ID'] ), array('image/jpeg') )  ){
                unset($results[$index]);
            }
            */
            $result['permalink'] = wp_get_attachment_url( $result['ID'] );
            $result['info'] = get_post_mime_type( $result['ID'] );
            $mediaArr[] = $result;
        }
    }
    usort($pageArr, function($a, $b){
        return strcmp($a['title'], $b['title']);
    });

    array_multisort(array_column($mediaArr, 'info'), SORT_ASC, SORT_STRING,
                    array_column($mediaArr, 'title'), SORT_ASC, SORT_STRING,
                    $mediaArr);
    $results = array_merge($pageArr, $mediaArr);
    return $results;
}

?>

<?php
/***************************************************************
* util
****************************************************************/
function gg_character_limit($content, $x = 120) {
  $stringspace = str_replace(" ","", $content);
  $slength = strlen($stringspace);
  if ($slength > $x) {
    $shorten = substr($content, 0, $x);
    $strip = strip_tags($shorten);
    return '<p>' .$strip . ' ...' . '</p>';
  } else {
    return $content ;
  }
}

function gg_getSpacingValues($section_spacing) {
  $spacing = [];
  $top_margin = $section_spacing['top_spacing']['margin_spacing'];
  $top_padding = $section_spacing['top_spacing']['padding_spacing'];
  $bottom_margin = $section_spacing['bottom_spacing']['margin_spacing'];
  $bottom_padding = $section_spacing['bottom_spacing']['padding_spacing'];
  $defualt_padding = $section_spacing['section_padding'];
  $defualt_margin = $section_spacing['section_margin'];

  if (strlen($defualt_margin) > 0) {
    $spacing[] = $defualt_margin;
  }
  if (strlen($defualt_padding) > 0) {
    $spacing[] = $defualt_padding;
  }

  if (strlen($top_margin) > 0) {
    $spacing[] = $top_margin;
  }
  if (strlen($top_padding) > 0) {
    $spacing[] = $top_padding;
  }
  if (strlen($bottom_margin) > 0) {
    $spacing[] = $bottom_margin;
  }
  if (strlen($bottom_padding) > 0) {
    $spacing[] = $bottom_padding;
  }
  $spacing = implode(" ", $spacing);

  return $spacing;
}

function gg_showCategory($room_types) {
 if ( $terms = get_the_terms( $post->ID, $room_types ) ):
  foreach ( $terms as $term ):
    echo $term->name . ' ';
  endforeach;
endif;
}


function gg_contentLogic($header_content) {
  $classes = [];
  if (empty($header_content['buttons'])) {
    $classes[] = 'no-button';
  }
  if (empty($header_content['paragraph'])) {
    $classes[] = 'no-paragraph';
  }
  $show = implode(' ', $classes);
  echo $show;
}

function gg_display_category_names( $categories ) {
    if ( ! empty( $categories ) ) {
        $category_names = '';
        foreach ( $categories as $category ) {
            $category = get_category( $category );
            $category_names .= $category->name . ' ';
        }
        echo rtrim( $category_names );
    }
}
?>

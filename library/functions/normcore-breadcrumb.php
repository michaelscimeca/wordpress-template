<?php
function get_breadcrumb() {
  if(!is_front_page()) {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
      echo "  >  ";
      the_category(' • ');
      if (is_single()) {
        echo "   >   ";
        the_title();
      }
    } elseif (is_page()) {
      echo "  >  ";
      echo the_title();
    } elseif (is_search()) {
      echo "  >  Search Results for... ";
      echo '"<em>';
      echo the_search_query();
      echo '</em>"';
    } elseif (is_archive()) {
      echo "  >  ";
      the_archive_title();
    }
  }
}
?>

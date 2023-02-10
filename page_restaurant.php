<?php
/* Template Name: Restaurant page

* The template for displaying Home pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that
* other 'pages' on your WordPress site will use a different template.
*
* @package normcore
* @since NormCore 4.0
*/

get_header(); ?>
  <?php
  // Start the loop.
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    // Include the page content template.
    get_template_part( '/template-parts/pages/content', 'restaurant' );
    // End of the loop.
  endwhile;
  else :
    echo '<p>No Page Found</p>';
  endif;
  ?>
<?php get_footer(); ?>

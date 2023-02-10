<?php
/**
* The template for displaying all single posts and attachments
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
	get_template_part( 'template-parts/content', get_post_format() );
	// End of the loop.
endwhile;
else :
	echo '<p>No Page Found</p>';
endif;
?>
<?php get_footer(); ?>

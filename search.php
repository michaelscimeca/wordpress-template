<?php
/**
 * The template for displaying search results pages
 *
 * @package normcore
 * @since NormCore 2.0
 */

get_header(); ?>
	<section id="search" class="content">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php printf( 'Search Results for: %s', '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
				get_template_part( 'template-parts/content', 'search' );
			// End the loop.
			endwhile;
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => 'Previous page',
				'next_text'          => 'Next page',
				'before_page_number' => '<span class="meta-nav screen-reader-text">Page </span>',
			) );
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</section>
<?php get_footer(); ?>

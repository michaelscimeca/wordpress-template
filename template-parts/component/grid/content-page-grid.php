<?php
/**
* Button Template
*
* @package normcore
* @since NormCore 4.0
*/
?>

<?php
$section_spacing = $args[ 'section_spacing' ];
$spacing = gg_getSpacingValues($section_spacing);
$header_section = $args['header_section'];
$page_link = $args['page_link'];
?>

<section id="page-grid" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'medium-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
  <div class="row">
    <div class="start:w-full column">
      <ul>
        <?php foreach ( $page_link as $post_ids ) : ?>
          <li>
            <a href="<?php echo get_permalink( $post_ids ); ?>">
              <div class="image-aspect">
                <?php $featured = get_field( 'featured_image', $post_ids); ?>
                <img src="<?php echo $featured[ 'url' ]; ?>" alt="<?php echo $featured['alt']; ?>" />
              </div>
              <div class="standard-card-content">
                <?php echo get_the_title( $post_ids ); ?>
              </div>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

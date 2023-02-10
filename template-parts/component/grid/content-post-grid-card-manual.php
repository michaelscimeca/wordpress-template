<?php
/**
* Button Template
*
* @package normcore
* @since NormCore 4.0
*/
?>

<?php

$args = array(
  'post_type' => 'rooms',
  'tax_query' => array(
    'relation' => 'AND',
    array(
      'taxonomy' => 'room_types',
      'field'    => 'slug',
      'terms'    => 'premium-presidential-suite',
    ),
    array(
      'taxonomy' => 'room_promotions',
      'field'    => 'slug',
      'terms'    => 'one_day_promotion',
    ),
  ),
);

$query = new WP_Query( $args );
$args = array(
  'post_type' => 'rooms',
  'post__not_in' => $query->get_posts(),
);
$loop = new WP_Query( $args );
?>
<?php
$section_spacing = $args[ 'section_spacing' ];
$spacing = gg_getSpacingValues($section_spacing);
$header_section = $args['header_section'];
$card_grid = $args['card_list'];
$index = 0;
?>
<section id="posttype-card-grid" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
  <div class="row">
    <div class="start:w-full column">
      <ul id="card-grid-cont">
        <?php while ( $loop->have_posts() ) :$loop->the_post(); ?>
          <li data-index="<?php echo $index; ?>">
              <div class="image-aspect js-ae">
                <?php $featured = get_field( 'featured_image' ); ?>
                <img src="<?php echo $featured[ 'url' ]; ?>" alt="<?php echo $featured['alt']; ?>" />
              </div>
              <div class="standard-card-content">
                <?php gg_showCategory('room_types'); ?>
              </div>
          </li>
          <?php $index++; ?>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </ul>
    </div>
  </div>
</section>

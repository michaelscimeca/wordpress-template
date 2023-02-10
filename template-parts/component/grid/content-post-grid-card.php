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
$choosen_post = $args['choosen_post'];
?>

<section id="posttype-card-grid" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>
  <div class="row">
    <div class="start:w-full column">
      <ul id="card-grid-cont">
        <?php foreach ($choosen_post as $post ) : ?>
          <li>
            <?php setup_postdata ( $post ); ?>
            <a href="<?php the_permalink(); ?>">
              <div class="image-aspect">
                <?php $featured = get_field('featured_image', $post->id); ?>
                <img src="<?php echo $featured[ 'url' ]; ?>" alt="<?php echo $featured['alt']; ?>" />
              </div>
              <div class="standard-card-content js-ae">
                <h2><?php the_title(); ?></h2>
                <?php $terms = get_the_terms($post->ID, 'room_types'); ?>
                <div class="terms">
                  <?php foreach ($terms as $term ) : ?>
                    <?php echo $term->name; ?>
                  <?php endforeach; ?>
                </div>
              </div>
            </a>
          </li>
        <?php endforeach; ?>
        <?php wp_reset_query(); ?>
      </ul>
    </div>
  </div>
</section>

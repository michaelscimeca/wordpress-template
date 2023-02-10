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
$card_grid = $args['card_list'];
$index = 0;
?>
<section id="card-grid" class="js-ae <?php echo $spacing; ?>" data-scroll-section data-threshold=".3">
  <?php get_template_part( 'template-parts/component/comp/content', 'header-component', ['header_content' => $header_section, 'header_layout' => 'standard-headline', 'header_column' => 'start:w-full lg:w-8/12']); ?>

  <div class="row">
    <div class="start:w-full column">
      <ul id="card-grid-cont">
        <?php foreach ($card_grid as $value): ?>
          <li data-index="<?php echo $index; ?>">
            <div class="card-cont">
              <div class="image-aspect js-ae">
                <img src="<?php echo $value['card']['card_image']['url']; ?>"
                alt="<?php echo $value['card']['card_image']['alt']; ?>" />
                <div class="caption">
                  <?php echo $value['card']['image_caption']; ?>
                </div>
              </div>
              <div class="standard-card-content js-ae">
                <?php echo $value['card']['card_headline']; ?>
                <?php echo $value['card']['card_text']; ?>
                <?php get_template_part( 'template-parts/component/comp/content', 'btn-component', ['buttons' => $value['card']['buttons']]); ?>
              </div>
            </div>
          </li>
          <?php $index++; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
